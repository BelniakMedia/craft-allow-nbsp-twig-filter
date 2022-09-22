<?php
/**
 * Excerptify Twig Filter plugin for Craft CMS 4.x
 *
 * @link      http://www.belniakmedia.com
 * @copyright Copyright (c) 2017 Belniak Media Inc.
 */

namespace belniakmedia\craftAllowNbsp\twigextensions;

/**
 * @author    Belniak Media Inc.
 * @package   craft-allow-nbsp-twig-filter
 * @since     1.0.0
 */
class AllowNbspTwigExtension extends \Twig\Extension\AbstractExtension
{
	// Public Methods
	// =========================================================================

	/**
	 * @inheritdoc
	 */
	public function getName()
	{
		return 'Allow &nbsp; Twig Filter';
	}

	/**
	 * @inheritdoc
	 */
	public function getFilters()
	{
		return [
			new \Twig\TwigFilter('allowNbsp', [$this, 'allowNbsp'], ['pre_escape' => 'html', 'is_safe' => array('html')]),
		];
	}

	// currently only works with plan strings or full html document.
	public function allowNbsp($content)
	{
		// perform filter operations
		return str_ireplace('&amp;nbsp;', '&nbsp;', $content);

	}

}
