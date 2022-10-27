<!doctype html>
<html lang="en">
  <head>
    <title>UTSPWF</title>
  </head>
  <body class="antialiased">

    <h3> UTS PWF </h3>

      <div class="container">
       @yield('pendaftaran')
      </div>
      <div class="container">
        @yield('ujian')
       </div>
       <div class="container">
        @yield('nilai')
       </div>

       <p> <a href="/resources/views/mahasiswa/pendaftaran.blade.php"> Ini Halaman Pendaftaran </a></p>
       <p> <a href="/resources/views/mahasiswa/ujian.blade.php"> Ini Halaman Ujian </a></p>
       <p> <a href="/resources/views/mahasiswa/nilai.blade.php"> Ini Halaman Nilai </a></p>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
