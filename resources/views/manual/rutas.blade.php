@extends('layout.plantilla')
@section('titulo', 'Rutas')
@section('contenido')
<div class="f2 d-flex justify-content-center align-items-center flex-column">
    <h1>Rutas</h1>
    <p class="col-sm-6 lead mb-4">Los Routes en Laravel son una de las capas más importante en el Framework, es un sistema de rutas que se encargan de manejar el flujo de solicitudes y respuestas, desde y hacia el cliente (como hacia el navegador, por ejemplo). Definen la dirección URL y el método por el cual se puede ingresar a dicha ruta (GET, POST, etc.)</p>
</div>


<div class="col mt-5" id="hero">
    <div class="row">
        <div class="col-lg-6">
            <div class="content mx-auto">
                <div>
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">1.</span> Creación de ruta.</h3>
                    <p class="lead mb-4">Para crear una ruta nos dirigimos a nuestra archivo routes/web.pph</p>
                    <p class="lead mb-4">Se escribe la clase Route que llama al método relacionado con el verbo HTTP, en este caso, get que acepta dos parámetros: el primero es la URL que se llamará desde el navegador y el segundo es una función anónima que devuelve lo que queremos mostrar.
                    </p>
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <img src="{{asset('img/r1.png')}}" alt="" width="500px">
        </div>
    </div>
</div>
<div class="col mt-5" id="hero">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{asset('img/r2.png')}}" alt="" width="500px">

        </div>
        <div class="col-lg-6">
            <div class="content mx-auto">
                <div>
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">2.</span> Rutas con parámetros</h3>
                    <p class="lead mb-4">También con el sistema de rutas de Laravel puedes crear rutas más complejas que necesiten de parámetros dinámicos.  Se pueden definir de la siguiente forma:</p>
                    
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
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">3.</span> Rutas asociadas a un controlador</h3>
                    <p class="lead mb-4">Crearemos la ruta pero ahora en lugar de colocar una funcion anonima o un parametro lo asociaremos a un controlador
                        para ello nuestro controlador ya tiene que estar creado, ahora lo usaremos con la siguiente linea de codigo.
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
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">4.</span> Crearemos la ruta</h3>
                    <p class="lead mb-4">Donde colocaremos el nobre de la ruta mas nuestro nombre del controlador dentro de unos corchetes mas el nombre del metodo donde se retorna la vista</p>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection