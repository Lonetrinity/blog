@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
 
            @if (count($errors) >0)
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}
                        </div>
                        @endforeach
                    @endif
 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



<div class="card-header">Dashboard</div>

                <div class="card-body">
                   <div class="col-md-4>
                   <img src="" alt="" />
                   </div>

                   <div class="col-md-8></div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
