@extends('templates.admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Hair style
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
            <form action="{{route('admin.user-properties.hair-style.add')}}">
                <input type="submit" value="Add" name="" >
            </form>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Hair style</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hair_style as $hs)
                    <tr class="odd gradeX" align="center">
                        <td>{{$hs->id}}</td>
                        <td>{{$hs->style}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('admin.user-properties.hair-style.delete',$hs->id)}}">Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('admin.user-properties.hair-style.edit',$hs->id)}}">Edit</a></td>
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
