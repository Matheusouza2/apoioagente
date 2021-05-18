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
            </span> Início
          </h3>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4 grid-margin">
            <div class="card">
              <div class="card-header">
                <h4>Dados do usuário</h4>
              </div>
              <div class="card-body">
                <h6>{{ $user->nome }}</h6>
                <h6>{{ $user->email }}</h6>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-8 col-lg-8 grid-margin ">
            <div class="card">
              <div class="card-header">
                <h4>Transações</h4>
              </div>
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <th class="col-auto">Valor</th>
                    <th>Data</th>
                    <th>Categoria</th>
                  </thead>
                  <tbody>
                    @foreach ($dados as $dado)
                        <tr>
                          <td>{{$dado->valor}}</td>
                          <td>{{ date( 'd/m/Y' , strtotime($dado->data)) }}</td>
                          <td>{{$dado->categoria}}</td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6 grid-margin ">
            <div class="card">
              <div class="card-header">
                <h4>Publicações</h4>
              </div>
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <th>Publicação</th>
                    <th>Data</th>
                  </thead>
                  <tbody>
                    @foreach ($dadosPub as $pubs)
                      <tr>
                        <td>{{$pubs->publicacao}}</td>
                        <td>{{ date( 'd/m/Y' , strtotime($pubs->data)) }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6 grid-margin ">
            <div class="card">
              <div class="card-header">
                <h4>Publicações</h4>
              </div>
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <th>Comentario</th>
                    <th>Data</th>
                  </thead>
                  <tbody>
                    @foreach ($coments as $coment)
                      <tr>
                        <td>{{$coment->comentario}}</td>
                        <td>{{ date( 'd/m/Y' , strtotime($coment->data)) }}</td>
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