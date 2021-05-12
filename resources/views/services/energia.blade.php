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
              <i class="fas fa-bolt"></i>
            </span> Energia
          </h3>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class='nav-wrapper'>
                        <ul class='nav nav-pills nav-fill flex-column flex-md-row' id='tabs-icons-text' role='tablist'>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3 active' id='tabs-icons-text-1-tab' data-toggle='tab' href='#tabs-icons-text-1' role='tab' aria-controls='tabs-icons-text-1' aria-selected='true'><i class='fas fa-bolt'></i> Acre</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-2-tab' data-toggle='tab' href='#tabs-icons-text-2' role='tab' aria-controls='tabs-icons-text-2' aria-selected='false'><i class='fas fa-bolt'></i> Alagoas</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-3-tab' data-toggle='tab' href='#tabs-icons-text-3' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Amazonas</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-4-tab' data-toggle='tab' href='#tabs-icons-text-4' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Amapá</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-5-tab' data-toggle='tab' href='#tabs-icons-text-5' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Bahia</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-6-tab' data-toggle='tab' href='#tabs-icons-text-6' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Ceará</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-7-tab' data-toggle='tab' href='#tabs-icons-text-7' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Distrito Federal</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-8-tab' data-toggle='tab' href='#tabs-icons-text-8' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Espírito Santo</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-9-tab' data-toggle='tab' href='#tabs-icons-text-9' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Goiás</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-10-tab' data-toggle='tab' href='#tabs-icons-text-10' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Maranhão</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-11-tab' data-toggle='tab' href='#tabs-icons-text-11' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Minas Gerais</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-12-tab' data-toggle='tab' href='#tabs-icons-text-12' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Mato Grosso do Sul</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-13-tab' data-toggle='tab' href='#tabs-icons-text-13' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Mato Grosso</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-14-tab' data-toggle='tab' href='#tabs-icons-text-14' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Pará</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-15-tab' data-toggle='tab' href='#tabs-icons-text-15' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Paraíba</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-16-tab' data-toggle='tab' href='#tabs-icons-text-16' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Pernambuco</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-17-tab' data-toggle='tab' href='#tabs-icons-text-17' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Piauí</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-18-tab' data-toggle='tab' href='#tabs-icons-text-18' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Paraná</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-19-tab' data-toggle='tab' href='#tabs-icons-text-19' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Rio de Janeiro</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-20-tab' data-toggle='tab' href='#tabs-icons-text-20' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Rio Grande do Norte</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-21-tab' data-toggle='tab' href='#tabs-icons-text-21' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Rondônia</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-22-tab' data-toggle='tab' href='#tabs-icons-text-22' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Roraima</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-23-tab' data-toggle='tab' href='#tabs-icons-text-23' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Rio Grande do Sul</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-24-tab' data-toggle='tab' href='#tabs-icons-text-24' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Santa Catarina</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-25-tab' data-toggle='tab' href='#tabs-icons-text-25' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Sergipe</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-26-tab' data-toggle='tab' href='#tabs-icons-text-26' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> São Paulo</a>
                          </li>
                          <li class='nav-item'>
                            <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-27-tab' data-toggle='tab' href='#tabs-icons-text-27' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-bolt'></i> Tocantins</a>
                          </li>
                        </ul>
                      </div>
                      <div class='card shadow'>
                        <div class='card-body'>
                          <div class='tab-content' id='myTabContent'>
                            <div class='tab-pane fade show active' id='tabs-icons-text-1' role='tabpanel' aria-labelledby='tabs-icons-text-1-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site da Concessionária</p>
                              <a href='https://www.energisa.com.br/' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-2' role='tabpanel' aria-labelledby='tabs-icons-text-2-tab'>
                              <iframe id='iframe' src='https://al.equatorialenergia.com.br/sua-conta/emitir-faturas/' height='900' width='100%'></iframe>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-3' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <iframe id='iframe' src='https://agencia.amazonasenergia.com/login' height='900' width='100%'></iframe>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-4' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <iframe id='iframe' src='http://2viasimplificada.cea.ap.gov.br:8081/' height='900' width='100%'></iframe>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-5' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site da Concessionária</p>
                              <a href='https://servicos.coelba.com.br/servicos-ao-cliente/Pages/login-av.aspx?UrlUc=https://servicos.coelba.com.br/servicos-ao-cliente/Pages/2-via-de-conta-coelba.aspx' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-6' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <iframe id='iframe' src='https://www.eneldistribuicao.com.br/ce/AcessoRapidoSegundaVia.aspx' height='900' width='100%'></iframe>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-7' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site da Concessionária</p>
                              <a href='https://agenciavirtual.ceb.com.br/' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-8' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site da Concessionária</p>
                              <a href='https://www.edponline.com.br/servicos-externos/segunda-via-simplificada/identificacao' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-9' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <iframe id='iframe' src='https://www.eneldistribuicao.com.br/go/AgenciaVirtual.aspx' height='900' width='100%'></iframe>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-10' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site da Concessionária</p>
                              <a href='https://ma.equatorialenergia.com.br/sua-conta/emitir-segunda-via/#' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-11' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <iframe id='iframe' src='https://cemigatendebot.cemig.com.br/' height='900' width='100%'></iframe>  
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-12' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site da Concessionária</p>
                              <a href='https://www.energisa.com.br/' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-13' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site da Concessionária</p>
                              <a href='https://www.energisa.com.br/' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-14' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site da Concessionária</p>
                              <a href='https://pa.equatorialenergia.com.br/sua-conta/emitir-segunda-via/#' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-15' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site da Concessionária</p>
                              <a href='https://www.energisa.com.br/' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-16' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site da Concessionária</p>
                              <a href='https://servicos.celpe.com.br/servicos-ao-cliente/Pages/login-av.aspx?UrlUc=https://servicos.celpe.com.br/servicos-ao-cliente/Pages/2-via-conta_anti.aspx' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-17' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <iframe id='iframe' src='https://pi.equatorialenergia.com.br/sua-conta/emitir-faturas/#!' height='900' width='100%'></iframe>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-18' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site da Concessionária</p>
                              <a href='https://www.copel.com/AgenciaWeb/autenticar/loginCliente.do' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-19' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <iframe id='iframe' src='https://www.eneldistribuicao.com.br/rj/AcessoRapidoSegundaVia.aspx' height='900' width='100%'></iframe>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-20' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site da Concessionária</p>
                              <a href='https://www.energisa.com.br/' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-21' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site da Concessionária</p>
                              <a href='https://www.energisa.com.br/' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-22' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site da Concessionária</p>
                              <a href='https://www.roraimaenergia.com.br/segundavia/' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-23' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site da Concessionária</p>
                              <a href='https://servicosonline.cpfl.com.br/agencia-webapp/#/via-pagamento' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-24' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                                <iframe id='iframe' src='https://agenciaweb.celesc.com.br/AgenciaWeb/autenticar/loginUC.do' height='900' width='100%'></iframe>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-25' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site da Concessionária</p>
                              <a href='https://www.energisa.com.br/' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-26' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site da Concessionária</p>
                              <a href='https://www.energisa.com.br/' target='_blank' class='btn btn-primary'>Abrir site</a>
                            </div>
                            <div class='tab-pane fade' id='tabs-icons-text-27' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                              <p>Esta empresa não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site da Concessionária</p>
                              <a href='https://www.energisa.com.br/' target='_blank' class='btn btn-primary'>Abrir site</a>
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