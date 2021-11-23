<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location: index.html');
}
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Tec Admk</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
             <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                
                            </ul>
							<ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="desativartrabalho.php">Desativar trabalho</a></li>
                                <li class="nav-item active"><a class="nav-link" href="desativarproduto.php">Desativar produtos</a></li>
                                <li class="nav-item active"><a class="nav-link" href="mudarsenha.php">Mudar Senha</a></li>
								<li class="nav-item active"><a class="nav-link" href="sair.php">SAIR</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        
        <!--================End Home Banner Area =================-->
        
            


        <!--================Contact Area =================-->
        <section style="margin-bottom: 100px">
            <div class="container">
                <?php if (isset($_SESSION['resposta'])) {
                    echo $_SESSION['resposta'];
                    unset($_SESSION['resposta']);
                } ?>
                <form action="cadastrar.php" method="post" enctype="multipart/form-data">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                   <h6>Cadastro de produto ou trabalho</h6>
                   <br>
                   <br>
                   <label>TIPO</label>
                   <br>
                   <select id="tipo" name="tipo">
                    <option value="1">Escolha</option>
                    <option value="2">Produto</option>
                    <option value="3">Trabalho</option>
                   </select>   
                   <br>
                   <br>
                   <br>
                   <div id="mostrar">
                        <select id="produto" name="produto">
                            <option value="p1">Camera de segurança</option>
                            <option value="p2">Alarme</option>
                            <option value="p3">Cerca elétrica</option>
                        </select>
                        <br>
                        <br>
                        <br>
                        <br>
                        <label>Nome do produto</label>  
                        <input type="text" class="form form-control" name="nomeproduto">
                        <br>
                        <label>Preço do produto: </label>
                        <input type="text" name="preço">
                        <br>
                        <label>Descrição do produto</label>
                        <textarea name="despro" class="form form-control">   
                        </textarea> 
                        <label>Ficha técnica</label>
                        <textarea name="ficha" class="form form-control">   
                        </textarea> 
                        <br>
                        <br>
                        <input type="file" name="imgpro[]" multiple>
                        <br>
                        <br>
                        <input type="radio" name="promocao"> Este Produto é uma promoção?
                   </div>
                   <!-- parte do cadastro do trabalho -->
                   <div id="trabalho">
                        <br>
                        <br>
                        <label>Nome do trabalho</label>  
                        <input type="text" class="form form-control" name="tra">
                        <br>
                        <label>Descrição do trabalho</label>
                        <textarea  class="form form-control" name="des">   
                        </textarea> 
                        <br>
                        <br>
                        <input type="file" name="fotos[]" multiple>
                        
                   </div>
                   <br>
                   <br>
                   <br>
                    <button type="submit" class="btn btn-info" id="bt">Cadastrar</button>
                </form>
                
            </div>
        </section>
        <!--================Contact Area =================-->
        
        <!--================Instagram Area =================-->
        
        <!--================End Instagram Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>About Me</h3>
        					</div>
        					<p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
        					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Newsletter</h3>
        					</div>
        					<p>Stay updated with our latest trends</p>
        					
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        <!--================Contact Success and Error message Area =================-->
       
        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                //$('#produto').hide();
                $('#tipo').change(function(){
                    if($('#tipo').val() == 2){
                        //alert("é dois!")
                        $('#mostrar').show();
                        $('#bt').show();
                        $('#trabalho').hide();
                    }
                    if($('#tipo').val() == 3){
                        //alert("é dois!")
                        $('#mostrar').hide();
                        $('#trabalho').show();
                        $('#bt').show();
                    }
                    if($('#tipo').val() == 1){
                        //alert("é dois!")
                        $('#mostrar').hide();
                        $('#trabalho').hide();
                        $('#bt').hide();
                    }
                })
            
        });
        </script>
    </body>

    <style type="text/css">
        #bt{
            display: none;
        }
        #mostrar{
            display: none;
        }
        #trabalho{
            display: none;
        }
    </style>
</html>