<div>

        <section class="gallery_hero">
            <p>Explore123</p>
            <img
                src="{{ asset('img/gallery_hero.jpg') }}"
                alt="oprifs gallery hero"
                class="gallery_hero_img"
            />
        </section>

        <section class="gallery">

            <div class="galleries">

                @foreach ($galleries as  $gallery)
                    <div class="gallery_item">

                        <img src="{{asset('storage/'.$gallery->path)}}" alt="picture" class="gallery_item__img"/>


                        <div class="gallery_item__overlay">  
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam distinctio quas, itaque obcaecati dolor dolore quae nihil vitae veniam. Adipisci fuga laboriosam totam eaque! Nemo sequi enim cum minus molestiae.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias porro iure, vitae totam excepturi expedita sapiente reiciendis hic sequi, ea dicta eos distinctio ipsa voluptatum fugiat! Accusantium saepe odit cumque?
                            
                            </p>                     
                        </div>

                    </div>
                @endforeach


            </div>


            {{ $galleries->links('components.pagination') }}



        </section>


    </div>

