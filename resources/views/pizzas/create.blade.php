@extends('layouts.app')

@section('title', 'Create your own pizza')

@section('content')
    <div class="wrapper section">
        <h1 class="heading-1 black-color">Create your custom pizza</h1>
        <div class="grid grid-2 custom-pizza">
            <div class="custom-pizza__left-column">
                <h2 class="black-color custom-pizza__name placeholder-style">Your custom pizza name</h2>

                <div class="custom-pizza__topping-images">
                    <div class="pizza-toppings"></div>
                    <img src="{{ asset('images/pizza-base.png') }}" alt="Pizza base"
                         class="custom-pizza__image width-100">
                </div>
            </div>

            <div class="custom-pizza__right-column">
                <h2 class="heading-3 black-color">Pizza details</h2>
                {!! Form::open(['method' => 'POST', 'action' => 'CustomPizzasController@add', 'class' => 'form form__custom-pizza mt-10px']) !!}
                <div class="form__form-group">
                    {{ Form::label('pizza_name', 'Pizza Name', ['class' => 'small-text']) }}
                    {{ Form::text('pizza_name', '', ['class' => 'form__input custom-pizza__input-field form__input--input-field gray-border mt-10px', 'maxlength' => 20]) }}
                </div>

                <span class="width-100 block no-margins mt-30 mb-10">Sizes</span>
                <div class="section mt-10px flex flex-row size-tags">
                    @if(count($sizes) > 0)
                        @foreach($sizes as $size)
                            <div class="form-field tag-wrapper">
                                <input type="radio" name="sizes" value="{{ $size->topping_price  }}" id="{{ $size->size  }}">
                                <label class="tag-label" for="{{ $size->size  }}">{{ $size->size }}</label>
                            </div>
                        @endforeach
                    @else
                        <p>There are no sizes available</p>
                    @endif
                </div>

                <div class="section mt-10px flex flex-row topping-tags">
                    <span class="width-100 block no-margins mt-30 mb-10">Toppings</span>

                    <div class="form-field tag-wrapper">
                        <input type="checkbox" name="toppings" value="Tomato Sauce" id="tomato-sauce" disabled>
                        <label class="tag-label tag-label--disabled cb-bg" for="tomato-sauce">Tomato Sauce</label>
                    </div>

                    <div class="form-field tag-wrapper">
                        <input type="checkbox" name="toppings" value="Cheese" id="cheese" disabled checked>
                        <label class="tag-label tag-label--disabled" for="cheese">Cheese</label>
                    </div>

                    @foreach($toppings as $topping)
                        <div class="form-field tag-wrapper">
                            <input type="checkbox" name="toppings" value="{{ $topping->name }}"
                                   id="{{ $topping->topping  }}">
                            <label class="tag-label" for="{{ $topping->topping  }}">{{ $topping->name }}</label>
                        </div>
                    @endforeach
                </div>

                <div class="section mt-30">
                    <h2 class="heading-3 width-100 block">Delivery options</h2>

                    <div class="section mt-10px flex flex-row size-tags">
                        <div class="form-field tag-wrapper">
                            <input type="radio" name="delivery_collection" value="collect" id="collect" checked>
                            <label class="tag-label" for="collect">Collect from store</label>
                        </div>

                        <div class="form-field tag-wrapper">
                            <input type="radio" name="delivery_collection" value="deliver" id="delivery">
                            <label class="tag-label" for="delivery">Delivery to address</label>
                        </div>
                    </div>

                    {{--                    <div class="forms">--}}
                    {{--                        <div class="input-group collect-from-store mt-10px grid collect">--}}
                    {{--                            <h4 class="heading-4">Select store</h4>--}}
                    {{--                            {{ Form::label('city_name', 'Please select your city name', ['class' => 'width-100 block no-margins mt-10 mb-10']) }}--}}
                    {{--                            <datalist>--}}

                    {{--                            </datalist>--}}

                    {{--                        </div>--}}

                    {{--                        <div class="input-group collect-from-store mt-10px grid deliver">--}}
                    {{--                            <h4 class="heading-4">Address details</h4>--}}
                    {{--                            {{ Form::label('address', 'Please enter your address', ['class' => 'width-100 block no-margins mt-10 mb-10']) }}--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>

                <div class="flex row center mt-30">
                    {{ Form::submit('Add to card', ['class' => 'button mr-20']) }}
                    {{ Form::text('', '', ['class' => 'pizza-price no-border', 'disabled' => true]) }}
                </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
@endsection

@section('extra-scripts')
    <script src="{{ asset('js/custom_pizza.js') }}"></script>
@endsection
