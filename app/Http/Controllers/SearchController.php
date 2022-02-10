<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Reply;
use App\Models\Discussion;
use App\Models\Resource;
use App\Models\Note;


class SubjectController extends Controller
{
    public function search($search_term)
    {
        $words = explode(" ", $search_term);
        $related_discussions = array();
        $related_notes = array();
        $related_resources = array();

        //search for all the related discussions
        for ($x = 0; $x <= count($words); $x++) {
            $discussions = Discussion::where("name", $words[$x])->get();
            for ($y = 0; $y <= count($discussions); $x++) {
            }

            $replies = Discussion::where("content", $words[$x])->get();
        } 




        return view('pages.search_results', [
            'results' => 1,
        ]);
    }


}
