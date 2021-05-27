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
?>