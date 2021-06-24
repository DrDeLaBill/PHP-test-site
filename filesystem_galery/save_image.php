<?php
  include('class_simple_image.php');

  $uploaddir = './img/big/';
  $fileName = $_FILES['userfile']['name'];

  $new_filename = uniqid();
  $extension = '.' . substr($fileName, strrpos($fileName, '.') + 1);
  if (exif_imagetype($_FILES['userfile']['tmp_name'])) {
    $uploadfile = $uploaddir . $new_filename . $extension;

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        setcookie('message', 'Файл корректен и был успешно загружен.', time() + 3, '/');
    } else {
        setcookie('message', 'Возможная атака с помощью файловой загрузки!', time() + 3, '/');
    }

    $image = new SimpleImage();
    $image->load($uploadfile);
    if ($image->getWidth() > $image->getHeight()) {
        $image->resizeToWidth(200);
    } else {
        $image->resizeToHeight(200);
    }
    $image->save("./img/small/{$new_filename}{$extension}");

  } else {
    setcookie('message', 'Некорректный тип файла!', time() + 3, '/');
  }

  exit("<meta http-equiv='refresh' content='0; url= /phpsite/filesystem_galery/index.php'>");
