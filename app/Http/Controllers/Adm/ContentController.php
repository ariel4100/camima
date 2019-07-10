<?php

namespace App\Http\Controllers\Adm;

use App\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    public function index($section)
    {
        $contenido = Content::firstOrCreate(['section' => $section]);
        //dd($contenido);
        return view('adm.content.index', compact('contenido', 'section'));
    }

    public function create($section, $type) {
        return view('adm.content.create', compact('section','type'));
    }

    public function edit($section, Content $contenido) {
        if ($section) {
            return view('adm.content.edit', compact('contenido','section'));
        }
    }

    public function update(Request $request,$section)
    {
        //dd($request->all());
        $datos = $request->except('_method','_token');
        $gallery = $request->gallery;
        $video = $request->video;
        $contenido = Content::firstOrCreate(['section' => $section]);

        if (isset($datos['image']))
        {
            $path = $datos['image']->store("uploads/$section/img");
            $datos['image'] = $path;
        }else{
            $datos['image'] = $contenido->text{'image'} ?? '';
        }

        if (isset($gallery))
        {
            //dd($gallery);
            foreach ($gallery as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($item['image']);
                    $gallery[$k]['image'] = $contenido->image[$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = isset($item['image']) ? $item['image']->store("uploads/$section") : '';
                    $gallery[$k]['image'] = $path;
                }
            }
        }

        $contenido->text = $datos;
        $contenido->image = $gallery;
        $contenido->video = $video;
        $contenido->order = $request->order;
        $contenido->save();

        return back()->with('status','Actualizado correctamente');
    }
}
