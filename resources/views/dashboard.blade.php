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


<script>
    // Set the session timeout in milliseconds (30 minutes)
    const sessionTimeout = {{ config('session.lifetime') * 60 * 1000 }};

    // Function to show a session expiry warning
    function showSessionExpiryWarning() {
        alert('Your session is about to expire. Please save your work.');
        // Optionally, you can log out the user by redirecting to the logout route
        window.location.href = '{{ url("logout") }}';
    }

    // Set a timeout to show the warning before the session expires (e.g., 1 minute before)
    setTimeout(showSessionExpiryWarning, sessionTimeout - 1 * 60 * 1000);
</script>
