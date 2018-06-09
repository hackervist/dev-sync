@extends('layouts.master')

@section('title')
    <title>Dev-Sync </title>
@endsection

@section('content')

<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
</ol>

<div
        class="fb-like"
        data-share="true"
        data-width="450"
        data-show-faces="true">
</div>

<!--example></example-->

@include('pages.slider')

<br><br>
<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="jumbotron">

    <h1>Dev-sync </h1>

    <p>Collaborating made easy.
    </p>
    <img src="/images/vcollab.jpg" alt="Smiley face" >

</div>

    @endsection