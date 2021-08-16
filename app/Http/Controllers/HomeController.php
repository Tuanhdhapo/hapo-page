<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\Lesson;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
