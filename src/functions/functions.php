<?php 
$host = 'sql112.infinityfree.com';
$username = 'if0_39202927';
$password = 'hvyQYs9Bz9P49mX';
$dbname = 'if0_39202927_berita';

$conn = mysqli_connect($host, $username, $password, $dbname);

function query($query) {
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function upload() {
    $fileName = $_FILES["gambar"]["name"];
    $fileTmpName = $_FILES["gambar"]["tmp_name"];
    $fileSize = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    if($error === 4) {
        echo "
            <script>
                alert('Select The Image First');
            </script>
        ";
    }
    $allowedExtension = ['jpg', 'jpeg', 'png'];
    $fileExtension = explode('.', $fileName);
    $fileExtension = strtolower(end($fileExtension));
    if(!in_array($fileExtension, $allowedExtension)) {
        echo "
            <script>
                alert('What You Uploaded is Not an Image');
            </script>
        ";
        return false;
    }
    if($fileSize >  3145728) {
        echo "<script>
                alert('Image Size is too Large');
            </script>";
        return false;
    }
    $newName = uniqid();
    $newName .= '.' . $fileExtension;
    move_uploaded_file($fileTmpName, "../assets/images/news/$newName");
    return $newName;
}

function tambah_berita($data) {
    global $conn;

    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $body = $_POST['body'];
    $image = upload();
    if (!$image) {
        return false;
    }
    $query = "INSERT INTO news (title, slug, body, image) VALUES('$title', '$slug', '$body', '$image')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>