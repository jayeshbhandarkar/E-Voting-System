<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New User</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="registered_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Firstname:</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname:</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email_id" class="col-sm-3 control-label">Email Id:</label>

                    <div class="col-sm-9">
                      <input type="Email" class="form-control" id="email_id" name="email_id" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="id_proof" class="col-sm-3 control-label">Id Proof:</label><br>

                    <div class="col-sm-9">
                      <select name ="id_proof" class="form-control" id="id_proof" required>
                            <option value="">------ Select ------</option>
                            <option value="Aadhar">Aadhar Card</option>
                            <option value="Pan card">Pan Card</option>
                            <option value="Voting card">Voting Card</option>
                            <option value="Passport">Passport</option>
                            <option value="License">Driving License</option>
                      </select>
                    </div>  
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">File:</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birth_date" class="col-sm-3 control-label">Birth Date:</label>

                    <div class="col-sm-9">
                      <input type="Date" class="form-control" id="birth_date" name="birth_date" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">Gender:</label>

                    <div class="col-sm-9">
                      <input type="radio" id="gender" name="gender" value="Male"required> Male
                      <input type="radio" id="gender" name="gender" value="Female"required> Female
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone_no" class="col-sm-3 control-label">Phone No:</label>

                    <div class="col-sm-9">
                      <input type="Mobile" class="form-control" id="phone_no" name="phone_no" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address:</label>

                    <div class="col-sm-9">
                      <textarea type="address" class="form-control" id="address" name="address" required></textarea>
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

<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit User</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="registered_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">Firstname:</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Lastname:</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_lastname" name="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_email_id" class="col-sm-3 control-label">Email Id:</label>

                    <div class="col-sm-9">
                      <input type="Email" class="form-control" id="edit_email_id" name="email_id">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_id_proof" class="col-sm-3 control-label">Id Proof:</label><br>

                    <div class="col-sm-9">
                      <select name ="id_proof" class="form-control" id="id_proof">
                            <option value="">------ Select -----</option>
                            <option value="Aadhar">Aadhar Card</option>
                            <option value="Pan card">Pan Card</option>
                            <option value="Voting card">Voting Card</option>
                            <option value="Passport">Passport</option>
                            <option value="Other">Other</option>
                      </select>
                    </div>  
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">File:</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_birth_date" class="col-sm-3 control-label">Birth Date:</label>

                    <div class="col-sm-9">
                      <input type="Date" class="form-control" id="edit_birth_date" name="birth_date">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_gender" class="col-sm-3 control-label">Gender:</label>

                    <div class="col-sm-9">
                      <input type="radio" id="edit_gender" name="gender" value="male"> Male
                      <input type="radio" id="edit_gender" name="gender" value="female"> Female
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_phone_no" class="col-sm-3 control-label">Phone No:</label>

                    <div class="col-sm-9">
                      <input type="Mobile" class="form-control" id="edit_phone_no" name="phone_no">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_address" class="col-sm-3 control-label">Address:</label>

                    <div class="col-sm-9">
                      <textarea type="address" class="form-control" id="edit_address" name="address"></textarea>
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

<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="registered_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE USER</p>
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

<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Upload Photo....</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="registered_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">File:</label>

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