
@extends('admin.admin_master')
@section('admin')


<div class="page-content">

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Home Features</h4>
                <p class="card-title-desc">
                   <a href="{{ route('add.home.feature') }}" class="btn btn-outline-primary waves-effect waves-light">New Home Feature</a>
                </p>

                <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Feature</th>
                            <th>Why choose us</th>
                            <th>Details</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                
                
                    <tbody>
                      @foreach ($allfeature as $key=> $item)
                        
                      
                        <tr>
                            <td width="5px;">{{ $key+1 }}</td>
                            <td width="10px;">{{ $item->features }}</td>
                            <td>{{ $item->whychooseus }}</td>
                            <td>{{ $item->descreption }}</td>
                            <td><img src="{{ asset($item->image) }}" alt="Image" style="width:30px; height:30px"></td>
                            <td>
                              <a href="{{ route('edit.home.feature',$item->id)}}" class="btn btn-warning px-3 radius-30">Edit</a>
                              <a href="{{ route('delete.home.feature',$item->id)}}" class="btn btn-danger px-3 radius-30" id="delete">Delete</a>
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