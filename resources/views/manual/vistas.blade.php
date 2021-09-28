@extends('layout.plantilla')
@section('titulo', 'Vistas')
@section('contenido')
<div class="heds d-flex justify-content-center align-items-center flex-column">
    <h1>Vistas</h1>
    <p class="col-sm-6">Laravel también nos permite separar la lógica de
        presentación (es decir cómo vamos a «presentar» el contenido al usuario) de la lógica de nuestra aplicación
        a través de la capa de «vistas» como veremos en la siguiente lección:</p>
</div>
<div class="col mt-5" id="hero">
    <div class="row">
        <div class="col-lg-6">
            <div class="content mx-auto">
                <div>
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">1.</span> Crear una vista</h3>
                    <p class="lead mb-4">Las vista generalmente se encuentran en el directorio <em>/resource/views</em> de la carpeta principal de nuestro proyecto.
                        Crear una vista con Laravel simplemente necesitas crear un archivo <em>.blade.php</em> en el directorio /views .</p>
                    <a href="#" class="btn btn-primary">Saber más</a>
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <img src="{{asset('img/v1.png')}}" alt="" width="500px">
        </div>
    </div>
</div>
<div class="col mt-5" id="hero">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{asset('img/v2.png')}}" alt="" width="500px">

        </div>
        <div class="col-lg-6">
            <div class="content mx-auto">
                <div>
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">2.</span> Retornar una vista</h3>
                    <p class="lead mb-4">Para retornar una vista retornamos el llamado a la funcion view pasando como argumento el nombre de la vista.
                        El nombre del archivo es relativo a la carpeta resource/views y no es necesario indicar la extension del archivo.</p>
                    <p class="lead mb-4">Para ello necesitamos ir a nuestro archivo de rutas que se encuentra en la direccion <em>/routes/web.php</em>.
                    Dentro de este archivo crearemos nuestra ruta y retornaremos la vista</p>
                    <a> </a>
                    <a href="#" class="btn btn-primary">Saber más</a>
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
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">3.</span> Codigo HTM</h3>
                    <p class="lead mb-4">Dentro de nuestra vista creada podemos colar una platilla de HTML y empezar a diseñar una vista</p>
                    <a href="#" class="btn btn-primary">Saber más</a>
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <img src="{{asset('img/v3.png')}}" alt="" width="500px">
        </div>
    </div>
</div>
<div class="col mt-5" id="hero">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{asset('img/v4.png')}}" alt="" width="500px">

        </div>
        <div class="col-lg-6">
            <div class="content mx-auto">
                <div>
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">2.</span> Mostrar vista</h3>
                    <p class="lead mb-4">Para ingresar a cualquien vista en nuestra pagian web, colocaremos una /nombre_vista</p>
                    <a> </a>
                    <a href="#" class="btn btn-primary">Saber más</a>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection