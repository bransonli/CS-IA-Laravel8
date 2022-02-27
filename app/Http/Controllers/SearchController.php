<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Reply;
use App\Models\Discussion;
use App\Models\Resource;
use App\Models\Note;


class SearchController extends Controller
{
    public function search()
    {
        $discussions = Discussion::all();
        $notes = Note::all();
        $resources = Resource::all();
        $replies = Reply::all();


        request()->all();
        $search_term = request('search');
        $words = explode(" ", $search_term);
        $related_discussions = array();
        $related_notes = array();
        $related_resources = array();

        //search for all the related 
        for ($x = 0; $x < count($words); $x++) {
            for ($y = 0; $y < count($discussions); $y++) {
                $discussion_name = $discussions[$y]->name;
                if (strstr($discussion_name, $words[$x]) !== false){
                    array_push($related_discussions, $discussions[$x]);
                }
            }

            for ($y = 0; $y < count($replies); $y++) {
                $reply_content = $replies[$y]->content;
                if (strstr($reply_content, $words[$x]) !== false){
                    $discussion = Discussion::where("id", $replies[$x]->discussion_id)->first();
                    array_push($related_discussions, $discussion);
                }
            }


            for ($y = 0; $y < count($notes); $y++) {
                $note_name = $notes[$y]->name;
                $note_description = $notes[$y]->description;
                if (strstr($note_name, $words[$x]) !== false){
                    array_push($related_notes, $notes[$x]);
                } elseif (strstr($note_description, $words[$x]) !== false) {
                    array_push($related_notes, $notes[$x]);
                }
            }

            for ($y = 0; $y < count($resources); $y++) {
                $resource_name = $resources[$y]->name;
                $resource_description = $resources[$y]->description;
                if (strstr($resource_name, $words[$x]) !== false){
                    array_push($related_resources, $resources[$x]);
                } elseif (strstr($resource_description, $words[$x]) !== false){
                    array_push($related_resources, $resources[$x]);
                }
            }
        } 


        return view('pages.search_results', [
            'discussions' => $related_discussions,
            'notes' => $related_notes,
            'resources' => $related_resources
        ]);
    }


}
