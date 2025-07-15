<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temudi - Login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">    
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}?v={{ time() }}">

    @yield('page-style')
    
</head>
<body>
<body>
  <div class="container-fluid">
    <div class="row h-100">
      <!-- LEFT: Laravel Login Form -->
      <div class="col-md-6 col-12 left">
        <div class="form-container">
          <h1 class="auth-title">Masuk Akun</h1>
          <p class="auth-subtitle mb-3">Silakan masuk pakai akun yang terdaftar.</p>

          @if (session('failed'))
            <div class="alert alert-danger mb-3 rounded" role="alert">
              <div class="alert-body">
                {{ session('failed') }}
              </div>
            </div>
          @endif

          <form action="{{ route('login_submit') }}" method="POST">
            @csrf

            <div class="form-group position-relative mb-4">
              <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror"
                placeholder="Email" name="email" id="email" value="{{ old('email') }}">
              @error('email')
                <span class="invalid-feedback d-block" role="alert">
                  <span class="fw-medium">{{ $message }}</span>
                </span>
              @enderror
            </div>

            <div class="form-group position-relative mb-4">
              <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                placeholder="Kata Sandi" name="password" id="password">
              @error('password')
                <div class="invalid-feedback d-block">{{ $message }}</div>
              @enderror
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-2">Masuk</button>
            </div>
          </form>
        </div>
      </div>

      <!-- RIGHT: Typing Animation -->
      <div class="col-md-6 d-none d-md-flex right">
        <div id="typing" class="typing-text"></div>
      </div>
    </div>
  </div>
</body>
</html>
 <script>
    const texts = [
      "TEMUDI",
      "Temukan UMKM Digital Indonesia"
    ];

    let currentText = 0;
    let charIndex = 0;
    let isDeleting = false;
    const typingElement = document.getElementById("typing");

    function type() {
      const fullText = texts[currentText];
      if (isDeleting) {
        charIndex--;
      } else {
        charIndex++;
      }

      typingElement.textContent = fullText.substring(0, charIndex);

      let typeSpeed = isDeleting ? 40 : 100;

      if (!isDeleting && charIndex === fullText.length) {
        // Pause before deleting
        setTimeout(() => {
          isDeleting = true;
          type();
        }, 1000);
        return;
      }

      if (isDeleting && charIndex === 0) {
        isDeleting = false;
        currentText = (currentText + 1) % texts.length;
      }

      setTimeout(type, typeSpeed);
    }

    // Start typing effect
    type();
  </script>