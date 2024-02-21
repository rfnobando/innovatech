<x-layouts.app title="Publicaciones" headImage="{{ asset('img/bg/post-index.jpg') }}">
    <x-slot name="subtitle">
        Explora nuestra colección de artículos y novedades tecnológicas más recientes.
        Desde análisis detallados hasta guías prácticas,
        sumérgete en el fascinante mundo de la tecnología.
        Descubre contenido fresco y actualizado que te mantendrá informado y entusiasmado.
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
                @include('posts.list')
                {{ $posts->links('vendor.pagination.simple-bootstrap-5') }}
                <br>
            </div>
        </div>
    </div>
</x-layouts.app>