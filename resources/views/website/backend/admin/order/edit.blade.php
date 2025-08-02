@extends('website.backend.master')

@section('content')
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-6">
                <div class="card-header d-flex align-items-center justify-content-between">

                </div>
                <div class="card-body">
                    <form action="{{route('admin.order.update',['id'=>$order->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <p class="text-success">{{session('message')}}</p>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Order total</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  placeholder="Order total" name="order_total" value="{{$order->order_total}}" readonly/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Customer Info </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"   name="name" value="{{$order->customer->full_name}}"  readonly/>

                            </div>
                        </div>


                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Delivery Address</label>
                            <div class="col-sm-10">
                                <textarea name="delivery_address"  class="form-control" placeholder="Enter Delivery Address">{{$order->delivery_address}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message"> Order Status</label>
                            <div class="col-sm-10">
                                <select name="order_status" class="form-control">
                                    <option value="" {{!isset($order->order_status)?'selected':""}} disabled>--Order  Status---</option>
                                    <option value="Pending" {{isset($order) && $order->order_status=="Pending" ?'selectd':''}}>Pending</option>
                                    <option value="Processing" {{isset($order) && $order->order_status=="Processing"? 'selected':''}}>Processing</option>
                                    <option value="Cancel" {{isset($order) && $order->order_status=="Cancel"?'selected':''}}>Cancel</option>
                                    <option value="Completed" {{isset($order) && $order->order_status=="Completed"?'selected':''}}>Completed</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message"> Courier Info</label>
                                <div class="col-sm-10">
                                    <select name="courier_id"  class="form-control">
                                        <option value=""  disabled {{isset($order) && $order->courier_id==null ? 'selected' : ' '}}>--Courier Status---</option>
                                        @foreach($couriers as $courier)

                                         <option value="{{$courier->id}}"  {{ isset($order) && $order->courier_id == $courier->id ? 'selected' : '' }}>{{$courier->name}}</option>
                                        @endforeach



                                    </select>
                                </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update Order Information</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>



@endsection
