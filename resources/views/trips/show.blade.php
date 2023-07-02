@extends('layout.app')


@section('header')
   Création d'un formulaire “Tripper”.
@endsection
@section('sustitle')
    Tripper Site
@endsection
@section('content')
                    
<a href="{{route('index')}}"    class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                
                               
                                <div class="flex justify-center">
                                <table class="table">
                        <thead>
                            <tr class="mt-9 text-xl font-semibold text-gray-900 dark:text-white">
                                <th>Nom</th>
                                <th>Age</th>
                                <th>Destination</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-m  text-gray-900 dark:text-white">
                                <td>{{ $reservation->name }}</td>
                                <td>{{ $reservation->age }} </td>
                                <td>{{ $reservation->travel }}</td>
                                </div>
                            </tr>
                        </tbody>
                            </div>
</a>
@endsection
@section('footer')
 
@endsection