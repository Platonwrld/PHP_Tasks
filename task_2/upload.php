<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="filename">
    <input type="submit" value="Send">
</form>

<?php

mkdir(
'upload'
);


if (move_uploaded_file($_FILES['filename']['tmp_name'], 'upload/'.$_FILES['filename']['name'])) {
    
    $file = 'upload/'.$_FILES['filename']['name'];  # путь к загружаемому файлу
    $openfile = fopen($file, "r");                  # открытие файла
    $cont = fread($openfile, filesize($file));      # получаем содержимое файла

    $openfile = fopen($file, "r");                  # еще раз открываем файл для чтения
    $name = 1;                                      # делаем name для файлов     

    while (($line = fgetcsv($openfile)) !== FALSE) {
        echo '<pre>';
        echo '</pre>';
        $fp = fopen('upload/'.$name, 'w');   
        fwrite($fp, $line[1]);
        $name ++;
    }

    fclose($openfile);

    echo 'Файл скопирован на сервер';
} 

?>