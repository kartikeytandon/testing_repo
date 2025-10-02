@extends('layouts.vertical', ['title' => 'Order Details', 'subTitle' => 'Ecommerce'])

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8 col-xl-7">
        <ul class="progressbar ps-0 my-5 pb-5">
            <li class="active">Order Placed</li>
            <li>Packed</li>
            <li>Shipped</li>
            <li>Delivered</li>
        </ul>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-7">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-3">
                    Products From Order #123456
                </h5>
                <div class="table-responsive">
                    <table class="table table-centered table-dashed mb-0">
                        <thead class="table-">
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <!-- end thead -->
                        <tbody>
                            <tr>
                                <td>G15 Gaming Laptop</td>
                                <td>3</td>
                                <td>$240.59</td>
                                <td>$721.77</td>
                            </tr>
                            <tr>
                                <td>
                                    Sony Alpha ILCE 6000Y
                                    24.3 MP Mirrorless
                                    Digital SLR Camera
                                </td>
                                <td>5</td>
                                <td>$135.99</td>
                                <td>$679.95</td>
                            </tr>
                            <tr>
                                <td>
                                    Sony Over-Ear Wireless
                                    Headphone with Mic
                                </td>
                                <td>1</td>
                                <td>$99.49</td>
                                <td>$99.49</td>
                            </tr>
                            <tr>
                                <td>
                                    Adam ROMA USB-C / USB-A
                                    3.1 (2-in-1 Flash Drive)
                                    – 128GB
                                </td>
                                <td>2</td>
                                <td>$350.19</td>
                                <td>700.38</td>
                            </tr>
                        </tbody>
                        <!-- end tbody -->
                    </table>
                    <!-- end table -->
                </div>
                <!-- end table responsive -->
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-3">
                    Products From Order #123456
                </h5>
                <div class="table-responsive text-nowrap table-centered">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <!-- end thead -->
                        <tbody>
                            <tr>
                                <td>Grand Total :</td>
                                <td>$2201.59</td>
                            </tr>
                            <tr>
                                <td>Shipping Charge :</td>
                                <td>FREE</td>
                            </tr>
                            <tr>
                                <td>Estimated tax :</td>
                                <td>$15</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">
                                    Total :
                                </td>
                                <td class="fw-semibold">
                                    $2266.59
                                </td>
                            </tr>
                        </tbody>
                        <!-- end tbody -->
                    </table>
                    <!-- end table -->
                </div>
                <!-- end table responsive -->
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-4">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="float-end">
                    <a href="javascript:void(0);" class="text-primary">
                        <i class="bx bx-edit me-1"></i>
                        Change
                    </a>
                </div>
                <h5 class="card-title mb-3">
                    Shipping Information
                </h5>
                <h5 class="">Alice S. Shepherd</h5>
                <address class="mb-0">
                    4251 Private Lane, <br />
                    Valdosta, GA 31601 <br />
                    <abbr title="phone">Phone :</abbr>
                    229-269-1411 <br />
                    <abbr title="mobile">Mobile :</abbr>
                    740-302-6656
                </address>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-lg-4">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="float-end">
                    <a href="javascript:void(0);" class="text-primary">
                        <i class="bx bx-edit me-1"></i>
                        Change
                    </a>
                </div>
                <h5 class="card-title mb-3">
                    Billing Information
                </h5>
                <p class="mb-1">
                    Payment Type :
                    <span class="text-muted me-2"></span>
                    <b>Credit Card</b>
                </p>
                <!-- <p class="mb-1">Holder Name : <span class="text-muted me-2"></span> <b>Alice S. Shepherd</b></p> -->
                <p class="mb-1">
                    Provider :
                    <span class="text-muted me-2"></span>
                    <b>Visa ending in 4589</b>
                </p>
                <p class="mb-1">
                    Valid Date :
                    <span class="text-muted me-2"></span>
                    <b>21/05</b>
                </p>
                <p class="mb-0">
                    CVV :
                    <span class="text-muted me-2"></span>
                    <b>xxx</b>
                </p>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-lg-4">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="float-end">
                    <a href="javascript:void(0);" class="text-primary">View All Detail</a>
                </div>
                <h5 class="card-title mb-3">
                    Delivery Information
                </h5>
                <div class="text-center">
                    <i class="bx bx-cart h2"></i>
                    <h5>UPS Delivery</h5>
                    <p class="mb-1">
                        Order ID :
                        <span class="text-muted me-2"></span>
                        <b>#123456</b>
                    </p>
                    <p class="mb-0">
                        Payment Mode :
                        <span class="text-muted me-2"></span>
                        <b>COD</b>
                    </p>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection