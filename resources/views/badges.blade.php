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
          @if(Auth::user()->permissao == 'M')
            <div class="col-lg-6 text-right">
              <a href="{{ route('distintivosAdm')}}" class="btn btn-sm btn-gradient-warning text-dark">Gerenciar</a>
            </div>
          @endif
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Os Distintivos chegaram</h4>
                        <small>Os distintivos chegaram para deixar a comunidade de agentes celcoin mais divertida de se usar \0/</small>
                    </div>
                    <div class="card-body">
                      @foreach ($badges as $badge)
                        <i class="{{ $badge->badge }}"></i>
                      @endforeach
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Alguns agentes já estão com os seus</h4>
                    </div>
                    <div class="card-body">
                        
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