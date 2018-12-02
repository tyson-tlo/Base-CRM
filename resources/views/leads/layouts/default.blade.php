@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3">
            @include('leads.layouts.partials._navigation')
        </div>
        <div class="col-md-9">
            @yield('leads.content')
        </div>
    </div>
 @endsection