<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Note;
use App\Models\Subject;

class NoteController extends Controller
{
    public function show($subject)
    {
        
        $subject = Subject::where("name", $subject)->first();

        return view('pages.notes', [
            'notes' => Note::where("subject_id", $subject->id)->get(),
            'subject' => $subject,
        ]);
    }

    public function upload($subject)
    {
        // shows view to create new resource 
        return view('pages/upload_note', [ 
            'subject' => Subject::where("name", $subject)->first(),

        ]);

    }

    public function store($subject)
    {
        request()->all();
        // stores the create form 
        $subject = Subject::where("name", $subject)->first();
        $subject_id = $subject->id;
        
        $note = new Note();
        $note->name = request('name');
        $note->description = request('description');

        // Request note file
        $file = request('note');

        // Creating file name
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $note->subject_id = $subject_id;
        $note->file_name = $file_name;

        // Saving note to database and storage
        $note->save();
        request()->file('note')->storeAs('notes', $file_name);

        // Redirect
        $url = '/subjects/'.$subject->name.'/note'; 
        return redirect($url);
    }

    public function download($subject, $note_id)
    {

        $note = Note::where("id", $note_id)->first();

        return Storage::download('notes/'.$note->file_name);


    }  

    public function delete($subject_name, $note_id)
    {
        // Deleting on both database and storage
        $note = Note::where("id", $note_id)->first();
        Storage::delete('notes/'.$note->file_name);
        $note->delete();

        // Redirect
        $subject = Subject::where("name", $subject_name)->first();
        $url = '/subjects/'.$subject->name.'/note'; 
        return redirect($url);

    }  


}