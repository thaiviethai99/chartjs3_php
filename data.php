<?php
$data = [
    "Server" => ["Code" => 0, "Msg" => "Kết quả"],
    "Data" => [
        ["id" => "AGIG", "ten" => "Bưu cục An Giang", "total" => "54"],
        ["id" => "ANPHU", "ten" => "AN PHÚ", "total" => "39"],
        ["id" => "BCQ7", "ten" => "BC Q7", "total" => "17"],
        ["id" => "BDUG", "ten" => "Bưu Cục Bình Dương", "total" => "29"],
        ["id" => "CGIY", "ten" => "Bưu Cục Cầu Giấy", "total" => "34"],
        ["id" => "CMAU", "ten" => "Bưu cục Cà Mau", "total" => "24"],
        ["id" => "COGG", "ten" => "Bưu Cục Cô Giang", "total" => "406"],
        ["id" => "CTHO", "ten" => "Bưu Cục Cần Thơ", "total" => "113"],
        ["id" => "DLAK", "ten" => "Bưu Cục ĐăkLăk", "total" => "39"],
        ["id" => "DNAI", "ten" => "Bưu Cục Đồng Nai", "total" => "25"],
        ["id" => "DVK1", "ten" => "Điều Vận - KV1", "total" => "7"],
        ["id" => "DVK2", "ten" => "Điều Vận - KV2", "total" => "101"],
        ["id" => "GLAI", "ten" => "CTV Gia Lai", "total" => "2"],
        ["id" => "GODU", "ten" => "BƯU CỤC GÒ DẦU", "total" => "27"],
        ["id" => "GVAP", "ten" => "BƯU CỤC GÒ VẤP", "total" => "200"],
        ["id" => "HKIM", "ten" => "Bưu Cục Hoàn Kiếm", "total" => "94"],
        ["id" => "KGIG", "ten" => "Bưu Cục Kiên Giang", "total" => "1"],
        ["id" => "KHOA", "ten" => "Bưu Cục Nha Trang", "total" => "18"],
        [
            "id" => "KV01",
            "ten" => "Bưu Cục Trung Tâm Khu Vực I",
            "total" => "172",
        ],
        [
            "id" => "KV02",
            "ten" => "Bưu Cục Trung Tâm Khu Vực II",
            "total" => "770",
        ],
        [
            "id" => "KV03",
            "ten" => "Bưu Cục Trung Tâm Khu Vực III",
            "total" => "48",
        ],
        ["id" => "NTHN", "ten" => "CTV NINH THUẬN", "total" => "82"],
        ["id" => "TDUC", "ten" => "Bưu Cục Thủ Đức", "total" => "23"],
        ["id" => "TGIG", "ten" => "Bưu Cục Tiền Giang", "total" => "34"],
        [
            "id" => "TTGN",
            "ten" => "TỔ TIẾP THỊ GIAO NHẬN KV01",
            "total" => "185",
        ],
        ["id" => "TTHH", "ten" => "CTV Tân Thành", "total" => "35"],
        ["id" => "VTAU", "ten" => "Bưu Cục Vũng Tàu", "total" => "644"],
    ],
];
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);

