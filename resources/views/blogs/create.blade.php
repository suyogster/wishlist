@extends('layouts.master_backend')
@section('title','Create Your Blog')
@section('header','Compose Blog')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Write Your Blog</h3>
                </div>
                <form role="form" enctype="multipart/form-data" action="{{route('blogs.store')}}" method="post">
                    {{ @csrf_field() }}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Blog Title">
                        </div>
                        <div class="form-group">
                            <label for="slug">Permalink</label>
                            <input type="text" class="form-control" name="slug" placeholder="Enter Slug">
                        </div>
                        <div class="form-group">
                            <label for="thumbnail">Thumbnail</label>
                            <input type="file" class="form-control" name="thumbnail" placeholder="Enter Thumbnail" style="padding-bottom: 35px">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Enter Short Description">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <input type="text" class="form-control" name="content" id="editor">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Create Blog" class="form-control btn btn-success" style="width: 20%">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection