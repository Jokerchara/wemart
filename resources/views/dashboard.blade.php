@extends('layout.fe')
@section('content')



<div class="page-body">
    <div class="container-fluid">        
      <div class="page-title">
        <div class="row">
          <div class="col-1">
          </div>
        </div>
      </div>
    </div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row second-chart-list third-news-update">
        <div class="col-xl-20">
          <div class="card">
            <div class="card-header" style="margin-top: 0px">
              <h5>Partners Detail On Map</h5><span>Only pin my location</span>
            </div>
            <div class="card-body">
              <div class="map-js-height" id="map-canvas"></div>
            </div>
          </div>
        </div>              
      <div class="col-xl-8 xl-80 dashboard-sec box-col-10">
        <div class="card earning-card">
          <div class="card-body p-0">
            <div class="row m-0">
              <div class="col-xl-13 p-1">
                <div class="chart-right">
                  <div class="row m-0 p-tb">
                    <div class="col-xl-8 col-md-2 col-sm-8 col-12 p-0">
                      <div class="inner-top-left">
                        <h4>Yearly Partners Activity</h4>
                      </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-4 col-12 p-0 justify-content-end">
                      <div class="inner-top-right">
                        <ul class="d-flex list-unstyled justify-content-end">
                            <div class="dropdown">
                                <button class="btn-outline-light btn-air-light btn-xs txt-dark btn dropdown-toggle" id="dropdownMenuButton"type="button" data-bs-toggle="dropdown" aria-expanded="false">Details</button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Details</a><a class="dropdown-item" href="#">Month</a><a class="dropdown-item" href="#">Day</a></div>
                              </div>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-12">
                      <div class="card-body p-0">
                        <div class="current-sale-container">
                          <div id="area-spaline"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 xl-20 appointment-sec box-col-6">
        <div class="row"> 
          <div class="col-xl-15 appointment">
            <div class="card">
              <div class="card-header card-no-border">
                <div class="header-top">
                  <h5 class="m-0">Top Products</h5>
                </div>
              </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th class="text-end">Total Orders</th>				
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Produk ABC</td>
                            <td class="text-end">2.233.023</td>
                        </tr>
                        <tr>
                            <td>Produk DEF</td>
                            <td class="text-end">1.525.900</td>
                        </tr>
                        <tr>
                            <td>Produk GHI</td>
                            <td class="text-end">1.495.250</td>
                        </tr>
                        <tr>
                            <td>Produk JKLM</td>
                            <td class="text-end">1.205.890</td>
                        </tr>
                        <tr>
                            <td>Produk NOP</td>
                            <td class="text-end">924.412</td>
                        </tr>
                    </tbody>
                </table>
                    <center><div class=" btn btn-outline-secondary-2x" style="margin-top: 20px">More Detail</div></center>
                      
            </div>
        </div>
    </div>
</div>
</div>
    <div class="col-xl-8 xl-80 dashboard-sec box-col-10">
        <div class="card earning-card">
            <div class="card-body p-0">
                <div class="card-header card-no-border">
                    <div class="header-top">
                        <h5 class="m-0">Orders Activity</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-resposive">
                        <table class="display" id="basic-2">
                            <thead>
                                <tr>
                                    <th><center>Partners name</center></th>
                                    <th><center>No. Id Partners</center></th>
                                    <th><center>Orders</center></th>
                                    <th><center>Total</center></th>
                                    <th><center>Date</center></th>
                                    <th><center>Status</center></th>
                                    <th><center>Option</center></th>				
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Produk ABC</td>
                                    <td>No.11320135</td>
                                    <td><center><i class="icofont icofont-paper"></i></center></td>
                                    <td>Rp1.205.890</td>
                                    <td>10/07/2021</td>
                                    <td><center><label class="badge badge-light-success">Done</label></center></td>
                                    <td><div class="dropdown" >
                                        <button class="btn-air-light txt-dark btn dropdown-toggle" id="dropdownMenuButton"type="button" data-bs-toggle="dropdown" aria-expanded="false">Details</button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Details</a><a class="dropdown-item" href="#">Month</a><a class="dropdown-item" href="#">Day</a></div>
                                      </div></td>
                                </tr>
                                <tr>
                                    <td>Produk DEF</td>
                                    <td>No.11344135</td>
                                    <td><center><i class="icofont icofont-paper"></i></center></td>
                                    <td>Rp1.205.890</td>
                                    <td>10/01/2023</td>
                                    <td><center><label class="badge badge-light-secondary">On Process</label></center></td>
                                    <td><div class="dropdown">
                                        <button class="btn-air-light txt-dark btn dropdown-toggle" id="dropdownMenuButton"type="button" data-bs-toggle="dropdown" aria-expanded="false">Details</button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Details</a><a class="dropdown-item" href="#">Month</a><a class="dropdown-item" href="#">Day</a></div>
                                      </div></td>
                                </tr>
                                <tr>
                                    <td>Produk GHI</td>
                                    <td>No.11320441</td>
                                    <td><center><i class="icofont icofont-paper"></i></center></i></td>
                                    <td>Rp1.205.890</td>
                                    <td>10/12/2021</td>
                                    <td><center><label class="badge badge-light-secondary">On Process</label></center></td>
                                    <td><div class="dropdown">
                                        <button class="btn-air-light txt-dark btn dropdown-toggle" id="dropdownMenuButton"type="button" data-bs-toggle="dropdown" aria-expanded="false">Details</button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Details</a><a class="dropdown-item" href="#">Month</a><a class="dropdown-item" href="#">Day</a></div>
                                      </div></td>
                                </tr>
                                <tr>
                                    <td>Produk JKLM</td>
                                    <td>No.11320514</td>
                                    <td><center><i class="icofont icofont-paper"></i></center></td>
                                    <td>Rp1.205.890</td>
                                    <td>01/03/2023</td>
                                    <td><center><label class="badge badge-light-secondary">On Process</label></center></td>
                                    <td><div class="dropdown">
                                        <button class=" btn-air-light txt-dark btn dropdown-toggle" id="dropdownMenuButton"type="button" data-bs-toggle="dropdown" aria-expanded="false">Details</button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Details</a><a class="dropdown-item" href="#">Month</a><a class="dropdown-item" href="#">Day</a></div>
                                      </div></td>
                                </tr>
                                <tr>
                                    <td>Produk NOP</td>
                                    <td>No.11326617</td>
                                    <td><center><i class="icofont icofont-paper"></i></center></td>
                                    <td>Rp1.205.890</td>
                                    <td>10/02/2023</td>
                                    <td><center><label class="badge badge-light-secondary">On Process</label></center></td>
                                    <td><div class="dropdown">
                                        <button class="btn-air-light txt-dark btn dropdown-toggle" id="dropdownMenuButton"type="button" data-bs-toggle="dropdown" aria-expanded="false">Details</button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Details</a><a class="dropdown-item" href="#">Month</a><a class="dropdown-item" href="#">Day</a></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div>
    </div>
      <div class="col-xl-4 xl-20 appointment-sec box-col-6">
        <div class="card">
            <div class="card-header">
              <h5>Top Partners</h5></div>
            <div class="table-responsive">
              <table class="table-sm" style="margin-bottom: 20px">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Partners Name & No.ID</th>				
                    <th>Yearly Omset</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="../assets/albi/wemart.ico" alt="image" height="50" width="50"></td>
                    <td class="text-end">2.233.023</td>
                    <td>1.22M</td>
                </tr>
                <tr>
                    <td><img src="../assets/albi/wemart.ico" alt="image" height="50" width="50"></td>
                    <td class="text-end">1.525.900</td>
                    <td>1.21M</td>
                </tr>
                <tr>
                    <td><img src="../assets/albi/wemart.ico" alt="image" height="50" width="50"></td>
                    <td class="text-end">1.495.250</td>
                    <td>9276JT</td>
                </tr>
                <tr>
                    <td><img src="../assets/albi/wemart.ico" alt="image" height="50" width="50"></td>
                    <td class="text-end">1.205.890</td>
                    <td>960JT</td>
                </tr>
                <tr>
                    <td><img src="../assets/albi/wemart.ico" alt="image" height="50" width="50"></td>
                    <td class="text-end">924.412</td>
                    <td>952JT</td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
    </div>
</div>
<!-- Container-fluid Ends-->
</div>

@endsection