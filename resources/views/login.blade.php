<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="author" content="Bayu Fajariyanto" />

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'Posyandu') }}</title>

   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/login1.css') }}">
</head>
<body>    
   <div class="container-fluid">
      <div class="row no-gutter">
         <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                           <div class="col-md-9 col-lg-8 mx-auto">
                              <h3 class="login-heading mb-4">Login</h3>
                              <form method="POST" action="{{ route('login') }}">
                                 @csrf
                                 <div class="form-label-group">
                                       <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" name="email" value="{{ old('email') }}" autofocus>
                                       @error('email')
                                          <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                          </span>
                                       @enderror
                                       <label for="email">Email</label>
                                 </div>                                
                                 <div class="form-label-group">
                                       <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" autocomplete="current-password" name="password">
                                       @error('password')
                                          <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                          </span>
                                       @enderror
                                       <label for="password">Password</label>
                                 </div>                                    
                                 <div class="custom-control custom-checkbox mb-3">
                                       <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                       <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                                 </div>
                                 <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                 @if (Route::has('password.request'))
                                    {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                       {{ __('Forgot Your Password?') }}
                                    </a> --}}
                                 @endif
                                 {{-- <a class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" href="{{ url('/baby') }}" type="submit">Sign in</a> --}}
                                 {{-- <div class="text-center">
                                       <a class="small" href="#">Forgot password?</a>
                                 </div> --}}
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('js/jquery.slim.js') }}"></script>
</body>
</html>