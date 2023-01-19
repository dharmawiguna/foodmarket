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
                            <li class="breadcrumb-item active" aria-current="page">Foods</li>
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
                                <h4 class="card-title mb-1">Update {{$food->name}} </h4>
                            </div>
                            <div class="card-body pt-0">
                                <form class="form-horizontal" method="POST" action="{{route('food.update', $food->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="{{old('name') ?? $food->name}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control" id="inputEmail3" name="picturePath">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="inputDescription" name="description" >{{old('description') ?? $food->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputIngredients" placeholder="Ingredients" name="ingredients" value="{{old('ingredients') ?? $food->ingredients}}">
                                        <small>*separated by (,). Ex : Salt, Sugar, Etc</small>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="inputHouseNumber" placeholder="Food Price" name="price" value="{{old('price') ?? $food->price}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="inputHouseNumber" placeholder="Food Rate" name="rate" value="{{old('rate') ?? $food->rate}}" step="0.01" max="5">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputType" placeholder="Type" name="types" value="{{old('types') ?? $food->types}}">
                                        <small>*separated by (,). Ex : Recommended, Popular, new_food</small>
                                    </div>
                                    <div class="form-group mb-0 mt-3 d-flex" style="justify-content: space-between">
                                        <div>
                                            <a href="{{route('food.index')}}" class="btn btn-secondary">Cancel</a>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary">Update Food</button>
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