@extends('templates.admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
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
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($getUser as $user)
                    @php
                        $id = $user->id;
                        $username = $user->username;
                        $email = $user->email;
                        $phone_number = $user->phone_number;
                        $urlDelete = route('admin.user.del',$id);;
                    @endphp
                    @if( $id % 2 == 0 )
                    <tr class="odd gradeX" align="center">
                        <td>{{ $id }}</td>
                        <td>{{ $username }}</td>
                        <td>{{ $email }}</td>
                        <td>{{ $phone_number }}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick=" return confirm('Are you sure you want to delete this user?')" href="{{ $urlDelete }}">Delete</a></td>
                    </tr>
                    @else
                    <tr class="odd gradeX" align="center">
                        <td>{{ $id }}</td>
                        <td>{{ $username }}</td>
                        <td>{{ $email }}</td>
                        <td>{{ $phone_number }}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick=" return confirm('Are you sure you want to delete this user?')" href="{{ $urlDelete }}">Delete</a></td>
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
