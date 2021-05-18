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
              <i class="fal fa-bells"></i>
            </span> Notificações
          </h3>
        </div>
        
        <div class="row">
            
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card grid-margin">
                    <div class="card-header">
                        <h4>Cadastro de Notificações</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('storeNotificacao') }}" method="post" enctype="application/x-www-form-urlencoded" class="needs-validation forms-sample" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="title">Titulo</label>
                                        <input type="text" name="title" class="form-control" placeholder="Digite o Titulo" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="mensagem">Mensagem</label>
                                        <input type="text" name="mensagem" class="form-control" placeholder="Digite a Mensagem" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="tipo">Tipo</label>
                                        <select name="tipo" class="form-control" id="tipo">
                                            <option value="">Selecione</option>
                                            <option value="info">Info</option>
                                            <option value="error">Error</option>
                                            <option value="success">Success</option>
                                            <option value="warning">Warning</option>
                                            <option value="question">Question</option>
                                        </select>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="formato">Formato</label>
                                        <select name="formato" class="form-control" id="formato">
                                            <option value="">Selecione</option>
                                            <option value="informativo">Informativo</option>
                                            <option value="pergunta">Pergunta</option>
                                            <option value="confirmacao">Confirmação</option>
                                        </select>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="pergunta">Pergunta</label>
                                        <input type="text" name="pergunta" class="form-control" placeholder="Digite a Pergunta a ser feita">
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-inverse-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card grid-margin">
                    <div class="card-header">
                        <h4>Notificações Postadas</h4>
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <th class="col-auto">Titulo</th>
                                    <th class="col-lg-2">Mensagem</th>
                                    <th class="col-auto">Excluir</th>
                                </thead>
                                <tbody>
                                    @foreach ($notify as $notif)
                                        <tr>
                                            <td>{{ $notif->titulo }}</td>
                                            <td>{{ $notif->mensagem }}</td>
                                            <td><a href="{{ route('delNotificacao', [$notif->id]) }}" class="btn-danger btn-sm">Excluir</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>        

        <div class="row">
            <div class="col-12">
                <div class="card grid-margin">
                    <div class="card-header">
                        <h4>Notificações Acompanhamento</h4>
                    </div>
                    @foreach ($alerts as $alert)
                        <p>{{ $alert->notificacao}} </p>
                    @endforeach
                    <div class="card-body">
                        <h4>Notificação X</h4>
                        <table class="table table-hover">
                            <thead>
                                <th>Usuário</th>
                                <th>Confirmação</th>
                                <th>Data</th>
                                <th>Resposta</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>.</td>
                                    <td>.</td>
                                    <td>.</td>
                                    <td>.</td>
                                </tr>
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