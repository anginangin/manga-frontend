<div id="modal-tab-forgot" class="tab-pane fade">
    <div class="modal-header">
        <h5 class="modal-title" id="modallogintitle3">Reset Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form class="preform" method="post" id="forgot-form">
            <div class="alert alert-success mb-3" id="forgot-success" style="display:none"></div>
            <div class="alert alert-danger mb-3" id="forgot-error" style="display:none"></div>
            <div class="form-group">
                <label class="prelabel" for="forgot-email">Your Email</label>
                <input type="text" class="form-control" id="forgot-email" name="email" placeholder="name@email.com"
                    required>
            </div>
            <div class="g-recaptcha mb-3" id="forgot-recaptcha" data-theme="dark"></div>
            <div class="form-group login-btn mt-4">
                <button class="btn btn-primary btn-block">Submit</button>
                <div class="loading-relative" id="forgot-loading" style="display: none;">
                    <div class="loading">
                        <div class="span1"></div>
                        <div class="span2"></div>
                        <div class="span3"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer text-center">
        <a class="link-highlight login-tab-link"><i class="fa fa-angle-left mr-2"></i>Back to
            Sign-in</a>
    </div>
</div>