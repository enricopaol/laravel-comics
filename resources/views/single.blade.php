@extends('layouts.app')

@section('tag_title')
    {{$comicInfo['title']}}
@endsection

@section('main_content')
    
    {{-- Comic Poster Section --}}
    <section class="comic-poster">
        <div class="container">
            <img src="{{ $comicInfo['thumb'] }}" alt="">
        </div>        
    </section>

    {{-- Comic Presentation Section --}}
    <section class="comic-presentation">
        <div class="container">

            {{-- Comic Info --}}
            <div class="comic-info">
                <h1>
                    {{ $comicInfo['title'] }}
                </h1>

                {{-- Price Table --}}
                <div class="price-table">

                    <div class="price">

                        <div class="left">
                            <span class="title">U.S. Price:</span>
                            <span class="price-number">{{ $comicInfo['price'] }}</span>
                        </div>

                        <div class="right">
                            <span class="title">AVAILABLE</span>
                        </div>
                        
                    </div>

                    <div class="check">
                        Check Availability &#9660
                    </div>

                </div>

                {{-- Description --}}
                <p class="comic-description">
                    {{ $comicInfo['description'] }}
                </p>

            </div>

            {{-- Advertisement --}}
            <div class="advertisement">
                <span class="ads-warning">Advertisement</span>

                <div class="ads-img">
                    <img src="{{ asset('img/adv.jpg') }}" alt="adv">
                </div>

            </div>

        </div>
    </section>

    {{-- Comic Details Section --}}
    <section class="comic-details">
        <div class="container">

            {{-- Talent --}}
            <div class="talent">
                <h2>Talent</h2>

                <div class="table">

                    {{-- Row --}}
                    <div class="row">

                        <h4>Art by:</h4>

                        <p>
                            @foreach ($comicInfo['artists'] as $artist)
                                <a href="#">{{$artist}}</a>@if (!$loop->last),@endif
                            @endforeach
                        </p>

                    </div>                

                    {{-- Row --}}
                    <div class="row">

                        <h4>Written by:</h4>

                        <p>
                            @foreach ($comicInfo['writers'] as $writer)
                                <a href="#">{{$writer}}</a>@if (!$loop->last),@endif
                            @endforeach
                        </p>

                    </div>
                    
                </div>
            </div>

            {{-- Spect --}}
            <div class="specs">
                <h2>Specs</h2>

                <div class="table">

                    {{-- Row --}}
                    <div class="row">

                        <h4>Series:</h4>

                        <p>
                            {{ $comicInfo['series'] }}
                        </p>

                    </div>                

                    {{-- Row --}}
                    <div class="row">

                        <h4>U.S. Price:</h4>

                        <p>
                            {{ $comicInfo['price'] }}
                        </p>

                    </div>

                    {{-- Row --}}
                    <div class="row">

                        <h4>On Sale Date:</h4>

                        <p>
                            {{ $comicInfo['sale_date'] }}
                        </p>

                    </div>
                    
                </div>
            </div>

        </div>        
    </section>

@endsection