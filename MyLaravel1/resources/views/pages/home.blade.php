@extends('layouts.main-layout')
@section('content')
    <main>
        <section class="section-one">
            <ul>
                @foreach ($data as $item)
                    <li>
                        <div class="box">
                            <div class="box-img">
                                <img src="{{$item['thumb']}}" alt="">
                            </div>
                            <h3>
                                {{$item['series']}}
                            </h3>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="load-button">
                <button>
                    LOAD MORE
                </button>
            </div>
        </section>
        <section class="section-two">
            <ul>
                <li>
                    <img src="{{ asset('/storage/images/buy-comics-digital-comics.png') }}" alt="">
                    <span>
                        digital comics
                    </span>
                </li>
                <li>
                    <img src="{{ asset('/storage/images/buy-comics-merchandise.png') }}" alt="">
                    <span>
                        dc merchandise
                    </span>
                </li>
                <li>
                    <img src="{{ asset('/storage/images/buy-comics-subscriptions.png') }}" alt="">
                    <span>
                        subscription
                    </span>
                </li>
                <li>
                    <img src="{{ asset('/storage/images/buy-comics-shop-locator.png') }}" alt="">
                    <span>
                        comic shop locator
                    </span>
                </li>
                <li>
                    <img id="img-svg" src="{{ asset('/storage/images/buy-dc-power-visa.svg') }}" alt="">
                    <span>
                        dc power visa
                    </span>
                </li>
            </ul>
        </section>
    </main>
@endsection