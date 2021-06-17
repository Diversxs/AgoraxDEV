  @extends('layouts.app')

  @section('content')


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
      <a class="w-8 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center" href="#slide-4">4</a>

    </div>
  </div>
  <div class="buttons flex justify-between">
    <div class="btn_home text-center md:text-left">
      <a class="" method="Post" href="{{route('logged_index')}}">
        <button class="ml-8 my-8 bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full" type="submit">Home</button>
      </a>
    </div>
    <a class="mr-10 text-center md:text-right" method="Post " href="{{route('userEvents')}}"><button class="ml-8 my-8 bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full" type="submit">My Events</button></a>

  </div>

  @foreach ( $events as $event )


  <!-- Sneja /events ready-->
  <a href="{{route('logged_show', $event->id)}}">

    
    <div class="container flex items-center justify-center md:ml-20 rounded-3xl mb-20">
      <div class="bg-blue-100 overflow-hidden shadow-3lg flex flex-col md:flex-row items-center m-5 rounded-3xl">
        <img class="w-full h-1/2" src="{{$event->picture}}" alt="Sunset in the mountains">
        <div class="mr-10 ml-10 mt-0">
        <div class="mt-10 mb-2 md:mb-20 text-blue-700 flex-auto text-4xl text-center font-bold ">
      <h1>{{ $event->title }}</h1>
    </div>
          <p class="pt-8 mb-14 text-gray-700 text-center md:text-center">
            {{ $event->description }}
          </p>

          <div class="mb-5 flex mt-5 justify-between items-center flex-col md:flex-row ">
                        
                        <div class="mb-5 flex inline-flex items-center ml-10">
                            
                            <svg xmlns="<svg xmlns=" http://www.w3.org/2000/svg" class="h-6 w-6" fill="blue" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <p class="text-md text-blue-900 ml-3">{{ $event->capacity}}</p>
                            
                            
                        </div>

                        <div class="mb-5 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="red" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>

                            <p class="text-lg font-semibold text-red-600">{{ \Carbon\Carbon::parse($event->date)->format('d/m/Y')}}</p>
                        </div>
                        <a class="bg-red-400 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full" method="GET" href="{{ route('subscribe', $event->id)}}">
                            <button type="submit">book me</button>
                        </a>

                    </div>
        </div>
      </div>
    </div>

    </div>


    </div>
  </a>
  @endforeach

  @endsection