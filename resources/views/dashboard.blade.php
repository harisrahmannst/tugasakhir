@extends('layouts.boostrap5')
<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

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


</x-app-layout>
