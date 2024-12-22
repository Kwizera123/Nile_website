@extends('admin.admin_master')
@section('admin')


<div class="page-content">

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Home Slide</h4>
                <p class="card-title-desc">
                   <a href="{{ route('add.home.slide') }}" class="btn btn-outline-primary waves-effect waves-light">Add Home slide</a>
                </p>

                <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Title</th>
                            <th>Short Title</th>
                            <th>explore</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                
                
                    <tbody>
                      @foreach ($allhomeslide as $key=> $item)
                        
                      
                        <tr>
                            <td width="5px;">{{ $key+1 }}</td>
                            <td width="10px;">{{ $item->title }}</td>
                            <td>{{ $item->short_title }}</td>
                            <td>{{ $item->explore }}</td>
                            <td><img src="{{ asset($item->home_slide) }}" alt="Image" style="width:30px; height:30px"></td>
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