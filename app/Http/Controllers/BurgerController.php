<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Burger;
class BurgerController extends Controller
{
    //
    public function index(){
        //$burgs=Burger::all();
        $burgs=Burger::orderBy('name','desc')->get();
        // $burgs=[
        //     ['type'=>'Chicken Normal','base'=>'Without Cheese'],
        //     ['type'=>'Chicken Normal','base'=>'With Cheese'],
        //     ['type'=>'Chicken Spicy','base'=>'Without Cheese'],
        //     ['type'=>'Chicken Spicy','base'=>'With Cheese'],
        //     ['type'=>'Chicken Supreme','base'=>'Mild'],
        //     ['type'=>'Chicken Supreme','base'=>'Naga'],
        //     ['type'=>'Beef Normal','base'=>'Without Cheese'],
        //     ['type'=>'Beef Normal','base'=>'With Cheese'],
        //     ['type'=>'Beef Spicy','base'=>'Without Cheese'],
        //     ['type'=>'Beef Spicy','base'=>'Cheese'],
        //     ['type'=>'Beef Supreme','base'=>'Mild'],
        //     ['type'=>'Beef Supreme','base'=>'Naga'],
        //     ] ;

        $name=request('name');

        return view('burgers.index',[
            'burgers'=>$burgs,
            'name'=>$name
            ]
        );
    }
    public function show($id){
        $burger = Burger::findOrFail($id);
        return view('burgers.show',compact('burger'));
    }
    public function create(){
        return view('burgers.create');
    }
    public function destroy($id){
        $burger=Burger::findOrFail($id);
        $burger->delete();
        return redirect('/burgers');
    }
    public function store(){
        // error_log(request('name'));
        // error_log(request('type'));
        // error_log(request('base'));
        $burger= new Burger();
        $burger->name=request('name');
        $burger->type=request('type');
        $burger->base=request('base');
        $burger->level=request('level');
        $burger->addons=request('addons');
        $burger->save();
        return redirect('/')->with('msg','Thanks for ordering ');
    }
}
