    <!-- start footer -->

        <footer id="footer" class="footer-wrap">
        <section class="kc-elm kc-css-784752 kc_row"><div class="kc-row-container  kc-container"><div class="kc-wrap-columns"><div class="kc-elm kc-css-928432 kc_col-sm-12 kc_column kc_col-sm-12"><div class="kc-col-container"><div class="kc-elm kc-css-90801" style="height: 50px; clear: both; width:100%;"></div><div class="kc-elm kc-css-902626 kc_row kc_row_inner"><div class="kc-elm kc-css-258437 kc_col-sm-4 kc_column_inner kc_col-sm-4"><div class="kc_wrapper kc-col-inner-container"><div class="kc-elm kc-css-655434 kc_shortcode kc_single_image">

        <img alt="" src="http://ppsmb.ugm.ac.id/ppsmb-17/wp-content/uploads/2017/06/ugm_logo.png" scale="0">    </div>
<div class="kc-elm kc-css-875549" style="height: 20px; clear: both; width:100%;"></div><div class="kc-elm kc-css-440674 kc_text_block"><p>
Panitia Pusat PPSMB UGM 2017<br>
Subdirektorat Pengembangan Karakter Mahasiswa<br>
Direktorat Kemahasiswaan Universitas Gadjah Mada<br>
<i class="fa fa-envelope" style="margin-right: 5px;"></i> ppsmbugm@ugm.ac.id</p>
</div></div></div><div class="kc-elm kc-css-807326 kc_col-sm-4 kc_column_inner kc_col-sm-4"><div class="kc_wrapper kc-col-inner-container">
<div class="kc-elm kc-css-519891 kc-title-wrap ">

    <h4 class="kc_title">Korespondensi/Alamat</h4>
</div>
<div class="kc-elm kc-css-386692" style="height: 7px; clear: both; width:100%;"></div><div class="kc-elm kc-css-144642 kc_text_block"><p>Jl. Asem Kranji Blok K-8 Sekip, Bulaksumur, Sleman, Yogyakarta. 55281</p>
</div>
<div class="kc-elm kc-css-630445 kc-title-wrap ">

    <h4 class="kc_title">Pusat Informasi</h4>
</div>
<div class="kc-elm kc-css-796734" style="height: 7px; clear: both; width:100%;"></div><div class="kc-elm kc-css-698103 kc_text_block"><p style="text-align: left;"><i class="fa fa-phone" style="margin-right: 5px;"></i> <strong>0813 8142 2016 </strong>(hanya menerima telepon)</p>
</div></div></div><div class="kc-elm kc-css-277032 kc_col-sm-4 kc_column_inner kc_col-sm-4"><div class="kc_wrapper kc-col-inner-container">
<div class="kc-elm kc-css-505683 kc-title-wrap ">

    <h4 class="kc_title">Akun Resmi UGM</h4>
</div>
<div class="kc-elm kc-css-775184 kc-raw-code"><div class="social-media" style="padding:0px; text-align:right;">
    <div class="social-wrapper">
        <a class="fa fa-facebook" aria-hidden="true" href="https://id-id.facebook.com/UGMYogyakarta/"></a>
    </div>
    <div class="social-wrapper">
        <a class="fa fa-twitter" aria-hidden="true" href="https://twitter.com/ugmyogyakarta"></a>
    </div>
    <div class="social-wrapper">
        <a class="fa fa-instagram" aria-hidden="true" href="https://www.instagram.com/ugm.yogyakarta/"></a>
    </div>
    <div class="social-wrapper">
        <a class="fa fa-youtube-play" aria-hidden="true" href="https://www.youtube.com/user/UGMOfficial"></a>
    </div>
    <div class="social-wrapper">
        <a href="https://line.me/R/ti/p/%40ppsmb_ugm">
            <img width="60%" style="margin: 0 auto; position: relative; display: block;" alt="" src="https://raw.githubusercontent.com/wavacarissa/obomosopopo/master/img/line-white.png" scale="0">
        </a>
    </div>
    <div class="social-wrapper">
        <a class="fa fa-globe" aria-hidden="true" href="http://ugm.ac.id/"></a>
    </div>
</div>
</div></div></div></div><div class="kc-elm kc-css-701890" style="height: 50px; clear: both; width:100%;"></div></div></div></div></div></section>
            <div class="container">
                <?php if( is_active_sidebar('bottom') ){ ?>
                    <div class="bottom">
                        <div class="row">
                            <div class="col-sm-12 text-center footer-wrapper">
                                <?php if (is_active_sidebar('bottom')) {?>
                                    <div class="bottom-widget text-center">
                                        <?php dynamic_sidebar('bottom'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if ( get_theme_mod( 'copyright_en', true ) || get_theme_mod( 'footer_share', true ) ) { ?>
                    <div class="footer-copyright">
                        <div class="row">    
                            <?php if( get_theme_mod( 'footer_share', true ) ) { ?>
                                <div class="col-md-6 text-left copy-wrapper">
                                     <?php echo wp_kses_post(balanceTags( get_theme_mod( 'copyright_text', '© 2016 Your Company.  Designed By <a href="http://themeum.com/" target="_blank"> THEMEUM</a>') )); ?>
                                </div> <!-- end row -->
                            <?php } ?>
                            <?php if( get_theme_mod( 'copyright_en', true ) ) { ?>
                                <div class="col-md-6 text-right copy-wrapper">
                                    <?php echo wp_kses_post(balanceTags( get_theme_mod( 'copyright_text', '© 2016 Your Company.  Designed By <a href="http://themeum.com/" target="_blank"> THEMEUM</a>') )); ?>
                                </div> <!-- end row -->
                            <?php } ?>
                        </div> <!-- end row -->
                    </div> <!-- end row -->
                <?php } ?>
            </div> <!-- end container -->
        </footer>
    </div> <!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
