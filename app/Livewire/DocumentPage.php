<?php

namespace App\Livewire;

use App\Models\Document;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class DocumentPage extends Component
{

    use WithPagination;

    public $search = '';

    public function render()
    {    
        $documents = null;

        if($this->search == '') {
            
            $documents = Document::paginate();
        }

        else {

           $documents =  Document::where('name', 'like', '%' . $this->search . '%')->paginate(2);

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
