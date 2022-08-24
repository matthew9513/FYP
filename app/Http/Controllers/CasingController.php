<?php

namespace App\Http\Controllers;

use App\Models\Casing;
use Illuminate\Http\Request;

class CasingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $casing = Casing::latest()->paginate(5);
      
        return view('casing.index',compact('casing'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('casing.create');
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
            'supplier' => 'required',
            'warranty' => 'required',
            'price' => 'required',
        ]);

        Casing::create($request->all());

        return redirect()->route('casing.index')
                        ->with('success', 'Casing updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Casing  $casing
     * @return \Illuminate\Http\Response
     */
    public function show(Casing $casing)
    {
        return view('casing.show', compact('casing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Casing  $casing
     * @return \Illuminate\Http\Response
     */
    public function edit(Casing $casing)
    {
        return view('casing.edit',compact('casing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Casing  $casing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Casing $casing)
    {

        $request->validate([
            'name' => 'required',
            'manufacturer' => 'required',
            'type' => 'required',
            'supplier' => 'required',
            'warranty' => 'required',
            'price' => 'required',
        ]);

        $cpu->update($request->all());
      
        return redirect()->route('casing.index')
                        ->with('success','Casing updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Casing  $casing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Casing $casing)
    {
        $casing->delete();
       
        return redirect()->route('casing.index')
                        ->with('success','Casing deleted successfully');
    }
}
