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

// function untuk menambahkan data didalam database
function tambah($data) 
{
    $conn = koneksi();

    $picture     = htmlspecialchars($data['picture']);
    $name        = htmlspecialchars($data['name']);
    $brand       = htmlspecialchars($data['brand']);
    $description = htmlspecialchars($data['description']);
    $price       = htmlspecialchars($data['price']);
    $category    = htmlspecialchars($data['category']);

    $query = "INSERT INTO products
                VALUES
                ('', '$picture', '$name', '$brand', '$description', '$price', '$category')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function untuk menghapus data didalam database
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM products WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// function ubah data 
function ubah($data) 
{
    $conn = koneksi();

    $id          = $data['id'];
    $picture     = htmlspecialchars($data['picture']);
    $name        = htmlspecialchars($data['name']);
    $brand       = htmlspecialchars($data['brand']);
    $description = htmlspecialchars($data['description']);
    $price       = htmlspecialchars($data['price']);
    $category    = htmlspecialchars($data['category']);

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

?>