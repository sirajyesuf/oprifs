<div class="newpagecontainer">

    @if ($trendingContent)

        <section class="trendingnewssection">

                <div class="trendingnewssection__imgbox">
                    <img src="{{asset("storage/".$trendingContent->cover_image)}}" alt="" class="trendingnewssection__img">
                </div>
                <div class="trendingnewssection__detail">
                    <div class="trendingnewssection__detail_header">
                        <p class="trendingnewssection__detail_header_trending"> trending </p>

                        <div class="trendingnewssection__detail_header_icon" onclick="copyLink('{{route('content_detail',['slug' => $trendingContent->slug])}}')">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                            </svg>

                            <span class="tooltiptext">Copy link</span>
                            
                        </div>

                    </div>

                    <div class="trendingnewssection__detail_content">
                            
                            <a href="{{route('content_detail',['slug' => $trendingContent->slug])}}"
                                class="trendingnewssection__detail_content_title"
                                >
                                
                                {{$trendingContent->title}}

                            </a>
                        <p class="trendingnewssection__detail_content_description">

                            {{ $trendingContent->excerpt }}

                        </p>
                    </div>

                    <div class="trendingnewssection__detail_footer">
                        
                        <p class="trendingnewssection__detail_footer_timeago" >

                            {{\Carbon\Carbon::parse($trendingContent->created_at)->isoFormat('MMM D')}}

                        </p>

                        <p class="trendingnewssection__detail_footer_author">

                        by {{$trendingContent->author->name}} <span>| {{$trendingContent->readingTime()}} min read </span>

                        </p>

                    </div>
                </div>
        </section>


    @endif




    <section class="newslistsectionbox">
        <div class="newslistsection_filter">
            @foreach ($categories as $category)
                <div wire:key="{{ $category['id'] }}">
                    @if (! $category['status'])
                    <p class="newslistsection_filter_selected"  wire:click="updateCategory({{ $category['id'] }})">{{$category['name']}}</p>
                    @else
                    <p class="newslistsection_filter_news"  wire:click="updateCategory({{ $category['id'] }})">{{$category['name']}}</p>
                    @endif
                </div>
            @endforeach

        </div>

        @if (count($contents))
            

            <div class="newslistsection_cards">

                @if ($this->getActiveCategoryID() != 3)
                    

                        @foreach ($contents as $content)

                            <div class="newscard">

                                <div class="newscard_img_caption">


                                    <div class="newscard_imgbox">
                                        <img src="{{asset("storage/".$content->cover_image)}}" alt="" class="newscard_img">
                                    </div>

                                    <div class="newscard_detail">

                                        <div class="newscard_detail_header">

                                            <p class="newscard_detail_title">
                                                {{$content->title}}
                                            </p>

                                            <p class="newscard_detail_description">
                                                {{ $content->excerpt }}
                                            </p>

                                        </div>

                                        <div class="newscard_detail_footer">

                                            <p class="newscard_detail_footer_timeago" >
                                                {{\Carbon\Carbon::parse($content->created_at)->isoFormat('MMM D')}}
                                            </p>

                                            <p class="newscard_detail_footer_author">
                                            by {{$content->author->name}} <span>| {{$content->readingTime()}} min read </span>
                                            </p>
                                            
                                        </div>


                                    </div>

                                </div>


                                <div class="newscard_icon">

                                    <button class="newscard_readmore">
                                        <a href="{{route('content_detail',['slug' => $content->slug])}}"
                                            class="newscard_readmore__link"
                                        >
                                            Read more
                                        </a>
                                    </button>
                                </div>

                            </div>

                        @endforeach

                @else

                    @foreach ($contents as $content)
                    
                    <iframe width="460" height="315" src="https://www.youtube.com/embed/{{$content->video_id}}" frameborder="0" allowfullscreen></iframe>

                    @endforeach

                @endif




            </div>

                
            <button class="newslistsection_loadmorebtn"  wire:click="loadMoreContent">
                view more
            </button>

        @else

            <div class="zero_contents">
                We're taking a breather at the moment! Stay tuned for updates on new content coming your way soon. In the meantime, feel free to connect with us on social media for the latest news and updates.
            </div>

        @endif


    </section>

</div>
    