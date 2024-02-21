<x-layouts.app title="¡Bienvenido a Innovatech!" headImage="{{ asset('img/bg/home.jpg') }}">
    <x-slot name="subtitle">
        Este es tu espacio dedicado a la tecnología, donde podrás explorar las últimas noticias,
        descubrir guías prácticas y sumergirte en el emocionante mundo de la innovación digital.
        Nuestro objetivo es inspirar, educar y entretener a través de contenido fresco diseñado
        especialmente para ti.
        ¡Acompáñanos en este apasionante viaje hacia el futuro tecnológico!
    </x-slot>
    @auth
        <div class="text-center my-4">
            <a class="btn btn-primary my-2" href="{{ route('posts.create') }}">Crear publicación</a>
        </div>
    @endauth
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h3>Publicaciones recientes</h3>
                @include('posts.list')
                <div class="text-center">
                    <a class="btn btn-primary" href="{{ route('posts.index') }}">Ver todas las entradas</a>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
</x-layouts.app>