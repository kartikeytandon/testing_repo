@extends('layouts.vertical', ['title' => 'Orders List', 'subTitle' => 'Ecommerce'])

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between">
                    <div class="search-bar">
                        <span><i class="bx bx-search-alt"></i></span>
                        <input type="search" class="form-control" id="search" placeholder="Search ..." />
                    </div>

                    <div class="d-flex flex-wrap gap-2 justify-content-end">
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-sort me-1"></i>Filter
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:void(0);" class="dropdown-item">By Date</a>
                                <a href="javascript:void(0);" class="dropdown-item">By Order ID</a>
                                <a href="javascript:void(0);" class="dropdown-item">By Status</a>
                            </div>
                        </div>
                        <a href="#!" class="btn btn-primary">
                            <i class="bx bx-plus me-1"></i>Create Contact
                        </a>
                    </div>
                </div>
            </div>
            <!-- end card body -->
            <div class="table-responsive table-centered">
                <table class="table text-nowrap mb-0">
                    <thead class="bg-light bg-opacity-50">
                        <tr>
                            <th>Order ID.</th>
                            <th>Date</th>
                            <th>Product</th>
                            <th>Customer Name</th>
                            <th>Email ID</th>
                            <th>Phone No.</th>
                            <th>Address</th>
                            <th>Payment Type</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <!-- end thead-->
                    <tbody>
                        <tr>
                            <td>
                                <a href="{{ route('third', ['apps', 'ecommerce', 'order-detail'])}}">#RB5625</a>
                            </td>
                            <td>23/07/2021</td>
                            <td>
                                <img src="/images/products/product-1(1).png" alt="product-1(1)" class="img-fluid avatar-sm" />
                            </td>
                            <td>
                                <a href="#!">Anna M. Hines</a>
                            </td>
                            <td>anna.hines@mail.com</td>
                            <td>(+1)-555-1564-261</td>
                            <td>Burr Ridge/Illinois</td>
                            <td>Credit Card</td>
                            <td>
                                <i class="bx bxs-circle text-success me-1"></i>Completed
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ route('third', ['apps', 'ecommerce', 'order-detail'])}}">#RB0025</a>
                            </td>
                            <td>06/09/2018</td>
                            <td>
                                <img src="/images/products/product-2.png" alt="product-2" class="img-fluid avatar-sm" />
                            </td>
                            <td>
                                <a href="#!">Candice F. Gilmore</a>
                            </td>
                            <td>
                                candice.gilmore@mail.com
                            </td>
                            <td>(+257)-755-5532-588</td>
                            <td>Roselle/Illinois</td>
                            <td>Credit Card</td>
                            <td>
                                <i class="bx bxs-circle text-primary me-1"></i>Processing
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ route('third', ['apps', 'ecommerce', 'order-detail'])}}">#RB9064</a>
                            </td>
                            <td>12/07/2019</td>
                            <td>
                                <img src="/images/products/product-3.png" alt="product-3" class="img-fluid avatar-sm" />
                            </td>
                            <td>
                                <a href="#!">Vanessa R. Davis</a>
                            </td>
                            <td>vanessa.davis@mail.com</td>
                            <td>(+1)-441-5558-183</td>
                            <td>Wann/Oklahoma</td>
                            <td>Pay Pal</td>
                            <td>
                                <i class="bx bxs-circle text-danger me-1"></i>Cancel
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ route('third', ['apps', 'ecommerce', 'order-detail'])}}">#RB9652</a>
                            </td>
                            <td>31/12/2021</td>
                            <td>
                                <img src="/images/products/product-4.png" alt="product-4" class="img-fluid avatar-sm" />
                            </td>
                            <td>
                                <a href="#!">Judith H. Fritsche</a>
                            </td>
                            <td>judith.fritsche.com</td>
                            <td>(+57)-305-5579-759</td>
                            <td>SULLIVAN/Kentucky</td>
                            <td>Credit Card</td>
                            <td>
                                <i class="bx bxs-circle text-success me-1"></i>Completed
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ route('third', ['apps', 'ecommerce', 'order-detail'])}}">#RB5984</a>
                            </td>
                            <td>01/05/2018</td>
                            <td>
                                <img src="/images/products/product-5.png" alt="product-5" class="img-fluid avatar-sm" />
                            </td>
                            <td>
                                <a href="#!">Peter T. Smith</a>
                            </td>
                            <td>peter.smith@mail.com</td>
                            <td>(+33)-655-5187-93</td>
                            <td>Yreka/California</td>
                            <td>Pay Pal</td>
                            <td>
                                <i class="bx bxs-circle text-success me-1"></i>Completed
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ route('third', ['apps', 'ecommerce', 'order-detail'])}}">#RB3625</a>
                            </td>
                            <td>12/06/2020</td>
                            <td>
                                <img src="/images/products/product-6.png" alt="product-6" class="img-fluid avatar-sm" />
                            </td>
                            <td>
                                <a href="#!">Emmanuel J. Delcid</a>
                            </td>
                            <td>
                                emmanuel.delicid@mail.com
                            </td>
                            <td>(+30)-693-5553-637</td>
                            <td>Atlanta/Georgia</td>
                            <td>Pay Pal</td>
                            <td>
                                <i class="bx bxs-circle text-primary me-1"></i>Processing
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ route('third', ['apps', 'ecommerce', 'order-detail'])}}">#RB8652</a>
                            </td>
                            <td>14/08/2017</td>
                            <td>
                                <img src="/images/products/product-1(2).png" alt="product-1(2)" class="img-fluid avatar-sm" />
                            </td>
                            <td>
                                <a href="#!">William J. Cook</a>
                            </td>
                            <td>william.cook@mail.com</td>
                            <td>(+91)-855-5446-150</td>
                            <td>Rosenberg/Texas</td>
                            <td>Credit Card</td>
                            <td>
                                <i class="bx bxs-circle text-primary me-1"></i>Processing
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ route('third', ['apps', 'ecommerce', 'order-detail'])}}">#RB1002</a>
                            </td>
                            <td>13/07/2018</td>
                            <td>
                                <img src="/images/products/product-1(3).png" alt="product-1(3)" class="img-fluid avatar-sm" />
                            </td>
                            <td>
                                <a href="#!">Martin R. Peters</a>
                            </td>
                            <td>martin.peters@mail.com</td>
                            <td>(+61)-455-5943-13</td>
                            <td>Youngstown/Ohio</td>
                            <td>Credit Card</td>
                            <td>
                                <i class="bx bxs-circle text-danger me-1"></i>Cancel
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ route('third', ['apps', 'ecommerce', 'order-detail'])}}">#RB9622</a>
                            </td>
                            <td>18/11/2019</td>
                            <td>
                                <img src="/images/products/product-3.png" alt="product-3" class="img-fluid avatar-sm" />
                            </td>
                            <td>
                                <a href="#!">Paul M. Schubert</a>
                            </td>
                            <td>paul.schubert@mail.com</td>
                            <td>(+61)-035-5531-64</td>
                            <td>Austin/Texas</td>
                            <td>Google Pay</td>
                            <td>
                                <i class="bx bxs-circle text-success me-1"></i>Completed
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ route('third', ['apps', 'ecommerce', 'order-detail'])}}">#RB8745</a>
                            </td>
                            <td>07/03/2019</td>
                            <td>
                                <img src="/images/products/product-4.png" alt="product-4" class="img-fluid avatar-sm" />
                            </td>
                            <td>
                                <a href="#!">Janet J. Champine</a>
                            </td>
                            <td>janet.champine@mail.com</td>
                            <td>(+880)-115-5592-916</td>
                            <td>Nashville/Tennessee</td>
                            <td>Google Pay</td>
                            <td>
                                <i class="bx bxs-circle text-primary me-1"></i>Processing
                            </td>
                        </tr>
                    </tbody>
                    <!-- end tbody -->
                </table>
                <!-- end table -->
            </div>
            <!-- table responsive -->
            <div class="align-items-center justify-content-between row g-0 text-center text-sm-start p-3 border-top">
                <div class="col-sm">
                    <div class="text-muted">
                        Showing
                        <span class="fw-semibold">10</span>
                        of
                        <span class="fw-semibold">90,521</span>
                        orders
                    </div>
                </div>
                <div class="col-sm-auto mt-3 mt-sm-0">
                    <ul class="pagination pagination-rounded m-0">
                        <li class="page-item">
                            <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a>
                        </li>
                        <li class="page-item active">
                            <a href="#" class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>

@endsection