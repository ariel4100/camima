<?php

namespace App\Http\Controllers\Adm;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function list($section)
    {

        if ($section == 'home')
        {
            $slider = Slider::where('section', $section)->orderBy('order')->get();
        }
        if ($section == 'servicios')
        {
            $slider = Slider::where('section','!=', 'home')
                ->where('section','!=', 'nosotros')
                ->where('section','!=', 'autoridades')
                ->where('section','!=', 'misionyvision')
                ->where('section','!=', 'objetivos')
                ->where('section','!=', 'interes')
                ->orderBy('order')->get();
        }
        if ($section == 'institucional')
        {
            $slider = Slider::where('section','!=','home')

                ->orderBy('order')->get();
        }
        if ($section == 'gremiales')
        {
            $slider = Slider::where('section','!=', 'home')
                ->where('section','!=', 'nosotros')
                ->where('section','!=', 'autoridades')
                ->where('section','!=', 'misionyvision')
                ->where('section','!=', 'objetivos')
                ->where('section','!=', 'interes')
                ->where('section','!=', 'nuestrasede')
                ->where('section','!=', 'asesorias')
                ->where('section','!=', 'cursos')
                ->orderBy('order')->get();
        }

        return view('adm.slider.index',compact('section','slider'));
    }
    public function create($section)
    {
        return view('adm.slider.create', ['section' => $section]);
    }


    public function store(Request $request, Slider $slider)
    {
        //dd($request->all());
        $data =  $request->except('_token','section','image','order');
        $slider = new Slider();
        $slider->section = $request->section;
        $slider->order = $request->order;
        $slider->text = $data;
        if ($request->file('image'))
        {
            $path = $request->file('image')->store('uploads/sliders');
            $slider->image = $path;
        }
        $slider->save();

//        if ($slider->section != 'home')
//        {
//            $section = 'institucional';
//        }

        return back()->with('status', 'Slider creado correctamente');
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        $section = $slider->section;
        return view('adm.slider.edit', compact('slider','section'));
        //return view('adm.slider.edit', ['section' => $item->section, 'element' => $item]);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $data =  $request->except('_token','section','image','order');
        $slider = Slider::find($id);
        $slider->section = $request->section;
        $slider->order = $request->order;
        $slider->text = $data;

        if ($request->file('image'))
        {
            $path = $request->file('image')->store('uploads/sliders');
            $slider->image = $path;
            //dd($slider);
        }
        $slider->save();

        return back()->with('status', 'Slider actualizado correctamente');
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        $section = $slider->section;
        $slider->delete();
        return redirect()->route('slider.list', compact('section'))->with('status', 'Slider eliminado correctamente.');
    }
}
