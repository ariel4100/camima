@extends('page.layouts.app')

@section('content')
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4643.94733114381!2d-58.39149339106834!3d-34.61006177513941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccadcaf0b574f%3A0xb7888ec747f7ed29!2sCAMIMA!5e0!3m2!1ses!2sar!4v1562175552049!5m2!1ses!2sar" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    <div class="container my-5">
        <p class="p-2" style="background-color: #F9F9F9">{!! optional($contacto)->text{'title_es'} ?? '' !!}</p>
    </div>
    <div class="container my-5">
        <form action="" class="row">
            <div class="form-group col-md-6">
                <input type="text" placeholder="Nombre" name="nombre" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <input type="text" placeholder="Apellido" name="apellido" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <input type="email" placeholder="Email" name="email" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <input type="text" placeholder="Empresa" name="empresa" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <textarea class="form-control rounded-0" name="mensaje" placeholder="Mensaje" rows="5"></textarea>
            </div>
            <div class="col-md-6">
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="terminos" id="defaultUnchecked">
                    <label class="custom-control-label" for="defaultUnchecked">Acepto los términos y condiciones</label>
                </div>
                <button type="submit" class="btn btn-block mt-4 text-white" style="background-color: #133165">Enviar</button>
            </div>
        </form>
    </div>
@endsection
