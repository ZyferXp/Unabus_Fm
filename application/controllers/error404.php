<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Error 404</title>
</head>
<body>
<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class Error404 extends CI_Controller { 
   public function index(){
      echo 'Error 404. Usted está intentando acceder a una página que no existe.';
   }
}
?>
</body>
</html>