@extends('layouts.app')
@section('content')

<div class="flex h-screen bg-gray-200 items-center justify-center  ">
  <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
    <div class="flex justify-center py-4">
      <div class="  ">
        <img src="https://i.ibb.co/CbHhPbW/Logo-1.png" alt="Logo-1" style="width: 80px;" />     
      </div>
    </div>

<form action="{{ route('admin_update', $event->id) }}" method="POST" enctype="multipart/form-data">
{{ method_field('PATCH') }}
    @csrf
    <div class="flex justify-center">
      <div class="flex">
        <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Edit event</h1>
      </div>
    </div>


    <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-bold">Event title</label>
      <input class="py-2 px-3 rounded-lg border-2 border-red-300 mt-1 focus:outline-none focus:ring-2  text-gray-500 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="" name="title" value="{{ $event->title }}"/>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-bold">Capacity</label>
        <input class="py-2 px-3 rounded-lg border-2 border-red-300 mt-1 focus:outline-none focus:ring-2 text-gray-500 focus:ring-purple-600 focus:border-transparent" type="number" placeholder="Capacity" name="capacity" value="{{ $event->capacity }}" />
      </div>

      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-bold">Date</label>
        <input class="py-2 px-3 rounded-lg border-2 border-red-300 mt-1 focus:outline-none focus:ring-2 text-gray-500 focus:ring-purple-600 focus:border-transparent" type="date" placeholder="Date" name="date" value="{{ $event->date }}" />
      </div>

    </div>



    <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-bold">Description</label>
      <input class="py-2 px-3 rounded-lg border-2 border-red-300 mt-1 focus:outline-none text-gray-500 focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Description" name="description" value="{{ $event->description }}" />
    </div>

    <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-bold">Highlight Event</label>
      <label class="inline-flex items-center mt-2">
        <input type="radio" class="form-radio text-red-600" name="isFavorite" value="true" />
        <span class="ml-2 text-gray-500 text-light">Favorite event</span>
      </label>  
      <label class="inline-flex items-center">
        <input type="radio" class="form-radio text-gray-500" name="isFavorite" value="false" />
        <span class="ml-2 text-gray-500 text-light">Not Favorite event</span>
      </label>
    </div>

    <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-bold mb-1">Upload Photo</label>
        <div class='flex items-center justify-center w-full'>
            <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-white-100 hover:border-red-300 group'>
                <div class='flex flex-col items-center justify-center pt-7'>
                  <svg class="w-10 h-10 text-gray-400 group-hover:text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                  <p class='lowercase text-sm text-gray-400 group-hover:text-red-600 pt-1 tracking-wider'>Select a photo</p>
                </div>
              <input type='file' name="picture" class="hidden" />
            </label>
        </div>
    </div>

    <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
      <a method="Post " href="{{route('logged_index')}}">
        <button class='w-auto bg-red-500 hover:bg-red-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' type="button">Cancel</button>
      </a>
      <button class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' type="submit">Update</button>
      
    </div>

    </form>
  </div>

</div>

@endsection
