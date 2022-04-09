@extends("layouts.app")
@section("content")

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="/admin;">Home</a></li>
                            <li class="breadcrumb-item"><a href="/admin/clients">Clients</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Profile</h4>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route("clients.store") }}">
                    @csrf

                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Personal Info</h5>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
                                @error('name') <div class="text-danger w-100"> {{ $message }} </div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" name="lastname" class="form-control" id="lastname" value="{{old('lastname')}}">
                                @error('lastname') <div class="text-danger w-100"> {{ $message }} </div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="share" class="form-label">Share</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault1" value="1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            سادات
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault2" value="0">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            عام
                                        </label>
                                    </div>
                                @error('share') <div class="text-danger w-100"> {{ $message }} </div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-select">
                                    @foreach($status as $item)
                                        <option value="{{ $item->id }}"> {{ $item->title }} </option>
                                    @endforeach
                                </select>
                                @error('status') <div class="text-danger w-100"> {{ $message }} </div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="basic-datepicker" class="form-label">Date</label>
                                <input type="text" id="basic-datepicker" name="date" class="form-control flatpickr-input active" value="{{old('date')}}" readonly="readonly">
                                @error('date') <div class="text-danger w-100"> {{ $message }} </div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="family" class="form-label">Family</label>
                                <select name="family" id="family" class="form-select">
                                    <option value="1" {{ ( old('family') ) == 1 ? 'selected' : '' }}> خانواده </option>
                                    <option value="0" {{ ( old('family') ) == 0 ? 'selected' : '' }}> غیر خانواده </option>
                                </select>
                                @error('family') <div class="text-danger w-100"> {{ $message }} </div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" id="address" value="{{old('address')}}">
                                @error('address') <div class="text-danger w-100"> {{ $message }} </div> @enderror
                            </div>
                        </div>

                    </div>
                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth me-1"></i> Social</h5>
                    <div class="text-end">
                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection

@section('script')
    <link href="/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <script src="/assets/libs/flatpickr/flatpickr.min.js"></script>
    <script src="/assets/js/pages/form-pickers.init.js"></script>
    <script src="/assets/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
    <!-- Init js-->
    <script src="/assets/js/pages/form-masks.init.js"></script>
@endsection

