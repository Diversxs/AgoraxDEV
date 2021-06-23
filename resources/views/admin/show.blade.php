@extends('layouts.app')

@section('content')

<div class="btn_home text-center md:text-left bg-blue-900">
    <a class="" method="Post" href="{{route('logged_index')}}">
        <button class="ml-8 my-8 bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full" type="submit">Home</button>
    </a>
</div>
<div class="bg-blue-900">
<div class="flex items-center justify-center flex-col rounded-3xl bg-blue-100 m-10 p-5 ">
    <div class="p-0 mt-5 mb-5  text-blue-800 flex-auto text-2xl md:text-4xl text-center font-bold ">
        <h2>{{ $event->title }}</h2>
    </div>

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
                    
                <div class="flex items-center">    
                <a href="{{route('admin_edit',$event->id)}}">
                    <button class="inline-flex items-center justify-center w-12 h-12 mr-2 text-indigo-100 transition-colors duration-150 bg-indigo-900 rounded-full focus:shadow-outline hover:bg-indigo-800">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                </a>

                <form action="{{ route('admin_delete',$event->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{route('admin_delete',$event->id)}}">
                        <button class="uppercase p-3 flex items-center hover:bg-red-100 bg-yellow-600  text-blue-50 max-w-max shadow-sm hover:shadow-lg hover:bg-red-800 rounded-full w-12 h-12 ">
                            <svg width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" style="transform: rotate(360deg);">
                                <path d="M12 12h2v12h-2z" fill="currentColor"></path>
                                <path d="M18 12h2v12h-2z" fill="currentColor"></path>
                                <path d="M4 6v2h2v20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8h2V6zm4 22V8h16v20z" fill="currentColor"></path>
                                <path d="M12 2h8v2h-8z" fill="currentColor"></path>
                            </svg>
                        </button>
                    </a>
                   
                    
                       


                </form>
            </div>
                </div>
            </div>
        </section>
    </div>
</div>
</div>

          

@endsection
