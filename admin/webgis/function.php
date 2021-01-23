<?php
function GeomToText($teks1){
    $teks1 = preg_replace("/[^0-9\., -]/", '', $teks1);
    $panjang = strlen($teks1);
    $ind_akhr = $panjang - 1;

    $teks2 = '';
    $TX = '';
    $TY = '';
    $status = "TX";

    for ($i=0; $i < $panjang; $i++) {
        $kar = substr($teks1, $i, 1);

        //jika kar spasi
        if ($kar==" ") {
            $status = "TY";
            continue; //keprulngan berikutnya
        }

        //jika kar koma
        if ($kar==",") {
            $teks2 .=$TY." ".$TX.","; //mnkr x y

            //mengosongkn tx ty
            $TX = '';
            $TY = '';

            $status = "TX";
            continue; //kmbli kprlngn
        }

        if ($status=="TX") {
            $TX .= $kar;
        }

        else{
            $TY .= $kar;
        }

        //jika diindex trkhir
        if ($i==$ind_akhr) {
            $teks2 .= $TY." ".$TX; //mnkar posisi x y tnpa koma diblkng
        }
    
    }
    $teks2 = "[".$teks2."]";
    $teks2 = preg_replace('/,/', '],[', $teks2);
    $teks2 = preg_replace("/ /", ",", $teks2);
    return $teks2;
}
    
    
?>

