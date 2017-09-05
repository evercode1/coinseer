@extends('layouts.master-admin')


@section('content')

    <div class="container ">




        <section class="pull-right mt-25">

            <ol class="breadcrumb">

                <li><a href="/"></i> Home</a></li>
                <li><a href="/influencer">Influencers</a></li>
                <li class="active">Edit {{ $influencer->name }}</li>

            </ol>

        </section>



            <div class="col-md-8 col-md-offset-2">

        <h1 class="section-title">Edit Influencer</h1>



        <section class="white-background rounded-corners-10 pad-20">


            @include('influencer.edit-form')


        </section>

        </div>









    </div>




@endsection