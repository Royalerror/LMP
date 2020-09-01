@extends('layouts.app')

@section('title','Association')

@section('content')

@include('components.association.heading')

@include('components.association.engagement')

@include('components.association.frise')

@include('components.association.team')

@include('components.association.contact')

@endsection

@section('style')
<style>
    #heading {
        border: 20px solid white;
        padding: 0 -20px;
    }

    #heading-bg {
        background-image: url('img/imgs/association/bg-1.jpg');
        background-size: cover;
    }

    #association-frise {
        background-image: url('img/logos/frise.svg');
        background-repeat: repeat-x;
        background-size: 12%;
        background-position: 0 95%;
    }

    .square {
        width: 120px;
        height: 120px;
    }
</style>
@endsection