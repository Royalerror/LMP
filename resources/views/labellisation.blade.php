@extends('layouts.app')

@section('title','Labellisation')

@section('content')

@include('components.labellisation.heading')

@include('components.labellisation.criteres')

@include('components.labellisation.frise')

@include('components.labellisation.labels')

@include('components.labellisation.timeline')

@include('components.labellisation.devis')

@endsection

@section('style')
<style>
    #heading {
        border: 20px solid white;
        padding: 0 -20px;
    }

    #heading-bg {
        background-image: url('img/imgs/labellisation/bg-1.jpg');
        background-size: cover;
    }

    #labellisation-frise {
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

@section('script')
<script>
    $('#container')
        .on('skeletabs:init', function(event, info) {            
            toggleBtn();
        })
        .on('skeletabs:moved', function(event, info) {            
            toggleBtn();
        });    

    function toggleBtn() {
        $('.skltbs-tab').each(function() {
            if ($(this).hasClass('skltbs-active')) {
                $(this).removeClass(['btn-red','text-white']);
                $(this).addClass(['btn-white','text-red']);
            } else {
                $(this).removeClass(['btn-white','text-red']);
                $(this).addClass(['btn-red','text-white']);
            }
        })
    }
</script>
@endsection