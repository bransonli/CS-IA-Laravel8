<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function show_discussion_subjects()
    {
        $subjects = Subject::all();

        return view('pages.discussion_subjects', [
            'subjects' => $subjects
        ]);
    }

    public function show_note_subjects()
    {
        $subjects = Subject::all();

        return view('pages.note_subjects', [
            'subjects' => $subjects
        ]);
    }

    public function show_resource_subjects()
    {
        $subjects = Subject::all();

        return view('pages.resource_subjects', [
            'subjects' => $subjects
        ]);
    }

    public function show_dashboard()
    {
        $subjects = Subject::all();

        return view('pages.dashboard', [
            'subjects' => $subjects,
        ]);
    }
}
