<?php

$mahasiswa = [
    [1, "D212111001", "Aliftia Radianti Taniasari"],
    [2, "D212111002", "Cahya Julianti"],
    [3, "D212111003", "Dasimah Seftiani"],
    [4, "D212111004", "Desi Syifa Fitria"],
    [5, "D212111005", "Dewi Yulianti"],
    [6, "D212111006", "Gita Septiani"],
    [7, "D212111007", "Ikhlas Wandana"],
    [8, "D212111008", "Intan Khoirunnisa"],
    [9, "D212111009", "Islah Nurhasanah"],
    [10, "D212111010", "Kenia Nurazizah"],
    [11, "D212111011", "M. Rivaldi Hafidz Fathurahman"],
    [12, "D212111012", "Puspa Dewi Kusumawati"],
    [13, "D212111013", "Renaldi Irawan"],
    [14, "D212111014", "Rizaldy Muhamad Sopyan"],
    [15, "D212111015", "Rudi Loilatu"],
];

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>NO</th>
        <th>NIM</th>
        <th>NAMA</th>
        </tr>";

foreach ($mahasiswa as $mhs) {
    echo "<tr>";
    echo "<td>" . $mhs[0] . "</td>";
    echo "<td>" . $mhs[1] . "</td>";
    echo "<td>" . $mhs[2] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>