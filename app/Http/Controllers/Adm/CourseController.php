<?php

namespace App\Http\Controllers\Adm;

use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public  function index($section)
    {
        //dd($section);
        if ($section == 'cursos')
        {
            $cursos = Course::where('section','cursos')->orderBy('orden')->get();
        }

        if ($section == 'otros')
        {
            $cursos = Course::where('section','otros')->orderBy('orden')->get();
        }

        return view('adm.cursos.index',compact('cursos'));
    }



    public  function create($section)
    {
        //dd($section);

        return view('adm.cursos.create');
    }


    public  function store()
    {
        //dd($section);

        return back();
    }
}
