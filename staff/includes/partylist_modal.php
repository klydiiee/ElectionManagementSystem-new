<!-- Add -->
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



     