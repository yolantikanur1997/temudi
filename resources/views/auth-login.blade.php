<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temudi - Login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">    
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/pages/auth.css')}}">


    @yield('page-style')
    
</head>
<body>

    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <!-- <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo"></a> -->
                    </div>
                    <h1 class="auth-title">Masuk Akun</h1>
                    <p class="auth-subtitle mb-5">Silakan masuk pakai akun yang terdaftar.</p>

                    {{-- ALERT JIKA GAGAL LOGIN --}}
                    @if (session('failed'))
                        <div class="alert alert-danger mb-3 rounded" role="alert">
                            <div class="alert-body">
                                {{ session('failed') }}
                            </div>
                        </div>
                    @endif

                    <form action="{{route('login_submit')}}" method="POST">
                        @csrf
                        <div class="form-group position-relative mb-4">
                            <input type="text" class="form-control form-control-xl @error('email') is-invalid @enderror" placeholder="Email" name="email" id="email">

                            @error('email')
                                <span class="invalid-feedback d-block" role="alert"><span class="fw-medium">{{ $message }}</span></span>
                            @enderror
                            
                        </div>
                      

                        <div class="form-group position-relative mb-4">
                            <input type="password" class="form-control form-control-xl @error('password') is-invalid @enderror" placeholder="Kata Sandi" name="password" id="password">
                            @error('password')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        </div>

                        
                        
                        <!-- <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div> -->
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-2">Masuk</button>
                    </form>
                    <!-- <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="auth-register.html"
                                class="font-bold">Sign
                                up</a>.</p>
                        <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                        <div class="typing-container">
                            <h1 class="line1">Selamat Datang</h1>
                            <h1 class="line2">di Temudi</h1>
                        </div>
                </div>
            </div>
        </div>

    </div>


   
   
   
    </body>

</html>
