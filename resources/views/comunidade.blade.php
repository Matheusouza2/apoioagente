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
                <i class="fal fa-comments-dollar"></i>
            </span> Comunidade
          </h3>
        </div>
        <div class="row">
          <div class="modal fade" id="config" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-body p-0">
                  <div class="card bg-secondary border-0 mb-0">
                    <div class="card-header bg-transparent pb-5">
                      <div class="text-muted text-center mt-2 mb-3">Termos de Uso e Punições da comunidade</div>
                      <div class="card-body px-lg-1 py-lg-1">
                        <p>Ao publicar ou comentar a primeira vez na comunidade você está obrigado a seguir todas as normas da comunidade</p>
                        <hr>
                        <h4>Normas</h4>
                          Não será tolerado de maneira alguma qualquer tratamento de forma ofensiva contra outros agentes. <br>
                          É permitida qualquer tipo de negociação através da aba comunidade. <br>
                          Não compartilhe dados pessoais, senhas, documentos ou qualquer dado sensivel através da plataforma. <br>
                          Qualquer usuário pode denunciar outro caso se sinta ofendido, ou veja ofensa contra outros.
                        <h4>Punições</h4>
                          Restrição temporaria da comunidade. <br>
                          Restrição temporaria dos comentários. <br>
                          Restrição temporaria de acesso ao controle de comissão. <br>
                          Suspensão temporaria da conta Premium se houver. <br>
                          Suspensão temporaria do sistema desktop se houver. <br>
                          Suspensão total da conta. <br><br>
                        <small>O usuário que sofrer uma punição terá o aviso da punição e o motivo ao entrar na conta, o mesmo poderá recorrer a punição a qualquer momento pela tela de punições.</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Page content -->
          <div class="container-fluid mt--6">
            <div class="row">
              <div class="col-xl-12">
                <div class="card">
                  <div class="card-header border-0">
                    <div class="row align-items-center">
                      <div class="col">
                        <h3 class="mb-0">Comunidade de Agentes</h3>
                        <small>Aqui você pode conversar com agentes de todo o Brasil, para compartilhar ideias, experiencias ou até mesmo tirar dúvidas</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <h4>Usuário: {{ Auth::user()->nome }}</h4>
                    <h5>E-mail: {{ Auth::user()->email }}</h5>
                    @if(Auth::user()->permissao == 'A')
                      <h5>Tipo de Conta: Padrão</h5>
                    @elseif(Auth::user()->permissao == 'P')
                      <h5>Tipo de Conta: Premium</h5>
                    @else
                      <h5>Tipo de Conta: Master</h5>
                    @endif
                    <small><a href="javascript:void(0)" data-toggle="modal" data-target="#config">Termos para participação da comunidade.</a></small>
                  </div>
                </div>
              </div>
              <div class="col-xl-8">
                <div class="card">
                  <div class="card-body" id="card-body">
                    <textarea class="form-control" id="publicacao" placeholder="Compartilhe com outros agentes suas dúvidas ou ideias para melhoria do trabalho com o Celcoin..." rows="4" style="resize: none; width: 100%;"></textarea>   
                    <div class="text-right">
                      <button class="btn btn-info mt-2" type="button" onclick="publicar()">Publicar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-xl-4"></div>
              <div class="col-xl-8">
                <div class="card" hidden="true" id="card-load">
                  <div class="card-body">
                    <img src="{{ asset('images/loading.gif') }}" style="display: block;margin-left: auto;margin-right: auto; width: 50px; height: 50px;" id="loading"></img>
                  </div>
                </div>
                <div id="div-cards"></div>
                @foreach($publicacoes as $publicacao)
                <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col col-lg-6">
                        <a href="{{ route('perfilPublico', [$publicacao->id_user]) }}">
                          <img src="{{ asset('storage/images/'.$publicacao->id_user.'/'.$publicacao->foto) }}" width="40px" class="rounded-circle" alt="">
                          <span class="availability-status online"></span>
                          {{ $publicacao->nome }}
                        </a>
                        <sup>{{ date( 'd/m/Y' , strtotime($publicacao->data)) }}</sup>
                      </div>
                      <div class="col col-lg-6 text-right">
                        <a href="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Preferencias"><i class="fas fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Denunciar</a>
                          @if ($publicacao->id_user == Auth::user()->id)
                            <a class="dropdown-item" href="{{ route('delPub', [$publicacao->id]) }}">Excluir</a>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="mt-2">{{ $publicacao->publicacao }}</p>
                    <hr>
                    <p><small>Comentários</small></p>
                    <div class="row">
                      <div class="col-lg-10">
                        <input type="text" name="comentario" id="comentario{{$publicacao->id}}" class="form-control" placeholder="Comente algo sobre essa publicação">
                      </div>
                      <div class="col-lg-2">
                        <a href="javascript:void(0)" onclick="comentar({{$publicacao->id}})" class="btn btn-ligth ml--4" title="Postar comentario"><i class="fas fa-share-square"></i></a>
                      </div>
                    </div>
                    <div class="alert alert-secondary mt-4" id="loading-coment{{ $publicacao->id }}" hidden="true">
                      <img src="{{ asset('images/loading.gif') }}" style="display: block;margin-left: auto;margin-right: auto; width: 50px; height: 50px;" id="loading">
                    </div>
                    <div id="comments{{$publicacao->id}}"></div>
                    @foreach($comentarios as $comentario)
                      @if($comentario->publicacao == $publicacao->id)
                        <div class="alert alert-secondary mt-4">
                          <a href="" class="">{{ $comentario->nome }}</a>  <sup>{{ date( 'd/m/Y' , strtotime($comentario->data)) }}</sup> <br>
                          <p class="mt-2">{{ $comentario->comentario }}</p>
                        </div>  
                      @endif
                    @endforeach          
                  </div>
                </div>
                @endforeach
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
@stop

@section('script')
  <script async src="{{ asset('js/publish.js') }}"></script>
@endsection