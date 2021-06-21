<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>
<body>


    
    


<div class="flex h-screen bg-gray-200 items-center justify-center">
    <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
        <div class="flex justify-center py-4">
            <img src="https://i.ibb.co/CbHhPbW/Logo-1.png" alt="Logo-1" style="width: 80px;" />     
        </div>
    <div class="flex justify-center">

    <div class="flex">
        <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Inscripción exitosa</h1>
        <p>Hola {{ $userName }}, te has suscrito al evento {{ $eventSubscribed['title'] }}</p>
        <p>El día {{ $date }}</p>
        <p>Si quieres cancelar tu inscripción, gestiónalo desde tus Eventos</p>
    </div>

    <div>
        <h5>Att. El equipo de AgoraxDev</h5>
    </div>
</div>

    
</body>
</html>