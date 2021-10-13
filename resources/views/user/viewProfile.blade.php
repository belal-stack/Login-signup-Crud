@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $user->name}}'s Profile</div>

                    <div class="card-body">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-4">Name</dt>
                                <dd class="col-sm-8">{{$user->name}}</dd>
                                <dt class="col-sm-4">Email</dt>
                                <dd class="col-sm-8">{{$user->email}}</dd>
                                <dt class="col-sm-4">18 Above</dt>
                                <dd class="col-sm-8">{{$user->aboveEighteen}}</dd>
                                <dt class="col-sm-4">Last Updated</dt>
                                <dd class="col-sm-8">{{date('F d, Y', strtotime($user->created_at))}}  {{$user->updated_at->diffForHumans()}}</dd>

                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
