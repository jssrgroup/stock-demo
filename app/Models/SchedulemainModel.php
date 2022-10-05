<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchedulemainModel extends Model
{
    use HasFactory;
    protected $table = 'schedule_main';
    protected $primaryKey = 'INDX';
    public $timestamps = false;
    public function Equipments(){
        return $this->hasMany('\App\Models\EquipmentModel','AUC','AUC');
    }
    public function Equipment(){
        return $this->hasOne('\App\Models\EquipmentModel','AUC','AUC');
    }
}
