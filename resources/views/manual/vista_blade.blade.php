@extends('layout.plantilla')
@section('titulo', 'VistasBlade')
@section('contenido')
<div class="f1 d-flex justify-content-center align-items-center flex-column">
    <h1>Vistas Blade</h1>
    <p class="col-sm-6 lead mb-4">Para poder crear las vistas de nuestro proyecto en Laravel tenemos la opción de utilizar Blade, el cual es el motor de creación de plantillas simples
        proporcionado por Laravel.Permite realizar operaciones con datos,sustitución de plantillas.</p>
</div>
<div class="col mt-5 d-flex justify-content-center">
    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">¿Por que Blade?</span></h3>
    <ul>
        <li>Blade permite utilizar código PHP Simple en las vistas</li>
        <li>Plantillas mas simples y limpias en código.</li>
        <li>Incluye sistema de cache que mejora la rapidez.</li>
        <li>Herencia de plantillas</li>
        <li>Creación de plantillas Máster.</li>
    </ul>

</div>

<div class="col mt-5" >
    <div class="row">
        <div class="col-lg-6">
            <div class="content mx-auto">
                <div>
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">1.</span> Creación de Vistas.</h3>
                    <p class="lead mb-4">Las vistas que se generan usando Blade usan la extensión .blade.php y se encuentran en la ruta resources/views</p>
                    <p class="lead mb-4">Como ejemplo vamos a crear una Pagina Maestra, es decir una plantilla que se repite en varias paginas, en este archivo podemos tener HTML y usar CSS.
                        Utilizaremos la vista ya creada de ejmplo
                    </p>
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
            <img src="{{asset('img/b1.png')}}" alt="" width="500px">

        </div>
        <div class="col-lg-6">
            <div class="content mx-auto">
                <div>
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">2.</span> Definir un layout</h3>
                    <p class="lead mb-4">Crearemos nuestra marca tip HTML</p>
                    <p class="lead mb-4">
                        <li> En el titulo colocaremos @ yield que es utilizada para mostrar el contenido en una sección determinada.
                        </li>
                    </p>
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

                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <img src="{{asset('img/b2.png')}}" alt="" width="500px">
        </div>
    </div>
</div>
<div class="col mt-5" id="hero">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{asset('img/b3.png')}}" alt="" width="500px">
        </div>
        <div class="col-lg-6">
            <div class="content mx-auto">
                <div>
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">3.</span> Creacion del menu</h3>
                    <p class="lead mb-4">Colocaremos un navbar para que todos las demas vistas puedan heredarlo y no se este creando en cada una</p>

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
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">4.</span> Creación del contenido de cada pagina</h3>
                    <p class="lead mb-4">Dentro de otro row colocaremos otro @ yield y llevara como nombre (contenido)</p>

                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <img src="{{asset('img/b4.png')}}" alt="" width="500px">
        </div>
    </div>
</div>
<div class="col mt-5" id="hero">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{asset('img/b5.png')}}" alt="" width="500px">
        </div>
        <div class="col-lg-6">
            <div class="content mx-auto">
                <div>
                    <h3 class="display-5 fw-bold mb-4"><span class="text-primary">5.</span> Extender un layout</h3>
                    <p class="lead mb-4">Al definir una vista hija, utiliza la directiva de Blade @ extends para indicar
                        el layout que deberá «heredarse» en la vista hija. Las vistas que extiendan un layout de Blade pueden inyectar contenido en la secciones del layout usando directivas @ section.
                    </p>
                    <ul>
                        <li>Primero utilizaremos @ extends para traer todo lo del padre</li>
                        <li>Con un section mandaremos a llamar el titulo y colocaremos el numebre de nuestra vista</li>
                        <li>Y por ultimo traeremos el cotenido que llevara la pagina, es aqui nonde agregaremos todo el diseño de nuestra pagina</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection