@extends('layouts.master-register-login')

@section('title')

    <title>Edit Your User Settings</title>

@endsection

@section('content')

    <div class="container">

    <div class="col-md-8 col-md-offset-2 mt-25">

    <div class="pull-right">

        <!-- begin form -->

        <form class="form"
              role="form"
              method="POST"
              action="{{ url('/unsubscribe/') }}">

            {{ csrf_field() }}

            <button type="submit" class="btn btn-lg btn-primary">

                Unsubscribe

            </button>

            </form>



    </div>

        <h1 class="myTableFont">Unsubscribe {{ $user->name }}</h1>

        <hr/>



    </div>  <!-- end column -->

    </div> <!-- end container -->

@endsection