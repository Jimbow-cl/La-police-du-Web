@extends('layout.app')

@section( 'title', 'Tripper')
@section('header')
   Index de “Tripper”.
@endsection
@section('sustitle')
    Tripper Site
@endsection
@section('content')
        
                    <a href="{{route('create')}}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                    <h3 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Bienvenue!</h3>
                            </div>
                    </a>
                    </div
                    <div>
                        <table class="table">
                        <thead>
                            <tr class="mt-9 text-xl font-semibold text-gray-900 dark:text-white">
                                <th>Nom</th>
                                <th>Age</th>
                                <th>Destination</th>
                                <th>Commandes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                            <tr class="text-m  text-gray-900 dark:text-white">
                                <td>{{ $reservation['name'] }}</td>
                                <td>{{ $reservation['age'] }} ans </td>
                                <td>{{ $reservation['travel'] }}</td>
                                <td><form action="{{ route('show', $reservation['id']) }}" method="get">
                                    @csrf
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700 ring-1 ring-inset ring-indigo-700/10"><button type="submit"  class="rounded-full">Voir</button></span>
                                </form></td>
                                <td><form action="{{ route('edit', $reservation['id']) }}" method="get">
                                    @csrf
                                    <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20"><button type="submit" value="{{ $command='update' }}"" class="rounded-full">Modifier</button></span>
                                </form></td>
                                <td><form action="{{ route('destroy', $reservation['id']) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <span class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10"><button type="submit" class="rounded-full">Destroy</button></span>
                                </form></td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>


@endsection
@section('footer')
    Footer de la partie Index
@endsection
