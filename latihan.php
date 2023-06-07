<?php
include 'fungsi2.php';
$jumlah = new jumlah();
?>
<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" ” content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>iKantin wikrama</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>
    <style>
    html{
        scroll-behavior: smooth;
    }               
    .menu h2{
  text-align: center;
  font-size: 2.4rem;
  margin-bottom: 1rem;
  color: black;
  padding: 4rem 7% 1.4rem;
}
    .menu h2 span{
  color: var(--primary);
}
.menu p{
  text-align: center;
  max-width: 30rem;
  margin: auto;
  font-size: 1.2rem;
  font-weight: 200;
  line-height: 1.6;
}

.menu .row {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  margin-top: 2rem;
}
.menu .row .menu-card {
  text-align: center;
  padding-bottom: 4rem;
  border:1px solid;
  border-radius:10px;
  padding: 20px 0;
  margin: 0 10px;
}
.menu .row .menu-card img {
  width: 15rem;
  border-radius: 10%;
  margin: 0 30px;
}
.menu .row .menu-card .menu-card-title {
  margin-top: 1rem auto 0.5rem;
}
.input-group{
    margin: 5px 0;
}
.modal-title{
    text-align:center;
}
.navbar-inverse{
    background-color:#11009E;
}

    </style>

    <body>
        <nav class="navbar-inverse" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-shopping-cart"></i> iKantin Wikrama</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="latihan.php"><i class="fa fa-home"></i> Beranda</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#buy"><i class="fa fa-shopping-cart"></i> Beli</a></li>
                        <li><a href="#menu"><i class="fa fa-cutlery"></i> Menu</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"></a></li>
                    </ul>
                </div>

            </div>
            <!-- / .navbar-collapse -->
            <!-- /. container-fluid -->
        </nav>
        <div class="container" style="margin-top: 50px;">
            <div class=" panel-success">
                <div class="panel-body bg-primary">
                    <div class="container">
                        <h1><i class="fa fa-shopping-cart"></i> Selamat datang di iKantin Wikrama</h1>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="container">
                        <div class="col-md-10">
                            <h4>Klik disini untuk pembelian <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#buy">
                                    <i class="fa fa-shopping-cart"></i> Beli</button>
                            </h4>
                        </div>
                    </div>
                </div>


            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="container">
                        <?php
                        if (isset($_POST['check'])) {
                            $jmldimsum = $_POST['dimsum'];
                            $jmlPc = $_POST['kulkul'];
                            $jmlager = $_POST['ager'];
                            if ($jmldimsum == null) {
                                $jumlah->getJumlah(0, $jmlPc , $jmlager);
                            } elseif ($jmlPc == null) {
                                $jumlah->getJumlah($jmldimsum, 0, $jmlager);
                            } elseif ($jmlager == null) {
                                $jumlah->getJumlah($jmldimsum, $jmlPc, 0 );
                            } else {
                                $jumlah->getJumlah($jmldimsum, $jmlPc, $jmlager);
                            }
                            $jumlah->setHarga();
                            $jumlah->cetakStruk();
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>

      <div class="menu" id="menu">
      <h2><span>Menu</span> Kami</h2>
      <p>
        Selamat datang di menu kami, mohon maaf sebelumnya untuk saat ini kita hanya
        menyediakan 3 menu saja, yaitu Dimsum, Es kul-kul dan Ager Stick.
      </p>

      <div class="row">
        <div class="menu-card">
          <img
            src="img/resep-siomay-ayam_43.jpeg"
            alt="Dimsum"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Dimsum -</h3>
          <p class="menu-card-+price">IDR 3k</p>
        </div>
        <div class="menu-card">
          <img
            src="img/es-kul-kul-20220726-123235.jpg"
            alt="Es Kul-kul"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Es Kul-kul -</h3>
          <p class="menu-card-price">IDR 2k</p>
        </div>
        <div class="menu-card">
          <img
            src="img/nutrijell-coklat-stik-es-foto-resep-utama.jpg"
            alt="Ager Stick"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Ager Stick -</h3>
          <p class="menu-card-price">IDR 1k</p>
        </div>


        <!-- [Modal Form] -->

        <div class="modal fade" id="buy" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger" style="border-radius: 5px 5px 0px 0px;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times; </button>
                        <h4 class="modal-title" id="">Form Pembelian</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-group" action="" method="post">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-cutlery"></i></span>
                                <input type="number" class="form-control" name="dimsum" id="dimsum" placeholder="Masukkan Jumlah Dimsum Yang Dibeli *" readOnly>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-cutlery"></i></span>
                                <input type="number" class="form-control" name="kulkul" id="kulkul" placeholder="Masukkan Jumlah Kul-kul Yang Dibeli *" readonly>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-cutlery"></i></span>
                                <input type="number" class="form-control" name="ager" id="ager" placeholder="Masukkan Jumlah Ager Yang Dibeli *" readonly>
                            </div>


                            <div class="modal-footer">
                            <button type="button" id="btndimsum" onclick="Onlydimsum()" class="btn btn-success" style="float:left;">Dimsum</button>
                            <button type="button" onclick="exit()" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                            <button type="submit" class="btn btn-primary" name="check"><i class="fa fa-check"></i> Cek Total</button>
                            <button type="button" id="btnkulkul" onclick="Onlykulkul()" class="btn btn-success" style="float:left;">Kul-kul</button>
                            <button type="button" id="btnager" onclick="Onlyager()" class="btn btn-success" style="float:left;">Ager</button>
                            <button type="button" onclick="Ketiganya()" class="btn btn-success" style="float:left; margin:5px 0;"> Kul-kul & Dimsum & Ager</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -

-->

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

            <!-- Include all compiled plugins (below), or include individual files as needed -->

            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </body>

    </html>

    <script type="text/javascript">
        function Onlydimsum() {
            document.getElementById("dimsum").readOnly = false;
            document.getElementById("kulkul").readOnly = true;
            document.getElementById("ager").readOnly = true;
            document.getElementById("btnkulkul").disabled = false;
            document.getElementById("btndimsum").disabled = true;
            document.getElementById("btnager").disabled = false;
        }

        function Onlykulkul() {
            document.getElementById("dimsum").readOnly = true;
            document.getElementById("kulkul").readOnly = false;
            document.getElementById("ager").readOnly = true;
            document.getElementById("btnkulkul").disabled = true;
            document.getElementById("btndimsum").disabled = false;
            document.getElementById("btnager").disabled = false;
        }
        function Onlyager() {
            document.getElementById("dimsum").readOnly = true;
            document.getElementById("kulkul").readOnly = true;
            document.getElementById("ager").readOnly = false;
            document.getElementById("btnkulkul").disabled = false;
            document.getElementById("btndimsum").disabled = false;
            document.getElementById("btnager").disabled = true;
        }

        function Ketiganya() {
            document.getElementById("dimsum").readOnly = false;
            document.getElementById("kulkul").readOnly = false;
            document.getElementById("ager").readOnly = false;
            document.getElementById("btnkulkul").disabled = false;
            document.getElementById("btndimsum").disabled = false;
            document.getElementById("btndimsum").disabled = false;
        }

        function exit() {
            document.getElementById("dimsum").readOnly = true;
            document.getElementById("kulkul").readOnly = true;
            document.getElementById("ager").readOnly = true;
        }
    </script>