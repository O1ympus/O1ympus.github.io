@if ($paginator->lastPage() > 1)
    <div class="pagination {{ ($paginator->currentPage() == 3) ? 'third_pagination_page' : ''}}">
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <div class="{{ ($paginator->currentPage() == $i) ? ' active_pagination' : '' }} pagination__el">
                <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
            </div>
        @endfor
    </div>
@endif
