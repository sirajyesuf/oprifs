<div class="gallery__pagination">
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation">
            {{-- @if ($paginator->currentPage() == 1)
            <div class="gallery__pagination_item"
            wire:click="setPage(1)" wire:loading.attr="disabled"
            ></div>
            <div class="gallery__pagination_item"
            wire:click="setPage(2)" wire:loading.attr="disabled"
            ></div>
            <div class="gallery__pagination_item"
            wire:click="setPage(3)" wire:loading.attr="disabled"
            ></div> --}}

            
            @if($paginator->currentPage() <= $this->paginationLength)

                @if ($paginator->currentPage()-1 != 0)
                    
                    <div class="gallery__pagination_item"
                    wire:click="setPage({{$paginator->currentPage()-1}})" wire:loading.attr="disabled"
                    >
                    </div>
                @endif

                <div class="gallery__pagination_item gallery__pagination_item__current"
                wire:click="setPage({{$paginator->currentPage()}})" wire:loading.attr="disabled"
                >
                </div>

                @if ($paginator->currentPage()+1 <= $this->paginationLength)

                    <div class="gallery__pagination_item"
                    wire:click="setPage({{$paginator->currentPage()+1}})" wire:loading.attr="disabled"
                    >
                    </div>
                @endif

    
            @endif
        </nav>
    @endif
</div>