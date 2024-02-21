<x-layouts.app title="{{ $post->title }}" headImage="{{ asset('img/bg/post-show.jpg') }}">
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h2 class="section-heading">{{ $post->subtitle }}</h2>
                    <p class="post-meta m-0">
                        Fecha de publicación: {{ $post->created_at->format('d/m/Y') }}
                    </p>
                    <img src="{{ asset('storage').'/'.$post->image }}" class="img-fluid custom-mh-400px">
                    <p>{!! nl2br(e($post->body)) !!}</p>
                        Autor: {{ $post->author }}
                    </p>
                </div>
            </div>
        </div>
    </article>
</x-layouts.app>