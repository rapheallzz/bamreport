<?php 
/**
 * Register custom style.
 */

if ( ! function_exists( 'gunter_custom_css' ) ) {
    function gunter_custom_css(){
        wp_enqueue_style('gunter_custom_style', get_template_directory_uri() . '/global-black-diaspora-report/assets/css/custom-style.css');
        global $opt_name;
                
                if(isset($opt_name['theme_color'] )){
                    $main_color = $opt_name['theme_color'];
                    $top_nav_bg_color = $opt_name['top_nav_bg_color'];
                    $dark_nav_bg_color = $opt_name['dark_nav_bg_color'];
                    $light_nav_bg_color = $opt_name['light_nav_bg_color'];
                    $footer_bg = $opt_name['footer_bg'];
                    $preloader_bg = $opt_name['preloader_bgcolor'];
                    $home_nine_bg = $opt_name['home_nine_bg'];
                }else{
                    $main_color             = '#ff4800';
                    $top_nav_bg_color       = '#000';
                    $dark_nav_bg_color      = '#000000';
                    $light_nav_bg_color     = '#fff';
                    $footer_bg              = '#111111';
                    $preloader_bg           = '#ff4800';
                    $home_nine_bg = '#f5e7da';
                }
            
                //Theme Background Color
                $custom_css ='
                .bg-f5e7da, .corporate-main-banner, .uk-border {background-color: '.esc_attr($home_nine_bg, 'gunter').';}
                .project-area.bg-f5e7da .section-title .bar::before, .project-area.bg-f5e7da .section-title .bar::after, .partner-area-two.bg-f5e7da .section-title .bar::before, .partner-area-two.bg-f5e7da .section-title .bar::after {background-color: '.esc_attr($home_nine_bg, 'gunter').';}
                .uk-button::before, .uk-button::after, .section-title .bar, .navbar .uk-navbar-nav li a::before, .mobile-navbar .uk-navbar-nav li a::before, .main-banner-content h2::before, .single-features-box .bar, .single-features-box:hover, .single-features-box:focus, .single-features-box.active, .single-features-box:hover .bar::after, .single-features-box:hover .bar::before, .single-features-box:focus .bar::after, .single-features-box:focus .bar::before, .single-features-box.active .bar::after, .single-features-box.active .bar::before, .br-line, .single-services:hover, .single-services:focus, .single-services.active, .services-details-desc .services-image-slides.owl-theme .owl-nav.disabled + .owl-dots .owl-dot:hover span::before, .services-details-desc .services-image-slides.owl-theme .owl-nav.disabled + .owl-dots .owl-dot.active span::before, .services-details-desc .our-work-benefits .accordion .accordion-title i, .single-projects .project-content::before, .project-slides.owl-theme .owl-dots .owl-dot.active span, .project-slides.owl-theme .owl-dots .owl-dot:hover span, .project-slides.owl-theme .owl-dots .owl-dot:focus span, .project-details-info ul li ul li a:hover, .project-details-info ul li ul li a:focus, .feedback-img .video-btn, .feedback-img .video-btn:hover i, .feedback-img .video-btn:focus i, .feedback-slides.owl-theme .owl-dots .owl-dot.active span, .feedback-slides.owl-theme .owl-dots .owl-dot:hover span, .feedback-slides.owl-theme .owl-dots .owl-dot:focus span, .single-team .team-social li a:hover, .single-team .team-social li a:focus, .team-slides.owl-theme .owl-dots .owl-dot.active span, .team-slides.owl-theme .owl-dots .owl-dot:hover span, .team-slides.owl-theme .owl-dots .owl-dot:focus span, .blog-slides.owl-theme .owl-dots .owl-dot.active span, .blog-slides.owl-theme .owl-dots .owl-dot:hover span, .blog-slides.owl-theme .owl-dots .owl-dot:focus span, .blog-details .inner .article-img .date, .blog-details .inner .article-content ul.category li a, .blog-details .inner .comments-area ol li .comment-body .reply a:hover, .blog-details .inner .comments-area ol li .comment-body .reply a:focus, .blog-details .inner .comments-area ul li .comment-body .reply a:hover, .blog-details .inner .comments-area ul li .comment-body .reply a:focus, .blog-details .inner .comments-area .comment-respond .form-submit input, .map-img .location a, .uk-sidebar .widget .bar, .uk-sidebar .widget.service_list ul li a:hover, .uk-sidebar .widget.service_list ul li a:focus, .uk-sidebar .widget.service_list ul li a.active, .uk-sidebar .widget.widget_download ul li a::before, .uk-sidebar .widget.widget_categories ul li::before, .uk-sidebar .widget.widget_tag_cloud .tagcloud a:hover, .uk-sidebar .widget.widget_archive ul li::before, .single-footer-widget .bar, .footer-social li a:hover, .footer-social li a:focus, .copyright-area .go-top:hover, .copyright-area .go-top:focus, .uk-dark .single-features-box.active .bar::before, .uk-dark .single-features-box.active .bar::after, .uk-dark .single-features-box:focus .bar::before, .uk-dark .single-features-box:focus .bar::after, .uk-dark .single-features-box:hover .bar::before, .uk-dark .single-features-box:hover .bar::after, .post_type, .post_type_icon, .widget-area .uk-sidebar .widget-title::before, .widget-area .widget_search form button, .widget-area .calendar_wrap caption, .post-comments .title::before, .post-password-form input[type="submit"], .footer-area .widget_search form button, .footer-area .widget_search form button, .footer-area .calendar_wrap caption, .single-services-box:hover, .single-services-box:focus, .single-services-box:hover .bar::after, .single-services-box:hover .bar::before, .single-services-box:focus .bar::after, .single-services-box:focus .bar::before, .navbar .uk-navbar-nav li .uk-nav-sub li a::after, .single-services-box .bar, .uk-button-optional::before, .uk-button-optional::after, .header-area.header-style-two .navbar .uk-navbar-nav li .uk-dropdown .uk-dropdown-nav li a::after, .single-project-box .project-content::before, .single-footer-widget .bar, .single-footer-widget .social li a:hover, .single-footer-widget .social li a:focus, .copyright-area .go-top:hover, .copyright-area .go-top:focus, .uk-dark .single-features-box.active .bar::before, .uk-dark .single-features-box.active .bar::after, .uk-dark .single-features-box:focus .bar::before, .uk-dark .single-features-box:focus .bar::after, .uk-dark .single-features-box:hover .bar::before, .uk-dark .single-features-box:hover .bar::after, .feedback-slides-two.owl-theme .owl-dots .owl-dot.active span, .feedback-slides-two.owl-theme .owl-dots .owl-dot:hover span, .feedback-slides-two.owl-theme .owl-dots .owl-dot:focus span, [class*=hint--]:after, .single-featured-services-box .bar, .woocommerce-notices-wrapper .woocommerce-message .button {background: '.esc_attr($main_color, 'gunter').';}
                
                .uk-button-default, .about-img .uk-button, .subscribe-area form .uk-button, .single-blog-post .blog-post-content span, .single-blog-post .blog-post-content .read-more-btn .read-more, #contactForm .uk-button, .uk-dark .single-features-box.active, .uk-dark .single-features-box:focus, .uk-dark .single-features-box:hover, .uk-dark .single-services.active, .uk-dark .single-services:focus, .uk-dark .single-services:hover, .uk-dark .single-footer-widget .social li a:hover, .uk-dark .single-footer-widget .social li a:focus, .single-blog-video .play-link i, .blog-post-link .post_type_link, .widget-area .uk-sidebar ul li::before, .widget-area .tagcloud a:hover, .pagination-area .page-numbers:hover, .pagination-area .current, #comments .comment-list .comment-body .reply a, .comment-respond .form-submit input, .wp-block-button .wp-block-button__link, .pages-links .post-page-numbers:hover, .pages-links .current, .has-cyan-bluish-gray-background-color.has-cyan-bluish-gray-background-color, .footer-area .single-footer-widget ul li::before, .footer-area .tagcloud a:hover, .tag-list li a:hover, .page-links .post-page-numbers:hover, .page-links .current, .comment-navigation .nav-links .nav-previous a:hover, .comment-navigation .nav-links .nav-next a:hover, .top-light, .no-results .searchform button, .single-services-box .link-btn i, .header-area.header-style-two, .header-area.header-style-two.uk-active, .services-box .content, .services-box .hover-content, .single-process-box .icon, .single-feedback-item::before, .single-feedback-item::after, .single-project-box .project-content .details-btn, .contact-image .contact-info, .uk-dark .single-features-box.active, .uk-dark .single-features-box:focus, .uk-dark .single-features-box:hover, .uk-dark .single-services.active, .uk-dark .single-services:focus, .uk-dark .single-services:hover, .uk-dark .single-footer-widget .social li a:hover, .uk-dark .single-footer-widget .social li a:focus, .services-slides.owl-theme .owl-dots .owl-dot:hover span::before, .services-slides.owl-theme .owl-dots .owl-dot.active span::before, .single-team-box .content .social .social-btn span, .single-team-box .content .social ul li a:hover, .why-choose-us-content .why-choose-us-text li .icon, .what-we-do-content .content .single-services:hover, .experience-content .content .single-experience-box:hover .icon, .testimonials-slides.owl-theme .owl-dots .owl-dot span::before {background-color: '.esc_attr($main_color, 'gunter').';}
                
                .wp-block-file .wp-block-file__button, .single-blog-post-slider button.owl-prev, .single-blog-post-slider button.owl-next, .main-banner-slider button.owl-prev, .main-banner-slider button.owl-next,
                .cart-link span,
                .single-products .products-image ul li a:hover,
                .single-products .products-image ul li a:focus,
                .productsQuickView .modal-content .products-content form button,
                .quick-view-modal .modal-content .products-content form button,
                .productsQuickView .grouped_form .add-to-cart-btn,
                .quick-view-modal .grouped_form .add-to-cart-btn,
                .woocommerce-topbar,
                .woocommerce-form-login .button.button,
                .woocommerce-form-register .button.button,
                .woocommerce-ResetPassword .button.button,
                .products_details .summary.entry-summary form.cart a.button.alt,
                .products_details .summary.entry-summary form.cart button.button.alt,
                .products_details .summary.entry-summary form.cart input.button.alt,
                .products_details .summary.entry-summary form.cart .group_table td .button,
                .shop-sidebar .widget_product_search form button,
                .shop-sidebar .woocommerce button.button,
                .shop-sidebar a.button,
                .shop-sidebar .woocommerce-widget-layered-nav-dropdown__submit,
                .return-to-shop .button.wc-backward,
                .woocommerce .woocommerce-MyAccount-navigation ul li a:hover,
                .woocommerce .woocommerce-MyAccount-navigation ul li.is-active a,
                .woocommerce .woocommerce-MyAccount-content .button,
                .woocommerce .checkout_coupon .button,
                .cart-link span,
                .quick-view-modal .grouped_form .add-to-cart-btn,
                .single-products:hover .products-content .add-to-cart-btn,
                .single-products:focus .products-content .add-to-cart-btn
                {background-color: '.esc_attr($main_color, 'gunter').' !important;}
                
                .uk-preloader {background: '.esc_attr($preloader_bg, 'gunter').';}
                
                ';
                
                //Theme Color
                $custom_css .='
                .section-title span, .navbar .uk-navbar-nav li a:hover, .navbar .uk-navbar-nav li a:focus, .navbar .uk-navbar-nav li.uk-active > a, .mobile-navbar .uk-navbar-nav li a:hover, .mobile-navbar .uk-navbar-nav li a:focus, .mobile-navbar .uk-navbar-nav li.uk-active > a, .main-banner-content .video-btn .uk-icon, .main-banner-content .video-btn:hover, .main-banner-content .video-btn:focus, .single-features-box .icon, .about-content .about-text .icon, .single-services .icon, .services-details-desc ul li::before, .single-projects .project-content h3 a:focus, .single-projects .project-content ul li a:hover, .single-projects .project-content ul li a:focus, .project-details-info ul li a:hover, .project-details-info ul li a:focus, .feedback-img .video-btn i, .feedback-img .video-btn:hover, .feedback-img .video-btn:focus, .single-feedback .client span, .feedback-slides.owl-theme .owl-nav [class*="owl-"]:hover, .feedback-slides.owl-theme .owl-nav [class*="owl-"]:focus, .single-team .team-social li a, .single-blog-post .blog-post-content h3 a:hover, .single-blog-post .blog-post-content h3 a:focus, .blog-details .inner .comments-area ol li .comment-body .comment-meta .comment-metadata a:hover, .blog-details .inner .comments-area ol li .comment-body .comment-meta .comment-metadata a:focus, .blog-details .inner .comments-area ul li .comment-body .comment-meta .comment-metadata a:hover, .blog-details .inner .comments-area ul li .comment-body .comment-meta .comment-metadata a:focus, .page-title-area ul li, .page-title-area ul li a:hover, .page-title-area ul li a:focus, .pagination-area ul li a:hover, .pagination-area ul li a:focus, .pagination-area ul li.uk-active > a, .uk-sidebar .widget.widget_contact ul li a:hover, .uk-sidebar .widget.widget_contact ul li a:focus, .uk-sidebar .widget.widget_contact ul li i, .uk-sidebar .widget.widget_search form button, .uk-sidebar .widget.widget_categories ul li a:hover, .uk-sidebar .widget.widget_recent_entries ul li h5 a:hover, .uk-sidebar .widget.widget_recent_entries ul li h5 a:focus, .uk-sidebar .widget.widget_archive ul li a:hover, .single-footer-widget .contact-info li a:hover, .single-footer-widget .contact-info li a:focus, .copyright-area ul li a:hover, .copyright-area ul li a:focus, .uk-dark .navbar .uk-navbar-nav li a:hover, .uk-dark .navbar .uk-navbar-nav li a:focus, .uk-dark .navbar .uk-navbar-nav li.uk-active > a, .uk-dark .feedback-slides.owl-theme .owl-nav [class*="owl-"]:hover, .uk-dark .feedback-slides.owl-theme .owl-nav [class*="owl-"]:focus, .uk-dark .single-blog-post .blog-post-content h3 a:hover, .uk-dark .single-blog-post .blog-post-content h3 a:focus, ul.entry-meta li i, .sticky .single-blog-post .blog-post-content h3::before, .widget_gunter_posts_thumbs .item .info .title a:hover, .widget-area .uk-sidebar ul li a:hover, .widget-area .calendar_wrap table #today, .widget-area .calendar_wrap table #prev a, .widget-area .calendar_wrap table #next a, .widget-area .widget_recent_comments .recentcomments .comment-author-link a:hover, .main-content .entry-content a, .main-content code, .main-content kbd, .main-content tt, .main-content var, .entry-footer .edit-link a, table th a, .article-text .blog-details-content p a, .article-text .blog-details-content .entry-content a, .article-text .blog-details-content code, .article-text .blog-details-content kbd, .article-text .blog-details-content tt, .article-text .blog-details-content var, .post-comments .comment-content .entry-content a, .post-comments .comment-content code, .post-comments .comment-content kbd, .post-comments .comment-content tt, .post-comments .comment-content var, #comments .comment-metadata a:hover, .post-comments a, .comment-respond p.logged-in-as a, .wp-block-file a, .post-comments .comment-list .trackback .comment-body a, .footer-area .single-footer-widget ul li a:hover, .footer-area .calendar_wrap table #today, .footer-area .calendar_wrap table #prev a, .footer-area .calendar_wrap table #next a, .footer-area .widget_recent_comments .recentcomments .comment-author-link a:hover, .blog-slides .single-blog-post .blog-post-content .read-more, .blog-post-link .link-content a:hover, .article-text .blog-details-content ol a, .article-text .blog-details-content ul a, .article-text .blog-details-content dd a, .article-text .blog-details-content .wp-block-image figcaption a, .article-text .blog-details-content .wp-caption-text a, .post-comments .comment-content a, .top-dark .h-info-list ul li a:hover, .top-dark .h-info-list ul li i, .top-light .h-social-link li a:hover, .footer-area .calendar_wrap table #today a, #contactForm span.wpcf7-list-item .wpcf7-list-item-label a, .light-banner .lead-generation-form span.wpcf7-list-item-label a, .navbar .uk-navbar-nav li .uk-nav-sub li a:hover, .navbar .uk-navbar-nav li .uk-nav-sub li a:focus, .navbar .uk-navbar-nav li .uk-nav-sub li.uk-active a, .navbar .uk-navbar-nav li.uk-active a, .single-services-box .icon, .single-services-box:hover .link-btn i, .single-services-box:focus .link-btn i, .testimonials-item .quotation-profile .profile-info span, .custom-pagination-area .page-numbers li span.page-numbers.current, .custom-pagination-area .page-numbers li a:hover,
                .header-area.light .cart-link:hover,
                .cart-link:hover,
                .single-products .products-content a.added_to_cart.wc-forward:hover,
                .single-products .products-image ul li a,
                .productsQuickView .grouped_form .woocommerce-grouped-product-list-item__price, .quick-view-modal .grouped_form .woocommerce-grouped-product-list-item__price,
                .productsQuickView .grouped_form .woocommerce-grouped-product-list-item__price ins, .quick-view-modal .grouped_form .woocommerce-grouped-product-list-item__price ins,
                .productsQuickView .grouped_form td a, .productsQuickView .grouped_form th a, .quick-view-modal .grouped_form td a, .quick-view-modal .grouped_form th a,
                .page-title-area .woocommerce-breadcrumb,
                .page-title-area .woocommerce-breadcrumb a:hover,
                .products_details .summary.entry-summary form.cart .group_table td a,
                .products_details .summary.entry-summary form.cart .woocommerce-grouped-product-list-item__price,
                .products_details .summary.entry-summary form.cart .woocommerce-grouped-product-list-item__price ins,
                .shop-sidebar ul li a:hover,
                .shop-sidebar .widget_top_rated_products .product_list_widget li a:hover,
                .shop-sidebar .widget_products .product_list_widget li a:hover,
                .shop-sidebar .widget_recently_viewed_products .product_list_widget li a:hover,
                .shop-sidebar .widget_recent_reviews .product_list_widget li a:hover,
                .shop-sidebar .widget_top_rated_products .product_list_widget li .amount,
                .shop-sidebar .widget_products .product_list_widget li .amount,
                .shop-sidebar .widget_recently_viewed_products .product_list_widget li .amount,
                .shop-sidebar .widget_recent_reviews .product_list_widget li .amount,
                .cart-table table tbody tr td.product-name a:hover, .header-area.header-style-two .navbar .uk-navbar-nav li .uk-dropdown .uk-dropdown-nav li a:hover, .header-area.header-style-two .navbar .uk-navbar-nav li .uk-dropdown .uk-dropdown-nav li a:focus, .header-area.header-style-two .navbar .uk-navbar-nav li .uk-dropdown .uk-dropdown-nav li.uk-active a, .banner-content h1 span, .services-box .content .icon, .services-box .hover-content .inner .icon, .services-box .hover-content .inner .details-btn:hover, .single-feedback-item .client-info span, .feedback-slides-two.owl-theme .owl-nav [class*="owl-"]:hover, .feedback-slides-two.owl-theme .owl-nav [class*="owl-"]:focus, .single-team-box .content .social ul li a, .hero-banner-content h1 span, .uk-dark .single-blog-post .blog-post-content h3 a:hover, .uk-dark .single-blog-post .blog-post-content h3 a:focus, .uk-dark .feedback-slides.owl-theme .owl-nav [class*="owl-"]:hover, .uk-dark .feedback-slides.owl-theme .owl-nav [class*="owl-"]:focus, .uk-dark .navbar .uk-navbar-nav li a:hover, .uk-dark .navbar .uk-navbar-nav li a:focus, .copyright-area ul li a:hover, .copyright-area ul li a:focus, .single-footer-widget .contact-info li a:hover, .single-footer-widget .contact-info li a:focus, .single-funfacts p, .single-funfacts .icon, .single-project-box:hover .project-content .details-btn, .single-project-box:focus .project-content .details-btn, .single-project-box .project-content ul li a:hover, .single-project-box .project-content ul li a:focus, .single-project-box .project-content h3 a:hover, .single-project-box .project-content h3 a:focus, .gunter-seo-breadcrumbs a:hover, .gunter-seo-breadcrumbs span, .single-featured-services-box .icon, .experience-content .content .single-experience-box .icon, .single-testimonials-box .user-info h3, .single-pricing-box .pricing-header .icon, .single-project-item .content .category, .single-project-item .content h3 a:hover, .single-blog-post-item .post-content .category, .single-blog-post-item .post-content h3 a:hover, .newsletter-content span, .wp-calendar-nav-prev a, .wp-calendar-nav-next a {color: '.esc_attr($main_color, 'gunter').';}
                
                .is-style-outline .wp-block-button__link, ul.entry-meta li a:hover {color: '.esc_attr($main_color, 'gunter').' !important;}';

                //Border Color
                $custom_css .='
                .is-style-outline .wp-block-button__link, .pages-links .post-page-numbers:hover, .pages-links .current, .uk-button-default:hover, .uk-button-default:focus, .uk-input:focus, .uk-select:focus, .uk-textarea:focus, .services-details-desc .services-image-slides.owl-theme .owl-nav.disabled + .owl-dots .owl-dot:hover span, .services-details-desc .services-image-slides.owl-theme .owl-nav.disabled + .owl-dots .owl-dot.active span, .blog-details .inner .comments-area .comment-respond .comment-form-comment input:focus,
                .blog-details .inner .comments-area .comment-respond .comment-form-comment textarea:focus,
                .blog-details .inner .comments-area .comment-respond .comment-form-author input:focus,
                .blog-details .inner .comments-area .comment-respond .comment-form-author textarea:focus,
                .blog-details .inner .comments-area .comment-respond .comment-form-email input:focus,
                .blog-details .inner .comments-area .comment-respond .comment-form-email textarea:focus,
                .blog-details .inner .comments-area .comment-respond .comment-form-url input:focus,
                .blog-details .inner .comments-area .comment-respond .comment-form-url textarea:focus, .uk-sidebar .widget.widget_tag_cloud .tagcloud a:hover, .blog-post-link .post_type_link, .pagination-area .page-numbers:hover, .pagination-area .current, #comments .comment-list .comment-body .reply a, .comment-respond .form-submit input, .comment-respond input:focus, .comment-respond textarea:focus, .post-password-form input[type="submit"], .footer-area .single-footer-widget ul li a:hover .post_count, .uk-button-default, .main-banner-content .video-btn .uk-icon, .services-details-desc blockquote, .services-details-desc .blockquote, .project-details-desc blockquote p, .project-details-desc .blockquote p, .single-team .team-social li a, .single-blog-post .blog-post-content .read-more-btn .read-more, .blog-details .inner .article-content .blockquote, .footer-social li a, .widget-area .uk-sidebar ul li a:hover .post_count, .blog-details .inner .comments-area .comment-respond .form-submit input, .tag-list li a:hover, .page-links .post-page-numbers:hover, .page-links .current, .comment-navigation .nav-links .nav-previous a, .comment-navigation .nav-links .nav-next a, .services-slides.owl-theme .owl-dots .owl-dot:hover span, .services-slides.owl-theme .owl-dots .owl-dot.active span, .uk-button-optional:hover, .uk-button-optional:focus, .services-box .content .icon, .services-box .hover-content .inner .icon, .single-feedback-item .client-info img, .single-footer-widget .social li a, .experience-content .content .single-experience-box .icon{border-color: '.esc_attr($main_color, 'gunter').';}
                
                blockquote {border-color: '.esc_attr($main_color, 'gunter').' !important;}

                .products_details .woocommerce-tabs ul.tabs li a:hover {
                color: '.esc_attr($main_color, 'gunter').' !important;
                }

                .products_details .woocommerce-tabs ul.tabs li.active {
                background-color: '.esc_attr($main_color, 'gunter').' !important;
                border-color: '.esc_attr($main_color, 'gunter').' !important;
                }
                .products_details .woocommerce-tabs .panel p.form-submit .btn {
                background-color: '.esc_attr($main_color, 'gunter').' !important;
                }
                .cart-table table .actions .btn {
                background-color: '.esc_attr($main_color, 'gunter').';
                border: 1px solid '.esc_attr($main_color, 'gunter').';
                }
                .cart-totals .wc-proceed-to-checkout .btn {
                background-color: '.esc_attr($main_color, 'gunter').';
                border: 1px solid '.esc_attr($main_color, 'gunter').';
                }
                .woocommerce-checkout-review-order .order-btn {
                background-color: '.esc_attr($main_color, 'gunter').';
                border: 1px solid '.esc_attr($main_color, 'gunter').';
                }

                .woocommerce .woocommerce-MyAccount-content .btn {
                    background: '.esc_attr($main_color, 'gunter').';
                    border: 1px solid '.esc_attr($main_color, 'gunter').';
                }
                .single-products .products-content .add-to-cart-btn {
                    color: '.esc_attr($main_color, 'gunter').';
                    border: 1px solid '.esc_attr($main_color, 'gunter').';
                }
                .top-dark {
                    background-color: '.esc_attr($top_nav_bg_color, 'gunter').';
                    border-bottom: 1px solid '.esc_attr($top_nav_bg_color, 'gunter').';
                }
                .uk-dark.header-area.uk-dark {
                    background-color: '.esc_attr( $dark_nav_bg_color, 'gunter' ).' !important;
                }
                .header-area.light {
                    background-color: '.esc_attr( $light_nav_bg_color, 'gunter' ).';
                }
                .uk-dark.footer-area {
                    background-color: '.esc_attr( $footer_bg, 'gunter' ).';
                }

                ';

                if ( isset($opt_name['enable_sticky_header'] ) && function_exists( 'gunter_toolkit_custom_post' ) ) { $sticky = $opt_name['enable_sticky_header']; }else{ $sticky = true; }

                if($sticky != true){
                    $custom_css .='
                    .menu-shrink{
                        display: none;
                    }';
                }
                
                if( isset($opt_name['css_code'] ) && !empty($opt_name['css_code']) )
                $custom_css .= $opt_name['css_code'];

                // Pre-loader image
                $is_preloader       = !empty($opt_name['enable_preloader']) ? $opt_name['enable_preloader'] : '';
                $preloader_image = isset( $opt_name['preloader_image']['url'] ) ? $opt_name['preloader_image']['url'] : get_template_directory_uri() . '/global-black-diaspora-report/assets/img' .'/status.gif';
                $preloader_style = !empty( $opt_name['preloader_style'] ) ? $opt_name['preloader_style'] : 'text';
                if ( $preloader_style == 'image' && $is_preloader == '1' ) {
                    $custom_css .= "
                    .uk-preloader:after,  .uk-preloader:before {
                        display: none;
                    }
                    .uk-preloader {
                        background: #fff;
                    }
                    .preloader-img {
                        background-image: url(" . esc_url( $preloader_image ) . ");
                        background-repeat: no-repeat;
                        background-position: center;
                    }";
                }
                
                wp_add_inline_style('gunter_custom_style', $custom_css);

                // Custom Js
                wp_enqueue_script( 'gunter-custom-script', get_template_directory_uri() . '/global-black-diaspora-report/assets/js/gunter-custom-script.js', array( 'jquery' ), false, true );
                $custom_script ='';
                if( isset($opt_name['js_code'] )){
                    $custom_script .= $opt_name['js_code'];
                }
                

                wp_add_inline_script( 'gunter-custom-script', $custom_script );
   
    }
}
add_action( 'wp_enqueue_scripts', 'gunter_custom_css' );