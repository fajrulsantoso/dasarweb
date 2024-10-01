<?php
function tampilkanMenuBertingkat($menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>";
        echo $item['nama'];
        if (isset($item['subMenu'])) {
            echo "<ul>";
            tampilkanMenuBertingkat($item['subMenu']);
            echo "</ul>";
        }
        echo "</li>";
    }
    echo "</ul>";
}

$menu = [
    ["nama" => "Beranda"],
    ["nama" => "Berita", "subMenu" => [
        ["nama" => "Wisata", "subMenu" => [
            ["nama" => "Pantai"],
            ["nama" => "Gunung"]
        ]],
        ["nama" => "Kuliner"],
        ["nama" => "Hiburan"]
    ]],
    ["nama" => "Tentang"],
    ["nama" => "Kontak"]
];

tampilkanMenuBertingkat($menu);