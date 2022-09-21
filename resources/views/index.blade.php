<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Celulares</title>
</head>
<body>
    <div class="flex justify-end p-2">
        <a href="celulares/create" class="px-3 py-1 border border-blue-500 hover:bg-blue-500 hover:text-white text-blue-500 rounded-md">Nuevo celular</a>
    </div>
    <div class="px-2">
        <table class="w-full">
            <thead>
                <tr class="bg-blue-200">
                    <th class="w-1/12 border">Nombre</th>
                    <th class="w-1/12 border">Modelo</th>
                    <th class="w-1/12 border">Precio</th>
                    <th class="w-3/12 border">Descripción</th>
                    <th class="w-3/12 border">Imagen</th>
                    <th class="w-3/12 border">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($celulares as $celular)
                    <tr>
                        <td class="border">{{$celular->name}}</td>
                        <td class="border">{{$celular->model}}</td>
                        <td class="border">${{$celular->price}}</td>
                        <td class="border">{{$celular->description}}</td>
                        <td class="border flex justify-center"><img src="{{$celular->imgUrl}}" class="h-[100px] w-auto" alt=""></td>
                        <td class="border">
                            <div class="flex justify-evenly">
                                <form class="w-1/3" method="get" action="{{'celulares/'.$celular->id.'/edit'}}">
                                    @csrf
                                    <button  type="submit" class="w-full px-3 py-1 border border-green-500 hover:bg-green-500 hover:text-white text-green-500 rounded-md">Editar</button>
                                </form>
                                <form class="w-1/3 " method="post" action="{{'celulares/'.$celular->id}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="w-full px-3 py-1 border border-red-500 hover:bg-red-500 hover:text-white text-red-500 rounded-md">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
