<div class="newpagecontainer">

    
    <x-headersection></x-headersection>

    <section class="newssectionbox">

        <div class="trendingnewssection">
            <img src="{{asset("storage/".$trendingNews->cover_image)}}" alt="" class="trendingnewssection__img">
            <div class="trendingnewssection__detail">
                <div class="trendingnewssection__detail_header">
                    <p class="trendingnewssection__detail_header_trending"> trending </p>

                    <div class="trendingnewssection__detail_header_icon" onclick="copyLink('{{route('content_detail',['slug' => $trendingNews->slug])}}')">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                        </svg>

                        <span class="tooltiptext">Copy link</span>
                        
                    </div>

                </div>

                <div class="trendingnewssection__detail_content">
                        
                        <a href="{{route('content_detail',['slug' => $trendingNews->slug])}}"
                            class="trendingnewssection__detail_content_title"
                            >
                            
                            {{$trendingNews->title}}
                            (News)

                        </a>
                    <p class="trendingnewssection__detail_content_description">

                        {{ $trendingNews->excerpt }}

                    </p>
                </div>

                <div class="trendingnewssection__detail_footer">
                    <p class="trendingnewssection__detail_footer_timeago" >
                        {{\Carbon\Carbon::parse($trendingNews->created_at)->isoFormat('MMM D')}}
                    </p>

                    <p class="trendingnewssection__detail_footer_author">
                       by siraj yesuf <span>| {{$trendingNews->readingTime()}} min read </span>
                    </p>

                </div>
        </div>




    </section>




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

        <div class="newslistsection_cards">

            @if ($this->getActiveCategoryID() != 3)
                

            @foreach ($contents as $content)
                <div class="newscard">
                    
                    <img src="{{asset("storage/".$content->cover_image)}}" alt="" class="newscard_img">
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

            <iframe width="560" height="315" src="https://www.youtube.com/embed/qw-FLc7Z01Q" frameborder="0" allowfullscreen></iframe>

            @endif




        </div>

        @if (count($contents))
            
            <button class="newslistsection_loadmorebtn"  wire:click="loadMoreContent">
                view more
            </button>
        @else
            <p class="empty_content">
            for know we dont have any content.
            </p>

        @endif




    </section>

    
    <x-footersection></x-footersection>


</div>
    