@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-lg-12">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! {{ '@'.$user->name }}
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <user text="{{ '@'. $user }}" class="text-muted"></user> --}}
    <div class="row">
    <div class="col-lg-1"></div>
   
        <div class="col-lg-1">
            <img class="img-fluid rounded-circle" src="/images/avatar.png" alt="">
        </div>
        <div class="col-lg-1">
            <h3>{{ $user }}</h3>
            <h4 class="text-muted">{{ '@'.$user }}</h4>
        </div>
    </div>
    <div class="row pt-5">
     <div class="col-lg-1"></div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form action="/addpost" method="POST">
                        @csrf
                    {{-- <div class="col-lg-12"> --}}
                    <textarea class="form-control" name="post" id="" rows="3" placeholder="Whats on your mind today?"></textarea>
                    {{-- </div> --}}
                    <button class="btn btn-success btn-sm mt-2">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  @include('posts')
</div>
</div>
@endsection
