@extends('templates.admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Flirting Methods
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            <!-- print error message -->
            @if(count($errors)>0)
                <div class="alert-danger">
                         @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                </div>
            @endif

            <!-- print success message -->
            @if(session('success'))
                <div class="alert-success">
                    {{session('success')}}
                </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Flirting Name</th>
                        <th>Preview Text</th>
                        <th>Detail</th>
                        <th>Author</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($flirtingmethods as $fm)
                    <?php
                        $url='/storage/app/files/flirtingmethods/'.$fm->image;
                        $preview_text=str_limit($fm->preview_text,50,'...');
                        $detail_flirting=str_limit($fm->detail_flirting,100,'...');
                    ?>
                        <tr class="odd gradeX" align="center">
                            <td>{{$fm->id}}</td>
                            <td>{{$fm->name_flirting}}</td>
                            <td>{{$preview_text}}</td>
                            <td>{{$detail_flirting}}</td>
                            <td>{{$fm->author}}</td>
                            <td><img src="{{$url}}" alt="This is an image" width="100px" height="80px"></td>
                            <td>{{$fm->date_created}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('admin.flirtingmethods.delete',$fm->id)}}">Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('admin.flirtingmethods.edit',$fm->id)}}">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
