<div class="container">



        {{-- hero section start --}}
        <section class="herosection">

                <div class="herosection__info">

                    <p class="herosection__info_text">
                        Organization for Prevention
                        Rehabilitation & Integration
                        of Female Street Children.
                    </p>

                    <button class="herosection__info_cta">
                        <a href="/donate">
                            Donate
                        </a>
                    </button>

                </div>

                <div class="herosection_imgbox">
                    
                    <img src="{{asset("img/oprifs_hero.png")}}" alt="" class="herosection_img">

                </div>


        </section>
        {{-- hero section end --}}




        <section class="programs_section" id="#programs_section">

            <div class="programs_section__heading">
                our programs
            </div>

                
            <div class="programs">
                @foreach ($programs as $program )

                <div class="program">

                    <div class="program_imgbox">
                        {!!$program->icon!!}
                    </div>


                    <div class="program_heading">
                        {{$program->name}}
                    </div>

                    <div class="program_subheading">
                        {{$program->description}}
                    </div>
                </div>

            @endforeach
        </section>
        
        {{-- volunter section start --}}
        <section class="voluntersection">
            <div class="voluntersection__heading">
                Meet Our Volunteers
            </div>

            <div class="voluntersection__volunters">

                @foreach ($volunteers as $volunteer )
                    
                    <div class="voluntersection__volunters_volunter">
                        <div class="voluntersection__volunters_volunter_imgbox">
                            <img src="{{ asset('storage/'.$volunteer->image)}}" alt="volunter picture" class="voluntersection__volunters_volunter_img">
                        </div>
                        <div class="voluntersection__volunters_volunter_detail">
                            <p class="voluntersection__volunters_volunter_detail__name">
                                {{$volunteer->full_name}}
                            </p>

                            <p class="voluntersection__volunters_volunter_detail__name">
                                {{$volunteer->occupation}}
                            </p>
                        </div>
                    </div>

                @endforeach
                
                <div class="become_avolunter voluntersection__volunters_volunter">
                    <div class="become_avolunter__imgbox">
                        <img src="{{asset("img/volunterhand.png")}}" alt="volunterhand">
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


        <section class="volunter_registration_section" id="volunter_registration_section">

                <div class="volunter_registration_section__hero">
                    <div class="volunter_registration_section__hero_heading">
                        Join The Community To Give Education,Health,Legal and other For Girls.
                    </div>
                    <div class="volunter_registration_section__hero_subheading">
                        Empower change by joining our community. Together, let's ensure every girl gets the education she deserves. Make an impact now.
                    </div>
                </div>
        
                <div class="volunter_registration_section__form">
                    <div class="volunter_registration_section__form_heading">
                        become  a volunteer
                    </div>
                    <form wire:submit="becomeAVolunteer" class="volunter_registration_section__form__inputs">
                        <div class="volunter_registration_section__form__inputs_top">
                            <div class="inputtag">
                                <input type="text" name="name"   placeholder="Full Name" wire:model="name"
                                class="inputtag__name"
                                >
                                <div>
                                    @error('name') <span class="error">{{ $message }}</span> @enderror 
                                </div>
                            </div>
                            <div class="inputtag">
                                <input type="email" name="email" placeholder="Email Address" wire:model="email"
                                class="inputtag__email"
                                >
                                <div>
                                    @error('email') <span class="error">{{ $message }}</span> @enderror 
                                </div>
                            </div>

                        </div>


                        <div class="inputtag inputtag_message">
                            <textarea name="message" cols="" rows="5"  placeholder="Message" wire:model="message"
                            ></textarea>
                            <div>
                                @error('message') <span class="error">{{ $message }}</span> @enderror 
                            </div>
                        </div>
                        
                        <button type="submit" class="volunter_registration_section__form_submit inputtag">
                            Submit Now
                        </button>

                        @if(session('volunteer_status'))
                        <div class="success">
                            {{ session('volunteer_status') }}
                        </div>
                        @endif
                    </form>
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

            <div class="homepage__gallery_section_gallery-item">

                <img src="{{ asset('storage/'.$gallery->path)}}" alt="gallery image"  class="homepage__gallery_section_gallery-item-img"/>
                
            </div>
                            
            @endforeach

            <div class="homepage__gallery_section_gallery-item_info">

                <div class="homepage__gallery_section_gallery-item_info_tags">
                    <p>Education</p>
                    <p>Safe Home</p>
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
                    <img src="{{asset('storage/'.$testimonial->path)}}" alt="" class="testimonial__image">
                    <div class="testimonial__body">
                        <div class="testimonial__header">
                            <div class="testimonial__name">
                                <p class="testimonial__name_fn">
                                    {{$testimonial->name}}
                                </p>
                                <p class="testimonial__name_job">
                                    {{$testimonial->job}}
                                </p>
                            </div>
                            <img src="{{asset("img/quote.png")}}" alt="quote image" class="testimonial__quote">
                        </div>
                        <div class="testimonial__content">
                            {{$testimonial->content}}
                        </div>
                    </div>

                </div>
                @endforeach

            </div>

            <div class="testimonials__pagination">

            @if ($testimonials->onFirstPage())
                <div class="testimonials__pagination_back">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="pagination_icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </div>
            @else
            <div class="testimonials__pagination_forward">
                <svg
                wire:click="previousPage"
                wire:loading.attr="disabled"                
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="pagination_icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
                  
            </div>


            @endif
            
            <div class="testimonials__pagination_line"></div>

            @if($testimonials->onLastPage())
            <div class="testimonials__pagination_forward">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="pagination_icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </div>
            @else
            <div class="testimonials__pagination_forward">
                <svg 
                wire:click="nextPage"
                wire:loading.attr="disabled"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="pagination_icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </div>
            @endif
            </div> 
        </section>

        <!-- testimonials section end -->


        {{-- cta start --}}

        <section class="actionsbuttons">
            <div class="actionsbuttons__newsletterbox">
                <div class="newsletter__header">
                <h1 class="actionsbuttons__newsletterbox_heading">Newsletter</h1>
                <p class="actionsbuttons__newsletterbox_subheading">
                    Sign up to our newsletter to get the latest news,stories and volunteer opportunities.
                </p>
            </div>

                <form class="actionsbuttons__newsletterbox__form"
                wire:submit="subscribeToNewsLetter"
                >
                    <input type="email" wire:model="email_address" placeholder="Email Address"
                    class="actionsbuttons__newsletterbox__form_inputtag"
                    >
                    <button
                    class="actionsbuttons__newsletterbox__form_subscribebtn"
                    type="submit"
                    >
                    subscribe
                    </button>
                </form>
                <div>
                    @error('email_address') <span class="error_display">{{ $message }}</span> @enderror
                </div>

                @if(session('status'))
                <div class="error_display">
                    {{ session('status') }}
                </div>
            @endif
            
            </div>
            <div class="actionsbuttons__blogbox">
                <h1 class="actionsbuttons__blogbox_heading">
                    Take Look At Recent News
                </h1>
                <a class="actionsbuttons__blogbox_ctabtn"
                href="/contents">
                    NEWS
                </a>
            </div>
        </section>

        {{-- cta end --}}





</div>
