<div>
    <section class="aboutus__hero_section">
        <div class="aboutus__hero_title">
            <h1 class="aboutus__hero_heading">
                About <span>OPRIFS</span>
            </h1>
            <h2 class="aboutus__hero_subheading">
                Organization for Prevention,
                Rehabilitation and Integration
                of Female Street Children.
            </h2>
        </div>
    </section>

    <section class="aboutus__content_section">

        {{-- ABOUT US START --}}
        <div class="aboutus__content_section_aboutus">

            <div class="aboutus__hero">
                <div class="aboutus__hero_imgbox">
                    <img src="{{asset('img/oprifs_aboutus.png')}}" alt="two girls standing together" class="aboutus__hero_img">
                </div>
                <div class="aboutus__hero_caption">
                    <img src="{{asset("img/quote.png")}}" alt="quote image" class="aboutus__hero_caption_quote">
                    <p class="aboutus__hero_caption_text">
                        They are truly great who
                        has a great charity.
                    </p>
                </div>
            </div>

            <div class="aboutus__text">

                <p class="aboutus__text_title">AboutUs</p>
                {{-- <h2 class="aboutus__text_heading">working for the benefit and 
                    welfare of female street children and other vulnerable girls and women in different areas.
                </h2> --}}
                <p class="aboutus__text_subheading">
                    {{$aboutus->aboutus}}
                </p>
                <p class="aboutus__text_tag">
                    Save the Children believes every child deserves a future.
                </p>

            </div>


        </div>
        {{-- ABOUTUS END --}}

        {{-- MISSION AND VISSION START --}}
        <div class="aboutus__content_section_mission_vision">
            <div class="vission">
                <h1 class="aboutus__text_heading">Our Vission</h1>
                <p class="aboutus__text_subheading">
                    {{$aboutus->vission}}
                </p>
                <div class="oprifs_corevalues">
                    <h1 class="aboutus__text_heading">Core Values</h1>
                    <ul class="oprifs_corevalues_list">
                        <li class="aboutus__text_subheading">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>                              
                            Accountability
                        </li>
                        <li class="aboutus__text_subheading">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            Confidentiality
                        </li>
                        <li class="aboutus__text_subheading">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            Commitment
                        </li>
                        <li class="aboutus__text_subheading">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            Partnership
                        </li>
                        <li class="aboutus__text_subheading">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            Respect
                        </li>
                        <li class="aboutus__text_subheading">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            Sympathy
                        </li>
                        <li class="aboutus__text_subheading">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            Transparency
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mission">
                <h1 class="aboutus__text_heading">Our Mission</h1>
                <p class="aboutus__text_subheading">
                    {{$aboutus->mission}}
                </p>
                <div class="mission_img">
                    <img src="{{asset('img/oprifs_mission.png')}}" alt="two girls stand together">
                </div>
                <div class="mission_caption">
                    <div class="number_children_helped">
                        <p>12,000+</p>
                    </div>
                    <div class="mission_text">
                        Thousand women, girls, and vulnerable children Helped
                    </div>
                </div>

            </div>

        </div>
        {{-- MISSION AND VISSION END --}}
    </section>

    
</div>
