@foreach($posts as $post)
    <!-- Post preview-->
    <div class="post-preview">
        <a href="{{ route('posts.show', $post) }}">
            <h2 class="post-title">{{ $post->title }}</h2>
            <p class="post-meta m-0">
                Fecha de publicación: {{ $post->created_at->format('d/m/Y') }}
            </p>
            <img src="{{ asset('storage').'/'.$post->image }}" class="img-fluid custom-mh-400px" width="100%">
            <h3 class="post-subtitle font-italic">{{ Str::limit($post->body, 150) }}</h3>
        </a>
        @auth
            <br>
            <a class="btn btn-secondary text-white mb-2 w-100" href="{{ route('posts.edit', $post) }}">Editar</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger w-100" type="submit">Borrar</button>
            </form>
        @endauth
    </div>
    <!-- Divider-->
    <hr class="my-4 border border-secondary" />
@endforeach