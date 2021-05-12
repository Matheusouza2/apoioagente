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
              <i class="fas fa-file-invoice-dollar"></i>
            </span> Boletos
          </h3>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class='nav-wrapper'>
                        <ul class='nav nav-pills nav-fill flex-column flex-md-row' id='tabs-icons-text' role='tablist'>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-1-tab' href='https://www63.bb.com.br/portalbb/boleto/boletos/hc21e,802,3322,10343.bbx' target='_blank' role='tab' aria-controls='tabs-icons-text-1' aria-selected='true'><img src='{{ asset('images/bb.png') }}' alt='' width='30em'> Banco do Brasil</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-2-tab' href='https://banco.bradesco/html/pessoajuridica/solucoes-integradas/outros/2-via-de-boleto.shtm' target='_blank' role='tab' aria-controls='tabs-icons-text-2' aria-selected='false'><img src='{{ asset('images/bradesco.png') }}' alt='' width='30em'> Bradesco</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-3-tab' href='https://www.bancobv.com.br/web/site/pt/segunda-via-boleto/' target='_blank' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><img src='{{ asset('images/bv.png') }}' alt='' width='30em'> BV Financeira</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-4-tab' href='https://www.caixa.gov.br/atendimento/2-via-boleto/Paginas/default.aspx' target='_blank' role='tab' aria-controls='tabs-icons-text-4' aria-selected='false'><img src='{{ asset('images/caixa.jpg') }}' alt='' width='30em'> Caixa Econômica</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-4-tab' href='https://www.bancointer.com.br/segunda-via-boleto/' target='_blank' role='tab' aria-controls='tabs-icons-text-4' aria-selected='false'><img src='{{ asset('images/inter.png') }}' alt='' width='30em'> Inter</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-4-tab' href='https://www.itau.com.br/servicos/boletos/segunda-via/' target='_blank' role='tab' aria-controls='tabs-icons-text-4' aria-selected='false'><img src='{{ asset('images/itau.png') }}' alt='' width='30em'> Itau</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-4-tab' href='https://www.santander.com.br/2-via-boleto' target='_blank' role='tab' aria-controls='tabs-icons-text-4' aria-selected='false'><img src='{{ asset('images/santander.png') }}' alt='' width='30em'> Santander</a>
                          </li>
                        </ul>
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