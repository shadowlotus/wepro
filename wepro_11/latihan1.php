<?php
    $dta["NIM"] = "2233445566";
    $dta["NAMA"] = "Upin";
    $dta["JENIS_KELAMIN"] = "Z";
    $dta["TANGGAL_LAHIR"] = "12-12-2000";
    $dta["PRODI"] = "TI";
    $dta["JURUSAN"] = "MDI";

    header("Content-type: application/json; charset: utf-8");
    echo json_encode($dta);
?>