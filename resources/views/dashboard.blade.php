@extends('layouts.app')

@section('content')
<div class="wrapper section section__pizzas">
    <h2 class="heading-2">Your custom pizzas</h2>
    <div class="grid grid-3">
        @if(count($customPizzas) > 0)
            @foreach($customPizzas as $customPizza)
                <div class="section__pizza-card">
                    <a href="pizza/{{ $customPizza->slug }}">
                        <h2 class="heading-3 black-color">{{ $customPizza->name }}</h2>
                        <img class="pizza-card__image" src="{{ asset('images/pizzas/'. $customPizza->image) }}"
                             alt="{{ $customPizza->name }}">

                        <div class="pizza-card__buttons buttons grid grid-2">
                            <div class="pizza-card__button pizza-card__button--price red-bg">From £</div>
                            <div class="pizza-card__button button darker-red-bg">View details</div>
                        </div>
                    </a>
                </div>
            @endforeach
        @else
            <p class="small-text section__text">You have not yet created your own pizzas.</p>
            <a href="/custom_pizza" class="button">Get started</a>
        @endif
    </div>
</div>
@endsection
