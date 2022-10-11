@extends('main.index')

@section('modalContent')
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmar borrado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>¿Confirmar borrado<span id="deleteBike"></span>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form id="modalDeleteResourceForm" action="{{ url('bike/destroy') }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" class="btn btn-primary" value="Borrar bicicleta"/>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
{{-- @parent --}}
<div class="row" style="margin-top: 8px;">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">PRECIO</th>
                <th scope="col">BORRAR</th>
                <th scope="col">EDITAR</th>
                <th scope="col">MOSTRAR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Bicicleta 1</td>
                <td>25.000</td>
                <td><a href="javascript: void(0);"
                       data-name="{{ 'Bicicleta 1' }}"
                       data-url="{{ url('bike/1') }}"
                       data-toggle="modal"
                       data-target="#modalDelete">Borrar</a></td>
                <td><a href="{{ url('bike/1/edit') }}">Editar</a></td>
                <td><a href="{{ url('bike/1') }}">Ver</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Bicicleta 2</td>
                <td>50.000</td>
                <td><a href="javascript: void(0);"
                       data-name="{{ 'Bicicleta 2' }}"
                       data-url="{{ url('bike/2') }}"
                       data-toggle="modal"
                       data-target="#modalDelete">Borrar</a></td>
                <td><a href="{{ url('bike/2/edit') }}">Editar</a></td>
                <td><a href="{{ url('bike/2') }}">Ver</a></td>
            </tr>   
        </tbody>
    </table>
</div>
<div class="row">
    <a href="{{ url('bike/create') }}" class="btn btn-sucess">Añadir bicicleta</a>
</div>
@endsection

@section('scripts')
<script src="{{ url('assets/js/bike-modal-delete.js') }}"></script>
@endsection