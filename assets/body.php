<main class="container">
    <div class="logo">
    <img src="<?php echo ftab("logo_rtp", "web_setting", "logo_rtp"); ?>" class="img-fluid" alt="logo rtp">
    </div>

   <!-- Slider main container -->
    <div class="slider-wrapper rounded-top shadow">
        <div class="running-text">
        <marquee scrollamount="<?php echo ftab("scroll_amount", "change_text", "scroll_amount"); ?>" direction="left"><?php echo ftab("running_text", "change_text", "running_text"); ?></marquee>
        </div>
    <div class="swiper slider">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->

    <?php
        $sslide = "SELECT sliders FROM img_sliders";
        $qslide = mysqli_query($data, $sslide);
        $b = 0;
        if(mysqli_num_rows($qslide) > 0) {
            while($fslide = mysqli_fetch_assoc($qslide)) {
                $slideimg = $fslide['sliders'];
                
                echo '<div class="swiper-slide">
                <img src="'.$slideimg.'" loading="lazy" class="slider-img rounded" alt="slider '.$b++.'">
                <div class="swiper-lazy-preloader"></div>
            </div>';
            }
        }
        
      ?>

  </div>

</div>
    </div>

    <div class="row g-0">
        <div class="col d-grid">
            <button onclick='location.href="<?php echo ftab("link_masukbo", "web_setting", "link_masukbo"); ?>";' class="btn-credit">LOGIN</button>
        </div>

        <div class="col d-grid">
            <button onclick='location.href="<?php echo ftab("link_daftarbo", "web_setting", "link_daftarbo"); ?>";' class="btn-credit">DAFTAR</button>
        </div>

    </div>

<div class="icon-prov g-1">

    <div class="item-prov">
        <div onclick="linkProv('pp')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/pp.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Pragmatic Play</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('pg')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/pg.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>PG Soft</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('jg')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/jg.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Joker Gaming</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('hb')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/hb.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Habanero</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('sg')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/sg.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Spade Gaming</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('tg')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/tg.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Top Trend</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('mg')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/mg.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Micro Gaming</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('gmw')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/gmw.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>GMW</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('ais')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/ais.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>AIS Gaming</p>
            </div>
        </div>
    </div>


    <div class="item-prov">
        <div onclick="linkProv('apolo')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/apolo.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Apolo Gaming</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('bgaming')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/bgaming.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>B Gaming</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('hacksaw')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/hacksaw.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Hacksaw</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('advant')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/advant.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>AdvantPlay</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('relax')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/relax.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Relax Gaming</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('playtech')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/playtech.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Playtech</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('playngo')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/playngo.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Playngo</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('skywind')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/skywind.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Sky Wind</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('ygg')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/ygg.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>YGG</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('playson')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/playson.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Playson</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('boom')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/boom.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Booming</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('booongo')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/booongo.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Booongo</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('fastspin')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/fastspin.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Fast Spin</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('cq9')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/cq9.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>CQ9</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('evoplay')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/evoplay.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Evoplay</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('playstar')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/playstar.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Playstar</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('nolimit')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/nolimit.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Nolimit</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('mancala')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/mancala.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Mancala</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('eagaming')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/eagaming.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Ea Gaming</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('redtiger')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/redtiger.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Red Tiger</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('netent')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/netent.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Netent</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('sbo')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/sbo.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>SBO</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('dragoon')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/dragoon.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Dragoon</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('kagaming')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/kagaming.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Kagaming</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('nagagames')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/nagagames.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Naga Games</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('reevo')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/reevo.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Reevo</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('fachai')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/fachai.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Fachai</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('jili')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/jili.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>Jili Gaming</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('568win')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/568win.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>568Win</p>
            </div>
        </div>
    </div>

    <div class="item-prov">
        <div onclick="linkProv('jdb')" class="icon-card-bg">
            <div class="p-2">
                <img src="images/icons/jdb.png" class="img-prov" alt="img proviider">
            </div>

            <div class="p-2">
                <p>JDB Gaming</p>
            </div>
        </div>
    </div>

</div>

<div class="bg-theme">
    
<div class="d-flex justify-content-between">
<div class="mt-3">
<h6><i class="lni text-warning lni-timer"></i> Update RTP: <?php echo dayindo(); ?>, <?php echo date("d"); ?> <?php echo bulanindo(); ?> <?php echo date("Y"); ?></h6>
</div>

<div class="my-2">
    <button onclick="darkMode()" id="btn-colorscheme" class="btn btn-sm btn-light"><i id="icon-colorscheme" class="lni lni-sun"></i></button>
</div>

</div>

<div class="row justify-content-center g-1">
    
    <?php
    $dirname = $_SERVER['DOCUMENT_ROOT']."/images/games/";
    $imgdir = glob($dirname.'*.{jpg,png,gif}', GLOB_BRACE);
    $daftar = ftab("link_daftarbo", "web_setting", "link_daftarbo");

    // Game Selection
    $prov = '';
    if(isset($_GET['game'])) {
        $game = mysqli_real_escape_string($data, $_GET['game']);
        $prov = $game;
    } else {
        $prov = 'pp';
    }

    switch($prov) {
        case 'jg':
          echo '
          <div class="col-12"><h4 class="title-game">JOKER GAMING SLOT LIVE RTP</h4>
          <h6><i class="lni lni-thumbs-up"></i> SUKA(5.0): <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i></h6>
        </div>';
        break;
    
        case 'pp':
          echo '
          <div class="col-12"><h4 class="title-game">PRAGMATIC PLAY SLOT LIVE RTP</h4>
              <h6><i class="lni lni-thumbs-up"></i> SUKA(5.9) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i></h6>
            </div>';
        break;

        case 'idn':
            echo '
            <div class="col-12"><h4 class="title-game">IDN Play SLOT LIVE RTP</h4>
                <h6><i class="lni lni-thumbs-up"></i> SUKA(5.0) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i></h6>
              </div>';
          break;

          case '568win':
            echo '
            <div class="col-12"><h4 class="title-game">568WIN SLOT LIVE RTP</h4>
                <h6><i class="lni lni-thumbs-up"></i> SUKA(5.0) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i></h6>
              </div>';
          break;

          case 'relax':
            echo '
            <div class="col-12"><h4 class="title-game">RELAXGAMING SLOT LIVE RTP</h4>
                <h6><i class="lni lni-thumbs-up"></i> SUKA(5.0) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i></h6>
              </div>';
          break;
    
        case 'hb':
          echo '<div class="col-12"><h4 class="title-game">HABANERO SLOT LIVE RTP</h4>
              <h6><i class="lni lni-thumbs-up"></i> SUKA(5.1) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>';
        break;
    
        case 'cq9':
          echo '<div class="col-12"><h4 class="title-game">CQ9 SLOT LIVE RTP</h4>
              <h6><i class="lni lni-thumbs-up"></i> SUKA(4.7) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>';
        break;

        case 'jdb':
          echo '<div class="col-12"><h4 class="title-game">JDB SLOT LIVE RTP</h4>
              <h6><i class="lni lni-thumbs-up"></i> SUKA(4.7) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>';
        break;

        case 'jili':
          echo '<div class="col-12"><h4 class="title-game">JILI SLOT LIVE RTP</h4>
              <h6><i class="lni lni-thumbs-up"></i> SUKA(4.7) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>';
        break;
    
        case 'pg':
          echo '<div class="col-12"><h4 class="title-game">POCKET GAMING SLOT LIVE RTP</h4>
              <h6><i class="lni lni-thumbs-up"></i> SUKA(5.8) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i></h6>
            </div>';
        break;
    
        case 'fachai':
          echo '<div class="col-12"><h4 class="title-game">FACHAI SLOT LIVE RTP</h4>
          
              <h6><i class="lni lni-thumbs-up"></i> SUKA(5.8) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i></h6>
            </div>';
        break;

        case 'hacksaw':
          echo '<div class="col-12"><h4 class="title-game">HACKSAW SLOT LIVE RTP</h4>
          
              <h6><i class="lni lni-thumbs-up"></i> SUKA(5.8) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i></h6>
            </div>';
        break;
    
    
        case 'sg':
          echo '<div class="col-12"><h4 class="title-game">SPADE GAMING SLOT LIVE RTP</h4>
          
              <h6><i class="lni lni-thumbs-up"></i> SUKA(4.0) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>';
        break;

        case 'bgaming':
          echo '<div class="col-12"><h4 class="title-game">BGAMING SLOT LIVE RTP</h4>
          
              <h6><i class="lni lni-thumbs-up"></i> SUKA(4.0) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>';
        break;
    
    
        case 'mg':
          echo '<div class="col-12"><h4 class="title-game">MICRO GAMING SLOT LIVE RTP</h4>
          
              <h6><i class="lni lni-thumbs-up"></i> SUKA(3.8) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>';
        break;

        case 'apolo':
          echo '<div class="col-12"><h4 class="title-game">APOLLO777 SLOT LIVE RTP</h4>
          
              <h6><i class="lni lni-thumbs-up"></i> SUKA(3.8) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>';
        break;
    
        case 'advant':
          echo '<div class="col-12"><h4 class="title-game">ADVANT SLOT LIVE RTP</h4>
          
              <h6><i class="lni lni-thumbs-up"></i> SUKA(3.8) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>';
        break;

        case 'live22':
          echo '<div class="col-12"><h4 class="title-game">LIVE22 SLOT LIVE RTP</h4>
          
              <h6><i class="lni lni-thumbs-up"></i> SUKA(3.8) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>';
        break;
    
        case 'tg':
          echo '<div class="col-12"><h4 class="title-game">TOP TREND GAMING SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(3.5) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;

        case 'gmw':
            echo '<div class="col-12"><h4 class="title-game">GMW SLOT LIVE RTP</h4>
              
                <h6><i class="lni lni-thumbs-up"></i> SUKA(3.5) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
              </div>
            ';
          break;
    
        case 'reevo':
          echo '<div class="col-12"><h4 class="title-game">REEVO SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(3.5) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'isoft':
          echo '<div class="col-12"><h4 class="title-game">ISOFTBET SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(4) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'fastspin':
          echo '<div class="col-12"><h4 class="title-game">FAST SPIN SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(4) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'skywind':
          echo '<div class="col-12"><h4 class="title-game">SKYWIND SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(3.5) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'playngo':
          echo '<div class="col-12"><h4 class="title-game">PLAYNGO SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(4.5) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'dragoon':
          echo '<div class="col-12"><h4 class="title-game">DRAGOON SOFT SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(4.5) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'ygg':
          echo '<div class="col-12"><h4 class="title-game">YGGDRASIL SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(2.9) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'playson':
          echo '<div class="col-12"><h4 class="title-game">PLAYSON SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(2.7) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'nagagames':
          echo '<div class="col-12"><h4 class="title-game">NAGA GAMES SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(2.7) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'boom':
          echo '<div class="col-12"><h4 class="title-game">BOOMING GAME SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(3.3) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'playtech':
          echo '<div class="col-12"><h4 class="title-game">PLAYTECH SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(4.2) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'kagaming':
          echo '<div class="col-12"><h4 class="title-game">KA GAMING SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(4.2) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'playstar':
          echo '<div class="col-12"><h4 class="title-game">PLAYSTAR SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(3.9) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'evoplay':
          echo '<div class="col-12"><h4 class="title-game">EVOPLAY SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(2.3) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'booongo':
          echo '<div class="col-12"><h4 class="title-game">BOOONGO SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(3.0) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'sbo':
          echo '<div class="col-12"><h4 class="title-game">SBO SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(3.0) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'mancala':
          echo '<div class="col-12"><h4 class="title-game">MANCALA SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(3.0) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'eagaming':
          echo '<div class="col-12"><h4 class="title-game">EAGAMING SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(3.3) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'funky':
          echo '<div class="col-12"><h4 class="title-game">FUNKY SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(3.3) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'redtiger':
          echo '<div class="col-12"><h4 class="title-game">RED TIGER SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(4.3) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'netent':
          echo '<div class="col-12"><h4 class="title-game">NETENT SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(4.0) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'ais':
          echo '<div class="col-12"><h4 class="title-game">AIS SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(3.0) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
        case 'gameplay':
          echo '<div class="col-12"><h4 class="title-game">GAMEPLAY SLOT LIVE RTP</h4>
            
              <h6><i class="lni lni-thumbs-up"></i> SUKA(3.7) : <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-warning"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i> <i class="lni lni-star-fill text-light"></i></h6>
            </div>
          ';
        break;
    
      }
    
    $num = 1;
    foreach($imgdir as $imagess){
        $realsrc = trim(str_replace("/home/gold888/gold888rtp.top/", "", $imagess));
    
          $ppone = basename($realsrc);
    
          if(strpos($ppone, $prov.'-') !== false && !strpos($ppone, $prov.'-i') == true) {
            echo rtpCard($prov, $realsrc, $daftar, $num++);
    }

}
    ?>
    
</div>
</div>

</main>

<footer class="container">
<div class="mt-1 content-home">
<?php echo ftab("homepage_text", "change_text", "homepage_text"); ?>
</div>
</footer>

<button onclick="goUp()" id="btn-up" class="btn-up btn-sm btn btn-danger"><i class="lni lni-chevron-up-circle"></i></button>

<div class="nav-bottom">


<div onclick="location.href='/'" class="col item-nav-bottom">
                <i class="lni lni-home"></i>
                <p>Home</p>
        </div>

        <div onclick='location.href="<?php echo ftab("link_masukbo", "web_setting", "link_masukbo"); ?>";' class="col item-nav-bottom">
            <i class="lni lni-invest-monitor"></i>
                <p>Promosi</p>
        </div>

        <div onclick='location.href="<?php echo ftab("link_daftarbo", "web_setting", "link_daftarbo"); ?>";' class="col item-nav-bottom">
            <i class="lni lni-list"></i>
                <p>Daftar</p>
        </div>

        <div data-bs-toggle="modal" data-bs-target="#contact" class="col item-nav-bottom">
            <i class="lni lni-phone-set"></i>
                <p>Contact</p>
        </div>

        
</div>

<!-- Contact -->
<div class="modal fade" id="contact" tabindex="-1" aria-labelledby="contact" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title text-dark fs-5" id="contact">Hubungi Kami:</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
        <?php echo ftab("isi_kontak", "contact_kami", "isi_kontak"); ?>
      </div>
    </div>
  </div>
</div>