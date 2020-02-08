@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <div><h1>Details for {{ $credential->description }} </h1></div>
            <div class="row border-bottom mb-2 mt-4">
            <div class="col-2 font-weight-bold" >Description:</div><div class="col-10 h5">{{ $credential->description }}</div>
            <div class="col-2 font-weight-bold">Login Name:</div><div class="col-10 h5"> {{ $credential->loginName }}</div>
            <div class="col-2 font-weight-bold">Password:</div><div class="col-10 h5"> {{ $credential->loginPassword }}</div>
        </div>
        <div class="col-10">
            <a href="{{ route('credentials.index') }}" class="btn btn-success btn-sm btn-outline mr-2">Cancel</a>
            <a href="{{ route('credentials.edit', ['credential' => $credential->id]) }}" class="btn btn-primary btn-sm btn-outline mr-2">Edit</a>
            <form style="display:inline;" action="{{ route('credentials.destroy', ['credential' => $credential->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm btn-outline mr-2">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection