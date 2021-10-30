@extends('dashboard.master')
@section('content')
<form action="{{ route('post.store') }}" method="post">
    @include('dashboard.post.form')
</form>
@endsection
