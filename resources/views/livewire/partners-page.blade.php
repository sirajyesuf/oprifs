<div class="partners">


    <section class="project_hero_section">
        our partners
    </section>

    @if (count($donorpartners))
        
        <section class="donor_partners_section">

            <h1 class="donor_partners__title">donor partners</h1>

            <div class="donor_partners"
            style="grid-template-rows: repeat({{ ceil(count($donorpartners)/6) }}, 10rem);"
            >

                @foreach ($donorpartners as $partner )
                    
                    <div class="partner">

                        <a href="{{$partner->website}}" target="_blank" rel="noopener noreferrer">
                            
                            <img src="{{asset("storage/".$partner->logo)}}" alt="partner logo">
                        
                        </a>

                    </div>

                @endforeach

            </div>

        </section>

    @endif





    @if (count($govtpartners))
        
        <section class="donor_partners_section">

            <h1 class="donor_partners__title">
                Government Development Partners
            </h1>

            <div class="donor_partners" 
            style="grid-template-rows: repeat({{ ceil(count($govtpartners)/6) }}, 10rem);"
            >

                @foreach ($govtpartners as $partner )
                    
                    <div class="partner">
                        <a href="{{$partner->website}}" target="_blank" rel="noopener noreferrer">
                            
                            <img src="{{asset("storage/".$partner->logo)}}" alt="partner logo">
                        </a>

                    </div>

                @endforeach

            </div>

        </section>

    @endif


</div>
