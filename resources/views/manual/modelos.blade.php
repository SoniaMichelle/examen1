@extends('layout.plantilla')
@section('titulo', 'Modelos')
@section('contenido')
<div class="f4 d-flex justify-content-center align-items-center flex-column">
    <h1>Modelo</h1>
    <p class="col-sm-6 lead mb-4">
    Los modelos son uno de los componentes principales de las aplicaciones desarrolladas bajo el patrón MVC, que tienen la responsabilidad de acceder a los datos, modificarlos, etc. En el patrón además los modelos mantienen lo que se llama la lógica de negocio, que son las reglas que deben cumplirse para trabajar con los datos.
    </p>
</div>
<div class="col mt-5" id="hero">
    <div class="row">
        <div class="col-lg-6">
            <div class="content mx-auto">
                <div>
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">1.</span> Crear un modelo vacío </h3>
                    <p class="lead mb-4">Nos dirigimos a nuestro terminal y colocamos el siguiente comando para crear nuestro nuevo controlador:</p>
                    </p>
                    <a>php artisan make:controller RutasController</a>
                    <p class="mt-3">Nota: todos los modelos se encuentran dentro de la direccion app/Models</p>
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <img src="{{asset('img/m1.png')}}" alt="" width="500px">
        </div>
    </div>
</div>
<div class="col mt-5" id="hero">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{asset('img/m2.png')}}" alt="" width="500px">

        </div>
        <div class="col-lg-6">
            <div class="content mx-auto">
                <div>
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">2.</span>Migracion de datos</h3>
                    <p class="lead mb-4">Ademas de esto podemos pedirle que cree una migración para nuestro modelo, la sintaxis seria la siguiente:</p>
                    <a>php artisan make:model Vehiculo --migration</a>
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
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">3.</span> Archivo de migracion</h3>
                    <p class="lead mb-4">como puede ver aqui crea el model(Model) y la migración para este la cual se llama 2019_04_140609_create_vehiculos_table.
                    </p>

                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <img src="{{asset('img/m3.png')}}" alt="" width="500px">
        </div>
    </div>
</div>
<div class="col mt-5" id="hero">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{asset('img/m4.png')}}" alt="" width="500px">
        </div>
        <div class="col-lg-6">
            <div class="content mx-auto">
                <div>
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">4.</span> Columnas de la bd</h3>
                    <p class="lead mb-4">En nuestro archvos de migracion podemos crear las columnas que llevara la base de datos</p>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection