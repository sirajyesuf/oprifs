<div>
<x-headersection></x-headersection>


        {{-- hero section start --}}
        <section class="herosection">
                
                <img src="{{asset("img/hero.jpg")}}" alt="" class="herosection_img">

                <div class="herosection__info">


                    <button class="herosection__info_cta">
                        Donate
                    </button>

                    <p class="herosection__info_text">
                        Organization for Prevention,
                        <br>
                        Rehabilitation and Integration
                        <br>
                        of Female Street Children.
                    </p>


                </div>


        </section>

        {{-- hero section end --}}


        {{-- volunter section start --}}

        <section class="voluntersection">
            <div class="voluntersection__heading">
                Meet Our Volunteers
            </div>

            <div class="voluntersection__volunters">

                <div class="voluntersection__volunters_volunter">
                    <img src="{{asset("img/volunter1.png")}}" alt="" class="voluntersection__volunters_volunter_img">
                    <div class="voluntersection__volunters_volunter_detail">
                        <p class="voluntersection__volunters_volunter_detail__name">
                            john doe
                        </p>
                    </div>
                </div>
                <div class="voluntersection__volunters_volunter">
                    <img src="{{asset("img/volunter2.png")}}" alt="" class="voluntersection__volunters_volunter_img">
                    <div class="voluntersection__volunters_volunter_detail">
                        <p class="voluntersection__volunters_volunter_detail__name">
                            john doe
                        </p>
                    </div>
                </div>
                <div class="voluntersection__volunters_volunter">
                    <img src="{{asset("img/volunter3.png")}}" alt="" class="voluntersection__volunters_volunter_img">
                    <div class="voluntersection__volunters_volunter_detail">
                        <p class="voluntersection__volunters_volunter_detail__name">
                            john doe
                        </p>
                    </div>
                </div>
                <div class="become_avolunter">
                    <div class="become_avolunter__imgbox">
                        <img src="{{asset("img/volunterhand.png")}}" alt="">

                    </div>
                    <div class="become_avolunter__heading">Become a Volunteer</div>
                    <div class="become_avolunter__subheading">Centuries but also the leap  electtypesetting, remaining </div>
                    <div class="become_avolunter_joinustoday">
                        <a href="#">Join Us Today</a>
                    </div>
          
                </div>

            </div>
        </section>


        {{-- volunter section end --}}


        <section class="volunter_registration_section">


            <div class="volunter_registration_sectionbox">

                <div class="volunter_registration_section__hero">
                        <img src="{{asset("img/2.jpg")}}" alt="">
                </div>
        
                <div class="volunter_registration_section__form">
                    <div class="volunter_registration_section__form_heading">
                        become  a volunteer
                    </div>
                    <form wire:submit="save" class="volunter_registration_section__form__inputs">
                        <input type="text" name="name"   placeholder="Full Name*" wire:model="name">
                        <input type="email" name="email" placeholder="Email Address*" wire:model="email">
                        <input type="email" name="tel" placeholder="Phone Number*" wire:model="email">

                        <textarea name="message"  rows="15" placeholder="Tell us about the skills and experience you can offer" wire:model="message"></textarea>
                        
                        <button type="submit" class="volunter_registration_section__form_submit">
                            Submit Now
                        </button>
                    </form>
                </div>

            </div>






        </section>

        <!-- homepage gallery section start -->
        <section class="homepage__gallery_section">

            <div class="homepage__gallery_section_cta">
                <h1>Gallery</h1>
                <p>
                Explore our gallery to witness the transformative power of volunteering. Each image tells a story of hope, resilience, and collective effort. Join us on this visual journey of compassion and community building.
                </p>
                <button>
                    <a href="/gallery">
                        explore
                    </a>
                </button>
            </div>

            @foreach ( $galleries as $gallery )
                            
                <img src="{{ asset('storage/'.$gallery->path)}}" alt="gallery image"  class="homepage__gallery_section_gallery-item item{{$loop->iteration}}"/>

            @endforeach


            <div class="homepage__gallery_section_gallery-item_info">

                <div class="homepage__gallery_section_gallery-item_info_tags">
                    
                    <p>Education</p>
                    <p>Health</p>
                </div>

                <div class="homepage__gallery_section_gallery-item_info_text">
                    More than one  life
                    changed.
                </div>
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


        {{-- cta start --}}

        <section class="actionsbuttons">
            <div class="actionsbuttons__newsletterbox">
                <h1 class="actionsbuttons__newsletterbox_heading">Newsletter</h1>
                <p class="actionsbuttons__newsletterbox_subheading">
                    Sign up for our monthly newsletter to get the latest news, volunteer opportunities.
                </p>
                <form class="actionsbuttons__newsletterbox__form">
                    <input type="email" name="email" placeholder="Enter Your Email Address"
                    class="actionsbuttons__newsletterbox__form_inputtag"
                    >

                    <button
                    class="actionsbuttons__newsletterbox__form_subscribebtn"
                    >
                    subscribe
                    </button>
                </form>
            </div>
            <div class="actionsbuttons__blogbox">
                <h1 class="actionsbuttons__blogbox_heading">
                    Take Look At Recent News
                </h1>
                <button class="actionsbuttons__blogbox_ctabtn">NEWS</button>
            </div>
        </section>

        {{-- cta end --}}

        <x-footersection></x-footersection>




</div>