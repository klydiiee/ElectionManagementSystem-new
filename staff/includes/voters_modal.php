<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Voter</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="year_level" class="col-sm-3 control-label">Year Level</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="year_level" name="year_level" required>
                    </div>
                </div>


                <div class="form-group">
               <label for="department" class="col-sm-3 control-label">Department</label>
                <select name="department" id="department" style="width: 400px !important; min-width: 400px; max-width: 400px;">
                    <option value="" disabled>Choose an option</option>
                    <option value="CCS">College of Computer Studies</option>
                    <option value="CAS">College of Arts and Science</option>
                    <option value="CJE">College of Criminal Justice Education</option>
                    <option value="CED">College of Education</option>
                    <option value="CEA">College of Engineering and Architecture</option>
                    <option value="CBA">College of Business and Accountancy</option>
                    <option value="CN">College of Nursing </option>
                </select>
              </div>



                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
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
