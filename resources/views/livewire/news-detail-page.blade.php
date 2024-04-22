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

                    <div class="trendingnewssection__detail_footer">
                        <p class="trendingnewssection__detail_footer_timeago" >
                            {{\Carbon\Carbon::parse($content->created_at)->isoFormat('MMM D')}}
                        </p>

                        <p class="trendingnewssection__detail_footer_author">
                        by siraj yesuf <span>| {{$content->readingTime()}} min read </span>
                        </p>

                    </div>
                    <div class="trendingnewssection__detail_header_icon" onclick="copyLink('{{route('content_detail',['slug' => $content->slug])}}')">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                        </svg>

                        <span class="tooltiptext">Copy link</span>
                        
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
    