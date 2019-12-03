<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyAttachment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $properties = Property::all();
        for ($i = 0; $i < count($properties); $i++) {
            $properties[$i]['main_image'] = PropertyAttachment::where('id_property', $properties[$i]->id_property)->first()['image_path'];
        }
        return view('welcome')->with(['properties' => $properties]);
    }
}
