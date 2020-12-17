@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/productos')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
@include('productos.form',['Modo'=>'crear'])



</form>
</div>
@endsection