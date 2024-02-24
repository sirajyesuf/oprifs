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
                <div class="testimonials__pagination_line"></div>
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
            </div>
        </section>