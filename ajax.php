<?php

  header('Content-type: text/html; charset=utf-8');
  require_once('inc.php');

  if(isset($_REQUEST['block'])){$block = $_REQUEST['block'];}else{$block = 'none';}

  /////////////////////////////////////////////////
  //  LATENCY
  /////////////////////////////////////////////////

  if($block == 'latency'){
    echo latency();
  }

  /////////////////////////////////////////////////
  //  TS3
  /////////////////////////////////////////////////

  else if($block == 'ts3'){
    echo ts3();
  }

  /////////////////////////////////////////////////
  //  METEO
  /////////////////////////////////////////////////

  else if($block == 'meteo'){
    echo meteo();
  }

  /////////////////////////////////////////////////
  //  PING
  /////////////////////////////////////////////////

  else if($block == 'ping'){
    echo ping();
  }

  /////////////////////////////////////////////////
  //  VPN PPTPD
  /////////////////////////////////////////////////

  else if($block == 'vpn'){
    echo vpn();
  }

  /////////////////////////////////////////////////
  //  IFSTAT
  /////////////////////////////////////////////////

  else if($block == 'ifstat'){
    imagickHisto ($_REQUEST['max'], $_REQUEST['eth'], $_REQUEST['up_down']);
  }

?>