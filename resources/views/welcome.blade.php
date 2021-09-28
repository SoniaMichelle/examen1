@extends('layout.plantilla')
@section('titulo', 'Inicio')
@section('contenido')
<!-- HEADER -->
<section class="mt-5">
    <div class="cover d-flex justify-content-center align-items-center flex-column">
        <h1>LARAVEL 8</h1>
        <p>Framawork</p>
        <a href="#" class="btn btn-primary">Saber más</a>
    </div>
</section>
<!-- QUE ES? -->
<div class="col mt-5" id="hero">
    <div class="row">
        <div class="col-lg-6">
            <div class="content mx-auto">
                <div>
                    <h1 class="display-4 fw-bold mb-4"><span class="text-primary">¿</span>Qué es laravel 8<span class="text-primary">?</span></h1>
                    <p class="lead mb-4"><span class="text-primary">Laravel</span>es uno de los frameworks de código abierto más fáciles de asimilar para PHP. Es simple, muy potente y tiene una interfaz elegante y divertida de usar. Fue creado en 2011 y tiene una gran influencia de frameworks como Ruby on Rails, Sinatra y ASP.NET MVC.</p>
                    <a href="#" class="btn btn-primary">Saber más</a>
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <img src="{{asset('img/d3.png')}}" alt="" width="500px">
        </div>
    </div>
</div>
<!-- CARD -->
<div class="col mt-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">¿Laravel es Frontend o Backend?</h5>
                    <p class="card-text">Laravel es principalmente un marco de desarrollo de backend, aunque ofrece algunas funcionalidades de frontend. Sin embargo, muchas de las características de Laravel son agnósticas al frontend.</p>

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">¿Es Laravel un Lenguaje de Programación?</h5>
                    <p class="card-text">Es un framework PHP y utiliza un lenguaje de scripting en lugar de ser un lenguaje de programación PHP estricto. Aunque los lenguajes esten relacionados, tienen varias diferencias, principalmente en la facilidad de uso y la velocidad de ejecución.</p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- PORQUE? -->
<div class="col mt-5" id="hero">
    <div class="row">
        <div class="col-lg-6 d-flex justify-content-center">
            <img src="{{asset('img/gif.gif')}}" alt="" width="500px">
        </div>
        <div class="col-lg-6">
            <div class="content mx-auto">
                <div>
                    <h1 class="display-4 fw-bold mb-4"><span class="text-primary">¿</span>Por Qué Debería Usar Laravel<span class="text-primary">?</span></h1>
                    <p class="lead mb-4">Laravel proporciona un gran conjunto de herramientas robustas que ayudan a que
                        el proceso de desarrollo de aplicaciones web sea más fácil y rápido, y las bases de código de
                        las aplicaciones finales están bien estructuradas y se mantienen fácilmente.</p>
                    <ul>
                        <li>
                            <p class="step"><strong>Laravel es Fácil de Aprender</strong></p>
                            <p>
                                Laravel es relativamente fácil de aprender, si se tienen los conocimientos adecuados. Laravel requiere una comprensión general de PHP y conceptos de programación orientada a objetos (POO) para su uso efectivo. Saber al menos algo de HTML también es útil. Y para cualquier arquitectura MVC, también es útil comprender los sistemas de gestión de bases de datos relacionales, como MySQL o PostgreSQL.
                            </p>
                        </li>
                        <li>
                            <p class="step"><strong>Laravel Simplifica el Proceso de Desarrollo</strong></p>
                            <p>
                                Laravel fue diseñado para simplificar las tareas que son comunes en una variedad de proyectos de desarrollo web como el enrutamiento, la autenticación, la migración, el almacenamiento en caché, y más. Laravel simplifica la integración de módulos prefabricados en una aplicación, utilizando interfaces de línea de comandos intuitivas y expresivas y Composer. </p>
                        </li>
                        <li>
                            <p class="step"><strong>Laravel es Fácilmente Escalable</strong></p>
                            <p>
                                Laravel es altamente escalable. Con soporte integrado para sistemas de caché rápidos y distribuidos, las aplicaciones de Laravel son capaces de atender millones de solicitudes al mes. </p>
                        </li>
                    </ul>

                </div>
            </div>

        </div>

    </div>
</div>
@endsection