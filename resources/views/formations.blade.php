@extends('layouts.app')

@section('title','Formations')

@section('content')

@include('components.formations.heading')

@include('components.formations.ceph')

@include('components.formations.cephA')

@include('components.formations.phpp')

@include('components.formations.mooc')

@include('components.formations.finance')

@endsection

@section('style')
<style>
    #heading {
        border: 20px solid white;
        padding: 0 -20px;
    }

    #heading-bg {
        background-image: url('img/imgs/formations/bg-1.jpg');
        background-size: cover;
    }

    .strip-container {
        overflow-x: hidden;
    }

    .strip::before {
        content: "";
        position: absolute;
        width: 150vw;
        height: 100%;
        top: 0;
        z-index: -1;
    }

    .strip.strip-left::before {
        left: -40%;
    }

    .strip.strip-right::before {
        right: -40%;
    }

    .strip.strip-red::before {
        background-color: #CC6687;
    }

    .strip.strip-blue::before {
        background-color: #338791;
    }

    .strip.strip-green::before {
        background-color: #4F9687;
    }

    .strip.strip-orange::before {
        background-color: #F2C1B0;
    }
</style>
@endsection