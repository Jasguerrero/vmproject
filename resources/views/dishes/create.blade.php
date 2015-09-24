@extends('masterpage')


@section('content')

<div class="row">
<div class="col-md-5 col-md-offset-3">
@include('partials.errors')
    <div class="form-area"> 
   <!-- {!! Form::open(['url' => 'ruta']) !!} ['url' => 'suggestions','files'=> true]-->
            {!! Form::open(['url' => 'dishes','files'=> true]) !!}
       
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Ingresa Un Platillo</h3>
                    <hr/>
                     <div class="form-group">
                         {!! Form::label('category_id','Categorias:')!!}
                            <!--{!! Form::select('category_id',['' => 'Selecciona un categoria','1'=>'Desayunos','2'=>'Comidas','3'=>'Cenas'],null,['class' => 'form-control input-sm']) !!}-->
                            <select name="category_id" id="category_id" class="form-control input-sm">
                            <option value="">- Seleciona una Categoria -</option>
                            @foreach($categories as $category)
                            <option value="{!! $category->id !!}">{!! $category->description_es !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        {!! Form::input('text','name',null,['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::textarea('description_es',null,['class' => 'form-control', 'placeholder' => 'Escribe aquí la descripción en español']) !!}
                    </div>
                     <div class="form-group">
                        {!! Form::textarea('description_en',null,['class' => 'form-control', 'placeholder' => 'Escribe aquí la descripción en inglés']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('img_url','Ruta de la imagen:')!!}
                        {!! Form::file('img_url') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::input('number','price',null,['class' => 'form-control', 'placeholder' => 'Costo del Platillo']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::input('text','measure',null,['class' => 'form-control', 'placeholder' => 'Cantidad del Platillo' ]) !!}
                    </div><div class="form-group">
                        {!! Form::input('number','prep_time',null,['class' => 'form-control', 'placeholder' => 'Tiempo de Preparación']) !!}
                    </div>
                   <div class="form-group">
                        {!! Form::submit('Crear',['class' => 'btn btn-success form-control']) !!}
                    </div>
                    
    {!! Form::close() !!}
    </div>
</div>
</div>




@stop