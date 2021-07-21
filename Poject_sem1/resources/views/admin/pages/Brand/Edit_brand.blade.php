@extends('admin.master')

@section('main')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
        <h1>
            Blank page
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section> -->

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->    
        <div class="box">


            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                       
                     
                     
                     <form action="{{route('brand.update',$brand->id)}}" method="POST" role="form"   enctype="multipart/form-data">
                     @method('PUT')
                     @csrf
                         <legend>Form title</legend>
                         <div class="form-group">
                            <label for="">Danh muc</label>
                             
                             <select name="category_id" id="input" class="form-control" required="required">
                             
                                 <option value="">danh mục</option>
                                 
                                @foreach($data as $val)
                                <option value="{{$val->id}}">{{$val->name}}</option>
                                @endforeach
                                
                             </select>
                             
                          
                        </div>
                     
                         <div class="form-group">
                             <label for="">Name</label>
                             <input type="text" class="form-control" id="" placeholder="Input field" name="name" value="{{$brand->name}}">
                         </div>
                         <div class="form-group">
                            <label for="">Logo</label>
                            <input type="file" class="form-control" id="" placeholder="Input field" name="logo" value="{{$brand->logo}}">
                        </div>  <div class="form-group">
                            <label for="">status</label>
                            <input type="text" class="form-control" id="" placeholder="Input field" name="status" value="{{$brand->status}}">
                        </div>
                     
                     
                         
                     
                         <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                     
                       
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