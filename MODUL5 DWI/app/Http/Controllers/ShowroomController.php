<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Showroom::orderBy('name','ASC')->get();
        if($cars->count() < 1)
        {
            return redirect()->route('cars.create');
        }
        $title = 'List Car';
        return view('car.index',compact('cars','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create Car';
        return view('car.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required'],
            'owner' => ['required'],
            'brand' => ['required'],
            'purchase_date' => ['required'],
            'description' => ['required'],
            'image' => ['required','image'],
            'status' => ['required'],
        ]);


        $data = request()->all();
        $data['image'] = request()->file('image')->store('car','public');
        $data['user_id'] = auth()->id();
        Showroom::create($data);

        return redirect()->route('cars.index')->with('success','Mobil berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Showroom::findOrFail($id);
        $title = 'Detail Mobil ' . $car->name;
        return view('car.show',compact('car','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car  = Showroom::findOrFail($id);
        $title = 'Update Car';
        return view('car.edit',compact('title','car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => ['required'],
            'owner' => ['required'],
            'brand' => ['required'],
            'purchase_date' => ['required'],
            'description' => ['required'],
            'image' => ['image'],
            'status' => ['required'],
        ]);

        $car = Showroom::findOrFail($id);

        $data = request()->all();
        if(request()->file('image'))
        {
            Storage::disk('public')->delete($car->image);
            $data['image'] = request()->file('image')->store('car','public');
        }else{
            $data['image'] = $car->image;
        }
        $car->update($data);

        return redirect()->route('cars.index')->with('success','Mobil berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Showroom::findOrFail($id);
        if($car->image)
        {
            Storage::disk('public')->delete($car->image);
        }
        $car->delete();
        return redirect()->route('cars.index')->with('success','Mobil berhasil dihapus!');
    }
}
