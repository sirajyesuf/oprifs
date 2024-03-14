<div>
        <x-headersection></x-headersection>

        <section class="gallery_hero">
            <p>Explore</p>
            <img
                src="{{ asset('img/gallery_hero.jpg') }}"
                alt="oprifs gallery hero"
                class="gallery_hero_img"
            />
        </section>

        <section class="gallery">

            @foreach ($galleries as  $gallery)
                
                <figure class="gallery-item">
                    <img src="{{asset('storage/'.$gallery->path)}}" alt="" />
                </figure>

            @endforeach

            <div class="gallery__pagination">

                <img 
                wire:click="previousPage"
                wire:loading.attr="disabled"
                src="{{asset("img/back_pagination.png")}}" alt="back pagination"
                class="gallery__pagination__icon"
                >
                <div class="gallery__pagination__range">
                    04/24
                </div>
                @if($galleries->onLastPage())
                    <img src="{{asset("img/forward_pagination.png")}}" alt="back pagination" class="gallery__pagination__icon">
                @else
                    <img
                    wire:click="nextPage"
                    wire:loading.attr="disabled"
                    src="{{asset("img/forward_pagination.png")}}" alt="back pagination" class="gallery__pagination__icon"
                    >
                @endif
            </div>

        </section>
        <x-footersection></x-footersection>
</div>

