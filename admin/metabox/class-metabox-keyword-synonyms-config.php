<?php
/**
 * WPSEO plugin file.
 *
 * @package WPSEO\Admin\Metabox
 */

/**
 * Button to show the premium upsell.
 */
class WPSEO_Metabox_Keyword_Synonyms_Config {

	/**
	 * Enqueues the translations necessary for the synonyms modal + button
	 *
	 * @return void
	 */
	public function enqueue_translations() {

		$keyword_synonyms_modal_config = array(
			'openButtonIcon' => '',
			'intl'           => array(
				'open'           => __( '+ Add synonyms', 'wordpress-seo' ),
				'modalAriaLabel' => sprintf(
					/* translators: %s expands to 'Yoast SEO Premium'. */
					__( 'Get %s now!', 'wordpress-seo' ), 'Yoast SEO Premium'
				),
				'heading'        => sprintf(
					/* translators: %s expands to 'Yoast SEO Premium'. */
					__( 'Get %s now!', 'wordpress-seo' ), 'Yoast SEO Premium'
				),
			),
			'classes'        => array(
				'openButton' => 'wpseo-keyword-synonyms button-link',
			),
			'content'        => 'KeywordSynonyms',
		);

		$translations = new WPSEO_Keyword_Synonyms_Modal();
		$translations->enqueue_translations();

		$benefits = new WPSEO_Premium_Benefits_For_Synonyms_List();
		$benefits->enqueue_translations();

		Yoast_Modal::add( $keyword_synonyms_modal_config );
	}
}
