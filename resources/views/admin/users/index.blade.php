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
                                                <th>Email</th>
                                                <th>User Type</th>
                                                <th>Status</th>
                                                @if(Auth::user()->user_type != 'user')
                                                <th>Update</th>
                                                <th>Delete</th>
                                                <th>Approve</th>
                                                <th>Reject</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->user_type }}</td>
                                                <td>{{ $user->is_approved }}</td>
                                                @if(Auth::user()->user_type != 'user')
                                                <td>
                                                    <a href="{{ url('user_edit', $user->id) }}" class="btn btn-primary btn-sm">Update</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('user_destroy', $user->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                                <td>
                                                    <form action="{{ url('user_approve', $user->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-success btn-sm">Approve</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{ url('users_reject', $user->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-warning btn-sm">Reject</button>
                                                    </form>
                                                </td>
                                                @else
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                @endif
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
