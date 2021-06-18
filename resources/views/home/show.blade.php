@extends('layouts.app')

@section('content')
<div class="btn_home text-center md:text-left">
    <a class="" method="Post" href="{{route('logged_index')}}">
        <button class="ml-8 my-8 bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full" type="submit">Home</button>
    </a>
</div>

<div class="bg-blue-400  mb-6 p-5 text-red-900 flex-auto text-xl text-center font-bold mt-1">
    <h1 class="order-first md:order-last">{{ $event->title }}</h1>
</div>
<div class="container flex items-center justify-center md:ml-20">
    <div class="bg-blue-100 overflow-hidden shadow-lg flex flex-col md:flex-row items-center m-5 rounded-3xl">
        <img class="w-full h-1/2" src="{{asset('/uploads/events/' .$event->picture ) }}" alt="Sunset in the mountains">
        <div class="mr-10 ml-10 mt-0">

            <p class="pt-10 mb-10 md:mb-14 text-gray-700 text-center md:text-center">
                {{ $event->description }}
            </p>

            <div class="mb-10 md:mb-5 flex md:mt-5 justify-between items-center flex-col md:flex-row ">
                <div class="mb-5 flex inline-flex items-center">
                    <svg xmlns="<svg xmlns=" http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>

                    <p class="text-md text-blue-900 ml-3">{{ $event->capacity - count($event->bookedInUsers)}}</p>
                </div>

                <div class="mb-5 flex inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="text-lg font-semibold text-red-600">{{ \Carbon\Carbon::parse($event->date)->format('d/m/Y')}}</p>
                </div>

                <a class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full" method="GET" href="{{ route('subscribe', $event->id)}}"><button  type="submit">book</button></a>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
