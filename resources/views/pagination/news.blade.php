@if ($paginator->total() > $paginator->perPage())
    <div class="d-flex justify-content-center">
        <div class="pagination">
            @if ($paginator->currentPage() > 1)
                <a href="{{ $paginator->previousPageUrl() }}" class="p-pre">PREVIOUS</a>
            @endif

            <span>{{'Page ' . $paginator->currentPage() . ' of ' . $paginator->lastPage()}}</span>
            
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->url($paginator->lastPage()) }}" class="p-next">NEXT</a>
            @endif
        </div>
    </div>
@endif
