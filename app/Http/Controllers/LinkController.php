<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Imageupload;
use App\Image;

class LinkController extends Controller
{

	public function tablica(Request $request)
    {
    $images = Image::all();
       return view('tablica')->with('images', $images);;
        
    }
}
