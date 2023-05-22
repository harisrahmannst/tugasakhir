<?php

namespace App\Http\Controllers;

use App\Models\room;
use App\Models\roomtype;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rooms = room::all();
        return view('rooms.indexroom', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roomtypes = roomtype::all();
        return view('rooms.addroom', compact('roomtypes'));
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
            'roomtypeid' => 'required|in:1,2,3',
            'roomname' => 'required|string|max:255',
            'area' => 'required',
            'price' => 'required|numeric',
            'facility' => 'string'
        ]);

        if ($validator->fails()) {
            return redirect('/rooms/create')
                ->withErrors($validator)
                ->withInput();
        }

        $room = new room([
            'roomtypeid' => $request->input('roomtypeid'),
            'roomname' => $request->input('roomname'),
            'area' => $request->input('area'),
            'price' => $request->input('price'),
            'facility' => $request->input('facility'),
        ]);

        $room->save();

        return redirect('/rooms')->with('success', 'Room data has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(room $room)
    {
        //
        $roomtypes = roomtype::all();
        return view('rooms.editroom', compact('room', 'roomtypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, room $room)
    {
        //
         $validator = Validator::make($request->all(), [
            'roomtypeid' => 'required|in:1,2,3',
            'roomname' => 'required|string|max:255',
            'area' => 'required',
            'price' => 'required|numeric',
            'facility' => 'string'
        ]);

        if ($validator->fails()) {
            return redirect('/rooms/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $room ->update( [
            'roomtypeid' => $request->input('roomtypeid'),
            'roomname' => $request->input('roomname'),
            'area' => $request->input('area'),
            'price' => $request->input('price'),
            'facility' => $request->input('facility'),
        ]);

        return redirect('/rooms')->with('success', 'Room data has been Update successfully!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(room $room)
    {
        //
        $room->delete();

        return redirect()->route('rooms.index')
            ->with('success', 'Room Delete Successfully.');
    }
}
