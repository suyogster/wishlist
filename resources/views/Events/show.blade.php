<div class="container-fluid">
    <h3>Posts</h3>
    <hr>
        <div class="row">
            <div class="col-md-2 col-lg-2 col-sm-12">
                {{Html::linkRoute('events.create','Add New Event',array(),array('class'=>'btn btn-primary btn-block'))}}
            </div>
        </div>
    <br><br>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped">
                <tr>
                    <th>No.</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Tags</th>
                    @if(Gate::check('isAdmin') || Gate::check('isEditorC') || Gate::check('isEditor'))
                        <th colspan="2">Action</th>
                    @endif
                </tr>

                @php
                    $i = 0;
                @endphp
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $i = $i+1 }}</td>
                        <td>{{ $post->post_title }}</td>
                        <td>{{$post->category->category }}</td>
                        <td>{{ $post->user->name }}</td>

                        <td>
                            @if($post->post_status == "save" )
                                {{ \Carbon\Carbon::parse($post->created_at )->format('d-M-Y')}}
                            @else
                                {{ \Carbon\Carbon::parse($post->publish_date )->format('d-M-Y')}}
                            @endif
                        </td>
                        <td>
                            {{ $post->post_status }}
                        </td>
                        <td>
                            @php
                                $tags = $post->tags->pluck('tag');
                                $tags = $tags->values()->toArray();
                            @endphp
                            {{ implode(",", $tags )}}
                        </td>
                        @if(Gate::check('isAdmin')|| Gate::check('isEditorC') ||Gate::check('isEditor'))
                            <td>
                                {!! Form::open(['route' => ['posts.destroy',$post->id],'method'=>'DELETE']) !!}
                                {{ Form::button('<i class="fas fa-trash-alt fa-2x"></i>', ['class' => 'btn btn-link', 'style'=>'padding: 0px;','type' => 'submit']) }}

                                {!! Html::decode(Html::linkRoute('posts.show','<i class="fa fa-eye fa-2x" aria-hidden="true"></i>',array($post->slug))) !!}

                                {!! Html::decode(Html::linkRoute('posts.edit','<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>',array($post->id)))!!}

                                {!! Form::close() !!}

                            </td>
                        @endif
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-4">
            {!! $posts->links(); !!}
        </div>
    </div>
</div>
