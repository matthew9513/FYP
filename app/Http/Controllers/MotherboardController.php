<?php

namespace App\Http\Controllers;

use App\Models\Motherboard;
use Illuminate\Http\Request;

class MotherboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motherboard = Motherboard::latest()->paginate(5);
      
        return view('motherboard.index',compact('motherboard'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('motherboard.create');
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
            'socketType' => 'required',
            'formFactor' => 'required',
            'memoryMax' => 'required',
            'memorySlots' => 'required',
            'supplier' => 'required',
            'warranty' => 'required',
            'price' => 'required',
        ]);

        Motherboard::create($request->all());

        return redirect()->route('motherboard.index')
                        ->with('success', 'Motherboard updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Motherboard  $motherboard
     * @return \Illuminate\Http\Response
     */
    public function show(Motherboard $motherboard)
    {
        return view('motherboard.show', compact('motherboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Motherboard  $motherboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Motherboard $motherboard)
    {
        return view('motherboard.edit',compact('motherboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Motherboard  $motherboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motherboard $motherboard)
    {
        $request->validate([
            'name' => 'required',
            'manufacturer' => 'required',
            'socketType' => 'required',
            'formFactor' => 'required',
            'memoryMax' => 'required',
            'memorySlots' => 'required',
            'supplier' => 'required',
            'warranty' => 'required',
            'price' => 'required',
        ]);

        $motherboard->update($request->all());
      
        return redirect()->route('motherboard.index')
                        ->with('success','Motherboard updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motherboard  $motherboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motherboard $motherboard)
    {
        $motherboard->delete();
       
        return redirect()->route('motherboard.index')
                        ->with('success','Motherboard deleted successfully');
    }
}
