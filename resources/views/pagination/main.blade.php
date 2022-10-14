@if($paginator->hasPages())
    <div class="col-12">
        <div class="pagination-area">
            <ul>
                {{-- Previous Page Link --}}
                @if($paginator->onFirstPage())
                    <li class="not-active" aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <a>
                            <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                            <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                        </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="not-active" aria-disabled="true"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="active" aria-current="page">
                                    <a>{{ $page }}</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li>
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        </a>
                    </li>
                @else
                    <li class="not-active" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <a>
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
@endif
