<x-layouts.admin title="Crear publicación" bgImage="{{ asset('img/bg/admin.jpg') }}">
    <section class="container rounded bg-light px-3 py-4 my-5">
        <h3 class="text-center">Crear nueva publicación</h3>
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">    
                @csrf
                @include('posts.form-fields')
                <button class="btn btn-primary my-4" type="submit">Crear publicación</button>
            </form>
            <a class="link-primary" href="{{ route('posts.index') }}">Volver</a>
    </section>
</x-layouts.admin>