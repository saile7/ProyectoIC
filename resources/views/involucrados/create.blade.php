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
                <h1 class="car-title"> Matriz de involucrados</h1>
                <p class="car-category">Para empezar a desarrollar el sistema de marco logico para su proyecto, primero se necesita crear la matris de involucrados</p>
                <h4 class="car-title">Problemas del Involucrado</h4>
               
            </div>
            <div class="card-body">
            <div class="row">
                      <label form="involucrado" class="col-sm-2 col-form-larabel">Nombre de Involucrado</label>
                     <div class="col-sm-7">
                       <input type="text" class="form-control"name="involucrado" placeholder="Example @perez Juan" autofocus> 
                    </div>
               </div>
                <div class="row">
                    <label form="problema1" class="col-sm-2 col-form-larabel">Problema1</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control"name="problema1" placeholder="" autofocus> 
                    </div>
                </div>
                <div class="row">
                      <label form="problema2" class="col-sm-2 col-form-larabel">Problema2</label>
                     <div class="col-sm-7">
                       <input type="text" class="form-control"name="problema2" placeholder="" autofocus> 
                    </div>
               </div>
               <div class="row">
                      <label form="problema3" class="col-sm-2 col-form-larabel">Problema3</label>
                     <div class="col-sm-7">
                       <input type="text" class="form-control"name="problema3" placeholder="" autofocus> 
                    </div>
               </div>
                <!-- inicio del footer -->
            <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">Guardar Problema</button>
                <div class="row">
                <div class="col-12 text-right">
                    <a href="{{route('recursos.recursop')}}" class="btn btn-sm btn-facebook">siguiente</a>
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

