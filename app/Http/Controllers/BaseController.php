<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Project;
use TCG\Voyager\Facades\Voyager;

class BaseController extends Controller
{
    public function __construct()
    {
        //its just a dummy data object.
        $project = Project::with('translations')->orderBy('id','desc')->get();

        if (Voyager::translatable($project)) {
            $project = $project->translate('ar', 'en');
        }
        // Sharing is caring
        View::share('projects', $project);
    }
}
