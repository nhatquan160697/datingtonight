@extends('templates.admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Administrator
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if (Session::has('msg'))
                <p style="color:red; padding:10px; font-size:21px; font-weight: 700;">{{ Session::get('msg') }}</p>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Username</th>
                        <th>Fullname</th>
                        <th>Role</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($getItems as $item)
                    @php
                        $id = $item->id_admin;
                        $username = $item->username;
                        $password = $item->password;
                        $fullname = $item->fullname;
                        $role = $item->name_role;
                        $urlEdit = route('admin.admin.edit',$id);
                        $urlDelete = route('admin.admin.del',$id);
                    @endphp
                    @if( $id % 2 == 0 )
                    <tr class="odd gradeX" align="center">
                        <td>{{ $id }}</td>
                        <td>{{ $username }}</td>
                        <td>{{ $fullname }}</td>
                        <td>{{ $role }}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick=" return confirm('Do you want to delete ?')" href="{{ $urlDelete }}">Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="{{ $urlEdit }}">Edit</a></td>
                    </tr>
                    @else
                    <tr class="odd gradeX" align="center">
                        <td>{{ $id }}</td>
                        <td>{{ $username }}</td>
                        <td>{{ $fullname }}</td>
                        <td>{{ $role }}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick=" return confirm('Do you want to delete ?')" href="{{ $urlDelete }}">Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="{{ $urlEdit }}">Edit</a></td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
