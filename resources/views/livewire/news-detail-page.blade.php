<div>
    <x-headersection></x-headersection>
    
    <section class="newsdetailpagesection">
        <div class="newsdetailpagesection__titlebox">
            <p class="newsdetailpagesection__title">
                {{$content->title}}
            </p>

            <div class="newsdetailpagesection__main_content_img_container">
                <img src="{{asset("storage/".$content->cover_image)}}" alt="" class="newsdetailpagesection__main_content_img">
            </div>
        </div>

        <div class="newsdetailpagesection__main">

            <div class="newsdetailpagesection__main_content">

                <div class="newsdetailpagesection__main_content_author_and_share">
                    <div class="newsdetailpagesection__main_content_author">
                        {{  Carbon\Carbon::now()->subDays(Carbon\Carbon::parse($content->created_at)->day)->diffForHumans() }} | by siraj yesuf | {{ round(str_word_count($content->content) / 200)}} minute read
                    </div>
                    <div class="trendingnewssection__detail_header_icons">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M352 48H160a48 48 0 00-48 48v368l144-128 144 128V96a48 48 0 00-48-48z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M336 192h40a40 40 0 0140 40v192a40 40 0 01-40 40H136a40 40 0 01-40-40V232a40 40 0 0140-40h40M336 128l-80-80-80 80M256 321V48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                    </div>
                </div>
                <div class="newsdetailpagesection__main_content_article">
                    <x-markdown>

                        {{ $content->content }}

                    </x-markdown>
                </div>
            </div>

            {{-- <div class="newsdetailpagesection__main_othercontents">
                <div class="newsdetailpagesection__main_othercontents_item">
                    <img src="{{asset("img/4.jpg")}}" alt="">
                    <div>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    </div>
                </div>
                <div class="newsdetailpagesection__main_othercontents_item">
                    <img src="{{asset("img/4.jpg")}}" alt="">
                    <div>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    </div>
                </div>
                <div class="newsdetailpagesection__main_othercontents_item">
                    <img src="{{asset("img/4.jpg")}}" alt="">
                    <div>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    </div>
                </div>
                <div class="newsdetailpagesection__main_othercontents_item">
                    <img src="{{asset("img/4.jpg")}}" alt="">
                    <div>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    </div>
                </div>
                <div class="newsdetailpagesection__main_othercontents_item">
                    <img src="{{asset("img/4.jpg")}}" alt="">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    </p>
                </div>
            </div> --}}

        </div>
    </section>



    
    <x-footersection></x-footersection>
</div>
    