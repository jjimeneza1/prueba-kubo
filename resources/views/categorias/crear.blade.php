@extends('layouts.app')

@section('content')


<div id="content-form" style="width: 30%;margin-left:40%;float: left;">
    <div id="content-mensaje">
        @if($mensaje=="exito")<div id="mensaje-exito"> <i class="fa fa-check-circle"></i> Categoría creada Exitosamente</div>@endif
        @if($mensaje=="error")<div id="mensaje-error"> <i class="fa fa-times-circle"></i>&nbsp; Nombre de Categoría ya existe</div>@endif
    </div>
<form method="post" action="{{ route('categorias.guardar') }}">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre de Categoria</label>
    <input type="text" class="form-control" name="nombre_categoria" placeholder="Categoria">

    <input type="hidden" class="form-control" name="estado_categoria" value="activo">
  </div>
  {{--<div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>--}}
  


  {{--<div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>--}}

<button type="submit" class="btn btn-primary">Guardar</button>

</form>
</div>
@endsection