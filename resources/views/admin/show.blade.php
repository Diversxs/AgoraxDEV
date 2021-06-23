@extends('layouts.app')

@section('content')
<<<<<<< HEAD

<div class="btn_home text-center md:text-left bg-blue-900">
=======
<div class="flex justify-center">
>>>>>>> c227d6f3442e0ee143ca3b1c4000dd6481d84d1a
    <a class="" method="Post" href="{{route('logged_index')}}">
        <button class=" bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full" type="submit">Home</button>
    </a>
</div>
<<<<<<< HEAD
<div class="bg-blue-900">
<div class="flex items-center justify-center flex-col rounded-3xl bg-blue-100 m-10 p-5 ">
    <div class="p-0 mt-5 mb-5  text-blue-800 flex-auto text-2xl md:text-4xl text-center font-bold ">
        <h2>{{ $event->title }}</h2>
    </div>

    <div class="overflow-hidden shadow-3lg flex flex-col md:flex-row items-center rounded-3xl">
        <div class="w-full flex justify-center">
            <img src="{{ asset('/uploads/events/' . $event->picture) }}"
                style="width: 50%; height: 50%; border-radius: 20px;">
=======

<div class="container w-100 lg:w-4/5 mx-auto flex flex-col">
    <!-- card -->
    <div v-for="card in cards"
        class="flex flex-col md:flex-row overflow-hiddenbg-white rounded-lg shadow-xl p-5 mt-4 w-100 mx-2 bg-blue-100 flex items-center justify-center">
        <!-- media -->
        <div class="w-44  h-44   ">
            <img class="inset-0 h-full w-full rounded-xl "
                src="{{ asset('/uploads/events/' . $event->picture) }}" />
>>>>>>> c227d6f3442e0ee143ca3b1c4000dd6481d84d1a
        </div>
        <!-- content -->
        <div class="w-full px-6 text-gray-800 flex flex-col justify-between ">
            <h2 class="font-semibold text-3xl leading-tight truncate text-center sm:text-left mt-4">{{ $event->title }}</h2>
            <p class="mt-2 text-center sm:text-left">
                {{ $event->description }}
            </p>
            <div class="flex flex-col sm:flex-row justify-between items-center sm:items-around ">
                <div class="">
                    <div class="flex flex-row items-center mt-5  ">
                        <svg xmlns="<svg xmlns=" http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="transparent"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <p class="text-lg text-gray-700 uppercase tracking-wide font-semibold ">
                            {{ $event->capacity - count($event->bookedInUsers) }}</p>
                    </div>

                    <div class="flex flex-row items-center mt-5 mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="transparent"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <p class="text-lg text-gray-700 uppercase tracking-wide font-semibold ">
                            {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}
                        </p>
                    </div>
                </div>

                <div class="flex items-center">
                    <a href="{{ route('admin_edit', $event->id) }}">
                        <button
                            class="inline-flex items-center justify-center w-12 h-12 mr-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-full focus:shadow-outline hover:bg-indigo-800">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                </path>
                            </svg>
                        </button>
                    </a>
                
                    <form action="{{ route('admin_delete', $event->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('admin_delete', $event->id) }}">
                            <button
                                class="uppercase p-3 flex items-center hover:bg-red-100 bg-red-600  text-blue-50 max-w-max shadow-sm hover:shadow-lg hover:bg-red-800 rounded-full w-12 h-12 ">
                                <svg width="32" height="32" preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 32 32" style="transform: rotate(360deg);">
                                    <path d="M12 12h2v12h-2z" fill="currentColor"></path>
                                    <path d="M18 12h2v12h-2z" fill="currentColor"></path>
                                    <path
                                        d="M4 6v2h2v20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8h2V6zm4 22V8h16v20z"
                                        fill="currentColor"></path>
                                    <path d="M12 2h8v2h-8z" fill="currentColor"></path>
                                </svg>
                            </button>
                        </a>
                                        
                                            
                
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ card-->
</div>
</div>

          

@endsection
