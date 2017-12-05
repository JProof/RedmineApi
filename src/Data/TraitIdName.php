<?php
/**
 * PHP version phpversion
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

namespace JProof\RedmineApi\Data;

/**
 * Class IdName
 *
 * @package JProof\RedmineApi\Data
 * @property-read int    id
 * @property-read string name
 */
trait TraitIdName
{
	/**
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 *
	 * @return self
	 */
	public function setId(?int $id = null): self
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 *
	 * @return self
	 */
	public function setName(?string $name = null): self
	{
		$this->name = $name;
		return $this;
	}
}