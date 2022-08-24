<?php

namespace App\Http\Controllers;

use App\Models\PSU;
use Illuminate\Http\Request;

class PSUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psu = PSU::latest()->paginate(5);
      
        return view('psu.index',compact('psu'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('psu.create');
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
            'energyEfficient' => 'required',
            'wattage' => 'required',
            'modularity' => 'required',
            'supplier' => 'required',
            'warranty' => 'required',
            'price' => 'required',
        ]);

        PSU::create($request->all());

        return redirect()->route('psu.index')
                        ->with('success', 'Power Supply updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PSU  $psu
     * @return \Illuminate\Http\Response
     */
    public function show(PSU $psu)
    {
        return view('psu.show', compact('psu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PSU  $psu
     * @return \Illuminate\Http\Response
     */
    public function edit(PSU $psu)
    {
        return view('psu.edit',compact('psu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PSU  $psu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PSU $psu)
    {

        $request->validate([
            'name' => 'required',
            'manufacturer' => 'required',
            'energyEfficient' => 'required',
            'wattage' => 'required',
            'modularity' => 'required',
            'supplier' => 'required',
            'warranty' => 'required',
            'price' => 'required',
        ]);

        $psu->update($request->all());
      
        return redirect()->route('psu.index')
                        ->with('success','Power Supply updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PSU  $psu
     * @return \Illuminate\Http\Response
     */
    public function destroy(PSU $psu)
    {
        $psu->delete();
       
        return redirect()->route('psu.index')
                        ->with('success','Power Supply deleted successfully');
    }
}
