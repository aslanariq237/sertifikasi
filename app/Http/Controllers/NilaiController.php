<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Nilai::all();
        return view('nilai', ["data"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Nilai::create([
            'nilai' => $request->nilai,
        ]);
        return redirect()->route('nilai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Nilai::where('id', $id)->first();
        if ($data) {
            return view('editnilai', ["data"=>$data]);
        } else {
            return abort("404");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $data = Nilai::where('id', $id)->first();
        if ($data) {
            $data->nilai = $request->nilai;
            $result = $data->save();
            if ($data) {
                return redirect()->route('nilai');
            } else {
                return abort("404");
            }
            
        } else {
            return abort("404");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Nilai::where('id', $id)->first();
        if ($data) {
            if ($data->delete()) {
                return redirect()->route('nilai');
            } else {
                return abort("404");
            }
            
        } else {
            return abort("404");
        }
    }
}
