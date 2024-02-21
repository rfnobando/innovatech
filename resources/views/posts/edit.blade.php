<x-layouts.admin title="Editar publicación #{{ $post->id }}" bgImage="{{ asset('img/bg/admin.jpg') }}">
    <section class="container rounded bg-light px-3 py-4 my-5">
        <h3 class="mb-3">Editar publicación #{{ $post->id }}</h3>
        <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">    
            @csrf
            @method('PATCH')
            @include('posts.form-fields')
            <button class="btn btn-primary my-4" type="submit">Guardar cambios</button>
        </form>
        <a class="link-primary" href="{{ route('posts.index') }}">Volver</a>
    </section>
</x-layouts.admin>