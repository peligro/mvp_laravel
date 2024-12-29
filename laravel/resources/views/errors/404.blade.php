@extends('../layouts.liviano')
@section('title','Ups página no encontrada - Error 404')
@section('content')
<div class="account-pages"></div>
		<div class="clearfix"></div>

        <div class="wrapper-page">
            <div class="ex-page-content text-center">
                <div class="text-error"><span class="text-primary">4</span><i class="ti-face-sad text-pink"></i><span class="text-info">4</span></div>
                <h2 class="text-white">Ups página no encontrada</h2><br>
                <p class="text-muted">Este recurso no está disponible.</p>
                <br />
                <a class="btn btn-success waves-effect waves-light" href="{{route('home_index')}}" title="Volver al home"><i class="md md-arrow-back"></i> Volver al home</a>

            </div>
        </div>

@endsection

 