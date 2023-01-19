@extends('dashboard.layouts.master')
@section('content')
    <!-- MAIN-CONTENT -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">

                <!-- breadcrumb -->
                <div class="breadcrumb-header justify-content-between">
                    <div class="left-content">
                    <span class="main-content-title mg-b-0 mg-b-lg-1">DASHBOARD</span>
                    </div>
                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Users</li>
                        </ol>
                    </div>
                </div>
                <!-- /breadcrumb -->



                <!-- row  -->
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <!--Page Widget Error-->
                        @if($errors->any())
                            <div class="card bd-0 mg-b-20">
                                <div class="card-body bd bd-danger text-center rounded">
                                    <div class="danger-widget">
                                        <h3 class="text-danger">Danger!</h3>
                                        @foreach($errors->all() as $error)
                                            <p class="mt-3 mb-0 text-danger">{{$error}}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!--Page Widget Error-->
                    </div>
                </div>
                <!-- /row closed -->

                <!-- row  -->
                <div class="row row-sm">
                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                        <div class="card  box-shadow-0">
                            <div class="card-header">
                                <h4 class="card-title mb-1">Update {{$user->name}}</h4>
                            </div>
                            <div class="card-body pt-0">
                                <form class="form-horizontal" method="POST" action="{{route('users.update', $user->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="{{old('name') ?? $user->name}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="{{old('email') ?? $user->email}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control" id="inputEmail3" name="profile_photo_path">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="inputPasswordConf" placeholder="Password Confirmation" name="password_confirmation">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="address" value="{{old('address') ?? $user->address}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Roles</label>
										<select name="roles" class="form-control form-select" data-bs-placeholder="Select Roles">
                                            <option value="{{$user->roles}}">{{$user->roles}}</option>
                                            <option value="ADMIN">Admin</option>
                                            <option value="USER">User</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="inputHouseNumber" placeholder="House Number" name="houseNumber" value="{{old('houseNumber') ?? $user->houseNumber}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="inputPhoneNumber" placeholder="Phone Number" name="phoneNumber" value="{{old('phoneNumber') ?? $user->phoneNumber}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputcity" placeholder="City" name="city" value="{{old('city') ?? $user->city}}">
                                    </div>
                                    <div class="form-group mb-0 mt-3 d-flex" style="justify-content: space-between">
                                        <div>
                                            <a href="{{route('users.index')}}" class="btn btn-secondary">Cancel</a>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row closed -->

            </div>
            <!-- /Container -->
        </div>
        <!-- MAIN-CONTENT CLOSED -->
@endsection