@extends('layouts.app')

@section('content')


<x-slider :events="$events"/>

    <a method="Post " href="{{route('userEvents')}}"><button class="ml-8 my-8 bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full" type="submit">My Events</button></a>

@foreach ( $events as $event )

<a href="{{route('logged_show', $event->id)}}">
    <div class="container flex items-center justify-center">
        <div class="overflow-hidden shadow-lg flex flex-col md:flex-row items-center m-5 rounded-3xl">
            <img class="w-100" src="{{asset('/uploads/events/' .$event->picture ) }}" style="width:150px;" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="text-blue-900 flex-auto text-xl font-bold mb-2">
                        <h1>{{ $event->title }}</h1>
                    </div>
                    <p class="text-gray-700 text-base">
                        {{ $event->description }}
                    </p>

                    <div class="flex mt-5 justify-between items-center">
                        <div class="flex inline-flex items-center">
                            <svg xmlns="<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>

                            <p class="text-md text-blue-900 ml-3">{{ $event->capacity}}</p>
                        </div>
                        <div class="flex inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-lg font-semibold text-red-600">{{ $event->date }}</p>

                            @if($event->isSubcribed($user) === false)
                            <a class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full" method="GET" href="{{ route('subscribe', $event->id)}}"><button  type="submit">book</button></a>
                            @endif

                            @if($event->isSubcribed($user) === true)
                            <a class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full" method="GET" href="{{ route('unSubscribe', $event->id)}}"><button  type="submit">Cancel booking</button></a>
                            @endif





                        </div>
                    </div>



                    </div>
                </div>



</div>
</div>
</a>
@endforeach


@endsection
