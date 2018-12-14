@extends('templates.admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Flirting Methods
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            <!-- print error message -->
            @if(count($errors)>0)
                <div class="alert-danger">
                    <ul>
                        @foreach($errors->all() as $err)
                            <li>
                                {{$err}}
                            </li>
                        @endforeach
                    </ul>           
                </div>
            @endif

            <!-- print success message -->
            @if(session('success'))
                <p style="color:red; padding:10px;font-size: 21px;font-weight: 700;">{{session('success')}}</p>
            @endif
                <form action="{{route('admin.flirtingmethods.edit',$flirtingmethods->id)}}" method="POST" 
                enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label>Flirting Name</label>
                        <input class="form-control" name="name_flirting" placeholder="Please Enter Flirting Name" value="{{$flirtingmethods->name_flirting}}" />
                    </div>
                    <div class="form-group">
                        <label>Preview Text</label>
                        <input class="form-control" name="preview_text" placeholder="Please Enter Preview Text" value="{{$flirtingmethods->preview_text}}"/>
                    </div>
                    <div class="form-group">
                        <label style="display: block;">Gender</label>
                        <select name="gender">
                            @foreach($gender as $gd)
                            @if($gd->id==$flirtingmethods->id_gender)
                                <option selected="selected" value="{{ $gd->id }}">{{ $gd->gender }}</option>
                            @endif
                                <option value="{{ $gd->id }}">{{ $gd->gender }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <textarea class="form-control" rows="3" name="detail_flirting" placeholder="Please Enter Preview Text" >{{$flirtingmethods->detail_flirting}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input class="form-control" rows="3" name="author" placeholder="Please Enter Author" value="{{$flirtingmethods->author}}"/>
                    </div>
                    <div class="form-group">
                        <label>Picture</label>
                        <input type="file" name="Image">
                    </div>
                    <button type="submit" class="btn btn-default">Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
