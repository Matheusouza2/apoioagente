<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Apoio Agente</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
  </head>
  <body>
  @yield('body')

  <!-- partial -->
  <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{asset('js/off-canvas.js')}}"></script>
    <script src="{{asset('js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script defer src="{{ asset('js/dashboard.js')}}"></script>
    <script defer src="{{ asset('js/todolist.js')}}"></script>
    <script async src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script async src="{{ asset('js/comissao.js') }}"></script>
    <!-- End custom js for this page -->
    @if (session()->has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Tudo certo !!',
                text: '{{ session()->get('success') }}'
            });
        </script>
    @elseif(session()->has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session()->get('error') }}'
            });
        </script>
    @elseif(session()->has('info'))
      <script>
        Swal.fire({
            icon: 'info',
            title: 'Informativo',
            text: '{{ session()->get('info') }}'
        });
      </script>
    @endif
  </body>
</html>