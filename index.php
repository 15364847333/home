<?php
function HeighPHPcode($Heightstring){
     if($Heightstring) {
       $code='';
       ob_start();
       highlight_string($Heightstring);
       $code = ob_get_contents();
       ob_end_clean();
       $Heightstring=$code;
     }
     return $Heightstring;
}
$aa=HeighPHPcode("<?php echo 'ok';?>");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div>
      <?php echo $aa;?>
    </div>
  </body>
</html>
