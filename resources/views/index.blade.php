
@extends('layouts.master_backend')
@section('title','Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header no-border">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title">See your blogs</h3>
                </div>
            </div>

            <div class="card-body">
                <div class="position-relative mb-4">
                    <p>This is my first Post</p>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header no-border">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title">Trips</h3>
                </div>
            </div>

            <div class="card-body">
                <div class="position-relative mb-4">
                    <p>Your Trips</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header no-border">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title">Your Wishlists</h3>
                </div>
            </div>

            <div class="card-body">
                <div class="position-relative mb-4">
                    <p>N/A</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header no-border">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title">Events</h3>
                </div>
            </div>

            <div class="card-body">
                <div class="position-relative mb-4">
                    <p>N/A</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
