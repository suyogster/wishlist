@extends('layouts.master_backend')
@section('title','Wishlists')

@section('content')
<div class="row">
    <div class="col-md-3">
        <a href="{{route('wishlist.create')}}" class="btn btn-primary btn-block mb-3">Add Wishlist</a>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Wishlist</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="position-relative mb-4">
                    <p><span>Make all of your wish lists come true.</span></p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Status</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0" style="display: block;">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-circle-o text-danger"></i>
                            <b>Active Wishlists</b> <p class="float-right">1</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-circle-o text-success"></i>
                            <b>Completed Wishlists</b> <p class="float-right">1</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Wishlists</h3>
            </div>
            <div class="card-body">
               <div class="card card-secondary">
                   <div class="card-body">
                      <h3 class="headline">To Climb Mt. Everest</h3>
                       <p class="date"> Jan 21, 2018</p>
                       <a href="#" class="float-right"><i class="fa fa-trash fa-3x" aria-hidden="true"></i></a>
                       <a href="#" class="float-right"><i class="fa fa-check fa-3x" aria-hidden="true"></i></a>
                   </div>
               </div>
                <div class="card card-secondary">
                    <div class="card-body">
                        <h3 class="headline">To Climb Mt. Annapurna</h3>
                        <p class="date"> Jan 21, 2020</p>
                        <a href="#" class="float-right"><i class="fa fa-trash fa-3x" aria-hidden="true"></i></a>
                        <a href="#" class="float-right"><i class="fa fa-check fa-3x" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection