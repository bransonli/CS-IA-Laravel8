<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Resource;
use App\Models\Subject;
use App\Models\User;

class ResourceController extends Controller
{
    public function show($subject_name)
    {
        $subject = Subject::where("name", $subject_name)->first();

        return view('pages.resources', [
            'resources' => Resource::where("subject_id", $subject->id)->get(),
            'subject' => $subject,
        ]);
    }

    public function create($subject_name)
    {
        // shows view to create new resource 
        return view('pages/create_resource', [
            'subject' => Subject::where("name", $subject_name)->first(),

        ]);

    }

    public function store($subject_name)
    {
        request()->all();
        $user_id = User::where("email", auth()->user()->email)->first()->id;
        $subject = Subject::where("name", $subject_name)->first();
        // stores the create form 
        
        $resource = new Resource();
        $resource->name = request('name');
        $resource->link = request('link');
        $resource->description = request('description');
        $resource->subject_id = $subject->id;
        $resource->user_id = $user_id;
        $resource->save();

        $url = "/subjects/".$subject_name."/resource";

        return redirect($url);
    }


    public function edit($subject_name, $id)
    {
        // show a form to edit an existing item 
        $resource = Resource::where('id' , $id)->first();
        $subject = Subject::where("id", $resource->subject_id)->first();


        return view('pages.edit_resource', [ 
            'subject' => $subject,
            "resource" => $resource
        
        ]);
        
    }

    public function update($subject_name, $id) 
    {
        request()->all();
        //submission of the update form 
        $resource = Resource::find($id);

        $resource->name = request('name');
        $resource->link = request('link');
        $resource->description = request('description');

        $resource->save();
        $subject = Subject::where("id", $resource->subject_id)->first();

        $url = "/subjects/".$subject_name."/resource";
        return redirect($url);
    }

    public function destroy($subject_name, $id)
    {
        //remove the stored resource 
        $resource = Resource::where("id", $id)->first();
        $subject = Subject::where("id", $resource->subject_id)->first();
        Resource::where("id", $resource->id )->delete();
        $url = "/subjects/".$subject_name."/resource";

        return redirect($url);
    }






}


