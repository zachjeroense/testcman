@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Credentials</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('credentials.store') }}" method="post">
                @csrf
                @include('credentials.form')
            </form>
        </div>
    </div>
</div>
@endsection