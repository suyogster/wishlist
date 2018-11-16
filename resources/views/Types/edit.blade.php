<div class="rows">
    <h3>Edit Type</h3>
</div>
<hr>
<br>
<div class="row">
    <div class="col-md-4">

        {!! Form::model($type,['route' => ['types.update',$type->id],'method'=>'PATCH', 'autocomplete' => 'off']) !!}
        {{Form::label('type','Type')}}
        {{Form::text('type',$type->type,array('class'=>'form-control', 'autocomplete' => 'off'))}}<br>

        {{Form::submit('Save Changes',['class'=>'btn btn-primary'])}}
        {{Form::close()}}

    </div>
</div>