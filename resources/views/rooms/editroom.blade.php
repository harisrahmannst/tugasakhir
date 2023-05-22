@extends('layouts.boostrap5')
<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Edit Room') }}
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
        <form action="{{ route('rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf
            @method('PUT')
            <div class="col-md-12">
                <label for="roomtypeid" class="form-label">Room Type:</label>
                <select class="form-select" id="roomtypeid" name="roomtypeid" value="{{ $room->roomtypeid }}">
                    @foreach ($roomtypes as $roomtype)
                        <option value="{{ $roomtype->id }}">
                            {{ $roomtype->roomtype }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <label for="roomname" class="form-label">Room Name:</label>
                <input type="text" class="form-control" value="{{ $room->roomname }}" id="roomname" name="roomname"
                    class="@error('roomname') is-invalid @enderror">

            </div>

            <div class="col-md-6">
                <label for="area" class="form-label">Area:</label>
                <input type="text" class="form-control" value="{{ $room->area }}" id="area" name="area"
                    class="@error('area') is-invalid @enderror">
            </div>

            <div class="col-md-6">
                <label for="price" class="form-label">Price:</label>
                <input type="text" class="form-control" value="{{ $room->price }}" id="price" name="price"
                    class="@error('price') is-invalid @enderror">
            </div>

            <div class="col-md-12">
                <label for="facility" class="form-label">Facility:</label>
                <textarea class="form-control" id="facility" name="facility" rows="3"
                    class="@error('facility') is-invalid @enderror">{{ $room->facility }}</textarea>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

</x-app-layout>
