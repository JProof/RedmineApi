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
 * @since              05.12.2017
 */

declare(strict_types=1);

namespace JProof\RedmineApi\Data\Issue;

use PHPUnit\Framework\TestCase;

/**
 * Class IssueTest
 *
 * @package JProof\RedmineApi\Data
 */
class IssueTest extends TestCase
{
	public function testBindAuthor()
	{
		$id        = 33;
		$name      = 'author';
		$nameValue = $name . 'ItemsName';
		$class     = IssueAuthor::class;
		$d         = new Issue();

		$method = 'get' . ucfirst($name);

		$this->assertEquals(null, $d->{$method}(), 'The Method must return null unless it was not set');

		$d->bind(['regular' => 'regularValue', $name => ['id' => $id, 'name' => $nameValue]]);
		/** @var \JProof\RedmineApi\Data\Issue\IssueAuthor $calledObject */

		$calledObject = $d->{$method}();

		$this->assertEquals(true, $calledObject instanceof $class, 'The Item must be instance of ' . $class);
		$this->assertEquals($id, $calledObject->getId(), $name . ' should be ' . $id);
		$this->assertEquals($nameValue, $calledObject->getName(), $name . 'Name should be ' . $nameValue);
		$this->assertNotEquals(null, $calledObject, $name . ' can not bee');
	}

	public function testBindPriority()
	{
		$id        = 12;
		$name      = 'priority';
		$nameValue = $name . 'ItemsName';
		$class     = IssuePriority::class;
		$d         = new Issue();

		$method = 'get' . ucfirst($name);

		$this->assertEquals(null, $d->{$method}(), 'The Method must return null unless it was not set');

		$d->bind(['regular' => 'regularValue', $name => ['id' => $id, 'name' => $nameValue]]);
		/** @var \JProof\RedmineApi\Data\Issue\IssuePriority $calledObject */

		$calledObject = $d->{$method}();

		$this->assertEquals(true, $calledObject instanceof $class, 'The Item must be instance of ' . $class);
		$this->assertEquals($id, $calledObject->getId(), $name . ' should be ' . $id);
		$this->assertEquals($nameValue, $calledObject->getName(), $name . 'Name should be ' . $nameValue);
		$this->assertNotEquals(null, $calledObject, $name . ' can not bee');
	}

	public function testBindProject()
	{
		$id        = 17;
		$name      = 'project';
		$nameValue = $name . 'ItemsName';
		$class     = IssueProject::class;
		$d         = new Issue();

		$method = 'get' . ucfirst($name);

		$this->assertEquals(null, $d->{$method}(), 'The Method must return null unless it was not set');

		$d->bind(['regular' => 'regularValue', $name => ['id' => $id, 'name' => $nameValue]]);
		/** @var \JProof\RedmineApi\Data\Issue\IssueProject $calledObject */

		$calledObject = $d->{$method}();

		$this->assertEquals(true, $calledObject instanceof $class, 'The Item must be instance of ' . $class);
		$this->assertEquals($id, $calledObject->getId(), $name . ' should be ' . $id);
		$this->assertEquals($nameValue, $calledObject->getName(), $name . 'Name should be ' . $nameValue);
		$this->assertNotEquals(null, $calledObject, $name . ' can not bee');
	}

	public function testBindStatus()
	{
		$id        = 122;
		$name      = 'status';
		$nameValue = $name . 'ItemsName';
		$class     = IssueStatus::class;
		$d         = new Issue();

		$method = 'get' . ucfirst($name);

		$this->assertEquals(null, $d->{$method}(), 'The Method must return null unless it was not set');

		$d->bind(['regular' => 'regularValue', $name => ['id' => $id, 'name' => $nameValue]]);
		/** @var \JProof\RedmineApi\Data\Issue\IssueStatus $calledObject */

		$calledObject = $d->{$method}();

		$this->assertEquals(true, $calledObject instanceof $class, 'The Item must be instance of ' . $class);
		$this->assertEquals($id, $calledObject->getId(), $name . ' should be ' . $id);
		$this->assertEquals($nameValue, $calledObject->getName(), $name . 'Name should be ' . $nameValue);
		$this->assertNotEquals(null, $calledObject, $name . ' can not bee');
	}

	public function testBindTracker()
	{
		$id        = 33;
		$name      = 'tracker';
		$nameValue = $name . 'ItemsName';
		$class     = IssueTracker::class;
		$d         = new Issue();

		$method = 'get' . ucfirst($name);

		$this->assertEquals(null, $d->{$method}(), 'The Method must return null unless it was not set');

		$d->bind(['regular' => 'regularValue', $name => ['id' => $id, 'name' => $nameValue]]);
		/** @var \JProof\RedmineApi\Data\Issue\IssueTracker $calledObject */

		$calledObject = $d->{$method}();

		$this->assertEquals(true, $calledObject instanceof $class, 'The Item must be instance of ' . $class);
		$this->assertEquals($id, $calledObject->getId(), $name . ' should be ' . $id);
		$this->assertEquals($nameValue, $calledObject->getName(), $name . 'Name should be ' . $nameValue);
		$this->assertNotEquals(null, $calledObject, $name . ' can not bee');
	}

	/**
	 * returns always stdClass Objects in SubParts
	 */
	public function testDumpObject()
	{
		$data = ['id'       => 12,
		         'name'     => 'myProjectName',
		         'author'   => ['id' => 12, 'name' => 'myName'],
		         'priority' => ['id' => 1, 'name' => 'High'],
		         'project'  => ['id' => 2, 'name' => 'myProject'],
		         'status'   => ['id' => 0, 'name' => 'Solved'],
		         'tracker'  => ['id' => 7, 'name' => 'importantProjectings'],
		];

		$dataTest             = $data;
		$dataTest['author']   = (object) $data['author'];
		$dataTest['priority'] = (object) $data['priority'];
		$dataTest['project']  = (object) $data['project'];
		$dataTest['status']   = (object) $data['status'];
		$dataTest['tracker']  = (object) $data['tracker'];
		$dataTest             = (object) $dataTest;

		$issue = new Issue($data);
		$dump  = $issue->dump();

		$this->assertEquals($dataTest, $dump);
	}

	/**
	 * Everything should be an array
	 */
	public function testDumpArray()
	{
		$data  = ['id'       => 12,
		          'name'     => 'myProjectName',
		          'author'   => ['id' => 12, 'name' => 'myName'],
		          'priority' => ['id' => 1, 'name' => 'High'],
		          'project'  => ['id' => 2, 'name' => 'myProject'],
		          'status'   => ['id' => 0, 'name' => 'Solved'],
		          'tracker'  => ['id' => 7, 'name' => 'importantProjectings'],
		];
		$issue = new Issue($data);
		$dump  = $issue->toArray();

		$this->assertEquals($data, $dump);
	}
}
