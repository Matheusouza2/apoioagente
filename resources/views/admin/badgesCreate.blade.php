@extends('templates.head')
@section('body')
<div class="container-scroller">
  <!-- partial:partials/_navbar.html -->
  @include('templates.menu-nav')
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @include('templates.menu-side')
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
              <i class="fal fa-badge-dollar"></i>
            </span> Distintivos
          </h3>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Cadastrar Novo Distintivo</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('distintivosStore') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="badge">Cole o codigo do distintivo a ser adicionado</label>
                                <input type="text" name="badge" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="badge">Dê um titulo para ele</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="badge">Cole o codigo do distintivo a ser adicionado</label>
                                <select name="tipo" id="" class="form-control">
                                    <option value="">Selecionar</option>
                                    <option value="p">Padrão</option>
                                    <option value="a">Adicional</option>
                                </select>
                            </div>
                            <input type="text" name="usuario" placeholder="Id 1" value="1" readonly>
                            <div class="text-right">
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Badges Existentes</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hovered">
                            <thead>
                                <th class="col-auto">Distintivo</th>
                                <th class="col-auto">Titulo</th>
                                <th class="col-auto">Tipo</th>
                                <th class="col-auto">Excluir</th>
                            </thead>
                            <tbody>
                                @foreach ($badges as $badge)
                                    <tr>
                                        <td><i class="{{ $badge->badge }}"></i></td>
                                        <td>{{ $badge->title }}</td>
                                        <td>{{ $badge->tipo }}</td>
                                        <td><a href="{{ route('badgeDelete', [$badge->id]) }}" class="btn btn-inverse-danger"><i class="fal fa-times"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Usuarios e seus Badges</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hovered">
                            <thead>
                                <th class="col-auto">Distintivo</th>
                                <th class="col-auto">Titulo</th>
                                <th class="col-auto">Tipo</th>
                                <th class="col-auto">Excluir</th>
                            </thead>
                            <tbody>
                                @foreach ($badges as $badge)
                                    <tr>
                                        <td><i class="{{ $badge->badge }}"></i></td>
                                        <td><i class="{{ $badge->title }}"></i></td>
                                        <td><i class="{{ $badge->tipo }}"></i></td>
                                        <td><a href="{{ route('badgeDelete', [$badge->id]) }}" class="btn btn-inverse-danger"><i class="fal fa-times"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      @include('templates.footer')
      <!-- content-wrapper ends -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
@endsection