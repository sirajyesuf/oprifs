<div>

    <section class="document__hero">
        <div class="document__hero_title">
            <h1 class="document__hero_heading">Documentation</h1>
            <h2 class="document__hero_subheading">Everything You Need To Get A Documents</h2>
        </div>
        <input type="text" name="search" placeholder="Search" class="search_input_tag"
        wire:model.live="search">
    </section>

    <section class="documents">

        @if(count($documents))

        @foreach ($documents as $document )
            
            <div class="document">
                
                <div class="document__detail">
                    <div class="document__detail_svgbox">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                        
                    </div>
                    
                    <div class="document__detail_info">
                        <a class="document__detail_info_name"
                        target="_blank"
                        href="{{asset('/storage/'.$document->path)}}"
                        >
                            {{$document->name}}
                            
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 4rem; height:4rem;">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                            </svg>
                              
                        </a>
                        <p class="document__detail_info_date">
                            {{\Carbon\Carbon::parse($document->created_at)->isoFormat('MMM D')}}
                        </p>
                    </div>
                </div>
                
                {{-- <button 
                type="button"
                wire:click="download({{$document->id}})"
                class="document__downloadbtn">
                    Download
                </button> --}}
                
            </div>
        
        @endforeach
        <button class="newslistsection_loadmorebtn"  wire:click="loadMoreDocuments">
            view more
        </button>
        @else
        <div class="document documents_zerosearchresult">
            Sorry, no matching documents found. Try different keywords.
        </div>
        @endif

    </section>

    
</div>
