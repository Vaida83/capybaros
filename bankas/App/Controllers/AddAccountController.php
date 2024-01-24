<?php

namespace Bankas\App\Controllers;

use Bankas\App\App;
use Bankas\App\Message;
use Bankas\App\DB\FileBase;
use Bankas\App\Request\AccountUpdateRequest;
use Bankas\App\Request\NewAccountRequest;

class AddAccountController
{

    public function index($request)
    {

        $writer = new FileBase('members'); 
        $members = $writer->showAll();

        $sort = $request['sort'] ?? null;
        if ($sort == 'size-asc') {
            usort($members, fn ($a, $b) => $a->lastname <=> $b->lastname);
            $sortValue = 'size-desc';
        } elseif ($sort == 'size-desc') {
            usort($members, fn ($a, $b) => $b->lastname <=> $a->lastname);
            $sortValue = 'size-asc';
        } else {
            $sortValue = 'size-asc';
        }

        $sort2 = $request['sort2'] ?? null;
        if ($sort2 == 'size-asc') {
            usort($members, fn ($a, $b) => $a->balance <=> $b->balance);
            $sortValue2 = 'size-desc';
        } elseif ($sort2 == 'size-desc') {
            usort($members, fn ($a, $b) => $b->balance <=> $a->balance);
            $sortValue2 = 'size-asc';
        } else {
            $sortValue2 = 'size-asc';
        }

        return App::view('addAccount/index', [
            'title' => 'Account List',
            'members' => $members,
            'sortValue' => $sortValue,
            'sortValue2' => $sortValue2,
        ]);
    }

    public function create()
    {
        return App::view('addAccount/create', [
            'title' => 'Create new account',
        ]);
    }

    public function store($request)
    {
        $name =  $request['name'] ?? null;
        $lastname =  $request['lastname'] ?? null;
        $PC =  $request['PC'] ?? null;
        $AC =  $request['AC'] ?? null;

        if (!NewAccountRequest::validate($request)) {
            return App::redirect("addAccount/create");
        }

        $writer = new FileBase('members');

        $members = $writer->showAll();

        foreach ($members as $member) {
            if ($PC == $member->PC) {
                Message::get()->Set('danger', 'Member with this personal code already exists');
                return App::redirect('addAccount/create');
            }
        }

        $writer->create((object) [
            'name' => $name,
            'lastname' => $lastname,
            'PC' => $PC,
            'AC' => $AC,
            'balance' => 0,
        ]);

        Message::get()->Set('success', 'Account was created');

        return App::redirect('addAccount');
    }


    public function confirmDelete($id)
    {
        return App::view('addAccount/confirmDelete', [
            'title' => 'Confirm Delete',
            'id' => $id
        ]);
    }

    public function destroy($id, $request)
    {

        $writer = new FileBase('members');
        $request = $writer->show($id);
        if ($request->balance == 0) {
            $writer->delete($id);
            Message::get()->set('info', 'Sąskaita buvo ištrinta');
        } else {
            Message::get()->set('danger', "Sąskaita nėra tuščia");
        }

        return App::redirect('addAccount');
    }

    public function edit($id)
    {

        $writer = new FileBase('members');
        $members = $writer->show($id);
        return App::view('addAccount/edit', [
            'title' => 'Edit account',
            'members' => $members
        ]);
    }

    public function update($id, $request)
    {

        $writer = new FileBase('members');
        $userData = $writer->show($id);

        if (!AccountUpdateRequest::validate($request, $userData)) {
            if ($request['withdraw']) {
                return App::redirect("addAccount/withdraw/$id");
            } elseif ($request['addMoney']) {
                return App::redirect("addAccount/edit/$id");
            }
        }

        if ($withdrawMoney = $request['withdraw']) {

            if ($withdrawMoney <=  $userData->balance && $withdrawMoney > 0) {
                $userData->balance -= $withdrawMoney;
            }
        } elseif ($addmoney = $request['addMoney']) {
            $userData->balance += $addmoney;
        }
        $writer->update($id, $userData);

        if ($withdrawMoney) {
            Message::get()->set('warning', "$withdrawMoney" . '€ was withdrawn from ' . "$userData->lastname" . " account.");
        } elseif ($addmoney) {
            Message::get()->set('success', "$addmoney" . '€ was added to ' . "$userData->name" . "'s account.");
        }


        return App::redirect('addAccount');
    }
    public function withdraw($id)
    {
        $writer = new FileBase('members');
        $members = $writer->show($id);

        return App::view('addAccount/withdraw', [
            'title' => 'Withdraw funds',
            'members' => $members
        ]);
    }
}