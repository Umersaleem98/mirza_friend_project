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

                </div>
                <div class="card-body">
                  <table id="productsTable" class="table table-hover table-product" style="width:100%">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>Province/State</th>
                        <th>Employment Status</th>
                        <th>Degree Level</th>
                        <th>Update</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($students as $student)
                      <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->city }}</td>
                        <td>{{ $student->province_state }}</td>
                        <td>{{ $student->employment_status }}</td>
                        <td>{{ $student->degree_level }}</td>
                        <td>
                          <a href="{{ url('students_edit', $student->id) }}" class="btn btn-primary btn-sm">Update</a>
                        </td>
                        <td>
                          <a href="{{ url('students_destroy', $student->id) }}" class="btn btn-danger btn-sm" >Delete</a>
                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                  {{-- <div class="d-flex justify-content-center">
                  {{ $students->links() }}
                  </div> --}}
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
