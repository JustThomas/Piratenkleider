<?php
/**
 * Piratenkleider Constants
 *
 **/ 

$defaultoptions = array(
    'js-version'                    => '3.2',
    'content-width'                 => 665,
    'yt-content-width'              => 665,
    'yt-content-height'             => 500,
    'logo'                          => get_template_directory_uri() .'/images/logo.png',
    'logo-width'                    => 300,
    'logo-height'                   => 130,
    'background-header-image'	    => get_template_directory_uri() .'/images/default-header-background.png',
    'background-header-color'	    => 'eeeeee',
    'smallslider-thumb-width'       => 220,
    'smallslider-thumb-height'      => 185,
    'bigslider-thumb-width'         => 705,
    'bigslider-thumb-height'        => 240,
    'bannerlink-width'		    => 296,
    'bannerlink-height'		    => 300,
    'plakate-width'                 => 296,
    'plakate-height'                => 416,
    'plakate-title'		    => '',
    'plakate-url'		    => 'https://www.piratenpartei.de',
    'plakate-altadressen'	    => '',
    'plakate-src'		    => array(),

    'default-fontset-file'          => 'font-bebas.css',
    'src-flexslider'                => get_template_directory_uri(). "/js/jquery.flexslider-min.js",
    'src-layoutjs'                  => get_template_directory_uri(). "/js/layout.js",
    'src-comment-reply'             => get_template_directory_uri(). "/js/comment-reply.js",
    'src-default-symbolbild'        => get_template_directory_uri() .'/images/defaultbild-wikinger.jpg',
    'src-default-symbolbild-404'    => get_template_directory_uri() .'/images/default-404.jpg',
    'src-default-symbolbild-category'   => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-symbolbild-search' => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-symbolbild-tag'    => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-symbolbild-author' => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-symbolbild-archive' => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-artikel-symbolbild' => get_template_directory_uri() .'/images/default-vorlage.jpg',  
    'src-default-symbolbild-person' => get_template_directory_uri() .'/images/default-vorlage.jpg',  
    'slider-defaultbildsrc'	    => get_template_directory_uri() .'/images/default-vorlage.jpg',  
    'src-linkicons-css'		    => get_template_directory_uri() .'/css/basemod_linkicons.css',     
    'src-basemod_sidebarbottom'	    => get_template_directory_uri().'/css/basemod_sidebarbottom.css',
    'dir-default-plakate'	    => '/plakate',
    'login_errors'		    => 1,
    'slider-aktiv'                  => 1,    
    'aktiv-defaultseitenbild'       => 0,
    'seitenbild-size'		    => 1,
    'seitenbild-url'		    => '',
    'aktiv-artikelbild'		    => 1,
    'artikelbild-size'		    => 1,    
    'aktiv-commentsonpages'	    => 0,
    'aktiv-platzhalterbilder-indexseiten'   => 0,
    'indexseitenbild-size'	    => 1,
    'continuelink'		    => 0,
    'aktiv-suche'                   => 1,   
    'slider-defaultwerbeplakate'    => 1,
    'slider-numberarticle'          => 3,
    'slider-animationType'          => 'fade',
    'slider-Direction'              => 'horizontal',
    'slider-slideshowSpeed'         => 8000,
    'slider-animationDuration'      => 600,
    'slider-catid'                  => 1,
    'defaultwerbesticker'                   => 1,
    'aktiv-autoren'                         => 1,
    'newsletter'                            => 1,
    'alle-socialmediabuttons'               => 1,
    'aktiv-linkicons'			    => 1,
    'aktiv-linkmenu'                        => 1,
    'aktiv-startseite-kategorien'           => 1,
    'aktiv-startseite-tags'                 => 1,
    'aktiv-avatar'                          => 0,
    'aktiv-dynamic-sidebar'                 => 0,
    'aktiv-autokeywords'		    => 0,
    'src-default-avatar'                    => get_template_directory_uri(). '/images/avataricon.gif',
    'seitenmenu_mode'			    => 0,
    'zeige_subpagesonly'                    => 1,
    'zeige_sidebarpagemenu'                 => 1,
    'zeige_commentbubble_null'              => 0,
    'zeigerechtsvorschriften'               => 1,
    

    'artikelstream-type'		    => 0,
    /* 0: Default: Alle Artikel + Linktipps
    * 1: Alle Artikel, ohne LInktipps
    * 2: Alle Artikel aus Kategorien bis auf definierte Cats und ohne Linktipps
    */
    'artikelstream-exclusive-catliste'	    => array(), 
    /* Ids der Categorien */
    'artikelstream-maxnum-main'             =>  5,
    'artikelstream-maxnum-second'	    =>  1,
    'artikelstream-maxnum-linktipps'	    =>  1,
    'artikelstream-title-main'		    =>  __("Current entries", 'piratenkleider'),
    'artikelstream-title-maincontinuelist'  =>  __("More entries", 'piratenkleider'),
    'artikelstream-title-linktipps'	    =>  __("Bookmarks", 'piratenkleider'),
    'artikelstream-title-linktippcontinuelist'=>  __("More bookmarks", 'piratenkleider'),
    'artikelstream-title-second'	    =>  __("Other entries", 'piratenkleider'),
    'artikelstream-title-secondcontinuelist'=>  __("More entries", 'piratenkleider'),
    'artikelstream-show-second'		    => 1,
    'artikelstream-show-linktipps'	    => 1,
    'artikelstream-nextnum-main'	    => 5,
    'artikelstream-nextnum-second'	    => 5,
    'artikelstream-nextnum-linktipps'	    => 5,    
    'artikelstream-numfullwidth-main'       => 1,
    'artikelstream-numfullwidth-second'     => 1,
    
    'categoryindex-teaserlength'            => 170,
    'categoryindex-numlinklist'		    => 5,
    
    'category-teaser'			    => 1,
    'category-num-article-fullwidth'	    => 10,
    'category-num-article-halfwidth'	    => 0,
    
    'category-teaser-maxlength'		    => 500,            
    'category-teaser-titleup'		    => 1, /* Titles up */ 
    'category-teaser-datebox'		    => 4, 
	/* 0 = Datebox, 
	 * 1 = Thumbnail (or: first picture, first video, fallback picture),
	 * 2 = First picture (or: thumbnail, first video, fallback picture),
	 * 3 = First video (or: thumbnail, first picture, fallback picture),
	 * 4 = First video (or: first picture, thumbnail, fallback picture),
	 * 5 = Nothing */ 
    'category-teaser-floating'		    => 0,
    'category-teaser-dateline'		    => 1,
        /* 1 = show Date on line up of the text if no datebox */
    'category-teaser-maxlength-halfwidth'   => 200,        
    'category-teaser-titleup-halfwidth'	    => 1, 
        /* 1= Titles up */ 
    'category-teaser-datebox-halfwidth'	    => 4, 
    'category-teaser-floating-halfwidth'    => 1,
    'category-teaser-dateline-halfwidth'    => 2, 
        /* 1 = show Date on line up of the text if no datebox */    
    'teaser-thumbnail_width'		    => 120,
    'teaser-thumbnail_height'		    => 120,
    'teaser-thumbnail_crop'		    => 1,
    
    'linktipp-thumbnail_width'		    => 310,
    'linktipp-thumbnail_height'		    => 210,
    'linktipp-thumbnail_crop'		    => 1,
    
    'person-thumbnail_width'		    => 200,
    'person-thumbnail_height'		    => 300,
    'person-thumbnail_crop'		    => 1,

    
    'sidebar-thumbnail_width'		    => 270,
    'sidebar-thumbnail_height'		    => 360,
    'sidebar-thumbnail_crop'		    => 1,
    'sidebar-thumbnail_name'		    => 'sidebar-thumb',
    
    'sidebar-steckbrief-maxwidth'	    => 270,
    'sidebar-steckbrief-maxheight'	    => 360,
    
    
    'src-teaser-thumbnail_default'	    => get_template_directory_uri() .'/images/default-teaserthumb.gif',
    'teaser-thumbnail_fallback'		    => 1,
    
    'teaser-type'			    => 'big',    
    'teaser-title-maxlength'		    => 120,
    'teaser-subtitle'			    => __( 'Trending Topics', 'piratenkleider' ),
    'teaser-title-words'		    => 7,

    'teaser_maxlength'			    => 500,
    'teaser-showcredits'                    => 1,
    'teaser-titleup'			    => 1, 
        /* Titles up */ 
    'teaser-datebox'			    => 4,
    'teaser-floating'			    => 0,
    'teaser-dateline'			    => 1, 
        /* 1 = show Date on line up of the text if no datebox */
    'teaser-maxlength-halfwidth'	    => 200,        
    'teaser-titleup-halfwidth'		    => 1, 
        /* Titles up */ 
    'teaser-datebox-halfwidth'		    => 4, 
    'teaser-floating-halfwidth'		    => 1,
    'teaser-dateline-halfwidth'		    => 1, 
        /* 1 = show Date on line up of the text if no datebox */      
     
    'url-newsletteranmeldung'		    => 'https://service.piratenpartei.de/subscribe/newsletter',
    'anonymize-user'                => 0,
    'anonymize-user-commententries' => 0,
    'aktiv-commentreplylink'        => 1,
    'default_comment_notes_before'  => '<p class="comment-notes">'.__( 'Your email address wont be displayed. Required fields are marked with this sign: <span class="required">*</span>', 'piratenkleider' ). '</p>',
    'comments_disclaimer'           => __('Notice: Comments reflect the opionions of those who did wrote theme. Allowing people comment here, doenst mean, that we also agree with them.  ', 'piratenkleider' ),
    'disclaimer_post'               => '',
    'feed_cache_lifetime'           => 14400,
    'use_wp_feed_defaults'          => 1,
    'dir_feed_cache'                => '',
    'teaserlink1-title'             => __( 'Read', 'piratenkleider' ),
    'teaserlink1-untertitel'        => __( 'about our topics and visions!', 'piratenkleider' ),            
    'teaserlink1-url'               => 'https://www.piratenpartei.de/politik/themen/', 
    'teaserlink1-symbol'            => 'idee',
    
    'teaserlink2-title'             => __( 'Support us', 'piratenkleider' ),
    'teaserlink2-untertitel'        => __( 'with your engagement!', 'piratenkleider' ),            
    'teaserlink2-url'               => 'https://www.piratenpartei.de/unterstutze-uns/', 
    'teaserlink2-symbol'            => 'herz',
    
    'teaserlink3-title'             => __( 'Become a Pirat!', 'piratenkleider' ),
    'teaserlink3-untertitel'        => __( 'Subscribe to the pirate party', 'piratenkleider' ),            
    'teaserlink3-url'               => 'https://www.piratenpartei.de/mitmachen/mitglied-werden', 
    'teaserlink3-symbol'            => 'steuerrad',
    
    'stickerlink1-content'          => '<span class="gedreht">Become<br><span class="cicolor">Pirat!</span></span>',
    'stickerlink1-url'              => 'https://www.piratenpartei.de/mitmachen/mitglied-werden/',
    'stickerlink2-content'          => '<span class="gedreht"><span class="cicolor">Support</span><br><span class="small">and help us</span> </span>',
    'stickerlink2-url'              => 'https://spenden.piratenpartei.de/',
    'stickerlink3-content'          => '',
    'stickerlink3-url'              => '',
    'default_footerlink_key'		    => 'International (with flags)',
    'default_footerlink_show'		    => 1,    
    'default_text_title_home_backlink'	    => __('Back to start page','piratenkleider' ), 
    'yt-alternativeembed'		    => 1,
        /* YouTube Videos ueber eigenen Embedcode gestalten und an youtbe-nocookie lenken */
    'yt-norel'				    => 1,
	/* Keine weiteren Videos vorschlagen */
    'excerpt_allowtags'			    => '<br>,<br />',        
    'zeige_breadcrump'			    => 1,
    'breadcrumb_delimiter'		    => ' / ',    
    'breadcrumb_homelinktext'		    =>  __( 'Start page', 'piratenkleider' ),
    'breadcrumb_beforehtml'		    =>  '<span class="current">',
    'breadcrumb_afterhtml'		    =>  '</span>',
    'zeige_breadcrump_frontpages'           => 0,
    
    

    
    'src-linktipp-thumbnail_default'	    => get_template_directory_uri() .'/images/default-teaserthumb.gif',
    'src-person_bild_default'		    => '',
    'linktipps-titlepos'		    => 0, // 0 = ueber Bild/Text, 1 = unter Bild/Text
    'linktipps-linkpos'			    => 0, // 0 = Link auf dem Titel, 1 = Link auf Text/Bild, 2 = URL unter Bild/Text anzeigen&verlinken
    'linktipps-subtitlepos'		    => 0, // 0 = oben, vor Titel, 1 = oben nach titel, 2 = unten
    
    'stylefile-position'		    => 0,
    'aktiv-stylefile'			    => 0,
    'fonts-headers'                         => 'BebasNeue',
    'fonts-menuheaders'                     => 'BebasNeue',
    'fonts-content'                         => 'DroidSans',
    'img-meta-credits'                      => '',
    'feed-overwriteauthorstring'            => '',
    'position_sidebarbottom'                => 0,
    'suche-treffer_pro_seite'               => 10,
    'suche-excerptlength'                   => 300,
    
    'meta-maxlengthvalue'                   => 140,
    'url-wiki'				    => 'https://wiki.piratenpartei.de',
    'vcard-showfeed'                        => 1,
    'vcard-feed-maxnum'                     => 7,
    'optionpage-tab-default'                => 'kopfteil'
);


/*
 * Social Media 
 */
$default_socialmedia_liste = array(
    'delicious' => array(
	'name' => 'Delicious',
	'content'  => '',
	'active' => 0,
    ),
    'diaspora' => array(
	'name' => 'Diaspora',
	'content'  => 'https://joindiaspora.com/u/piratenpartei',
	'active' => 0,
    ),
    'facebook' => array(
	'name' => 'Facebook',
	'content'  => 'https://www.facebook.com/PiratenparteiDeutschland',
	'active' => 1,
    ),
    'twitter' => array(
	'name' => 'Twitter',
	'content'  => 'https://twitter.com/#!/piratenpartei',
	'active' => 1,
    ),
    'gplus' => array(
	'name' => 'Google Plus',
	'content'  => 'https://plus.google.com/u/0/107862983960150496076/posts',
	'active' => 1,
    ),
    'flattr' => array(
	'name' => 'Flattr',
	'content'  => '',
	'active' => 0,
    ),
    'flickr' => array(
	'name' => 'Flickr',
	'content'  => 'https://secure.flickr.com/photos/piratenpartei/',
	'active' => 0,
    ),
  
    'identica' => array(
	'name' => 'Identica',
	'content'  => 'https://identi.ca/piratenpartei',
	'active' => 0,
    ),
    'itunes' => array(
	'name' => 'iTunes',
	'content'  => '',
	'active' => 0,
    ),
    'skype' => array(
	'name' => 'Skype',
	'content'  => '',
	'active' => 0,
    ),
    
    'youtube' => array(
	'name' => 'YouTube',
	'content'  => 'https://www.youtube.com/user/piratenpartei',
	'active' => 1,
    ),
    'xing' => array(
	'name' => 'Xing',
	'content'  => 'https://www.xing.com/net/piratenpartei',
	'active' => 0,
    ),
    'tumblr' => array(
	'name' => 'Tumblr',
	'content'  => 'http://wirstellendasmalinfrage.tumblr.com',
	'active' => 0,
    ),
    'github' => array(
	'name' => 'GitHub',
	'content'  => '',
	'active' => 0,
    ),
    'appnet' => array(
	'name' => 'App.Net',
	'content'  => '',
	'active' => 0,
    ),
    'feed' => array(
	'name' => 'RSS Feed',
	'content'  => get_bloginfo( 'rss2_url' ),
	'active' => 1,
    ),
); 


/* 
 * Default Links for Topmenu , can be overwritten bei widget  
 */
$default_toplink_liste = array(    
    'link1'  => array(
	'name'	    => __('Wiki', 'piratenkleider' ),
	'content'  => 'https://wiki.piratenpartei.de',
	'active'    => 1,
    ),
    'link2'  => array(
	'name'	    => __('Liquid Feedback', 'piratenkleider' ),
	'content'  => 'https://lqfb.piratenpartei.de',
	'active'    => 0,
    ),
    'link3'  => array(
	'name'	    => __('Forum', 'piratenkleider' ),
	'content'  => 'https://news.piratenpartei.de',
	'active'    => 1,
    ),
    'link4'  => array(
	'name'	    => __('Vorstand', 'piratenkleider' ),
	'content'  => 'https://vorstand.piratenpartei.de',
	'active'    => 0,
    ),  
    'link5'  => array(
	'name'	    => __('Flaschenpost', 'piratenkleider' ),
	'content'  => 'https://flaschenpost.piratenpartei.de',
	'active'    => 1,
    ),
    'link6'  => array(
	'name'	    => __('Spenden', 'piratenkleider' ),
	'content'  => 'https://spenden.piratenpartei.de',
	'active'    => 1,
    ),
    'link7'  => array(
	'name'	    => __('Shop', 'piratenkleider' ),
	'content'  => 'https://shop.piratenpartei.de',
	'active'    => 0,
    ),  
     'link8'  => array(
	'name'	    => __('Pirateninfo', 'piratenkleider' ),
	'content'  => 'http://www.pirateninfo.de',
	'active'    => 1,
    ),  
);

/* 
 * Default Links for laws in imprint 
 */
$default_imprint_laws_list = array(    
    'link1'  => array(
	'name'	    => __('Gesetz &uuml;ber politische Parteien (Parteiengesetz)', 'piratenkleider' ),
	'content'  => 'https://www.bundestag.de/bundestag/aufgaben/rechtsgrundlagen/pg_pdf.pdf',
	'active'    => 1,
    ),
    'link2'  => array(
	'name'	    => __('Satzung der Piratenpartei Deutschland', 'piratenkleider' ),
	'content'  => 'https://wiki.piratenpartei.de/Satzung',
	'active'    => 1,
    ),
    'link3'  => array(
	'name'	    => __('Jeweilige Landessatzung  der Piratenpartei Deutschland', 'piratenkleider' ),
	'content'  => 'https://wiki.piratenpartei.de/Satzungen',
	'active'    => 1,
    ), 
);

/**
 * Liste der Defaultbilder fuer Seiten und Slider
 */
$defaultbilder_liste = array(
	'0'=> array(
		'src' =>	get_template_directory_uri().'/images/default-vorlage.jpg',
		'label' => __( 'Default', 'piratenkleider' )
	),
	'1'=> array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-wikinger.jpg',
		'label' => __( 'Wikinger', 'piratenkleider' )
	),
);




/*
 * Default color modifications for standard css style
 */
$default_colorstyles = array(
    '-'  =>  __('Default Stylesheet', 'piratenkleider' ),
    'colors_at.css' => __( 'Austria (Violet)', 'piratenkleider' ),
    'colors_lu.css' => __( 'Luxemburgh (Violet)', 'piratenkleider' ),
    'colors_hu.css' => __( 'Hungary (Violet)', 'piratenkleider' ),
    'colors_tk.css' => __( 'Turkey (Cyan)', 'piratenkleider' ),
    'colors_us.css' => __( 'USA (Violet)', 'piratenkleider' ),

 );
          


$default_fonts = array(
    'none'=> array(
        'title' => __( 'Use default font settings', 'piratenkleider' ),
        'family' => '',
    ),      
    'serifdefault' => array(
        'title' => __( 'Georgia, Times, Calibri, serif', 'piratenkleider' ),
        'family' => 'Georgia, Times, Calibri, serif',
    ),       
    'sansserifdefault' => array(
        'title' => __( 'Helvetica, Verdana, Arial, sans-serif', 'piratenkleider' ),
        'family' => 'Helvetica, Verdana, Arial, sans-serif',
        'comments'  =>  __( 'Use default sans serif font', 'piratenkleider' ),
    ),  
    'BebasNeue' => array(
        'title' => __( 'Bebas Neue', 'piratenkleider' ),
        'comments'  => '',
        'webfont'   => 1,
        'ttf'   => '/fonts/BebasNeue-webfont.ttf',
        'woff'   => '/fonts/BebasNeue-webfont.woff',
    ),
    'Awesome' => array(
        'title' => __( 'Awesome', 'piratenkleider' ),
        'comments'  => '',
        'webfont'   => 1,
        'ttf'   => '/fonts/fontawesome-webfont.ttf',
        'woff'   => '/fonts/fontawesome-webfont.woff',
    ),
    'DroidSans' => array(
        'title' => __( 'Droid Sans', 'piratenkleider' ),
        'comments'  => '',
        'webfont'   => 1,
        'eot'   => '/fonts/DroidSans.eot',
        'ttf'   => '/fonts/DroidSans.ttf',
    ),    
    'LinLibertine' => array(
        'title' => __( 'Libertine', 'piratenkleider' ),
        'comments'  => '',        
        'webfont'   => 1,
        'woff'   => '/fonts/LinLibertine_R.woff',
    ), 
    'PoliticsHead' => array(
        'title' => __( 'PoliticsHead', 'piratenkleider' ),
        'comments'  => '',        
        'webfont'   => 1,
        'woff'   => '/fonts/PoliticsHeadv1_9.woff',
        'eot'   => '/fonts/PoliticsHeadv1_9.ttf',
    ), 
    'monospace' => array(
        'title' => __( '"Courier New", Courier, monospace', 'piratenkleider' ),
        'family' => '"Courier New", Courier, monospace',
    ),    
      
);

/*
 * Default font modifications for standard css style
 */
$default_alternativestyles = array(
    'style.css'	    => __( 'Default Style', 'piratenkleider' ),
    'sample.css'    => __( 'Empty CSS', 'piratenkleider' ),
    'scapegoat.css' => __( 'Scapegoat-Adaption (1.1)', 'piratenkleider' ),
    'flaschenpost.css' => __( 'Flaschenpost 2013', 'piratenkleider' ),
    'piratenkleider2.css' => __( 'Piratenkleider 2', 'piratenkleider' ),
);

/*
 * default links for pirate party worldwide and in germany
 */

 $default_footerlink_liste = array(
     __( 'Germany', 'piratenkleider' )  => array(
        'title' => __( 'Pirate Party Germany', 'piratenkleider' ),
        'url'   => 'https://www.piratenpartei.de',
        'sublist'   => array(
            __('Baden-W&uuml;rttemberg', 'piratenkleider' ) => 'https://piratenpartei-bw.de/',
            __('Bayern', 'piratenkleider' ) => 'https://piratenpartei-bayern.de/',
            __('Berlin', 'piratenkleider' ) => 'http://berlin.piratenpartei.de/',
            __('Brandenburg', 'piratenkleider' ) => 'https://www.piratenbrandenburg.de/',
            __('Bremen', 'piratenkleider' ) => 'http://bremen.piratenpartei.de/',
            __('Hamburg', 'piratenkleider' ) => 'http://www.piratenpartei-hamburg.de/',
            __('Hessen', 'piratenkleider' ) => 'https://www.piratenpartei-hessen.de/',
            __('Mecklenburg-Vorpommern', 'piratenkleider' ) => 'http://www.piratenpartei-mv.de/',
            __('Niedersachsen', 'piratenkleider' ) => 'https://www.piraten-nds.de/',
            __('Nordrhein-Westfalen', 'piratenkleider' ) => 'http://www.piratenpartei-nrw.de/',
            __('Rheinland-Pfalz', 'piratenkleider' ) => 'http://www.piraten-rlp.de/',
            __('Saarland', 'piratenkleider' ) => 'https://piratenpartei-saarland.de/',
            __('Sachsen', 'piratenkleider' ) => 'http://www.piraten-sachsen.de/',
            __('Sachsen-Anhalt', 'piratenkleider' ) => 'https://www.piraten-lsa.de/',
            __('Schleswig-Holstein', 'piratenkleider' ) => 'https://landesportal.piratenpartei-sh.de/',
            __('Th&uuml;ringen', 'piratenkleider' ) => 'http://www.piraten-thueringen.de/'
        )
     ),
     __('International', 'piratenkleider' ) => array(
         'title' => __('Pirate Party International', 'piratenkleider' ),
         'url'  => 'http://www.pp-international.net/',
         'sublist' => array(
             __('Argentinien', 'piratenkleider' ) => 'http://www.partidopirata.com.ar/',
             __('Australien', 'piratenkleider' ) => 'http://pirateparty.org.au/',
             __('Belgien', 'piratenkleider' ) => 'https://pirateparty.be/',
             __('Brasilien', 'piratenkleider' ) => 'http://www.partidopirata.org/',
             __('Chile', 'piratenkleider' ) => 'http://www.partidopirata.cl/',
             __('D&auml;nemark', 'piratenkleider' ) => 'http://piratpartiet.dk/',
             __('Deutschland', 'piratenkleider' ) => 'https://www.piratenpartei.de/', 
             __('Estland', 'piratenkleider' ) => 'http://piraadipartei.ee/',
             __('Finnland', 'piratenkleider' ) => 'https://piraattipuolue.fi/',
             __('Frankreich', 'piratenkleider' ) => 'https://partipirate.org/',
             __('Griechenland', 'piratenkleider' ) => 'https://pirateparty.gr/',
             __('Guatemala', 'piratenkleider' ) => 'http://partidopirata.org.gt/',
             __('Island', 'piratenkleider') => 'http://pirateparty.is/',
             __('Israel', 'piratenkleider') => 'http://piratim.org/',
             __('Italien', 'piratenkleider' ) => 'http://www.partito-pirata.it/',
             __('Kanada', 'piratenkleider' ) => 'http://www.piratepartyofcanada.com/',
             __('Kasachstan', 'piratenkleider' ) => 'http://pirateparty.kz/',
             __('Kolumbien', 'piratenkleider' ) => 'http://pp.interlecto.net/',
             __('Kroatien', 'piratenkleider' ) => 'https://pirati.hr/',
             __('Lettland', 'piratenkleider' ) => 'http://piratupartija.lv/',
             __('Litauen', 'piratenkleider' ) => 'http://piratupartija.lt/',
             __('Luxemburg', 'piratenkleider' ) => 'http://www.piratepartei.lu/',
             __('Mexiko', 'piratenkleider' ) => 'http://www.partidopiratamexicano.org/',
             __('Neuseeland', 'piratenkleider' ) => 'http://pirateparty.org.nz/',
             __('Niederlande', 'piratenkleider' ) => 'https://www.piratenpartij.nl/',
             __('&Ouml;sterreich', 'piratenkleider' ) => 'http://piratenpartei.at/',
             __('Peru', 'piratenkleider' ) => 'http://wiki.freeculture.org/Pirata',
             __('Polen', 'piratenkleider' ) => 'https://polskapartiapiratow.pl/',
             __('Portugal', 'piratenkleider' ) => 'http://www.partidopiratapt.eu/',
             __('Rum&auml;nien', 'piratenkleider' ) => 'http://www.partidulpirat.ro/',
             __('Russland', 'piratenkleider' ) => 'http://pirate-party.ru/',
             __('Schweden', 'piratenkleider' ) => 'https://www.piratpartiet.se/',
             __('Schweiz', 'piratenkleider' ) => 'https://www.piratenpartei.ch/',
             __('Serbien', 'piratenkleider' ) => 'http://www.piratskapartija.com/',
             __('Slowakei', 'piratenkleider' ) => 'http://www.piratskastrana.sk/',
             __('Slowenien', 'piratenkleider' ) => 'http://www.piratskastranka.net/',
             __('Spanien', 'piratenkleider' ) => 'http://www.partidopirata.es/',
             __('S&uuml;dkorea', 'piratenkleider' ) => 'http://pirateparty.kr/',
             __('Tschechien', 'piratenkleider' ) => 'http://www.ceskapiratskastrana.cz/',
             __('T&uuml;rkei', 'piratenkleider' ) => 'http://www.korsanpartisi.org/',
             __('Ukraine', 'piratenkleider' ) => 'http://pp-ua.org/',
             __('Ungarn', 'piratenkleider' ) => 'http://kalozpart.org/',
             __('Uruguay', 'piratenkleider' ) => 'http://partidopirata.org.uy/',
             __('USA', 'piratenkleider' ) => 'http://pirate-party.us/',
             __('Vereinigtes K&ouml;nigreich', 'piratenkleider') => 'https://pirateparty.org.uk/',
             __('Wei&szlig;russland', 'piratenkleider' ) => 'http://pirates.by/',            
             __('Zypern', 'piratenkleider' ) => 'http://www.piratepartycyprus.com/',

         )
     ), 
      __('International (with flags)', 'piratenkleider' ) => array(
         'title' => __('Pirate Party International', 'piratenkleider' ),
         'url'  => 'http://www.pp-international.net/',
         'sublist' => array(
             '<span class="flagicon-ar"></span> '.__('Argentinien', 'piratenkleider') => 'http://www.partidopirata.com.ar/',
             '<span class="flagicon-au"></span> '.__('Australien', 'piratenkleider') => 'http://pirateparty.org.au/',
             '<span class="flagicon-be"></span> '.__('Belgien', 'piratenkleider') => 'https://pirateparty.be/',
             '<span class="flagicon-br"></span> '.__('Brasilien', 'piratenkleider') => 'http://www.partidopirata.org/',
              '<span class="flagicon-cl"></span> '.__('Chile', 'piratenkleider') => 'http://www.partidopirata.cl/',
              '<span class="flagicon-dk"></span> '.__('D&auml;nemark', 'piratenkleider') => 'http://piratpartiet.dk/',
              '<span class="flagicon-de"></span> '.__('Deutschland', 'piratenkleider') => 'https://piratenpartei.de/',   
              '<span class="flagicon-ee"></span> '.__('Estland', 'piratenkleider') => 'http://piraadipartei.ee/',    
              '<span class="flagicon-fi"></span> '.__('Finnland', 'piratenkleider') => 'https://piraattipuolue.fi/',
              '<span class="flagicon-fr"></span> '.__('Frankreich', 'piratenkleider') => 'https://partipirate.org/',
              '<span class="flagicon-gr"></span> '.__('Griechenland', 'piratenkleider') => 'https://pirateparty.gr/',
              '<span class="flagicon-gt"></span> '.__('Guatemala', 'piratenkleider') => 'http://partidopirata.org.gt/',
              '<span class="flagicon-is"></span> '.__('Island', 'piratenkleider') => 'http://pirateparty.is/',            
              '<span class="flagicon-il"></span> '.__('Israel', 'piratenkleider') => 'http://piratim.org/',            
              '<span class="flagicon-it"></span> '.__('Italien', 'piratenkleider') => 'http://www.partito-pirata.it/',
              '<span class="flagicon-ca"></span> '.__('Kanada', 'piratenkleider') => 'https://www.pirateparty.ca/',
              '<span class="flagicon-kz"></span> '.__('Kasachstan', 'piratenkleider') => 'http://pirateparty.kz/',
              '<span class="flagicon-co"></span> '.__('Kolumbien', 'piratenkleider') => 'http://pp.interlecto.net/',
              '<span class="flagicon-hr"></span> '.__('Kroatien', 'piratenkleider') => 'https://pirati.hr/',
              '<span class="flagicon-lv"></span> '.__('Lettland', 'piratenkleider') => 'http://piratupartija.lv/',
              '<span class="flagicon-lt"></span> '.__('Litauen', 'piratenkleider') => 'http://piratupartija.lt/',
              '<span class="flagicon-lu"></span> '.__('Luxemburg', 'piratenkleider') => 'http://www.piratepartei.lu/',
              '<span class="flagicon-mx"></span> '.__('Mexiko', 'piratenkleider') => 'http://www.partidopiratamexicano.org/',
             '<span class="flagicon-nz"></span>  '.__('Neuseeland', 'piratenkleider') => 'http://pirateparty.org.nz/',
             '<span class="flagicon-nl"></span> '.__('Niederlande', 'piratenkleider') => 'https://www.piratenpartij.nl/',
             '<span class="flagicon-at"></span> '.__('&Ouml;sterreich', 'piratenkleider') => 'http://piratenpartei.at/',
             '<span class="flagicon-pe"></span> '.__('Peru', 'piratenkleider') => 'http://wiki.freeculture.org/Pirata',
             '<span class="flagicon-pl"></span> '.__('Polen', 'piratenkleider') => 'https://polskapartiapiratow.pl/',
             '<span class="flagicon-pt"></span> '.__('Portugal', 'piratenkleider') => 'http://www.partidopiratapt.eu/',
             '<span class="flagicon-ro"></span> '.__('Rum&auml;nien', 'piratenkleider') => 'http://www.partidulpirat.ro/',
             '<span class="flagicon-ru"></span> '.__('Russland', 'piratenkleider') => 'http://pirate-party.ru/',
             '<span class="flagicon-se"></span> '.__('Schweden', 'piratenkleider') => 'https://www.piratpartiet.se/',
             '<span class="flagicon-ch"></span> '.__('Schweiz', 'piratenkleider') => 'https://www.piratenpartei.ch/',
             '<span class="flagicon-rs"></span> '.__('Serbien', 'piratenkleider') => 'http://www.piratskapartija.com/',
             '<span class="flagicon-sk"></span> '.__('Slowakei', 'piratenkleider') => 'http://www.piratskastrana.sk/',
             '<span class="flagicon-si"></span> '.__('Slowenien', 'piratenkleider') => 'http://www.piratskastranka.net/',
             '<span class="flagicon-es"></span> '.__('Spanien', 'piratenkleider') => 'http://www.partidopirata.es/',
             '<span class="flagicon-kr"></span> '.__('S&uuml;dkorea', 'piratenkleider') => 'http://pirateparty.kr/',
             '<span class="flagicon-cz"></span> '.__('Tschechien', 'piratenkleider') => 'http://www.ceskapiratskastrana.cz/',
             '<span class="flagicon-tr"></span> '.__('T&uuml;rkei', 'piratenkleider') => 'http://www.korsanpartisi.org/',
             '<span class="flagicon-ua"></span> '.__('Ukraine', 'piratenkleider') => 'http://pp-ua.org/',
             '<span class="flagicon-hu"></span> '.__('Ungarn', 'piratenkleider') => 'http://kalozpart.org/',             
             '<span class="flagicon-uy"></span> '.__('Uruguay', 'piratenkleider') => 'http://partidopirata.org.uy/',
             '<span class="flagicon-us"></span> '.__('USA', 'piratenkleider') => 'http://pirate-party.us/',             
             '<span class="flagicon-uk"></span> '.__('Vereinigtes K&ouml;nigreich', 'piratenkleider') => 'https://pirateparty.org.uk/',              
             '<span class="flagicon-by"></span> '.__('Wei&szlig;russland', 'piratenkleider') => 'http://pirates.by/',
             '<span class="flagicon-cy"></span> '.__('Zypern', 'piratenkleider') => 'http://www.piratepartycyprus.com/',


         )
     ), 
     'Baden-Wuerttemberg' => array(
         'title' => 'Piratenpartei Landesverband Baden-W&uuml;rttemberg',
         'url'  => 'http://www.piratenpartei-bw.de/',
         'sublist' => array(
             '<abbr title="Bezirksverband">BV</abbr> Freiburg' => 'https://bzv-fr.piratenpartei-bw.de/',      
             '<abbr title="Bezirksverband">BV</abbr> Stuttgart' => 'http://www.piraten-bzv-stuttgart.de/',
             '<abbr title="Bezirksverband">BV</abbr> T&uuml;bingen' => 'https://bzv.piratenpartei-tuebingen.de/',          
             '<abbr title="Kreisverband">KV</abbr> B&ouml;blingen' => 'https://wiki.piratenpartei.de/BW:Landkreis_B%C3%B6blingen/Kreisverband',
             '<abbr title="Kreisverband">KV</abbr> Calw-Freudenstadt' => 'https://wiki.piratenpartei.de/BW:Kreisverband_Calw-Freudenstadt',
             '<abbr title="Kreisverband">KV</abbr> Heidenheim' => 'http://www.piraten-heidenheim.de',
             '<abbr title="Kreisverband">KV</abbr> Heilbronn' => 'http://www.piratenpartei-heilbronn.de',
             '<abbr title="Kreisverband">KV</abbr> Karlsruhe Land' => 'http://piraten-ka-land.de',
             '<abbr title="Kreisverband">KV</abbr> Karlsruhe Stadt' => 'http://www.piraten-karlsruhe.de',
             '<abbr title="Kreisverband">KV</abbr> Ludwigsburg' => 'http://www.piratenpartei-ludwigsburg.de',
             '<abbr title="Kreisverband">KV</abbr> Mannheim' => 'http://piratenpartei-mannheim.de',
             '<abbr title="Kreisverband">KV</abbr> Rastatt-Baden-Baden' => 'http://piraten-rastatt.de',
             '<abbr title="Kreisverband">KV</abbr> Ravensburg-Bodenseekreis' => 'http://www.piraten-rvfn.de',
             '<abbr title="Kreisverband">KV</abbr> Reutlingen-T&uuml;bingen' => 'http://piratenpartei-reutlingen-tuebingen.de',
             '<abbr title="Kreisverband">KV</abbr> Rhein-Neckar/Heidelberg' => 'http://piraten-rnhd.de',
             '<abbr title="Kreisverband">KV</abbr> Schw&auml;bisch Hall' => 'http://www.kocher-jagst-piraten.de',
             '<abbr title="Kreisverband">KV</abbr> Stuttgart' => 'https://www.piratenpartei-stuttgart.de',
             '<abbr title="Kreisverband">KV</abbr> Ulm/Alb-Donau-Kreis' => 'http://www.piratenpartei-ulm.de',            
         )
     ),  
     'Bayern' => array(
         'title' => 'Piratenpartei Landesverband Bayern',
         'url'  => 'http://www.piratenpartei-bayern.de/',
         'sublist' => array(
             '<abbr title="Bezirksverband">BV</abbr> Mittelfranken' => 'http://piraten-mfr.de/',
             '<abbr title="Bezirksverband">BV</abbr> Niederbayern' => 'http://niederbayern.piratenpartei-bayern.de/',
             '<abbr title="Bezirksverband">BV</abbr> Oberbayern' => 'http://oberbayern.piratenpartei.de/',
             '<abbr title="Bezirksverband">BV</abbr> Oberfranken' => 'http://piraten-oberfranken.de/',
             '<abbr title="Bezirksverband">BV</abbr> Oberpfalz' => 'http://oberpfalz.piratenpartei.de/',
             '<abbr title="Bezirksverband">BV</abbr> Schwaben' => 'http://www.piraten-schwaben.de/',
             '<abbr title="Bezirksverband">BV</abbr> Unterfranken' => 'https://piraten-ufr.de/',
         ) 
     ), 
    'Brandenburg' => array(
        'title' => 'Piratenpartei Landesverband Brandenburg',
        'url'  => 'http://www.piratenbrandenburg.de/',
        'sublist' => array(
            '<abbr title="Stadtverband">SV</abbr> Potsdam' => 'https://potsdam.piratenbrandenburg.de/',
            '<abbr title="Kreisverband">KV</abbr> Brandenburg an der Havel' => 'https://brb.piratenbrandenburg.de/',
            '<abbr title="Kreisverband">KV</abbr> Havelland' => 'https://hvl.piratenbrandenburg.de/',
            '<abbr title="Kreisverband">KV</abbr> M&auml;rkisch-Oderland' => 'https://mol.piratenbrandenburg.de/',
            '<abbr title="Kreisverband">KV</abbr> Oberhavel' => 'https://ohv.piratenbrandenburg.de/',
            '<abbr title="Kreisverband">KV</abbr> Potsdam-Mittelmark' => 'https://pm.piratenbrandenburg.de/',
            '<abbr title="Kreisverband">KV</abbr> Teltow-Fl&auml;ming' => 'https://tf.piratenbrandenburg.de/',
            '<abbr title="Regionalverband">RV</abbr> Barnim-Uckermark' => 'https://barum.piratenbrandenburg.de/',
            '<abbr title="Regionalverband">RV</abbr> Dahme-Oder-Spree' => 'https://dos.piratenbrandenburg.de/',
            '<abbr title="Regionalverband">RV</abbr> Prignitz-Ruppin' => 'https://pr.piratenbrandenburg.de/',
            '<abbr title="Regionalverband">RV</abbr> S&uuml;dbrandenburg' => 'https://sued.piratenbrandenburg.de/',
        )
    ),
   
    
    'Hamburg' => array(
        'title' => 'Piratenpartei Landesverband Hamburg',
        'url'  => 'http://www.piratenpartei-hamburg.de/',
        'sublist' => array(
            '<abbr title="Bezirksverband">BV</abbr> Bergedorf' => 'http://www.piratenpartei-bergedorf.de/',
            '<abbr title="Bezirksverband">BV</abbr> Harburg' => 'http://www.piraten-harburg.de/',
            '<abbr title="Bezirksverband">BV</abbr> Hamburg-Nord' => 'https://wiki.piratenpartei.de/HH:Bezirksverband_Nord',
            'Eimb&uuml;tteler Piraten (informell)' => 'https://wiki.piratenpartei.de/HH:Eimsb%C3%BCtteler_Piraten',
        )
    ),
    'Hessen' => array(
        'title' => 'Piratenpartei Landesverband Hessen',
        'url'  => 'http://www.piratenpartei-hessen.de/',
        'sublist' => array(
            '<abbr title="Kreisverband">KV</abbr> Bergstra&szlig;e' => 'http://www.piraten-bergstrasse.de/',
            '<abbr title="Kreisverband">KV</abbr> Darmstadt/Darmstadt-Dieburg' => 'http://www.piratenpartei-darmstadt.de/',
            '<abbr title="Kreisverband">KV</abbr> Frankfurt am Main' => 'http://www.piratenpartei-frankfurt.de/',
            '<abbr title="Kreisverband">KV</abbr> Gie&szlig;en' => 'http://www.piraten-giessen.de/',
            '<abbr title="Kreisverband">KV</abbr> Gross-Gerau' => 'http://www.piratenpartei-gross-gerau.de/',
            '<abbr title="Kreisverband">KV</abbr> Hochtaunus' => 'http://www.piratenpartei-hochtaunus.de/',
            '<abbr title="Kreisverband">KV</abbr> Kassel' => 'http://www.piratenpartei-kassel.de/',
            '<abbr title="Kreisverband">KV</abbr> Main-Kinzig' => 'http://www.kinzigpiraten.de/',
            '<abbr title="Kreisverband">KV</abbr> Main-Taunus' => 'http://www.piraten-mtk.de/',
            '<abbr title="Kreisverband">KV</abbr> Marburg-Biedenkopf' => 'https://www.piratenpartei-marburg.de/',
            '<abbr title="Kreisverband">KV</abbr> Odenwald' => 'http://www.piratenpartei-odenwald.de/',                                    
            '<abbr title="Kreisverband">KV</abbr> Offenbach-Land' => 'http://www.kreispiraten-of.de/',
            '<abbr title="Kreisverband">KV</abbr> Rheingau-Taunus' => 'http://www.piratenpartei-rtk.de/',
            '<abbr title="Kreisverband">KV</abbr> Schwalm-Eder' => 'http://www.piraten-sek.de/',
            '<abbr title="Kreisverband">KV</abbr> Waldeck-Frankenberg' => 'http://www.piraten-wa-fkb.de/',
            '<abbr title="Kreisverband">KV</abbr> Wetterau' => 'http://www.piratenpartei-wetterau.de/',
            '<abbr title="Kreisverband">KV</abbr> Wiesbaden' => 'http://www.piratenpartei-wiesbaden.de/',
        )
    ),
     'Mecklenburg-Vorpommern' => array(
        'title' => 'Piratenpartei Landesverband Mecklenburg-Vorpommern',
        'url'  => 'http://www.piratenpartei-mv.de/',
        'sublist' => array(
            '<abbr title="Kreisverband">KV</abbr> Vorpommern-Greiswald' => 'http://piraten-hgw.de/',
            'Rostock' => 'http://rostock.piratenpartei-mv.de/',
            'Neubrandenburg' => 'http://piratenpartei-mv.de/stammtisch-neubrandenburg-0',
            'Schwerin' => 'http://www.schweriner-piraten.de/',
            'Usedom' => 'http://www.piraten-usedom.de/',
           
        )
    ),
   'Niedersachsen' => array(
        'title' => 'Piratenpartei Niedersachsen',
        'url' => 'http://www.piraten-nds.de/',
        'sublist' => array(
            '<abbr title="Stadtverband">SV</abbr> Braunschweig' => 'http://www.piratenpartei-braunschweig.de/',
            '<abbr title="Kreisverband">KV</abbr> Celle' => 'http://www.piraten-celle.de/',    
            '<abbr title="Stadtverband">SV</abbr> Delmenhorst' => 'http://www.piratenpartei-delmenhorst.de/',    
            '<abbr title="Kreisverband">KV</abbr> Diepholz' => 'http://www.piratenpartei-diepholz.de/',    
            '<abbr title="Kreisverband">KV</abbr> Goslar' => 'http://www.piraten-goslar.de/',    
            '<abbr title="Kreisverband">KV</abbr> G&ouml;ttingen' => 'http://www.piratenpartei-goettingen.de/',    
            '<abbr title="Kreisverband">KV</abbr> Grafschaft Bentheim' => 'http://www.grafschafter-piraten.de/',    
            '<abbr title="Kreisverband">KV</abbr> Hameln-Pyrmont' => 'http://www.piraten-hameln.de/',    
            '<abbr title="Regionalverband">RV</abbr> Hannover' =>'http://www.piratenhannover.de/', 
            '<abbr title="Kreisverband">KV</abbr> Helmstedt' => 'https://wiki.piratenpartei.de/NDS:Helmstedt',    
            '<abbr title="Kreisverband">KV</abbr> Hildesheim' => 'http://www.piratenpartei-hildesheim.de/',    
            '<abbr title="Kreisverband">KV</abbr> Niedersachsen-Nordost' => 'http://www.heide-piraten.de/',   
            '<abbr title="Kreisverband">KV</abbr> Nienburg/Weser' => 'http://www.piraten-nienburg.de/',   
            '<abbr title="Kreisverband">KV</abbr> Northeim' => 'http://www.piratenpartei-northeim.de/',   
            '<abbr title="Kreisverband">KV</abbr> Osnabr&uuml;ck' => 'https://www.piraten-osnabrueck.de',   
            '<abbr title="Stadtverband">SV</abbr> Oldenburg' => 'https://www.piratenpartei-oldenburg.de/',   
            '<abbr title="Kreisverband">KV</abbr> Oldenburg Land' => 'http://www.piratenpartei-landkreis-oldenburg.de/',   
            '<abbr title="Kreisverband">KV</abbr> Osterholz' => 'http://www.piraten-ohz.de/', 	    
            '<abbr title="Kreisverband">KV</abbr> Osterode' => 'http://www.piratenpartei-osterode.de/',   
            '<abbr title="Kreisverband">KV</abbr> Peine' => 'http://wiki.piratenpartei.de/NDS:Kreisverband_Peine',   
            '<abbr title="Kreisverband">KV</abbr> Stade' => 'http://www.piraten-stade.de/',   
            '<abbr title="Kreisverband">KV</abbr> Schaumburg' => 'http://www.piraten-schaumburg.de/',            
            '<abbr title="Kreisverband">KV</abbr> Wilhelmshaven' => 'http://www.piraten-whv.de/',   
            '<abbr title="Kreisverband">KV</abbr> Wolfenb&uuml;ttel-Salzgitter' => 'http://www.piratenpartei-wolfenbuettel.de/',   
            '<abbr title="Stadtverband">SV</abbr> Wolfsburg' => 'http://wolfsburg.piratenpartei-nds.de/',   
      
        )
    ),    
    'Nordrhein-Westfalen' => array(
      'title' => 'Piratenpartei Landesverband Nordrhein-Westfalen',
      'url' => 'http://www.piratenpartei-nrw.de/',
      'sublist' => array(   
        
         '<abbr title="Kreisverband">KV</abbr> Bochum' =>'http://piratenbochum.de',
         '<abbr title="Kreisverband">KV</abbr> Bonn' =>'https://piratenpartei-bonn.de/',
         '<abbr title="Kreisverband">KV</abbr> Dortmund' =>'https://wiki.piratenpartei.de/NRW:Dortmund',
         '<abbr title="Kreisverband">KV</abbr> D&uuml;sseldorf' =>'http://piratenpartei-duesseldorf.de/',
         '<abbr title="Kreisverband">KV</abbr> G&uuml;terslohe' =>'http://www.piratenpartei-guetersloh.de/',
         '<abbr title="Kreisverband">KV</abbr> Hagen' =>'https://wiki.piratenpartei.de/NRW:Hagen/Kreisverband',
         '<abbr title="Kreisverband">KV</abbr> Kleve' =>'https://wiki.piratenpartei.de/NRW:Kreis_Kleve',
         '<abbr title="Kreisverband">KV</abbr> K&ouml;ln' =>'https://piratenpartei-koeln.de/',
         '<abbr title="Kreisverband">KV</abbr> Krefeld' =>'https://wiki.piratenpartei.de/NRW:Krefeld/Kreisverband',
         '<abbr title="Kreisverband">KV</abbr> Minden-L&uuml;bbecke' =>'https://wiki.piratenpartei.de/NRW:Kreis_Minden-L%C3%BCbbecke/Kreisverband',
         '<abbr title="Kreisverband">KV</abbr> M&uuml;nster' =>'http://www.piratenpartei-muenster.de/',
         '<abbr title="Kreisverband">KV</abbr> Rhein-Erft' =>'https://piratenpartei-rhein-erft.de/',
         '<abbr title="Kreisverband">KV</abbr> Rhein-Sieg-Kreis' =>'http://www.piratenpartei-rhein-sieg.de/',
         '<abbr title="Kreisverband">KV</abbr> Soest' =>'http://www.piratenpartei-soest.de/',
         '<abbr title="Kreisverband">KV</abbr> Wesel' =>'https://wiki.piratenpartei.de/NRW:Kreis_Wesel',
         '<abbr title="Kreisverband">KV</abbr> Bielefeld' =>'https://wiki.piratenpartei.de/NRW:Bielefeld',
         '<abbr title="Kreisverband">KV</abbr> Lippe' =>'https://wiki.piratenpartei.de/NRW:Kreis_Lippe',
         '<abbr title="Kreisverband">KV</abbr> Herford' =>'https://wiki.piratenpartei.de/NRW:Kreis_Herford',

          )
    ),
      'Rheinland-Pfalz' => array(
        'title' => 'Piratenpartei Landesverband Rheinland-Pfalz',
        'url'  => 'http://www.piraten-rlp.de',
        'sublist' => array(
            '<abbr title="Kreisverband">KV</abbr> Altenkirchen' => 'https://wiki.piratenpartei.de/RP:Kreisverband_Altenkirchen',
            '<abbr title="Kreisverband">KV</abbr> Koblenz' => 'https://wiki.piratenpartei.de/RP:Kreisverband_Koblenz',	    
            '<abbr title="Kreisverband">KV</abbr> Bad Kreuznach' => 'https://wiki.piratenpartei.de/Kreisverband_Bad_Kreuznach',
            '<abbr title="Kreisverband">KV</abbr> Mittelhaardt' => 'http://www.piratenpartei-mittelhaardt.de',
            '<abbr title="Kreisverband">KV</abbr> Rhein-Pfalz' => 'https://wiki.piratenpartei.de/RP:Kreisverband_Rhein-Pfalz',
            '<abbr title="Kreisverband">KV</abbr> Rheinhessen' => 'https://wiki.piratenpartei.de/RP:Kreisverband_Rheinhessen',
            '<abbr title="Kreisverband">KV</abbr> S&uuml;dpfalz' => 'https://wiki.piratenpartei.de/RP:Kreisverband_S%C3%BCdpfalz',
	    '<abbr title="Kreisverband">KV</abbr> Trier/Trier-Saarburg' => 'http://piraten-trier.de',
	    '<abbr title="Kreisverband">KV</abbr> Worms' => 'http://www.piraten-worms.de',
        )
    ),
      'Sachsen-Anhalt' => array(
        'title' => 'Piratenpartei Landesverband Sachsen-Anhalt',
        'url'  => 'http://www.piraten-lsa.de',
        'sublist' => array(
            '<abbr title="Regionalverband">RV</abbr> Altmark' => 'http://www.piraten-altmark.de/',
            '<abbr title="Kreisverband">KV</abbr> B&ouml;rde' => 'http://www.piraten-boerde.de/',
            'Burgenlandkreis / Saalekreis' => 'https://www.piraten-lsa.de/regionen/burgenlandkreis-saalekreis',
            'Halle (Saale)' => 'http://www.piraten-halle.de/',
            'Harz' => 'http://piraten-harz.de/',
            'Magdeburg' => 'http://www.piraten-magdeburg.de/',
            'Mansfeld-S&uuml;dharz' => 'http://www.piraten-msh.de/',
            'Wittenberg' => 'http://piratenpartei-wittenberg.de/',
        )
    ),
      'Thueringen' => array(
        'title' => 'Piratenpartei Landesverband Th&uuml;ringen',
        'url'  => 'http://www.piraten-thueringen.de/',
        'sublist' => array(
            '<abbr title="Kreisverband">KV</abbr> Altenburger Land' => 'http://piraten-altenburger-land.de/',
            '<abbr title="Kreisverband">KV</abbr> Wartburgkreis' => 'http://wartburgpiraten.de/',
            '<abbr title="Kreisverband">KV</abbr> Erfurt' => 'http://www.piraten-erfurt.de/',
            '<abbr title="Kreisverband">KV</abbr> Gera' => 'http://piraten-gera.de/',
            '<abbr title="Kreisverband">KV</abbr> Gotha' => 'http://piraten-gotha.de/',
            '<abbr title="Kreisverband">KV</abbr> Ilm-Kreis' => 'http://piraten-ilmkreis.de/',
            '<abbr title="Kreisverband">KV</abbr> Schmalkalden-Meiningen' => 'http://piraten-schmalkalden-meiningen.de/',
            '<abbr title="Kreisverband">KV</abbr> Jena' => 'https://jena.piraten-thueringen.de/',
        )
    ),
);

/* 
 * Teaser symbols
 */
$defaultplakate_textsymbolliste = array(
    'idee'  => "0021",
    'person'  => "263A",
    'herz'  => "2665",
    'email'  => "2709",
    'at'  => "0040",
    'check'  => "2713",
    'nocheck'  => "2717",
    'telefon'  => "2706",
    'anker'  => "2693",
    'skull'  => "2620",
    'female'  => "2640",
    'male'  => "2642",
    'malefemale'  => "26A5",
    'schreiben'  => "270D",
    'rollstuhl'  => "267F",
    'steuerrad'  => "2638",
    'musiknote'  => "266B",
    'paragraph'  => "00A7",
    'play'  => "25B6",
    'save'  => "2714",
    'spark'  => "2737",
    'star'  => "2605",
    'eins'  => "2460",
    'zwei'  => "2461",    
    'drei'  => "2462", 
    'euro'  => "20AC",
    'dollar'  => "0024",
    'copyright'  => "00A9",       
);



 foreach($defaultplakate_textsymbolliste as $i => $value) {
     $defaultplakate_textsymbolliste_entity[$i] = '&#x'.$value.';';
 } 
 $categories=get_categories(array('orderby' => 'name','order' => 'ASC'));
 foreach($categories as $category) {
     if (!is_wp_error( $category )) {
	$currentcatliste[$category->cat_ID] = $category->name.' ('.$category->count.' '.__('Eintr&auml;ge','piratenkleider').')';
     }
 }        


$setoptions = array(
   'piratenkleider_theme_options'   => array(
       
       'kopfteil'   => array(
           'tabtitle'   => __('Header', 'piratenkleider'),
           'fields' => array(
              'aktiv-linkmenu' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Website Menu', 'piratenkleider' ),
                  'label'   => __( 'Display List of several websites belonging to the pirate party.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-linkmenu'],
              ),
              'aktiv-suche' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Search Form', 'piratenkleider' ),
                  'label'   => __( 'Display search form.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-suche'],
              ),
              'defaultwerbesticker' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Stamps', 'piratenkleider' ),
                  'label'   => __( 'Display stamps with short text or image in header', 'piratenkleider' ),
                  'default' => $defaultoptions['defaultwerbesticker'],
              ),
              'stickerlink1'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Stamp 1', 'piratenkleider' ),
              ),
              'stickerlink1-content' => array(
                  'type'    => 'html',
                  'title'   => __( 'Content', 'piratenkleider' ),
                  'label'   => __( 'Text (Inline-HTML-Tags allowed)', 'piratenkleider' ),
                  'default' => $defaultoptions['stickerlink1-content'],
                  'parent'  => 'stickerlink1',
              ),
              'stickerlink1-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'piratenkleider' ),
                  'label'   => __( 'Target URL for stamp', 'piratenkleider' ),
                  'default' => $defaultoptions['stickerlink1-url'],
                  'parent'  => 'stickerlink1',
              ),
              'stickerlink2'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Stamp 2', 'piratenkleider' ),
              ),
               'stickerlink2-content' => array(
                  'type'    => 'html',
                  'title'   => __( 'Content', 'piratenkleider' ),
                  'label'   => __( 'Text (Inline-HTML-Tags allowed)', 'piratenkleider' ),
                  'default' => $defaultoptions['stickerlink2-content'],
                   'parent'  => 'stickerlink2',
              ),
              'stickerlink2-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'piratenkleider' ),
                  'label'   => __( 'Target URL for stamp', 'piratenkleider' ),
                  'default' => $defaultoptions['stickerlink2-url'],
                  'parent'  => 'stickerlink2',
              ),
              'stickerlink3'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Stamp 3', 'piratenkleider' ),
              ),
               'stickerlink3-content' => array(
                  'type'    => 'html',
                  'title'   => __( 'Content', 'piratenkleider' ),
                  'label'   => __( 'Text (Inline-HTML-Tags allowed)', 'piratenkleider' ),
                  'default' => $defaultoptions['stickerlink3-content'],
                   'parent'  => 'stickerlink3',
              ),
              'stickerlink3-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'piratenkleider' ),
                  'label'   => __( 'Target URL for stamp', 'piratenkleider' ),
                  'default' => $defaultoptions['stickerlink3-url'],
                  'parent'  => 'stickerlink3',
              ),
	      'toplinks'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Website Menu', 'piratenkleider' ),
              ),
	      'toplinkliste'  => array(
		  'type'    => 'urlchecklist',
		  'title'   => __( 'Websites', 'piratenkleider' ),
		  'liste'   => $default_toplink_liste,
		  'parent'  => 'toplinks',
		  'label'   => __( 'Default Links for Websites as Menu in Header. Can be replaced by defining a menu in section "Website Menu"', 'piratenkleider' ),
	      ), 
               
           )
       ),
       'fussteil'   => array(
           'tabtitle'   => __('Footer', 'piratenkleider'),
           'fields' => array(
              'default_footerlink_show' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Pirate Party Links', 'piratenkleider' ),
                  'label'   => __( 'Display a list for several Pirate Party sections worldwide or be some countries.', 'piratenkleider' ),
                  'default' => $defaultoptions['default_footerlink_show'],
              ),
              'default_footerlink_key' => array(
                  'type'    => 'select',
                  'title'   => __( 'Section', 'piratenkleider' ),
                  'label'   => __( 'Chose section for display', 'piratenkleider' ),
                  'default' => $defaultoptions['default_footerlink_key'],
                  'liste'   => $default_footerlink_liste,
              ),
          )
       ),
      'startseite'   => array(
           'tabtitle'   => __('Start page', 'piratenkleider'),
           'fields' => array(
                            
              'aktiv-startseite-kategorien' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Categories', 'piratenkleider' ),
                  'label'   => __( 'Display categories.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-startseite-kategorien'],
              ),
              'aktiv-startseite-tags' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Tags', 'piratenkleider' ),
                  'label'   => __( 'Display tagcloud.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-startseite-tags'],
              ),
            
              'artikelstream'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Entry filter', 'piratenkleider' ),                      
              ),     
               
               'artikelstream-type' => array(
                  'type'    => 'select',
                  'title'   => __( 'Set main entry list', 'piratenkleider' ),
                  'label'   => __( 'Chose which entries are displayed on the start page.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-type'],
		  'liste'   =>  array(
                    0 => __("All entries (from every category) and bookmarks together","piratenkleider"), 
                    1 => __("Only entries (from every category)","piratenkleider"), 	    
                    2 => __("Entries, except those from defined categories","piratenkleider"), 
                    ), 
                  'parent'  => 'artikelstream'
              ), 	
               
              'artikelstream-exclusive-catliste' => array(
                  'type'    => 'multiselectlist',
                  'title'   => __( 'Categories', 'piratenkleider' ),
                  'label'   => __( 'Chose categories, which entries should not appear in main entry list on start page.', 'piratenkleider' ),
                  'liste'   => $currentcatliste,
                  'default' => $defaultoptions['artikelstream-exclusive-catliste'],
                  'parent'  => 'artikelstream'
              ),  
               'artikelstream-maxnum-main' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number Entries', 'piratenkleider' ),
                  'label'   => __( 'Number of entries in main entry list.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-maxnum-main'],
                  'parent'  => 'artikelstream'
              ), 
               'artikelstream-nextnum-main' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number elements for entries list', 'piratenkleider' ),
                  'label'   => __( 'Number of link elements for a list for further entries.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-nextnum-main'],
                  'parent'  => 'artikelstream'
              ), 
               'artikelstream-numfullwidth-main' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number Entries in big sized view', 'piratenkleider' ),
                  'label'   => __( 'How many entries will be displayed in 100% width of content size.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-numfullwidth-main'],
                  'parent'  => 'artikelstream'
              ),
             'artikelstream-title-main' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title main entry list', 'piratenkleider' ),
                  'label'   => __( 'Sets a title above the main entry list.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-title-main'],
                   'parent'  => 'artikelstream',
              ), 
              'artikelstream-title-maincontinuelist' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title more entries', 'piratenkleider' ),
                  'label'   => __( 'Sets a title for an additional entry list.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-title-maincontinuelist'],
                  'parent'  => 'artikelstream',
              ),                
               
              'artikelstream-show-second' => array(
                  'type'    => 'select',
                  'title'   => __( 'Display second entry list', 'piratenkleider' ),
                  'label'   => __( 'Activates a second entry list, made by those article categories which are not part of the main article list.', 'piratenkleider' ),
                  'liste'   => array("0" => "Hide", "1" => "Show"),
                  'default' => $defaultoptions['artikelstream-show-second'],
                   'parent'  => 'artikelstream'
              ), 
               
              'artikelstream-maxnum-second' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number of elements in second entry list', 'piratenkleider' ),
                  'label'   => __( 'Sets the number of entries of the second entry list.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-maxnum-second'],
                  'parent'  => 'artikelstream'
              ), 
             'artikelstream-nextnum-second' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number more entries', 'piratenkleider' ),
                  'label'   => __( 'Number of link elements for a list for further entries.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-nextnum-second'],
                  'parent'  => 'artikelstream'
              ), 
                              
               'artikelstream-numfullwidth-second' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number Entries in big sized view', 'piratenkleider' ),
                  'label'   => __( 'How many entries will be displayed in 100% width of content size. (Notice: Depends on design!)', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-numfullwidth-second'],
                  'parent'  => 'artikelstream'
              ), 
            'artikelstream-title-second' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title second entry list', 'piratenkleider' ),
                  'label'   => __( 'Sets a title above the second entry list.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-title-second'],
                   'parent'  => 'artikelstream',
              ), 
              'artikelstream-title-secondcontinuelist' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title more entries', 'piratenkleider' ),
                  'label'   => __( 'Sets a title for an additional entry list.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-title-secondcontinuelist'],
                  'parent'  => 'artikelstream',
              ),                
              
               
              'artikelstream-show-linktipps' => array(
                  'type'    => 'select',
                  'title'   => __( 'Bookmarks', 'piratenkleider' ),
                  'label'   => __( 'Display a bookmark section after main entry list, forming an own entry list. This list is positioned before the second entry list.', 'piratenkleider' ),
                  'liste'   => array("0" => "Hide", "1" => "Show"),
                  'default' => $defaultoptions['artikelstream-show-linktipps'],
                   'parent'  => 'artikelstream'
              ), 
              'artikelstream-maxnum-linktipps' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number bookmarks', 'piratenkleider' ),
                  'label'   => __( 'Number of bookmarks to display.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-maxnum-linktipps'],
                  'parent'  => 'artikelstream'
              ), 
             'artikelstream-nextnum-linktipps' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number bookmark list', 'piratenkleider' ),
                  'label'   => __( 'Number for additional bookmarks as a list.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-nextnum-linktipps'],
                  'parent'  => 'artikelstream'
              ), 
             'artikelstream-title-linktipps' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title bookmark section', 'piratenkleider' ),
                  'label'   => __( 'Sets a title for bookmark section.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-title-linktipps'],
                   'parent'  => 'artikelstream',
              ), 
              'artikelstream-title-linktippcontinuelist' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title additional bookmarks', 'piratenkleider' ),
                  'label'   => __( 'Subtitle for list of additional bookmarks.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-title-linktippcontinuelist'],
                  'parent'  => 'artikelstream',
              ), 
               

 
            
            'auszuege'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Layout for entry excerpts', 'piratenkleider' ),                      
              ),     
                              
             'teaser_maxlength' => array(
                  'type'    => 'number',
                  'title'   => __( 'Length', 'piratenkleider' ),
                  'label'   => __( 'Maximum numbers of chars in excerpt.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser_maxlength'],
                 'parent'  => 'auszuege'
              ),                        
              'teaser-titleup' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Title up', 'piratenkleider' ),
                  'label'   => __( 'Title above thumbnail, date and text.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-titleup'],
                  'parent'  => 'auszuege'
              ), 
              'teaser-datebox' => array(
                  'type'    => 'select',
                  'title'   => __( 'Symbolbild/Datumsbox', 'piratenkleider' ),
                  'label'   => __( 'Links des Textauszuges das Datum, das Artikelbild, ein Bild des Artikels oder ein verlinktes Video anzeigen; abh&auml;ngig vom Inhalt des Artikels.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-datebox'],
		  'liste'   =>  array(
				0 => __("Datumsbox anzeigen","piratenkleider"), 
				1 => __("Reihenfolge: Artikelbild, erstes Bild, erstes Video oder Ersatzbild zeigen","piratenkleider"), 	    
				2 => __("Reihenfolge: Erstes Bild, Artikelbild, erstes Video oder Ersatzbild zeigen","piratenkleider"), 
				3 => __("Reihenfolge: Erstes Video, Artikelbild, erstes Bild oder Ersatzbild zeigen","piratenkleider"), 
				4 => __("Reihenfolge: Erstes Video, erstes Bild, Artikelbild oder Ersatzbild zeigen","piratenkleider"), 
				5 => __("Nichts anzeigen","piratenkleider")), 
                  'parent'  => 'auszuege'
              ), 	              
	      'teaser-floating' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Flie&szlig;ender Text', 'piratenkleider' ),
                  'label'   => __( 'Text umflie&szlig;t das Bild', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-floating'],
                  'parent'  => 'auszuege'
              ),  
               'teaser-dateline' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Datumszeile', 'piratenkleider' ),
                  'label'   => __( 'Datumszeile vor dem Text, falls keine Datumsbox angezeigt wird', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-dateline'],
                  'parent'  => 'auszuege'
              ), 
               
                'teaser-maxlength-halfwidth' => array(
                  'type'    => 'number',
                  'title'   => __( 'L&auml;nge des Teasertextes', 'piratenkleider' ),
                  'label'   => __( 'Maximale Textl&auml;nge f&uuml;r Artikelausz&uuml;ge (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-maxlength-halfwidth'],
		'parent'  => 'auszuege'
              ),                 
             'teaser-titleup-halfwidth' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Titel oben', 'piratenkleider' ),
                  'label'   => __( 'Titel &uuml;ber Logo/Datumsbox und Text (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-titleup-halfwidth'],
                  'parent'  => 'auszuege'
              ), 
              'teaser-datebox-halfwidth' => array(
                  'type'    => 'select',
                  'title'   => __( 'Symbolbild/Datumsbox', 'piratenkleider' ),
                  'label'   => __( 'Links des Textauszuges das Datum, das Artikelbild, ein Bild des Artikels oder ein verlinktes Video anzeigen; abh&auml;ngig vom Inhalt des Artikels. (Bei Beitr&auml;gen &uuml;ber halbe Breite)', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-datebox-halfwidth'],
		  'liste'   =>  array(
				0 => __("Datumsbox anzeigen","piratenkleider"), 
				1 => __("Reihenfolge: Artikelbild, erstes Bild, erstes Video oder Ersatzbild zeigen","piratenkleider"), 	    
				2 => __("Reihenfolge: Erstes Bild, Artikelbild, erstes Video oder Ersatzbild zeigen","piratenkleider"), 
				3 => __("Reihenfolge: Erstes Video, Artikelbild, erstes Bild oder Ersatzbild zeigen","piratenkleider"), 
				4 => __("Reihenfolge: Erstes Video, erstes Bild, Artikelbild oder Ersatzbild zeigen","piratenkleider"), 
				5 => __("Nichts anzeigen","piratenkleider")), 

                  'parent'  => 'auszuege'		  
              ), 
	      'teaser-floating-halfwidth' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Flie&szlig;ender Text', 'piratenkleider' ),
                  'label'   => __( 'Text umflie&szlig;t das Bild (Bei Beitr&auml;gen &uuml;ber halbe Breite)', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-floating-halfwidth'],
                  'parent'  => 'auszuege'
              ), 	       
	       
               'teaser-dateline-halfwidth' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Datumszeile', 'piratenkleider' ),
                  'label'   => __( 'Datumszeile vor dem Text, falls keine Datumsbox angezeigt wird (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-dateline-halfwidth'],
                  'parent'  => 'auszuege'
              ), 
               
                           
               
              'sliderpars'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Slider', 'piratenkleider' ),                      
              ),
              'slider-aktiv' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Aktivieren', 'piratenkleider' ),
                  'label'   => __( 'Slider im Teaserbereich auf der Startseite aktivieren. <br>Die Auswahl der Plakatbilder kann unter den Defaultbildern angepasst werden.', 'piratenkleider' ),
                  'default' => $defaultoptions['slider-aktiv'],
                  'parent'  => 'sliderpars'
              ),

            'teaser-subtitle' => array(
                  'type'    => 'text',
                  'title'   => __( 'Bezeichnender Titel f&uuml;r Teaser', 'piratenkleider' ),
                  'label'   => __( 'Dieser Text wird oberhalb der Titel angezeigt.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-subtitle'],
                  'parent'  => 'sliderpars'
              ),  
             'teaser-title-maxlength' => array(
                  'type'    => 'number',
                  'title'   => __( 'Textl&auml;nge', 'piratenkleider' ),
                  'label'   => __( 'Maximale Textl&auml;nge des Titels im Teaser.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-title-maxlength'],
                   'parent'  => 'sliderpars'
              ),   
             'teaser-title-words' => array(
                  'type'    => 'number',
                  'title'   => __( 'Wortzahl', 'piratenkleider' ),
                  'label'   => __( 'Zahl der Worte im Teaser. Die maximale Textl&auml;nge begrenzt diesen Wert jedoch.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-title-words'],
                   'parent'  => 'sliderpars'
              ),
                              
               
               
              'slider-catid' => array(
                  'type'    => 'select',
                  'title'   => __( 'Kategorie', 'piratenkleider' ),
                  'label'   => __( 'Aus welcher Artikelkategorie sollen die Slider genommen werden.', 'piratenkleider' ),
                  'liste'   => $currentcatliste,
                  'default' => $defaultoptions['slider-catid'],
                   'parent'  => 'sliderpars'
              ), 
              'slider-numberarticle' => array(
                  'type'    => 'select',
                  'title'   => __( 'Maximale Anzahl der Artikel', 'piratenkleider' ),
                  'label'   => __( 'Wie viele Slides sollen maximal gezeigt werden.', 'piratenkleider' ),
                  'liste'   => array(2 => 2,3 => 3, 4 => 4, 5 => 5, 6 => 6),
                  'default' => $defaultoptions['slider-numberarticle'],
                   'parent'  => 'sliderpars'
              ), 
              'slider-animationType' => array(
                  'type'    => 'select',
                  'title'   => __( 'Animationstyp', 'piratenkleider' ),
                  'label'   => __( 'Wie soll der Slidewechsel optisch aussehen.', 'piratenkleider' ),
                  'liste'   => array("fade" => "fade", "slide" => "slide"),
                  'default' => $defaultoptions['slider-animationType'],
                   'parent'  => 'sliderpars'
              ), 
                 
              'slider-Direction' => array(
                  'type'    => 'select',
                  'title'   => __( 'Richtung', 'piratenkleider' ),
                  'label'   => __( 'Von wo sollen Bilder erscheinen.', 'piratenkleider' ),
                  'liste'   => array("horizontal" => "horizontal" , "vertical" => "vertical"),
                  'default' => $defaultoptions['slider-Direction'],
                   'parent'  => 'sliderpars'
              ), 
              'slider-slideshowSpeed' => array(
                  'type'    => 'number',
                  'title'   => __( 'Dauer Bildwechsel', 'piratenkleider' ),
                  'label'   => __( 'Geschwindigkeit des Bildwechsels in Milisekunden.', 'piratenkleider' ),
                  'default' => $defaultoptions['slider-slideshowSpeed'],
                   'parent'  => 'sliderpars'
              ), 
              'slider-animationDuration' => array(
                  'type'    => 'number',
                  'title'   => __( 'Animationsdauer', 'piratenkleider' ),
                  'label'   => __( 'Geschwindigkeit der Animation/Fading beim Bild&uuml;bergang in Milisekunden.', 'piratenkleider' ),
                  'default' => $defaultoptions['slider-animationDuration'],
                   'parent'  => 'sliderpars'
              ),  
             'teaser-type' => array(
                  'type'    => 'select',
                  'title'   => __( 'Teaser-Darstellung', 'piratenkleider' ),
                  'label'   => __( 'Teaser mit gro&szlig;em Bild &uuml;ber gesamte Breite oder kleinem Thumbnail.', 'piratenkleider' ),
                  'liste'   => array("big" => "big", "small" => "small"),
                  'default' => $defaultoptions['teaser-type'],
                   'parent'  => 'sliderpars'
              ), 
               'teaser-showcredits' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Bildbeschreibung/Credits', 'piratenkleider' ),
                  'label'   => __( 'Innerhalb des Sliders auch die Bildbeschreibung bzw. Copyrightinfos anzeigen, wenn vorhanden.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-showcredits'],
                  'parent'  => 'sliderpars'
              ),

              'slider-defaultbildsrc' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Defaultbild', 'piratenkleider' ),
                  'label'   => __( 'Ersatz-Sliderbild f&uuml;r Seiten ohne eigenes Artikelbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['slider-defaultbildsrc'],		                     
		  'parent'  => 'sliderpars'
              ),

               
               
          )
       ), 
       'contentbereich'   => array(
           'tabtitle'   => __('Seiten &amp; Artikel', 'piratenkleider'),
           'fields' => array(
	          
              'spezial'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Spezielle Eigenschaften', 'piratenkleider' ),
              ),

              
              'post_disclaimer' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'Disclaimer f&uuml;r (Gast-)Artikel', 'piratenkleider' ),
                  'label'   => __( 'Definiere ein Text als Disclaimer, der bei Artikeln gezeigt werden kann. ', 'piratenkleider' ),
                  'default' => $defaultoptions['disclaimer_post'],
		  'parent'  => 'spezial'
              ),    
	       
	       
	      'category'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Indexseiten (Kategorien, Tags und andere)', 'piratenkleider' ),
              ),
	       
	      'category-teaser'   => array(
                  'type'    => 'bool',
                  'title'   => __( 'Slider aktivieren', 'piratenkleider' ),
                  'label'   => __( 'Kategorieseiten mit Slider wie auf Startseite darstellen', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser'],
		  'parent'  => 'category'
              ),   
	       
	       
	    'category-num-article-fullwidth' => array(
                  'type'    => 'number',
                  'title'   => __( 'Beitr&auml;ge &uuml;ber ganze Breite', 'piratenkleider' ),
                  'label'   => __( 'Zahl der Beitr&auml;ge, die &uuml;ber die gesamte Inhaltsbreite gehen.', 'piratenkleider' ),
                  'default' => $defaultoptions['category-num-article-fullwidth'],
		'parent'  => 'category'
              ),
              'category-num-article-halfwidth' => array(
                  'type'    => 'select',
                  'title'   => __( 'Beitr&auml;ge &uuml;ber halbe Breite', 'piratenkleider' ),
                  'label'   => __( 'Zahl der Beitr&auml;ge, die in Spalten mit je zwei Beitr&auml;gen nebeneinander, angezeigt werden.', 'piratenkleider' ),
                  'liste'   => array(0 => 0, 2 => 2, 4 => 4, 6 => 6, 8 => 8, 10=>10, 12=>12, 14=>14, 16=>16),
                  'default' => $defaultoptions['category-num-article-halfwidth'],
		  'parent'  => 'category'
              ),    
	    'category-teaser-maxlength' => array(
                  'type'    => 'number',
                  'title'   => __( 'L&auml;nge des Teasertextes (Artikelauszug)', 'piratenkleider' ),
                  'label'   => __( 'Maximale Textl&auml;nge f&uuml;r Artikelausz&uuml;ge', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-maxlength'],
		'parent'  => 'category'
              ),                 
             'category-teaser-titleup' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Titel oben', 'piratenkleider' ),
                  'label'   => __( 'Titel &uuml;ber Logo/Datumsbox und Text', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-titleup'],
                  'parent'  => 'category'
              ), 
              'category-teaser-datebox' => array(
                  'type'    => 'select',
                  'title'   => __( 'Symbolbild/Datumsbox', 'piratenkleider' ),
                  'label'   => __( 'Links des Textauszuges das Datum, das Artikelbild, ein Bild des Artikels oder ein verlinktes Video anzeigen; abh&auml;ngig vom Inhalt des Artikels.', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-datebox'],
		  'liste'   =>  array(
				0 => __("Datumsbox anzeigen","piratenkleider"), 
				1 => __("Reihenfolge: Artikelbild, erstes Bild, erstes Video oder Ersatzbild zeigen","piratenkleider"), 	    
				2 => __("Reihenfolge: Erstes Bild, Artikelbild, erstes Video oder Ersatzbild zeigen","piratenkleider"), 
				3 => __("Reihenfolge: Erstes Video, Artikelbild, erstes Bild oder Ersatzbild zeigen","piratenkleider"), 
				4 => __("Reihenfolge: Erstes Video, erstes Bild, Artikelbild oder Ersatzbild zeigen","piratenkleider"), 
				5 => __("Nichts anzeigen","piratenkleider")), 

                  'parent'  => 'category'
              ), 
	      'category-teaser-floating' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Flie&szlig;ender Text', 'piratenkleider' ),
                  'label'   => __( 'Text umflie&szlig;t das Bild', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-floating'],
                  'parent'  => 'category'
              ), 
	       
               'category-teaser-dateline' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Datumszeile', 'piratenkleider' ),
                  'label'   => __( 'Datumszeile vor dem Text, falls keine Datumsbox angezeigt wird', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-dateline'],
                  'parent'  => 'category'
              ), 
               
                'category-teaser-maxlength-halfwidth' => array(
                  'type'    => 'number',
                  'title'   => __( 'L&auml;nge des Teasertextes', 'piratenkleider' ),
                  'label'   => __( 'Maximale Textl&auml;nge f&uuml;r Artikelausz&uuml;ge (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-maxlength-halfwidth'],
		'parent'  => 'category'
              ),                 
             'category-teaser-titleup-halfwidth' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Titel oben', 'piratenkleider' ),
                  'label'   => __( 'Titel &uuml;ber Logo/Datumsbox und Text (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-titleup-halfwidth'],
                  'parent'  => 'category'
              ), 
              'category-teaser-datebox-halfwidth' => array(
                  'type'    => 'select',
                  'title'   => __( 'Symbolbild/Datumsbox', 'piratenkleider' ),
                  'label'   => __( 'Links des Textauszuges das Datum, das Artikelbild, ein Bild des Artikels oder ein verlinktes Video anzeigen; abh&auml;ngig vom Inhalt des Artikels. (Bei Beitr&auml;gen &uuml;ber halbe Breite)', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-datebox-halfwidth'],
		  'liste'   =>  array(
				0 => __("Datumsbox anzeigen","piratenkleider"), 
				1 => __("Reihenfolge: Artikelbild, erstes Bild, erstes Video oder Ersatzbild zeigen","piratenkleider"), 	    
				2 => __("Reihenfolge: Erstes Bild, Artikelbild, erstes Video oder Ersatzbild zeigen","piratenkleider"), 
				3 => __("Reihenfolge: Erstes Video, Artikelbild, erstes Bild oder Ersatzbild zeigen","piratenkleider"), 
				4 => __("Reihenfolge: Erstes Video, erstes Bild, Artikelbild oder Ersatzbild zeigen","piratenkleider"), 
				5 => __("Nichts anzeigen","piratenkleider")), 

                  'parent'  => 'category'
              ), 
	       'category-teaser-floating-halfwidth' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Flie&szlig;ender Text', 'piratenkleider' ),
                  'label'   => __( 'Text umflie&szlig;t das Bild (Bei Beitr&auml;gen &uuml;ber halbe Breite)', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-floating-halfwidth'],
                  'parent'  => 'category'
              ), 
               'category-teaser-dateline-halfwidth' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Datumszeile', 'piratenkleider' ),
                  'label'   => __( 'Datumszeile vor dem Text, falls keine Datumsbox angezeigt wird (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-dateline-halfwidth'],
                  'parent'  => 'category'
              ), 
	      'continuelink'   => array(
                  'type'    => 'select',
                  'title'   => __( 'Weiterlesen-Link', 'piratenkleider' ),
                  'label'   => __( 'Anzeige des Links zum Weiterlesen immer anzeigen oder nur dann, wenn der Textauszug auf einer Indexseite gek&uuml;rzt werden muss.', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-datebox-halfwidth'],
		  'liste'   =>  array(
				0 => __("Nur wenn Artikel l&auml;nger ist als Textauszug","piratenkleider"), 
				1 => __("Immer anzeigen","piratenkleider"), 	    
			        2 => __("Nie anzeigen","piratenkleider"), 	    
				), 
                  'parent'  => 'category'
		),  
               

               
               
               
	       
	       
	      'darstellungseiten'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Thumbnails and default images', 'piratenkleider' ),
              ),
	       
	      'aktiv-defaultseitenbild' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Defaultbilder f&uuml;r Seiten', 'piratenkleider' ),
                  'label'   => __( 'Bilder f&uuml;r Seiten erzwingen, die von sich aus kein Artikelbild definiert haben. Wenn kein Artikelbild vorhanden ist, wird ein Defaultbild gezeigt.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-defaultseitenbild'],
		  'parent'  => 'darstellungseiten'
              ),	      
	      'seitenbild-size' => array(
                  'type'    => 'select',
                  'title'   => __( 'Gr&ouml;&szlig;e', 'piratenkleider' ),
                  'label'   => __( 'Das Seitenbild kann in einem schmalen (150px) oder gro&szlig;en (240px) Ausschnitt dargestellt werden. ', 'piratenkleider' ),
                  'default' => $defaultoptions['seitenbild-size'],		                     
		  'liste'   => array(0 => "klein (150px)", 1 => "gro&szlig; (240px)"),
		  'parent'  => 'darstellungseiten'
              ),	
	      'seiten-defaultbildsrc' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Defaultbild', 'piratenkleider' ),
                  'label'   => __( 'Ersatzbild f&uuml;r Seiten ohne eigenes Artikelbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild'],		                     
		  'parent'  => 'darstellungseiten',
		   'maxwidth' => 705,
		    'maxheight' => 240,
              ),	
	
	
	      'darstellungartikel'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Artikelbilder', 'piratenkleider' ),
              ),
	       
	      'aktiv-artikelbild' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Defaultbilder f&uuml;r Artikel', 'piratenkleider' ),
                  'label'   => __( 'Bilder f&uuml;r Artikel erzwingen, die von sich aus kein Artikelbild definiert haben. Wenn kein Artikelbild vorhanden ist, wird ein Defaultbild gezeigt.', 'piratenkleider' ),		  
                  'default' => $defaultoptions['aktiv-artikelbild'],
		  'parent'  => 'darstellungartikel'
              ),
	      'artikelbild-size' => array(
                  'type'    => 'select',
                  'title'   => __( 'Gr&ouml;&szlig;e', 'piratenkleider' ),
                  'label'   => __( 'Das Artikelbild kann in einem schmalen (150px) oder gro&szlig;en (240px) Ausschnitt dargestellt werden. ', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelbild-size'],		                     
		  'liste'   => array(0 => "small (150px)", 1 => "big (240px)"),
		  'parent'  => 'darstellungartikel'
              ),	

	       'artikelbild-src'  => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Bild', 'piratenkleider' ),
                  'label'   => __( 'Ersatzbild f&uuml;r Artikel ohne eigenes Bild.', 'piratenkleider' ),
                  'default' =>  $defaultoptions['src-default-artikel-symbolbild'],
                  'parent'  => 'darstellungartikel',
		    'maxwidth' => 705,
		    'maxheight' => 240,
              ),
	       
	       
	       'darstellungindexseiten'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Indexseiten', 'piratenkleider' ),
              ),
              'aktiv-platzhalterbilder-indexseiten' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Platzhalterbilder', 'piratenkleider' ),
                  'label'   => __( 'Platzhalterbilder bei Indexseiten zu Kategorien, Tags, Suche und Archiv anzeigen.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-platzhalterbilder-indexseiten'],
		  'parent'  => 'darstellungindexseiten'
              ),
	      'indexseitenbild-size' => array(
                  'type'    => 'select',
                  'title'   => __( 'Gr&ouml;&szlig;e', 'piratenkleider' ),
                  'label'   => __( 'Das Platzhalterbild kann in einem schmalen (150px) oder gro&szlig;en (240px) Ausschnitt dargestellt werden. ', 'piratenkleider' ),
                  'default' => $defaultoptions['indexseitenbild-size'],		                     
		  'liste'   => array(0 => "small (150px)", 1 => "big (240px)"),
		  'parent'  => 'darstellungindexseiten'
              ),
	      	       
	     'src-default-symbolbild-404' => array(
		    'type'    => 'imageurl',
		    'title'   => __( 'Symbolbild f&uuml;r 404-Seite', 'piratenkleider' ),
		    'label'   => __( 'URL f&uuml;r ein eigenes 404-Seitenbild.', 'piratenkleider' ),
		    'default' => $defaultoptions['src-default-symbolbild-404'],
		    'parent'  => 'darstellungindexseiten',
		    'maxwidth' => 705,
		    'maxheight' => 240,
              ),
	     'src-default-symbolbild-category' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Symbolbild f&uuml;r Kategorie-Seite', 'piratenkleider' ),
                  'label'   => __( 'URL f&uuml;r ein eigenes Kategorien-Seitenbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-category'],
                  'parent'  => 'darstellungindexseiten',
		  'maxwidth' => 705,
		    'maxheight' => 240,
              ), 
	      'src-default-symbolbild-tag' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Symbolbild f&uuml;r Tag-Seite', 'piratenkleider' ),
                  'label'   => __( 'URL f&uuml;r ein eigenes Tag-Seitenbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-tag'],
                  'parent'  => 'darstellungindexseiten',
		   'maxwidth' => 705,
		    'maxheight' => 240,
              ), 
	       'src-default-symbolbild-author' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Symbolbild f&uuml;r Autoren-Seite', 'piratenkleider' ),
                  'label'   => __( 'URL f&uuml;r ein eigenes Autoren-Seitenbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-author'],
                  'parent'  => 'darstellungindexseiten',
		    'maxwidth' => 705,
		    'maxheight' => 240,
              ), 
	       'src-default-symbolbild-archive' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Symbolbild f&uuml;r Archiv-Seite', 'piratenkleider' ),
                  'label'   => __( 'URL f&uuml;r ein eigenes Archiv-Seitenbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-archive'],
                  'parent'  => 'darstellungindexseiten',
		    'maxwidth' => 705,
		    'maxheight' => 240,
              ), 
	        'src-default-symbolbild-search' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Symbolbild f&uuml;r Suchergebnis-Seite', 'piratenkleider' ),
                  'label'   => __( 'URL f&uuml;r ein eigenes Suchergebnis-Seitenbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-search'],
                  'parent'  => 'darstellungindexseiten',
		     'maxwidth' => 705,
		    'maxheight' => 240,
              ), 
	       'src-default-symbolbild-person' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Symbolbild f&uuml;r Personen-Seite', 'piratenkleider' ),
                  'label'   => __( 'URL f&uuml;r ein eigenes Personen-Seitenbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-person'],
                  'parent'  => 'darstellungindexseiten',
		     'maxwidth' => 705,
		    'maxheight' => 240,
              ), 
	       
	       
	      'src-default-symbolbild' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Symbolbild f&uuml;r Template-Seiten', 'piratenkleider' ),
                  'label'   => __( 'URL f&uuml;r ein Template-Seitenbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild'],
                  'parent'  => 'darstellungindexseiten',
		   'maxwidth' => 705,
		    'maxheight' => 240,
              ),  

	       
	      'kommentare'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Kommentare', 'piratenkleider' ),
              ),
	     'aktiv-commentreplylink' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Antwortlinks', 'piratenkleider' ),
                  'label'   => __( 'Bei der Anzeige von Kommentaren wird unter diesen ein eigener Kommentarlink eingebaut, der das Antworten auf den Kommentar erlaubt. Dies kann zu einer Nutzung des Kommentarbereiches wie bei einem Forum f&uuml;hren, bei dem es zuletzt aber nicht mehr um den eigentlichen Beitrag geht.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-commentreplylink'],	
		 'parent'   => 'kommentare'
              ),
	      'aktiv-commentsonpages' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Seiten', 'piratenkleider' ),
                  'label'   => __( 'Kommentare auch auf Seiten (und nicht nur Artikeln) zulassen.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-commentsonpages'],	
		 'parent'   => 'kommentare'
              ),
              'comments_disclaimer'  => array(
                  'type'    => 'html',
                  'title'   => __( 'Disclaimer', 'piratenkleider' ),
                  'label'   => __( 'Kurzer Hinweistext (ggf. Link) zu Regeln f&uuml;r Kommentare.', 'piratenkleider' ),
                  'default' => $defaultoptions['comments_disclaimer'],
		  'parent'   => 'kommentare'
              ),               
               'zeige_commentbubble_null' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Kommentarbubble', 'piratenkleider' ),
                  'label'   => __( 'Zeige den Kommentarbubble auch dann, wenn noch keine Kommentare abgegeben wurden', 'piratenkleider' ),
                  'default' => $defaultoptions['zeige_commentbubble_null'],
		   'parent'   => 'kommentare'
              ),            
	       
          )
       ),
       
       'sidebar'   => array(
           'tabtitle'   => __('Sidebar', 'piratenkleider'),
           'fields' => array(
              'seitenmenu'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Seitenmenu', 'piratenkleider' ),
              ),
              'seitenmenu_mode' => array(
                  'type'    => 'select',
                  'title'   => __( 'Gliederung', 'piratenkleider' ),
                  'label'   => __( 'Das Men&uuml; kann nach Seiten-Hierarchie oder Men&uuml;-Hierarchie gegliedert werden.', 'piratenkleider' ),
                  'default' => $defaultoptions['seitenmenu_mode'],
				  'liste'   => array(0 => "Men&uuml;s", 1 => "Seiten"),
                  'parent'  => 'seitenmenu',
              ),
              'zeige_subpagesonly' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Hierachische Struktur', 'piratenkleider' ),
                  'label'   => __( 'Bei der Anzeige von Seiten rechts in der Sidebar nur das aktuelle Submenu zeigen. Bei Deaktivierung wird das vollst&auml;ndige Men&uuml; gezeigt. Dies ist f&uuml;r Webauftritte mit vielen Seiten nicht geeignet.', 'piratenkleider' ),
                  'default' => $defaultoptions['zeige_subpagesonly'],
                  'parent'  => 'seitenmenu',
              ),
              'zeige_sidebarpagemenu' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Offene Struktur', 'piratenkleider' ),
                  'label'   => __( 'Men&uuml; mit allen Seiten in der Sidebar anzeigen, auch wenn diese nicht dem Hauptmenu zugeordnet und gegliedert sind', 'piratenkleider' ),
                  'default' => $defaultoptions['zeige_sidebarpagemenu'],
                  'parent'  => 'seitenmenu',
              ),
              
              'newsletter' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Newsletter', 'piratenkleider' ),
                  'label'   => __( 'Eingabemaske f&uuml;r den Eintrag in einen Newsletter (Mailingliste) anzeigen', 'piratenkleider' ),
                  'default' => $defaultoptions['newsletter'],
              ),
              'plakate'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Werbeplakate', 'piratenkleider' ),
              ),
              'slider-defaultwerbeplakate' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Plakate aktivieren', 'piratenkleider' ),
                  'label'   => __( 'Slider der Werbeplakate (rechte Sidebar-Spalte) werden angezeigt.<br>Die Auswahl der Plakatbilder kann unter den Defaultbildern angepasst werden', 'piratenkleider' ),
                  'default' => $defaultoptions['slider-defaultwerbeplakate'],
                   'parent'  => 'plakate',
              ),	   
	       
	      'plakate-src' => array(
                  'type'    => 'bilddirchecklist',
                  'title'   => __( 'Plakatauswahl', 'piratenkleider' ),
                  'label'   => __( 'Diese Bilder werden in der Sidebar rechts gezeigt, sofern dieses &uuml;ber die Optionen (vgl. Slider) auch eingeschaltet ist.', 'piratenkleider' ),
                  'default' => $defaultoptions['dir-default-plakate'],		                     
		  'parent'  => 'plakate'
              ), 
	       
              'plakate-title' => array(
                  'type'    => 'text',
                  'title'   => __( 'Optionaler Ersatztitel', 'piratenkleider' ),
                  'label'   => __( 'Dieser Titel wird als Alternativ-Text verwendet.', 'piratenkleider' ),
                  'default' => $defaultoptions['plakate-title'],
                  'parent'  => 'plakate',
              ),   
              'plakate-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'Optionale URL', 'piratenkleider' ),
                  'label'   => __( 'Optionale Webadresse zur Verlinkung der Plakate mit einer Informationsseite.', 'piratenkleider' ),
                  'default' => $defaultoptions['plakate-url'],
                  'parent'  => 'plakate',
              ),   
              'plakate-altadressen' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'Eigene Plakatbilder', 'piratenkleider' ),
                  'label'   => __('Adressen alternativer Plakatbilder.<br>', 'piratenkleider').
                  __( 'Angabe der URLs inkl. http:// zum Bild. Wenn es mehrere sind, werden die einzelnen Adressen durch Zeilenumbruch getrennt.', 'piratenkleider' ).
                  __('Sollen die Bilder zus&auml;tzlich mit einem eigenen Titel und einer Webadresse versehen werden, werden diese Angaben durch das Zeichen "|" in folgender Reihenfolge getrennt: <code>Bild-URL|Titel|Webadresse</code>', 'piratenkleider' ).
                  __( 'Beispiel:<br>', 'piratenkleider' ).
                  __( '<pre>http://www.piratenpartei.de/wp-content/uploads/2012/05/UrheberplakatSH283.jpg|Rechte f&uuml;r Urheber und Nutzer|http://www.kein-programm.de</pre><br>', 'piratenkleider' ).
                  __( 'Wenn oben Defaultplakate angeklickt sind, erscheinen diese Bilder zus&auml;tzlich. Diese Bilder k&ouml;nnen auch vorher &uuml;ber den Mediendialog hochgeladen worden sein.', 'piratenkleider' ),                                                      
                  'default' => $defaultoptions['plakate-altadressen'],
                  'parent'  => 'plakate',
              ),   
               
              'teaser1'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Teaserlink 1', 'piratenkleider' ),                      
              ),
               'teaserlink1-symbol' => array(
                  'type'    => 'select',
                  'title'   => __( 'Symbol', 'piratenkleider' ),
                  'label'   => '',
                  'default' => $defaultoptions['teaserlink1-symbol'],
                  'liste'  => $defaultplakate_textsymbolliste_entity,
                  'parent'  => 'teaserlink1',
              ),
               'teaserlink1-title' => array(
                  'type'    => 'text',
                  'title'   => __( 'Titel', 'piratenkleider' ),
                  'label'   => __( 'Titelzeile des Teaserlinks', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink1-title'],
                    'parent'  => 'teaserlink1',
              ),
               'teaserlink1-untertitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Untertitel', 'piratenkleider' ),
                  'label'   => __( 'Zweite Zeile des Teaserlinks', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink1-untertitel'],
                    'parent'  => 'teaserlink1',
              ),
               'teaserlink1-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'piratenkleider' ),
                  'label'   => __( 'Webadresse zu der verlinkt werden soll', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink1-url'],
                    'parent'  => 'teaserlink1',
              ),
              'teaser2'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Teaserlink 2', 'piratenkleider' ),                      
              ),
               'teaserlink2-symbol' => array(
                  'type'    => 'select',
                  'title'   => __( 'Symbol', 'piratenkleider' ),
                  'label'   => '',
                  'default' => $defaultoptions['teaserlink2-symbol'],
                  'liste'  => $defaultplakate_textsymbolliste_entity,
                  'parent'  => 'teaserlink2',
              ),
               'teaserlink2-title' => array(
                  'type'    => 'text',
                  'title'   => __( 'Titel', 'piratenkleider' ),
                  'label'   => __( 'Titelzeile des Teaserlinks', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink2-title'],
                    'parent'  => 'teaserlink2',
              ),
               'teaserlink2-untertitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Untertitel', 'piratenkleider' ),
                  'label'   => __( 'Zweite Zeile des Teaserlinks', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink2-untertitel'],
                    'parent'  => 'teaserlink2',
              ),
               'teaserlink2-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'piratenkleider' ),
                  'label'   => __( 'Webadresse zu der verlinkt werden soll', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink2-url'],
                    'parent'  => 'teaserlink2',
              ),  
                'teaser3'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Teaserlink 3', 'piratenkleider' ),                      
              ),
               'teaserlink3-symbol' => array(
                  'type'    => 'select',
                  'title'   => __( 'Symbol', 'piratenkleider' ),
                  'label'   => '',
                  'default' => $defaultoptions['teaserlink3-symbol'],
                  'liste'  => $defaultplakate_textsymbolliste_entity,
                  'parent'  => 'teaserlink3',
              ),
               'teaserlink3-title' => array(
                  'type'    => 'text',
                  'title'   => __( 'Titel', 'piratenkleider' ),
                  'label'   => __( 'Titelzeile des Teaserlinks', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink3-title'],
                    'parent'  => 'teaserlink3',
              ),
               'teaserlink3-untertitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Untertitel', 'piratenkleider' ),
                  'label'   => __( 'Zweite Zeile des Teaserlinks', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink3-untertitel'],
                    'parent'  => 'teaserlink3',
              ),
               'teaserlink3-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'piratenkleider' ),
                  'label'   => __( 'Webadresse zu der verlinkt werden soll', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink3-url'],
                    'parent'  => 'teaserlink3',
              ),  
               
               
          )
       ),
       
       'socialmedia'   => array(
           'tabtitle'   => __('Social Media', 'piratenkleider'),
           'fields' => array(
              
              'alle-socialmediabuttons' => array(
                  'type'    => 'select',
                  'title'   => __( 'Position und Anzeige', 'piratenkleider' ),
                  'label'   => __( 'Es werden die ausgew&auml;hlten Social Media Buttons angezeigt. Dies kann entweder oben im Kopfteil oder links neben den Inhaltsbereich sein. <br>Hinweis: Es werden nur die Buttons gezeigt, bei denen in den dazugeh&ouml;rigen Eingabefeldern Adressen definiert sind.', 'piratenkleider' ),
                  'liste'   => array(
		      0 => __( 'Keine Social Media Buttons', 'piratenkleider' ) ,  
		      1 => __( 'Im Kopfteil', 'piratenkleider' ), 
		      2 => __( 'Links anzeigen', 'piratenkleider' )),
                  'default' => $defaultoptions['alle-socialmediabuttons'],
              ),  
	      'sm-list'  => array(
		  'type'    => 'urlchecklist',
		  'title'   => __( 'Social Media Plattformen', 'piratenkleider' ),
		  'liste'   => $default_socialmedia_liste,
	      ), 
	       

               
          )
       ),
	'design'   => array(
           'tabtitle'   => __( 'Design', 'piratenkleider' ),
           'fields' => array(
            
	       'style'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Stylesheet', 'piratenkleider' ),
              ),
	       'aktiv-alternativestyle' => array(
                  'type'    => 'select',
                  'title'   => __( 'Grunddesign &auml;ndern', 'piratenkleider' ),
                  'label'   => __( 'Aktiviert ein alternatives Design f&uuml;r die gesamte Website.', 'piratenkleider' ),
                  'default' => 'style.css',
                  'liste'   =>  $default_alternativestyles,
		  'parent'  => 'style', 
              ),

	    'css-colorfile' => array(
                  'type'    => 'select',
                  'title'   => __( 'Farbkombination', 'piratenkleider' ),
                  'label'   => __( 'Auswahl, welche l&auml;nderbezogene Farbvariante aktiviert werden soll.', 'piratenkleider' ),
                  'default' => '-',
                  'liste'   => $default_colorstyles,
		   'parent'  => 'style', 
              ),

              'fonts-headers' => array(
                  'type'    => 'fontselect',
                  'title'   => __( 'Schrift &Uuml;berschriften', 'piratenkleider' ),
                  'label'   => __( 'Schriftart der &Uuml;berschriften. <br>Definiert die CSS font-family <code>FontPiratenkleiderHeadlines</code>', 'piratenkleider' ),
                  'default' => $defaultoptions['fonts-headers'],
                  'liste'   => $default_fonts,
		  	  'parent'  => 'style', 
              ), 
              'fonts-menuheaders' => array(
                  'type'    => 'fontselect',
                  'title'   => __( 'Schrift Men&uuml;', 'piratenkleider' ),
                  'label'   => __( 'Schriftart der Eintr&auml;ge im Hauptmen&uuml;. <br>Definiert die CSS font-family <code>FontPiratenkleiderMenuHeadlines</code>', 'piratenkleider' ),
                  'default' => $defaultoptions['fonts-menuheaders'],
                  'liste'   => $default_fonts,
		  	  'parent'  => 'style', 
              ),                
              'fonts-content' => array(
                  'type'    => 'fontselect',
                  'title'   => __( 'Schrift Text', 'piratenkleider' ),
                  'label'   => __( 'Schriftart der normalen Texte. <br>Definiert die CSS font-family <code>FontPiratenkleiderDefault</code>', 'piratenkleider' ),
                  'default' => $defaultoptions['fonts-content'],
                  'liste'   => $default_fonts,
		  	  'parent'  => 'style', 
              ),               
	     
	      'aktiv-linkicons' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Linkicons anzeigen', 'piratenkleider' ),
                  'label'   => __( 'Bei der Anzeige von Links in Artikeln und Seiten werden bekannte Adressen und Dateitypen mit Icons erg&auml;nzt.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-linkicons'],         
		  	  'parent'  => 'style', 
              ),

              'aktiv-stylefile' => array(
                  'type'    => 'file',
                  'title'   => __( 'CSS-Datei', 'piratenkleider' ),
                  'label'   => __( 'Einbinden und hochladen einer eigenen CSS-Datei.', 'piratenkleider' ).
                   __( '<p><em>Bitte an alle Designer: Wenn ihr hiermit Designs erstellt, teilt sie doch mit. ', 'piratenkleider' ). 
                   __( 'Dann f&uuml;gen wir sie zur obiger Liste der Alternativdesigns hinzu, so dass auch viele andere etwas davon haben.', 'piratenkleider' ).
                   __( '<br><br>Meldet euch hierzu bei: <a href="mailto:info@piratenkleider.de">info@piratenkleider.de</a> - Vielen Dank!</em></p>', 'piratenkleider' ),
		  	  'parent'  => 'style',   
              ),
               'stylefile-position' => array(
                  'type'    => 'select',
                  'title'   => __( 'Einbindung CSS-Datei', 'piratenkleider' ),
                  'label'   => __( 'Definition, wie die CSS-Datei eingebunden werden soll in Kontext zum oben gew&auml;hlten Grunddesign.', 'piratenkleider' ),
                  'default' => 0,
                  'liste'   => array(
		      0 => __('Deaktiv (Nicht einbinden)', 'piratenkleider'),
                      1 => __('Vor Standard-CSS-Dateien des Grunddesigns', 'piratenkleider'),
                      2 => __('Nach Standard-CSS-Dateien des Grunddesigns', 'piratenkleider'),
                      3 => __('Semi-Exklusiv (kein Laden des Grunddesign-CSS, jedoch optionale CSS (Farben, Schriften, Icons, ...)', 'piratenkleider'),
		      4 => __('Exklusiv (kein Laden anderer CSS-Dateien)', 'piratenkleider'),
                  ),
		  'parent'  => 'style', 
              ),
              'breadcrumb'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Breadcrumb', 'piratenkleider' ),
              ),
	      'zeige_breadcrump'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Aktivieren', 'piratenkleider' ),
                  'label'   => __( 'Breadcrumb aktivieren', 'piratenkleider' ),
                  'default' => $defaultoptions['zeige_breadcrump'],
		  'parent' => 'breadcrumb',
              ),	       
	       'zeige_breadcrump_frontpages'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Start- und Frontseiten', 'piratenkleider' ),
                  'label'   => __( 'Breadcrumb auch bei Start- und Frontseiten anzeigen', 'piratenkleider' ),
                  'default' => $defaultoptions['zeige_breadcrump_frontpages'],
		   'parent' => 'breadcrumb',
              ),
	       
	      'miscdesign'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Other options', 'piratenkleider' ),
              ),
	       
	     'favicon-file' => array(
                  'type'    => 'image',
                  'title'   => __( 'FavIcon', 'piratenkleider' ),
                  'label'   => __( 'Set an own favicon file for your website.', 'piratenkleider' ),
		  'parent' => 'miscdesign',
		  'maxwidth' =>  64,
		  'maxheight'=>  64,
              ),
	       
	       
	      'css-eigene-anweisungen' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'CSS', 'piratenkleider' ),
                  'label'   => __( 'Adds own CSS commands to the website.', 'piratenkleider' ),
                  'default' => '',
		    'parent' => 'miscdesign',
              ),
	       'html-eigene-anweisungen' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'HTML', 'piratenkleider' ),
                  'label'   => __( 'Adds own HTML commands at the end of the page (after footer, just before &lt;/body&gt;&lt;/html&gt;).', 'piratenkleider' ),                  'default' => '',
		  'parent' => 'miscdesign',
              ),
	       
          )
       ),
       
       
       'sonstiges'   => array(
           'tabtitle'   => __('Misc', 'piratenkleider'),
           'fields' => array(
	       'reset_options' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Reset', 'piratenkleider' ),
                  'label'   => __( 'Resets all options to default.', 'piratenkleider' ),
                  'default' => 0,
		  'mark_option' => 1,
              ),    
               'aktiv-dynamic-sidebar' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Sitebar switch', 'piratenkleider' ),
                  'label'   => __( 'Allows users to hide the sidebar on screen resolutions above 600px.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-dynamic-sidebar'],
              ),         
              'position_sidebarbottom' => array(
                  'type'    => 'select',
                  'title'   => __( 'Sidebar position', 'piratenkleider' ),
                  'label'   => __( 'Chose where to show the sitebar', 'piratenkleider' ),
                  'liste'   => array(
                      0 => __( 'Right (Default)', 'piratenkleider' ),
                      1 => __( 'Below of the content', 'piratenkleider' )),
                  'default' => $defaultoptions['position_sidebarbottom'],
              ),                                            
              'login_errors' => array(
                  'type'    => 'select',
                  'title'   => __( 'Error message on login', 'piratenkleider' ),
                  'label'   => __( 'Chose if error messages will b e displayed on login screen, if someone fails with username and password.', 'piratenkleider' ),
                  'liste'   => array(
                      1 => __( 'Display error message', 'piratenkleider' ), 
                      0 => __( 'Do not display anything', 'piratenkleider' )),
                  'default' => 1,
              ),

             	       
              'url-newsletteranmeldung' => array(
                  'type'    => 'url',
                  'title'   => __( 'Newsletter / Mailing list', 'piratenkleider' ),
                  'label'   => __( 'Default URL for a subscribition for for a mailing list', 'piratenkleider' ),
                  'default' => $defaultoptions['url-newsletteranmeldung'],
              ),  
              
	     
              'yt-alternativeembed' => array(
                  'type'    => 'bool',
                  'title'   => __( 'YouTube', 'piratenkleider' ),
                  'label'   => __( 'Embedded YouTube-Links as an inline video-frame from youtube-nocookie.com', 'piratenkleider' ),
                  'default' => $defaultoptions['yt-alternativeembed'],
              ),  
	       
	      
	       
              'anonymitaet'  => array(
                  'type'    => 'section',
                  'title'   => __('Security', 'piratenkleider'),         
              ),  
               
              'aktiv-autoren' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Autoren anzeigen', 'piratenkleider' ),
                  'label'   => __( 'Bei der Anzeige von Artikeln den Autoren anzeigen und verlinken.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-autoren'],
                  'parent'  => 'anonymitaet',
              ),
              'anonymize-user' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Kommentarbenutzer anonymisieren', 'piratenkleider' ),
                  'label'   => __( 'IP-Adresse und der User-Agent-String wird geleert und die Eingabe von E-Mail-Adressen wird verhindert.<br> Diese Option deaktiviert auch die Avatar-Anzeige und setzt die Kommentareinstellung unter Einstellungen -&gt; Diskussion so, dass Benutzer keine Namen und E-Mail-Adressen mehr eingeben m&uuml;ssen.', 'piratenkleider' ),
                  'default' => $defaultoptions['anonymize-user'],
                  'parent'  => 'anonymitaet',
              ),
              'anonymize-user-commententries' => array(
                  'type'    => 'select',
                  'title'   => __( 'Selbstidentifikation', 'piratenkleider' ),
                  'label'   => __( 'Angebotene Kommentarfelder zur freiwilligen Selbstidentifikation', 'piratenkleider' ),
                  'liste'   => array( 0 => "Name, URL,  E-Mail (Wordpress-Default)", 1=> "Name", 2 => "Name, URL"),
                  'default' => $defaultoptions['anonymize-user-commententries'],
                  'parent'  => 'anonymitaet',
              ),
              'aktiv-avatar' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Avatare anzeigen', 'piratenkleider' ),
                  'label'   => __( 'Bei Kommentaren werden Avatar-Bilder mit Hilfe von Gravatar oder anderen Diensten abgerufen. Dies erm&ouml;glicht allerdings theoretisch ein Tracking durch diese Dienste.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-avatar'],
                  'parent'  => 'anonymitaet',
              ),               
             'feed-overwriteauthorstring' => array(
                  'type'    => 'text',
                  'title'   => __( 'Feed-Autor', 'piratenkleider' ),
                  'label'   => __( 'Angabe, mit der im RSS-Feed der Autorname bei allen Artikel &uuml;berschrieben wird.', 'piratenkleider' ),
                  'parent'  => 'anonymitaet',
              ),  
               
              'meta'  => array(
                  'type'    => 'section',
                  'title'   => __('Meta-Angaben', 'piratenkleider'),                   
              ),               
               'meta-author' => array(
                  'type'    => 'text',
                  'title'   => __( 'Autor', 'piratenkleider' ),
                  'label'   => __( 'Optionale Autor-Angabe in dem Meta-Tag jeder Seite.', 'piratenkleider' ),
                  'parent'  => 'meta',
              ),  
                'meta-description' => array(
                  'type'    => 'text',
                  'title'   => __( 'Beschreibung', 'piratenkleider' ),
                  'label'   => __( 'Optionaler Beschreibungstext in dem Meta-Tag jeder Seite (f&uuml;r alle gleich). Sollte nicht mehr als 140 Zeichen lang sein, wenn gesetzt.', 'piratenkleider' ),
                  'parent'  => 'meta',
              ),  
               'meta-keywords' => array(
                  'type'    => 'text',
                  'title'   => __( 'Schl&uuml;sselworte', 'piratenkleider' ),
                  'label'   => __( 'Optionale Schl&uuml;sselworte in dem Meta-Tag jeder Seite (f&uuml;r alle gleich). Durch Komma getrennt. Schl&uuml;sselworte sollten tats&auml;chlich vorkommen.', 'piratenkleider' ),
                  'parent'  => 'meta',                    
              ),   
	       'meta-verify-v1' => array(
                  'type'    => 'text',
                  'title'   => __( 'Google Verify', 'piratenkleider' ),
                  'label'   => __( 'Optionale Angabe zur Verifikation der Seite bei Google', 'piratenkleider' ),
                  'parent'  => 'meta',
              ),  

	       'aktiv-autokeywords'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Schl&uuml;sselworte aus Tags', 'piratenkleider' ),
                  'label'   => __( 'Meta-Tag mit Schl&uuml;sselworten wird automatisch aus der Tagcloud erstellt. Wenn oben Schl&uuml;sselworte eingegeben wurden, werden diese erg&auml;nzt.', 'piratenkleider')
		      .'<br>'. __('Hinweis: Google und andere Suchmaschinen nutzen diesen Meta-Tag bereits seit 2009 nicht mehr.', 'piratenkleider' )		   
		      .'<br>'. __('Der Zweck dieser Funktion besteht darin, Pseudo-SEO-Experten ruhig zu halten :)', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-autokeywords'],
                  'parent'  => 'meta',
              ),
	       'linktipps'  => array(
                  'type'    => 'section',
                  'title'   => __('Leseempfehlungen', 'piratenkleider'),                   
              ),            

               
              'linktipps-titlepos'  => array(
                  'type'    => 'select',
                  'title'   => __( '&Uuml;berschrift', 'piratenkleider' ),
                  'label'   => __( 'Anzeigeposition der &Uuml;berschrift', 'piratenkleider'),		   
                  'default' => $defaultoptions['linktipps-titlepos'],
                  'liste'   => array( 0 => "&Uuml;ber dem Text/Bild", 1=> "Unter dem Text/Bild"),
                  'parent'  => 'linktipps',
              ),
                'linktipps-subtitlepos'  => array(
                  'type'    => 'select',
                  'title'   => __( 'Untertitel', 'piratenkleider' ),
                  'label'   => __( 'Anzeigeposition des Untertitels', 'piratenkleider'),		   
                  'default' => $defaultoptions['linktipps-subtitlepos'],
                  'liste'   => array( 0 => "Oben",
                      1 => "Unten"),
                  'parent'  => 'linktipps',
              ),
              'linktipps-linkpos'  => array(
                  'type'    => 'select',
                  'title'   => __( 'Link', 'piratenkleider' ),
                  'label'   => __( 'Verlinkung auf Bereich festlegen', 'piratenkleider'),		   
                  'default' => $defaultoptions['linktipps-linkpos'],
                  'liste'   => array( 0 => "Link auf dem Titel",
                      1 => "Link auf Text/Bild",
                      2 => "URL unter Bild/Text anzeigen",
                      3 => "Link auf Titel und URL unten"),
                  'parent'  => 'linktipps',
              ),
             
	      
               
          ),
	),          
       'crew'   => array(
           'tabtitle'   => __( 'Captn & Crew', 'piratenkleider' ),
           'fields' => array(
	        'impressum'  => array(
                  'type'    => 'section',
                  'title'   => __('Impressumsangaben', 'piratenkleider'),                   
		),               
               'impressumperson' => array(
                  'type'    => 'text',
                  'title'   => __( 'Verantwortliche/r', 'piratenkleider' ),
                  'label'   => __( 'Verantwortliche/r gem&auml;&szlig; &sect; 5 TMG. <br>Zum Beispiel: <code>Martin Mustermann</code>', 'piratenkleider' ),
		   'default'	=> '',
                  'parent'  => 'impressum',
		),  
                'impressumdienstanbieter' => array(
                  'type'    => 'text',
                  'title'   => __( 'Dienstanbieter', 'piratenkleider' ),
                  'label'   => __( 'Textbezeichnung des Dienstanbieters des Webauftritts.', 'piratenkleider' ),
                  'parent'  => 'impressum',		    
		), 
	       'kontaktemail' => array(
                  'type'    => 'email',
                  'title'   => __( 'Offizielle E-Mail-Adresse', 'piratenkleider' ),
                  'label'   => __( 'Feste  E-Mail-Adresse f&uuml;r offizielle Kontakte.', 'piratenkleider' ),
                  'parent'  => 'impressum',		    
		), 
               'kontakttelefon' => array(
                  'type'    => 'text',
                  'title'   => __( 'Telefon', 'piratenkleider' ),
                  'label'   => __( 'Telefonnummer mit Vorwahl.', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'impressum',
		), 
               'kontaktfax' => array(
                  'type'    => 'text',
                  'title'   => __( 'Fax', 'piratenkleider' ),
                  'label'   => __( 'Faxnummer mit Vorwahl', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'impressum',
		), 
                'zeigerechtsvorschriften' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Rechtsvorschriften', 'piratenkleider' ),
                  'label'   => __( 'Zeige Linkliste zu Rechtsvorschriften politischer Parteien', 'piratenkleider' ),
		  'default'	=> $defaultoptions['zeigerechtsvorschriften'],
                  'parent'  => 'impressum',
		), 
	       'lizenzen' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'Urheberrecht', 'piratenkleider' ),
                  'label'   => __( 'Zus&auml;tzliche Angaben f&uuml;r den Abschnitt "Verwendete Werke und Lizenzen innerhalb dieses Webauftritts"', 'piratenkleider' ),
                  'parent'  => 'impressum',		    
		), 
	       
	      'postanschrift'  => array(
                  'type'    => 'section',
                  'title'   => __('Offizielle Postanschrift', 'piratenkleider'),                   
		),  
      
               'posttitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Name oder Titel', 'piratenkleider' ),
                  'label'   => __( 'Anschrift: Titel (1. Zeile). <br>Zum Beispiel: <code>Piratenpartei</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'postanschrift',
		),  
                'postperson' => array(
                  'type'    => 'text',
                  'title'   => __( 'zu H&auml;nden', 'piratenkleider' ),
                  'label'   => __( 'Anschrift: Optionale Personenangabe ("zu H&auml;nden") <br>Zum Beispiel: <code>Martin Mustermann</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'postanschrift',
		 ),   
		'poststrasse' => array(
                  'type'    => 'text',
                  'title'   => __( 'Stra&szlig;e oder Postfach', 'piratenkleider' ),
                  'label'   => __( 'Anschrift: Stra&szlig;enname und Hausnummer oder Postfachangabe oder freilassen <br>Zum Beispiel: <code>Unbesonnenheitsweg 123b</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'postanschrift',
		), 
		'poststadt' => array(
                  'type'    => 'text',
                  'title'   => __( 'PLZ und Stadt', 'piratenkleider' ),
                  'label'   => __( 'Anschrift: Postleitzahl gefolgt von Stadt<br>Zum Beispiel: <code>12345  Ankh-Morpork</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'postanschrift',
		), 
                
	       'ladung'  => array(
                  'type'    => 'section',
                  'title'   => __('Ladungsf&auml;hige Anschrift', 'piratenkleider'),                   
		),               
               'ladungtitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Name oder Titel', 'piratenkleider' ),
                  'label'   => __( 'Anschrift: Titel (1. Zeile). <br>Zum Beispiel: <code>Piratenpartei</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'ladung',
		),  
                'ladungperson' => array(
                  'type'    => 'text',
                  'title'   => __( 'zu H&auml;nden', 'piratenkleider' ),
                  'label'   => __( 'Anschrift: Optionale Personenangabe ("zu H&auml;nden") <br>Zum Beispiel: <code>Martin Mustermann</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'ladung',
		 ),   
		'ladungstrasse' => array(
                  'type'    => 'text',
                  'title'   => __( 'Stra&szlig;e oder Postfach', 'piratenkleider' ),
                  'label'   => __( 'Anschrift: Stra&szlig;enname und Hausnummer oder Postfachangabe oder freilassen <br>Zum Beispiel: <code>Unbesonnenheitsweg 123b</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'ladung',
		), 
		'ladungstadt' => array(
                  'type'    => 'text',
                  'title'   => __( 'PLZ und Stadt', 'piratenkleider' ),
                  'label'   => __( 'Anschrift: Postleitzahl gefolgt von Stadt<br>Zum Beispiel: <code>12345  Ankh-Morpork</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'ladung',
		), 

	       
	       
	       'dsb'  => array(
                  'type'    => 'section',
                  'title'   => __('Datenschutzbeauftragter', 'piratenkleider'),                   
		),               
               'dsbperson' => array(
                  'type'    => 'text',
                  'title'   => __( 'Name', 'piratenkleider' ),
                  'label'   => __( 'Name des DSB<br>Zum Beispiel: <code>Martin Mustermann</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'dsb',
		),  
                'dsbemail' => array(
                  'type'    => 'email',
                  'title'   => __( 'EMail', 'piratenkleider' ),
                  'label'   => __( 'Feste E-Mail-Adresse f&uuml;r offizielle Kontakte.<br>Zum Beispiel:  <code>bundesbeauftragter@piraten-dsb.de</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'dsb',
		 ),   
		

	  
	),   
      ),
   )
);

