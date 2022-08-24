<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storage = Storage::latest()->paginate(5);
      
        return view('storage.index',compact('storage'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('storage.create');
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
            'formFactor' => 'required',
            'capacity' => 'required',
            'supplier' => 'required',
            'warranty' => 'required',
            'price' => 'required',
        ]);

        Storage::create($request->all());

        return redirect()->route('storage.index')
                        ->with('success', 'Storage updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function show(Storage $storage)
    {
        return view('storage.show', compact('storage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function edit(Storage $storage)
    {
        return view('storage.edit', compact('storage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Storage $storage)
    {
        $request->validate([
            'name' => 'required',
            'manufacturer' => 'required',
            'type' => 'required',
            'formFactor' => 'required',
            'capacity' => 'required',
            'supplier' => 'required',
            'warranty' => 'required',
            'price' => 'required',
        ]);

        $storage->update($request->all());
      
        return redirect()->route('storage.index')
                        ->with('success','Storage updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Storage $storage)
    {
        $storage->delete();
       
        return redirect()->route('storage.index')
                        ->with('success','Storage deleted successfully');
    }
}
