 <?php
 $name='Елена';
 $NOTALLOWEDNAMECHARS = '\\:;,#\?\=\(\)\[\]\{\}%\$§"\!\^°\<\>\|~@€\r\n\t';
 $k=preg_match("/[".$NOTALLOWEDNAMECHARS."]/ui", $name, $matches); 
 var_dump($matches);
 
 