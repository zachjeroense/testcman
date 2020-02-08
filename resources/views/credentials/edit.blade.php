@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Edit Credential</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('credentials.update', ['credential' => $credential->id]) }}" method="post">
                @csrf
                @method('PATCH')
                @include('credentials.form')
            </form>
        </div>
    </div>
</div>
@endsection