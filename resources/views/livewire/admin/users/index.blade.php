<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
                <h4 class="page-title">Users</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between mb-2">
                        <div class="col-auto">
                            <form class="search-bar position-relative mb-sm-0 mb-2">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end">
                                <button type="button" class="btn btn-danger waves-effect waves-light mb-2 me-2"><i class="mdi mdi-basket me-1"></i> Add Sellers</button>
                                <button type="button" class="btn btn-success waves-effect waves-light mb-2 me-1"><i class="mdi mdi-cog"></i></button>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-borderless table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 20px;">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Full Name</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Email</th>
                                    <th>Register By</th>
                                    <th>Is Admin</th>
                                    <th>Terms</th>
                                    <th style="width: 82px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2"> {{ $user->fullName }} </label>
                                        </div>
                                    </td>
                                    <td class="table-user">
                                        <img src="../assets/images/users/user-2.jpg" alt="table-user" class="me-2 rounded-circle">
                                        <a href="" class="text-body fw-medium"></a>
                                    </td>
                                    <td> {{ $user->created_at }} </td>
                                    <td>
                                        @if($user->email)
                                            <i class="mdi mdi-star text-success"></i> Active
                                        @else
                                            <i class="mdi mdi-star text-warning"></i> NotActive
                                        @endif
                                    </td>
                                    <td>
                                        <span class="fw-medium">{{ $user->email }}</span>
                                    </td>
                                    <td>
                                        Website
                                    </td>
                                    <td>
                                        @if($user->isAdmin)
                                            <i class="mdi mdi-account-check text-success"></i> Admin
                                        @else
                                            <i class="mdi mdi-account-cancel text-primary"></i> User
                                        @endif
                                    </td>
                                    <td>
                                        Pre-Hawza
                                    </td>

                                    <td>
                                        <a href="/admin/users/{{ $user->id }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="" wire:click.prevent="delete({{ $user->id }})" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <ul class="pagination pagination-rounded justify-content-end my-2">
                        {{ $users->links() }}
                    </ul>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div>
