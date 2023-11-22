<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HitungLaundry extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('laundry');
    }   
    
    public function index() {
        $ani = $this->laundry->totalBayar('Setrika', 6.5, false, true);
        $ina = $this->laundry->totalBayar('Cuci + Setrika', 8, true, true);
        $nia = $this->laundry->totalBayar('Cuci + Setrika', 3.5, false, false);
        
        echo "-Ani mengambil jenis laundry Setrika saja dengan berat pakaian 6.5 kg, 
        <br>maka total harga yang harus Ani bayar adalah Rp. $ani<br><br>";
        echo "-Ina mengambil jenis laundry Cuci dan Setrika dengan berat pakaian 8 kg 
        yang didalamnya terdapat pakaian dalam, 
        <br>maka total harga yang harus Ina bayar adalah Rp. $ina<br><br>";
        echo "-Nia ingin mengambil pakaiannya yang sudah siap di laundry, dengan berat 
        pakaian 3.5 kg, akan tetapi Nia lupa membawa struk 
        <br>maka total harga yang harus Nia bayar adalah Rp. $nia";
    }
}
