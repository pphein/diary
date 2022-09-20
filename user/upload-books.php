<?php
session_start();
$auth = isset($_SESSION['auth']);
if ($auth == false) {
    header("location: ../index.php");
}

include("../config.php");

if (isset($_POST['submit'])) {
    $user_id = $_SESSION['id'];

    if (!is_dir("$user_id")) {
        mkdir("$user_id", 0700);
    }

    $targetDir = "$user_id/";
    $allowTypes = array('pdf', 'xml', 'txt', 'doc', 'odt', 'docx');
    $fileNames = array_filter($_FILES['files']['name']);

    if (!empty($fileNames)) {
        foreach ($_FILES['files']['name'] as $key => $val) {
            $fileName = basename($_FILES['files']['name'][$key]);
            $i = "-";
            while (file_exists($user_id . "/" . $fileName))
                $fileName = $i . $fileName;
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            if (in_array($fileType, $allowTypes)) {
                if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {

                    $insertValuesSQL .= "('" . $user_id . "', '" . $fileName . "' , NOW() , NOW()),";
                } else {
                    $_SESSION['msg'] = "File  Error";
                }
            } else {
                $_SESSION['msg'] = "Invalid file types";
                header("location: photo.php");
            }
        }

        if (!empty($insertValuesSQL)) {
            $insertValuesSQL = trim($insertValuesSQL, ',');
            $insert = mysqli_query($conn, "INSERT INTO books (user_id, book_title, book_date , book_modified ) VALUES $insertValuesSQL");

            if ($insert) {
                $_SESSION['msg'] = "Files are uploaded successfully.";
                header("location: books.php");
            } else {
                $_SESSION['msg'] = "Sorry, there was an error uploading your file.";
                header("location: books.php");
            }
        }
    } else {
        $_SESSION['msg'] = 'Please select a file to upload.';
        header("location: books.php");
    }
}

header("location: books.php");
