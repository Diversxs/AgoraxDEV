@extends('layouts.app')

@section('content')

<h2 style="text-align: center; font-size: 40px; font-weight: bold;">Past events</h2>

@foreach ($events as $event)

@if($event->date <now())

<a href="{{ route('show_event', $event->id) }}">
    <div class="p-0 mt-5 mb-5  text-blue-800 flex-auto text-2xl md:text-4xl text-center font-bold mt-10 ">
        <h2>{{ $event->title }}</h2>
    </div>
    <div class="flex items-center justify-center flex-col rounded-3xl bg-blue-100 m-10 p-5 ">
        
    
        <div class="overflow-hidden shadow-3lg flex flex-col md:flex-row items-center rounded-3xl">
            <div class="w-full flex justify-center">
                <img src="{{ asset('/uploads/events/' . $event->picture) }}"
                    style="width: 50%; height: 50%; border-radius: 20px;">
            </div>
            <section>
    
                <div class="mr-10 ml-10 mt-0">
                    <p class="pt-8 mb-5 text-gray-700 text-center md:text-center">
                        {{ $event->description }}
                    </p>
    
                    <div class="mb-5 flex mt-5 justify-between items-center flex-col md:flex-row ">
    
                        <div class="mb-5 flex inline-flex items-center ml-10">
                            <svg xmlns="<svg xmlns=" http://www.w3.org/2000/svg" class="h-6 w-6" fill="blue"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <p class="text-md text-blue-900 ml-3">{{ $event->capacity - count($event->bookedInUsers) }}
                            </p>
                        </div>
                        <div class="mb-5 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="red" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-lg font-semibold text-red-600">
                                {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</p>
                        </div>
                       
                        
                    </div>
                </div>
            </section>
        </div>
    </div>
</a>
@endif
@endforeach
@endsection
