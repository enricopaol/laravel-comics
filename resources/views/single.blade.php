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
            </div>

            {{-- Advertisement --}}
            <div class="advertisement">

            </div>

        </div>
    </section>

@endsection