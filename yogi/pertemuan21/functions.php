<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function upload()
{
    $photoName = $_FILES['gambar']['name'];
    $photoTmpName = $_FILES['gambar']['tmp_name'];
    $photoError = $_FILES['gambar']['error'];
    $photoSize = $_FILES['gambar']['size'];

    if ($photoError === 4) {
        echo "<script>alert('Silahkan pilih foto terlebih dahulu!')</script>";
        return false;
    }

    if ($photoSize > 1000000) {
        echo "<script>alert('Ukuran foto terlalu besar!')</script>";
        return false;
    }
    $extValid = ['png', 'jpg', 'jpeg'];
    $explode = explode('.', $photoName);
    $ext = strtolower(end($explode));
    if (!in_array($ext, $extValid)) {
        echo "<script>alert('Yang anda masukkan bukan foto!')</script>";
        return false;
    }

    $newPhotoName = time() . '.' . $ext;

    move_uploaded_file($photoTmpName, 'img/' . $newPhotoName);

    return $newPhotoName;
}

function add($data)
{
    global $conn;
    $nama = $data['nama'];
    $nim = $data['nim'];
    $email = $data['email'];
    $jurusan = $data['jurusan'];

    if (!upload()) {
        return false;
    }

    $gambar = upload();

    $query = "INSERT INTO mahasiswa VALUES (NULL ,'$nama','$nim', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function update($data)
{
    global $conn;
    $id = $data['id'];
    $nama = $data['nama'];
    $nim = $data['nim'];
    $email = $data['email'];
    $jurusan = $data['jurusan'];
    $oldPhoto = $data['oldPhoto'];

    if ($_FILES['gambar']['error'] === 4) {
        $photo = $oldPhoto;
    } else {
        $photo = upload();
    }

    $query = "UPDATE mahasiswa SET 
        nama='$nama', 
        nim='$nim', 
        email='$email', 
        jurusan='$jurusan', 
        gambar='$photo' WHERE id = $id
        ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa WHERE name LIKE '%$keyword%'";

    return query($query);
}
