@if ($paginator->hasPages())
    <nav class="pagination" role="navigation" aria-label="Pagination Navigation">
        <ul class="pagination m-auto">
            {{-- Previous Page Link --}}
            @if (!$paginator->onFirstPage())
                <li class="custom-page-item">
                    <a class="custom-page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                        < Anterior
                    </a>
                </li>
            @endif
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="custom-page-item">
                    <a class="custom-page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">
                        Siguiente >
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif
