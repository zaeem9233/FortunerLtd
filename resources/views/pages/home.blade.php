@extends('layout.main')

@section('title', 'About Fortuner Ltd | Trusted IT Hardware Specialists');
@section('description', 'Learn about Fortuner Ltd, a trusted supplier of new, refurbished, and legacy IT hardware. Delivering quality, reliability, and eco-friendly technology solutions worldwide.');
@section('keywords', 'about Fortuner Ltd, IT hardware company, refurbished IT equipment supplier, enterprise hardware solutions, sustainable IT supplier');

@section('content')

    @include('parts.slider')

    @include('parts.about-us')

    @include('parts.features')

    @include('parts.faqs')

@endsection