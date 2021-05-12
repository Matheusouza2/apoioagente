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
                      <div class="col-lg-6">
                        {{ $user->nome }}
                        {{ $user->email }}
                        @foreach ($dados as $dado)
                            {{ $dado->categoria }}
                            {{ $dado->valor }}
                            {{ $dado->data }}
                        @endforeach
                      </div>
                    </div>
                  </form>
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