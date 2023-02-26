<div id="modal-tab-login" class="tab-pane active">
    <div class="modal-header">
        <h5 class="modal-title" id="modallogintitle">Welcome back!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        {{-- <div class="alert alert-danger">
            Credential yang Anda masukan tidak valid
        </div> --}}
        <form class="preform" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label class="prelabel" for="email">Email address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@email.com">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="prelabel" for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-check custom-control custom-checkbox">
                <div class="float-left">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
                        ? 'checked' : '' }}>
                    <span class="text-white">Remember me</span>
                </div>
                <div class="float-right">
                    <a href="javascript:;" class="link-highlight text-forgot forgot-tab-link">Forgot
                        password?</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="form-group login-btn mt-4 mb-2">
                <button type="submit" class="btn btn-primary btn-block">Sign-in</button>
                {{-- <div class="loading-relative" id="login-loading" style="display: none;">
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
        Don't have an account? <a class="link-highlight register-tab-link">Register</a>
    </div>
</div>
{{-- @push('addon-script')
<script>
    $("#btn-login").click( function(e) {
        e.preventDefault();
        $('#btn-login').css('display', 'none');
        $('#login-loading').css('display', 'block');
        var email = $("#email").val();
        var password = $("#password").val();
        var token = $("meta[name='csrf-token']").attr("content");
        if(email.length == "") {
            Swal.fire({
                type: 'warning',
                title: 'Oops...',
                text: 'Alamat Email Wajib Diisi !'
            });
            $('#btn-login').css('display', 'block');
            $('#login-loading').css('display', 'none');
        } else if(password.length == "") {
            Swal.fire({
                type: 'warning',
                title: 'Oops...',
                text: 'Password Wajib Diisi !'
            });
            $('#btn-login').css('display', 'block');
            $('#login-loading').css('display', 'none');
        } else {
            $.ajax({
                url: "{{ route('login') }}",
                type: "POST",
                dataType: "JSON",
                cache: false,
                data: {
                    "email": email,
                    "password": password,
                    "_token": token
                },
                success:function(response){
                    window.location.href = "{{ route('homepage') }}";
                },
                error:function(response){
                    Swal.fire({
                        type: 'error',
                        title: 'Login Gagal!',
                        text: 'Email/Password tidak sesuai!'
                    });
                    $('#btn-login').css('display', 'block');
                    $('#login-loading').css('display', 'none');
                }
            });
        }
    });
</script>
@endpush --}}