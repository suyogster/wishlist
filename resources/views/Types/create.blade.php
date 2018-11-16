<div class="rows">
    <h3>New Type</h3>
</div>
<hr>
<br>
<div class="row">
    <div class="col-md-4">

        {!! Form::open(['route' => 'types.store']) !!}
        {{Form::label('type','New Type')}}
        {{Form::text('type',null,array('class'=>'form-control', 'autocomplete' => 'off'))}}<br>

        {{Form::submit('Create Type',['class'=>'btn btn-primary'])}}
        {{Form::close()}}

    </div>
</div>