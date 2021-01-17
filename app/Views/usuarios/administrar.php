<?= $this->extend('layouts/header') ?>

<?= $this->section('titulo') ?>
Administrar usuarios
<?= $this->endSection() ?>



<?= $this->section('content') ?>

<h1>Mueblerias Dico</h1>
<div class="row">
  <div class="col-sm-4">
    <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
      <span class="fas fa-user-plus"></span> Agregar
    </button>
  </div>
</div>
<hr>
<div class="row">
  <hr>
  <div class="col-sm-12">
    <div id="tablaCargadaUsuarios"></div>
  </div>
</div>


<!-- Modal Agregar -->
<div class="modal fade" id="modalAgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregaUsuario">



          <label>Nombre del mueble</label>
          <input type="text" id="nombre" name="nombre" class="form-control">
          <label>Tipo de madera</label>
          <input type="text" id="tipo" name="tipo" class="form-control">
          <label>Costo de venta</label>
          <input type="text" id="costov" name="costov" class="form-control">
          <label>Costo de compra</label>
          <input type="text" id="costoc" name="costoc" class="form-control">
          <label>Fecha di Hoy</label>
          <input type="text" id="fecha" name="fecha" class="form-control">



        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnAgregarUsuario">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Actualizar  -->
<div class="modal fade" id="modalActualizarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregaUsuariou">



          <input type="text" id="idMuebleu" name="idMuebleu" hidden="">        
          <label>Nombre del mueble</label>
          <input type="text" id="nombreu" name="nombreu" class="form-control">
          <label>Tipo de madera</label>
          <input type="text" id="tipou" name="tipou" class="form-control">
          <label>Costo de venta</label>
          <input type="text" id="costovu" name="costovu" class="form-control">
          <label>Costo de compra</label>
          <input type="text" id="costocu" name="costocu" class="form-control">
          <label>Fecha di Hoy</label>
          <input type="text" id="fechau" name="fechau" class="form-control">



        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning" onclick="actualizarUsuario()">Actualizar</button>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>