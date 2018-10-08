@extends('templates.admin.master')
@section('content')
<div id="page-wrapper">
<div id="page-inner">
   <div class="row">
      <div class="col-md-12">
         <h2>Manage Dating Places</h2>
      </div>
   </div>

   <div class="row">
      <div class="col-md-12">
         <!-- Advanced Tables -->
         <div class="panel panel-default">
            <div class="panel-body">
               <div class="table-responsive">
                  <div class="row">
                     <div class="col-sm-6">
                        <a href="{{ route('admin.datingplaces.add') }}" class="btn btn-success btn-md">Add new</a>
                     </div>
                     <div class="col-sm-6" style="text-align: right;width:100%">
                        <form method="POST" action="">
                           <input type="submit" name="ok" value="Tìm kiếm" class="btn btn-warning btn-sm" style="float:right"/>
                           <select class="form-control" name="danhmuc" style="float:right;width:120px;height:30px">
                              <option value="c.name">Danh Mục</option>
                              <option value="counter">Lượt Đọc</option>
                              <option value="p.name" selected>Tên</option>
                           </select>
                           <input type="search" name="search"  class="form-control input-sm" placeholder="Nhập thể loại cần tìm" style="float:right; width: 300px;"/>
                           <div style="clear:both"></div>
                        </form>
                        <br/>
                     </div>
                  </div>
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                     <thead>
                        <tr>
                           <th>ID Dating Places</th>
                           <th>Name</th>
                           <th>City</th>
                           <th>Preview Text</th>
                           <th>Picture</th>
                           <th>Date Create</th>
                           <th width="160px">Settings</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr class="gradeX">
                           <td>tên id</td>
                           <td>ten địa điểm</td>
                           <td>thành phố </td>
                           <td>preview text</td>
                           <td><img src="/files/#" style="height: 60px;width: 60px;"/></td>
                           <td>date create</td>
                           <td class="center">
                              <a href="#" title="" class="btn btn-primary"><i class="fa fa-edit "></i> Add</a>
                              <a href="#" title="" class="btn btn-danger" onclick= "return confirm('bạn có muốn xóa trường này không?')"><i class="fa fa-pencil"></i> Delete</a>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="dataTables_info" id="dataTables-example_info" style="margin-top:27px">Trang 1 của 1</div>
                     </div>
                     <div class="col-sm-6" style="text-align: right;">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                           <ul class="pagination">
                              
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--End Advanced Tables -->
         </div>
      </div>
   </div>
</div>
<!--/. PAGE INNER  -->
@endsection