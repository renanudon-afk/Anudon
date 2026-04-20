<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\User;

class APIMenuController extends Controller
{
    public function getData(Request $request)
    {
        // Retrieve data from the database using Eloquent
        $data = Menu::all();
      
        // Check if data is found
        if ($data->isEmpty()) {
            // If no data is found, return a 404 response
            return response()->json(['message' => 'No data found'], 404);
        }

        // If data is found, return it as JSON response
        return response()->json($data);
    }
     public function user(Request $request)
    {
        // Retrieve data from the database using Eloquent
        $data = User::where('email','=','markabonllamar@gmail.com')->first();

      
    
        // If data is found, return it as JSON response
        return response()->json($data);
    }
    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'm_name' => 'required|string|max:255',
            'm_description' => 'required|string|max:255'
        ]);

        // Save data
        $data = new Menu();
        $data->name = $request->m_name;
        $data->description = $request->m_description;
        $data->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Data saved successfully',
            'data' => $data
        ]);
    }
}
