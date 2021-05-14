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
              <i class="fal fa-user"></i>
            </span> {{$usuario->nome}}
          </h3>
        </div>
        
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ asset('storage/images/'.$usuario->id.'/'.$usuario->foto) }}" width="70%" class="rounded-circle" alt="">
                            </div>
                            <div class="col-lg-8">
                                <h5>E-mail: {{ $usuario->email }}</h5>
                                @php
                                    $data = new DateTime($usuario->nascimento);
                                    $resultado = $data->diff( new DateTime( date('Y-m-d') ) );
                                    
                                @endphp
                                <h5>Idade: {{  $resultado->format( '%Y anos' ) }}</h5>
                                <hr>
                                <h6>Distintivos:</h6>
                                @foreach ($badges as $badge)
                                  <i class="{{ $badge->badge }} icon-md" title="Aguarde..."></i>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-8">
                <div class="card">
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