@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div><h1>Credentials</h1></div>
        
            <div class="row border-bottom mb-2 mt-4">
                <div class="col-4 font-weight-bold" >Description</div>
                <div class="col-3 font-weight-bold">Login Name</div>
                <div class="col-3 font-weight-bold">Password</div>
            </div>

            @foreach ($credentials as $credential)
                <div class="row">
                    <div class="col-4 mb-2">
                        {{ $credential->description }}
                    </div>
                    <div class="col-3">
                        {{ $credential->loginName }}
                    </div>
                    <div class="col-3">
                        {{ $credential->loginPassword }}
                    </div>
                    <div class="col-2">
                    <a href="{{ route('credentials.show', ['credential' => $credential->id]) }}" class="btn btn-success btn-sm btn-outline mr-2">show</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection