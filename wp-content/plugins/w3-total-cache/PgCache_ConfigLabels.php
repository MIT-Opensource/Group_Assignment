<?php
/**
 * File: PgCache_ConfigLabels.php
 *
 * @package W3TC
 */

namespace W3TC;

/**
 * Class PgCache_ConfigLabels
 */
class PgCache_ConfigLabels {
	/**
	 * Merges and returns the configuration labels for the page cache.
	 *
	 * @param array $config_labels The configuration labels to merge.
	 *
	 * @return array The merged configuration labels.
	 */
	public function config_labels( $config_labels ) {
		return array_merge(
			$config_labels,
			array(
				'pgcache.engine'                    => __( 'Page Cache Method:', 'w3-total-cache' ),
				'pgcache.enabled'                   => __( 'Page Cache:', 'w3-total-cache' ),
				'pgcache.debug'                     => __( 'Page Cache', 'w3-total-cache' ),
				'pgcache.cache.home'                => 'posts' === get_option( 'show_on_front' ) ? __( 'Cache front page', 'w3-total-cache' ) : __( 'Cache posts page', 'w3-total-cache' ),
				'pgcache.reject.front_page'         => __( 'Don\'t cache front page', 'w3-total-cache' ),
				'pgcache.cache.feed'                => __( 'Cache feeds: site, categories, tags, comments', 'w3-total-cache' ),
				'pgcache.cache.ssl'                 => __( 'Cache <acronym title="Secure Socket Layer">SSL</acronym> (<acronym title="HyperText Transfer Protocol over SSL">HTTPS</acronym>) requests', 'w3-total-cache' ),
				'pgcache.cache.query'               => __( 'Cache <acronym title="Uniform Resource Identifier">URI</acronym>s with query string variables', 'w3-total-cache' ),
				'pgcache.cache.404'                 => __( 'Cache 404 (not found) pages', 'w3-total-cache' ),
				'pgcache.reject.logged'             => __( 'Don\'t cache pages for logged in users', 'w3-total-cache' ),
				'pgcache.reject.logged_roles'       => __( 'Don\'t cache pages for following user roles', 'w3-total-cache' ),
				'pgcache.prime.enabled'             => __( 'Automatically prime the page cache', 'w3-total-cache' ),
				'pgcache.prime.interval'            => __( 'Update interval:', 'w3-total-cache' ),
				'pgcache.prime.limit'               => __( 'Pages per interval:', 'w3-total-cache' ),
				'pgcache.prime.sitemap'             => __( 'Sitemap <acronym title="Uniform Resource Indicator">URL</acronym>:', 'w3-total-cache' ),
				'pgcache.prime.post.enabled'        => __( 'Preload cache upon publishing a post', 'w3-total-cache' ),
				'pgcache.prime.post.update.enabled' => __( 'Preload cache upon updating a post', 'w3-total-cache' ),
				'pgcache.purge.front_page'          => __( 'Front page', 'w3-total-cache' ),
				'pgcache.purge.home'                => 'posts' === get_option( 'show_on_front' ) ? __( 'Front page', 'w3-total-cache' ) : __( 'Posts page', 'w3-total-cache' ),
				'pgcache.purge.post'                => __( 'Post page', 'w3-total-cache' ),
				'pgcache.purge.feed.blog'           => __( 'Blog feed', 'w3-total-cache' ),
				'pgcache.purge.comments'            => __( 'Post comments pages', 'w3-total-cache' ),
				'pgcache.purge.author'              => __( 'Post author pages', 'w3-total-cache' ),
				'pgcache.purge.terms'               => __( 'Post terms pages', 'w3-total-cache' ),
				'pgcache.purge.feed.comments'       => __( 'Post comments feed', 'w3-total-cache' ),
				'pgcache.purge.feed.author'         => __( 'Post author feed', 'w3-total-cache' ),
				'pgcache.purge.feed.terms'          => __( 'Post terms feeds', 'w3-total-cache' ),
				'pgcache.purge.archive.daily'       => __( 'Daily archive pages', 'w3-total-cache' ),
				'pgcache.purge.archive.monthly'     => __( 'Monthly archive pages', 'w3-total-cache' ),
				'pgcache.purge.archive.yearly'      => __( 'Yearly archive pages', 'w3-total-cache' ),
				'pgcache.purge.feed.types'          => __( 'Specify the feed types to purge:', 'w3-total-cache' ),
				'pgcache.purge.postpages_limit'     => __( 'Purge limit:', 'w3-total-cache' ),
				'pgcache.purge.pages'               => __( 'Additional pages:', 'w3-total-cache' ),
				'pgcache.purge.sitemap_regex'       => __( 'Purge sitemaps:', 'w3-total-cache' ),
				'pgcache.compatibility'             => __( 'Enable', 'w3-total-cache' ),
				'pgcache.remove_charset'            => __( 'Disable <acronym title="Unicode Transformation Format">UTF</acronym>-8 blog charset support', 'w3-total-cache' ),
				'pgcache.reject.request_head'       => __( ' Disable caching of HEAD <acronym title="Hypertext Transfer Protocol">HTTP</acronym> requests', 'w3-total-cache' ),
				'pgcache.lifetime'                  => __( 'Maximum lifetime of cache objects:', 'w3-total-cache' ),
				'pgcache.file.gc'                   => __( 'Garbage collection interval:', 'w3-total-cache' ),
				'pgcache.comment_cookie_ttl'        => __( 'Comment cookie lifetime:', 'w3-total-cache' ),
				'pgcache.accept.qs'                 => __( 'Accepted query strings:', 'w3-total-cache' ),
				'pgcache.reject.ua'                 => __( 'Rejected user agents:', 'w3-total-cache' ),
				'pgcache.reject.cookie'             => __( 'Rejected cookies:', 'w3-total-cache' ),
				'pgcache.reject.uri'                => __( 'Never cache the following pages:', 'w3-total-cache' ),
				'pgcache.reject.categories'         => __( 'Never cache pages associated with these categories:', 'w3-total-cache' ),
				'pgcache.reject.tags'               => __( 'Never cache pages that use these tags:', 'w3-total-cache' ),
				'pgcache.reject.authors'            => __( 'Never cache pages by these authors:', 'w3-total-cache' ),
				'pgcache.reject.custom'             => __( 'Never cache pages that use these custom fields:', 'w3-total-cache' ),
				'pgcache.accept.files'              => __( 'Cache exception list:', 'w3-total-cache' ),
				'pgcache.accept.uri'                => __( 'Non-trailing slash pages:', 'w3-total-cache' ),
				'pgcache.cache.headers'             => __( 'Specify page headers:', 'w3-total-cache' ),
				'pgcache.cache.nginx_handle_xml'    => __( 'Handle <acronym title="Extensible Markup Language">XML</acronym> mime type', 'w3-total-cache' ),
			)
		);
	}
}
