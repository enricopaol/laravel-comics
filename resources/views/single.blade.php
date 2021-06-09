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
            </div>

            {{-- Advertisement --}}
            <div class="advertisement">

            </div>

        </div>
    </section>

@endsection