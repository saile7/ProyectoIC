@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('MatrizML')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <!--Enter code here -->
            <h1 class="car-title" > Bienvenido  a MATRIZML</h1>  
            
        </div>
        <div class="row">
        <i><img style="width:250px" src="{{ asset('img/sidebar-3.jpg') }}"></i>
        <p class="car-category">Para empezar a desarrollar el sistema de marco logico para su proyecto, primero se necesita crear la matris de involucrados</p>
        </div>
    </div>
</div>
@endsection
