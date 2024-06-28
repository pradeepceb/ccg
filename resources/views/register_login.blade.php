@include('include.header')
<style>
    .fas {
        position: absolute;
        top: 20px;
        right: 16px;
    }

    .password-field {
        position: relative;
    }

    .error-message {
        color: red;
        font-size: 0.8em;
        margin-top: 5px;
    }
</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('image/ccg-logo.png') }}" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex">
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <section class="logreg">
        <div class="container">
            <div class="user signinBx">
                <div class="imgBx">
                    <img src="{{ url('/') }}/public/image/loginpage.png" />
                </div>
                <div class="formBx">
                    <form action="{{ url('/') }}/post-login" method="POST" onsubmit="return activeFunction('login')"
                        id="login" autocomplete="off">
                        @csrf
                        <h2>Sign In</h2>
                        <input type="text" name="username" placeholder="Username" autocomplete="off" />
                        <div class="password-field">
                            <input type="password" name="password" placeholder="Password" id="signin-password" autocomplete="off" />
                            <span class="toggle-password" onclick="togglePassword('signin-password')">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                        <input type="submit" value="Login" />
                        <p class="signup">
                            Don't have an account?
                            <a href="#" onclick="toggleForm();">Sign Up.</a>
                        </p>
                    </form>
                </div>
            </div>
            <div class="user signupBx">
                <div class="formBx">
                    <form action="{{ url('/') }}/verify-register" method="POST"
                        onsubmit="return activeFunction('signup')" id="signup" autocomplete="off">
                        @csrf
                        <h2>Create an account</h2>
                        <input type="text" name="name" placeholder="Name" autocomplete="off" />
                        <input type="email" name="email" placeholder="Email Address" autocomplete="off" />
                        <div class="password-field">
                            <input type="password" name="password" placeholder="Create Password" id="signup-password" autocomplete="off" />
                            <span class="toggle-password" onclick="togglePassword('signup-password')">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                        <div class="password-field">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password"
                                id="confirm-password" autocomplete="off" />
                            <span class="toggle-password" onclick="togglePassword('confirm-password')">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                        <input type="submit" value="Sign Up" />
                        <p class="signup">
                            Already have an account?
                            <a href="#" onclick="toggleForm();">Sign in.</a>
                        </p>
                    </form>
                </div>
                <div class="imgBx">
                    <img src="{{ url('/') }}/public/image/loginpage.png" />
                </div>
            </div>
        </div>
    </section>
</body>

<!-- Add Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script>
    const toggleForm = () => {
        const container = document.querySelector('.container');
        container.classList.toggle('active');
    };

    const togglePassword = (fieldId) => {
        const passwordField = document.getElementById(fieldId);
        const toggleIcon = passwordField.nextElementSibling.querySelector('i');
        if (passwordField.type === "password") {
            passwordField.type = "text";
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = "password";
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        }
    };

    function activeFunction(action) {
        if (action === 'signup') {
            let signupForm = document.getElementById('signup');
            let name = signupForm.querySelector('input[name="name"]').value;
            let email = signupForm.querySelector('input[name="email"]').value;
            let password = signupForm.querySelector('input[name="password"]').value;
            let confirmPassword = signupForm.querySelector('input[name="password_confirmation"]').value;

            // Validate name presence
            if (!name) {
                showError('Please enter your name', signupForm, 'name');
                return false;
            } else {
                clearError(signupForm, 'name');
            }

            // Validate email format
            if (!email || !isValidEmail(email)) {
                showError('Please enter a valid email address', signupForm, 'email');
                return false;
            } else {
                clearError(signupForm, 'email');
            }

            // Validate password requirements
            if (!password || password.length < 8 || !isValidPassword(password)) {
                showError(
                    'Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character',
                    signupForm, 'password');
                return false;
            } else {
                clearError(signupForm, 'password');
            }

            // Validate password confirmation
            if (!confirmPassword || password !== confirmPassword) {
                showError('Passwords do not match', signupForm, 'password_confirmation');
                return false;
            } else {
                clearError(signupForm, 'password_confirmation');
            }

            // If all validations pass, submit the form
            signupForm.submit();
        } else if (action === 'login') {
            let loginForm = document.getElementById('login');
            let username = loginForm.querySelector('input[name="username"]').value;
            let password = loginForm.querySelector('input[name="password"]').value;

            // Validate username and password presence
            if (!username || !password) {
                showError('Username and password cannot be empty', loginForm, 'username');
                return false;
            } else {
                clearError(loginForm, 'username');
                clearError(loginForm, 'password');
            }

            // If all validations pass, submit the form
            loginForm.submit();
        }

        return false; // Prevent default form submission
    }

    function showError(message, form, field) {
        let errorElement = form.querySelector(`.${field}-error-message`);
        if (!errorElement) {
            errorElement = document.createElement('p');
            errorElement.className = `${field}-error-message error-message`;
            form.querySelector(`input[name="${field}"]`).parentNode.appendChild(errorElement);
        }
        errorElement.textContent = message;
    }

    function clearError(form, field) {
        let errorElement = form.querySelector(`.${field}-error-message`);
        if (errorElement) {
            errorElement.remove();
        }
    }

    function isValidEmail(email) {
        // Basic email format validation using regex
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function isValidPassword(password) {
        // Password complexity requirements allowing any number of special characters
        return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d@$!%*?&]*$/.test(password) && password.length >= 8;
    }
</script>
