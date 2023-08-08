<?php 

try {
    $db = new PDO("mysql:host=localhost;dbname=butce_uygulaması;charset=utf8", 'beyza', '123456');
    //echo "Veritabanı bağlantısı başarılı";
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>
