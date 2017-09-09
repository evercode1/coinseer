@extends('layouts.master-admin')


@section('content')

    <div class="container ">




        <section class="pull-right mt-25">

            <ol class="breadcrumb">

                <li><a href="/"></i> Home</a></li>
                <li><a href="/video">Videos</a></li>
                <li class="active">Create Video</li>

            </ol>

        </section>



            <div class="col-md-8 col-md-offset-2">

        <h1 class="section-title">Create Video</h1>



        <section class="white-background rounded-corners-10 pad-20">


            @include('video.create-form')


        </section>

        </div>









    </div>




@endsection