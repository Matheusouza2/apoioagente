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
            </span> Perfil
          </h3>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Foto do Perfil</h4>
                    </div>
                    <div class="card-body text-center">
                        @if (Auth::user()->foto != null)
                            <img src="{{ asset('storage/images/'.Auth::user()->id.'/'.Auth::user()->foto) }}" width="40%" class="rounded-circle" alt="">
                        @else
                            <img src="{{ asset('images/avatar.png') }}" width="50%" class="rounded-circle" alt="">
                        @endif
                        <form class="mt-4" action="{{ route('uploadImagePerfil') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="img" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <input type="text" class="form-control file-upload-info" disabled="" placeholder="Imagem">
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-primary" type="button">Escolher foto</button>
                                  </span>
                                </div>
                            </div>
                            <button class="btn btn-gradient-success">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>Dados</h4>
                            </div>
                            <div class="col-lg-6 text-right">
                                <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon" onclick="liberar()" title="Habilitar edição dos campos">
                                    <i class="fal fa-pencil"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('userUpdate',[Auth::user()->id]) }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="nome">Nome</label>
                                        <input type="text" name="nome" value="{{ Auth::user()->nome }}" readonly id="nome" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="nome">E-mail</label>
                                        <input type="email" name="email" value="{{ Auth::user()->email }}" readonly id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="nome">Data de Nascimento</label>
                                        <input type="text" name="nascimento" id="nascimento" value="{{ date( 'd/m/Y' , strtotime(Auth::user()->nascimento)) }}" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="nome">Senha</label>
                                        <input type="password" name="password" placeholder="Digite uma nova senha, ou deixe em branco" id="password" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-0 col-md-0 col-lg-6"></div>
                                <div class="col-sm-12 col-md-12 col-lg-6 text-right">
                                    <div class="form-group">
                                        <button type="submit" disabled id="btn-enviar" class="btn btn-inverse-success">Salvar</button>
                                    </div>
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
@stop

@section('script')
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script>
    function liberar(){
        $('#nome').attr('readonly', false);
        $('#email').attr('readonly', false);
        $('#nascimento').attr('readonly', false);
        $('#password').attr('readonly', false);
        $('#btn-enviar').attr('disabled', false);
        $('#nascimento').mask('00/00/0000');
    }
</script>

@endsection