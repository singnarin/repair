@if ($paginator->lastPage() > 1)
    <ul class="pagination">
        @if ($paginator->currentPage() != 1 && $paginator->lastPage() >= 5)
            <li>
                <a href="{{ $paginator->url($paginator->url(1)) }}" >
                    <<
                </a>
            </li>
        @endif
        @if($paginator->currentPage() != 1)
            <li>
                <a href="{{ $paginator->url($paginator->currentPage()-1) }}" >
                    <
                </a>
            </li>
        @endif
        @for($i = max($paginator->currentPage()-2, 1); $i <= min(max($paginator->currentPage()-2, 1)+4,$paginator->lastPage()); $i++)
                <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
        @endfor
        @if ($paginator->currentPage() != $paginator->lastPage())
            <li>
                <a href="{{ $paginator->url($paginator->currentPage()+1) }}" >
                    >
                </a>
            </li>
        @endif
        @if ($paginator->currentPage() != $paginator->lastPage() && $paginator->lastPage() >= 5)
            <li>
                <a href="{{ $paginator->url($paginator->lastPage()) }}" >
                    >>
                </a>
            </li>
        @endif
    </ul>
@endif
