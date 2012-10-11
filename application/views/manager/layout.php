<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Untitled</title>
  
  <script type="text/javascript" src="/libs/jquery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="/libs/jquery/jquery.json-2.3.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="/libs/bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="/libs/bootstrap/js/bootstrap.js"></script>
  
  <link rel="stylesheet" type="text/css" href="/skins/default/css/fixed.css">
  <link rel="stylesheet" type="text/css" href="/skins/default/css/styles.css">
  
  <script type="text/javascript" src="/skins/default/js/functions.js"></script>
  <script type="text/javascript" src="/skins/default/js/script.js"></script>
  
</head>
<body>
  <div class="container sn-manager">
    <div class="row header">
      
    </div>
    <div class="row">

      <div class="span12 sn-center-side">
      
        <div style="position: static; margin-bottom: 0;" class="navbar navbar-inverse">
              <div class="navbar-inner">
                <div class="container">
                  <a data-target=".subnav-collapse" data-toggle="collapse" class="btn btn-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <a title="Главная" href="/manager/" class="brand"><img src="/skins/default/img/glyphicons_020_home.png" alt=""></a>
                  <div class="nav-collapse subnav-collapse">
                    <ul class="nav">
                      <li<?= ($controller == 'adverts' ? ' class="active"' : '') ?>><a href="/manager/adverts/">Реклама</a></li>
                      <li><a href="#">Link</a></li>
                      <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li class="nav-header">Nav header</li>
                          <li><a href="#">Separated link</a></li>
                          <li><a href="#">One more separated link</a></li>
                        </ul>
                      </li>
                    </ul>
                    <form action="" class="navbar-search pull-left">
                      <input type="text" placeholder="Search" class="search-query span2">
                    </form>
                    <ul class="nav pull-right">
                      <li><a href="#">Link</a></li>
                      <li class="divider-vertical"></li>
                      <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Профиль <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Настройки</a></li>
                          <li><a href="#">База знаний</a></li>
                          <li><a href="#">Тех поддержка</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Выход</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div>
      
        <div class="sn-wrapper sn-center-wrapper" id="sn-receiver-content">
          <?= $content ?>
        </div>
        <div class="sn-footer">
          <div class="sn-wrapper sn-footer-wrapper"></div>
        </div>
      </div>
    </div>
    
  </div>
</body>
</html>
