@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('categorias.crear') }}"><div id="categorias">Crear Categorias</div></a>
                    <a href="{{ route('categorias.lista') }}"><div id="categorias">Lista de Categorias</div></a>
                    <a href="{{ route('productos.crear') }}"><div id="productos">Productos</div></a>
                    <a href="{{ route('productos.lista') }}"><div id="categorias">Lista de Categorias</div></a>
                    <a href="{{ route('ventas.lista') }}"><div id="categorias">Lista de Ventas</div></a>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    #categorias{
        width: 50%;
        float: left;
        padding: 15px;
        font-size: 16px;
        color:white;
        background-color: #D67100;
    }

    #productos{
        width: 50%;
        float: left;
        padding: 15px;
        font-size: 16px;
        color:white;
        background-color: rgba(0,200,200,1);
    }
</style>
@endsection
