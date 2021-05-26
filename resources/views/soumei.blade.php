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
            </span> Sou MEI
          </h3>
        </div>
        
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card">
              <div class="card-body">
                <p>Legal, agora você tem seu MEI aberto, vamos ver então oque você tem que fazer para começar a ganhar mais no Celcoin. 
                  Você vai começar acessando sua conta no Celcoin e depois vai na área de <a href="https://app.celcoin.com.br/UserEnvironment/AreaUsuario_Credenciamento">credenciamento.</a>
                  <br>
                  Lá basta você preencher os dados cadastrados por você no seu cadastro MEI.
                  <br>
                  Finalizando isso você já está credenciado no Celcoin, talvez seja preciso enviar um e-mail para o suporte deles atualizar sua comissão. 
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card">
              <div class="card-header">
                <h4>Links Uteis</h4>
              </div>
              <div class="card-body">
                <ul>
                  <li><a href="http://www8.receita.fazenda.gov.br/SimplesNacional/Aplicacoes/ATSPO/pgmei.app/Identificacao">Emissão do DAS Mensal</a></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
                <br>
                <hr>
                Em Breve vou estar liberando um acesso para vocês de uma plataforma para controle de estoque e caixa da empresa de vocês OK?
                <br><br>
                Enquanto faço a plataforma de comunicação direta, podem mandar qualquer duvida para o e-mail sertsoftsalg@gmail.com que respondo vocês. 
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