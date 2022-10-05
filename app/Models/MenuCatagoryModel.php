<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCatagoryModel extends Model
{
    use HasFactory; 

    protected $table = 'equipment';
    protected $primaryKey = 'INDX';
    public $timestamps = false;

    // public function Equipments(){
    //     return $this->hasMany('\App\Models\Equipment','AUC','AUC');
    // }

    
}
