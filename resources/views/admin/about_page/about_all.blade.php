@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">About All</h4>
                <p class="card-title-desc">
                   <a href="{{ route('add.about') }}" class="btn btn-outline-primary waves-effect waves-light">Add New About Us <span class="text text-danger"> Only if doesn't exist</span>. </a>
                </p>

                <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Title</th>
                            <th>Short Title</th>
                            <th>Descreption</th>
                            <th>Small Title</th>
                            <th>Award</th>
                            <th>Details</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                
                
                    <tbody>
                      @foreach ($allabout as $key=> $item)
                        
                      
                        <tr>
                            <td width="3px;">{{ $key+1 }}</td>
                            <td width="10px;">{{ $item->title }}</td>
                            <td width="10px;">{{ $item->short_title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->small_title }}</td>
                            <td>{{ $item->award }}</td>
                            <td>{{ $item->details }}</td>
                            <td><img src="{{ (!empty($item->about_image))? url($item->about_image):url('upload/no_image.jpg') }}" alt="Image" style="width:30px; height:30px"></td>
                            <td>
                              <a href="{{ route('about.page',$item->id) }}" class="btn btn-warning px-3 radius-30">Edit</a>
                              <a href="{{ route('delete.about',$item->id)}}" class="btn btn-danger px-3 radius-30" id="delete">Delete</a>
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