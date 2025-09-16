<?php
//die('sdsdsds');
if(!is_dir('lang/vendor/moonshine/ru')) {mkdir('lang/vendor/moonshine/ru',0755,true); 
copy('vendor/zaharecc/moonshine/src/Laravel/lang/vendor/moonshine/ru/auth.php', 'lang/vendor/moonshine/ru/auth.php'); 
copy('vendor/zaharecc/moonshine/src/Laravel/lang/vendor/moonshine/ru/pagination.php', 'lang/vendor/moonshine/ru/pagination.php'); 
copy('vendor/zaharecc/moonshine/src/Laravel/lang/vendor/moonshine/ru/ui.php', 'lang/vendor/moonshine/ru/ui.php'); 
copy('vendor/zaharecc/moonshine/src/Laravel/lang/vendor/moonshine/ru/validation.php', 'lang/vendor/moonshine/ru/validation.php');
}

?>