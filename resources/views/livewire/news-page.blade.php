<div class="newpagecontainer">

    
    <x-headersection></x-headersection>

    <section class="newssectionbox">

        <div class="trendingnewssection">
            <img src="{{asset("img/3.jpg")}}" alt="" class="trendingnewssection__img">
            <div class="trendingnewssection__detail">
                <div class="trendingnewssection__detail_header">
                    <p class="trendingnewssection__detail_header_trending"> trending </p>
                    <div class="trendingnewssection__detail_header_icons">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M352 48H160a48 48 0 00-48 48v368l144-128 144 128V96a48 48 0 00-48-48z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M336 192h40a40 40 0 0140 40v192a40 40 0 01-40 40H136a40 40 0 01-40-40V232a40 40 0 0140-40h40M336 128l-80-80-80 80M256 321V48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                    </div>

                </div>

                <div class="trendingnewssection__detail_content">
                    <p class="trendingnewssection__detail_content_title">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        (News)
                    </p>
                    <p class="trendingnewssection__detail_content_description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, assumenda cumque recusandae velit, nesciunt labore molestiae hic, consequatur alias dolorum voluptatem modi dolorem. Fugiat, est ratione veniam eligendi sed pariatur?
                    </p>
                </div>

                <div class="trendingnewssection__detail_footer">
                    <p class="trendingnewssection__detail_footer_timeago" >
                        2 hours ago
                    </p>

                    <p class="trendingnewssection__detail_footer_author">
                       by siraj yesuf <span>| 4min read </span>
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

            @foreach ($contents as $content)
                <div class="newscard">
                    
                    <img src="{{asset("storage/".$content->cover_image)}}" alt="" class="newscard_img">
                <div class="newscard_detail">

                    <div class="newscard_detail_header">

                        <p class="newscard_detail_title">
                            {{$content->title}}
                        </p>

                        <p class="newscard_detail_description">
                            {{$content->content}}
                        </p>

                    </div>

                    <div class="newscard_detail_footer">

                        <p class="newscard_detail_footer_timeago" >
                            2 hours ago
                        </p>

                        <p class="newscard_detail_footer_author">
                        by siraj yesuf <span>| 4min read </span>
                        </p>
                    </div>

                </div>

                <div class="newscard_icon">

                    <button class="newscard_readmore">
                        <a href="{{route('content_detail',['slug' => $content->slug])}}">
                            Read more
                        </a>
                    </button>
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M352 48H160a48 48 0 00-48 48v368l144-128 144 128V96a48 48 0 00-48-48z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M336 192h40a40 40 0 0140 40v192a40 40 0 01-40 40H136a40 40 0 01-40-40V232a40 40 0 0140-40h40M336 128l-80-80-80 80M256 321V48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg> --}}
                </div>
                </div>

            @endforeach


            {{-- <div class="newscard">
                
                <img src="{{asset("img/2.jpg")}}" alt="" class="newscard_img">
                <div class="newscard_detail">

                    <div class="newscard_detail_header">

                        <p class="newscard_detail_title">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            (News)
                        </p>

                        <p class="newscard_detail_description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sed nesciunt veniam id dignissimos! Itaque molestias fugiat perferendis, vero quam totam inventore perspiciatis, cumque enim, illum sit qui sed ullam.
                        </p>

                    </div>

                    <div class="newscard_detail_footer">

                        <p class="newscard_detail_footer_timeago" >
                            2 hours ago
                        </p>
    
                        <p class="newscard_detail_footer_author">
                           by siraj yesuf <span>| 4min read </span>
                        </p>
                    </div>

                </div>

                <div class="newscard_icon">

                    <button class="newscard_readmore">
                        Read more
                    </button>
                </div>
            </div>  --}}

            <iframe width="560" height="315" src="https://www.youtube.com/embed/qw-FLc7Z01Q" frameborder="0" allowfullscreen></iframe>


        </div>

        @if (count($contents))
            
            <button class="newslistsection_loadmorebtn">
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
    