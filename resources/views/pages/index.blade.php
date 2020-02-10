@extends('layouts.app')
@section('title', 'PizzaPalace')

@section('content')

    <div class="banner">
        <div class="banner__cta wrapper">
            <h1 class="banner__heading heading-1">Create your custom pizza</h1>
            <p class="banner__text small-text">Let your creativity unleash itself and create a bad boy pizza!</p>
            <a href="/custom_pizza" class="banner__button button">Get started</a>
        </div>
    </div>

    {!! Form::open(['action' => 'PagesController@index', 'method' => 'POST', 'class' => 'form']) !!}
        <div class="from__group wrapper">
            {{ Form::text('q', '', ['class' => 'form__input search__input form__input--input-field', 'placeholder' => 'Search for pizzas…']) }}
            {{ Form::submit('', ['class' => 'form__input form__input--submit']) }}
        </div>
    {!! Form::close() !!}

    <div class="wrapper section section__custom-pizza">
        @if(count($customPizzas) > 0)

        @else
            <h2 class="heading-2 red-color">Your custom pizzas</h2>
            <p class="small-text section__text">You have not yet created your own pizzas.</p>
            <a href="/custom_pizza" class="button">Get started</a>
        @endif
    </div>
@endsection
