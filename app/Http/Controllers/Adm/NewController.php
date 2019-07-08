<?php

namespace App\Http\Controllers\Adm;

use App\Category;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewController extends Controller
{
    public function index()
    {
        $novedades = News::orderBy('orden')->get();
        return view('adm.news.index',compact('novedades'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('adm.news.create',compact('categories'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
//        $gallery = $request->gallery;
//        if (isset($gallery))
//        {
//            foreach ($gallery as $k => $item) {
//                $path = $item['image']->store('gallery/noticia');
//                $gallery[$k]['image'] = $path;
//            }
//        }
        $noticia = new News();
        if(isset($request->ruta))
        {
            $request->file('ruta')->store('imagenes/novedades');
            $noticia->ruta = $request->ruta->getClientOriginalName();
        }

        if (isset($request->pdf))
        {
            $request->file('pdf')->store('archivos');
            $noticia->pdf = $request->pdf->getClientOriginalName();
        }

        $noticia->titulo = $request->titulo;
        $noticia->orden = $request->orden;
        $noticia->descripcion = $request->descripcion;
        $noticia->category_id = $request->category_id;
        $noticia->portada = $request->portada;
        $noticia->habilitado = $request->habilitado;
        $noticia->save();
        //IMAGE

        return back()->with('status','Se creó correctamente');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $noticia = News::find($id);
        $categories = Category::all();
        return view('adm.news.edit',compact('noticia','categories'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->ruta->getClientOriginalName());
        $gallery = $request->gallery;
        $noticia = News::find($id);
        if(isset($request->ruta))
        {
            $request->file('ruta')->store('imagenes/novedades');
            $noticia->ruta = $request->ruta->getClientOriginalName();
        }

        if (isset($request->pdf))
        {
            $request->file('pdf')->store('archivos');
            $noticia->pdf = $request->pdf->getClientOriginalName();
        }

//        if (isset($gallery))
//        {
//            //dd($gallery);
//            foreach ($gallery as $k => $item) {
//                //dd($item['image']);
//                if (is_string($item['image']))
//                {
//                    //dd($item['image']);
//                    $gallery[$k]['image'] = $noticia->image[$k]['image'];
//                }else{
//                    //dd($item['image']);
//                    $path = $item['image']->store('gallery/noticia');
//                    $gallery[$k]['image'] = $path;
//                }
//            }
//        }
        $noticia->titulo = $request->titulo;
        $noticia->orden = $request->orden;
        $noticia->descripcion = $request->descripcion;
        $noticia->category_id = $request->category_id;
        $noticia->portada = $request->portada;
        $noticia->habilitado = $request->habilitado;
        $noticia->save();

        return redirect()->route('noticia.index')->with('status','Se actualizó correctamente');
    }


    public function destroy($id)
    {
        News::find($id)->delete();

        return back()->with('status','Se eliminó correctamente');
    }
}
