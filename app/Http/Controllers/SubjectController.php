<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function show_dashboard()
    {
        $subjects = Subject::all();

        return view('pages.dashboard', [
            'subjects' => $subjects,
        ]);
    }
}
