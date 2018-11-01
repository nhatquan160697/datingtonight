@extends('templates.admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Picture
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Picture 1</th>
                        <th>Picture 2</th>
                        <th>Picture 3</th>
                        <th>Picture 4</th>
                        <th>Picture 5</th>
                        <th>Name</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($getNamePlace as $item)
                    @php
                        $id = $item->id;
                        $picture1 = $item->picture1;
                        $picture2 = $item->picture2;
                        $picture3 = $item->picture3;
                        $picture4 = $item->picture4;
                        $picture5 = $item->picture5;
                        $name = $item->name_place;
                        $urlEdit = route('admin.datingplaces.edit',$id);
                        $urlDelete = route('admin.datingplaces.delPicture',$id);
                    @endphp
                    @if( $id % 2 == 0 )
                    <tr class="odd gradeX" align="center">
                        <td>{{ $id }}</td>
                        <td>
                            @if($picture1 != '')
                            @php
                                $urlImg1 = '/storage/app/files/datingplaces/dating_place_picture/'.$picture1;
                            @endphp
                            <img src="{{ $urlImg1 }}" alt="This is image" height="80px" width="100px" />
                            @endif
                        </td>
                        <td>
                            @if($picture2 != '')
                            @php
                                $urlImg2 = '/storage/app/files/datingplaces/dating_place_picture/'.$picture2;
                            @endphp
                            <img src="{{ $urlImg2 }}" alt="This is image" height="80px" width="100px" />
                            @endif
                        </td>
                        <td>
                            @if($picture3 != '')
                            @php
                                $urlImg3 = '/storage/app/files/datingplaces/dating_place_picture/'.$picture3;
                            @endphp
                            <img src="{{ $urlImg3 }}" alt="This is image" height="80px" width="100px" />
                            @endif
                        </td>
                        <td>
                            @if($picture4 != '')
                            @php
                                $urlImg4 = '/storage/app/files/datingplaces/dating_place_picture/'.$picture4;
                            @endphp
                            <img src="{{ $urlImg4 }}" alt="This is image" height="80px" width="100px" />
                            @endif
                        </td>
                        <td>
                            @if($picture5 != '')
                            @php
                                $urlImg5 = '/storage/app/files/datingplaces/dating_place_picture/'.$picture5;
                            @endphp
                            <img src="{{ $urlImg5 }}" alt="This is image" height="80px" width="100px" />
                            @endif
                        </td>
                        <td>{{ $name }}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick=" return confirm('Do you want to delete ?')" href="{{ $urlDelete }}">Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="{{ $urlEdit }}">Edit</a></td>
                    </tr>
                    @else
                    <tr class="even gradeC" align="center">
                        <td>{{ $id }}</td>
                        <td>
                            @if($picture1 != '')
                            @php
                                $urlImg1 = '/storage/app/files/datingplaces/dating_place_picture/'.$picture1;
                            @endphp
                            <img src="{{ $urlImg1 }}" alt="This is image" height="80px" width="100px" />
                            @endif
                        </td>
                        <td>
                            @if($picture2 != '')
                            @php
                                $urlImg2 = '/storage/app/files/datingplaces/dating_place_picture/'.$picture2;
                            @endphp
                            <img src="{{ $urlImg2 }}" alt="This is image" height="80px" width="100px" />
                            @endif
                        </td>
                        <td>
                            @if($picture3 != '')
                            @php
                                $urlImg3 = '/storage/app/files/datingplaces/dating_place_picture/'.$picture3;
                            @endphp
                            <img src="{{ $urlImg3 }}" alt="This is image" height="80px" width="100px" />
                            @endif
                        </td>
                        <td>
                            @if($picture4 != '')
                            @php
                                $urlImg4 = '/storage/app/files/datingplaces/dating_place_picture/'.$picture4;
                            @endphp
                            <img src="{{ $urlImg4 }}" alt="This is image" height="80px" width="100px" />
                            @endif
                        </td>
                        <td>
                            @if($picture5 != '')
                            @php
                                $urlImg5 = '/storage/app/files/datingplaces/dating_place_picture/'.$picture5;
                            @endphp
                            <img src="{{ $urlImg5 }}" alt="This is image" height="80px" width="100px" />
                            @endif
                        </td>
                        <td>{{ $name }}</td>
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
