@csrf
@include('dashboard.partials.validation-error')
<div class="jumbotron">
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="name" id="name" placeholder="Nombre publicación"
            value="{{ old('name', $post->name) }}">
    </div>

    <div class="form-group mb-3">
        <label class="form-label" for="description">Contenido</label>
        <textarea id="description" cols="30" name="description" rows="10" class="form-control"
            placeholder="Descripción de la publicación">
        {{ old('description', $post->description) }}
    </textarea>
    </div>

    <div class="row-s12 center">
        <button type="submit" class="btn btn-outline-primary btn-sm">Confirmar</button>
    </div>

</div>
