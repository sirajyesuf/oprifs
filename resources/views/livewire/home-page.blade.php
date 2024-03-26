<div class="container">
<x-headersection></x-headersection>


        {{-- hero section start --}}
        {{-- <section class="herosection">
                
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


        </section> --}}

        {{-- hero section end --}}




        <section class="programs_section">

            <div class="programs_section__heading">
                our programs
            </div>

                
            <div class="programs">
                @foreach ($programs as $program )

                <div class="program">

                    <div class="program_imgbox">
                        <ion-icon name="{{$program->icon}}" class="program_img"></ion-icon>
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
        



        {{-- oprifs program and news recommendation section start --}}
{{-- 
        <section class="programs_newsrecommendation_section">

            <div class="programs_section">

                <div class="programs_section__title">
                    programs
                </div>
                <div class="programs">
                        <div class="program">
                                <ion-icon name="home-outline" class="program__icon"></ion-icon>
                                <div class="program_title">
                                    Safe Home Based Child Care and Support
        
                                </div>
                                <div class="program_description">
                                    one of the intervention areas that makes safe home service available for female children who have been victims and vulnerable to sexual and other abuses and exploitations. Under this program, OPRIFS has been admitting and providing integrated support like food, shelter, clothes , education, healthcare, counseling, vocational training, family tracing, reunification, and post-reunification follow-up.
                                </div>
                        </div>
                        <div class="program">
                            <ion-icon name="home-outline" class="program__icon"></ion-icon>
                            <div class="program_title">
                                Safe Home Based Child Care and Support
        
                            </div>
                            <div class="program_description">
                                one of the intervention areas that makes safe home service available for female children who have been victims and vulnerable to sexual and other abuses and exploitations. Under this program, OPRIFS has been admitting and providing integrated support like food, shelter, clothes , education, healthcare, counseling, vocational training, family tracing, reunification, and post-reunification follow-up.
                            </div>
                    </div>
                    <div class="program">
                        <ion-icon name="people-outline"  class="program__icon"></ion-icon>
                        <div class="program_title">
                            Safe Home Based Child Care and Support
        
                        </div>
                        <div class="program_description">
                            one of the intervention areas that makes safe home service available for female children who have been victims and vulnerable to sexual and other abuses and exploitations. Under this program, OPRIFS has been admitting and providing integrated support like food, shelter, clothes , education, healthcare, counseling, vocational training, family tracing, reunification, and post-reunification follow-up.
                        </div>
                </div>
        
                <div class="program">
                    <ion-icon name="home-outline" class="program__icon"></ion-icon>
                    <div class="program_title">
                        Safe Home Based Child Care and Support
        
                    </div>
                    <div class="program_description">
                        one of the intervention areas that makes safe home service available for female children who have been victims and vulnerable to sexual and other abuses and exploitations. Under this program, OPRIFS has been admitting and providing integrated support like food, shelter, clothes , education, healthcare, counseling, vocational training, family tracing, reunification, and post-reunification follow-up.
                    </div>
            </div>
        
            <div class="program">
                <ion-icon name="shield-half-outline" class="program__icon"></ion-icon>
                <div class="program_title">
                    Safe Home Based Child Care and Support
        
                </div>
                <div class="program_description">
                    one of the intervention areas that makes safe home service available for female children who have been victims and vulnerable to sexual and other abuses and exploitations. Under this program, OPRIFS has been admitting and providing integrated support like food, shelter, clothes , education, healthcare, counseling, vocational training, family tracing, reunification, and post-reunification follow-up.
                </div>
            </div>
    
    
                </div>
            </div>

            <div class="newsrecommendation_section">
                news recommendation
            </div>



        </section> --}}


        {{-- oprifs program and news recommendation section end --}}


























































        {{-- volunter section start --}}

        <section class="voluntersection">
            <div class="voluntersection__heading">
                Meet Our Volunteers
            </div>

            <div class="voluntersection__volunters">

                <div class="voluntersection__volunters_volunter">
                    <div class="voluntersection__volunters_volunter_imgbox">
                        <img src="{{asset("img/volunter1.png")}}" alt="volunter picture" class="voluntersection__volunters_volunter_img">
                    </div>
                    <div class="voluntersection__volunters_volunter_detail">
                        <p class="voluntersection__volunters_volunter_detail__name">
                            john doe
                        </p>

                        <p class="voluntersection__volunters_volunter_detail__name">
                            Student
                        </p>
                    </div>
                </div>
                <div class="voluntersection__volunters_volunter">
                    <div class="voluntersection__volunters_volunter_imgbox">
                        <img src="{{asset("img/volunter2.png")}}" alt="volunter picture" class="voluntersection__volunters_volunter_img">
                    </div>
                    <div class="voluntersection__volunters_volunter_detail">
                        <p class="voluntersection__volunters_volunter_detail__name">
                            john doe
                        </p>
                        <p class="voluntersection__volunters_volunter_detail__name">
                            Engineer
                        </p>
                    </div>
                </div>
                <div class="voluntersection__volunters_volunter">
                    <div class="voluntersection__volunters_volunter_imgbox">
                        <img src="{{asset("img/2.jpg")}}" alt="volunter picture" class="voluntersection__volunters_volunter_img">
                    </div>
                    <div class="voluntersection__volunters_volunter_detail">
                        <p class="voluntersection__volunters_volunter_detail__name">
                            john doe
                        </p>
                        <p class="voluntersection__volunters_volunter_detail__name">
                            Doctor
                        </p>
                    </div>
                </div>
                <div class="become_avolunter">
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


        <section class="volunter_registration_section">


            {{-- <div class="volunter_registration_sectionbox"> --}}

                <div class="volunter_registration_section__hero">
                    <div class="volunter_registration_section__hero_heading">
                        Join The Community To Give Education,Health,Legal and other For Girls
                    </div>
                    <div class="volunter_registration_section__hero_subheading">
                        Empower change by joining our community. Together, let's ensure every girl gets the education she deserves. Make an impact now!
                    </div>
                    <img src="{{asset("img/femalestudents.png")}}" alt="" class="volunter_registration_section__hero_img">
                </div>
        
                <div class="volunter_registration_section__form">
                    <div class="volunter_registration_section__form_heading">
                        become  a volunteer
                    </div>
                    <form wire:submit="save" class="volunter_registration_section__form__inputs">
                        <div class="volunter_registration_section__form__inputs_top">
                            <div class="inputtag">
                                <input type="text" name="name"   placeholder="Full Name*" wire:model="name"
                                class="inputtag__name"
                                >
                                <div>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    @error('name') <span class="error">{{ $message }}</span> @enderror 
                                </div>
                            </div>
                            <div class="inputtag">
                                <input type="email" name="email" placeholder="Email Address*" wire:model="email"
                                class="inputtag__email"
                                >
                                <div>
                                    @error('email') <span class="error">{{ $message }}</span> @enderror 
                                </div>
                            </div>
                            <div class="inputtag">
                                <input type="tel" name="phonenumber" placeholder="Phone Number*" wire:model="phonenumber"
                                class="inputtag__phonenumber"
                                >
                                <div>
                                    @error('phonenumber') <span class="error">{{ $message }}</span> @enderror 
                                </div>
                            </div>

                        </div>


                        <div class="inputtag_message">
                            <textarea name="message"   placeholder="Message*" wire:model="message"
                            ></textarea>
                            <div>
                                @error('message') <span class="error">{{ $message }}</span> @enderror 
                            </div>
                        </div>
                        
                        <button type="submit" class="volunter_registration_section__form_submit inputtag">
                            Submit Now
                        </button>
                    </form>
                </div>

            {{-- </div> --}}

        </section>

        <!-- homepage gallery section start -->
         {{-- <section class="homepage__gallery_section">

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
                    <p>Safe Home</p>
                </div>

                <div class="homepage__gallery_section_gallery-item_info_text">
                    More than one  life
                    changed.
                </div>
            </div>

        </section>  --}}
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
                    <ion-icon name="chevron-back-outline"
                    class="pagination_icon"></ion-icon>
                </div>
                    


            @else
            <div class="testimonials__pagination_forward">
                <ion-icon name="chevron-back-outline"
                wire:click="previousPage"
                wire:loading.attr="disabled"
                class="pagination_icon"
                ></ion-icon>
            </div>


            @endif
            
            <div class="testimonials__pagination_line"></div>

            @if($testimonials->onLastPage())
            <div class="testimonials__pagination_forward">
                <ion-icon name="chevron-forward-outline"
                class="pagination_icon"></ion-icon>
            </div>
            @else
            <div class="testimonials__pagination_forward">
                <ion-icon name="chevron-forward-outline"
                wire:click="nextPage"
                wire:loading.attr="disabled"
                class="pagination_icon"></ion-icon>
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

        <x-footersection></x-footersection>




</div>
