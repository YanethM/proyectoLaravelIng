@extends('dashboard.master')
@section('content')
    <div class="container">
        <div class="jumbotron">
            <div class="form-group mb-3">
                <input readonly type="text" class="form-control" name="name" id="name" placeholder="Nombre publicación"
                    value="{{ old('name', $post->name) }}">
            </div>

            <div class="form-group mb-3">
                <label class="form-label" for="description">Contenido</label>
                <textarea readonly id="description" cols="30" name="description" rows="10" class="form-control"
                    placeholder="Descripción de la publicación">
                {{ old('description', $post->description) }}
            </textarea>
            </div>

            <div class="row-s12 mb-3">
                <button type="button" class="btn btn-primary btn-sm">Regresar</button>
            </div>

        </div>
    </div>
@endsection