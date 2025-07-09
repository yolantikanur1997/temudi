@include('partials/header') 

<style>
     html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }
        .menu-wrapper {
            min-height: 80%; /* misalnya navbar tingginya 56px */
            display: flex;
            align-items: center; /* vertikal tengah */
            justify-content: center; /* horizontal tengah */
        }

</style>

 <main>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-light navbar-ybr">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <!-- KIRI: Logo -->
            <a class="navbar-brand" href="{{url('/')}}">
                <!-- <img src="/path/to/logo.png" alt="Logo" height="30"> -->
                 Temudi
            </a>

            <!-- KANAN: Nama pengguna & tombol support -->
            <div class="d-flex align-items-center">

                <!-- Tombol Support -->
                <a href="#" title="Tiket Bantuan"><i class="fas fa-question-circle"></i></a>

                <!-- Dropdown Nama -->
                <div class="dropdown me-3">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownUser" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Yoyo
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="#">Pembayaran</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

</main>



@include('partials.footer') 