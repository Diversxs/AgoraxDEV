@extends('layouts.app')

@section('content')

<div class="flex flex-col">
        <div class="flex-none w-full h-full relative">
          <img src="{{($event->picture) }}" class="absolute object-cover" >

          {{-- <img src="{{ $event->title }}" class="absolute inset-0 w-full h-full object-cover"/> --}}
        </div>
        <div class="flex-auto p-6">
            <div class="flex flex-wrap">
                <h1 class="flex-auto text-xl font-semibold">
                  {{ $event->title }}
                </h1>
                <div class="text-xl font-semibold text-gray-500">
                  {{ $event->date }}
                </div>
            
            </div>
            <div class="flex items-baseline mt-4 mb-6">
                <div class="space-x-2 flex">
                    <p class='overflow-x-hidden'>  
                      {{ $event->description }}</p>
                </div>

            </div>
            <div class="flex space-x-3 mb-4 text-sm font-medium">
                <div class="flex-auto flex space-x-3">
                    <button class="w-1/2 flex items-center justify-center rounded-md bg-black text-white"
                        type="submit">Book this event</button>



                </div>
                <p class="text-sm text-gray-500">
                    Assistants <br>
                    {{ $event->capacity}}
                </p>
        </div>
    </div>

@endsection