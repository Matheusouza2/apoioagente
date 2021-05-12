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
              <i class="fas fa-cars text-blue"></i>
            </span> Detran
          </h3>
        </div>
        <div class="row">
          <div class="card">
            <div class="card-body">
              <div class='nav-wrapper'>
                <ul class='nav nav-pills nav-fill flex-column flex-md-row' id='tabs-icons-text' role='tablist'>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3 active' id='tabs-icons-text-1-tab' data-toggle='tab' href='#tabs-icons-text-1' role='tab' aria-controls='tabs-icons-text-1' aria-selected='true'><i class='fas fa-car'></i> Acre</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-2-tab' data-toggle='tab' href='#tabs-icons-text-2' role='tab' aria-controls='tabs-icons-text-2' aria-selected='false'><i class='fas fa-car'></i> Alagoas</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-3-tab' data-toggle='tab' href='#tabs-icons-text-3' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Amazonas</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-4-tab' data-toggle='tab' href='#tabs-icons-text-4' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Amapá</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-5-tab' data-toggle='tab' href='#tabs-icons-text-5' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Bahia</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-6-tab' data-toggle='tab' href='#tabs-icons-text-6' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Ceará</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-7-tab' data-toggle='tab' href='#tabs-icons-text-7' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Distrito Federal</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-8-tab' data-toggle='tab' href='#tabs-icons-text-8' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Espírito Santo</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-9-tab' data-toggle='tab' href='#tabs-icons-text-9' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Goiás</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-10-tab' data-toggle='tab' href='#tabs-icons-text-10' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Maranhão</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-11-tab' data-toggle='tab' href='#tabs-icons-text-11' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Minas Gerais</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-12-tab' data-toggle='tab' href='#tabs-icons-text-12' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Mato Grosso do Sul</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-13-tab' data-toggle='tab' href='#tabs-icons-text-13' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Mato Grosso</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-14-tab' data-toggle='tab' href='#tabs-icons-text-14' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Pará</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-15-tab' data-toggle='tab' href='#tabs-icons-text-15' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Paraíba</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-16-tab' data-toggle='tab' href='#tabs-icons-text-16' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Pernambuco</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-17-tab' data-toggle='tab' href='#tabs-icons-text-17' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Piauí</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-18-tab' data-toggle='tab' href='#tabs-icons-text-18' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Paraná</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-19-tab' data-toggle='tab' href='#tabs-icons-text-19' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Rio de Janeiro</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-20-tab' data-toggle='tab' href='#tabs-icons-text-20' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Rio Grande do Norte</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-21-tab' data-toggle='tab' href='#tabs-icons-text-21' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Rondônia</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-22-tab' data-toggle='tab' href='#tabs-icons-text-22' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Roraima</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-23-tab' data-toggle='tab' href='#tabs-icons-text-23' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Rio Grande do Sul</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-24-tab' data-toggle='tab' href='#tabs-icons-text-24' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Santa Catarina</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-25-tab' data-toggle='tab' href='#tabs-icons-text-25' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Sergipe</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-26-tab' data-toggle='tab' href='#tabs-icons-text-26' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> São Paulo</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link mb-sm-3 mb-md-3' id='tabs-icons-text-27-tab' data-toggle='tab' href='#tabs-icons-text-27' role='tab' aria-controls='tabs-icons-text-3' aria-selected='false'><i class='fas fa-car'></i> Tocantins</a>
                  </li>
                </ul>
              </div>
              <div class='card shadow'>
                <div class='card-body'>
                  <div class='tab-content' id='myTabContent'>
                    <div class='tab-pane fade show active' id='tabs-icons-text-1' role='tabpanel' aria-labelledby='tabs-icons-text-1-tab'>
                      <iframe id='iframe' src='https://www.detran.ac.gov.br/site/apps/veiculo/consulta/filtro-consulta-veiculo.jsp' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-2' role='tabpanel' aria-labelledby='tabs-icons-text-2-tab'>
                      <p>Este estado não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site do Detran Estadual</p>
                      <a href='https://www.detran.al.gov.br/' target='_blank' class='btn btn-primary'>Abrir site</a>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-3' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='https://digital.detran.am.gov.br/?openModalVeiculo=%2Fveiculo' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-4' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='https://www.detran.ap.gov.br/detranap/veiculo/consulta-de-veiculos/' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-5' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <p>Este estado não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site do Detran Estadual</p>
                      <a href='http://www.servicos.detran.ba.gov.br/SituacaoVeiculo' target='_blank' class='btn btn-primary'>Abrir site</a>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-6' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <p>Este estado não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site do Detran Estadual</p>
                      <a href='https://sistemas.detran.ce.gov.br/central/' target='_blank' class='btn btn-primary'>Abrir site</a>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-7' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='https://portal.detran.df.gov.br/area-publica/veiculo/debitos' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-8' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='https://publicodetran.es.gov.br/ConsultaVeiculo/NovoConsultaVeiculoES.asp' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-9' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='https://www.detran.go.gov.br/psw/#/pages/pagina-inicial' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-10' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='http://aplicacoes.ma.gov.br/ipva/jsp/consultaDebitosIpva/consultaDebitosIpva.jsf' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-11' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <p>Este estado não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site do Detran Estadual</p>
                      <a href='https://www.detran.mg.gov.br/veiculos/situacao-do-veiculo/consultar-situacao-do-veiculo#' target='_blank' class='btn btn-primary'>Abrir site</a>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-12' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='https://www.detran.ms.gov.br/consulta-de-debitos/' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-13' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <p>Este estado não permite a abertura do site pela plataforma, clique no botão abaixo e vá direto para o site do Detran Estadual</p>
                      <a href='http://www.mt.gov.br/-/193455-consulta-veiculo-online-' target='_blank' class='btn btn-primary'>Abrir site</a>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-14' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='https://www.detran.pa.gov.br/sistransito/detran-web/servicos/veiculos/indexRenavam.jsf' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-15' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='https://detran.pb.gov.br/portalparaiba/portal_detranpb/veiculo/consulta-do-veiculo' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-16' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='https://online6.detran.pe.gov.br/ServicosWeb/VeiculoMVC/Consulta/ConsultarServico?TipoConsulta=1&Parametro=6' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-17' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='https://webas.sefaz.pi.gov.br/clvn/' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-18' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='https://www.extratodebito.detran.pr.gov.br/detranextratos/geraExtrato.do?action=iniciarProcesso' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-19' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='http://www.detran.rj.gov.br/_monta_aplicacoes.asp?cod=16&tipo=crlv' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-20' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='https://www2.detran.rn.gov.br/externo/consultarveiculo.asp' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-21' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='https://consulta.detran.ro.gov.br/CentralDeConsultasInternet/Software/ViewConsultaVeiculos.aspx' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-22' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='https://www.rr.getran.com.br/site/apps/veiculo/filtroplacarenavam-consultaveiculo.jsp' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-23' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='https://pcsdetran.rs.gov.br/servicos/821' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-24' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='https://www.detran.sc.gov.br/informacoes/veiculos' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-25' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='https://www.detran.se.gov.br/portal/?pg=pag_licenc_boleto_parcel' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-26' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='https://www.ipva.fazenda.sp.gov.br/ipvanet_consulta/consulta.aspx' height='900' width='100%'></iframe>
                    </div>
                    <div class='tab-pane fade' id='tabs-icons-text-27' role='tabpanel' aria-labelledby='tabs-icons-text-3-tab'>
                      <iframe id='iframe' src='http://www.sefaz2.to.gov.br/ipva/extrato_debito.php' height='900' width='100%'></iframe>
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