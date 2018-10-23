@extends('templates.admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Job Status
                    <small>List</small>
                </h1>
            </div>

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
            
            <!-- /.col-lg-12 -->
            <form action="{{route('admin.user-properties.job-status.add')}}">
                <input type="submit" value="Add" name="" >
            </form>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Job Status</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($job_status as $js)
                    <tr class="odd gradeX" align="center">
                        <td>{{$js->id}}</td>
                        <td>{{$js->status}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('admin.user-properties.job-status.delete',$js->id)}}">Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('admin.user-properties.job-status.edit',$js->id)}}">Edit</a></td>
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
