@extends('layouts.master')

@section('title')

    <title>{{ $widget->name }} document</title>

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

        <!-- Table -->
        <table class="table table-striped">
            <tr>

               
                <th>Name</th>
                <th>Description</th>
                <th>Last Updated</th>
                

                @if(Auth::user()->adminOrCurrentUserOwns($widget))
                   
                    <th>Contribute</th>
                    <th>Edit</th>
                   <th>Delete</th>
                @endif
             

            </tr>


            <tr>
               
                <td> <a href="/widget/{{ $widget->id }}/edit">
                        {{ $widget->name }}</a></td>
              
                <td> {{$widget->description }} </td>
                
                <td>{{ $widget->updated_at }}</td>


                @if(Auth::user()->adminOrCurrentUserOwns($widget))

                    <td> <a href="{{$widget->link_address}}">

                            <button type="button" class="btn btn-default">Contribu</button></a></td>



                    <td> <a href="/widget/{{ $widget->id }}/edit">

                            <button type="button" class="btn btn-default">Edit</button></a></td>

            

                <td>
                    <div class="form-group">

                        <form class="form" role="form" method="POST" action="{{ url('/widget/'. $widget->id) }}">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}

                            <input class="btn btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete">

                        </form>
                    </div>
                </td>

               
                

                @endif
            

            </tr>

        </table>


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