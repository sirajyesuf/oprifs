<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{asset('css/base.css')}}" />
        <link rel="stylesheet" href="{{asset('css/header.css')}}" />
        <link rel="stylesheet" href="{{asset('css/contactus.css')}}" />
        <link rel="stylesheet" href="{{asset('css/footer.css')}}" />
        <link rel="stylesheet" href="{{asset('css/testimonials.css')}}" />
        <link rel="stylesheet" href="{{asset('css/ctabuttons.css')}}" />
        <title>Document</title>
    </head>
    <body>
        <header class="header">
            <div class="header__footer">
                <div class="header__footer__contact">
                    <div class="header__footer__contact_call">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="ionicon"
                            viewBox="0 0 512 512"
                        >
                            <path
                                d="M451 374c-15.88-16-54.34-39.35-73-48.76-24.3-12.24-26.3-13.24-45.4.95-12.74 9.47-21.21 17.93-36.12 14.75s-47.31-21.11-75.68-49.39-47.34-61.62-50.53-76.48 5.41-23.23 14.79-36c13.22-18 12.22-21 .92-45.3-8.81-18.9-32.84-57-48.9-72.8C119.9 44 119.9 47 108.83 51.6A160.15 160.15 0 0083 65.37C67 76 58.12 84.83 51.91 98.1s-9 44.38 23.07 102.64 54.57 88.05 101.14 134.49S258.5 406.64 310.85 436c64.76 36.27 89.6 29.2 102.91 23s22.18-15 32.83-31a159.09 159.09 0 0013.8-25.8C465 391.17 468 391.17 451 374z"
                                fill="none"
                                stroke="currentColor"
                                stroke-miterlimit="10"
                                stroke-width="32"
                            />
                        </svg>
                        <p>+251 1234 6548</p>
                    </div>
                    <div class="header__footer__contact_mail">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="ionicon"
                            viewBox="0 0 512 512"
                        >
                            <rect
                                x="48"
                                y="96"
                                width="416"
                                height="320"
                                rx="40"
                                ry="40"
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="32"
                            />
                            <path
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="32"
                                d="M112 160l144 112 144-112"
                            />
                        </svg>
                        <p>info@oprifs.com</p>
                    </div>
                </div>

                <div class="header__footer__socialmeadia_box">
                    <ul class="header__footer__socialmeadia">
                        <li>
                            <a href="#">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="ionicon"
                                    viewBox="0 0 512 512"
                                >
                                    <path
                                        d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"
                                    />
                                    <path
                                        d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z"
                                    />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="ionicon"
                                    viewBox="0 0 512 512"
                                >
                                    <path
                                        d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z"
                                        fill-rule="evenodd"
                                    />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="ionicon"
                                    viewBox="0 0 512 512"
                                >
                                    <path
                                        d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32zm-273.3 373.43h-64.18V205.88h64.18zM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43 0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44-17.74 0-28.24 12-32.91 23.69-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44 42.13 0 74 27.77 74 87.64z"
                                    />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="ionicon"
                                    viewBox="0 0 512 512"
                                >
                                    <path
                                        d="M508.64 148.79c0-45-33.1-81.2-74-81.2C379.24 65 322.74 64 265 64h-18c-57.6 0-114.2 1-169.6 3.6C36.6 67.6 3.5 104 3.5 149 1 184.59-.06 220.19 0 255.79q-.15 53.4 3.4 106.9c0 45 33.1 81.5 73.9 81.5 58.2 2.7 117.9 3.9 178.6 3.8q91.2.3 178.6-3.8c40.9 0 74-36.5 74-81.5 2.4-35.7 3.5-71.3 3.4-107q.34-53.4-3.26-106.9zM207 353.89v-196.5l145 98.2z"
                                    />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="header__navigation">
                <img
                    src="../../public/img/oprifs.jpg"
                    alt="oprifs logo"
                    class="header_logo"
                />
                <div class="header__navigation__menu">
                    <a href="#">home</a>
                    <a href="#">aboutus</a>
                    <a href="#">gallery</a>
                    <a href="#">blog</a>
                    <a href="#">contact</a>
                    <button>Donate</button>
                </div>
            </div>
        </header>

        <!-- <section class="testimonials_section">
            <div class="testimonials__title">What people say about us</div>
            <div class="testimonials">
                <div class="testimonial">
                    <div class="testimonial__header">
                        <div class="testimonial__name">
                            <p class="testimonial__name_fn">john doe</p>
                            <p class="testimonial__name_job">doctor</p>
                        </div>
                        <div class="testimonial__quote">&ldquo;</div>
                    </div>
                    <div class="testimonial__content">
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Labore inventore itaque, quam nesciunt esse
                        officia nobis porro, tempora, cupiditate expedita atque
                        dicta. Doloremque veniam libero asperiores explicabo,
                        mollitia nemo quibusdam.
                    </div>
                </div>

                <div class="testimonial">
                    <div class="testimonial__header">
                        <div class="testimonial__name">
                            <p class="testimonial__name_fn">john doe</p>
                            <p class="testimonial__name_job">doctor</p>
                        </div>
                        <div class="testimonial__quote">&ldquo;</div>
                    </div>
                    <div class="testimonial__content">
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Labore inventore itaque, quam nesciunt esse
                        officia nobis porro, tempora, cupiditate expedita atque
                        dicta. Doloremque veniam libero asperiores explicabo,
                        mollitia nemo quibusdam.
                    </div>
                </div>
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
        </section> -->

        <livewire:testimonials></livewire:testimonials>

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

        <footer class="footer">
            <div class="footer_info_box">
                <div class="footer__socialmedia">
                    <img src="../../public/img/oprifs.jpg" alt="" />
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Hic at illo odio debitis similique ex ad, alias
                        illum itaque minus explicabo assumenda aliquid quas
                        reprehenderit, ducimus ab? Delectus, quasi itaque.
                    </p>
                    <ul>
                        <li>
                            <a href="#">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="ionicon"
                                    viewBox="0 0 512 512"
                                >
                                    <path
                                        d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"
                                    />
                                    <path
                                        d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z"
                                    />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="ionicon"
                                    viewBox="0 0 512 512"
                                >
                                    <path
                                        d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z"
                                        fill-rule="evenodd"
                                    />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="ionicon"
                                    viewBox="0 0 512 512"
                                >
                                    <path
                                        d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32zm-273.3 373.43h-64.18V205.88h64.18zM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43 0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44-17.74 0-28.24 12-32.91 23.69-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44 42.13 0 74 27.77 74 87.64z"
                                    />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="ionicon"
                                    viewBox="0 0 512 512"
                                >
                                    <path
                                        d="M508.64 148.79c0-45-33.1-81.2-74-81.2C379.24 65 322.74 64 265 64h-18c-57.6 0-114.2 1-169.6 3.6C36.6 67.6 3.5 104 3.5 149 1 184.59-.06 220.19 0 255.79q-.15 53.4 3.4 106.9c0 45 33.1 81.5 73.9 81.5 58.2 2.7 117.9 3.9 178.6 3.8q91.2.3 178.6-3.8c40.9 0 74-36.5 74-81.5 2.4-35.7 3.5-71.3 3.4-107q.34-53.4-3.26-106.9zM207 353.89v-196.5l145 98.2z"
                                    />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer__links">
                    <div class="footer__links_discover">
                        <h1>Discover</h1>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>
                                <a href="#">About us</a>
                            </li>
                            <li>
                                <a href="#">programs</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__links_engage">
                        <h1>engage</h1>
                        <ul>
                            <li>
                                <a href="#">volunter</a>
                            </li>
                            <li>
                                <a href="#">Donate</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__link_connect">
                        <h1>Connect</h1>
                        <ul>
                            <li>
                                <a href="#">contact</a>
                            </li>
                            <li>
                                <a href="#">faq</a>
                            </li>
                            <li>
                                <a href="#">privacy policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer_copyright">copyright @oprifs.com</div>
        </footer>
    </body>
</html>
