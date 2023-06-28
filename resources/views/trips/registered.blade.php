@extends('layout.app')

@section( 'title', 'Tripper')
@section('header')
   Validation de “Tripper”.
@endsection
@section('sustitle')
    Tripper Site
@endsection
@section('content')
                    <a href="{{route('index')}}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">

                        <div   class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex items-center justify-center motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                @if ($travel == "l'Espagne")
                                    <img src="/spain.gif"/>
                                @else
                                    <img src="/france.gif"/>
                                @endif
                                    
                                </div>
                                    <h3 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Votre Formulaire est Validé! Bravo!</h3>
                                    <h3 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{$name}}, age {{$age}} sera en direction de {{$travel}}</h3>

                                </div>
                        </div>
                    </a>
@endsection
@section('footer')
    Footer de la partie Validation
@endsection
