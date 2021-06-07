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
              <i class="fal fa-home"></i>
            </span> Controle
          </h3>
        </div>
        <!-- Modal -->
    <div class="modal fade" id="editarUsu" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="card bg-secondary border-0 mb-0">
                <div class="card-header bg-transparent pb-5">
                  <div class="text-muted text-center mt-2 mb-3">Marcação de Consulta</div>
                  <div class="card-body px-lg-3 py-lg-3">
                    <form role="form" id="form" action="{{ route('editUser') }}" method="post" class="needs-validation" novalidate>
                      @csrf
                      <div class="form-group mb-3">
                        <label class="form-control-label" for="paciente">Permissão</label>
                        <div class="input-group input-group-merge input-group-alternative">
                          <select name="permissao" id="permissao" class="form-control">
                            <option value="A">Agente</option>
                            <option value="P">Premium</option>
                            <option value="M">Master</option>
                          </select>
                          <input type="hidden" value="" id="user" name="user">
                        </div>                         
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-success my-4">Modificar</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="row">
            <div class="container-fluid mt--6">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="card">
                      <div class="card-header border-0">
                        <div class="row align-items-center">
                          <div class="col">
                            <h3 class="mb-0">Controle de Usuários</h3>
                            <small>Essa tela deve estar visivel apenas para usuarios <strong>Master</strong></small>
                          </div>
                        </div>
                      </div>
                      <div class="card-body" id="card-body">
                        <form action="">
                          <div class="row">               
                            <div class="col-lg-12">
                              <div class="table-responsive">
                                <h3>Usuários Cadastrados</h3>
                                <table class="table align-items-center table-flush">
                                  <thead class="thead-light">
                                    <tr>
                                      <th scope="col">ID</th>
                                      <th scope="col">Nome</th>
                                      <th scope="col">CNPJ</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Permissão</th>
                                      <th scope="col">Ultimo Acesso</th>
                                      <th scope="col"></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($usuarios as $usuario)
                                      <tr>
                                        <td>{{ $usuario->id }}</td>
                                        <td>{{ $usuario->nome }}</td>
                                        <td>{{ $usuario->cnpj }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td>{{ $usuario->permissao }}</td>
                                        <td>{{ date( 'd/m/Y' , strtotime($usuario->ultimo_login)) }}</td>
                                        <td>
                                          <a href="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Preferencias"><i class="fas fa-ellipsis-v"></i></a>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                            <a class="dropdown-item" href="{{ route('detalhes', [$usuario->id]) }}">Ver detalhes</a>
                                            <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-id="{{ $usuario->id }}" data-target="#editarUsu">Editar</a>
                                            <a class="dropdown-item" href="#">Bloquear</a>
                                          </div>
                                        </td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
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
@stop
@section('script')
    
<script>
  $('#editarUsu').on('show.bs.modal', function (event) { 
          var button = $(event.relatedTarget);
          var recipientId = button.data('id');
          var modal = $(this);
          modal.find('#user').val(recipientId);
      })
</script>
@endsection
