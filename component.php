<?php
 function buttonElement($btnid,$styleclass,$text,$name,$attr){
 	$btn="
 	<button name='$name' '$attr' class='$styleclass' id='$btnid'>$text</button>";
 	echo $btn;
 }
?>