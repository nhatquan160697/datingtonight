@extends('templates.admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dating Tonight
                    <small>Picture</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form role="form" action="{{ route('admin.datingplaces.picture') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label style="display: block;">Dating Place Name</label>
                        <select name="slcCity">
                            @foreach($getNamePlaces as $name)
                            <option value="{{ $name->id_place }}">{{ $name->name_place }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Picture 1</label>
                        <input type="file" name="fImages1">
                    </div>
                    <div class="form-group">
                        <label>Picture 2</label>
                        <input type="file" name="fImages2">
                    </div>
                    <div class="form-group">
                        <label>Picture 3</label>
                        <input type="file" name="fImages3">
                    </div>
                    <div class="form-group">
                        <label>Picture 4</label>
                        <input type="file" name="fImages4">
                    </div>
                    <div class="form-group">
                        <label>Picture 5</label>
                        <input type="file" name="fImages5">
                    </div>
                    <button type="submit" class="btn btn-default">Place Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
