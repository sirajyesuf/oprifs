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

    protected function getActiveFilter(){

        $activeFilter = array();

        foreach ($this->filters as $filter) {

            if ($filter['status']) {

                array_push($activeFilter,$filter['title']);
            }

        }


        return $activeFilter;

    }
    
    public function loadMoreProjects(){

        $this->amount = $this->amount + 3;
    }

    

    public function getProjects(){

        $activeFilter = $this->getActiveFilter();
        $query = Project::query();


        if($activeFilter){

            $query->whereIn('status',$activeFilter);

        }

        return $query->latest()->take($this->amount)->get();


    }

    public function updateFilter($filterTitle){

        $filters = array();

        foreach($this->filters as $filter){

            if($filter['title'] == $filterTitle){

                $filter['status'] = !$filter['status'];
            }

            array_push($filters,$filter);
        }

        $this->filters = $filters;
    }

    #[Title('projects-oprifs')]
    public function render()
    {
        return view('livewire.project-page',[
            'projects' => $this->getProjects()
        ]);
    }
}
