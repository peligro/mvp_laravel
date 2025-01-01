@extends('../layouts.frontend')
@section('title','Perfiles')
@section('content')
<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-8">
                <div class="page-title-box">
                    <div class="btn-group pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="{{route('home_index')}}">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="{{route('perfiles_index')}}">Perfiles</a></li>
                            <li class="breadcrumb-item active"><i class="fa fa-edit"></i> Editar perfil: <strong>{{$datos->nombre}}</strong></li>
                        </ol>
                    </div>
                    <h4 class="page-title"><i class="fa fa-edit"></i> Editar perfil: <strong>{{$datos->nombre}}</strong></h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->


        <div class="row">
            <div class="col-lg-8">

                <div class="card-box"> 
                     
                    <x-flash />
                    <form method="post" action="{{ route('perfiles_editar_post') }}">
                        <div class="form-group">
                            <label for="nombre">Nombre<span class="text-danger">*</span></label>
                            <input type="text"
                                   placeholder="Nombre" class="form-control" id="nombre" name="nombre" value="{{old('nombre', $datos->nombre)}}" />
                        </div>
                        <div class="form-group">
                            <legend class="col-form-label col-sm-2 pt-0 label-class">Módulos</legend>
                                    <div class="col-sm-10">

                                        @foreach ($modulos as $key=>$modulo)
                                        <div class="form-check">
                                          
                                          <input class="form-check-input" type="checkbox" value="{{$modulo->id}}" id="modulo_{{$key}}"  name="modulo_{{$key}}" {{(\App\Helpers\Helpers::moduloEnPerfil($datos->id,$modulo->id)==false) ? '':'checked'}} />
                                        <label class="form-check-label" for="modulo_{{$key}}">
                                          {{$modulo->nombre}}
                                        </label>
          
                                        </div>
                                      @endforeach

                                    </div>
                        </div>

                        <div class="form-group text-right m-b-0">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" id="id" value="{{ $datos->id }}" />
                            <button class="btn btn-primary waves-effect waves-light" type="submit" title="Guardar">
                                <i class="fa fa-save"></i> Guardar
                            </button>
                            
                        </div>

                    </form>
                </div> <!-- end card-box -->
            </div>
            <!-- end col -->

           
        </div>
        <!-- end row -->


    </div> <!-- end container -->
</div>
<!-- end wrapper -->
@endsection
@push('css')

@endpush
@push('scripts')
 
@endpush

 