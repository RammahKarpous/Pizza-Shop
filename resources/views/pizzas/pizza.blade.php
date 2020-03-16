@extends('layouts.app')

@section('title', $pizza->name)

@section('content')
    <div class="wrapper section pizza grid grid-2 gap-60px">

        <div class="pizza--image">
            <img src="{{ asset('images/pizzas/' . $pizza->image ) }}" alt="{{ $pizza->name }} pizza image">
        </div>

        <div class="pizza--info">
            <h1 class="heading-1 red-color">{{ $pizza->name }}</h1>
            <p>{{ $pizza->description }}</p>

            <span class="label width-100 block no-margins mt-30">Sizes</span>
            <div class="section mt-10px flex flex-row size-tags">
                @if(count($sizes) > 0)
                    @foreach($sizes as $size)
                        <div class="form-field tag-wrapper">
                            <input type="radio" name="sizes" value="{{ $size->size }}" id="{{ $size->size  }}">
                            <label class="tag-label" for="{{ $size->size  }}">{{ $size->size }}</label>
                        </div>
                    @endforeach
                @else
                    <p>There are no sizes available</p>
                @endif
            </div>
        </div>
    </div>

    <div class="wrapper section section__pizzas">
        <h2 class="heading-2 black-color mt-30">Pizzas you might like</h2>

        <div class="grid grid-3">
            @if(count($relatedPizzas) > 0)
                @foreach($relatedPizzas as $relatedPizza)
                    <div class="section__pizza-card">
                        <a href="/pizza/{{ $relatedPizza->slug }}">
                            <h2 class="heading-3 black-color">{{ $relatedPizza->name }}</h2>
                            <img class="pizza-card__image" src="{{ asset('images/pizzas/'. $relatedPizza->image) }}" alt="{{ $relatedPizza->name }}">

                            <div class="pizza-card__buttons buttons grid grid-2">
                                <div class="pizza-card__button pizza-card__button--price red-bg">From £</div>
                                <div class="pizza-card__button button darker-red-bg">View details</div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <p class="small-text section__text">You shouldn't even see this sentence</p>
            @endif
        </div>
    </div>
@endsection
