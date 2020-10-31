<?
$responce = "";
if (preg_match('/[A-Za-z0-9-]+@[A-Za-z0-9-]+/', $_POST[email]) == 1){
    $log = date('Y-m-d H:i:s') . ' Почта введена без ошибок'."\n";
}
else {
    $log = date('Y-m-d H:i:s') . ' Почта введена неправильно'."\n";
    $responce .= 'Почта введена неверно'."\n";
}

if ($_POST['password2'] != $_POST['password']){
    $responce .='Повторный пароль введён не верно!'."\n" ;
    $log .= date('Y-m-d H:i:s') . ' Повторный пароль введён не верно!'."\n";
}

if ($_POST['password'] ==  '') {
    $responce .= 'Введите пароль!'."\n";
    $log .= date('Y-m-d H:i:s') . ' Пустой пароль'."\n";
}

$users = array(
    email => array("1@1","2@2","3@3","4@4"),
    id => array("1","2","3","4"),
    name => array("Max","Alex","Nick","Ann")
);

foreach ($users['email'] as $key => $val) {
    if ($val === $_POST[email]){
        $responce .= 'Почта уже существует'."\n";
        $log .= date('Y-m-d H:i:s') . ' Почта ввёденная пользователем уже существует в массиве'."\n";
    }
    else if ( $key == (count($users['email'])-1) ) {
        $log .= date('Y-m-d H:i:s') . ' Почта ввёденная пользователем не существует в массиве'."\n";
    }
}
echo $responce;
file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);
?>