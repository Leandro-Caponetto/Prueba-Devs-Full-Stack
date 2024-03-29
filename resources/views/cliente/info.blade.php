


<!-- Modal -->
<div class="modal fade" id="edit{{$cliente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDITAR USUARIOS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('home.update',$cliente->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="modal-body">
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input
                type="text"
                class="form-control"
                name="nombre"
                id=""
                aria-describedby="helpId"
                placeholder=""
                value="{{$cliente->nombre}}"
            />
           
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input
                type="text"
                class="form-control"
                name="apellido"
                id=""
                aria-describedby="helpId"
                placeholder=""
                value="{{$cliente->apellido}}"
            />
           
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Correo</label>
            <input
                type="email"
                class="form-control"
                name="correo"
                id=""
                aria-describedby="helpId"
                placeholder=""
                value="{{$cliente->correo}}"
            />
           
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input
                type="number"
                class="form-control"
                name="telefono"
                id=""
                aria-describedby="helpId"
                placeholder=""
                value="{{$cliente->telefono}}"
            />
           
        </div>
       
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
</form>
    </div>
  </div>
</div>






<!-- Modal -->
<div class="modal fade" id="delete{{$cliente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar USUARIOS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('home.destroy',$cliente->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('DELETE')
      <div class="modal-body">
            <h4>Estas seguro de borrar a <strong>{{$cliente->nombre}} </strong>?</h4>
       
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
</form>
    </div>
  </div>
</div>