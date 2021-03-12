<?php
require_once 'functions.php';


if(isset($_POST['age'])) {
    $age = $_POST['age'];
    echo '年齢：' . str2html($age) . '<br>';
} else {
    echo '年齢が選択されていません。<br>';
}

if(isset($_POST['cs'])) {
    $man = $_POST['cs'];
    echo '性別：' . $man . '<br>';
} else {
    echo '性別が選択されていません。<br>';
}
