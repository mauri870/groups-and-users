<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $groups = Group::with(['users' => function($query) { $query->where('active', 1); }])->orderBy('name','ASC')->get();

        return view('index', compact('groups'));
    }
}
