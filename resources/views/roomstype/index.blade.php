@extends('layouts.boostrap5')
<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('List Rooms Type') }}
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
            <form action="{{ route('roomstype.create') }}" method="get">
                <button type="submit" class="btn btn-primary">Add New Roomtype</button>
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roomtypes as $key => $roomtype)
                                <tr>
                                    <td class="text-center">{{ $key + 1 }}</td>
                                    <td align="center">{{ $roomtype->roomtype }}</td>
                                    <td>
                                        <form action="{{ route('roomstype.destroy', $roomtype->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <form action="{{ route('roomstype.edit', $roomtype->id) }}" method="GET">
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
