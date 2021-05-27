<?php
function koneksi()
{
    $db = mysqli_connect("localhost", "root", "");
    mysqli_select_db($db, "pw_tubes_203040054");

    return $db;
}


function query($sql)
{
    $db = koneksi();
    $result = mysqli_query($db, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $name = htmlspecialchars($data['name']);
    $image = htmlspecialchars($data['image']);
    $price = htmlspecialchars($data['price']);
    $description = htmlspecialchars($data['description']);
    $stok = htmlspecialchars($data['stok']);

    $query = "INSERT INTO fashion
                VALUES
                ('', '$name', '$image', '$price', '$description', '$stok')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)

{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM fashion WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $name = htmlspecialchars($data['name']);
    $image = htmlspecialchars($data['image']);
    $price = htmlspecialchars($data['price']);
    $description = htmlspecialchars($data['description']);
    $stok = htmlspecialchars($data['stok']);

    $query = "UPDATE fashion SET name = '$name', image = '$image', price = '$price', description = '$description', stok = '$stok', WHERE id = '$id' ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

if (isset($_GET['cari'])) 
{
    $keyword = $_GET['keyword'];
    $fashion = query("SELECT * FROM fashion WHERE
                    name LIKE '%$keyword%' OR
                    image LIKE '%$keyword%' OR
                    price LIKE '%$keyword%' OR
                    description LIKE '%$keyword%' OR
                    stok LIKE '%keyword%' ");
} else {
    $fashion = query("SELECT * FROM fashion");
}
?>