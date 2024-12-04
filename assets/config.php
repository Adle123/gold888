<?php

function rtpCard($prov, $img, $daftar, $number) {
    static $no = 0;
    $no++;


    $gametop = '';
    if ($number >= 0 && $number <= 10) {
        $gametop = '<div class="hot-game"></div>';
    } elseif ($number > 10 && $number <= 15) {
        $gametop = '<div class="top-game"></div>';
    } else {
        $gametop = '';
    }

        return '<div class="col-lg-4 col-6">
        <div data-prov="'.$prov.'" class="rtp-card animate__animated animate__bounceIn">
        '.$gametop.'

            <div class="row g-1">

                <div class="col-lg-6 align-self-center">
                    <div class="place-img-rtp">
                        <button onclick="location.href=\''.$daftar.'\';" class="btn-play shadow"><i class="lni lni-heart-fill"></i> Mari Bermain</button>
                    <img class="lazy shadow rtp-card-img" src="images/loading.svg" data-src="../../'.$img .'" alt="pp image">
                    </div>
                </div>

                <div class="col-lg-6">

                <div class="pola-wrapper shadow text-center">
                <div class="icon-providers"><img src="images/icons/'.$prov.'.png" alt="icon provider"></div>
                    <h4><i class="lni lni-bar-chart"></i> Pola Slot:</h4>
                    <hr>
                    <table class="table-pola text-center">
                        <tbody>
                        <tr id="pola-slot-1-'.$no.'"></tr>
                        <tr id="pola-slot-2-'.$no.'"></tr>
                        <tr id="pola-slot-3-'.$no.'"></tr>
                        </tbody>
                    </table>

                    <h5 class="mt-3 fw-bold" id="jam-gacor-'.$no.'"></h5>

                    <div class="percent">
                    <p id="percent-txt-'.$no.'" style="z-index: 15">00%</p>
                    <div id="percent-bar-'.$no.'" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="" style="width: 0"></div>
                </div>

            </div>

                </div>

            </div>
    </div>
    </div>';
 }

 function ftab($db_stat, $tname, $colname) {
    require 'data.php';

    $fdb = "SELECT ".$db_stat." FROM ".$tname." LIMIT 1";
    $qdb = mysqli_query($data, $fdb);

    if(mysqli_num_rows($qdb) > 0) {
        $fetch = mysqli_fetch_assoc($qdb);
        return html_entity_decode($fetch[$colname]);
    }


}

function dayindo() {
            $dindo = date("l");

        switch($dindo) {
            case 'Monday' :
                return 'Senin';
            break;

            case 'Tuesday' :
                return 'Selasa';
            break;

            case 'Wednesday' :
                return 'Rabu';
            break;

            case 'Thursday' :
                return 'Kamis';
            break;

            case 'Friday' :
                return 'Jumat';
            break;

            case 'Saturday' :
                return 'Sabtu';
            break;

            case 'Sunday' :
                return 'Minggu';
            break;
        }
}

        function bulanindo() {
            $bulanindo = date("F");

            switch($bulanindo) {
                case 'January':
                    return 'Januari';
                break;

                case 'February':
                    return 'Februari';
                break;

                case 'March':
                    return 'Maret';
                break;

                case 'April':
                    return 'April';
                break;

                case 'May':
                    return 'Mei';
                break;

                case 'June':
                    return 'Juni';
                break;

                case 'July':
                    return 'Juli';
                break;

                case 'August':
                    return 'Agustus';
                break;

                case 'September':
                    return 'September';
                break;

                case 'October':
                    return 'Oktober';
                break;

                case 'November':
                    return 'November';
                break;

                case 'December':
                    return 'Desember';
                break;
            }
        }
   

?>