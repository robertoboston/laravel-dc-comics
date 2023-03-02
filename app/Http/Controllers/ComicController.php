<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index(){
        $fumetti = Comic::all();
        return view('comics',compact('fumetti'));

    }

    public function show($id){
        $comic = Comic::find($id);

        $single = [
            'single'=> $comic

        ];

        return view('detail_comics',$single);


    }
}
