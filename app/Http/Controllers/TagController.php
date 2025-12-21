<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Tag $tag): Factory|View
    {
        return view('results', ['jobs' => $tag->jobs]);
    }
}
