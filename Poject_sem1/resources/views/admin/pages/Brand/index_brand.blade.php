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
                    <div class="con-md-6">
                      

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Logo</th>
                                    <th>Status</th>
                                    <th></th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brand as $cl)
                                <tr>
                                    <td>{{$cl->index +1}}</td>
                                    <td>{{$cl->name}}</td>
                                    <td><img src="{{url('uploads')}}/{{$cl->logo}}" alt="" width="100px"></td>
                                    <td>{{$cl->status}}</td>                              
                                    <td>
                                        <a href="{{route('brand.edit',$cl->id)}}" class="btn btn-success">Sửa</a>
                                        <form action="{{route('brand.destroy',$cl->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf

                                            <button href="" class="btn btn-danger">Xóa</button>

                                        </form>
                                    </td>
                                </tr>
                                @endforeach
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