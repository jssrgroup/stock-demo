<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EquipmentModel;
use App\Models\SchedulemainModel;
use App\Models\MainMenuModel;
use App\Models\Equipment;

use App\Models\MenuCatagoryModel;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$equipment=EquipmentModel::take(10)->get();
        /*$sch=SchedulemainModel::with(['Equipments'=>function($q){
            $q->where('MAKER','KOMATSU');
        }])->first();
        foreach($sch->Equipments as $eq){
            echo $eq->ITEMNO;
            break;
        }*/
        //dd($sch);
        
        $main_menu=MainMenuModel::where('status','1')->where('menu','1')->orderBy('sort_id','asc')->get();
        $sub_menu=MainMenuModel::where('status','1')->where('main_menu','108')->orWhere('main_menu','13')
        ->orWhere('main_menu','157')
        ->orWhere('main_menu','127')
        ->orWhere('main_menu','92')
        ->orWhere('main_menu','136')
        ->orWhere('main_menu','143')
        ->orderBy('sort_id','asc')->get();

        //dd($sub_menu);
        $data['main_menu']=$main_menu;
        $data['sub_menu1']=$sub_menu;


        // $menu_cat = MenuCatagoryModel::take(1)->get();
        // $menu_cat = MenuCatagoryModel::orderBy('INDX', 'desc')->take(4)->get();
        $menu_cat = MenuCatagoryModel::where('AUC','F211')->orderBy('CATEGORY','asc')->groupBy('CATEGORY')->get();
        
        // dd($menu_cat);
        $data['menu_cat'] = $menu_cat;
        // return view('index');


        $equipment = Equipment::orderBy('INDX', 'desc')->take(4)->get();
        $data['equipment'] = $equipment;
        return view('index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
