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
              <i class="far fa-credit-card"></i>
            </span> Fatura de Cartão
          </h3>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class='nav-wrapper'>
                        <ul class='nav nav-pills nav-fill flex-column flex-md-row' id='tabs-icons-text' role='tablist'>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3 active' id='tabs-icons-text-1-tab' data-toggle='tab' href='#tabs-icons-text-1' role='tab' aria-controls='tabs-icons-text-1' aria-selected='true'><img src='{{ asset('images/santander.png') }}' alt='' width='30em'> Santander</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-2-tab' data-toggle='tab' href='#tabs-icons-text-2' role='tab' aria-controls='tabs-icons-text-2' aria-selected='false'><img src='{{ asset('images/bv.png') }}' alt='' width='30em'> BV Financeira</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-3-tab' data-toggle='tab' href='#tabs-icons-text-3' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><img src='{{ asset('images/fortbrasil.png') }}' alt='' width='30em'> FortBrasil</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-4-tab' data-toggle='tab' href='#tabs-icons-text-4' role='tab' aria-controls='tabs-icons-text-4' aria-selected='false'><img src='{{ asset('images/credsystem.png') }}' alt='' width='30em'> CredSystem</a>
                          </li>                  
                        </ul>
                      </div>
                      <div class='card shadow'>
                        <div class='card-body'>
                          <div class='tab-content' id='myTabContent'>
                            <div class='tab-pane fade show active' id='tabs-icons-text-1' role='tabpanel' aria-labelledby='tabs-icons-text-1-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site</p>
                              <a href='https://www.santander.com.br/' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-2' role='tabpanel' aria-labelledby='tabs-icons-text-2-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site</p>
                              <a href='https://minha.bv.com.br/' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-3' role='tabpanel' aria-labelledby='tabs-icons-text-2-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site</p>
                              <a href='https://faturaonline.fortbrasil.com.br/' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-4' role='tabpanel' aria-labelledby='tabs-icons-text-2-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site</p>
                              <a href='https://www.portaldafatura.com.br/sso/pre-login' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
@endsection