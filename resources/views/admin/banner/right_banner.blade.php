@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Right Banner</h4>
                <p class="card-title-desc">
                   <a href="{{ route('add.right.banner') }}" class="btn btn-outline-info waves-effect waves-light">Create Banner <span class="text text-danger">Only It doesn't exist</span> </a>
                </p>

                <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Title </th>
                            <th>Detail Right</th>
                            <th>Read More</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                
                
                    <tbody>
                      @foreach ($rightbanner as $key=> $item)
                        
                      
                        <tr>
                            <td width="3px;">{{ $key+1 }}</td>
                            <td width="10px;">{{ $item->title_article_two }}</td>
                            <td width="10px;">{{ $item->details_article_two }}</td>
                            <td>{{ $item->readmore_article_two }}</td>
                            <td><img src="{{ (!empty($item->image_two))? url($item->image_two):url('upload/no_image.jpg') }}" alt="Image" style="width:30px; height:30px"></td>
                            <td>
                              <a href="" class="btn btn-warning px-3 radius-30">Edit</a>
                              {{-- <a href="{{ route('delete.about',$item->id)}}" class="btn btn-danger px-3 radius-30" id="delete">Delete</a> --}}
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