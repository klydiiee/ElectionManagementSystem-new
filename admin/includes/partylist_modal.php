<!-- Add -->

</style>

<br>
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Partylist</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="partylist_add.php">
                <div class="form-group">
                    <label for="partyname" class="col-sm-3 control-label">Partylist Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="partyname" name="partyname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tagline" class="col-sm-3 control-label">Tagline</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="tagline" name="tagline" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        
              <h4 class="modal-title"><b>Edit Partylist</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="partylist_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_partyname" class="col-sm-3 control-label">Partylist Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_partyname" name="partyname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_tagline" class="col-sm-3 control-label">Tagline</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_tagline" name="tagline">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete"><br><br><br><br><br><br>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
           
              <h4 class="modal-title"><b>Delete</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="partylist_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>ARE YOU SURE YOU WANT TO DELETE PARTYLIST?</p>
                    <h2 class="bold description"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>



     