<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css" />
    <script>
      // Function to refresh the page every minute to reflect any admin changes
      function refreshPage() {
        setTimeout(function() {
          location.reload();
        }, 60000); // Refreshes every 60 seconds (1 minute)
      }
      window.onload = refreshPage;
    </script>
  </head>
<body>

<!-- File input for image upload -->
<input type="file" id="imageInput" style="display:none" accept="image/*" onchange="handleImageChange(event)">

  <!--navigasi-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary-dark shadow-lg fixed-top sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kabupaten Banggai Laut</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>   
        <li class="nav-item">
          <a class="nav-link" href="#tentang">Tentang</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link" href="#wisata">Wisata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#makanan">Makanan khas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#satwa">Satwa</a>
        </li>
      </ul>
      </div>
  </div>
</nav>
<!--banner-->
<div class="Container-fluid banner">
    <div class="Container text-center">
        <h3 class="display-1"></h3> 
        <a href="#tentang">
          <button type="button" class="btn btn-danger btn-lg">Cek tentang</button>
        </a>       
    </div>
</div>

<!--tentang-->
<div class="container-fluid pt-5 pb-5">
  <div class="container ">
    <h6 class="display-3 text-center" id="tentang">Tentang</h6>
    <h6>Selamat Datang Di Kabupaten Banggai Laut</h6>
    <div class="row">
      <div class="col-md-4">
        <img src="logobanggai.jpg" class="card-img-top" width="400" height="400">
      </div>
      <div class="col-md-8">
        <div class="clearfix pt-5">
        <p class="text-justify">
          Kabupaten Banggai laut adalah salah satu kabupaten yang berada di Provinsi Sulawesi Tengah, Indonesia. Banggai laut merupakan hasil pemekaran dari Kabupaten Banggai Kepulauan yang disahkan dalam sidang paripurna DPR RI pada 14 Desember 2012. Kabupaten Banggai laut memiliki luas wilayah keseluruhan +725,67 km2 dengan jumlah penduduk +63.580 jiwa pada tahun 2012 dan terdiri atas 66 (enam puluh enam) desa atau kelurahan.
        </p>
        <p>Kabupaten Banggai Laut merupakan satu di antara ratusan daerah diwilayah kepulauan indonesia yang memiliki kebudayan yang beraneka ragam,yang tidak dimiliki oleh daerah lain, kebudayaan yang beraneka ragam itu diwujudkan melalui upacara upacara adat, kebudayaan yang ada di daerah banggai dari dulu sampai sekarang masih tetap dipertahankan dan dilestarikan oleh masyarakat untuk diwariskan secara turun temurun kepada generasi muda sebagai penerima dan pelanjut kebudayaan tersebut, Banggai laut memiliki sastra lisan yang merupakan salah satu warisan budaya nasional masyarakat banggai salah satunya yaitu lirik lagu tarian putri banggai</p>
      </div>
    </div>
  </div>
</div>
</div>

     
  <!--wisata-->
  <div class="container-fluid pt-5 pb-5 bg-light">
  <div class="container text-center">
    <h4 class="display-3" id="wisata">Wisata</h4>
    <div class="row pt-4 gx-4 gy-4">
      <div class="col-md-4">
       <div class="card">
        <img src="lambanganpauno.jpg" class="card-img-top" width="150" height="150">
            <div class="card-body">
              <h5 class="card-title">Pantai Lambangan pauno</h5>
              </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
        <img src="oyama.jpeg" class="card-img-top" width="150" height="150">
            <div class="card-body">
              <h5 class="card-title">Pantai oyama</h5>
            </div>
          </div>
        </div>

        <div class="col-md-4">
       <div class="card">
        <img src="bontolan.jpg" class="card-img-top" width="150" height="150">
            <div class="card-body">
              <h5 class="card-title">Pantai Bontolan</h5>
               </div>
          </div>
        </div>

        <div class="col-md-4">
       <div class="card">
        <img src="monosan.jpg" class="card-img-top" width="150" height="150">
            <div class="card-body">
              <h5 class="card-title">Pantai Monosan</h5>
              </div>
          </div>
        </div>

        <div class="col-md-4">
       <div class="card">
        <img src="olesio.jpeg" class="card-img-top" width="150" height="150">
            <div class="card-body">
              <h5 class="card-title">Pantai Olesio</h5>
              </div>
          </div>
        </div>

        <div class="col-md-4">
       <div class="card">
        <img src="padanglaya.jpg" class="card-img-top" width="150" height="150">
            <div class="card-body">
              <h5 class="card-title">Padang laya</h5>
            </div>
          </div>
        </div>

  <!--makanan-->
  <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
      <h5 class="display-3" id="makanan">Makanan khas</h5>
      <div class="row pt-4 gx-4 gy-4">
        <div class="col-md-4">
         <div class="card">
            <img src="sinole.jpg" class="card-img-top" width="150" height="150">
            <div class="card-body">
              <h5 class="card-title">Sinole</h5>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
             <img src="papeda.jpg" class="card-img-top" width="150" height="150">
             <div class="card-body">
               <h5 class="card-title">Lomos</h5>
             </div>
           </div>
         </div>

         <div class="col-md-4">
          <div class="card crop-img">
             <img src="kanjoli.jpg" class="card-img-top" width="150" height="150">
             <div class="card-body">
               <h5 class="card-title">Kanjoli</h5>
             </div>
           </div>
         </div>

         <div class="col-md-4">
          <div class="card">
             <img src="salanggar.jpg" class="card-img-top" width="150" height="150">
             <div class="card-body">
               <h5 class="card-title">Salanggar</h5>           
             </div>
           </div>
         </div>

         <div class="col-md-4">
          <div class="card">
             <img src="payot.jpg" class="card-img-top" width="150" height="150">
             <div class="card-body">
               <h5 class="card-title">Payot</h5>             
             </div>
           </div>
         </div>
        
         <div class="col-md-4">
          <div class="card">
             <img src="pisang.jpg" class="card-img-top" width="150" height="150">
             <div class="card-body">
               <h5 class="card-title">Pisang Lokapau</h5>
             </div>
           </div>
         </div>


      </div>
    </div>
  </div>
  <!--satwa-->
  <div class="container-fluid pt-5 pb-5">
    <div class="container">
      <h2 class="display-3 text-center" id="satwa">Satwa</h2>
      <p class=text-center>
      </p>
      <div class="clearfix pt-5">
        <img 
        src="burung.jpg" 
        class="col-md-6 float-md-end mb-3 crop-img" 
        width="300" 
        height="300" 
        />
        <p>Burung maleo(macrocephalon maleo) adalah salah satu satwa dari kabupaten banggai laut yang mempunyai sejarah panjang dikalangan masyarakat burung ini termasuk suku megapodidae,yaitu suku burung yang memiliki kepala berukuran kecil,bulu berwarna hitam </p>
        <p>atau coklat,kaki besar dan kuat yang digunakan untuk menggali tanah dan menyingkirkan batuan saat bertelur, meskipun memiliki kaki besaar dan kuat ternyata maleo tidak bisa bertelur di sembarang tempat.
        </p>

        
        
      </div>
    </div>
  </div>
  <!--tim-->
  <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="cotainer text-centter">

    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</div>

</body>
</html>