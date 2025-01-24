<?= $this->include('Admin/adm_header') ?>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content container">
        <div class="card">
            <form id="loginForm" action="<?= site_url('admin/attemptLogin') ?>" method="POST">
                <?= csrf_field() ?>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h4 class="mb-3 f-w-400">Login into your account</h4>
                            
                            <!-- Username Field -->
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-mail"></i></span>
                                    </div>
                                    <input 
                                        type="text" 
                                        name="username" 
                                        id="username" 
                                        class="form-control" 
                                        placeholder="Username" 
                               
                                        aria-label="Username">
                                </div>
                                <small id="username-error" class="text-danger" style="display: none;"></small>
                            </div>

                            <!-- Password Field -->
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                    </div>
                                    <input 
                                        type="password" 
                                        name="password" 
                                        id="password" 
                                        class="form-control" 
                                        placeholder="Password" 
                                      
                                        aria-label="Password">
                                </div>
                                <small id="password-error" class="text-danger" style="display: none;"></small>
                            </div>

                            <div class="form-group text-left mt-2">
                                <div class="checkbox checkbox-primary d-inline">
                                    <input 
                                        type="checkbox" 
                                        name="remember_me" 
                                        id="remember_me">
                                    <label for="remember_me" class="cr"> Remember me</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mb-4">Login</button>
                            <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
                            <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <img src="<?= base_url('public/adminpanel/assets/images/auth-bg.jpg') ?>" alt="Background" class="img-fluid">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->

<script>
    // Get the input fields and error containers
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    const usernameError = document.getElementById('username-error');
    const passwordError = document.getElementById('password-error');

    // Function to validate username
    function validateUsername() {
        const username = usernameInput.value.trim();
        if (username === '') {
            usernameError.textContent = 'Username is required.';
            usernameError.style.display = 'block';
        } else if (username.length < 3) {
            usernameError.textContent = 'Username must be at least 3 characters long.';
            usernameError.style.display = 'block';
        } else {
            usernameError.style.display = 'none';
        }
    }

    // Function to validate password
    function validatePassword() {
        const password = passwordInput.value.trim();
        if (password === '') {
            passwordError.textContent = 'Password is required.';
            passwordError.style.display = 'block';
        } else if (password.length < 6) {
            passwordError.textContent = 'Password must be at least 6 characters long.';
            passwordError.style.display = 'block';
        } else {
            passwordError.style.display = 'none';
        }
    }

    // Add event listeners for real-time validation
    usernameInput.addEventListener('input', validateUsername);
    passwordInput.addEventListener('input', validatePassword);

    // Final validation on form submit
    document.getElementById('loginForm').addEventListener('submit', function (e) {
        validateUsername();
        validatePassword();

        if (usernameError.style.display === 'block' || passwordError.style.display === 'block') {
            e.preventDefault();
        }
    });
</script>

<?= $this->include('Admin/adm_footer') ?>
