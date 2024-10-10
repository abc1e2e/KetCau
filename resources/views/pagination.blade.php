@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link" aria-label="Previous"><img style="height: 15px;" src="{{ asset('images/arrow-left-01-sharp_1.png') }} " alt="arrow-left-01-sharp_1.png"> </span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous"><img style="height: 15px;" src="{{ asset('images/arrow-left-01-sharp_1.png') }} " alt="arrow-left-01-sharp_1.png"> </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled">
                        <span class="page-link">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                                <span class="page-link">{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next"> <img  style="height: 15px;"  src="{{ asset('images/arrow-left-01-sharp_2.png') }} " alt="arrow-left-01-sharp_2.png"> </a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link" aria-label="Next"> <img style="height: 15px;" src="{{ asset('images/arrow-left-01-sharp_2.png') }} " alt="arrow-left-01-sharp_2.png"> </span>
                </li>
            @endif
        </ul>
    </nav>
@endif