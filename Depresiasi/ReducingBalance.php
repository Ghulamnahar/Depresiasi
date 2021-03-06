<!DOCTYPE html>
<!--
Template Name: Chillaid
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Reducing Balance</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="stylesheet" href="css/lightbox.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    <ba
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <a href="index.html"><h1><font color="Blue">Perhitungan Depresiasi</font></h1></a>
                </div>
            </nav>
        </div>
    </div>
<center>
<br>
<br>

<div class="container bg-dark text-white">
    <?php
    $HP=null;
    $NR=null;
    $UE=null;
    if (isset($_GET['HP'])) {
        $HP=$_GET['HP'];
        $NR=$_GET['NR'];
        $UE=$_GET['UE'];
        $XX=$UE/100;
        $hasil=($HP-$NR)*$XX;
    }
    ?>
    <div class="rows">
        <form action="ReducingBalance.php" method="get">
            <h2><b><center><font color="Green"> Reducing Balance Depreciation</font> </center></b></h2>
            <center><table align="center">
                    <tr>
                        <td>Net Book Value</td>
                        <td> : </td>
                        <td><input type="text" name="HP" class="form-control" value="<?php echo $HP; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Residual Value</td>
                        <td> : </td>
                        <td><input type="text" name="NR" class="form-control" value="<?php echo $NR; ?>"  required></td>  
                    </tr>
                    <tr>
                        <td>Rate (%)</td>
                        <td> : </td>
                        <td><input type="text" name="UE" class="form-control" value="<?php echo $UE; ?>"  required></td>
                    </tr>
                </table></center>
            <br>
            <button type="button" class="btn btn-warning" onclick="location.href='?'">Hapus</button>
            <button type="submit" class="btn btn-info">Hitung</button>
            </br>
        </form>
        <br>
        <?php
        if (isset($_GET['HP'])) {
            $hasil =($hasil);
            echo "<h1>$hasil</h1>" ;
        }
        ?>
    </div>
    </br>
    </br>

</html>