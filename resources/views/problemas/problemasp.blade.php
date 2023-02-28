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
                <h1 class="car-title"> Matriz de Problemas</h1>
               
                <h4 class="car-title">Los problemas de los involucrados se reflejan aqui</h4>
               
            </div>
            <div class="card-body">
                <div class="row">
                    <label form="name" class="col-sm-2 col-form-larabel">Problemas</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control"name="name" placeholder="Ingrese el problema" autofocus> 
                    </div>
                </div>
                <div class="row">
                    <label form="name" class="col-sm-2 col-form-larabel">Problemas</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control"name="name" placeholder="Ingrese el problema" autofocus> 
                    </div>
                </div>
                <div class="row">
                    <label form="name" class="col-sm-2 col-form-larabel">Problemas</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control"name="name" placeholder="Ingrese el problema" autofocus> 
                    </div>
                </div>
                <div class="row">
                    <label form="name" class="col-sm-2 col-form-larabel">Problemas</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control"name="name" placeholder="Ingrese el problema" autofocus> 
                    </div>
                </div>
                <div class="row">
                    <label form="name" class="col-sm-2 col-form-larabel">Problemas</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control"name="name" placeholder="Ingrese el problema" autofocus> 
                    </div>
                </div>
                <!-- inicio del footer -->
             <div class="card-footer ml-auto mr-auto">
                <!--<button type="submit" class="btn btn-primary">Crear proyecto</button> -->
               <div class="row">
                <div class="col-12 text-right">
                    <a href="{{route('involucrados.create')}}" class="btn btn-sm btn-facebook">siguiente</a>
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