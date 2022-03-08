<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="tab2">
        <table rules="all" border="1" class="box1">
            <tbody>
                <tr class="tr1">
                <td>Daftar Harga</td>
                </tr>
                <tr>
                    <td>TV : 4.200.000</td>
                </tr>
                <tr>
                    <td>Kulkas : 3.100.000</td>
                </tr>
                <tr>
                    <td>Mesin Cuci : 3.800.000</td>
                </tr>
                <tr class="tr1">
                    <td>Harga Dapat Berubah Setiap Saat </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="tab1">
        <h3>Belanja Online</h3>
        <hr/> <br> <br>
        <div class="box">
        <form method="POST" >
            <div class="form-group row">
                <label for="cs" class="col-4 col-form-label">Customer</label> 
                <div class="col-8">
                <input id="cs" name="cs" placeholder="Nama Custumer" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4" name="pilihan">Pilih Produk</label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="pilihan" id="tv" type="radio" class="custom-control-input" value="tv"> 
                        <label for="tv" name="tv" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="pilihan" id="kulkas" type="radio" class="custom-control-input" value="kulkas"> 
                        <label for="kulkas" name="kulkas" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="pilihan" id="mesincuci" type="radio" class="custom-control-input" value="mesincuci"> 
                        <label for="mesincuci" name="mesincuci" class="custom-control-label">Mesin Cuci</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                </div>
            </div>
        </form>
        </div>
    </div>
<hr>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
        <?php
error_reporting(0);
 $nama = $_POST['cs'];
 $pilihan = $_POST['pilihan'];
 $jumlah = $_POST['jumlah'];
 
 if($pilihan = "tv"){
    $harga = $jumlah*4200000;
    $cetak = "TV";
 }elseif($pilihan = "kulkas"){
     $harga = $jumlah*3100000;
     $cetak = "Kulkas";
 }elseif($pilihan = "mesincuci"){
     $harga = $jumlah*3800000;
     $cetak = "Mesin Cuci";
 }
    echo '<br/><br/><br/>Nama Customer : '.$nama;
    echo '<br/>Produk Pilihan : '.$cetak;
    echo '<br/>Jumlah Beli : '.$jumlah;
    echo '<br/>Total Belanja : Rp. '.number_format($harga); 
?>
		</div>
	</div>
</div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>
