
   
   
   
    </body>

</html>
   
   <script src="{{asset('assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    
    <script src="{{asset('assets/vendors/apexcharts/apexcharts.js')}}"></script>
    
    <script src="{{asset('assets/vendors/toastify/toastify.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}?v={{ time() }}"></script>
    
    <script src="{{asset('assets/vendors/datatables/datatables.min.js')}}"></script>
    

    <script src="{{asset('assets/vendors/sweetalert2/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('assets/vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{asset('assets/vendors/timepicker/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('assets/vendors/select2/dist/js/select2.min.js')}}"></script>


    @yield('page-script')


@if (Session::has('success'))
    <script>
        Toastify({
            text: "{{ Session::get('success') }}",
            duration: 3000,
            close:true,
            backgroundColor: "green",
        }).showToast();
    </script>
@endif

@if (Session::has('error'))
    <script>
          Toastify({
            text: "{{ Session::get('error') }}",
            duration: 3000,
            close:true,
            backgroundColor: "red",
        }).showToast();
    </script>
@endif

