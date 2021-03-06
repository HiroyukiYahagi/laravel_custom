@if ($paginator->hasPages())
    <ul class="uk-pagination uk-flex-center">
        <li>
            <a href="{{ $paginator->url(1) }}">
                <span uk-pagination-previous></span>
                <span uk-pagination-previous></span>
            </a>
        </li>
        @if (!$paginator->onFirstPage())
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                    <span uk-pagination-previous></span>
                </a>
            </li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="uk-disabled">
                    <span>...</span>
                </li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="uk-active">
                            <span>{{$page}}</span>
                        </li>
                    @else
                        <li>
                            <a href="{{ $url }}">
                                <span>{{ $page }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                    <span uk-pagination-next></span>
                </a>
            </li>
        @endif
        <li>
            <a href="{{ $paginator->url($paginator->lastPage()) }}">
                <span uk-pagination-next></span>
                <span uk-pagination-next></span>
            </a>
        </li>
    </ul>
@endif
