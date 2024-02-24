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

            <div class="gallery-item_info">
                <p>
                    More than thousands of lives<br />
                    changed.
                </p>
            </div>

            <div class="gallery__pagination">
                <div class="gallery__pagination_item"></div>
                <div class="gallery__pagination_item"></div>
                <div class="gallery__pagination_item"></div>
            </div>

        </section>
        <x-footersection></x-footersection>
</div>

