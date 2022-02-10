<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Discussion;
use App\Models\Subject;
use App\Models\Reply;

class DiscussionController extends Controller
{
    public function show($subject)
    {
        
        $subject = Subject::where("name", $subject)->first();

        return view('pages.discussions', [
            'discussions' => Discussion::where("subject_id", $subject->id)->get(),
            'subject' => $subject
        ]);
    }

    public function create($subject)
    {
        // shows view to create new resource 
        return view('pages/create_discussion', [
            'subject' => Subject::where("name", $subject)->first(),

        ]);

    }

    public function store($subject)
    {
        request()->all();
        // stores the create form 
        $subject = Subject::where("name", $subject)->first();
        $discussion = new Discussion();
        $discussion->name = request('name');
        $discussion->subject_id = $subject->id;
        $discussion->save();
        $url = "/subjects/".$subject->name."/discussion";

        return redirect($url);
    }


    public function edit($subject, $id)
    {
        // show a form to edit an existing item 
        $discussion = Discussion::where('id' , $id)->first();
        $subject = Subject::where("id", $discussion->subject_id)->first();


        return view('pages.edit_discussion', [ 
            'id' => $id,
            'subject' => $subject,
            "discussion" => $discussion
        
        ]);
        
    }

    public function update($subject, $id)
    {
        request()->all();
        //submission of the update form 
        $discussion = Discussion::find($id);
        $discussion->name = request('name');
        $discussion->save();
        $subject = Subject::where("id", $discussion->subject_id)->first();

        $url = "/subjects/".$subject->name."/discussion";
        return redirect($url);
    }


    public function destroy($subject, $id)
    {
        //remove the stored resource 
        request()->all();
        $discussion = Discussion::find($id);
        $subject = Subject::where("id", $discussion->subject_id)->first();
        Reply::where("discussion_id", $discussion->id )->delete();
        Discussion::find($id)->delete();
        $url = "/subjects/".$subject->name."/discussion";

        return redirect($url);
    }





}