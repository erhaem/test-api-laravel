<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Dashboard Enterprisely')</title>
    <link href={{ asset('dashlite/assets/css/dashlite.min.css') }} rel="stylesheet">
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  </head>

  <body class="nk-body">
    <div class="nk-app-root">
      <div class="nk-main">
        <div class="container-fluid">
          <table id="users">
            {{-- <thead>
              <tr>Name</tr>
              <tr>Email</tr>
            </thead>
            <tbody>

            </tbody> --}}
          </table>
        </div>
      </div>
    </div>
    <script src={{ asset('dashlite/assets/js/bundle.js') }}></script>
    <script src={{ asset('dashlite/assets/js/scripts.js') }}></script>
    {{-- <script>
      const API_KEY = "{{ env('ATTENDIFY_API_KEY') }}";

      $('table#users').DataTable({
        ajax: {
          url: '/api/users',
          headers: {
            'x-api-key': API_KEY,
          },
          dataSrc: 'data'
        },
        // columns: [...]
      });
    </script> --}}
  </body>

</html>
