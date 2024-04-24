<div>
    
    <section class="donate__hero_section">
        <div class="donate__hero_title">
            <h1 class="donate__hero_heading"> 
                    Donate for our Causes
            </h1>
            <h2 class="donate__hero_subheading">
                Organization for Prevention,
                Rehabilitation and Integration
                of Female Street Children.
            </h2>
        </div>
    </section>

    

    <section class="causes_section">


        <div class="causes">

            @if (count($causes))
                

            @foreach ($causes as $cause )
                

            <div class="cause">

                <div class="cause_imgbox">
                    <img src="{{asset("storage/".$cause->thumbnail)}}" alt="cause picture" class="cause_img">
                </div>

                <div class="cause_footer">

                    <div class="cause_heading">
                        {{$cause->title}}
                    </div>

                    <a href="{{route('donate.detail',['slug' => $cause->slug])}}">
                    donate
                    </a>
                
                </div>

            </div>

            @endforeach

            @else
            <div class="zero_cause_text">
                Thank you for your interest. Currently, we do not have any ongoing causes that require your charitable support. Please feel free to check back with us in the future.            </div>
            @endif
        </div>

    </section>
    
</div>
