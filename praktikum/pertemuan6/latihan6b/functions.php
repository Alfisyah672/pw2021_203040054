<?php
function koneksi()
{
    $conn = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conn, 'pw_tubes_203040054');

    return $conn;
}


function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
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
    mysqli_query($conn, "DELETE FROM fashion WHERE id = $id") or die(mysqli_error($conn)) ;

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = $data['id'];
    $name = htmlspecialchars($data['name']);
    $image = htmlspecialchars($data['image']);
    $price = htmlspecialchars($data['price']);
    $description = htmlspecialchars($data['description']);
    $stok = htmlspecialchars($data['stok']);

    $query = "UPDATE fashion SET
                name = '$name',
                image = '$image',
                price = '$price',
                description = '$description',
                stok = '$stok'
                WHERE id = $id";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM fashion
                WHERE name LIKE '%$keyword%' ";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) 
    {
        $rows[] = $row;
    }

    return $rows;
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username / password tidak boleh kosong!');
                document.location.href = registrasi.php';
                </script>";
        return false;
    }

    if (query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
            alert('username sudah terdaftar!');
            document.location.href = registrasi.php';
        </script>";
        return false;
    }

    
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);
    
    return mysqli_affected_rows($conn);
}   

function login($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    if (query("SELECT * FROM user WHERE username = '$username' && password = '$password'"))
    {
        $_SESSION['login'] = true;

        header("Location: admin.php");
        exit;
    } else {
        return [
            'error' => true,
            'pesan' => 'Username / Password Salah!'
        ];
    }
}
?>