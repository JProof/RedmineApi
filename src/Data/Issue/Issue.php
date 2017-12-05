<?php
/**
 * PHP version 7.1
 *
 * @category
 * @package            3.4  JProof\RedmineApi\Data
 * @author             ${JProof}
 * @copyright          ${copyright}
 * @license            ${license}
 * @link
 * @see                ${docu}
 * @since              04.12.2017
 */

declare(strict_types=1);

namespace JProof\RedmineApi\Data\Issue;

use JProof\RedmineApi\Data\Data;

/**
 * Class Issue
 *
 * @package JProof\RedmineApi\Data
 */
class Issue extends Data
{
	use TraitIssue;
	/**
	 * @var array
	 */
	static protected $subObjects = ['author'   => IssueAuthor::class,
	                                'priority' => IssuePriority::class,
	                                'project'  => IssueProject::class,
	                                'status'   => IssueStatus::class,
	                                'tracker'  => IssueTracker::class];

	/**
	 * @param iterable|null $datas
	 */
	public function bind(?iterable $datas = null)
	{
		// Create the matching SubObjects
		foreach (self::$subObjects as $key => $value)
		{
			$datas[$key] = array_key_exists($key, $datas) && $datas[$key] instanceof $value ? $datas[$key] : new $value($datas[$key] ?? []);
		}

		parent::bind($datas);
	}

	/**
	 * Each sub-objects will be stdClass
	 *
	 * @return \stdClass
	 */
	public function dump(): \stdClass
	{
		$dump  = new \stdClass();
		$datas = $this->getDatas();
		foreach (array_keys($datas) as $property)
		{
			$dump->$property = array_key_exists($property, self::$subObjects) && method_exists($datas[$property], 'dump') ? $datas[$property]->dump() : $this->{$property};
		}
		return $dump;
	}

	/**
	 * Each sub-objects will be array
	 *
	 * @return array
	 */
	public function toArray(): array
	{
		$dump  = [];
		$datas = $this->getDatas();
		foreach (array_keys($datas) as $property)
		{
			$dump[$property] = array_key_exists($property, self::$subObjects) && method_exists($datas[$property], 'dump') ? (array) $datas[$property]->dump() : $this->{$property};
		}
		return $dump;
	}
}