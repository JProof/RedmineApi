<?php
/**
 * PHP version $phpversion$
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

use PHPUnit\Framework\TestCase;

class DataTest extends TestCase
{
	public function test__issetWasNotSetTrue()
	{
		$d = new Data();

		$this->assertEquals(false, isset($d->someVar));
	}

	public function test__issetWasSetBoolTrue()
	{
		$d          = new Data();
		$d->someVar = true;
		$this->assertEquals(true, isset($d->someVar));
	}

	public function test__issetWasNotSetWithNullTrue()
	{
		$d          = new Data();
		$d->someVar = null;
		$this->assertEquals(false, isset($d->someVar));
	}

	public function test__getWasNotSetDuringNull()
	{
		$d          = new Data();
		$d->someVar = null;
		$this->assertEquals(null, $d->someVar);
	}

	public function test__getWasNotSetDuringFalseNull()
	{
		$d          = new Data();
		$d->someVar = null;
		$this->assertEquals(null, $d->someVar);
	}

	public function test__getWasSetOfAnClass()
	{
		$d          = new Data();
		$d->someVar = new Data();
		$this->assertEquals(true, $d->someVar instanceof Data);
	}

	public function testBindIterableTrue()
	{
		$throws = false;
		$d      = new Data();
		try
		{

			$d->bind(new Datas());
		}
		catch (\TypeError $exception)
		{
			$throws = true;
		}
		$this->assertEquals(false, $throws);
	}

	public function testBindNonIterableThrows()
	{
		$throws = false;
		$d      = new Data();
		try
		{
			$d->bind(new \stdClass());
		}
		catch (\TypeError $exception)
		{
			$throws = true;
		}
		$this->assertEquals(true, $throws);
	}
}
