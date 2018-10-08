@extends('templates.admin.master')
@section('content')
<div id="page-wrapper">
   <div id="page-inner">
      <div class="row">
         <div class="col-md-12">
            <h2>Add new Dating Places</h2>
         </div>
      </div>
      <!--/. ROW  -->
      <hr/>
      <div class="row">
         <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
               <div class="panel-body">
                  <div class="row">
                     <div class="col-md-12">
                        <form role="form" name="form" class="form" method="POST" enctype="multipart/form-data">
                           <div class="form-group">
                              <label>Name Place</label>
                              <input type="text" name="name_places" class="form-control" value=""/>
                              <label>City</label>
                              <select class="form-control" name="city" >
                                 <option value="">Đà Nẵng</option>
                              </select>
                              <label>Preview text</label>
                              <textarea class="form-control" rows="3" name="preview_text"></textarea>
                              <label>Picture</label>
                              <input type="file" name="picture" id="picture"/>
                              <label>Detail place</label>
                              <textarea class="form-control" id="detail_place" rows="5" name="chitiet"></textarea>
                           </div>
                           <button type="submit" name="submit" class="btn btn-success btn-md">Add</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End Form Elements -->
         </div>
      </div>
      <!--/. ROW  -->
   </div>
   <!--/. PAGE INNER  -->
</div>
<!--/. PAGE WRAPPER  -->
@endsection