<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use App\Enums\ProjectType;


class ProjectPage extends Component
{
    use WithPagination;

    private $amount = 3;
    
    public $activeFilter = 'all';
    public $filters = [];




    protected function setupFilter(){
       
        $projectTypes = ProjectType::cases();
        
        foreach ($projectTypes as $index => $projectType) {

            $result = [
                'title' => $projectType->value,
                'status' => false
            ];

            array_push($this->filters,$result);
        }

    }

    public function mount(){

        $this->setupFilter();
    }

    
    public function loadMoreProjects(){

        $this->amount = $this->amount + 3;
    }

    

    public function getProjects(){

        $activeFilter = $this->activeFilter;
        $query = Project::query();


        if($activeFilter != 'all'){
            
            $query->where('status',$activeFilter);
        }

        
        return $query->latest()->take($this->amount)->get();


    }

    public function updateFilter($filterTitle){

        $this->activeFilter = $filterTitle;
    }

    #[Title('projects-oprifs')]
    public function render()
    {
        return view('livewire.project-page',[
            'projects' => $this->getProjects()
        ]);
    }
}
