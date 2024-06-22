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
                  <h2 class="text-center">Products Inventory</h2>
                </div>
                <div class="card-body">
                  <form action="{{ url('students_update/' . $students->id) }}" method="POST">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$students->name}}" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="gender">Gender:</label>
                        <div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male" {{ $students->gender == 'male' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="genderMale">Male</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female" {{ $students->gender == 'female' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="genderFemale">Female</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="age">Age:</label>
                        <input type="number" class="form-control" id="age" name="age" value="{{$students->age}}" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{$students->city}}" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="province_state">Province/State:</label>
                        <input type="text" class="form-control" id="province_state" name="province_state" value="{{$students->province_state}}" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="employment_status">Employment Status:</label>
                        <input type="text" class="form-control" id="employment_status" name="employment_status" value="{{$students->employment_status}}" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="degree_level">Degree Level:</label>
                        <input type="text" class="form-control" id="degree_level" name="degree_level" value="{{$students->degree_level}}" required>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Student</button>
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
