<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?><!DOCTYPE html>
<html class="no-js">
    
  <head>
  <?php echo $this->Html->charset(); ?>
  <base href="/">
  <title>wpnc - <?php echo $title_for_layout?></title>
  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
  <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
  <link href="assets/styles.css" rel="stylesheet" media="screen">
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="vendors/jquery-1.9.1.js"></script>
  <script type="text/javascript">
    /* http://blog.bornneet.com/Entry/143/ */
    var randobet = function(n, b) {
        b = b || '';
        var a = 'abcdefghijklmnopqrstuvwxyz'
            + 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
            + '0123456789'
            + b;
        a = a.split('');
        var s = '';
        for (var i = 0; i < n; i++) {
            s += a[Math.floor(Math.random() * a.length)];
        }
        return s;
    };
    // randobet(10, '-_!'); // 2OM_g0-76n
  </script>
  <script type="text/javascript">
    $(document).ready( function() {
        $(".apikeyrenew").click(function(){
            var api_key_value = randobet(16,'');
            $("#WebsiteApiKey").val(api_key_value);
        });
    });
  </script>
  
  </head>
  
  <?php
  echo $this->Html->meta('icon');
  echo $this->fetch('meta');
  echo $this->fetch('script');
  ?>
</head>
<body>
  <div id="container">
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">通知センター</a>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
              <li class="dropdown">
                <?php if($this->Session->read('Auth.User')) : ?>
                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php echo $this->Session->read('User.username'); ?> <i class="caret"></i></a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="Users/edit/<?php echo $this->Session->read('User.id'); ?>">Profile</a></li>
                  <li class="divider"></li>
                  <li><a tabindex="-1" href="Users/logout">Logout</a></li>
                </ul>
                <?php endif; ?>
              </li>
            </ul>
            <ul class="nav">
              <li><a href="Notifications">通知ステータス</a></li>
              <li class="dropdown">
                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">サイト一覧<i class="caret"></i></a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="Websites">サイト一覧</a></li>
                  <li><a tabindex="-1" href="Websites/add">サイト追加</a></li>
                  <li><a tabindex="-1" href="Websites/order">サイト並び替え</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">管理者<i class="caret"></i></a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="Users">管理ユーザ一覧</a></li>
                  <li><a tabindex="-1" href="Users/add">管理ユーザ追加</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
 
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12" id="content">
          <?php $message = $this->Session->flash(); if (strlen($message) > 0):?><div class="row-fluid">
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <?php echo $message; ?>
            </div>
          </div><?php endif?>
          <div class="row-fluid">
            <div class="span">
              <?php echo $this->fetch('content'); ?>
            </div>
          </div>
        </div>
      </div>
      <!--/.fluid-container-->
      <script src="vendors/jquery-1.9.1.min.js"></script>
      <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/scripts.js"></script>
    </div>
  </div>
  <?php # echo $this->element('sql_dump'); ?>
</body>
</html>
