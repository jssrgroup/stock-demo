<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    protected $table = 'equipment';
    protected $primaryKey = 'INDX';
    public $timestamps = false;

    public function scopeAllData($q , $data){
        $q->with(['View'=>function($r){
            $r->select(
                'view.*'
            );
        }]);
        $q->leftJoin('schedule_main' , 'schedule_main.AUC' , 'equipment.AUC');
        $q->leftJoin('schedule_sub' , 'schedule_sub.ID_MAIN' , 'schedule_main.ID_MAIN');
        return $q;
    }

    public function View(){
        return $this->hasOne('\App\Models\ViewEquipment' , 'itemno' , 'ITEMNO');
    }

}
