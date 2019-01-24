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
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'quantityOfBedroom' => 'required',
            'quantityOfBathroom' => 'required',
            'price' => 'required|numeric',
            'address' => 'required|min:5',
            'status' => 'required',
            'description' => 'required|min:5',
            'image.*' => 'required',
        ]);
        $house = new House();
        $house->title = $request->input('title');
        $house->quantityOfBedroom = $request->input('quantityOfBedroom');
        $house->quantityOfBathroom = $request->input('quantityOfBathroom');
        $house->price = $request->input('price');
        $house->address = $request->input('address');
        $house->user_id = $request->input('user_id');
        $house->status = $request->input('status');
        $house->description = $request->input('description');
//        dd($request->images);
        if ($request->hasFile('image')) {
            $files = [];
            foreach ($request->file('image') as $image) {
                $path = $image->store('images', 'public');
                array_push($files, $path);
            }
            $house->image = $files;
        }
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
        $house = House::with('orders')->find($id);
//        dd($house->orders[0]->checkIn);
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
        $request->validate([
            'title' => 'required|min:5',
            'quantityOfBedroom' => 'required',
            'quantityOfBathroom' => 'required',
            'price' => 'required|numeric',
            'address' => 'required|min:5',
            'status' => 'required',
            'description' => 'required|min:5',
            'photo.*' => 'sometimes|mimes:jpeg,jpg,png',
        ]);
        $house = House::findOrFail($id);
        $house->title = $request->input('title');
        $house->quantityOfBedroom = $request->input('quantityOfBedroom');
        $house->quantityOfBathroom = $request->input('quantityOfBathroom');
        $house->price = $request->input('price');
        $house->address = $request->input('address');
        $house->status = $request->input('status');
        $house->description = $request->input('description');
        if ($request->hasFile('photo')) {
            $files = [];
            foreach ($request->file('photo') as $image) {
                $path = $image->store('images', 'public');
                array_push($files, $path);
            }
            $house->image = $files;
        }
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
