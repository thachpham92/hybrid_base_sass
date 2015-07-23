<?php
/**
 * "Funny, 'cause I look around at this world you're so eager to be a part of and all I see is six billion
 * lunatics looking for the fastest ride out. Who's not crazy? Look around, everyone's drinking, smoking,
 * shooting up, shooting each other, or just plain screwing their brains out 'cause they don't want 'em anymore.
 * I'm crazy? Honey, I'm the original one-eyed chicklet in the kingdom of the blind, 'cause at least I admit the
 * world makes me nuts. Name one person who can take it here. That's all I'm asking. Name one."
 * ~ Glorificus (Buffy the Vampire Slayer: Season 5 - Weight of the World)
 *
 * Theme Authors: Make sure to add a favorite quote of yours above, maybe something that inspired you to
 * create this theme.
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License as published by the Free Software Foundation; either version 2 of the License,
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write
 * to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 *
 * @package    HybridBase
 * @subpackage Functions
 * @version    1.0.0
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2013 - 2014, Justin Tadlock
 * @link       http://themehybrid.com/themes/hybrid-base
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Get the template directory and make sure it has a trailing slash. */
$thachpham_dir = trailingslashit(get_template_directory());

/* Load the Hybrid Core framework and theme files. */
require_once($thachpham_dir . 'library/hybrid.php');
require_once($thachpham_dir . 'inc/custom-background.php');
require_once($thachpham_dir . 'inc/custom-header.php');
require_once($thachpham_dir . 'inc/theme.php');

/* Launch the Hybrid Core framework. */
new Hybrid();

/* Do theme setup on the 'after_setup_theme' hook. */
add_action('after_setup_theme', 'thachpham_theme_setup', 5);

/**
 * Theme setup function.  This function adds support for theme features and defines the default theme
 * actions and filters.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function thachpham_theme_setup()
{

    /* Theme layouts. */
    add_theme_support(
        'theme-layouts',
        array(
            '1c' => __('1 Column', 'hybrid-base'),
            '2c-l' => __('2 Columns: Content / Sidebar', 'hybrid-base'),
            '2c-r' => __('2 Columns: Sidebar / Content', 'hybrid-base')
        ),
        array('default' => is_rtl() ? '2c-r' : '2c-l')
    );

    /* Enable custom template hierarchy. */
    add_theme_support('hybrid-core-template-hierarchy');

    /* The best thumbnail/image script ever. */
    add_theme_support('get-the-image');

    /* Breadcrumbs. Yay! */
    add_theme_support('breadcrumb-trail');

    /* Pagination. */
    add_theme_support('loop-pagination');

    /* Nicer [gallery] shortcode implementation. */
    add_theme_support('cleaner-gallery');

    /* Better captions for themes to style. */
    add_theme_support('cleaner-caption');

    /* Automatically add feed links to <head>. */
    add_theme_support('automatic-feed-links');

    /* Post formats. */
    add_theme_support(
        'post-formats',
        array('aside', 'audio', 'chat', 'image', 'gallery', 'link', 'quote', 'status', 'video')
    );

    /* Handle content width for embeds and images. */
    hybrid_set_content_width(960);

    /* Custom thumbnail size in theme */
    add_image_size('thumb-large', 350, 200, true);
    add_image_size('thumb-small', 200, 150, true);
}
