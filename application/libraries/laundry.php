<?php
class Laundry
{
    function totalBayar($jenis, $berat, $pakaian_dalam, $struk)
    {
        $setrika_only = 3500;
        $cuci_setrika = 5000;
        $ada_pakaian_dalam = 5000;
        $gabawa_struk = 10000;

        $total_harga = 0;

        if ($jenis == 'Setrika') {
            $total_harga = $setrika_only * $berat;
        } elseif ($jenis == 'Cuci + Setrika') {
            $total_harga = $cuci_setrika * $berat;
        }

        if (!$struk) {
            $total_harga += $gabawa_struk;
        }

        if ($pakaian_dalam) {
            $total_harga += $ada_pakaian_dalam;
        }

        return $total_harga;
    }
}