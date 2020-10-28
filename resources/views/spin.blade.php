@extends('layouts.base')

@push('googd_heade')
    
<h1 class="font-weight-light text-white" style="font-size: 60px;top: 154px;">LET'S LUCKY DRAW</h1>
@endpush
@section('content')
<div id="wrapper">
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="400" height="400">
        <circle cx="200" cy="200" r="180" fill="#222222"/>
        <g id="spinner-board"></g>
        <path id="spinner-arrow" d="M 195 200 L 195 70 L 188 70 L 200 55 L 212 70 L 205 70 205 200 Z" fill="#EEEEEE" stroke="#222222" style="stroke-width:2px"/>
        <circle cx="200" cy="200" r="18" fill="#444444" stroke="#222222" style="stroke-width:2px"/>
        <circle cx="200" cy="200" r="9" fill="#666666" stroke="#222222" style="stroke-width:2px"/>
    </svg>
    <div id="button-holder">
        <button class="btn btn-info p-2 w-25 rounded" id="spinner-button" onclick="toggleSpinning();">Spin</button>
    </div>
</div>
@endsection