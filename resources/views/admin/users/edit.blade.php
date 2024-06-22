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

      <div class="content-wrapper">
        <div class="content">
          <!-- Top Statistics -->
          @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
          <!-- Table Product -->
          <div class="row">
            <div class="col-12">
              <div class="card card-default">
                <div class="card-header">
                  <h2 class="text-center">Register User</h2>
                </div>
                <div class="card-body">
                  {{-- <form action="{{ url('user_store') }}" method="POST"> --}}
                    <form action="{{ url('user_update/' . $users->id) }}" method="POST">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$users->name}}" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$users->email}}" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{$users->password}}" required>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update User</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- content end --}}

      <!-- Footer -->
      @include('admin.footer')
    </div>
  </div>

  @include('admin.script')

</body>
</html>
