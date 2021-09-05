<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\Mission;
use App\Models\News;
use App\Models\Project;
use App\Models\Slieder;
use App\Models\Vision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use TCG\Voyager\Facades\Voyager;

class PagesController extends Controller
{
    public $projects;
    public function __construct()
    {
        $Projects  = Project::orderBy('id','desc')->get();
        $this->projects = $Projects;
    }
    public function index(){
        $sliders  = Slieder::orderBy('id','desc')->get();
        return view('pages.home',['sliders'=>$sliders,'projects'=>$this->projects]);
    }
    public function about(){
        $mission = Mission::orderBy('id','desc')->get();
        $vision = Vision::orderBy('id','desc')->get();
        return view('pages.about',['missions'=>$mission,'visions'=>$vision,'projects'=>$this->projects]);
    }

    public function project(){
        $projects = Project::orderBy('id','desc')->get();
        return view('pages.projects',['projects'=>$projects,'projects'=>$this->projects]);
    }
    public function project_details($id){
        $project = Project::findOrFail($id);
        return view('pages.project_details',['project'=>$project,'projects'=>$this->projects] );
    }

    public function media(){
        $news = News::orderBy('id','desc')->get();
        return view('pages.media',['news'=>$news,'projects'=>$this->projects]);
    }
    public function jobs(){
        $jobs = Job::orderBy('id','desc')->get();
        return view('pages.career',['jobs'=>$jobs,'projects'=>$this->projects]);
    }
    public function contact(){
        return view('pages.contact',['projects'=>$this->projects]);
    }
}
