@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif
                    This is Admin Dashboard. you must be privileged to be here ! <br>
                    NO: <?= Form::text('no',$id,['readonly']) ; ?><br>
                    <a href="/admin/form">Insert Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
