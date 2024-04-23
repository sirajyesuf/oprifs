<div>

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
                <div class="gallery_item">
                    <img src="{{asset('storage/'.$gallery->path)}}" alt="picture"/>

                    <div class="gallery_item__overlay">  
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam distinctio quas, itaque obcaecati dolor dolore quae nihil vitae veniam. Adipisci fuga laboriosam totam eaque! Nemo sequi enim cum minus molestiae.
                        
                        </p>                     
                    </div>

                </div>
            @endforeach

            <div class="gallery__pagination">
                <svg 
                wire:click="previousPage"
                wire:loading.attr="disabled"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="gallery__pagination__icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
                  
                {{-- <div class="gallery__pagination__range">
                    04/24
                </div> --}}
                @if($galleries->onLastPage())
                <svg
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="gallery__pagination__icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                  </svg>                @else
                 
                    <svg
                    wire:click="nextPage"
                    wire:loading.attr="disabled"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="gallery__pagination__icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                      </svg>
                      
                @endif
            </div> 

        </section>


    </div>

