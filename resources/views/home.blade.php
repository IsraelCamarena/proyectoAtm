@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Panel de control') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="CRUD/save_almacen.php" method="POST">
          <div class="form-group">
            
          </div>
          <div class="form-group">
            <textarea name="P" rows="2" class="form-control" placeholder="P"></textarea>
          </div>
          <div class="form-group">
            <textarea name="C" rows="2" class="form-control" placeholder="C"></textarea>
          </div>
          <div class="form-group">
            <textarea name="T" rows="2" class="form-control" placeholder="T"></textarea>
          </div>
          <div class="form-group">
            <input name="CANTIDAD" rows="2" class="form-control" placeholder="CANTIDAD">
          </div>
          <input type="submit" name="save_almacen" class="btn btn-success btn-block" value="Guardar">
          <input type="submit" name="save_almacen" class="btn btn-success btn-block" value="Buscar">
          <input type="submit" name="save_almacen" class="btn btn-success btn-block" value="Editar">
          <input type="submit" name="save_almacen" class="btn btn-success btn-block" value="Eliminar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>P</th>
            <th>C</th>
            <th>T</th>
            <th>CANTIDAD</th>
          </tr>
        </thead>
        <tbody>

          <?php?>
        </tbody>
      </table>
    </div>
  </div>
</main>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection