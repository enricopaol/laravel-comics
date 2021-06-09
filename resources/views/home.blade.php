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
                            <a href="{{ route('single', [
                                'id' => $comic['id']
                            ]) }}">{{ $comic['series'] }}</a>
                        </div>
                    </div> 
                @endforeach                            

            </div>

            <div class="btn-container">
                <a href="#" class="btn">Load More</a>
            </div>
            
        </div>
    </section>

    {{-- CTA Section BG Blue --}}
    <section class="cta-section-bg-blue">
        <div class="container">

            {{-- Single CTA --}}
            <div class="cta-single">
                <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="buy digital comics">
                <h4 class="cta-title">Digital Comics</h4>
            </div>

            {{-- Single CTA --}}
            <div class="cta-single">
                <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="merchandise">
                <h4 class="cta-title">DC Merchandise</h4>
            </div>

            {{-- Single CTA --}}
            <div class="cta-single">
                <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="subscription">
                <h4 class="cta-title">Subscription</h4>
            </div>

            {{-- Single CTA --}}
            <div class="cta-single">
                <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="shop-locator">
                <h4 class="cta-title">Comic Shop Locator</h4>
            </div>

            {{-- Single CTA --}}
            <div class="cta-single">
                <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="dc-power-visa">
                <h4 class="cta-title">DC Power Visa</h4>
            </div>

        </div>
    </section>

@endsection