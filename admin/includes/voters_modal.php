<!-- Add -->
</div>
<div class="modal fade" id="addnew"><br><br><br><br><br><br><br><br><br>  
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            
              <h4 class="modal-title"><b>Add Student</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_add.php" enctype="multipart/form-data">


                <div class="form-group">
                    <label for="student_id" class="col-sm-3 control-label">Student ID</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="student_id" name="student_id" required>
                    </div>
                </div>
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
                    <label for="edit_year_level" class="col-sm-3 control-label">Year Level</label>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="year_level" id="edit_year_level" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    </select>
                
                  </div>


                <div class="form-group">
               <label for="department" class="col-sm-3 control-label">Department</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             
                <select name="department" id="department">
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
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required>
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
</div>



















<!-- Edit -->
<div class="modal fade" id="edit"><br><br><br><br><br><br><br><br><br>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
             
              <h4 class="modal-title"><b>Edit Information</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_edit.php">
                <input type="hidden" class="id" name="id">

                <div class="form-group">
                    <label for="edit_student_id" class="col-sm-3 control-label">Student ID</label>

                    <b>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="edit_student_id" name="student_id" required>
                    </div></b>
                </div>
                
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_lastname" name="lastname">
                    </div>
                </div>

            
                <div class="form-group">
                    <label for="edit_year_level" class="col-sm-3 control-label">Year Level</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <select name="year_level" id="edit_year_level">
                    
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                </div>
         


                 <div class="form-group">
               <label for="edit_department" class="col-sm-3 control-label">Department</label>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="department" id="edit_department">
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
                    <label for="edit_email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="edit_password" name="password">
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
<div class="modal fade" id="delete"><br><br><br><br><br><br><br><br><br><br>

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
     
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE VOTER</p>
                    <h2 class="bold fullname"></h2>
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

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

