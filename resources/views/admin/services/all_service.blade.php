
@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Home Services</h4>
                <p class="card-title-desc">
                   <a href="{{ route('create.statistic') }}" class="btn btn-outline-primary waves-effect waves-light">Create Statistic <span class="text text-danger">Only It doesn't exist</span> </a>
                </p>

                <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                      <tr>
                        <th>Sl</th>
                        <th>Title</th>
                        <th>Subtile</th>
                        <th>Details </th>
                        <th>Contact link</th>
                        <th>Vegetable </th>
                        <th>Vege D</th>
                        <th>Fruit </th>
                        <th>Fru D </th>
                        <th>Healty </th>
                        <th>hea D </th>
                        <th>Modern </th>
                        <th>Mod D </th>
                        <th>Farmang </th>
                        <th>far D </th>

                        <th>Action</th>
                    </tr>
                    </thead>
                
                
                    <tbody>
                      @foreach ($allservice as $key=> $item)
                        
                      
                      <tr>
                        <td width="5px;">{{ $key+1 }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->subtile }}</td>
                        <td>{{ $item->details }}</td>
                        <td>{{ $item->Contact_link }}</td>
                        <td>{{ $item->Vegetable }}</td>
                        <td>{{ $item->Vegetabler_d }}</td>
                        <td>{{ $item->Fruit }}</td>
                       <td >{{ $item->Fruit_d }}</td>
                       <td >{{ $item->healty }}</td>
                       <td >{{ $item->healty_d }}</td>
                       <td >{{ $item->Modern }}</td>
                       <td >{{ $item->Modern_d }}</td>
                       <td >{{ $item->Farmang }}</td>
                       <td >{{ $item->farming_d }}</td>
                        <td>
                          <a href="{{ route('edit.statistic',$item->id)}}" class="btn btn-warning px-3 radius-30"><i class='fas fa-pen-square' style='font-size:16px;'></i></a>
                          <a href="{{ route('delete.statistic',$item->id)}}" class="btn btn-danger px-3 radius-30" id="delete"><i class='fas fa-trash' style='font-size:16px'></i></a>
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