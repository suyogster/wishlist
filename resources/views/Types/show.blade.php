<div class="rows">
    <h3>Types</h3>
</div>
<hr>
<br>

<div class="col-md-2">
    <a href="{{route('types.create')}}" class="btn btn-primary btn-block">Add New Type</a>
</div>
<br>
<div class="col-md-4">

    <table class="table table-striped">
        <tr>
            <th>Types</th>
            <th>Actions</th>
        </tr>
        @foreach($types as $type)
            <tr>
                <td>{{$type->type}}</td>
                <td>
                    {!! Form::open(['route' => ['types.destroy', $type->id], 'method' => 'DELETE' ]) !!}
                    {{ Form::button('<i class="fas fa-trash-alt fa-2x"></i>', ['class' => 'btn btn-link', 'type' => 'submit']) }}
                    {!! Html::decode(Html::linkRoute('types.edit','<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>',array($type->id))) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
</div>
</div>