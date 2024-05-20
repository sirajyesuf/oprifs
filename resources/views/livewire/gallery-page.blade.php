<div>

        <section class="gallery_hero">

            {{-- <div class="gallery_hero__title"> Explore </div> --}}

            <div class="gallery_hero__imgbox">
                
                <img
                    src="{{ asset('img/gallery_hero_img.jpg') }}"
                    alt="oprifs gallery hero"
                    class="gallery_hero_img"
                />

            </div>
        </section>

        <section class="gallery">

            <div class="galleries">

                @foreach ($galleries as  $gallery)

                    <div class="gallery_item">

                        <div class="gallery_item__imgbox">

                            <img src="{{asset('storage/'.$gallery->path)}}" alt="picture" class="gallery_item__img"/>

                        </div>


                        <div class="gallery_item__overlay">
                            {{\Illuminate\Support\Str::limit($gallery->description,80)}}
                        </div>

                        <div class="gallery_item__description">
                            
                            {{$gallery->description}}
                           
                        </div>

                    </div>

                @endforeach


            </div>


            {{ $galleries->links('components.pagination') }}



        </section>


    </div>

