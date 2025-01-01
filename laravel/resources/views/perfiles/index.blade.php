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
                            <li class="breadcrumb-item active">Perfiles</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Perfiles</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

       




        <div class="row">
            <div class="col-lg-8">
                <div class="card-box">
                    <h4 class="m-t-0 header-title">Hay <strong>{{$datos->count()}}</strong> registro{{($datos->count()==1) ? '':'s'}} en total</h4>
                    <x-flash />
                    <p class="text-muted font-14 m-b-20 d-flex justify-content-end">
                        <a href="#custom-modal" class="btn btn-default btn-md waves-effect waves-light m-b-30" data-animation="rotatedown" data-plugin="custommodal" data-overlaySpeed="200" data-overlayColor="#36404a" onclick="abrir_modal(  'Crear', '1', [], []);" title="Crear nuevo"><i class="md md-add"></i> Crear nuevo</a>
                    </p>
            
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datos as $dato)
                    <tr>
                        <td class="text-center">{{$dato['id']}}</td>
                        <td>{{$dato->nombre}}</td>
                        <td class="text-center">
                            <a href="{{route('perfiles_editar', ['id'=>$dato->id])}}" title="Editar"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0);" onclick="eliminar('/mysql/eliminar')" title="Eliminar"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                    @endforeach()
                        </tbody>
                    </table>
                </div>
            
            </div>
        </div>
        <!-- end row -->

      

    </div> <!-- end container -->
</div>
<!-- end wrapper -->

 <!-- Modal -->
 <div id="custom-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();" title="Cerrar">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title" id=modal_title>Crear</h4>
    <div class="custom-modal-text text-left">
        <form role="form" method="POST" action="{{route('perfiles_index_post')}}" name="form">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" />
            </div>
            <div class="form-group">
                <h4><strong>Módulos</strong></h4>
                <div class="col-sm-10">
                @foreach ($modulos as $key=>$modulo)
                  <div class="form-check">
                    
                    <input class="form-check-input" type="checkbox" value="{{$modulo->id}}" id="modulo_{{$key}}"  name="modulo_{{$key}}" />
                  <label class="form-check-label" for="modulo_{{$key}}">
                    {{$modulo->nombre}}
                  </label>

                  </div>
                @endforeach
                 

                </div>
              </div>
            <hr />
            <input type="hidden" name="accion" id="accion" value="1" />
            <input type="hidden" name="id" id="id" value="0" />
            {{ csrf_field() }}
            <button type="submit" class="btn btn-default waves-effect waves-light" title="Guardar" onclick="document.form.submit();"><i class="fa fa-save"></i> Guardar</button>
            <button type="button" class="btn btn-danger waves-effect waves-light m-l-10" title="Cancelar" onclick="Custombox.close();">Cancelar</button>
        </form>
    </div>
</div>
<!-- //Modal -->
@endsection
@push('css')
<link href="{{asset('plugins/custombox/css/custombox.css')}}" rel="stylesheet" />
@endpush
@push('scripts')
<script src="{{asset('plugins/custombox/js/custombox.min.js')}}"></script>
<script src="{{asset('plugins/custombox/js/legacy.min.js')}}"></script>
@endpush

 