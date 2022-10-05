<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentModel extends Model
{
    use HasFactory;
    protected $table = 'equipment';
    protected $primaryKey = 'INDX';
    public $timestamps = false;
}
