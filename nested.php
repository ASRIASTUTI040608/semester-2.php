<!-- pengelompokan pelanggan sesuai transaksi belanja -->
<?php
$totalBelanja = 0; // Total pembelian dalam rupiah

if ($totalBelanja >= 1000000) {
    echo "Level Anda: Selamat anda mendapatkan Platinum (WOW, loyal banget!)";
} else {
    if ($totalBelanja >= 500000) {
        echo "Level Anda: Selamat anda mendapatkan Gold (Pembeli setia!)";
    } else {
        if ($totalBelanja >= 200000) {
            echo "Level Anda: Selamat anda mendapatkan Silver (Mantep, lanjutkan!)";
        } else {
            if ($totalBelanja > 0) {
                echo "Level Anda: Selamat anda mendapatkan Bronze (Ayo belanja lagi!)";
            } else {
                echo "Belum ada transaksi. Yuk mulai belanja!";
            }
        }
    }
}
?>
