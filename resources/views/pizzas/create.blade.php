@extends('layouts.app')

@section('content')
    <div class="wrapper section">
        <h1 class="heading-1 black-color">Create your custom pizza</h1>
        <div class="grid grid-2 custom-pizza">
            <div class="custom-pizza__left-column">
                <h2 class="black-color custom-pizza__name placeholder-style">Your custom pizza name</h2>

                <div class="custom-pizza__topping-images">
                    <div class="pizza-toppings"></div>
                    <img src="{{ asset('images/pizza-base.png') }}" alt="Pizza base" class="custom-pizza__image width-100">
                </div>
            </div>

            <div class="custom-pizza__right-column">
                <h2 class="heading-3 black-color">Pizza details</h2>
                {!! Form::open(['method' => 'POST', 'action' => 'CustomPizzasController@add', 'class' => 'form form__custom-pizza top-m']) !!}
                    <div class="form__form-group">
                        {{ Form::label('pizza_name', 'Pizza Name', ['class' => 'small-text']) }}
                        {{ Form::text('pizza_name', '', ['class' => 'form__input custom-pizza__input-field form__input--input-field gray-border top-m', 'maxlength' => 20]) }}
                    </div>

                    <span class="label top-m block">Sizes</span>
                    <div class="section top-m flex flex-row size-tags">
                        @if(count($sizes) > 0)
                            @foreach($sizes as $size)
                                <div class="form-field tag-wrapper">
                                    <input type="radio" name="sizes" id="{{ $size->size  }}">
                                    <label class="tag-label" for="{{ $size->size  }}">{{ $size->size }}</label>
                                </div>
                            @endforeach
                            @else
                            <p>There are no sizes available</p>
                        @endif
                    </div>

                    <div class="section top-m flex flex-row topping-tags">
                        <span class="label">Toppings</span>

                        <div class="form-field tag-wrapper">
                            <input type="checkbox" name="toppings" id="tomato-sauce" disabled checked>
                            <label class="tag-label tag-label--disabled cb-bg" for="tomato-sauce">Tomato Sauce</label>
                        </div>

                        <div class="form-field tag-wrapper">
                            <input type="checkbox" name="toppings" id="cheese" disabled checked>
                            <label class="tag-label tag-label--disabled" for="cheese">Cheese</label>
                        </div>

                        @foreach($toppings as $topping)
                            <div class="form-field tag-wrapper">
                                <input type="checkbox" name="toppings" id="{{ $topping->topping  }}">
                                <label class="tag-label" for="{{ $topping->topping  }}">{{ $topping->name }}</label>
                            </div>
                        @endforeach
                    </div>

                    <div  class="section mt-30">
                        <h2 class="heading-3">Delivery options</h2>

                        <div class="flex row">

                        </div>
                    </div>

                {!! Form::close() !!}
            </div>

        </div>
    </div>
@endsection

@section('extra-scripts')
    <script src="{{ asset('js/custom_pizza.js') }}"></script>
@endsection
