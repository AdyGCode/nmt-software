<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\FileType;
use App\Models\Software;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::count();
        $software = Software::count();
        $fileTypes = FileType::count();
        $categories = Category::count();

        return view('dashboard', compact(['users','software','fileTypes', 'categories']));

    }


}
