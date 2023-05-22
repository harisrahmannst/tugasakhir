<?php

namespace App\Http\Controllers;

use App\Models\roomtype;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RoomtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roomtypes = roomtype::all();
        return view('roomstype.index', compact('roomtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('roomstype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'roomtype' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('/roomstype/create')
                ->withErrors($validator)
                ->withInput();
        }

        $roomtypes = new roomtype([
            'roomtype' => $request->input('roomtype')
        ]);

        $roomtypes->save();

        return redirect('/roomstype')->with('success', 'Room Type data has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\roomtype  $roomtype
     * @return \Illuminate\Http\Response
     */
    public function show(roomtype $roomtype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\roomtype  $roomtype
     * @return \Illuminate\Http\Response
     */
    public function edit(roomtype $roomtype)
    {
        //
        return view('roomstype.edit', compact('roomtype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\roomtype  $roomtype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, roomtype $roomtype)
    {
        //
        //
        $validator = Validator::make($request->all(), [
            'roomtype' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('/roomstype/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $roomtype ->update( [
            'roomtype' => $request->input('roomtype')
        ]);

        return redirect('/roomstype')->with('success', 'Room Type data has been added successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\roomtype  $roomtype
     * @return \Illuminate\Http\Response
     */
    public function destroy(roomtype $roomtypes)
    {
        //
        $roomtypes->delete();

        return redirect()->route('roomstype.index')
            ->with('success', 'Room Type Delete Successfully.');
    }
}
