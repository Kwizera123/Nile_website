@extends('admin.admin_master')
@section('admin')


<div class="page-content">



  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Products</h4>
                <p class="card-title-desc">
                   <button type="button" class="btn btn-outline-primary waves-effect waves-light">Add Product</button>
                </p>

                <table id="selection-datatable" class="table dt-responsive nowrap w-100">
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
                
                
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                      

                    </tbody>
                </table>
            
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->



</div>

@endsection