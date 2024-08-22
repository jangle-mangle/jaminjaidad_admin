@php
$auth = auth()->user()->role;
@endphp
<div class="modal inmodal" id="administrator_password_change_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content animated bounceInRight">
            <div class="modal-header" style="padding: 20px 15px;">
                <h4 class="modal-title">Change {{ucfirst($auth)}} Password</h4>
            </div>
            <form id="administrator_password_form">
                @csrf
            <div class="modal-body">
                <div class="form-group">
                  <label>Current Password</label>
                  <input type="password" name="current_password" class="form-control view-from left-border" autocomplete="off">
                </div>
                <hr class="mt-2">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control view-from left-border" autocomplete="off">
                </div>
                <div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" name="confirm_password" class="form-control view-from left-border" autocomplete="off">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary update-password-btn">Change</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready( function () {

  $(document).on('click', '#administrator_password_change_modal .update-password-btn', function() {
    var that = $(this);
    that.attr('disabled', true);
    $.ajax({
              type: "post",
              url: "{{url('/')}}/{{$auth}}/password/update",
              data: $('#administrator_password_form').serialize(),
              success: function(result) {
                that.attr('disabled', false);
                if (!result.success) {
                    Toast.fire({ icon: 'error', title: result.message });
                }else{
                  Toast.fire({ icon: 'success', title: result.message });
                  $('#administrator_password_change_modal').modal('hide');
                }
              }
        });
  });

});
</script>
