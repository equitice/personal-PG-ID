<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PropertyGuru
 */

?>
    <?php

    $locations = get_nav_menu_locations(); //get all menu locations
    $menu = wp_get_nav_menu_object($locations['footer-menu']);//get the menu object

// page id 823 = contact page 
// page id 851 = solusijitu
     if( is_page( 823 )  ) {
        echo '
         <footer id="colophon" class="site-footer">
  

        <div class="site-info copiright">
            <div class="container"><p class="site-footer-copyright">Hak Cipta © 2022 PT. AllProperty Media Semua Hak Dilindungi.</p> </footer>
            </div>
        </div></div>';
    };

if( !(is_page( 823 ) || is_page(851)) ) {
        echo '
         <footer id="colophon" class="site-footer">
            <div class="footer-menus">
            <div class="container">
                <div class="flex-item">
                    <div class="section__header" id="custcare">
        ', $menu->name, '</div>
                    <div class="section__content">
                        <div>
                            <img src="https://agentofferings.rumah.com/wp-content/uploads/2022/06/mail.svg">
                            <a href="" class="text-underline">customerservice@rumah.com</a>
                        </div>

                        <div>
                            <img src="https://agentofferings.rumah.com/wp-content/uploads/2022/06/telephone.svg">
                            <a href="">+62  21 8068 1008 (Senin - Jumat | 09.00 - 18.00)</a>
                        </div>
                    </div>
                </div>

                <div class="flex-item">
                    <div class="section__header">

                    </div>
                    <div class="section__content">
                        <div>
                            <img src="https://agentofferings.rumah.com/wp-content/uploads/2022/06/footer-pg-icon.svg">
                            <a href="https://www.rumah.com">Kunjungi Kami : <span class="text-underline">www.rumah.com</span></a>
                        </div>
                    </div>
                </div>

                <div class="flex-item">
                    <div class="section__header">

                    </div>
                    <div class="section__content">
                        <div>
                            <span>Follow kami :</span>
                             <div class="follow-social-wrap">
                                <a href="https://www.facebook.com/rumahagent" target="_blank"><img src="https://agentofferings.rumah.com/wp-content/uploads/2022/06/fb.png"></a>
                                <a href="https://twitter.com/rumahcom" target="_blank"><img src="https://agentofferings.rumah.com/wp-content/uploads/2022/06/tw.png"></a>
                                <a href="https://www.instagram.com/rumahcom.agent/" target="_blank"><img src="https://agentofferings.rumah.com/wp-content/uploads/2022/06/ig.png"></a>
                                <a href="https://www.youtube.com/channel/UCT8EEQ9HnyyF6Okdysha25A" target="_blank"><img src="https://agentofferings.rumah.com/wp-content/uploads/2022/06/yt.png"></a>
                                <a href="https://www.linkedin.com/company/rumah-com/?originalSubdomain=id" target="_blank"><img src="https://agentofferings.rumah.com/wp-content/uploads/2022/06/li.png"></a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <div class="site-info copiright">
            <div class="container">',wp_nav_menu( array( 'theme_location' => 'copyright-menu' ) ),'<p class="site-footer-copyright">Hak Cipta © 2022 PT. AllProperty Media Semua Hak Dilindungi.</p> </footer>
            </div>
        </div></div>';
    };



?>



<!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
