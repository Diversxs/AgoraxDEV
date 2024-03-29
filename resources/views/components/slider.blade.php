<div class="flex flex-col items-center   ">

    <div class="w-full rounded overflow-x-hidden flex snap-x b" style="height: auto;">

        @foreach ($events as $event)

            @if ($event->isFavorite)

                <div class="snap-start p-4 w-full h-auto flex flex-col items-center justify-center text-white text-4xl font-bold flex-shrink-0 "
                    id="slide-{{ $event->id }}">
                    <div class="flex flex-row">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/Estrella_amarilla.png"
                            style="width: 30px;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/Estrella_amarilla.png"
                            style="width: 30px;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/Estrella_amarilla.png"
                            style="width: 30px;">
                    </div>
                    <h2 id="titulo">{{ $event->title }}</h2>
                    <div class="w-64 h-64">
                        <img class="inset-0 h-64 w-64 rounded-xl p-3 "
                            src="{{ asset('/uploads/events/' . $event->picture) }}" />
                    </div>
                    <div class="container2">
                        <h3>Next {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }} at 19:00</h3>

                    </div>
                    <a href="{{ route('show_event', $event->id) }}"><button
                            class="  bg-indigo-600 hover:bg-indigo-700 text-white text-sm px-4 py-2  border rounded-full"
                            type="submit">Join the event!</button></a>
                </div>
            @endif

        @endforeach
    </div>


</div>

<div class="flex flex items-center justify-center ">
    @foreach ($events as $event)
        @if ($event->isFavorite)
            <a class="w-8 mr-1 h-8  rounded-full  flex justify-center items-center  m-3"
                href="#slide-{{ $event->id }}">
                <div class="boton"></div>
            </a>
        @endif
    @endforeach
</div>
</div>




  


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
        text-align: center;
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
