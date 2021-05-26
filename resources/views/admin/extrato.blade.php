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
            </span> Início
          </h3>
        </div>
        <div id="inner"></div>
        

      @include('templates.footer')
      <!-- content-wrapper ends -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
@stop
@section('script')
    <script>
        $.ajax({
            url: 'https://app.celcoin.com.br/Usuario/LoginUsuario',
            dataType : "json",
            method: "POST",
            data: {
                "login" : "87988754442",
                "senha" : "M&Ktecnologia",
                "__RequestVerificationToken" : "iN-ovHwnPfDbJxuuEv6L5oMPEPO1wqfLRfc_MpNYayy0o-9laJ3qLnxhcHHEaVInQarZvYsamld0xgvfQ9YQgrYohaI1"
                },
            contentType: "application/x-www-form-urlencoded",
            success : function(result) {
                $('#inner').html(result);
            },
            error: function(dados){
                console.log(dados.responseText);
                $('#inner').append(dados.responseText);
            }
        });

    </script>

@endsection