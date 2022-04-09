@extends('layouts.app')

@section("content")
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Clients</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Clients</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-end mb-2">



                            <div class="col-auto">
                                <div class="text-md-end margin-t d-flex">
                                    <a class="btn btn-primary waves-effect waves-light mb-2 me-1" href="/admin/clients" > <i class="fe-refresh-ccw"></i> </a>
                                    <form action="" method="get">
                                        @csrf
                                        <button class="btn btn-danger waves-effect waves-light mb-2 me-2"><i class="fe-delete"></i> all remove </button>
                                    </form>
                                </div>
                            </div>

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
                                    <th>Last Name</th>
                                    <th>Share</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Family</th>
                                    <th style="width: 82px;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clients as $client)
                                    <tr>
                                        <td class="table-user d-flex align-items-center">
                                            <div class="form-check">
                                                <input type="checkbox" name="chek[]" value="{{ $client->id }}" class="form-check-input" id="customCheck2">
                                            </div>
                                        </td>
                                        <td>
                                            <a class="text-dark" href="{{ route('clients.edit' , ['client' => $client->id]) }}">{{ $client->name }}</a>
                                        </td>
                                        <td> {{ $client->lastname }} </td>
                                        <td>
                                            {{ $client->share }}
                                        </td>
                                        <td>
                                            {{ $client->status }}
                                        </td>
                                        <td>
                                            {{ $client->date }}
                                        </td>
{{--                                        <td>--}}
{{--                                            @if($user->isAdmin)--}}
{{--                                                <i class="mdi mdi-account-check text-success"></i> Admin--}}
{{--                                            @else--}}
{{--                                                <i class="mdi mdi-account-cancel text-primary"></i> User--}}
{{--                                            @endif--}}
{{--                                        </td>--}}
                                        <td>
                                            Pre-Hawza
                                        </td>
                                        <td class="d-flex">
                                            <a href="{{ route('clients.edit' , ['client' => $client->id]) }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>

                                            <form action="{{ route('clients.destroy' , ['client' => $client->id]) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="action-icon btn btn-link waves-effect"> <i class="mdi mdi-delete"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <ul class="pagination pagination-rounded justify-content-end my-2">
{{--                            {{ $clients->appends( request()->query() )->links() }}--}}
                        </ul>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div>
@endsection

