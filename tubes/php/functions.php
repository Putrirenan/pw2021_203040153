<?php
/*
    Renandra Rahadian Putri
    203040153
    Jum'at, 13:00
*/
?>

<?php  
// fungsi untuk melakukan koneksi ke database
function koneksi() 
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040153");

    return $conn;
}

// function untuk melakukan query dan memasukkannya kedalam array
function query ($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// fungsi upload gambar ----------------------------------------->
function upload()
{
    $nama_file = $_FILES['picture']['name'];
    $tipe_file = $_FILES['picture']['type'];
    $ukuran_file = $_FILES['picture']['size'];
    $error = $_FILES['picture']['error'];
    $tmp_file = $_FILES['picture']['tmp_name'];

    // ketika tidak ada gambar dipilih
    if ($error == 4 ) {
        // echo "<script>
        //         alert('pilih gambar terlebih dahulu!');
        //         </script>";
        return 'nophoto.png';
    }

    //  cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
            alert('Yang anda pilih bukan gambar!');
            </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
            alert('Yang anda pilih bukan gambar!');
            </script>";
        return false;
    }

    // cek ukuran file
    // maksimal 5Mb == 5.000.000
    if ($ukuran_file > 5000000) {
        echo "<script>
            alert('Ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);
    
    return $nama_file_baru;
}


// function untuk menambahkan data didalam database ---------------------->
function tambah($data) 
{
    $conn = koneksi();

    // $picture     = htmlspecialchars($data['picture']);
    $name        = htmlspecialchars($data['name']);
    $brand       = htmlspecialchars($data['brand']);
    $description = htmlspecialchars($data['description']);
    $price       = htmlspecialchars($data['price']);
    $category    = htmlspecialchars($data['category']);

    // upload gambar ----------------------------------->
    $picture = upload();
    if (!$picture) {
        return false;
    }

    $query = "INSERT INTO products
                VALUES
                ('', '$picture', '$name', '$brand', '$description', '$price', '$category')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function untuk menghapus data didalam database --------------------------->
function hapus($id)
{
    $conn = koneksi();

    // menghapus gambar di foldder img
    $p = query("SELECT * FROM products WHERE id = $id")[0];
    if ($p['picture'] != 'nophoto.png') {
        unlink('../assets/img/' . $p['picture']);
        // die;
    } 

    mysqli_query($conn, "DELETE FROM products WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

// function ubah data ------------------------------------------------------->
function ubah($data) 
{
    $conn = koneksi();

    $id             = $data['id'];
    $picture_lama   = htmlspecialchars($data['picture_lama']);
    $name           = htmlspecialchars($data['name']);
    $brand          = htmlspecialchars($data['brand']);
    $description    = htmlspecialchars($data['description']);
    $price          = htmlspecialchars($data['price']);
    $category       = htmlspecialchars($data['category']);

    $picture = upload();
    if(!$picture) {
        return false;
    }

    if ($picture == 'nophoto.png') {
        $picture = $picture_lama;
    }

    $query = "UPDATE products SET
                picture = '$picture',
                name = '$name',
                brand = '$brand',
                description = '$description',
                price = '$price',
                category = '$category'
            WHERE id = $id
            ";
            
            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);
}

// function untuk melakukan registrasi ------------------------------------->
function registrasi($data) {
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = 'username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
              </script>";
        return false;
    }
// enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);

// tambah user baru
$query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
mysqli_query($conn, $query_tambah);

return mysqli_affected_rows($conn);

}


?>