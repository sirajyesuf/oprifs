<div>


    <section class="project_hero_section">
        our projects
    </section>



    <section class="projects__section">

        <div class="project_filters">

            @foreach ($filters as $filter)

                @if ($filter['status'])
                
                    <p class="documents_filter_tag documents_filter_tag_active"
                    wire:click="updateFilter('{{$filter['title']}}')"
                    >{{$filter['title']}}</p>
                
                @else

                    <p class="documents_filter_tag"
                    wire:click="updateFilter('{{$filter['title']}}')"
                    >{{$filter['title']}}</p>

                @endif

            @endforeach

        </div>

        <div class="projects">

            @foreach ($projects as $project)
                

                <div class="project">

                    <div class="project__imgbox">

                        <img src="{{asset("storage/".$project->cover_image)}}" alt="project image" class="project__img">

                    </div>

                    <div class="project__description">
                        <h1 class="project__description__title">
                            Project : {{$project->title}}
                        </h1>



                        <x-markdown class="project__description__content">

                            {{ $project->description }}
            
                        </x-markdown>

                    </div>


                </div>


            @endforeach

        </div>

        <button class="newslistsection_loadmorebtn"  wire:click="loadMoreProjects">
            view more
        </button>

    </section>

</div>
