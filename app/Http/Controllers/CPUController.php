<?php

namespace App\Http\Controllers;
use App\Models\CPU;
use Illuminate\Http\Request;

class CPUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cpu = CPU::latest() ->paginate(15);
      
        return view('cpu.index',compact('cpu'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpu.create');
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
            'coreNumbers' => 'required',
            'supplier' => 'required',
            'warranty' => 'required',
            'price' => 'required',
        ]);

        CPU::create($request->all());

        return redirect()->route('cpu.index')
                        ->with('success', 'CPU updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CPU $cpu)
    {
        return view('cpu.show', compact('cpu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CPU $cpu)
    {
        return view('cpu.edit',compact('cpu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CPU $cpu)
    {
        $request->validate([
            'name' => 'required',
            'manufacturer' => 'required',
            'coreNumbers' => 'required',
            'supplier' => 'required',
            'warranty' => 'required',
            'price' => 'required',
        ]);
      
        $cpu->update($request->all());
      
        return redirect()->route('cpu.index')
                        ->with('success','CPU updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CPU $cpu)
    {
        $cpu->delete();
       
        return redirect()->route('cpu.index')
                        ->with('success','CPU deleted successfully');
    }
}
