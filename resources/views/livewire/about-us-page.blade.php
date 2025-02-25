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
                        They are truly great who have great charity.
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Accountability
                        </li>
                        <li class="aboutus__text_subheading">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Confidentiality
                        </li>
                        <li class="aboutus__text_subheading">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Commitment
                        </li>
                        <li class="aboutus__text_subheading">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Partnership
                        </li>
                        <li class="aboutus__text_subheading">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Respect
                        </li>
                        <li class="aboutus__text_subheading">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Sympathy
                        </li>
                        <li class="aboutus__text_subheading">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>  --}}

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
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

                <div class="mission__footer">

                    {{-- <div class="mission_img">
                        <img src="{{asset('img/oprifs_mission.png')}}" alt="two girls stand together">
                    </div> --}}

                    <div class="mission_caption">
                        <div class="number_children_helped">
                            <p>7200+</p>
                        </div>
                        <div class="mission_text">
                            Thousand women, girls, and vulnerable children Helped
                        </div>
                    </div>

                </div>

            </div>

        </div>
        {{-- MISSION AND VISSION END --}}
    </section>


    <section class="staff-section">
        <div class="staff-container">
            <div class="staff-header">
                <h2>Meet Our Board Members</h2>
                {{-- <p>Get to know the dedicated professionals behind our success.</p> --}}
            </div>

            @php
                $teamMembers = $board_members;
                $topMembers = array_slice($teamMembers, 0, 2);
                $bottomMembers = array_slice($teamMembers, 2);
            @endphp

            @if(count($teamMembers) > 0)

            <div class="top-row">
                @foreach ($topMembers as $member)
                    <div class="card">
                        <div class="image-container">
                            <img src="{{ asset('storage/'.$member['picture'] ) }}" alt="{{ $member['full_name'] }}">
                        </div>
                        <div class="card-content">
                            <h3>{{ $member['full_name'] }}</h3>
                            <p>{{ $member['position'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="bottom-row">
                @foreach ($bottomMembers as $member)
                    <div class="card">
                        <div class="image-container">
                            <img src="{{ asset('storage/'.$member['picture'] ) }}" alt="{{ $member['full_name'] }}">
                        </div>
                        <div class="card-content">
                            <h3>{{ $member['full_name'] }}</h3>
                            <p>{{ $member['position'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            @else
            <div class="empty-message">
                <p>No team members found.</p>
            </div>
            @endif
        </div>
    </section>


    <section class="staff-section">
        <div class="staff-container">
            <div class="staff-header">
                <h2>Meet Our Management Members</h2>
                {{-- <p>Get to know the dedicated professionals behind our success.</p> --}}
            </div>

            @php
                $teamMembers = $board_members;
                $topMembers = array_slice($teamMembers, 0, 2);
                $bottomMembers = array_slice($teamMembers, 2);
            @endphp

            @if(count($teamMembers) > 0)

            <div class="top-row">
                @foreach ($topMembers as $member)
                    <div class="card">
                        <div class="image-container">
                            <img src="{{ asset('storage/'.$member['picture'] ) }}" alt="{{ $member['full_name'] }}">
                        </div>
                        <div class="card-content">
                            <h3>{{ $member['full_name'] }}</h3>
                            <p>{{ $member['position'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="bottom-row">
                @foreach ($bottomMembers as $member)
                    <div class="card">
                        <div class="image-container">
                            <img src="{{ asset('storage/'.$member['picture'] ) }}" alt="{{ $member['full_name'] }}">
                        </div>
                        <div class="card-content">
                            <h3>{{ $member['full_name'] }}</h3>
                            <p>{{ $member['position'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            @else
            <div class="empty-message">
                <p>No team members found.</p>
            </div>
            @endif
        </div>
    </section>







</div>
