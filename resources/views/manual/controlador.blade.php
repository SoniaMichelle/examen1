@extends('layout.plantilla')
@section('titulo', 'Controladores')
@section('contenido')
<div class="f3 d-flex justify-content-center align-items-center flex-column">
    <h1>Controladores</h1>
    <p class="col-sm-6 lead mb-4">Los controladores son un mecanismo que nos permite agrupar la lógica de peticiones HTTP relacionadas y de esta forma organizar mejor nuestro código.</p>
</div>


<div class="col mt-5" id="hero">
    <div class="row">
        <div class="col-lg-6">
            <div class="content mx-auto">
                <div>
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">1.</span> Creación de controlador</h3>
                    <p class="lead mb-4">Nos dirigimos a nuestro terminal y colocamos el siguiente comando para crear nuestro nuevo controlador:</p>
                    </p>
                    <a>php artisan make:controller RutasController</a>
                    <p class="mt-3">Nota: todos los controladores se encuentran dentro de la direccion app/Http/Controller</p>
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <img src="{{asset('img/c1.png')}}" alt="" width="500px">
        </div>
    </div>
</div>
<div class="col mt-5" id="hero">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{asset('img/c2.png')}}" alt="" width="500px">

        </div>
        <div class="col-lg-6">
            <div class="content mx-auto">
                <div>
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">2.</span> Creacion del metodo</h3>
                    <p class="lead mb-4">Dentro de nuestro controlador crearemos una funcion que va a redirigirnos a la vista que se le indica</p>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="col mt-5" id="hero">
    <div class="row">
        <div class="col-lg-6">
            <div class="content mx-auto">
                <div>
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">3.</span> Asociar ruta con el controlador</h3>
                    <p class="lead mb-4">Para usar el controlador colocaremos la siguiente linea de codigo en nuestra carpeta route/web.php
                        use App\Http\Controllers\RutasController;
                    </p>

                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <img src="{{asset('img/r3.png')}}" alt="" width="500px">
        </div>
    </div>
</div>
<div class="col mt-5" id="hero">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{asset('img/r4.png')}}" alt="" width="500px">
        </div>
        <div class="col-lg-6">
            <div class="content mx-auto">
                <div>
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">4.</span> Creacion de la ruta</h3>
                    <p class="lead mb-4">Creamos una nueva ruta donde colocaremos el nobre de la ruta mas nuestro nombre del controlador dentro de unos corchetes mas el nombre del metodo creado en nuestro Controlador</p>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection