@extends('layouts.main', ['activePage'=> 'involucrados','titlePage' =>'Nuevo Proyecto'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

        <form action="#" method="post" class="form-horizontal">
         @csrf 
         <div class="card">
            <div class="card-header card-header-primary">
                <h1 class="car-title"> Ingrese los recursos disponibles</h1>
               
                <h4 class="car-title">Recursos disponibles</h4>
               
            </div>
            <!-- inicio del body -->
            <div class="card-body">
                <div class="row">
                    <label form="recurso1" class="col-sm-2 col-form-larabel">Recurso número 1</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control"name="recurso1" placeholder="" autofocus> 
                    </div>
                </div>

                <div class="row">
                    <label form="recurso2" class="col-sm-2 col-form-larabel">Recurso número 2</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control"name="recurso2" placeholder="" autofocus> 
                    </div>
                </div>
               <!-- final del footer -->
                <!-- inicio del footer -->
            <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">Guardar Recursos</button>
               <div class="row">
                <div class="col-12 text-right">
                    <a href="{{route('problemas.problemasp')}}" class="btn btn-sm btn-facebook">siguiente</a>
                </div>
               </div> 
            </div>
               <!-- fin del footer -->
         </div>
        </form>
        </div>
    </div>
  </div>

 </div>
@endsection