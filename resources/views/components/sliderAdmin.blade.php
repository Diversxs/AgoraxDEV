<style>
    .snap-x {
        scroll-snap-type: x mandatory;

        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
    }

    .snap-start {
        scroll-snap-align: start;
    }

    #titulo {
        font-size: 35px;
        color: black;
        margin: 15px;
    }

    #imagen {
        width: 300px;
        height: 300px;
        margin: 20px;
        cursor: pointer;
    }

    #imagen:hover {
        opacity: 0.8;
        transition: 0.2s;
    }

    h3 {
        color: black;
        font-size: 20px;
        text-align: center;
    }

    h4 {
        font-size: 25px;
        color: black;
        font-weight: bold;
        text-align: center;
    }

    .esperamos {
        margin-top: 20px;
    }

    .container2 {
        display: flex;
        flex-direction: row;
        align-items: center;
        margin: 0;
        justify-content: flex-start;
    }

    .container2 button {
        font-size: 20px;
        margin-left: 50px;
    }

    a {
        margin: 0;
    }

    .boton {
        width: 15px;
        height: 15px;
        background: black;
        border-radius: 50%;
    }

    @media screen and (max-width: 800px) {
        #imagen {
            width: 50%;
            height: 50%;

        }
    }


    @media screen and (max-width: 600px) {
        .container2 {
            display: flex;
            flex-direction: column;
        }

        #imagen {
            width: 50%;
            height: 50%;

        }

        .container2 button {
            margin-left: 0;
        }

    }

</style>


<div class="flex flex-col items-center  ">

    <div class="w-full  bg-white rounded overflow-x-hidden flex snap-x b" style="height: auto;">

        @foreach ($events as $event)

            @if ($event->isFavorite)
                <div class="snap-start p-0 w-full h-full flex flex-col items-center justify-center text-white text-4xl font-bold flex-shrink-0 "
                    id="slide-{{ $event->id }}">
                    <h2 id="titulo">{{ $event->title }}</h2>
                    <div class="w-64  h-64">
                        <img class="inset-0 h-full w-full rounded-xl p-3 "
                            src="{{ asset('/uploads/events/' . $event->picture) }}" />
                    </div>
                    <div class="container2">
                        <h3>Next {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }} at 19:00</h3>

                    </div>
                    <a href="{{ route('admin_edit', $event->id) }}"><button
                            class=" my-8 bg-green-900 hover:bg-pink-900 text-white text-sm px-4 py-2   rounded-full"
                            type="submit">Edit event</button></a>


                </div>

            @endif

        @endforeach
    </div>


</div>

<div class="flex flex items-center justify-center">
    @foreach ($events as $event)
        @if ($event->isFavorite)
            <a class="w-8 mr-1 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center "
                href="#slide-{{ $event->id }}">
                <div class="boton"></div>
            </a>
        @endif
    @endforeach
</div>
</div>
