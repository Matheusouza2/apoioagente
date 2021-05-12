<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Apoio Agente</title>
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
    <script defer src="{{ asset('js/script.js')}}"></script>
    <!-- endinject -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @yield('script')
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