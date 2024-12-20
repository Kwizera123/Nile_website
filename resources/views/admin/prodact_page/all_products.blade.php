@extends('admin.admin_master')
@section('admin')


<div class="page-content">



  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Products</h4>
                <p class="card-title-desc">
                   <a href="{{ route('add.product') }}" class="btn btn-outline-primary waves-effect waves-light">Add Product</a>
                </p>

                <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Title</th>
                            <th>Descreption</th>
                            <th>Link</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                
                
                    <tbody>
                      @foreach ($product as $key=> $item)
                        
                      
                        <tr>
                            <td width="5px;">{{ $key+1 }}</td>
                            <td width="10px;">{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->link }}</td>
                            <td><img src="{{ asset($item->image) }}" alt="Image" style="width:30px; height:30px"></td>
                            <td>
                              <a href="{{ route('edit.product',$item->id)}}" class="btn btn-warning px-3 radius-30">Edit</a>
                              <a href="{{ route('delete.product',$item->id)}}" class="btn btn-danger px-3 radius-30" id="delete">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->



</div>

@endsection