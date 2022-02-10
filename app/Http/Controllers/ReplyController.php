<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reply;
use App\Models\Discussion;
use App\Models\Subject;

class ReplyController extends Controller
{
    public function show($subject, $id)
    {
        $discussion = Discussion::where("id", $id)->first();
        $subject = Subject::where("id", $discussion->subject_id)->first();

        return view('pages.replies', [
            'replies' => Reply::where("discussion_id", $id)->get(),
            'discussion' => $discussion,
            'subject' => $subject,
        ]);
    }

    public function store($subject, $discussion_id)
    {
        request()->all();
        // stores the create form 
        
        $reply = new Reply();
        $reply->content = request('content');
        $reply->discussion_id = $discussion_id;
        $reply->save();
        $discussion = Discussion::where("id", $discussion_id)->first();
        $url = "/subjects/{subject}/discussion/".$discussion->id;

        return redirect($url);
    }


    public function edit($discussion, $id)
    {
        // show a form to edit an existing item 
        $reply = Reply::where('id' , $id)->first();
        $discussion = Discussion::where("id", $reply->discussion_id)->first();


        return view('pages.edit_reply', [ 
            'id' => $id,
            'discussion' => $discussion,
            "reply" => $reply
        
        ]);
        
    }

    public function update($subject_name, $discussion_id, $id) 
    {
        request()->all();
        //submission of the update form 
        $reply = Reply::find($id);
        $reply->content = request('content');
        $reply->save();
        $discussion = Discussion::where("id", $reply->discussion_id)->first();

        $url = "/subjects/".$subject_name."/discussion/".$discussion->id;

        return redirect($url);
    }

    public function destroy($subject_name, $discussion_id, $id)
    {
        //remove the stored resource 
        $reply = Reply::where("id", $id)->first();
        $discussion = Discussion::where("id", $reply->discussion_id)->first();
        Reply::where("id", $reply->id )->delete();
        $url = "/subjects/".$subject_name."/discussion/".$discussion->id;

        return redirect($url);
    }






}