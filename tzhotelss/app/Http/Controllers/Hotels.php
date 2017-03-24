<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use Geocoder\Geocoder;
//use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Http\Controllers\Controller;

class Hotels extends Controller
{
    //

    public function index($id = null) {
        if ($id == null) {
            return Hotel::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }
    public function store(Request $request) {
        $hotel = new Hotel;

        $hotel->name = $request->input('name');
        $hotel->description = $request->input('description');
        $hotel->type = $request->input('type');
        $hotel->image = $request->input('image');
        $hotel->save();

        return 'Hotel record successfully created with id ' . $hotel->id;
    }

    public function show($id) {
        return Hotel::find($id);
    }
    public function update(Request $request, $id) {
        $hotel = Hotel::find($id);

        $hotel->name = $request->input('name');
        $hotel->description = $request->input('description');
        $hotel->type = $request->input('type');
        $hotel->image = $request->input('image');
        $hotel->save();

        return "Sucess updating hotel #" . $hotel->id;
    }
    public function destroy($id) {
        $hotel = Hotel::find($id);
        $hotel->delete();

        return "Hotel record successfully deleted #" . $id;
    }


}
