@extends('layouts.boostrap5')
<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Edit Room Type') }}
        </h2>
    </x-slot>
    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('roomstype.update', $roomtype->id) }}" method="POST" enctype="multipart/form-data"
            class="row g-3">
            @csrf
            @method('PUT')

            <div class="col-md-6">
                <label for="roomtype" class="form-label">Room Type:</label>
                <input type="text" class="form-control" value="{{ $roomtype->roomtype }}" id="roomtype"
                    name="roomtype" class="@error('roomtype') is-invalid @enderror">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

</x-app-layout>
