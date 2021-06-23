@extends('layouts.app')

@section('content')

    <x-divPresentacion />
    <x-slider :events="$events" />
    <div class="bg-blue-900">
    <div class="flex justify-center bg-blue-900 ">
        <a href="{{ route('homePassedEvents') }}">
            <button class=" bg-green-600 hover:bg-green-600 text-white text-sm px-4 mt-5 py-2 border rounded-full "type="submit">Past events</button>
        </a>
    </div>

@foreach ($events as $event)
        <a href="{{ route('show_event', $event->id) }}">

            <div class="container w-100 lg:w-4/5 mx-auto flex flex-col">
                <!-- card -->
                <div v-for="card in cards"
                    class="flex flex-col md:flex-row overflow-hiddenbg-white rounded-lg shadow-xl p-5 mt-4 mb-2 w-100 mx-2 bg-indigo-900 flex items-center justify-center">
                    <!-- media -->
                    <div class="w-44  h-44">
                        <img class="inset-0 h-full w-full rounded-xl "
                            src="{{ asset('/uploads/events/' . $event->picture) }}" />
                    </div>
                    <!-- content -->
                    <div class="w-full px-6 text-gray-50 flex flex-col justify-between ">
                        <h2 class="font-semibold text-3xl leading-tight truncate text-center sm:text-left mt-4">
                            {{ $event->title }}</h2>
                        <p class="mt-2 text-center sm:text-left">
                            {{ $event->description }}
                        </p>
                        <div class="flex flex-col sm:flex-row justify-between items-center sm:items-around ">
                            <div class="">
                                <div class="flex flex-row items-center mt-5  ">
                                    <svg xmlns="<svg xmlns=" http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"
                                        fill="transparent" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    <p class="text-lg text-gray-50 uppercase tracking-wide font-semibold ">
                                        {{ $event->capacity - count($event->bookedInUsers) }}</p>
                                </div>

                                <div class="flex flex-row items-center mt-5 mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="transparent"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <p class="text-lg text-gray-50 uppercase tracking-wide font-semibold ">
                                        {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex flex-row items-center ">
                                <a class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  rounded-full"
                                    method="GET" href="{{ route('subscribe', $event->id) }}">
                                    <button type="submit">Join this event</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ card-->
            </div>

        </a>

    @endforeach

    <x-ScrollUpDown />
    <x-footer />




</div>
@endsection
