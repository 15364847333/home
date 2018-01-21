<?php
highlight_string("<?php echo \"hello!\" ?>");

function HeighPHPcode($Heightstring){
  do{
     $z=0;
     if(preg_match('/<phpcode>(.*?)</phpcode>/s',$Heightstring,$reg)) {
       $z=1;
       $code='';
       ob_start();
       highlight_string($reg[1]);
       $code = ob_get_contents(); 
       ob_end_clean();
       $reg[1] = addslashes($reg[1]);
       $Heightstring=preg_replace("/<phpcode>(.*?)</phpcode>/s","$code",$Heightstring,1);
      }
  }while($z);
  return $Heightstring;
}

?>
