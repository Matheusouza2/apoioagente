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
            </span> Quero ser MEI
          </h3>
        </div>
        
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card">
              <div class="card-body">
                <p>Legal, se você chegou até aqui é porque você tem interesse em ganhar um pouco mais, e como aqui é sem enrolação 
                  preciso logo te dizer que para ser MEI(Microempreendedor Individual) e ter seu CNPJ você tem que pagar ao Governo Federal uma taxa mensal, ela é chamada de DAS MEI
                  é a forma do governo arrecadar seus impostos e ela é de R$60,00 para Prestação de Serviços (R$55,00 de INSS + R$5,00 de ISS).
                  <br>
                  Como você pode ver você terá contribuição para o INSS oque é um vantagem para você que é autonomo.
                  <br>
                  Essa taxa é paga diretamente ao governo atraves de um boleto emitido pelo site oficial do Microempreendedor.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card">
              <div class="card-body">
                E como você vai fazer seu cadastro? 
                Você vai entrar no site: <a href="https://www.gov.br/empresas-e-negocios/pt-br/empreendedor/quero-ser-mei/obtencao-de-cnpj-acesso-restrito">Formalize-se</a>
                e vai preencher seus dados, no final o seu CNPJ será gerado e você vai cadastrar ele aqui em baixo, a partir dai você vai receber acesso a área do parceiro e por lá 
                eu vou te ensinar tudo, desde emitir seu DAS MEI mensal, a enviar sua declaração anual e até mesmo declarar imposto de renda caso sua renda utrapasse o limite anual.
                <br>
                E o mais importante vou te ensinar a fazer seu credenciamento do CNPJ junto a Celcoin. 
                <hr>
                <form action="{{ route('userUpdate', [Auth::user()->id]) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <input type="text" name="cnpj" placeholder="Digite seu CNPJ aqui" class="form-control" required>
                  <button type="submit" class="btn btn-info btn-sm mt-2">Enviar</button>
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