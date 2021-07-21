@extends('admin.master')
@section('main')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
      <div class="container">
<div class="row">
<div class="col-md-12">

@if(Session::get('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close"  aria-hidden="true">&times;</button>
                        <strong>{{Session::get('success')}}</strong> 
                    </div>
                    @endif
                    

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>status</th>
                            
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @isset($Category)
                    @foreach($Category as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->status}}</td>
                          
                            <td>
                              <p>
                                <a href="{{route('Edit_category',$value->id)}}" class="btn btn-info">sửa</a>
                                
                                <form action="{{route('category.delete',$value->id)}}" method="POST" role="form">
                                  @csrf
                                  @method('delete')
                                  <button type="submit"  class="btn btn-danger">Xóa</button>
                                </form>
                                
                                </p>
                                
                            </td>

                          
                        </tr>
                       
                   
                    @endforeach
                   @endisset
                    </tbody>
                   
                </table>

</div>
</div>
</div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

@stop
            