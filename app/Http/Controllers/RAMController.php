<?php

namespace App\Http\Controllers;

use App\Models\RAM;
use Illuminate\Http\Request;

class RAMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ram = RAM::latest()->paginate(15);
      
        return view('ram.index',compact('ram'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ram.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'manufacturer' => 'required',
            'type' => 'required',
            'speed' => 'required',
            'capacity' => 'required',
            'supplier' => 'required',
            'warranty' => 'required',
            'price' => 'required',
        ]);

        RAM::create($request->all());

        return redirect()->route('ram.index')
                        ->with('success', 'RAM updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RAM  $ram
     * @return \Illuminate\Http\RespRnse
     */
    public function show(RAM $ram)
    {
        return view('ram.show', compact('ram'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RAM  $ram
     * @return \Illuminate\Http\Response
     */
    public function edit(RAM $ram)
    {
        return view('ram.edit',compact('ram'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RAM  $ram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RAM $ram)
    {
        $request->validate([
            'name' => 'required',
            'manufacturer' => 'required',
            'type' => 'required',
            'speed' => 'required',
            'capacity' => 'required',
            'supplier' => 'required',
            'warranty' => 'required',
            'price' => 'required',
        ]);

        $ram->update($request->all());
      
        return redirect()->route('ram.index')
                        ->with('success','RAM updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RAM  $ram
     * @return \Illuminate\Http\Response
     */
    public function destroy(RAM $ram)
    {
        $ram->delete();
       
        return redirect()->route('ram.index')
                        ->with('success','RAM deleted successfully');
    }
}
