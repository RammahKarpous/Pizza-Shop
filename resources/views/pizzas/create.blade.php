@extends('layouts.app')

@section('content')
    <div class="wrapper section">
        <h1 class="heading-1 black-color">Create your custom pizza</h1>
        <div class="grid grid-2 custom-pizza">
            <div class="custom-pizza__left-column">
                <h2 class="heading-2 black-color custom-pizza__name placeholder-style">Your custom pizza name</h2>

                <div class="custom-pizza__toppings">
                    <div class="pizza-toppings"></div>
                    <img src="{{ asset('images/pizza-base.png') }}" alt="Pizza base" class="custom-pizza__image width-100">
                </div>
            </div>

            <div class="custom-pizza__right-column">
                <h2 class="heading-3 black-color">Pizza details</h2>
                {!! Form::open(['method' => 'POST', 'action' => 'CustomPizzasController@add', 'class' => 'form form__custom-pizza']) !!}
                    <div class="form__form-group">
                        {{ Form::label('pizza_name', 'Pizza Name', ['class' => 'small-text']) }}
                        {{ Form::text('pizza_name', '', ['class' => 'form__input custom-pizza__input-field form__input--input-field gray-border top-m', 'maxlength' => 20]) }}
                    </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
@endsection

@section('extra-scripts')
    <script src="{{ asset('js/custom_pizza.js') }}"></script>
@endsection
