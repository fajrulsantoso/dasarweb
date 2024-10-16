<?php 
if(isset($_POST["submit"])){
    if(isset($_FILES["myfile"]) && $_FILES["myfile"]["error"] == 0){
        $targetdir = "images/"; // Tujuan untuk menyimpan file
        $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
        $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION ));

        $allowedExtensions = array("txt", "pdf", "doc", "doxc");
        $maxsize = 3*1024*1024;

        if(in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"]<=$maxsize)

        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)){
            echo "File berhasil diunggah.";   
        }
        else{
            echo "Gagal mengunggah file.";
        }
    }
    else{
        echo "File tidak valid atau melebihi ukuran maksimun yang diizinkan";
    }
}
?>
