<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

    public function menu_pagination()
    {
    	$menu = Menu::all();
        $mark="Mark Cesar Llamar";
        return view('menu.menu_pagination', compact('menu','mark'));
    }
    function store_menu(Request $r)
 {
 	$menu = new Menu();
 	$menu->name = $r->a_name;
 	$menu->description = $r->a_description;
 	$menu->price = $r->a_price;
 	$menu->category = $r->a_categ;
 	$menu->save();
 	return back();
 }
     function update_menu(Request $r)
 {
    $menu = Menu::where('id','=',$r->ea_id)->first();
    $menu->name = $r->ea_name;
    $menu->description = $r->ea_description;
    $menu->price = $r->ea_price;
    $menu->category = $r->ea_categ;
    $menu->save();
    return back();
 }
  function delete_menu(Request $r)
 {
    $post = Menu::where('id','=',$r->da_id)->first();
    $post->delete();
    return back();
 }
}
