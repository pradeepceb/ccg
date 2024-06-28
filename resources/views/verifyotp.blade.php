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

    .otp-inputs {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .otp-input {
        width: 40px;
        height: 40px;
        text-align: center;
        font-size: 1.2em;
        border: 1px solid gray !important;
        margin: 3px !important;
        border-radius: 8px;
    }

    .logreg .submit-btn {
        background: #007bff;
        padding: 10px 40px;
        border-radius: 9px;
        margin: 20px auto;
        display: flex;
        width: 45%;
        justify-content: center;
        color: #FFF;
        font-size: 15px;
        font-weight: 400;
    }
</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('public/image/ccg-logo.png') }}" />
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
                    <form action="{{ url('/') }}/post-register" method="POST" onsubmit="return validate()" id="verifyotp" autocomplete="off">
                        @csrf
                        <h2>Verify OTP</h2>
                        <div class="otp-inputs">
                            <input type="text" name="otp1" maxlength="1" class="otp-input" autocomplete="off" />
                            <input type="text" name="otp2" maxlength="1" class="otp-input" autocomplete="off" />
                            <input type="text" name="otp3" maxlength="1" class="otp-input" autocomplete="off" />
                            <input type="text" name="otp4" maxlength="1" class="otp-input" autocomplete="off" />
                            <input type="text" name="otp5" maxlength="1" class="otp-input" autocomplete="off" />
                            <input type="text" name="otp6" maxlength="1" class="otp-input" autocomplete="off" />
                        </div>
                    
                        <div class="otp-error">
                            <input type="hidden" name="name" value="{{$data['name']}}">
                            <input type="hidden" name="email" value="{{$data['name']}}">
                            <input type="hidden" name="password" value="{{$data['name']}}">
                        </div>
                        <button type="submit" class="submit-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

<script>
    document.addEventListener('DOMContentLoaded', () => 
    {
        const otpInputs = document.querySelectorAll('.otp-input');

        otpInputs.forEach((input, index) => 
        {
            input.addEventListener('input', () => 
            {
                clearError(input.form);
                input.value = input.value.replace(/[^0-9]/g, '');

                if (input.value.length === 1 && index < otpInputs.length - 1) 
                {
                    otpInputs[index + 1].focus();
                }
            });

            input.addEventListener('keydown', (event) => {
                if (event.key === 'Backspace' && index > 0 && !input.value) {
                    otpInputs[index - 1].focus();
                }
            });
        });
    });

    function validate() 
    {
        let verifyOtpForm = document.getElementById('verifyotp');
        let otpInputs = verifyOtpForm.querySelectorAll('.otp-input');
        let otp = Array.from(otpInputs).map(input => input.value).join('');

        if (otp.length !== 6 || !/^\d{6}$/.test(otp)) 
        {
            showError('Please enter a valid 6-digit OTP', verifyOtpForm);
            return false;
        } 
        else 
        {
            clearError(verifyOtpForm);
        }
        return true;
    }

    function showError(message, form) {
        let errorElement = form.querySelector('.otp-error-message');
        if (!errorElement) {
            errorElement = document.createElement('p');
            errorElement.className = 'otp-error-message error-message';
            form.querySelector('.otp-error').appendChild(errorElement);
        }
        errorElement.textContent = message;
    }

    function clearError(form) {
        let errorElement = form.querySelector('.otp-error-message');
        if (errorElement) {
            errorElement.remove();
        }
    }
</script>

