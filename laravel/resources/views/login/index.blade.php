@extends('../layouts.liviano')
@section('title','Login')
@section('content')
<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="card-box">
        <div class="panel-heading">
            <x-flash />
            <h4 class="text-center"> Acceso a <strong>YeliSoft</strong></h4>
        </div>


        <div class="p-20">
            <form class="form-horizontal m-t-20" action="{{route('login_index_post')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group-custom">
                    <input type="text" id="correo" name="correo" value="{{old('correo')}}" />
                    <label class="control-label" for="correo">E-Mail</label><i class="bar"></i>
                </div>

                <div class="form-group-custom">
                    <input type="password" id="password" name="password"/>
                    <label class="control-label" for="user-password">Contraseña</label><i class="bar"></i>
                </div>

                <div class="form-group ">
                    <div class="col-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" name="checkbox-signup" type="checkbox" />
                            <label for="checkbox-signup">
                                Recuérdame
                            </label>
                        </div>

                    </div>
                </div>

                <div class="form-group text-center m-t-40">
                    <div class="col-12">
                        <button class="btn btn-success btn-block text-uppercase waves-effect waves-light"
                                type="submit" title="Entrar"><i class="fa fa-unlock"></i> Entrar
                        </button>
                    </div>
                </div>

                <div class="form-group m-t-30 m-b-0">
                    <div class="col-12">
                        <a href="page-recoverpw.html" class="text-dark"><i class="fa fa-lock m-r-5"></i> Olvidé mi contraseña</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <p class="text-white">Don't have an account? <a href="page-register.html" class="text-white m-l-5"><b>Sign Up</b></a>
            </p>

        </div>
    </div>

</div>

@endsection
@push('css')

@endpush
@push('scripts')

@endpush

 