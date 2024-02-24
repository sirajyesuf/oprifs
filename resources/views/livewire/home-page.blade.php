<div>
<x-headersection></x-headersection>




        <!-- homepage gallery section start -->
        <section class="homepage__gallery_section">

            <div class="homepage__gallery_section_cta">
                <h1>Gallery</h1>
                <p>
                Explore our gallery to witness the transformative power of volunteering. Each image tells a story of hope, resilience, and collective effort. Join us on this visual journey of compassion and community building.
                </p>
                <button>
                    <a href="/gallery">
                        see more
                    </a>
                </button>
            </div>

            @foreach ( $galleries as $gallery )
                            
            <figure class="homepage__gallery_section_gallery-item item{{$loop->iteration}}">
                <img src="{{ asset('storage/'.$gallery->path)}}" alt="" />
            </figure>

            @endforeach


            <div class="homepage__gallery_section_gallery-item_info">
                <p>
                More than thousands of lives<br />
                changed.
                </p>
            </div>

        </section>
        <!-- homepage gallery section end -->

        <!-- testimonials  section start-->
        <section class="testimonials_section">
            <div class="testimonials__title">What people say about us</div>
            <div class="testimonials">
                @foreach ($testimonials as $testimonial)
                <div class="testimonial">
                    <div class="testimonial__header">
                        <div class="testimonial__name">
                            <p class="testimonial__name_fn">
                                {{$testimonial->name}}
                            </p>
                            <p class="testimonial__name_job">
                                {{$testimonial->job}}
                            </p>
                        </div>
                        <div class="testimonial__quote">&ldquo;</div>
                    </div>
                    <div class="testimonial__content">
                        {{$testimonial->content}}
                    </div>
                </div>
                @endforeach

            </div>

            <div class="testimonials__pagination">

            @if ($testimonials->onFirstPage())

                <div class="testimonials__pagination_back">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="ionicon"
                        viewBox="0 0 512 512"
                    >
                        <path
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="48"
                            d="M328 112L184 256l144 144"
                        />
                    </svg>
                </div>
            @else

            <div 
            @wire:click="previousPage"
            wire:loading.attr="disabled"
            class="testimonials__pagination_back">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="ionicon"
                        viewBox="0 0 512 512"
                    >
                        <path
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="48"
                            d="M328 112L184 256l144 144"
                        />
                    </svg>
            </div>

            @endif
            
                <div class="testimonials__pagination_line"></div>

            @if($testimonials->onLastPage())

                <div class="testimonials__pagination_forward">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="ionicon"
                        viewBox="0 0 512 512"
                    >
                        <path
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="48"
                            d="M184 112l144 144-144 144"
                        />
                    </svg>
                </div>
            @else
            <div
            wire:click="nextPage"
            wire:loading.attr="disabled"
            class="testimonials__pagination_forward">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="ionicon"
                        viewBox="0 0 512 512"
                    >
                        <path
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="48"
                            d="M184 112l144 144-144 144"
                        />
                    </svg>
                </div>

            @endif

            </div>
        </section>

        <!-- testimonials section end -->
        <section class="actionsbuttons">
            <div class="actionsbuttons__volunterbox box">
                <h1>to become a volunter</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Sapiente aperiam qui illo tempore inventore doloribus, ipsa
                    iusto nostrum provident? Accusantium aperiam quas ipsum
                    autem rerum inventore minima neque veritatis vel?
                </p>
                <button>join the community</button>
            </div>
            <div class="actionsbuttons__blogbox box">
                <h1>to read our blog</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Odit nemo quaerat perspiciatis nam ipsa eaque rerum! Maiores
                    officia tempore maxime asperiores ad saepe amet, ratione
                    odit ducimus. Quaerat, fuga officia?
                </p>
                <button>read</button>
            </div>
        </section>

        <x-footersection></x-footersection>




</div>