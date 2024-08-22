<!--Add Banner Modal -->
<div class="modal fade text-left" id="add_sub_admin_modal" tabindex="-1" role="dialog"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-top modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">View Vendor</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="resetAddSubAdminForm();">
          <i class="bx bx-x"></i>
        </button>
      </div>
      <div class="modal-body">
        <form class="form form-vertical" id="add_sub_admin_data" enctype="multipart/form-data" autocomplete="off">
          @csrf
          <div class="form-body">
            <div class="row">
              <!-- <div class="col-12">
                <div class="form-group">
                  <label for="profile_pic">Profile Picture</label>
                  <div class="position-relative has-icon-left">
                    <input type="file" class="form-control-file" id="profile_pic" name="profile_pic">
                  </div>
                </div>
              </div> -->
              <div class="col-12">
                <div class="form-group">
                  <label for="name">Name</label>
                  <div class="position-relative has-icon-left">
                    <input type="text" id="name" class="form-control" name="name" placeholder="Enter Name">
                    <div class="form-control-position">
                      <i class='bx bxs-rename'></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="add_game_code">Mobile</label>
                  <div class="position-relative has-icon-left">
                    <input type="number" id="phone" class="form-control" name="phone" placeholder="Enter Phone Number">
                    <div class="form-control-position">
                      <i class='bx bxs-phone'></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="add_game_fraction">Email</label>
                  <div class="position-relative has-icon-left">
                    <input type="email" id="email" class="form-control" name="email" placeholder="Enter Email" autocomplete="none">
                    <div class="form-control-position">
                      <i class='bx bx-mail-send'></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="add_game_type_video_link">accomodation_type</label>
                  <div class="position-relative has-icon-left">
                    <input type="password" id="accomodation_type" class="form-control" name="accomodation_type" placeholder="Enter accomodation type">
                    <div class="form-control-position">
                      <i class='bx bxs-lock-alt'></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="add_game_type_video_link">accomodation_name</label>
                  <div class="position-relative has-icon-left">
                    <input type="password" id="accomodation_name" class="form-control" name="accomodation_name" placeholder="Enter accomodation name">
                    <div class="form-control-position">
                      <i class='bx bxs-lock-alt'></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="add_game_type_video_link">accomodation_address</label>
                  <div class="position-relative has-icon-left">
                    <input type="password" id="accomodation_address" class="form-control" name="accomodation_address" placeholder="Enter accomodation address">
                    <div class="form-control-position">
                      <i class='bx bxs-lock-alt'></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="add_game_type_video_link">accomodation_type</label>
                  <div class="position-relative has-icon-left">
                    <input type="password" id="accomodation_type" class="form-control" name="accomodation_type" placeholder="Enter accomodation type">
                    <div class="form-control-position">
                      <i class='bx bxs-lock-alt'></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="add_game_type_video_link">enquiry_number</label>
                  <div class="position-relative has-icon-left">
                    <input type="password" id="enquiry_number" class="form-control" name="enquiry_number" placeholder="Enter enquiry number">
                    <div class="form-control-position">
                      <i class='bx bxs-lock-alt'></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="add_game_type_video_link">buisness_name</label>
                  <div class="position-relative has-icon-left">
                    <input type="password" id="buisness_name" class="form-control" name="buisness_name" placeholder="Enter buisness name">
                    <div class="form-control-position">
                      <i class='bx bxs-lock-alt'></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="add_game_type_video_link">buisness_address</label>
                  <div class="position-relative has-icon-left">
                    <input type="password" id="buisness_address" class="form-control" name="buisness_address" placeholder="Enter buisness address">
                    <div class="form-control-position">
                      <i class='bx bxs-lock-alt'></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="add_game_type_video_link">gst</label>
                  <div class="position-relative has-icon-left">
                    <input type="password" id="gst" class="form-control" name="gst" placeholder="Enter gst">
                    <div class="form-control-position">
                      <i class='bx bxs-lock-alt'></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="add_game_type_video_link">buisness_city</label>
                  <div class="position-relative has-icon-left">
                    <input type="password" id="buisness_city" class="form-control" name="buisness_city" placeholder="Enter buisness city">
                    <div class="form-control-position">
                      <i class='bx bxs-lock-alt'></i>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-secondary" data-dismiss="modal" onclick="resetAddSubAdminForm();"> 
          <i class="bx bx-x d-block d-sm-none"></i>
          <span class="d-none d-sm-block">Close</span>
        </button>
        <button type="button" class="btn btn-success ml-1 add-vendor-btn">
          <i class="bx bx-check d-block d-sm-none"></i>
         Approve
        </button>
        <button type="button" class="btn btn-danger ml-1 add-vendor-btn">
          <i class="bx bx-check d-block d-sm-none"></i>
         Reject
        </button>
      </div>
    </div>
  </div>
</div>
