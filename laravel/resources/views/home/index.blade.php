@extends('../layouts.frontend')
@section('title','Home')
@section('content')
<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item active">Inicio</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Inicio</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->


        <!-- Bootstrap Modals -->
        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <h4 class="header-title m-t-0 m-b-30">Bootstrap Modals (default)</h4>

                    <p class="text-muted m-b-15 font-13">
                        A rendered modal with header, body, and set of actions in the footer.
                    </p>


                    <div class="button-list">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Standard Modal</button>
                        <!-- Large modal -->
                        <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                        <!-- Small modal -->
                        <button  type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
                        <!-- Center modal -->
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#CenterModal">Center Modal</button>
                        
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- end container -->
</div>
<!-- end wrapper -->
@endsection

 