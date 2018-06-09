@extends('layouts.master')

@section('title')

    <title>{{ $widget->name }} Widget</title>

@endsection

@section('content')

    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/widget'>Documents</a></li>
        <li><a href='/widget/{{ $widget->id }}'>{{ $widget->name }}</a></li>
    </ol>

    <h1>{{ $widget->name }}</h1>

    <hr/>

    <div class="panel panel-default">

       <textarea id="textarea_1"> </textarea>>
        add my javascript to fetch

    </div>

@endsection



@section('scripts')
    <script>
        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }
    </script>
@endsection