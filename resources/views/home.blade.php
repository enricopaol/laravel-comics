@extends('layouts.app')

@section('tag_title')
    DC Laravel Comics
@endsection

@section('main_content')    

    {{-- Comics Section --}}
    <section class="comics-section">
        <div class="container">

            {{-- Comics Container --}}
            <div class="comics-container">
                   
                @foreach($comics as $comic)
                    {{-- Single Comic --}}
                    <div class="single-comic">
                        <div class="comic-img">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        </div>

                        <div class="comic-title">
                            <a href="#">{{ $comic['series'] }}</a>
                        </div>
                    </div> 
                @endforeach                            

            </div>

            <div class="btn-container">
                <a href="#" class="btn">Load More</a>
            </div>
            



        </div>
    </section>

@endsection