<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Modül</title>

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <!-- sayfa CSS dosyaları -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="/js/bootstrap.bundle.min.js"></script>

     
</head>
<body>


<!-- Navbar Bölümü-->
    <header class="p-2 bg-dark text-white fixed-top">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <div class="col-lg-2">
        <a href="/index.php" class="logo mr-auto"><img id="logo" src="/logo.png" alt=""class="img-fluid" style="object-fit:contain;height:75px;width: 150px;"></a>
        </div>

        <div class="col-lg-2"></div>  
        
          <div class="row">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a class="nav-link text-white" href="index.php">Anasayfa</a></li>
              <li><a class="nav-link text-white" href="sorular.html">Çıkmış Sorular</a></li>
              <li> <a class="nav-link text-white" href="cikarimlar.html">Çıkarımlar</a></li>
            </ul>
          </div>

    
    </div>
  </header>

  <!-- Navbar Bitiş-->


<div class="row" style="margin-top: 100px;">
  <div class="col-lg-2"> </div>



  <div class="col-lg-8">
   <h2 class="text-center"> Köklü Sayı Dönüştürme</h2>
   <hr>
   <div class="alert alert-warning text-center" role="alert">
  Bir köklü sayının Rasyonel sayı olarak karşılığı ve bir Köklü sayının hem rasyonel hemde köklü sayı olarak karşılığını hesaplayabilirsiniz.
  </div>
   <div class="row">

     <div class="col-lg-2"></div>

     <div class="col-lg-8 ">

      <div class="row bg-success m-2 shadow" id="cevap">
    <div class="col">
     <h2  id="sonuc" class="text-center text-white"></h2>
    </div>
   </div>

      <input type="text" id="sayi" class="form-control mt-2">
      <button type="button" id="isaret" class="btn btn-info btn-sm m-2">Kök İşareti(√)</button>
      <button type="button" id="kok" class="btn btn-info btn-sm m-2">Köklü Sayıya Çevir</button>
      <button type="button" id="ras" class="btn btn-info btn-sm m-2">Rasyonel Sayıya Çevir</button>
      <button type="button" id="cle" class="btn btn-warning btn-sm m-2">Temizle</button>
     </div>

     <div class="col-lg-2">
       
        


     </div>
   </div>



 </div>



  <div class="col-lg-2"></div>

   

</div>


 





<script type="text/javascript">
  $(document).ready(function() {  

    $("#cevap").hide();


     $('#ras').click(function() { // Kök alma işlemi

      var a=$('#sayi').val();

      var konum=a.indexOf("√");
      var oncesi=a.slice(0,konum);
      var sonrasi=a.slice(konum+1,a.length);
      $("#cevap").show();
      //alert("konum: "+konum+",oncesi: "+oncesi+",sonrası: "+sonrasi);

      if (konum==-1) {

        alert("Kök işareti kullanın yada rasyonel sayıya çevirme işlemini kullanın.");
        $("#cevap").hide();
        $('#sayi').val("");

      }

      if (konum==0) {
        var sonuc=Math.sqrt(sonrasi);
        $("#cevap").show();
        $('#sonuc').html(sonuc);

      }

      if (konum>0) {
        $("#cevap").show();
        var kokhali=Math.pow(oncesi,2)*sonrasi;
        var sonuc=Math.sqrt(kokhali);
        $('#sonuc').html('√'+kokhali+' = '+sonuc);

      }



      


     });
     $('#kok').click(function(){
      var deger=$('#sayi').val();
      var final= Math.sqrt(deger);
      $("#cevap").show();
      $('#sonuc').html('√'+deger+' = '+final);

     });

     $('#isaret').click(function() { // Rasyonel sayıya çevir
      var a=$('#sayi').val();
      document.getElementById("sayi").value= a+'√';


     });

     $('#cle').click(function() { // Rasyonel sayıya çevir
      $('#sayi').val("");
      $("#cevap").hide();

     });


  });


</script>




</body>
</html>