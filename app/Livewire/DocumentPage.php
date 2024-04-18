<?php

namespace App\Livewire;

use App\Models\Document;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class DocumentPage extends Component
{

    use WithPagination;

    private $amount = 3;

    public $search = '';



    public function loadMoreDocuments(){
        $this->amount = $this->amount + 3;
    }


    public function render()
    {    
        $documents = null;

        if($this->search == '') {
            
            $documents = Document::take($this->amount)->get();
        }

        else {

           $documents =  Document::where('name', 'like', '%' . $this->search . '%')->take($this->amount)->get();

        }



        return view('livewire.document-page',[
            'documents' => $documents
        ]);
    }


    public function download($id){

        $document = Document::find($id);

        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return Storage::download($document->path);


    }
}
