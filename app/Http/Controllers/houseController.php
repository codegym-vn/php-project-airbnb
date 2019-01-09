<?php

namespace App\Http\Controllers;

use App\House;
use App\Http\Requests\HouseRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class houseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses = House::all();
        return view('house.list', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('house.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(HouseRequest $request)
    {
        $house = new House();
        $house->title = $request->input('title');
        $house->description = $request->input('description');
        $house->content = $request->input('content');
        $house->price = $request->input('price');
        $house->address = $request->input('address');
        $house->status = $request->input('status');
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $house->image = $path;
        }
        $house->save();

        Session::flash('success', 'Tao moi thanh cong');
        return redirect(route('house.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $house = House::findOrFail($id);
        return view('house.show', compact('house'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $house = House::findOrFail($id);
        return view('house.edit', compact('house'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $house = House::findOrFail($id);
        $house->title = $request->input('title');
        $house->description = $request->input('description');
        $house->content = $request->input('content');
        $house->price = $request->input('price');
        $house->address = $request->input('address');
        $house->status = $request->input('status');
        if ($request->hasFile('image')) {

            $currentImg = $house->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }

            $image = $request->image;
            $path = $image->store('images', 'public');
            $house->image = $path;

        }
        $house->save();

        Session::flash('success', 'Cap nhat thanh cong');
        return redirect(route('house.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $house = House::findOrFail($id);
        $image = $house->image;
        if ($image) {
            Storage::delete('/public/' . $image);
        }
        $house->delete();

        return redirect(route('house.index'));
    }
}
