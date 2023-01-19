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
                            <li class="breadcrumb-item active" aria-current="page">Transactions</li>
                        </ol>
                    </div>
                </div>
                <!-- /breadcrumb -->



                <!-- row  -->
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h4 class="card-title">Transaction List</h4>
                                </div>
                            </div>
                            <div class="card-body pt-0 example1-table">
                                <div class="table-responsive">
                                    <table class="table  table-bordered text-nowrap mb-0" id="example1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th>FOOD</th>
                                                <th>USER</th>
                                                <th>QUANTITY</th>
                                                <th>TOTAL</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transaction as $item)
                                                <tr>
                                                    <td class="text-center">{{$item->id}}</td>
                                                    <td>{{$item->food->name}}</td>
                                                    <td>{{$item->user->name}}</td>
                                                    <td>{{$item->quantity}}</td>
                                                    <td>{{number_format($item->total)}}</td>
                                                    <td>{{$item->status}}</td>
                                                    <td>
                                                        <a href="{{route('transaction.show', $item->id)}}" class="btn btn-primary">Show</a>
                                                        <form action="{{route('transaction.destroy', $item->id) }}" method="POST">
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