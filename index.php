<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="Página Inicial">
    <meta name="author" content="FACIN">

    <title>Todos contra o Aedes Aegypti</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php
        require_once("menu.php");
    ?>
    
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://www.santiago.rs.gov.br/uploads/categories/647/page_text_19a01593e3cd4b57b8b967b60937da64.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Clique aqui</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header text-center">
                    <SCRIPT LANGUAGE="JAVASCRIPT">
                        var now = new Date();
                        var mName = now.getMonth() +1 ;
                        var dName = now.getDay() +1;
                        var dayNr = now.getDate();
                        var yearNr=now.getYear();
                        if(dName==1) {Day = "Domingo";}
                        if(dName==2) {Day = "Segunda-feira";}
                        if(dName==3) {Day = "Terça-feira";}
                        if(dName==4) {Day = "Quarta-feira";}
                        if(dName==5) {Day = "Quinta-feira";}
                        if(dName==6) {Day = "Sexta-feira";}
                        if(dName==7) {Day = "Sábado";}
                        if(mName==1){Month = "Janeiro";}
                        if(mName==2){Month = "Fevereiro";}
                        if(mName==3){Month = "Março";}
                        if(mName==4){Month = "Abril";}
                        if(mName==5){Month = "Maio";}
                        if(mName==6){Month = "Junho";}
                        if(mName==7){Month = "Julho";}
                        if(mName==8){Month = "Agosto";}
                        if(mName==9){Month = "Setembro";}
                        if(mName==10){Month = "Outubro";}
                        if(mName==11){Month = "Novembro";}
                        if(mName==12){Month = "Dezembro";}
                        if(yearNr < 2000) {Year = 1900 + yearNr;}
                        else {Year = yearNr;}
                        var todaysDate =(" " + Day + ", " + dayNr + " - " + Month + " - " + Year + " - ");

                        document.write(' '+todaysDate);

                    </SCRIPT>
                    
                    <SPAN ID="Clock">00:00:00</SPAN>

                    <SCRIPT LANGUAGE="JavaScript">
                        var Elem = document.getElementById("Clock");
                        function Horario(){ 
                        var Hoje = new Date(); 
                        var Horas = Hoje.getHours(); 
                        if(Horas < 10){ 
                          Horas = "0"+Horas; 
                        } 
                        var Minutos = Hoje.getMinutes(); 
                        if(Minutos < 10){ 
                          Minutos = "0"+Minutos; 
                        } 
                        var Segundos = Hoje.getSeconds(); 
                        if(Segundos < 10){ 
                          Segundos = "0"+Segundos; 
                        } 
                        Elem.innerHTML = Horas+":"+Minutos+":"+Segundos; 
                        } 
                        window.setInterval("Horario()",1000);
                    </SCRIPT>
                </h3>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="glyphicon glyphicon-envelope"></i> Denúncia</h4>
                    </div>
                    <div class="panel-body">
                        <p>A área denúncias é destinada para denunciar água parada, focos de mosquitos, lixos jogados em lugares irregulares, também denunciar poessoas que jogam lixos em lugares indevidos.<br/><br/> </p>
                        <a href="denuncias.php" class="btn btn-default">Para fazer uma denúncia clique AQUI</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="glyphicon glyphicon-paste"></i>Perguntas frequentes</h4>
                    </div>
                    <div class="panel-body">
                        <p>Na área perguntas frequentes informações sobre o mosquito Aedes Aegypti, tais como a forma visual dele e sobre como se reproduz. Possui informações sobre as doenças que ele pode transmitir e também dicas de prevenção, vale a pena conferir!</p>
                        <a href="faq.php" class="btn btn-default">Para ver as perguntas frequentes clique AQUI</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="glyphicon glyphicon-map-marker"></i> Veja as ocorrências de focos</h4>
                    </div>
                    <div class="panel-body">
                        <p>O site possui um mapemaneto do municipio de Santiago, onde a população pode observar onde foi encontrado focos do mosquito, entre oturas informações.<br/><br/></p>
                        <a href="mapeamento.php" class="btn btn-default">Para ver o mapeamento clique AQUI</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Portfolio Heading</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Cada um fazendo sua parte, teremos uma cidade limpa e sem riscos de focos do mosquito Aedes Aegypti</h3>
            </div>
            <div class="col-md-6">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.3.7</strong>
                    </li>
                    <li>jQuery v1.11.1</li>
                    <li>Font Awesome v4.2.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="imagens/imagempaginaHOME.png" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <h3>Para voltar ao topo clique no boão ao lado.</h3>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">AQUI</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <?php
            require_once("footer.php");
        ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
