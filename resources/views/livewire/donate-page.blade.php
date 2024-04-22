<div>
    <x-headersection></x-headersection>


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

        </div>

    </section>

        

    <x-footersection></x-footersection>
</div>
