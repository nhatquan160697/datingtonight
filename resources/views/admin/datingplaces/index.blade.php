@extends('templates.admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dating Places
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Preview</th>
                        <th>Picture</th>
                        <th>View</th>
                        <th>Date Created</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($getItems as $item)
                    @php
                        $id = $item->id_place;
                        $name = $item->name_place;
                        $city = $item->city;
                        $preview = str_limit($item->preview_text,100,'...');
                        $detail = str_limit($item->detail_place,100,'...');
                        $picture = $item->picture;
                        $date_created = $item->date_created;
                        $count = $item->count_number;
                        $urlEdit = route('admin.datingplaces.edit',$id);
                        $urlDelete = route('admin.datingplaces.delete',$id);
                    @endphp
                    @if( $id % 2 == 0 )
                    <tr class="odd gradeX" align="center">
                        <td>{{ $id }}</td>
                        <td>{{ $name }}</td>
                        <td>{{ $city }}</td>
                        <td>{{ $preview }}</td>
                        <td>
                            @if($picture != '')
                            @php
                                $urlImg = '/storage/app/files/datingplaces/'.$picture;
                            @endphp
                            <img src="{{ $urlImg }}" alt="This is image" height="80px" width="100px" />
                            @endif
                        </td>
                        <td>{{ $count }}</td>
                        <td>{{ $date_created }}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick=" return confirm('Do you want to delete ?')" href="{{ $urlDelete }}">Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="{{ $urlEdit }}">Edit</a></td>
                    </tr>
                    @else
                    <tr class="even gradeC" align="center">
                        <td>{{ $id }}</td>
                        <td>{{ $name }}</td>
                        <td>{{ $city }}</td>
                        <td>{{ $preview }}</td>
                        <td>
                            @if($picture != '')
                            @php
                                $urlImg = '/storage/app/files/datingplaces/'.$picture;
                            @endphp
                            <img src="{{ $urlImg }}" alt="This is image" height="80px" width="100px" />
                            @endif
                        </td>
                        <td>{{ $count }}</td>
                        <td>{{ $date_created }}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Do you want to delete ?')" href="{{ $urlDelete }}">Delete</a></td>
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
