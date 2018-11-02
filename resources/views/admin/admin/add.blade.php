@extends('templates.admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Administrator
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-lg-7" style="padding-bottom:120px">
                <form role="form" action="{{ route('admin.admin.add') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" placeholder="Please Enter Username" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="txtPassword" placeholder="Please Enter Password" />
                    </div>
                    <div class="form-group">
                        <label>Fullname</label>
                        <input class="form-control" name="txtFullname" placeholder="Please Enter Fullname" />
                    </div>
                    <div class="form-group">
                        <label style="display: block;">Role</label>
                        <select name="slcRole">
                            @foreach($getNameRoles as $role)
                            <option value="{{ $role->id_role }}">{{ $role->name_role }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="1" checked="" type="radio">Visible
                        </label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="2" type="radio">Invisible
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Add administrator</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
