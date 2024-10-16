<?php

if (isset($_FILES['files'])) { // PERUBAHAN
    $errors = array();
    $allowed_extensions = array("jpg", "jpeg", "png", "gif"); // PERUBAHAN
    $file_count = count($_FILES['files']['name']); // PERUBAHAN

    for ($i = 0; $i < $file_count; $i++) { // PERUBAHAN
        $file_name = $_FILES['files']['name'][$i]; // PERUBAHAN
        $file_size = $_FILES['files']['size'][$i]; // PERUBAHAN
        $file_tmp = $_FILES['files']['tmp_name'][$i]; // PERUBAHAN
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); // PERUBAHAN

        if (in_array($file_ext, $allowed_extensions) === false) {
            $errors[] = "Ekstensi file $file_name tidak diperbolehkan. Hanya JPG, JPEG, PNG, dan GIF yang diizinkan."; // PERUBAHAN
            continue; // Lewati file ini jika ekstensi tidak sesuai
        }

        if ($file_size > 4194304) {
            $errors[] = "Ukuran file $file_name tidak boleh lebih dari 4 MB."; // PERUBAHAN
            continue; // Lewati file ini jika ukurannya tidak sesuai
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, "images/".$file_name);
        }
    }

    if (empty($errors)) {
        echo "Semua file berhasil diunggah.";
    } else {
        echo implode("<br>", $errors); // PERUBAHAN
    }
}
?>
