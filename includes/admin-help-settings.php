<?php

if( class_exists('WPRSS_Help') ) {
    $help = WPRSS_Help::get_instance();

    // Feed source setting fields
    $prefix = 'setting-';
    $tooltips = array(
        /* -----------------
         *  General Section
         * -----------------
         */ // Limit feed items by age
            'limit-feed-items-by-age'   => __( 'The maximum age allowed for feed items.
                                            <hr/>

                                            Items already imported will be deleted if they eventually exceed this age limit.

                                            Also, items in the RSS feed that are already older than this age will not be imported at all.
                                            <hr/>

                                            <em>Leave empty for no limit.</em>', WPRSS_TEXT_DOMAIN),
            // Limit feed items per feed
            'limit-feed-items-imported' => __('The maximum number of imported items to keep stored, for feed sources that do not have their own limit.
                                            <hr/>

                                            When new items are imported and the limit for a feed source is exceeded, the oldest feed items for that feed source will be deleted to make room for the new ones.

                                            If you already have items imported from this feed source, setting this option now may delete some of your items, in order to comply with the limit.
                                            <hr/>
                                            
                                            <em>Use 0 or leave empty for no limit.</em>', WPRSS_TEXT_DOMAIN),
            // Feed processing interval
            'cron-interval'             => __('How frequently should the feed sources (that do not have their own update interval) check for updates and fetch items accordingly.

                                            It is recommended to not have more than 20 feed sources that use this global update interval. Having too many feed sources updating precisely at the same time can cause the WP Cron System to crash.', WPRSS_TEXT_DOMAIN),
            // Custom Feed URL
            'custom-feed-url'           => __('The URL of the custom feed, located at <code>http://yoursite.com/[custom feed url]</code>.
                                            <hr/>

                                            WP RSS Aggregator allows you to create a custom RSS feed, that contains all of your imported feed items. This setting allows you to change the URL of this custom feed.

                                            <hr/>

                                            <strong>Note:</strong> You may be required to refresh you Permalinks after you change this setting, by going to <em>Settings <i class="fa fa-angle-right"></i> Permalinks</e> and clicking <em>Save</em>.', WPRSS_TEXT_DOMAIN),
            // Custom Feed Title
            'custom-feed-title'         => __('The title of the custom feed.

                                            This title will be included in the RSS source of the custom feed, in a <code>&lt;title&gt;</code> tag.', WPRSS_TEXT_DOMAIN),
            // Custom Feed Limit
            'custom-feed-limit'         => __('The maximum number of feed items in the custom feed.', WPRSS_TEXT_DOMAIN),

        /* --------------------------
         *  General Display Settings
         * --------------------------
         */ // Link titles
            'link-enable'               => __('Check this box to make the feed item titles link to the original article.', WPRSS_TEXT_DOMAIN),
            // Title Maximum length
            'title-limit'               => __('Set the maximum number of characters to show for feed item titles.
                                            <hr/>

                                            <em>Leave empty for no limit.</em>', WPRSS_TEXT_DOMAIN),
            // Show Authors
            'authors-enable'            => __('Check this box to show the author for each feed item, if it is available.', WPRSS_TEXT_DOMAIN),
            // Video Links
            'video-links'               => __('For feed items from YouTube, Vimeo or Dailymotion, you can choose whether you want to have the items link to the original page link, or a link to the embedded video player only.', WPRSS_TEXT_DOMAIN),
            // Pagination Type
            'pagination'                => __('The type of pagination to use when showing feed items on multiple pages.

                                            The first shows two links, "Older" and "Newer", which allow you to navigate through the pages.

                                            The second shows links for all the pages, together with links for the next and previous pages.', WPRSS_TEXT_DOMAIN),
            // Feed Limit
            'feed-limit'                => __('The maximum number of feed items to display when using the shortcode.

                                            This enables pagination if set to a number smaller than the number of items to be displayed.', WPRSS_TEXT_DOMAIN),
            // Open Links Behaviour
            'open-dd'                   => __('Choose how you want links to be opened. This applies to the feed item title and the source link.', WPRSS_TEXT_DOMAIN),
            // Set links as no follow
            'follow-dd'                 => __('Enable this option to set all links displayed as "NoFollow".
                                            <hr/>

                                            "Nofollow" provides a way to tell search engines to <em>not</em> follow certain links, such as links to feed items in this case.', WPRSS_TEXT_DOMAIN),

        /* -------------------------
         *  Source Display Settings
         * -------------------------
         */ // Source Enabled
            'source-enable'             => __('Enable this option to show the feed source name for each feed item.', WPRSS_TEXT_DOMAIN),
            // Text preceding source
            'text-preceding-source'     => __('Enter the text that you want to show before the source name. A space is automatically added between this text and the feed source name.', WPRSS_TEXT_DOMAIN),
            // Source Link
            'source-link'               => __('Enable this option to link the feed source name to the RSS feed\'s source site.', WPRSS_TEXT_DOMAIN),

        /* -------------------------
         *  Date Display Settings
         * -------------------------
         */ // Source Enabled
            'date-enable'               => __('Enable this to show the feed item\'s date.', WPRSS_TEXT_DOMAIN),
            // Text preceding date
            'text-preceding-date'       => __('Enter the text that you want to show before the feed item date. A space is automatically added between this text and the date.', WPRSS_TEXT_DOMAIN),
            // Date Format
            'date-format'               => __('The format to use for the feed item dates, as a PHP date format.', WPRSS_TEXT_DOMAIN),
            // Time Ago Format Enable
            'time-ago-format-enable'    => __('Enable this option to show the elapsed time from the feed item\'s date and time to the present time.
                                            <em>Eg. 2 hours ago</em>', WPRSS_TEXT_DOMAIN),

        /* --------
         *  Styles
         * --------
         */ // Styles Disable
            'styles-disable'            => __('Check this box to disable all plugin styles used for displaying feed items.

                                            This will allow you to provide your own custom CSS styles for displaying the feed items.', WPRSS_TEXT_DOMAIN)
    );
    $help->add_tooltips( $tooltips, $prefix );
}