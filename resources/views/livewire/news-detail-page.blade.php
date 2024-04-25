<div>
    
    <section class="newsdetailpagesection">

        <div class="newsdetailpagesection__titlebox">
            <p class="newsdetailpagesection__title">
                {{$content->title}}
            </p>

            <div class="newsdetailpagesection__main_content_img_container">
                <img src="{{asset("storage/".$content->cover_image)}}" alt="" class="newsdetailpagesection__main_content_img">
            </div>

        </div>


        <div class="newsdetailpagesection__main_content">

            <div class="newsdetailpagesection__main_content_author_and_share">


                <p>
                    {{\Carbon\Carbon::parse($content->created_at)->isoFormat('MMM D')}}
                </p>

                <p>
                    by {{$content->author->name}} <span>| {{$content->readingTime()}}min read </span>
                </p>


                <div class="trendingnewssection__detail_header_icon" onclick="copyLink('{{route('content_detail',['slug' => $content->slug])}}')">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                    </svg>

                    <span class="tooltiptext">Copy link</span>
                    
                </div>

            </div>


            <x-markdown class="newsdetailpagesection__main_content_article">

                {{ $content->content }}

            </x-markdown>



        </div>



    </section>



    

</div>
    