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
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
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
                // Upload file to server
                if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                    // Image db insert sql
                    $insertValuesSQL .= "('" . $fileName . "', NOW(),'" . $user_id . "'),";
                } else {
                    $_SESSION['msg'] = "File Size Error";
                }
            } else {
                $_SESSION['msg'] = "Invalid file types";
                header("location: photo.php");
            }
        }

        if (!empty($insertValuesSQL)) {
            $insertValuesSQL = trim($insertValuesSQL, ',');

            // Insert image file name into database
            $insert = mysqli_query($conn, "INSERT INTO images (file_name, uploaded_on , user_id) VALUES $insertValuesSQL");

            if ($insert) {
                $_SESSION['msg'] = "Files are uploaded successfully.";
                header("location: photo.php");
            } else {
                $_SESSION['msg'] = "Sorry, there was an error uploading your file.";
                header("location: photo.php");
            }
        }
    } else {
        $_SESSION['msg'] = 'Please select a file to upload.';
        header("location: photo.php");
    }
}

header("location: photo.php");
