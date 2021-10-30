@extends('dashboard.master')
@section('content')

    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Publicación</th>
                <th scope="col">Categoría</th>
                <th scope="col">Descripción</th>
                <th scope="col">Estado</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posters as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->category_id }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->state_post }}</td>
                    <td>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-info">Editar</a>
                        <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"
                            data-id="{{ $post->id }}">
                            Eliminar
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mb-3">
        <a class="btn btn-info" href="{{ URL::previous() }}">Regresar</a>
    </div>
@endsection
{{ $posters->links() }}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel"></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label class="text-muted">¿Seguro que deseas eliminar el post seleccionado?</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
                    Cancelar
                </button>
                <form id="formDelete" method="POST" action="{{ route('post.destroy', 0) }}"
                    data-action="{{ route('post.destroy', 0) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function() {
        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            action = $('#formDelete').attr('data-action').slice(0, -1)
            action += id
            $('#formDelete').attr('action',action)
            var modal = $(this)
            modal.find('.modal-title').text('Vas a eliminar el Post con Id '+ id)
        });
    };
</script>
