@extends('layouts.app')

@section('content')
@section('scripts')
@include('components.sliderjs')
@endsection



<a  href="{{route('admin_create')}}"><button class="ml-8 bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full" type="submit">Create Event</button></a>
    

@foreach ( $events as $event )
<a href="{{route('logged_show', $event->id)}}">

<div class="container flex items-center justify-center">
<div class="overflow-hidden shadow-lg flex flex-row items-center m-5 rounded-3xl">
    <img class="w-100" src="{{$event->picture}}" alt="Sunset in the mountains">
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

        <div class="flex-auto flex space-x-3 m-5 justify-end">
            <a href="{{route('admin_edit',$event->id)}}">
                <button class="inline-flex items-center justify-center w-12 h-12 mr-2 text-indigo-100 transition-colors duration-150 bg-indigo-900 rounded-full focus:shadow-outline hover:bg-indigo-800">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg>
                  </button>    
            </a>

            <form action="{{ route('admin_delete',$event->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{route('admin_delete',$event->id)}}">
                <button class="uppercase p-3 flex items-center bg-red-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg hover:bg-red-800 rounded-full w-12 h-12 ">
                    <svg width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" style="transform: rotate(360deg);"><path d="M12 12h2v12h-2z" fill="currentColor"></path><path d="M18 12h2v12h-2z" fill="currentColor"></path><path d="M4 6v2h2v20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8h2V6zm4 22V8h16v20z" fill="currentColor"></path><path d="M12 2h8v2h-8z" fill="currentColor"></path>
                    </svg>
                </button>
            </a>
            </form>
        </div>
    </div>
   
</div>
</div>
</a>
@endforeach


<div class="flex-auto ml-3 justify-evenly py-2">
    <div class="flex flex-wrap ">
        
        <h2 class="flex-auto text-lg font-medium">Albert camus biografia</h2>
    </div>
    <p class="mt-3"></p>
    <div class="flex py-4  text-sm text-gray-600">
        <div class="flex-1 inline-flex items-center">
            <svg xmlns="<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                </path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            <p class="">30</p>
        </div>
        <div class="flex-1 inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <p class="">05-25-2021</p>
    </div>
</div>
<div class="flex p-4 pb-2 border-t border-gray-200 "></div>
<div class="flex space-x-3 text-sm font-medium">
    <div class="flex-auto flex space-x-3">
       
    <button
        class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
        type="button" aria-label="like"> Apuntar-se</button>
        
</div>
</div>



@endsection



