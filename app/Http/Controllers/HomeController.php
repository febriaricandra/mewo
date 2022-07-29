<?php
    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "HomePage Online store";
        return view('home.index')->with("viewData", $viewData);
    }
    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About";
        $viewData["subtitle"] = "About Online store";
        $viewData["description"] = "this is an Online store";
        $viewData["author"] = "developed by: febriari candra";
        return view('home.about')->with("viewData", $viewData);
    }
}
