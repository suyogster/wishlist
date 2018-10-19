@extends('layouts.master_backend')
@section('title', 'Blogs')
@section('header', 'Blogs')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <a href="{{route('blogs.create')}}" class="btn btn-primary btn-block mb-3">Compose</a>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Blogs</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="position-relative mb-4">
                        <p><span>Blogs tells you the story of your journey</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Your Blog</h3>
                </div>
                <div class="card-body p-0">
                    <div class="mailbox-controls">
                    <div class="float-right">
                        <div class="btn-group" style="padding-bottom: 5px">
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                        </div>
                    </div>
                    </div>

                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                            <tbody>
                            <tr>
                                <td class="mailbox-name"><a href="read-mail.html">Babin Karki</a></td>
                                <td class="mailbox-subject"><b>Shey Phoksundo</b> - Trying to find peace inside...
                                </td>
                                <td class="mailbox-date">5 mins ago</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
