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
      <div class="span1 sn-left-side">
        <div class="sn-button-group">
          <div class="sn-arrow-scroller"><div class="sn-arrow-left"></div></div>
          <ul class="sn-nav-bar">
            <li<?= ($controller == 'index' ? ' class="active"' : '') ?>><a href="/manager/" id="sn-button-manager-home"></a></li>
            <li<?= ($controller == 'page1' ? ' class="active"' : '') ?>><a href="/manager/page1" id="sn-button-manager-page2"></a></li>
            <li<?= ($controller == 'page2' ? ' class="active"' : '') ?>><a href="/manager/page2" id="sn-button-manager-page3"></a></li>
            <li<?= ($controller == 'page3' ? ' class="active"' : '') ?>><a href="/manager/page3" id="sn-button-manager-page4"></a></li>
          </ul>
        </div>
      </div>
      <div class="span11 sn-center-side">
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
