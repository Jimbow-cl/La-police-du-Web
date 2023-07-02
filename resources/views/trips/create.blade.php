@extends('layout.app')

@section( 'title', 'Tripper')
@section('header')
   Création d'un formulaire “Tripper”.
@endsection
@section('sustitle')
    Tripper Site
@endsection
@section('content')
                    
                        <div   class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                    <div style="color:red">{{$error}}</div>
                                    @endforeach
                                @endif
                                <div class="flex justify-center">
                                 
                                    @if ( $command == 'create')
                                        <form style="display: flex;flex-direction: column;" method="post" action="{{route('store')}}">
                                         @csrf
                                    @endif
                                    @if ( $command == 'update')
                                        <form style="display: flex;flex-direction: column;"  method="post" action="{{route( 'update', $reservation['id']) }}">
                                            @csrf
                                            @method('put')
                                    @endif
                                  
                                          
                                    <h3 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Name: </h3>
                                    <input type="text" name="name" class=""
                                        @if ( $command == 'create')
                                        value="{{old('name')}}"
                                        @endif
                                        @if ( $command == 'update')
                                        value="{{old('name', $reservation['name'])}}"
                                        @endif
                                        />
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                    <h3 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Age: </h3>
                                    <input type="text" name="age" class=""
                                        @if ( $command == 'create')
                                        value="{{old('age')}}"
                                        @endif
                                        @if ( $command == 'update')
                                        value="{{old('age', $reservation['age'])}}"
                                        @endif
                                        />
                                    <h3 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Destination: </h3>
                                    <select  name="travel" class=""
                                        @if ( $command == 'create')
                                        value="{{old('travel')}}"
                                        @endif
                                        @if ( $command == 'update')
                                        value="{{old('travel', $reservation['travel'])}}"
                                        @endif
                                        />
                                        <option value="">✈️🧭.....selectionnez .....🧭✈️--</option>
                                        <option value="France">France 🥖</option>
                                        <option value="Espagne">Espagne🥓</option>
                                    </select>
                                    <input type="submit" name="submit" class="mt-6 w-full h-10 px-4 font-semibold text-gray-900 dark:text-white bg-indigo-500"/>
                                </form>
                                </div>
                                
                            </div>
                        </div>
@endsection
@section('footer')
    Footer de la partie Formulaire
@endsection