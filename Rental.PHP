<?php
     class Montor{
        protected $pajak,
                 $member;
        private $Kawasaki,
                $Kago,
                $Kriko,
                $Estriper;
                
        public function __construct(){
                    $this->pajak = 10000;
                }

     public function Setharga($motor1, $motor2, $motor3, $motor4){
        $this->Kawasaki = $motor1;
        $this->Kago = $motor2; 
        $this->Kriko = $motor3; 
        $this->Estriper = $motor4; 
     }

     public function GetHarga(){
         $data["Kawasaki"] = $this->Kawasaki;
         $data["Kago"] = $this->Kago;
         $data["Kriko"] = $this->Kriko;
         $data["Estriper"] = $this->Estriper;
        return $data;
     }
 }
    class Rent extends Montor{
        public $Nama;
        public $Waktu;
         public $JenisMotor;

         public function CetakPembelian(){
            $DataHarga = $this->GetHarga();
            $HargaPerhari = $DataHarga[$this->JenisMotor];
            $HargaRental =$this->Waktu * $DataHarga[$this->JenisMotor];
            $HargaRental1 =$HargaRental + $this->pajak;
            
            if ($this->nama == "Edward" ||$this->nama == "Geo" ||$this->nama == "Nabil" ||$this->nama == "Rayhan" ) 
            {
                $status = "Member";
                $HargaRental2 = $HargaRental1;
                $HargaDiskon = $HargaPerhari* 5/100;  
                $HargaRental3 = $HargaRental2 - $HargaDiskon;
                $Diskon =" Mendapatkan Diskon Sebesar 5%";
            }else{
                $status = " Non Member ";
                $Diskon = "Tidak Mendapat Diskon ";
                $HargaRental3 = $HargaRental1;
            };
            
                echo "<center>";
                echo $this->nama ." Berstatus Sebagai " . $status . $Diskon . "<br>";
                echo "Jenis Motor Yang Dirental Adalah " . $this->JenisMotor . " Selama " . $this->Waktu . " Hari"."<br>";
                echo "Harga Rental Per-Harinya :". $HargaPerhari. "<br>" . "<br>";
                echo "Besar Harga Yang Harus Dibayarkan Adalah " . $HargaRental3 . "<br>";
                echo "</center>"; 

         }
    }
    
