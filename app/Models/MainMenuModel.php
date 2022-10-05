<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainMenuModel extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $primaryKey = 'INDX';
    public $timestamps = false;
}
