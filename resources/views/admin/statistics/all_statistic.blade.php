@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Home Statics</h4>
                <p class="card-title-desc">
                   <a href="{{ route('create.statistic') }}" class="btn btn-outline-primary waves-effect waves-light">Create Statistic <span class="text text-danger">Only It doesn't exist</span> </a>
                </p>

                <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                      <tr>
                        <th>Sl</th>
                        <th>Our Experience</th>
                        <th>Our Expe No</th>
                        <th>Farm Specialist</th>
                        <th>Farm Spec No</th>
                        <th>Complete Project </th>
                        <th>Complete Proj No </th>
                        <th>Happy Clients </th>
                        <th>Happy Clie No </th>

                        <th>Action</th>
                    </tr>
                    </thead>
                
                
                    <tbody>
                      @foreach ($allstatistic as $key=> $item)
                        
                      
                      <tr>
                        <td width="5px;">{{ $key+1 }}</td>
                        <td>{{ $item->title_1 }}</td>
                        <td>{{ $item->number_1 }}</td>
                        <td>{{ $item->title_2 }}</td>
                        <td>{{ $item->number_2 }}</td>
                        <td>{{ $item->title_3 }}</td>
                        <td>{{ $item->number_3 }}</td>
                        <td>{{ $item->title_4 }}</td>
                       <td >{{ $item->number_4 }}</td>
                        <td>
                          <a href="{{ route('edit.statistic',$item->id)}}" class="btn btn-warning px-3 radius-30">Edit</a>
                          <a href="" class="btn btn-danger px-3 radius-30" id="delete">Delete</a>
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