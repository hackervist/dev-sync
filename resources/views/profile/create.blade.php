@extends('layouts.master')

@section('title')

    <title>Create a Profile</title>

@endsection

@section('content')

    @if(Auth::user()->isAdmin())

        <ol class='breadcrumb'>
            <li><a href='/'>Home</a></li>
            <li><a href='/profile'>Profiles</a></li>
            <li><a href='/profile/create'></a>Create</li>
        </ol>

    @else

        <ol class='breadcrumb'>
            <li><a href='/'>Home</a></li>
            <li><a href='/profile/create'></a>Create</li>
        </ol>

    @endif

    <h2>Create Your Profile</h2>

    <hr/>


    <!-- id="idCheck"   name="pleasevalidateme" onsubmit="validateID()" -->
    <form class="form" role="form" method="POST" action="{{ url('/profile') }}"  >

    {{ csrf_field() }}

    <!-- first_name Form Input -->

        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">

            <label class="control-label">First Name</label>

            <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">

            @if ($errors->has('first_name'))

                <span class="help-block">
                <strong>{{ $errors->first('first_name') }}</strong>
                </span>

            @endif

        </div>

        <!-- last_name Form Input -->

        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">

            <label class="control-label">Last Name</label>

            <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">

            @if ($errors->has('last_name'))

                <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
                </span>

            @endif

        </div>

         <!-- za_id Form Input max="9912313035089" min="1901014000000"  -->

     <!--   <div class="form-group{{ $errors->has('za_id') ? ' has-error' : '' }}">

            
            <label class="control-label">ID No.</label>

            <input type="number" placeholder="ID number" maxlength="13"   size="13" class="form-control" id="idnumber" name="za_id" value="{{ old('za_id') }}"/>
            
           
            
            @if ($errors->has('za_id'))

                <span class="help-block">
                    <strong>{{ $errors->first('za_id') }}</strong>
                </span>

            @endif

        </div>
    ==>





        <!-- birthdate Form Input -->

        <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">

            <label class="control-label">Birthdate</label>

            <div>

                {{  Form::date('birthdate') }}

            </div>

            @if ($errors->has('birthdate'))

                <span class="help-block">
                <strong>{{ $errors->first('birthdate') }}</strong>
                </span>

            @endif

        </div>

        <!-- Gender Form Input -->

        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">

            <label class="control-label">Gender</label>


                <select class="form-control" id="gender" name="gender">
                    <option value="{{old('gender')}}">
                        {{ ! is_null(old('gender')) ?
                        (old('gender') == 1 ? 'Male' :'Female')
                        : 'Please Choose One'}}</option>
                    <option value="1">Male</option>
                    <option value="0">Female</option>
                </select>


            @if ($errors->has('gender'))

                <span class="help-block">
                <strong>{{ $errors->first('gender') }}</strong>
                </span>

            @endif

        </div>


        <div class="form-group">

            <button type="submit" class="btn btn-primary btn-lg">

                Create

            </button>

        </div>

    </form>




<!--script type="text/javascript">

    function validateID() {
              var cb = document.forms["pleasevalidateme"].checked;
          if (cb) {
            var ex = /^(((\d{2}((0[13578]|1[02])(0[1-9]|[12]\d|3[01])|(0[13456789]|1[012])(0[1-9]|[12]\d|30)|02(0[1-9]|1\d|2[0-8])))|([02468][048]|[13579][26])0229))(( |-)(\d{4})( |-)(\d{3})|(\d{7}))/;
          } else {
            // some other validation here
            var ex = /^[0-9]{1,}$/;
          }

          var theIDnumber = document.forms["pleasevalidateme"]["za_id"].value;
          if (ex.test(theIDnumber) == false) {
            // alert code goes here
            alert('Please supply a valid ID number');
            return false;
          }
        return true;
    }

</script-->


@endsection

