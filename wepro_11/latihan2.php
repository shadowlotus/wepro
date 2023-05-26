<?php
    $dta[0]["NIM"] = "2233445566";
    $dta[0]["NAMA"] = "Upin";
    $dta[0]["JENIS_KELAMIN"] = "L";
    $dta[0]["TANGGAL_LAHIR"] = "12-12-2000";
    $dta[0]["PRODI"] = "TI";
    $dta[0]["JURUSAN"] = "MDI";

    $dta[1]["NIM"] = "1122334455";
    $dta[1]["NAMA"] = "Ipin";
    $dta[1]["JENIS_KELAMIN"] = "L";
    $dta[1]["TANGGAL_LAHIR"] = "12-11-2000";
    $dta[1]["PRODI"] = "TI";
    $dta[1]["JURUSAN"] = "MDI";

    $dta[2]["NIM"] = "13123213123";
    $dta[2]["NAMA"] = "Susanti";
    $dta[2]["JENIS_KELAMIN"] = "P";
    $dta[2]["TANGGAL_LAHIR"] = "12-10-2000";
    $dta[2]["PRODI"] = "TI";
    $dta[2]["JURUSAN"] = "MDI";


    $dta[3]["NIM"] = "65146498451";
    $dta[3]["NAMA"] = "Meymey";
    $dta[3]["JENIS_KELAMIN"] = "P";
    $dta[3]["TANGGAL_LAHIR"] = "12-09-2000";
    $dta[3]["PRODI"] = "TI";
    $dta[3]["JURUSAN"] = "MDI";


    $dta[4]["NIM"] = "67968761746";
    $dta[4]["NAMA"] = "Ijat";
    $dta[4]["JENIS_KELAMIN"] = "L";
    $dta[4]["TANGGAL_LAHIR"] = "12-08-2000";
    $dta[4]["PRODI"] = "TI";
    $dta[4]["JURUSAN"] = "MDI";


    header("Content-type: application/json; charset: utf-8");
    echo json_encode($dta);
?>