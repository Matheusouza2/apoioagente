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
          <div class="col-lg-6 text-right">
            <!--<a href="{{ route('distintivosIndex')}}" class="btn btn-sm btn-gradient-warning text-dark"><i class="fal fa-badge-dollar"></i> Os distintivos chegaram</a>-->
            <a href="/agente/comunidade" class="btn btn-sm btn-gradient-info"><i class="fal fa-comments-dollar"></i> Acesse a Comunidade</a>
          </div>
        </div>
        @include('templates.body-loggedin')
      @include('templates.footer')
      <!-- content-wrapper ends -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
@stop

@section('script')
  <script defer src="{{ asset('js/comissao.js') }}"></script>
@if($alert ?? '' != null)
<script>
  const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Qual sua comissão ?',
  text: "Se você já ganha 0,55 centavos de comissão por boleto pago pode fechar a mensagem, se não, vem comigo pra saber como aumentar seus lucros",
  icon: 'info',
  showCancelButton: true,
  confirmButtonText: 'Quero ganhar mais !',
  cancelButtonText: 'Já ganho isso',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    window.location = "/dashboard";
  }
})
</script>
@endif

@endsection