<div class="row">
<div class="col-12 mb-3">
    <div class="card border border-warning">
            <div class="card-body">
                <div class="row">

                    <?php
                        $sgame1 = "SELECT demo_provider FROM demo_games GROUP BY demo_provider";
                        $qgame1 = mysqli_query($data, $sgame1);
        
                        if(mysqli_num_rows($qgame1) > 0) {
                            while($fgame1 = mysqli_fetch_assoc($qgame1)) {
                                echo '<a href="?hal=gameimg&game='.$fgame1['demo_provider'].'"><div class="col-xl-4 rounded border p-3">
                                    <h5 class="text-uppercase">'.$fgame1['demo_provider'].'</h5>
                                </div>
                                </a>';
                            }
                        }
                    ?>
                </div>
                <!-- <table style="width: 100%;">
                        <tbody>
                            <tr>
                                    <td>
                                        <a href="?hal=gameimg&game=idn">
                                            <div class="card border">
                                                <div class="card-body">
                                                    <img src="assets/images/icon/idn.png" class="d-block mx-auto" width="120" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="?hal=gameimg&game=pp">
                                            <div class="card border">
                                                <div class="card-body">
                                                    <img src="assets/images/icon/pragmatic.png" class="d-block mx-auto" width="120" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="?hal=gameimg&game=hb">
                                            <div class="card border">
                                                <div class="card-body">
                                                    <img src="assets/images/icon/habanero.png" class="d-block mx-auto" width="120" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="?hal=gameimg&game=pg">
                                            <div class="card border">
                                                <div class="card-body">
                                                    <img src="assets/images/icon/pgsoft.png" class="d-block mx-auto" width="120" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="?hal=gameimg&game=sg">
                                            <div class="card border">
                                                <div class="card-body">
                                                    <img src="assets/images/icon/spade.png" class="d-block mx-auto" width="120" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                            </tr>


                        </tbody>
                </table> -->
                        
            </div>

    </div>

</div>

</div>

<div>
        <?php
            if(isset($_GET['game'])) {
                $prov = mysqli_real_escape_string($data, $_GET['game']);

                $sgame = "SELECT * FROM demo_games WHERE demo_provider = '$prov'";
                $qgame = mysqli_query($data, $sgame);

                if(mysqli_num_rows($qgame) > 0) {
                    echo '<div class="row">
                    
                    <div class="col-12">
                        <h3 style="text-transform: uppercase">'.$prov.' Slots</h3>
                    </div>';

                    while($fgame = mysqli_fetch_assoc($qgame)){
                        $demogame = $fgame['demo_name'];
                        $idgame = $fgame['id'];
                        $linkgame = $fgame['demo_gamelink'];

                        echo '<div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="config/update-demoslot.php?row='.$idgame.'" class="form-horizontal">
                                        <img src="../images/games/'.$demogame.'" class="d-block mx-auto" width="120" />
                                        <p class="mt-2 font-weight-bold text-center mb-1">Demo Game Link:</p>
                                        <input type="hidden" name="hprov" value="'.$prov.'" />
                                        <input type="text" class="form-control my-2" value="'.$linkgame.'" placeholder="Masukkan Link Demo Game '.$prov.'" name="newlink" />
                                        <button tye="submit" class="btn btn-block btn-primary">Ubah</button>
                                    </form>
                                </div>
                            </div>
                        
                        </div>';
                    }

                    echo '</div>';
                }

            } else {
                echo '<h2 class="text-center">Pilih Provider diatas untuk memulai</h2>';
            }
        ?>

</div>