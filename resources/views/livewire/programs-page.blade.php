<div>


    <section class="project_hero_section">
        our core programs
    </section>



    <section class="projects__section">

        @if (count($programs))
            
            <div class="projects">

                @foreach ($programs as $project)
                    

                    <div class="project">

                        <div class="project__imgbox">

                            <img src="{{asset("storage/".$project->icon)}}" alt="project image" class="project__img">

                        </div>

                        <div class="project__description">
                            <h1 class="project__description__title">
                                Program : {{$project->name}}
                            </h1>



                            <x-markdown class="project__description__content">

                                {{ $project->description }}
                
                            </x-markdown>

                        </div>


                    </div>


                @endforeach

            </div>

            @if (($totalPrograms -$amount) / $amount > 0)
                
                <button class="newslistsection_loadmorebtn"  wire:click="loadMorePrograms">
                    view more
                </button>

            @endif


        @else
            <div class="zero_contents">
                we don't have any program.
            </div>
        @endif


    </section>

</div>
