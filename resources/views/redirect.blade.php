@extends('app')

@section('head')
    <META http-equiv="refresh" content="5;URL={{$destination_url}}">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>

                    <div class="panel-body">
                        You will be redirected to {{$destination_url}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection