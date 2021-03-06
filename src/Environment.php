<?php
declare(strict_types=1);

namespace Trejjam\Configuration;

final class Environment
{
	const SITE_MODE_DEFAULT = 'default';

	const SITE_MODE_OFFLINE = 'offline';
	const SITE_MODE_LOCAL   = 'local';
	const SITE_MODE_REVIEW  = 'review';
	const SITE_MODE_STAGING = 'staging';
	const SITE_MODE_TESTING = 'testing';
	const SITE_MODE_PUBLIC  = 'public';

	/**
	 * @var string
	 */
	private $siteMode;
	/**
	 * @var bool
	 */
	private $isCli;

	public function __construct(
		string $siteMode,
		bool $isCli
	) {
		$this->siteMode = $siteMode;
		$this->isCli = $isCli;
	}

	public function getSiteMode() : string
	{
		return $this->siteMode;
	}

	public function isCli() : bool
	{
		return $this->isCli;
	}
}
