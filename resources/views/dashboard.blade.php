<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
@include('admin.head')
</head>


  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>


    <div id="toaster"></div>
    <div class="wrapper">
      @include('admin.sidebar')

      <div class="page-wrapper">

          <!-- Header -->
        @include('admin.header')
        @include('admin.content')



          <!-- Footer -->
        @include('admin.footer')
      </div>
    </div>

    @include('admin.script')

  </body>
</html>
