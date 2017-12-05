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

namespace JProof\RedmineApi\Data\Issue;

/**
 * Trait TraitIssue
 *
 * @package JProof\RedmineApi\Data
 * @uses    You can use this trait in your own class or implementations. It can be usefully with table-classes
 * @see     http://www.redmine.org/projects/redmine/wiki/Rest_Issues
 * @property-read int           id
 * @property-read IssueProject  project
 * @property-read IssueTracker  tracker
 * @property-read IssueStatus   status
 * @property-read IssuePriority priority
 * @property-read IssueAuthor   author
 * @property-read string        subject
 * @property-read string        description
 * @property-read string        start_date
 * @property-read int           done_ratio
 * @property-read string        created_on // datetime
 * @property-read string        updated_on // datetime
 */
trait TraitIssue
{
	/**
	 * @return null|int
	 */
	public function getId(): ?int
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
	 * @return null|IssueProject
	 */
	public function getProject(): ?IssueProject
	{
		return $this->project;
	}

	/**
	 * @param IssueProject $project
	 *
	 * @return self
	 */
	public function setProject(?IssueProject $project = null): self
	{
		$this->project = $project;
		return $this;
	}

	/**
	 * @return null|IssueTracker
	 */
	public function getTracker(): ?IssueTracker
	{
		return $this->tracker;
	}

	/**
	 * @param IssueTracker $tracker
	 *
	 * @return self
	 */
	public function setTracker(?IssueTracker $tracker = null): self
	{
		$this->tracker = $tracker;
		return $this;
	}

	/**
	 * @return null|IssueStatus
	 */
	public function getStatus(): ?IssueStatus
	{
		return $this->status;
	}

	/**
	 * @param IssueStatus $status
	 *
	 * @return self
	 */
	public function setStatus(?IssueStatus $status = null): self
	{
		$this->status = $status;
		return $this;
	}

	/**
	 * @return null|IssuePriority
	 */
	public function getPriority(): ?IssuePriority
	{
		return $this->priority;
	}

	/**
	 * @param IssuePriority $priority
	 *
	 * @return self
	 */
	public function setPriority(?IssuePriority $priority = null): self
	{
		$this->priority = $priority;
		return $this;
	}

	/**
	 * @return null|IssueAuthor
	 */
	public function getAuthor(): ?IssueAuthor
	{
		return $this->author;
	}

	/**
	 * @param IssueAuthor $author
	 *
	 * @return self
	 */
	public function setAuthor(?IssueAuthor $author = null): self
	{
		$this->author = $author;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getSubject(): ?string
	{
		return $this->subject;
	}

	/**
	 * @param string $subject
	 *
	 * @return self
	 */
	public function setSubject(?string $subject = null): self
	{
		$this->subject = $subject;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getDescription(): ?string
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 *
	 * @return self
	 */
	public function setDescription(?string $description = null): self
	{
		$this->description = $description;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getStartDate(): ?string
	{
		return $this->start_date;
	}

	/**
	 * @param string $start_date
	 *
	 * @return self
	 */
	public function setStartDate(?string $start_date = null): self
	{
		$this->start_date = $start_date;
		return $this;
	}

	/**
	 * @return null|int
	 */
	public function getDoneRatio(): ?int
	{
		return $this->done_ratio;
	}

	/**
	 * @param int $done_ratio
	 *
	 * @return self
	 */
	public function setDoneRatio(?int $done_ratio = null): self
	{
		$this->done_ratio = $done_ratio;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCreatedOn(): ?string
	{
		return $this->created_on;
	}

	/**
	 * @param string $created_on
	 *
	 * @return self
	 */
	public function setCreatedOn(?string $created_on = null): self
	{
		$this->created_on = $created_on;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getUpdatedOn(): ?string
	{
		return $this->updated_on;
	}

	/**
	 * @param string $updated_on
	 *
	 * @return self
	 */
	public function setUpdatedOn(?string $updated_on = null): self
	{
		$this->updated_on = $updated_on;
		return $this;
	}
}