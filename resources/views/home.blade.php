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
                    <h3>{{$product['series']}}</h3>
                  </div>
            </div>
            
        @endforeach
        
    
        <button class="btn-leade-more">Lead More</button>
    
    </div>




@endsection