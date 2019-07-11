<?php

namespace App\Http\Controllers;

use App\Asimra;
use App\Category;
use App\Content;
use App\Course;
use App\News;
use App\Slider;
use App\Subasimra;
use App\Subuom;
use App\Uom;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $slider = Slider::where('section','home')->get();
        $contenido = Content::where('section','home')->first();
        $noticias = News::where('portada',true)->orderBy('id','desc')->get();
        return view('page.home',compact('slider','contenido','noticias'));
    }

    public function quienessomos()
    {
        $slider = Slider::where('section','nosotros')->get();
        $contenido = Content::where('section','nosotros')->first();
        return view('page.quienessomos',compact('contenido','slider'));
    }


    public function autoridades()
    {
        $slider = Slider::where('section','autoridades')->get();
        $contenido = Content::where('section','autoridades')->first();
        return view('page.autoridades',compact('contenido','slider'));
    }

    public function objetivos()
    {
        $slider = Slider::where('section','objetivos')->get();
        $contenido = Content::where('section','objetivos')->first();
        return view('page.objetivos',compact('contenido','slider'));
    }

    public function misionvision()
    {
        $slider = Slider::where('section','misionyvision')->get();
        $contenido = Content::where('section','misionyvision')->first();
        return view('page.misionvision',compact('contenido','slider'));
    }

    public function enlaces()
    {
        $slider = Slider::where('section','interes')->get();
        $contenido = Content::where('section','interes')->first();
        return view('page.enlaces',compact('contenido','slider'));
    }

    public function nuestrasede()
    {
        $slider = Slider::where('section','nuestrasede')->get();
        $contenido = Content::where('section','nuestrasede')->first();
        return view('page.nuestrasede',compact('contenido','slider'));
    }

    public function asesorias()
    {
        $slider = Slider::where('section','asesorias')->get();
        $contenido = Content::where('section','asesorias')->first();
        return view('page.asesorias',compact('contenido','slider'));
    }

    public function prensa(Request $request)
    {
        //dd($request->all());
        $novedades = News::where('titulo', 'LIKE', "%$request->name%")
            ->where('habilitado',true)
            ->orderBy('id')->paginate(15);
        $categorias = Category::orderBy('order')->get();
        return view('page.novedades.index',compact('novedades','categorias'));
    }

    public function show_index($id) {
        $categoria = Category::find($id);
//        dd($categoria->news);
        $categorias = Category::orderBy('order')->get();
        $novedades = $categoria->news()->orderBy('orden')->paginate(8);
        return view('page.novedades.show_index', compact('novedades', 'categoria', 'categorias'));
    }

    public function show(News $news)
    {
        $categorias = Category::orderBy('order')->get();
        return view('page.novedades.show',compact('news','categorias'));
    }

    public function uom()
    {
        $slider = Slider::where('section','uom')->orderBy('order')->get();
        $uom = Uom::where('habilitado',true)->orderBy('orden')->get();
        return view('page.gremial.uom',compact('uom','slider'));
    }

    public function asimra()
    {
        $slider = Slider::where('section','asimra')->orderBy('order')->get();
        $asimra = Asimra::where('habilitado',true)->orderBy('orden')->get();
        return view('page.gremial.asimra',compact('asimra','slider'));
    }

    public function pdf($gremial,$id)
    {
        if ($gremial == 'uom')
        {
            $slider = Slider::where('section','uom')->orderBy('order')->get();
            $gremial = Uom::find($id);
            $pdf = Subuom::where('uom_id',$id)->where('habilitado',true)->orderBy('orden')->get();
        }
        if ($gremial == 'asimra')
        {
            $slider = Slider::where('section','asimra')->orderBy('order')->get();
            //dd($gremial);
            $gremial = Asimra::find($id);
            $pdf = Subasimra::where('asimra_id',$id)->where('habilitado',true)->orderBy('orden')->get();
        }
         //dd($gremial);
        return view('page.gremial.pdf',compact('pdf','gremial','slider'));
    }



    public function cursos()
    {
        $slider = Slider::where('section','cursos')->get();
        $cursos= Course::where('section','cursos')->where('habilitado',true)->orderBy('orden')->get();
        return view('page.cursos.cursos',compact('cursos','slider'));
    }

    public function otros()
    {
        $slider = Slider::where('section','otros')->get();
        $cursos= Course::where('section','otros')->where('habilitado',true)->orderBy('orden')->get();
        return view('page.cursos.otros',compact('cursos','slider'));
    }

    public function curso($id)
    {
        $slider = Slider::where('section','cursos')->get();
        $curso = Course::find($id);
        return view('page.cursos.curso',compact('curso','slider'));
    }




    public function contacto()
    {
        $contenido = Content::where('section','contacto')->get();

        return view('page.contacto',compact('contenido'));
    }



    public function buscador(Request $request)
    {
         //dd(isset($request->name));
        if (isset($request->name))
        {
            $resultado = Course::Orwhere('titulo', 'LIKE', "%$request->name%")->get();
        }else{
            $resultado = [];
        }
        //$resultado = Product::whereLike(['text->title_'.App::getLocale(), 'text->text_'.App::getLocale()], $request->name)->get();
        //dd($resultado);
        return view('page.buscador',compact('resultado'));
    }
}
