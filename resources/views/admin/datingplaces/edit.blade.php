@extends('templates.admin.master')
@section('content')
 <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ route('admin.datingplaces.edit',$getItem->id_place) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="txtName" value="{{ $getItem->name_place }}" />
                    </div>
                    <div class="form-group">
                        <label style="display: block;">City</label>
                        <select name="slcCity">
                            @foreach($getCities as $city)
                            <option value="{{ $city->city }}">{{ $city->city }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Preview</label>
                        <textarea class="form-control" rows="3" name="txtPreview">{{ $getItem->preview_text }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <textarea class="form-control" rows="3" name="txtDetail">{{ $getItem->detail_place }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Picture</label>
                        <input type="file" name="fImages">
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
                    <button type="submit" class="btn btn-default">Product Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
