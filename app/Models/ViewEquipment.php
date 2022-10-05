<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewEquipment extends Model
{
    use HasFactory;
    protected $table = 'view';
    protected $primaryKey = 'INDX';
    public $timestamps = false;
}
