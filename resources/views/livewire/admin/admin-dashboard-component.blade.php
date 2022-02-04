<div>
@extends('adminlte::page') 

@section('title', 'Dashboard') 

@section('content_header')

@stop

@section('content')
      <h3>MISIÓN</h3>
					
						<p>INSATEXT Es brindar información a través de una plataforma digital a nuestros clientes,</br>
							de una manera flexible, amigable, económica y con productos de la mayor calidad,</br>
							ajustados a los parámetros del mercado colombiano y siempre en beneficio del menor</br>
							consumo y mayor servicio de los usuarios finales.</p>
    <h3>VISIÓN</h3>
    						<p>INSATEX, Se consolidará como una empresa líder en el mercado nacional</br>
							en suministro de información a través de plataformas digitales que permitan en un corto</br>
							plazo darnos a conocer en el mercado internacional.</p>
                        
@stop

@section('css')     
     <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flexslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-01.css')}}">
    @livewireStyles
@stop

@section('js')
      <script src="{{asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
    <script src="{{asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
    {{--<script src="{{asset('assets/js/chosen.jquery.min.js')}}"></script>--}}
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('assets/js/functions.js')}}"></script>
     <script src="https://cdn.tiny.cloud/1/77cmob1sta3vfu8wqblu54tnm38555pwned7xaa37pggvl5z/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@stop
</div>
