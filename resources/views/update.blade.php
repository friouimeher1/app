<!-- Modal -->
  <div class="modal fade" id="popup" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <form  action="{{route('update')}}" id="frm-update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <input type="hidden" name="id" id='id' >
                <div class="form-group">
                  <label for="" class="label label-info">First Name</label>
                  <input type="text" name='firstname' id="firstname"  class="form-control">
                </div>

                <div class="form-group">
                  <label for="" class="label label-info">Image</label>
                  <input type="file" name='image' id="image"  class="form-control">
                </div>


                <div class="form-group">
                <label for="" class="label label-info">Last Name</label>
                <input type="text" name='lastname' id="lastname" class="form-control">
              </div>
              <div class="form-group">
              <label for="" class="label label-info">Password</label>
              <input type="text" name='password' id="password" class="form-control">
            </div>

              <div class="panel-footer">
                <div class="form-group">
                  <button type="submit" name="button" id="btn-update" class="btn btn-primary btn-block">ADD</button>
                </div>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
