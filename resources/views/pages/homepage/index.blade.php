@extends('master')
@section('content')
    @include('pages.homepage.partials.banner')
    @include('pages.homepage.partials.pedicure')
    @include('pages.homepage.partials.treatments')
    @include('pages.homepage.partials.procedures')
{{--    @include('pages.homepage.partials.testimonials')--}}
    @include('pages.homepage.partials.pricing')
    @include('pages.homepage.partials.appointments')
{{--    @include('pages.homepage.partials.team')--}}
@endsection
