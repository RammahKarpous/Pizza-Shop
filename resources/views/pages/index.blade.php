@extends('layouts.app')
@section('title', 'Home')

@section('content')

    <div class="banner">
        <div class="banner__cta wrapper">
            <h1 class="banner__heading heading-1">Create your custom pizza</h1>
            <p class="banner__text small-text">Let your creativity unleash itself and create a bad boy pizza!</p>
            <a href="/custom_pizza" class="banner__button button">Get started</a>
        </div>
    </div>

    <div class="wrapper section section__pizzas">
        <h2 class="heading-2">Pizzas</h2>

        <div class="grid grid-3">
            @if(count($pizzas) > 0)
                @foreach($pizzas as $pizza)
                    <div class="section__pizza-card">
                        <a href="pizza/{{ $pizza->slug }}">
                            <h2 class="heading-3 black-color">{{ $pizza->name }}</h2>
                            <img class="pizza-card__image" src="{{ asset('images/pizzas/'. $pizza->image) }}" alt="{{ $pizza->name }}">

                            <div class="pizza-card__buttons buttons grid grid-2">
                                <div class="pizza-card__button pizza-card__button--price red-bg">From £</div>
                                <div class="pizza-card__button button darker-red-bg">View details</div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <p class="small-text section__text">There are no pizzas in stock.</p>
            @endif
        </div>
    </div>

    <div class="wrapper section section__custom-pizza">

        @if(count($customPizzas) > 0)

        @else
            <h2 class="heading-2 red-color">Your custom pizzas</h2>
            <p class="small-text section__text">You have not yet created your own pizzas.</p>
            <a href="/custom_pizza" class="button">Get started</a>
        @endif
    </div>
@endsection
