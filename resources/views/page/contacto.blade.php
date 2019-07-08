@extends('page.layouts.app')

@section('content')
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4643.94733114381!2d-58.39149339106834!3d-34.61006177513941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccadcaf0b574f%3A0xb7888ec747f7ed29!2sCAMIMA!5e0!3m2!1ses!2sar!4v1562175552049!5m2!1ses!2sar" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    <div class="container my-5">
        <nav aria-label="">
            <ol class="list-unstyled d-flex">
                <li class="ml-2">INSTITUCIONAL </li>
                <li class="ml-2"> {!! '| '. $contenido->text{'title_es'} ?? '' !!}</li>
            </ol>
        </nav>
        <h1 class="my-4">{!! $contenido->text{'title_es'} ?? '' !!}</h1>
        <hr class="my-4">
        {!! $contenido->text{'text_es'} ?? '' !!}
    </div>

@endsection
