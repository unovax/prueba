<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Nuevo celular</title>
</head>
<body>
    <div class="flex justify-center items-center w-screen h-screen">
        <form method="post" action="/celulares" class="max-w-[600px] w-full space-y-2">
            @csrf
            <h2 class="text-3xl text-center">Crear nuevo celular</h2>
            @if ($errors->any())
            <hr class="">
            <div class="bg-red-300 text-white p-3">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <hr class="py-3">
            <input type="text" name="name" placeholder="Nombre" class="p-2 block w-full rounded-md border border-gray-400">
            <input type="text" name="model" placeholder="Modelo" class="p-2 block w-full rounded-md border border-gray-400">
            <input type="text" name="imgUrl" placeholder="Url de imagen" class="p-2 block w-full rounded-md border border-gray-400">
            <textarea rows=5 type="text" name="description" placeholder="Descripción" class="p-2 block w-full rounded-md border border-gray-400 resize-none"></textarea>
            <input type="text" name="price" placeholder="Precio" class="p-2 block w-full rounded-md border border-gray-400">
            <div class="w-full flex justify-end py-2 space-x-2">
                <button class="px-3 py-1 border border-green-500 hover:bg-green-500 hover:text-white text-green-500 rounded-md">Guardar</button>
                <a href="/celulares" class="px-3 py-1 border border-red-500 hover:bg-red-500 hover:text-white text-red-500 rounded-md">Regresar</a>
            </div>
        </form>
    </div>
</body>
</html>
