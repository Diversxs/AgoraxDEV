@extends('layouts.app')

@section('content')
@section('scripts')
@include('components.sliderjs')
@endsection

<!-- <Section class="slider">
    <div class="sliderAx h-auto">
        <div id="slider-1" class="container mx-auto">
            <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
                <div class="md:w-1/2">
                    <p class="font-bold text-sm uppercase">Services</p>
                    <p class="text-3xl font-bold">Hello world</p>
                    <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                    <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact
                        us</a>
                </div>
            </div> 
            <br>
        </div>

        <div id="slider-2" class="container mx-auto">
            <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)">

                <p class="font-bold text-sm uppercase">Services</p>
                <p class="text-3xl font-bold">Hello world</p>
                <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact
                    us</a>

            </div> 
        </div>
    </div>
    <div class="flex justify-between w-12 mx-auto pb-2">
        <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 "></button>
        <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
    </div>
</Section> -->

<style>
    .snap-x {
        scroll-snap-type: x mandatory;
        
      scroll-behavior: smooth;
      -webkit-overflow-scrolling: touch;
    }
    .snap-start {
      scroll-snap-align: start;
    }
    
    </style>
    
    
    <div class="flex flex-col items-center m-8">
    
      <div class="w-full bg-white rounded overflow-x-hidden flex snap-x" style="height: 40vh">
        <div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-blue-600" id="slide-1">
          Slide 1
        </div>
        <div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-green-600" id="slide-2">
          Slide 2
        </div>
        <div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-red-600" id="slide-3">
          Slide 3
        </div>
        <div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-purple-600" id="slide-5">
          Slide 4
        </div>
        <div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black relative" id="slide-6">
          <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" class="h-full w-full object-cover absolute inset-0 z-10 opacity-25">
          <h1 class="z-20 text-center">Any kind of content here, images too!</h1>
        </div>
      </div>
    
      <div class="flex mt-8">
        <a class="w-8 mr-1 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center" href="#slide-1">1</a>
        
        <a class="w-8 mr-1 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center" href="#slide-2">2</a>
        <a class="w-8 mr-1 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center" href="#slide-3">3</a>
        <a class="w-8 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center" href="#slide-5">4</a>
        
      </div>
    </div>

@foreach ( $events as $event )

<a href="{{route('logged_show', $event->id)}}">
    <div class="container flex items-center justify-center">
        <div class="overflow-hidden shadow-lg flex flex-col md:flex-row items-center m-5 rounded-3xl">
            <img class="w-100" src="{{$event->picture}}" alt="Sunset in the mountains">
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

                           
                            
                            <a class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full" href="{{route('events.show',$event->id)}}"><button  type="submit">book</button></a> 
                            
                           
         
                        </div>
                    </div>


                    
                    </div>
                </div>


<!--<a href="{{route('show_event', $event->id)}}">
     
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
            
            <button class="w-1/2 flex items-center justify-center rounded-md bg-black text-white" type="submit">Book this event</button>
            {{-- <a class="w-1/2 flex items-center justify-center rounded-md bg-black text-white" href="{{route('events.edit',$event->id)}}"><button  type="submit">Edit</button></a> --}}
            {{-- <form action="{{ route('events.destroy',$event->id) }}" method="POST"> --}}
            @csrf
            @method('DELETE')
            {{-- <a class="w-1/2 flex items-center justify-center rounded-md bg-black text-white" href="{{route('events.destroy',$event->id)}}"><button  type="submit">Delete</button></a> --}}
            </form>
        </div>
    </div> -->
    <!-- <div class="px-6 pt-4 pb-2">
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
  </div> -->
</div>
</div>
</a>
@endforeach


@endsection