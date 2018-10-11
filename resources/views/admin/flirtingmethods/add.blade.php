@extends('templates.admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="txtName" placeholder="Please Enter Username" />
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control" name="txtPrice" placeholder="Please Enter Password" />
                    </div>
                    <div class="form-group">
                        <label>Intro</label>
                        <textarea class="form-control" rows="3" name="txtIntro"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" rows="3" name="txtContent"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="fImages">
                    </div>
                    <div class="form-group">
                        <label>Product Keywords</label>
                        <input class="form-control" name="txtOrder" placeholder="Please Enter Category Keywords" />
                    </div>
                    <div class="form-group">
                        <label>Product Description</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Product Status</label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="1" checked="" type="radio">Visible
                        </label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="2" type="radio">Invisible
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Product Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
