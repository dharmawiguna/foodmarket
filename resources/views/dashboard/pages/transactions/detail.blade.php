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

                <!-- row opened -->
					 <div class="row">
						<div class="col-lg-12 col-xl-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<!-- Shopping Cart-->
									<div class="product-details table-responsive text-nowrap">
										<table class="table table-bordered table-hover mb-0 text-nowrap">
											<thead>
												<tr>
													<th class="text-start">FOOD</th>
													<th class="w-150">USER</th>
													<th>PRIZE</th>
													<th>PAYMENT URL</th>
													<th>STATUS</th>
													<th>ACTION (change status)</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="media">
															<div class="card-aside-img">
																<img src="{{$transaction->food->picturePath}}" alt="img" class="h-60 w-60">
															</div>
															<div class="media-body">
																<div class="card-item-desc mt-0">
																	<h6 class="font-weight-semibold mt-0 text-uppercase">{{$transaction->food->name}}</h6>
																	<dl class="card-item-desc-1">
																	  <dt>Quantity: </dt>
																	  <dd>{{$transaction->quantity}}</dd>
																	</dl>
																	<dl class="card-item-desc-1">
																	  <dt>Ingredients: </dt>
																	  <dd>{{$transaction->ingredients}}</dd>
																	</dl>
																	<dl class="card-item-desc-1">
																	  <dt>Rate: </dt>
																	  <dd>{{$transaction->rate}}</dd>
																	</dl>
																</div>
															</div>
														</div>
													</td>
													<td>
														<div class="media">
															<div class="media-body">
																<div class="card-item-desc mt-0">
																	<h6 class="font-weight-semibold mt-0 text-uppercase">{{$transaction->user->name}}</h6>
																	<dl class="card-item-desc-1">
																	  <dt>Email: </dt>
																	  <dd>{{$transaction->user->email}}</dd>
																	</dl>
																	<dl class="card-item-desc-1">
																	  <dt>Phone: </dt>
																	  <dd>{{$transaction->user->phone}}</dd>
																	</dl>
																	<dl class="card-item-desc-1">
																	  <dt>Address: </dt>
																	  <dd>{{$transaction->user->address}}</dd>
																	</dl>
																	<dl class="card-item-desc-1">
																	  <dt>City: </dt>
																	  <dd>{{$transaction->user->city}}</dd>
																	</dl>
																</div>
															</div>
														</div>
													</td>
                                                    <td class="text-center text-lg text-medium font-weight-bold  tx-15">$80.00</td>
                                                    <td class="text-center text-lg text-medium tx-15">{{$transaction->payment_url}}</td>
													<td class="text-center">
                                                        @if($transaction->status == 'ON_DELIVERY')
                                                            <span class="badge bg-info p-1">{{$transaction->status}}</span>
                                                        @elseif($transaction->status == 'DELIVERED')
                                                            <span class="badge bg-success p-1">{{$transaction->status}}</span>
                                                        @else
                                                            <span class="badge bg-danger p-1">{{$transaction->status}}</span>
                                                        @endif
                                                    </td>
													<td class="text-center">
													   <a href="{{route('transaction.changeStatus', ['id' => $transaction->id, 'status' => 'ON_DELIVERY' ])}}" class="btn btn-sm btn-info" href="javascript:void(0);" data-bs-toggle="tooltip" title="" >On Delivery</a>
													   <a href="{{route('transaction.changeStatus', ['id' => $transaction->id, 'status' => 'DELIVERED' ])}}" class="btn btn-sm btn-success" href="javascript:void(0);" data-bs-toggle="tooltip" title="" >Delivered</a>
													   <a href="{{route('transaction.changeStatus', ['id' => $transaction->id, 'status' => 'CANCELLED' ])}}" class="btn btn-sm btn-danger" href="javascript:void(0);" data-bs-toggle="tooltip" title="" >Cancelled</a>
													</td>
								                 </tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
                        </div>
					</div>
					<!-- row closed -->

                

            </div>
            <!-- /Container -->
        </div>
        <!-- MAIN-CONTENT CLOSED -->
@endsection