@extends('layouts.app')

@section('content')

    <div class="flex flex-col items-center justify-center">
        <div class="p-0 mt-5 mb-5  text-blue-800 flex-auto text-2xl md:text-4xl text-center font-bold ">
            <h2>Tu suscripción al evento ha sido realizada con éxito</h2>
        </div>

        <p class="pt-8 mb-5 text-gray-700 text-center md:text-center">
            Puedes cancelar la inscripción en tus eventos de usuario
        </p>

        <a method="Post" href="{{route('userEvents')}}"><button class="ml-8 my-8 bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2 border rounded-full" type="submit">My Events</button></a>
    </div>

@endsection
