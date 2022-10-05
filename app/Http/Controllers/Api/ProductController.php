<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipment;
class ProductController extends Controller
{
    public function index(Request $request){
        $equipments = Equipment::AllData('aa')
        ->select(
            'equipment.INDX',
            'equipment.ITEMNO',
        )
        ->take('100')
        ->where('equipment.AUC' , 'F194')
        ->paginate(12);
        return $equipments;
    }
}
