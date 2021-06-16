@extends('layouts.app')

@section('content')

    <div class="container flex items-center justify-center">
<div class=" rounded overflow-hidden shadow-lg flex flex-col items-center m-5">
    <img class="w-48" src="{{$event->picture}}" alt="Sunset in the mountains">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">
            <h1>{{ $event->title }}</h1>
        </div>
        <p class="text-gray-700 text-base">
            {{ $event->description }}
        </p>
        <p class="text-lg text-black-500">
            Assistants: {{ $event->capacity}}
        </p>
        <div class="text-xl font-semibold text-gray-500">
            {{ $event->date }}
        </div>
        <div class="flex-auto flex space-x-3 m-5 justify-center">
            <button class="w-1/2 flex items-center justify-center rounded-md bg-black text-white" type="submit">Book this </button>
        </div>
    </div>
    

  <div>
   
</div>

@endsection
