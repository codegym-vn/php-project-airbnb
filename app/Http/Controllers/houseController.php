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
        $houses = House::orderBy('created_at', 'desc')->paginate(3);
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
    public function store(Request $request, HouseRequest $houseRequest)
    {
        $house = new House();
        $house->title = $houseRequest->input('title');
        $house->quantityOfBedroom = $houseRequest->input('quantityOfBedroom');
        $house->quantityOfBathroom = $houseRequest->input('quantityOfBathroom');
        $house->price = $houseRequest->input('price');
        $house->address = $houseRequest->input('address');
        $house->status = $houseRequest->input('status');
        $house->description = $houseRequest->input('description');
        if ($request->hasFile('images')) {
            $files = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('images', 'public');
                array_push($files, $path);
            }
            $house->image = $files;
        }
//        if ($request->hasFile('image1')) {
//            $image1 = $request->image1;
//            $path = $image1->store('images', 'public');
//            $house->image1 = $path;
//        }
//        if ($request->hasFile('image2')) {
//            $image2 = $request->image2;
//            $path = $image2->store('images', 'public');
//            $house->image2 = $path;
//        }
        $house->save();

        Session::flash('success', 'Tạo mới thành công!');
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
    public function update(Request $request, HouseRequest $houseRequest, $id)
    {
        $house = House::findOrFail($id);
        $house->title = $houseRequest->input('title');
        $house->quantityOfBedroom = $houseRequest->input('quantityOfBedroom');
        $house->quantityOfBathroom = $houseRequest->input('quantityOfBathroom');
        $house->price = $houseRequest->input('price');
        $house->address = $houseRequest->input('address');
        $house->status = $houseRequest->input('status');
        $house->description = $houseRequest->input('description');
//        if ($request->hasFile('image')) {
//            foreach ($request->images as $image) {
//
//            }
//            $currentImg = $house->image;
//            if ($currentImg) {
//                Storage::delete('/public/' . $currentImg);
//            }
//
//            $image = $request->image;
//            $path = $image->store('images', 'public');
//            $house->image = $path;
//
//        }
//        if ($request->hasFile('image1')) {
//
//            $currentImg = $house->image1;
//            if ($currentImg) {
//                Storage::delete('/public/' . $currentImg);
//            }
//
//            $image1 = $request->image1;
//            $path = $image1->store('images', 'public');
//            $house->image1 = $path;
//
//        }
//        if ($request->hasFile('image2')) {
//
//            $currentImg = $house->image2;
//            if ($currentImg) {
//                Storage::delete('/public/' . $currentImg);
//            }
//
//            $image2 = $request->image2;
//            $path = $image2->store('images', 'public');
//            $house->image2 = $path;
//
//        }
        $house->save();

        Session::flash('success', 'Cập nhập thành công');
        return redirect(route('house.show', $house->id));
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

        Session::flash('delete', 'Bạn đã xóa thành công!');
        return redirect(route('house.index'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('house.index');
        }
        $houses = House::where('title', 'LIKE', '%' . $keyword . '%')->paginate(3);

        return view('house.list', compact('houses'));
    }
}
