@extends('layouts.application')
@section('content')
    <main>
        <!--services-->
        @include('layouts._service')
        <!--Overview-->
        @include('layouts._overview')
        <!--galerie-->
        @include('layouts._galerie')
        <!--Our Team-->
        @include('layouts._our_team')
        <!--Testimonials-->
        @include('layouts._testimonials')
        <!--latest post-->
        @include('layouts._posts')
        <!--Contact-->
        @include('layouts._contact')
    </main> 
@stop