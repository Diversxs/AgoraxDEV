@extends('layouts.app')

@section('content')



@foreach ($events as $event)
    <style>
        .snap-x {
            scroll-snap-type: x mandatory;

            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
        }

        .snap-start {
            scroll-snap-align: start;
        }

        #hola {
            font-size:20px;
            color: black;
            margin: 10px;
        }

        #adios {
            width: 200px;
        }

    </style>
    @endforeach


    <div class="flex flex-col items-center m-8  ">

        <div class="w-11/12 bg-white rounded overflow-x-hidden flex snap-x b" style="height: 40vh;">
            @foreach ($events as $event)
            <div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 "
                id="slide-{{ $event->id }}"> 
                 <h2 id="hola">{{ $event->title }}</h2>
                <img id="adios" class="w-50 " src="{{$event->picture}}" >
            </div>

            @endforeach
            </div>
          

        </div>

        <div class="flex mt-8 flex items-center justify-center">
            @foreach ($events as $event)
            <a class="w-8 mr-1 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center"
                href="#slide-{{ $event->id }}">{{ $event->id }}</a>
            @endforeach
        </div>
    </div>

    @foreach ($events as $event)

        <a href="{{ route('show_event', $event->id) }}">
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
                                <svg xmlns="<svg xmlns=" http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>

                                <p class="text-md text-blue-900 ml-3">{{ $event->capacity }}</p>
                            </div>
                            <div class="flex inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="text-lg font-semibold text-red-600">{{ $event->date }}</p>



                                <a class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full"><button
                                        type="submit">book</button></a>



                            </div>
                        </div>



                    </div>
                </div>



            </div>
            </div>
        </a>
    @endforeach
    @if (session('status'))
    <h6 class="alert">Hola</h6>
  
  @endif

@endsection
