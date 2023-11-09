@extends('layouts.admin_master')

@section('content')

<main style=" background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%);">
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-10" >
                <div class="card bg-primary text-white mb-4" style="height:200px">
                    <div class="card-body" style="text-align:center;font-size:100px ;background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);">Stock</div>
                    <div class="card-footer d-flex align-items-center justify-content-between" style="background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);">
                        <a class="small text-white stretched-link" href="{{ route('all.product') }}">Check Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
           
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4" style="height:200px">
                    <div class="card-body" style="text-align:center;font-size:45px;">Sold Products</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('sold.products') }}">Check Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4" style="height:200px">
                    <div class="card-body" style="text-align:center;font-size:40px; background-image: linear-gradient(to top, #0ba360 0%, #3cba92 100%);">Available Products</div>
                    <div class="card-footer d-flex align-items-center justify-content-between" style="background-image: linear-gradient(to top, #0ba360 0%, #3cba92 100%);">
                        <a class="small text-white stretched-link"  href="{{ route('available.products') }}">Check Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4" style="height:200px">
                    <div class="card-body" style="text-align:center; font-size:40px;background-image: linear-gradient(to top, #f43b47 0%, #453a94 100%);">Pending Orders</div>
                    <div class="card-footer d-flex align-items-center justify-content-between" style="background-image: linear-gradient(to top, #f43b47 0%, #453a94 100%);">
                        <a class="small text-white stretched-link" href="{{ route('pending.orders') }}">Check Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>


        <!-- <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area mr-1"></i>
                        Area Chart Example
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar mr-1"></i>
                        Bar Chart Example
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> -->
</main>
@endsection