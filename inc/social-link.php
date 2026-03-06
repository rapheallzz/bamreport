<?php global $opt_name;
/**
 * Social Link
 * @package WordPress
 * @subpackage Gunter
*/ 
?>
    <ul class="footer-social">
        <?php if (isset($opt_name['twitter_url'] ) && $opt_name['twitter_url']) { ?>
            <li>
                <a href="<?php  echo esc_url($opt_name['twitter_url']);?>" > <i class="fa fa-twitter"></i></a>
            </li>
        <?php  } ?>


        <?php if (isset($opt_name['facebook_url'] ) && $opt_name['facebook_url']) { ?>
            <li>
                <a href="<?php  echo esc_url($opt_name['facebook_url']); ?>" > <i class="fa fa-facebook"></i></a>
            </li>
        <?php  } ?>

        <?php if (isset($opt_name['instagram_url'] ) && $opt_name['instagram_url'] ) { ?>
            <li>
                <a href="<?php  echo esc_url($opt_name['instagram_url']); ?>" > <i class="fa fa-instagram"></i></a>
            </li>
        <?php  } ?>

        <?php 
        if (isset($opt_name['linkedin_url'] ) && $opt_name['linkedin_url'] ) { ?>
        <li>
            <a href="<?php  echo esc_url($opt_name['linkedin_url']);?>" > <i class="fa fa-linkedin"></i></a>
        </li>
        <?php  } ?>

        <?php 
        if (isset($opt_name['pinterest_url'] ) && $opt_name['pinterest_url'] ) { ?>
        <li>
            <a href="<?php echo esc_url($opt_name['pinterest_url']);?>" > <i class="fa fa-pinterest"></i></a>
        </li>
        <?php  } ?>

        <?php if (isset($opt_name['dribbble_url'] ) && $opt_name['dribbble_url'] ) { ?>
            <li>
                <a href="<?php echo esc_url($opt_name['dribbble_url']);?>" > <i class="fa fa-dribbble"></i></a>
            </li>
        <?php } ?>

        <?php if (isset($opt_name['tumblr_url'] ) && $opt_name['tumblr_url'] ) { ?>
            <li>
                <a href="<?php  echo esc_url($opt_name['tumblr_url']);?>" > <i class="fa fa-tumblr"></i></a>
            </li>
        <?php } ?>

        <?php 
        if (isset($opt_name['youtube_url'] ) && $opt_name['youtube_url'] ) { ?>
        <li>
            <a href="<?php  echo esc_url($opt_name['youtube_url']);?>" > <i class="fa fa-youtube"></i></a>
        </li>
        <?php  } ?>

        <?php if (isset($opt_name['flickr_url'] ) && $opt_name['flickr_url'] ) { ?>
            <li>
                <a href="<?php  echo esc_url($opt_name['flickr_url']);?>" > <i class="fa fa-flickr"></i></a>
            </li>
        <?php } ?>

        <?php if (isset($opt_name['behance_url'] ) && $opt_name['behance_url'] ) { ?>
            <li>
                <a href="<?php  echo esc_url($opt_name['behance_url']);?>" > <i class="fa fa-behance"></i></a>
            </li>
        <?php } ?>

        <?php if (isset($opt_name['github_url'] ) &&  $opt_name['github_url'] ) { ?>
            <li>
                <a href="<?php  echo esc_url($opt_name['github_url']);?>" > <i class="fa fa-github"></i></a>
            </li>
        <?php } ?>

        <?php if (isset($opt_name['skype_url'] ) && $opt_name['skype_url'] ) { ?>
            <li>
                <a href="<?php  echo esc_url($opt_name['skype_url']);?>" > <i class="fa fa-skype"></i></a>
            </li>
        <?php } ?>

        <?php if (isset($opt_name['rss_url'] ) && $opt_name['rss_url'] ) { ?>
            <li>
                <a href="<?php  echo esc_url($opt_name['rss_url']);?>" > <i class="fa fa-rss"></i></a>
            </li>
        <?php } ?>
    </ul>
<?php
 ?>
