<?php 
session_start(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>&Aacute;rea do Cliente</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/pages.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/AC_RunActiveContent.js"></script>
        <script src="js/jquery142.js" type="text/javascript"></script>
        <script src="js/sound.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
        <script src="js/jquery-1.8.2.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
        <script src="js/jquery-ui.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />

        <link rel="stylesheet" href="js/lightbox/css/lightbox.css" type="text/css" media="screen" />
        <script src="js/lightbox/js/prototype.js" type="text/javascript"></script>
        <script src="js/lightbox/js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
        <script src="js/lightbox/js/lightbox.js" type="text/javascript"></script>
        <link href="css/jquery.bxslider.css" rel="stylesheet" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/easySlider1.7.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#slider").easySlider({
                    auto: true,
                    continuous: true
                });
            });
        </script>
         <link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />	

        <!--BEGIN OF TERMS OF USE. DO NOT EDIT OR DELETE THESE LINES. IF YOU EDIT OR DELETE THESE LINES AN ALERT MESSAGE MAY APPEAR WHEN TEMPLATE WILL BE ONLINE-->
        <!--<style>#free-flash-header a,#free-flash-header a:hover {color:#b9b9b9;}#free-flash-header a:hover {text-decoration:none}</style>-->
        <!--END OF TERMS OF USE-->
        <!--[if IE 7]>
        <link href="style_ie7.css" rel="stylesheet" type="text/css" />
        <![endif]-->
        <!--[if IE 6]>
        <link href="style_ie6.css" rel="stylesheet" type="text/css" />
        <![endif]-->
    </head>

    <body>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																		                                                                                                                                                                                         																																																																														                                                                               																																																																										  
        <div id="container">
            <!--BEGIN OF TERMS OF USE. DO NOT EDIT OR DELETE THESE LINES. IF YOU EDIT OR DELETE THESE LINES AN ALERT MESSAGE MAY APPEAR WHEN TEMPLATE WILL BE ONLINE-->
            <div id="copy" style="height: 75px; position: absolute; bottom: 0px; left:0px; border: none; width: 100%;"><br/><br/><br/>
                <div style=" background:#CCC; background: linear-gradient(top , rgb(234, 234, 234) , rgb(203, 203, 203) 100%);
                     background: -o-linear-gradient(top , rgb(234, 234, 234) , rgb(203, 203, 203) 100%);
                     background: -ms-linear-gradient(top , rgb(234, 234, 234) , rgb(203, 203, 203) 100%);
                     background: -moz-linear-gradient(top , rgb(234, 234, 234) , rgb(203, 203, 203) 100%);
                     background: -webkit-linear-gradient(top , rgb(234, 234, 234) , rgb(203, 203, 203) 100%);
                     "><small><p>Copyright <b>BIOCESP Laborat&oacute;rio</b> - &copy; 2014 - Todos os direitos reservados</p></small></div>    
            </div>	
            <!--END OF TERMS OF USE-->
            <div id="header">
                <div id="logo"><span class="logoBlanc"><img src="images/logo.png" width="275px" valign="top"></span></div>
                <div id="menu_haut">
                    <!--<img src="images/spacer.gif" width="1" height="50" /><br /><a href="javascript:showPage('_faq.htm', '');" class="lienHaut">FAQ</a>  |  <a href="javascript:showPage('_about.htm', '');" class="lienHaut">ABOUT US</a>  |  <a href="javascript:showPage('cadastroUsuario.htm', '');" class="lienHaut">CADASTRE-SE</a>-->
                    
                    <h2>Seja Bem-Vindo <?=$_SESSION['nome'] ?><br><p style="font-size: 14px;">Hoje &eacute; 
                        <?php
                        $dia = jddayofweek ( cal_to_jd(CAL_GREGORIAN, date("m"),date("d"), date("Y")) , 1 );
                        if($dia == 'Monday'){
                            echo 'Segunda-Feira';
                        }
                        if($dia == 'Tuesday'){
                            echo 'Terça-Feira';
                        }
                        if($dia == 'Wednesday'){
                            echo 'Quarta-Feira';
                        }
                        if($dia == 'Thursday'){
                            echo 'Quinta-Feira';
                        }
                        if($dia == 'Friday'){
                            echo 'Sexta-Feira';
                        }
                        if($dia == 'Saturday'){
                            echo 'S&aacutebado';
                        }
                        if($dia == 'Sunday'){
                            echo 'Domingo';
                        }
                        echo', '.date("d/m/Y");
                        ?></p></h2><br>
                            <form action="Logout.php" method="post">
                            <input class="button_send" type="submit" value="Sair" >
                            </form>
                                </div>
                                <div id="menu_img">
                                    <div id="slider" >
                            <ul>				
                                
                                <li><img src="images/02.jpg" alt="Css Template Preview" width="900px" height="220px"/></li>
                                <li><img src="images/03.jpg" alt="Css Template Preview" width="900px" height="220px"/></li>
                                <li><img src="images/04.jpg" alt="Css Template Preview" width="900px" height="220px"/></li>
                                <li><img src="images/05.jpg" alt="Css Template Preview" width="900px" height="220px"/></li>			
                            </ul>
                        </div>


                                </div>
                                <div id="menu">
                                    <ul id="navigation">
                                        <li style="width: 145px;"></li>
                                        <li style="background: url(images/azulclaro3.jpg) no-repeat; background-position: 0px 12px;"><a class="m1" href="javascript:showPage('marcacaoexame.php', '');" title="aller � la section 1"><br />MARCA&Ccedil;&Atilde;O DE EXAME</a></li>
                                        <li style="background: url(images/azulclaro3.jpg) no-repeat; background-position: 0px 12px;"><a class="m1" href="javascript:showPage('historicoclinico.html', '');" title="aller � la section 2"><br />HIST&Oacute;RICO CL&Iacute;NICO</a></li>
                                        <li style="background: url(images/azulclaro3.jpg) no-repeat; background-position: 0px 12px;"><a class="m1" href="javascript:showPage('', '');" title="aller � la section 3"><br />VISUALIZAR CONSULTAS</a></li>
                                        <li style="background: url(images/azulclaro3.jpg) no-repeat; background-position: 0px 12px;"><a class="m1" href="javascript:showPage('', '');" title="aller � la section 4"><br />MENSAGENS</a></li>
                                        <li style="background: url(images/azulclaro3.jpg) no-repeat; background-position: 0px 12px;"><a class="m1" href="javascript:showPage('configuracoes.html', '');" title="aller � la section 5"><br />CONFIGURA&Ccedil;&Otilde;ES</a></li><!--
                                        <li style="background: url(images/b2.gif) no-repeat; background-position: 0px 12px;"><a class="m6" href="javascript:showPage('_products.htm', '');" title="aller � la section 6"><br />PRODUCTS</a></li>
                                        <li style="background: url(images/b2.gif) no-repeat; background-position: 0px 12px;"><a class="m7" href="javascript:showPage('_careers.htm', '');" title="aller � la section 7"><br />CAREERS</a></li>-->
                                    </ul>
                                </div>   

                                </div>
                                <div id="content" class="dynamicContent">

                                </div>
                                </div>
                                </body>
                                </html>
