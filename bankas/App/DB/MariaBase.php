<?php

namespace Bankas\App\DB;

use Bankas\App\DB\DataBase;
use PDO;

class MariaBase implements DataBase
{
    private $pdo, $accounts;

    public function __construct($accounts)
    {
        $host = '127.0.0.1';
        $db   = 'forest';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $this->pdo = new PDO($dsn, $user, $pass, $options);
        $this->accounts = $accounts;
    }

    public function create(object $data) : int
    {
       // INSERT INTO table_name (column1, column2, column3, ...)   // cia is W3 SQL insert into
        // VALUES (value1, value2, value3, ...);

        $sql = "
        INSERT INTO {$this->accounts} (name, lastname, PC, AC, balance)            
        VALUES (?, ?, ?, ?, ?)
        ";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([$data->name, $data->lastname, $data->PC, $data->AC, $data->balance]);

        return $this->pdo->lastInsertId();      
    }

    public function update(int $id, object $data) : bool
    {
        // UPDATE table_name
        // SET column1 = value1, column2 = value2, ...
        // WHERE condition;

        $sql = "
        UPDATE {$this->accounts}
        SET name = ?, lastname = ?, PC = ?, balance = ?
        WHERE id = ?
        ";

        $stmt = $this->pdo->prepare($sql);
        
        return $stmt->execute([
            $data->name,
            $data->lastname,
            $data->PC,
            $data->balance,
            $id
        ]);
     }
       

    public function delete(int $id) : bool
    {
       //DELETE FROM table_name WHERE condition;  

        $sql = "
        DELETE FROM {$this->accounts}
        WHERE id = ?
        ";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function show(int $id) : object
    {
        // SELECT column1, column2,  
        // FROM table_name;          
        
        $sql = "
        SELECT*                     
        FROM {$this->accounts}
        WHERE id = ?
                                            
        ";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch();
    }
    

    public function showAll() : array
    {
        // SELECT column1, column2,
        // FROM table_name;        

        $sql = "
        SELECT*                    
        FROM {$this->accounts}
      
        ";

        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll(); 
        }
}