@extends('layouts.app')
@section('content')

    <div class="flex h-screen items-center justify-center p-0 mt-40 sm:mt-5 mb-40 " id="containergrande">
        <div class="grid bg-white rounded-lg shadow-2xl w-11/12 md:w-9/12 lg:w-1/2 mt-6 mb-10">
            <div class="flex justify-center">
                <div class="mt-8 ">
                    <img src="https://i.ibb.co/CbHhPbW/Logo-1.png" alt="Logo-1" style="width: 80px;" id="imagenLogo" />
                </div>
            </div>

            <form action="{{ route('admin_store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex justify-center">
                    <div class="flex">
                        <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Create new event</h1>
                    </div>
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label for='title' class="uppercase md:text-sm text-xs text-gray-500 text-light font-bold">Event title</label>
                    <input
                        class="py-2 px-3 rounded-lg border-2 border-red-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent @error('title') is-invalid @else is-valid @enderror"
                        type="text" placeholder="Title" name="title" />

                        @error('title')
                            <div class="mt-2 text-xs text-red-300 text-right">{{ $message }}</div>
                        @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label for='capacity' class="uppercase md:text-sm text-xs text-gray-500 text-light font-bold">Capacity</label>
                        <input
                            class="py-2 px-3 rounded-lg border-2 border-red-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent @error('capacity') is-invalid @else is-valid @enderror"
                            type="number" placeholder="Capacity" name="capacity" />
                        @error('capacity')
                            <div class="mt-2 text-xs text-red-300 text-right">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="grid grid-cols-1">
                        <label for='date' class="uppercase md:text-sm text-xs text-gray-500 text-light font-bold">Date</label>
                        <input
                            class="py-2 px-3 rounded-lg border-2 text-gray-500 border-red-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent @error('date') is-invalid @else is-valid @enderror"
                            type="date" placeholder="Date" name="date" />
                        @error('date')
                            <div class="mt-2 text-xs text-red-300 text-right">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label for='description' class="uppercase md:text-sm text-xs text-gray-500 text-light font-bold">Description</label>
                    <input
                        class="py-2 px-3 rounded-lg border-2  border-red-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent @error('description') is-invalid @else is-valid @enderror"
                        type="text" placeholder="Description" name="description" />
                    @error('description')
                            <div class="mt-2 text-xs text-red-300 text-right">{{ $message }}</div>
                    @enderror
                </div>

                <div class="containerEventUpload flex flex-col sm:flex-row justify-around items-start">
                    <div class="grid grid-cols-1">
                        <label class="my-4 uppercase md:text-sm text-xs text-gray-500 text-light font-bold">Highlight
                            Event</label>

                        <div class="relative inline-block w-10 align-middle select-none transition duration-200 ease-in">
                            <input type="checkbox" name="isFavorite" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" value="true"/>
                            <label for="isFavorite" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                        </div>
                    </div>

                    <div class="grid grid-cols-1">
                        <label class="my-4 uppercase md:text-sm text-xs text-gray-500 text-light font-bold">Upload
                            Photo</label>
                        <div class='flex items-center justify-start '>
                            <label
                                class='flex flex-col justify-center items-center border-4 border-dashed w-32 h-32 hover:bg-white-100 hover:border-red-300 group'>
                                <div class='flex flex-col items-center '>
                                    <img id="output_image" style="width: 100%;" />

                                    <p class='lowercase text-sm text-gray-400 group-hover:text-red-600 pt-1 tracking-wider'>
                                        <svg id="svg" class="w-10 h-10 text-gray-400 group-hover:text-red-600" fill="none"
                                            style="cursor:pointer;" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </p>
                                </div>
                                <input type='file' name="picture" class="hidden" accept="image/*"
                                    onchange="preview_image(event)" />

                            </label>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center my-5">

                    <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                        <a method="Post " href="{{ route('logged_index') }}">
                            <button class='bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full'
                                type="button">Cancel</button>
                        </a>
                        <button class='bg-green-600 hover:bg-green-700 text-white text-sm px-4 py-2  border rounded-full'
                            type="submit">Create</button>

                    </div>
                </div>
            </form>
        </div>

    </div>


@endsection

<script type='text/javascript'>
    function preview_image(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }

        reader.readAsDataURL(event.target.files[0]);
        document.getElementById("svg").style.display = "none";

    }
</script>

<style>
    .containerEventUpload {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        margin-top: 20px;
    }


    @media screen and (max-width: 600px) {
        #imagenLogo {
            display: none;
        }
    }

    .toggle-checkbox:checked {
        @apply: right-0 border-green-400;
        right: 0;
        border-color: #312E81;
    }
    .toggle-checkbox:checked + .toggle-label {
        @apply: bg-green-400;
        background-color: #DC2626;
    }

</style>


