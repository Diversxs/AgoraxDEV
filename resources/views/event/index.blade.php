@extends('layouts.app')

@section('content')
@section('scripts')
    @include('components.sliderjs')
@endsection

<Section class="slider">
    <div class="sliderAx h-auto">
        <div id="slider-1" class="container mx-auto">
            <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill"
                style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
                <div class="md:w-1/2">
                    <p class="font-bold text-sm uppercase">Services</p>
                    <p class="text-3xl font-bold">Hello world</p>
                    <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                    <a href="#"
                        class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact
                        us</a>
                </div>
            </div> <!-- container -->
            <br>
        </div>

        <div id="slider-2" class="container mx-auto">
            <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill"
                style="background-image: url(https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)">

                <p class="font-bold text-sm uppercase">Services</p>
                <p class="text-3xl font-bold">Hello world</p>
                <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                <a href="#"
                    class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact
                    us</a>

            </div> <!-- container -->
            <br>
        </div>
    </div>
    <div class="flex justify-between w-12 mx-auto pb-2">
        <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 "></button>
        <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
    </div>
</Section>

@foreach ( $events as $event )


<a href="{{route('events.show',$event->id)}}">

    <div class="flex flex-col">
        <div class="flex-none w-10 h-15 relative">
          <img src="{{$event->picture}}" class="absolute object-cover" >

          {{-- <img src="{{ $event->title }}" class="absolute inset-0 w-full h-full object-cover"/> --}}
        </div>
        <form class="flex-auto p-6">
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
        </form>
    </div>
    </a>
@endforeach


@endsection
