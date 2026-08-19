@extends('layouts.app')

@section('title', 'Otewe — Ngopi . Makan . Gelato')

@section('content')
    @include('partials.hero')
    @include('partials.menu')
    @include('partials.live-band')
    @include('partials.hours-reservation')
    @include('partials.location-map')
@endsection
