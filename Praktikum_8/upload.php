<!DOCTYPE html>
<html>
    <head>
        <title>File upload </title>
    </head>
    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload File" name="submit">
        </form>
    </body>
</html>