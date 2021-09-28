@extends('layout.plantilla')
@section('titulo', 'Instalacion')
@section('contenido')
<div class="row p-5">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">1. Descargar composer</h5>
                <p class="card-text">Para ellos precionamos el siguiente boton que nos llevara a la pagina principal de compocel</p>
                <a href="https://getcomposer.org/" class="btn btn-primary">Ir a Composer</a>
                <p class="card-text mt-4">Una vez dentro de la pagina daremos click en el boton dowload</p>
                <img src="{{asset('img/i1.png')}}" alt="" width="500px">
                <!-- <p>https://getcomposer.org/</p> -->
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">3. Abri nuestro archivo descargado de compocer</h5>
                <p class="card-text">Damos clic en ejecutar</p>
                <img src="{{asset('img/i3.png')}}" alt="" width="500px">
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">5. En las siguientes ventanas daremos click en next</h5>
                <p class="card-text">Y despues damos clic en finich</p>
                <img src="{{asset('img/i5.png')}}" alt="" width="500px">
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">7. Una vez ya configurado el git</h5>
                <p class="card-text">Damos clic en el boton finish</p>
                <img src="{{asset('img/i7.png')}}" alt="" width="500px">
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">9. Abrimos nuestro simbolo del sistema</h5>
                <p class="card-text">Y entraremos a nuestro carpeta htdocs con el siguiente comadno</p>
                <a>cd C:\xampp\htdocs</a>
                <img src="{{asset('img/i9.png')}}" alt="" width="500px">
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">11. Poner en marcha el proyecto Laravel</h5>
                <p class="card-text">Abrimos nuestro proyecto en VSC y en nuestra consola colocaremos el siguiente comando </p>
                <a>php artisan serve</a>
                <p>Nos arrojara un link que es el de nuestro servidor donde se encuntra la pagina accedemos a el para mostrar nuestra pagina web</p>
                <img src="{{asset('img/i12.png')}}" alt="" width="500px">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">2. Descargar Git</h5>
                <p class="card-text">Para ello nos dirigimos a la pagina de git</p>
                <a href="https://git-scm.com/" class="btn btn-primary">Ir a Git</a>
                <p class="card-text mt-4">Una vez dentro de la pagina daremos click en el boton dowload</p>
                <img src="{{asset('img/i2.png')}}" alt="" width="500px">
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">4. Nos abrira una nueva ventana</h5>
                <p class="card-text">Damos clic en instalar</p>
                <img src="{{asset('img/i4.png')}}" alt="" width="500px">
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">6. Instalamos git</h5>
                <p class="card-text">Para ello abrimos nuestro archivo descargado de git, Una vez abirto daremos clic en next a todas las ventanas siguientes</p>
                <img src="{{asset('img/i6.png')}}" alt="" width="500px">
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">8. Creacion de un nuevo proyecto</h5>
                <p class="card-text">Abrimos nuestro simbolo de sistema y colocaremos el sigueinte somando para ingresar a la ruta donde
                    se guardara nuestro proyecto laravel, este tiene que estar dentro de nuestro servidor, en este caso estoy usando XAMPP, asi que nos dirigimos
                    a Disco local (C:) > xampp > htdocs y copiaremos la ruta de esta carpeta
                </p>
                <a> C:\xampp\htdocs</a>
                <img src="{{asset('img/i8.png')}}" alt="" width="500px">
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">10. Crearemos el nuevo proyecto donde vamos a trabajar</h5>
                <p class="card-text">Para ello colocamos el siguiente comando:</p>
                <a>composer create-project laravel/laravel mi-proyecto-laravel</a>
                <p class="card-text">Y esperamos a que descarguen todas las paqueterias</p>
                <img src="{{asset('img/i10.png')}}" alt="" width="500px">
            </div>
        </div>
    </div>
</div>


@endsection