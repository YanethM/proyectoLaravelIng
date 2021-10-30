@extends('dashboard.master')
@section('content')
<form action="{{ route("post.update", $post->id) }}" method="post">
    @method('put')
    @include('dashboard.post.form')
</form>
@endsection
