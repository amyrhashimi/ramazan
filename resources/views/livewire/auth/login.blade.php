    <div>
        <!-- title-->
        <h4 class="mt-0">Sign In</h4>
        <p class="text-muted mb-4">@lang('auth.message_login')</p>

        <!-- form -->
        <form wire:submit.prevent="submit">
            <div class="mb-3">
                <label for="fullname" class="form-label">نام کاربری</label>
                <input class="form-control" type="text" id="fullname"  wire:model.debounce.1000ms="user.username">
                @error('user.username')
                <div class="text-danger"> {{ $message }} </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">کلمه عبور</label>
                <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" placeholder="کلمه عبور را وارد کنید" wire:model.debounce.lazy="user.password">
                    <div class="input-group-text" data-password="false">
                        <span class="password-eye"></span>
                    </div>
                    @error('user.password')
                    <div class="text-danger w-100"> {{ $message }} </div>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <input type="hidden" id="captcha" value="test" wire:model="captcha">
                <div wire:ignore>
                    <div class="g-recaptcha" id="captcha" data-callback="onCallback" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>
                </div>
                @error('recaptcha')
                <div class="text-danger w-100"> {{ $message }} </div>
                @enderror
            </div>

            <div class="text-center d-grid">
                <button class="btn btn-primary" type="submit"> ورود </button>
            </div>
            <!-- social-->
            <div class="text-center mt-4">
                <p class="text-muted font-16">ورود با </p>
                <ul class="social-list list-inline mt-3 mb-0">
                    <li class="list-inline-item">
                        <a href="{{ url('login/facebook') }}" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ url('login/google') }}" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ url('login/github') }}" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                    </li>
                </ul>
            </div>
        </form>
        <!-- end form-->

        <!-- Footer-->
        <footer class="footer footer-alt">
            <p class="text-muted">@lang("auth.dont_register") <a href="{{ route('register') }}" class="text-muted ms-1"><b>@lang("auth.register")</b></a></p>
        </footer>
    </div>

        <script src="https://www.google.com/recaptcha/api.js?hl=en" async defer></script>
        <script type="text/javascript">
            var onCallback = function() {
                //document.getElementById('captcha').value=grecaptcha.getResponse()
            @this.set('recaptcha',grecaptcha.getResponse());
            };
        </script>



