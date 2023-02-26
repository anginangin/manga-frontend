<div id="modal-tab-register" class="tab-pane fade">
    <div class="modal-header">
        <h5 class="modal-title" id="modallogintitle2">Create an Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="alert alert-danger" id="register-error" style="display: none;"></div>
        <form class="preform" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label class="prelabel" for="name">Your Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="prelabel" for="email">Email Address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" placeholder="name@email.com">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="prelabel" for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password" placeholder="Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="prelabel" for="re-confirmpassword">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password" placeholder="Confirm Password">
            </div>
            <div class="form-group login-btn mt-5 mb-0">
                <button type="submit" class="btn btn-primary btn-block">Sign-up</button>
                {{-- <div class="loading-relative" id="register-loading" style="display: none;">
                    <div class="loading">
                        <div class="span1"></div>
                        <div class="span2"></div>
                        <div class="span3"></div>
                    </div>
                </div> --}}
            </div>
        </form>
    </div>
    <div class="modal-footer text-center">
        Have an account? <a class="link-highlight login-tab-link">Sign-in</a>
    </div>
</div>