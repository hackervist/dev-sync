@extends('layouts.master')

@section('title')

    <title>Edit Document</title>

@endsection

@section('content')


    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/widget'>Documents</a></li>
        <li><a href='/widget/{{$widget->id}}'>{{$widget->name}}</a></li>
        <li class='active'>Edit</li>
    </ol>

    <h1>Edit Document</h1>

    <hr/>


    <form class="form" role="form" method="POST" action="{{ url('/widget/'. $widget->id)  }}">
        <input type="hidden" name="_method" value="patch">
    {{ csrf_field() }}

    <!-- widget_name Form Input -->
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="control-label">Documenet Name</label>

            <input type="text" class="form-control" name="name" value="{{ $widget->name }}">

            @if ($errors->has('name'))
                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
            @endif

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">
                Edit
            </button>
        </div>

    </form>


@endsection