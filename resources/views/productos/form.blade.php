<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" class="form-control" name="Nombre" id="Nombre" value="{{ isset($producto->Nombre)?$producto->Nombre:''}}">
</div>

<div class="form-group">
<label for="Categoria" class="control-label">{{'Categoria'}}</label>
<input type="text" class="form-control" name="Categoria" id="Categoria" value="{{ isset($producto->Categoria)?$producto->Categoria:''}}">
</div>

<div class="form-group">
<label for="Cantidad" class="control-label">{{'Cantidad'}}</label>
<input type="text" class="form-control" name="Cantidad" id="Cantidad" value="{{ isset($producto->Cantidad)?$producto->Cantidad:''}}">
</div>

<div class="form-group">
<label for="Precio" class="control-label">{{'Precio'}}</label>
<input type="text" class="form-control" name="Precio" id="Precio" value="{{ isset($producto->Precio)?$producto->Precio:''}}">
</div>

<div class="form-group">
<label for="Foto" class="control-label">{{'Foto'}}</label>
@if(isset($producto))
<br/>
<img src="{{$producto->Foto}}" class="img-thumbnail img-fluid" alt="" width="100">
<br/>
@endif
<input type="file" class="form-control" name="Foto" id="Foto" value="">
</div>

<input type="submit" class="btn btn-success" value="{{ $Modo=='crear' ? 'Agregar' :'Modificar'}}">

<a class="btn btn-primary" href="{{url('productos')}}">Regresar</a>