
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/admin;">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin/users">users</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <h4 class="page-title">Profile</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-4 col-xl-4">
            <div class="card text-center">
                <div class="card-body">
                    <img src="/assets/images/users/user-1.jpg" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                    <h4 class="mb-0">{{ $users->fullName }}</h4>
                    <p class="text-muted">{{ "@".$users->username }}</p>

                    <button type="button" class="btn {{ ($users->email)? 'btn-success' : 'btn-danger' }} btn-xs waves-effect mb-2 waves-light">{{ ($users->email)? 'Active' : 'Not Active' }}</button>
                    <a href="" class="btn btn-info btn-xs waves-effect mb-2 waves-light"> Login With User </a>

                    <div class="text-start mt-3">
                        <h4 class="font-13 text-uppercase">About Me :</h4>
                        <p class="text-muted font-13 mb-3"> {{ $users->description }} </p>
                        <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">{{ $users->fullName }}</span></p>

                        <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2"> {{ $users->mobile }}</span></p>

                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2">{{ $users->email }}</span></p>

                        <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ms-2">{{ $users->country }}</span></p>
                    </div>
                </div>
            </div> <!-- end card -->



        </div> <!-- end col-->

        <div class="col-lg-8 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills nav-fill navtab-bg">
                        <li class="nav-item">
                            <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#aboutme" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                Tickets
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#timeline" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Timeline
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane active" id="settings">
                            <form wire:submit.prevent="create">
                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Personal Info</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="firstname" wire:model="user.name">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="lastname" wire:model="user.family">
                                            @error('user.family')
                                            <div class="text-danger"> {{ $message }} </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" wire:model="user.username">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" wire:model="user.email">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="birthday" class="form-label">Birthday</label>
                                            <input type="text" id="basic-datepicker" class="form-control" wire:model="user.birthday">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="birthday" class="form-label">Mobile</label>
                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="000-000-0000" maxlength="12" wire:model="user.mobile">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="sex" class="form-label">Gender</label>
                                            <div class="form-check">
                                                <input type="radio" id="customRadio2" name="customRadio" class="form-check-input" wire:model="user.sex">
                                                <label class="form-check-label" for="customRadio2">Men</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="customRadio2" name="customRadio" class="form-check-input" wire:model="user.sex">
                                                <label class="form-check-label" for="customRadio2">Women</label>
                                            </div>


                                        </div>
                                    </div>
                                </div> <!-- end row -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="userbio" class="form-label">Bio</label>
                                            <textarea class="form-control" id="userbio" rows="4" placeholder="Write something..." wire:model="user.description">  </textarea>


                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="userpassword" wire:model="user.password">

                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth me-1"></i> Social</h5>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                </div>
                            </form>
                        </div>
                        <!-- end settings content-->

                        <div class="tab-pane" id="aboutme">

                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-briefcase me-1"></i>
                                Experience</h5>

                            <ul class="list-unstyled timeline-sm">
                                <li class="timeline-sm-item">
                                    <span class="timeline-sm-date">2015 - 18</span>
                                    <h5 class="mt-0 mb-1">Lead designer / Developer</h5>
                                    <p>websitename.com</p>
                                    <p class="text-muted mt-2">Everyone realizes why a new common language
                                        would be desirable: one could refuse to pay expensive translators.
                                        To achieve this, it would be necessary to have uniform grammar,
                                        pronunciation and more common words.</p>

                                </li>
                                <li class="timeline-sm-item">
                                    <span class="timeline-sm-date">2012 - 15</span>
                                    <h5 class="mt-0 mb-1">Senior Graphic Designer</h5>
                                    <p>Software Inc.</p>
                                    <p class="text-muted mt-2">If several languages coalesce, the grammar
                                        of the resulting language is more simple and regular than that of
                                        the individual languages. The new common language will be more
                                        simple and regular than the existing European languages.</p>
                                </li>
                                <li class="timeline-sm-item">
                                    <span class="timeline-sm-date">2010 - 12</span>
                                    <h5 class="mt-0 mb-1">Graphic Designer</h5>
                                    <p>Coderthemes LLP</p>
                                    <p class="text-muted mt-2 mb-0">The European languages are members of
                                        the same family. Their separate existence is a myth. For science
                                        music sport etc, Europe uses the same vocabulary. The languages
                                        only differ in their grammar their pronunciation.</p>
                                </li>
                            </ul>

                            <h5 class="mb-3 mt-4 text-uppercase"><i class="mdi mdi-cards-variant me-1"></i>
                                Projects</h5>
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Project Name</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Clients</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>App design and development</td>
                                        <td>01/01/2015</td>
                                        <td>10/15/2018</td>
                                        <td><span class="badge bg-info">Work in Progress</span></td>
                                        <td>Halette Boivin</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Coffee detail page - Main Page</td>
                                        <td>21/07/2016</td>
                                        <td>12/05/2018</td>
                                        <td><span class="badge bg-success">Pending</span></td>
                                        <td>Durandana Jolicoeur</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Poster illustation design</td>
                                        <td>18/03/2018</td>
                                        <td>28/09/2018</td>
                                        <td><span class="badge bg-pink">Done</span></td>
                                        <td>Lucas Sabourin</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Drinking bottle graphics</td>
                                        <td>02/10/2017</td>
                                        <td>07/05/2018</td>
                                        <td><span class="badge bg-blue">Work in Progress</span></td>
                                        <td>Donatien Brunelle</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Landing page design - Home</td>
                                        <td>17/01/2017</td>
                                        <td>25/05/2021</td>
                                        <td><span class="badge bg-warning">Coming soon</span></td>
                                        <td>Karel Auberjo</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div> <!-- end tab-pane -->
                        <!-- end about me section content -->

                        <div class="tab-pane show" id="timeline">

                            <!-- comment box -->
                            <form action="#" class="comment-area-box mt-2 mb-3">
                                            <span class="input-icon">
                                                <textarea rows="3" class="form-control" placeholder="Write something..."></textarea>
                                            </span>
                                <div class="comment-area-btn">
                                    <div class="float-end">
                                        <button type="submit" class="btn btn-sm btn-dark waves-effect waves-light">Post</button>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-sm btn-light text-black-50"><i class="far fa-user"></i></a>
                                        <a href="#" class="btn btn-sm btn-light text-black-50"><i class="fa fa-map-marker-alt"></i></a>
                                        <a href="#" class="btn btn-sm btn-light text-black-50"><i class="fa fa-camera"></i></a>
                                        <a href="#" class="btn btn-sm btn-light text-black-50"><i class="far fa-smile"></i></a>
                                    </div>
                                </div>
                            </form>
                            <!-- end comment box -->

                            <!-- Story Box-->
                            <div class="border border-light p-2 mb-3">
                                <div class="d-flex align-items-start">
                                    <img class="me-2 avatar-sm rounded-circle" src="/assets/images/users/user-3.jpg" alt="Generic placeholder image">
                                    <div class="w-100">
                                        <h5 class="m-0">Jeremy Tomlinson</h5>
                                        <p class="text-muted"><small>about 2 minuts ago</small></p>
                                    </div>
                                </div>
                                <p>Story based around the idea of time lapse, animation to post soon!</p>

                                <img src="/assets/images/small/img-1.jpg" alt="post-img" class="rounded me-1" height="60">
                                <img src="/assets/images/small/img-2.jpg" alt="post-img" class="rounded me-1" height="60">
                                <img src="/assets/images/small/img-3.jpg" alt="post-img" class="rounded" height="60">

                                <div class="mt-2">
                                    <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                    <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-heart-outline"></i> Like</a>
                                    <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-share-variant"></i> Share</a>
                                </div>
                            </div>

                            <!-- Story Box-->
                            <div class="border border-light p-2 mb-3">
                                <div class="d-flex align-items-start">
                                    <img class="me-2 avatar-sm rounded-circle" src="/assets/images/users/user-4.jpg" alt="Generic placeholder image">
                                    <div class="w-100">
                                        <h5 class="m-0">Thelma Fridley</h5>
                                        <p class="text-muted"><small>about 1 hour ago</small></p>
                                    </div>
                                </div>
                                <div class="font-16 text-center fst-italic text-dark">
                                    <i class="mdi mdi-format-quote-open font-20"></i> Cras sit amet nibh libero, in
                                    gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                                    purus odio, vestibulum in vulputate at, tempus viverra turpis. Duis
                                    sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper
                                    porta. Mauris massa.
                                </div>

                                <div class="post-user-comment-box">
                                    <div class="d-flex align-items-start">
                                        <img class="me-2 avatar-sm rounded-circle" src="/assets/images/users/user-3.jpg" alt="Generic placeholder image">
                                        <div class="w-100">
                                            <h5 class="mt-0">Jeremy Tomlinson <small class="text-muted">3 hours ago</small></h5>
                                            Nice work, makes me think of The Money Pit.

                                            <br>
                                            <a href="javascript: void(0);" class="text-muted font-13 d-inline-block mt-2"><i class="mdi mdi-reply"></i> Reply</a>

                                            <div class="d-flex align-items-start mt-3">
                                                <a class="pe-2" href="#">
                                                    <img src="/assets/images/users/user-4.jpg" class="avatar-sm rounded-circle" alt="Generic placeholder image">
                                                </a>
                                                <div class="w-100">
                                                    <h5 class="mt-0">Kathleen Thomas <small class="text-muted">5 hours ago</small></h5>
                                                    i'm in the middle of a timelapse animation myself! (Very different though.) Awesome stuff.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-start mt-2">
                                        <a class="pe-2" href="#">
                                            <img src="/assets/images/users/user-1.jpg" class="rounded-circle" alt="Generic placeholder image" height="31">
                                        </a>
                                        <div class="w-100">
                                            <input type="text" id="simpleinput" class="form-control border-0 form-control-sm" placeholder="Add comment">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <a href="javascript: void(0);" class="btn btn-sm btn-link text-danger"><i class="mdi mdi-heart"></i> Like (28)</a>
                                    <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-share-variant"></i> Share</a>
                                </div>
                            </div>

                            <!-- Story Box-->
                            <div class="border border-light p-2 mb-3">
                                <div class="d-flex align-items-start">
                                    <img class="me-2 avatar-sm rounded-circle" src="/assets/images/users/user-6.jpg" alt="Generic placeholder image">
                                    <div class="w-100">
                                        <h5 class="m-0">Jeremy Tomlinson</h5>
                                        <p class="text-muted"><small>15 hours ago</small></p>
                                    </div>
                                </div>
                                <p>The parallax is a little odd but O.o that house build is awesome!!</p>

                                <iframe src="https://player.vimeo.com/video/87993762" height="300" class="img-fluid border-0"></iframe>
                            </div>

                            <div class="text-center">
                                <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading me-1"></i> Load more </a>
                            </div>

                        </div>
                        <!-- end timeline content-->

                    </div> <!-- end tab-content -->
                </div>
            </div> <!-- end card-->

        </div> <!-- end col -->
    </div>
    <!-- end row-->

</div> <!-- container -->

@section('script')
    <link href="/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <script src="/assets/libs/flatpickr/flatpickr.min.js"></script>
    <script src="/assets/js/pages/form-pickers.init.js"></script>
    <script src="/assets/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
    <!-- Init js-->
    <script src="/assets/js/pages/form-masks.init.js"></script>
@endsection
