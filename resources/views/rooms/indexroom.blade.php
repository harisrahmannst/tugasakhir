@extends('layouts.boostrap5')
<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('List Rooms') }}
        </h2>
    </x-slot>
    <div>
        @if (session('success'))
            <div class="row justify-center">
                <div class="col-xs-12 col-md-8">
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="myAlert"
                        style="display: flex; align-items: center; padding-right: 1rem;">
                        {{ session('success') }}
                        <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"
                            style="margin-left: auto;" onclick="closeAlert()">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        @endif
        <div class="col-md-4 text-right">
            <form action="{{ route('rooms.create') }}" method="get">
                <button type="submit" class="btn btn-primary">Add New Product</button>
            </form>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Room Type</th>
                                <th class="text-center">Room Name</th>
                                <th class="text-center">Area</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Facility</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rooms as $key => $room)
                                <tr>
                                    <td class="text-center">{{ $key + 1 }}</td>
                                    <td align="center">{{ $room->roomtypes ? $room->roomtypes->roomtype : '-' }}</td>
                                    <td align="center">{{ $room->roomname }}</td>
                                    <td align="center">{{ $room->area }}</td>
                                    <td align="center">{{ $room->price }}</td>
                                    <td align="center">{{ $room->facility }}</td>
                                    <td>
                                        <form action="{{ route('rooms.destroy', $room->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <form action="{{ route('rooms.edit', $room->id) }}" method="GET">
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</x-app-layout>
