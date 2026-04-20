@extends('adminlte::page')

@section('title', 'Menu')

@section('content_header')
    <h1>Menu</h1>
@stop

@section('content')
 <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Menu Category Management</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-success btn-sm add-modal-record" data-toggle="modal" data-target="#AddForm">
                    <i class="fas fa-plus"></i> Add New
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Category</th>
                      <th style="width: 40px">Tools</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                      <td>1</td>
                      <td>sfasdfsaf</td>
                        <td class="u-buttons">
                          <div class="btn-group-vertical">
                          <a href="#" class="edit-modal-record btn btn-info" data-id="1" data-toggle="modal" data-target="#EditForm">
                        <span class="fas fa-edit"></span></a>
                        <a href="#" class="delete-modal-record btn btn-danger" data-id="1"  data-toggle="modal" data-target="#DeleteForm">
                        <span class="fas fa-trash"></span></a> 
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
      </div>
  <div class="modal fade" id="AddForm" >
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form-horizontal" role="form" method="post" action="{{url('/store_menu')}}">
             @csrf
        <div class="modal-body">
          
              <div class="form-group">
                  <label class="control-label col-sm-4" for="a_name">Menu Name:</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="a_name" name="a_name" placeholder="" value="" maxlength="255">
                    </div>
              </div>
              
               <div class="form-group">
                  <label class="control-label col-sm-4" for="a_description">Description:</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" id="a_description" name="a_description" rows="5"></textarea>
                    </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control select2" style="width: 100%;" id="a_categ" name="a_categ">
                    <option selected="selected">Starter</option>
                    <option value="Starter">Starter</option>
                    <option value="Break Fast">Break Fast</option>
                    <option value="Lunch">Lunch</option>
                    <option value="Dinner">Dinner</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-4" for="a_price">Price:</label>
                    <div class="col-sm-12">
                      <input type="number" class="form-control" id="a_price" name="a_price" placeholder="" value="" maxlength="255">
                    </div>
              </div>
               <div class="form-group">
                    <label for="a_menuphoto">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="a_menuphoto">
                        <label class="custom-file-label" for="a_menuphoto">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

        </div>
      </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-success" ><span id="" class='fas fa-check'></span> Save</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class='glyphicon glyphicon-remove'></span> Close</button>
          </div>
                 </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="EditForm" >
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Record</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form-horizontal" role="form" method="post" action="{{url('/update_menu')}}">
             @csrf
        <div class="modal-body">
          <div class="form-group">
                  <label class="control-label col-sm-4" for="ea_name">Menu Name:</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="ea_name" name="ea_name" placeholder="" value="" maxlength="255">
                    </div>
              </div>
              
               <div class="form-group">
                  <label class="control-label col-sm-4" for="ea_description">Description:</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" id="ea_description" name="ea_description" rows="5"></textarea>
                    </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control select2" style="width: 100%;" id="ea_categ" name="ea_categ">
                    <option selected="selected">Starter</option>
                    <option value="Starter">Starter</option>
                    <option value="Break Fast">Break Fast</option>
                    <option value="Lunch">Lunch</option>
                    <option value="Dinner">Dinner</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-4" for="a_price">Price:</label>
                    <div class="col-sm-12">
                      <input type="number" class="form-control" id="a_price" name="a_price" placeholder="" value="" maxlength="255">
                    </div>
              </div>
               <div class="form-group">
                    <label for="ea_menuphoto">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="ea_menuphoto">
                        <label class="custom-file-label" for="ea_menuphoto">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

        </div>
        </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-success" ><span id="" class='fas fa-check'></span> Save Changes</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class='glyphicon glyphicon-remove'></span> Close</button>
          </div>
                 </form>
        </div>
      </div>
    </div>
     <div class="modal fade" id="DeleteForm" tabindex="-1" role="dialog" aria-labelledby="..." aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="{{url('/delete_post')}}">
          @csrf
          <div class="modal-body">
          <!-- THis code will hidden the textbox -->
          <div class="form-group" hidden>
                  <label class="control-label col-sm-4" for="da_id">ID:</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="da_id" name="da_id" placeholder="" value="" maxlength="255">
                    </div>
              </div>
          <p id="delete_message"></p>
        </div>
        <div class="modal-footer">

              <button type="submit" class="btn btn-danger deleterecord" ><span id="" class='glyphicon glyphicon-check'></span> Delete</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class='glyphicon glyphicon-remove'></span> Close</button>
        </div>
        </form>
        
      </div>
    </div>
  </div>
<script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}


@stop

@section('js')
<!-- THis code is for showing record from the table  -->
<script>
        $(document).on('click', '.edit-modal-record', function() {
            $('.modal-title').text('Edit Record');
            $('#ea_id').val($(this).data('id'))
            $('#ea_title').val($(this).data('title'))
            $('#ea_content').val($(this).data('content'))
            
            $('#EditForm').modal('show');
        });
</script>
<script>
   $(document).on('click', '.delete-modal-record', function() {
            $('.modal-title').text('Remove Record');
            $('#delete_message').html('<p>Do you want to remove this record with the title <strong>' + ' - ' + $(this).data('title') + '</strong>?</p>');
           $('#da_id').val($(this).data('id'))
            $('#DeleteForm').modal('show');
            
        });
</script>
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
