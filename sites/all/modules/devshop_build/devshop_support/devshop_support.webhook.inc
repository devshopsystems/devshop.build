<?php

function devshop_support_intercom_webhook() {
  print "hello webhook";
  watchdog('devshop_support_debug', print_r($_POST, 1));
  exit;
}