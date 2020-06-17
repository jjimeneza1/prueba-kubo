@extends('layouts.app')

@section('content')


<div id="content-form" style="width: 30%;margin-left:40%;float: left;">
    <div id="content-mensaje">
        @if($mensaje=="exito")<div id="mensaje-exito"> <i class="fa fa-check-circle"></i> Producto creada Exitosamente</div>@endif
        @if($mensaje=="error")<div id="mensaje-error"> <i class="fa fa-times-circle"></i>&nbsp; Nombre de Producto ya existe</div>@endif
    </div>
<form method="post" action="{{ route('productos.guardar') }}" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre de Producto</label>
    <input type="text" class="form-control" name="nombre_producto" placeholder="Nombre"> 
  </div>
<input type="hidden" class="form-control" name="estado_producto" value="activo">

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion producto</label>
    <textarea class="form-control" name="descripcion_producto" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Precio producto</label>
    <input type="text" class="form-control" name="precio_producto">
  </div>



  <div class="form-group">
    <label for="exampleFormControlSelect1">Categoría</label>
    <select class="form-control" name="id_categoria">
      <option>Seleccione Categoria de este producto</option>
      @foreach($categorias as $categoria)
          <option value="{{$categoria->id_categoria}}">{{$categoria->nombre_categoria}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <input type="file" name="imagen_producto" id="imagen_producto" required>
  </div>


  {{--<div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>--}}

<button type="submit" class="btn btn-primary">Guardar</button>

</form>
</div>
@endsection