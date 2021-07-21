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
                    <div class="col-lg-6">
                        <form action="{{route('update',$data->id)}}" method="post" role="form">
                        @method('put')
                            @csrf
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" class="form-control" name="name" id="" value="{{$data->name}}" placeholder="Tên danh mục...">
                                @error('name')
                                <span style="color:red;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="status" value="1" checked>
                                <label class="form-check-label" for="exampleCheck1">Hiện</label>
                            </div>
                            <div class="form-check my-2">
                                <input type="radio" class="form-check-input" name="status" value="0">
                                <label class="form-check-label" for="exampleCheck1">Ẩn</label>
                            </div>
                            <button type="submit" class="btn btn-success">Thêm</button>
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