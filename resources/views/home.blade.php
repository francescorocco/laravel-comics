@extends('layouts.app')

@section('page-title','Home Page')


@section('content')

    <div class="container ms_container d-flex justify-content-center">

        <button class="btn-current-series">Current Series</button>
        @foreach ($products as $product)
        
            <div class="card-wrapper">
                <div class="ms_card">
                    <div class="image-wrapper">
                        <img src="{{$product['thumb']}}" :alt="name">
                    </div>
                    <h5>{{$product['series']}}</h5>
                </div>
            </div>
            
        @endforeach
        
    
        <button class="btn-leade-more">Lead More</button>
    
    </div>

    <div class="info-wrapper">
        <div class="container">
            <ul class="d-flex list-unstyled justify-content-between">
                @foreach ($informations as $info)
                <li>
                    <div class="d-flex align-items-center">
                        <div class="image-wrapper">
                            <img src="{{ Vite::asset($info['image']) }}"/>
                        </div>
                        <div class="text-information">{{$info['name']}}</div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>


@endsection