@extends('layouts.app')

@section('title','Accueil')

@section('content')

@include('components.accueil.heading')

@include('components.accueil.association')

@include('components.accueil.formations')

@include('components.accueil.labels')

@include('components.accueil.contact')

@endsection

@section('style')
<style>
    #heading {
        background-image: url('img/imgs/home/bg-1.jpg');
        background-size: cover;
        border: 20px solid white;
        padding: 0 -20px;
    }

    #association-quote {
        background-image: url('img/imgs/home/bg-2.jpg');
        background-size: cover;
        padding: 100px 0;
    }

    #formations-coverflow {
        background-image: url('img/imgs/home/bg-3.jpg');
        background-size: cover;
        padding: 50px 0 100px;
    }

    #mask-wrap {
        filter: drop-shadow(0px 2px 10px rgba(0, 0, 0, 0.16));
    }

    #diagonal-mask {
        position: absolute;
        bottom: 0;
        transform: translateY(50%);
        height: 300px;
        width: 100%;
        background-color: white;
        clip-path: polygon(100% 0, 100% 50%, 0 100%, 0 50%);
    }

    #labels-heading {
        background-image: url('img/imgs/home/bg-4.jpg');
        background-size: cover;
        padding: 200px 0 50px;
    }
</style>
@endsection