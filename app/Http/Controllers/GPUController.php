<?php

namespace App\Http\Controllers;

use App\Models\GPU;
use Illuminate\Http\Request;

class GPUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gpu = GPU::latest()->paginate(15);
      
        return view('gpu.index',compact('gpu'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gpu.create');
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
            'memory' => 'required',
            'supplier' => 'required',
            'warranty' => 'required',
            'price' => 'required',
        ]);

        GPU::create($request->all());

        return redirect()->route('gpu.index')
                        ->with('success', 'Graphics Card updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GPU  $gpu
     * @return \Illuminate\Http\Response
     */
    public function show(GPU $gpu)
    {
        return view('gpu.show', compact('gpu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GPU  $gpu
     * @return \Illuminate\Http\Response
     */
    public function edit(GPU $gpu)
    {
        return view('gpu.edit', compact('gpu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GPU  $gpu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GPU $gpu)
    {
        $request->validate([
            'name' => 'required',
            'manufacturer' => 'required',
            'memory' => 'required',
            'supplier' => 'required',
            'warranty' => 'required',
            'price' => 'required',
        ]);

        $gpu->update($request->all());

        return redirect()->route('gpu.index')
                        ->with('success', 'Graphics Card updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GPU  $gpu
     * @return \Illuminate\Http\Response
     */
    public function destroy(GPU $gpu)
    {
        $gpu->delete();
       
        return redirect()->route('gpu.index')
                        ->with('success','Graphics Card deleted successfully');
    }
}
