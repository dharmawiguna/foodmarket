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
                        <div class="card">
                            <div class="card-header" style="display: flex;justify-content: space-between">
                                <div>
                                    <h4 class="card-title">Food List</h4>
                                </div>
                                <div>
                                    <a href="{{route('food.create')}}" class="btn btn-primary">Add Foods</a>
                                </div>
                            </div>
                            <div class="card-body pt-0 example1-table">
                                <div class="table-responsive">
                                    <table class="table  table-bordered text-nowrap mb-0" id="example1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th>NAME</th>
                                                <th>PRICE</th>
                                                <th>RATE</th>
                                                <th>TYPES</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($food as $item)
                                                <tr>
                                                    <td class="text-center">{{$item->id}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{number_format($item->price)}}</td>
                                                    <td>{{$item->rate}}</td>
                                                    <td>{{$item->types}}</td>
                                                    <td>
                                                        <a href="{{route('food.edit', $item->id)}}" class="btn btn-primary">Edit</a>
                                                        <form action="{{route('food.destroy', $item->id) }}" method="POST">
                                                            {!! method_field('delete') . csrf_field() !!}
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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