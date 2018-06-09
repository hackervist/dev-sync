@extends('layouts.master')

@section('title')

    <title>Documents</title>

    @endsection

@section('content')

    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li class='active'>Documents</li>
    </ol>

    <h2>Documents</h2>

    <hr/>

    <widget-grid></widget-grid>

    <div> <a href="/widget/collab">
            <button type="button" class="btn btn-lg btn-primary">
                Create New
            </button></a>
    </div>


    @endsection