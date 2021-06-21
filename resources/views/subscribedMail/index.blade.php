@extends('layouts.app')

@section('content')

<h1>Suscripción realizada con éxito</h1>
<p>Gracias por suscribirte a nuestro evento, puedes cancelar la inscripción en tus eventos de usuario</p>

<a method="Post" href="{{route('userEvents')}}"><button class="ml-8 my-8 bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full" type="submit">My Events</button></a>

@endsection
