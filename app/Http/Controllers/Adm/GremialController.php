<?php

namespace App\Http\Controllers\Adm;

use App\Asimra;
use App\Subasimra;
use App\Suboum;
use App\Subuom;
use App\Uom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GremialController extends Controller
{
    public function index($gremial)
    {
        if ($gremial == 'uom')
        {
            $contenido = Uom::orderBy('orden')->get();
        }
        if ($gremial == 'asimra')
        {
            $contenido = Asimra::orderBy('orden')->get();
        }
        //dd($uom);
        return view('adm.gremial.index',compact('contenido','gremial'));
    }

    public function pdf($gremial,$id)
    {
        if ($gremial == 'uom')
        {
            $pdf = Subuom::where('uom_id',$id)->orderBy('orden')->get();
        }
        if ($gremial == 'asimra')
        {
            //dd($gremial);
            $pdf = Subasimra::where('asimra_id',$id)->orderBy('orden')->get();
        }
        //dd($pdf);
        return view('adm.gremial.pdf.index',compact('pdf'));
    }
}
