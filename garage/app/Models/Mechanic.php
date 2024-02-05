<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
    ];
    protected static $sorts = [
        '' => 'Nerūšiuota',
        'name_asc' => 'Pavardė (A-Z)',
        'name_desc' => 'Pavardė (Z-A)',
        'truck_count_asc' => 'Sunkvežimių skaičius (didėjimo tvarka)',
        'truck_count_desc' => 'Sunkvežimių skaičius (mažėjimo tvarka)',
    ];

    public static function getSort()
    {
        
    }

    public function trucks()
    {
        return $this->hasMany(Truck::class);
    }
}

