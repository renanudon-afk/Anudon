<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuCategory;

class MenuCategoryController extends Controller
{
   function index(){
   	$menu_categ = MenuCategory::all();
   	return view('menu_category.menu_category_pagination', compact('menu_categ'));
   }
}
