<?php

namespace Staffim\DateTimeBundle\Model;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

trait TimestampableTrait
{
    /**
     * @MongoDB\Field(type="date")
     *
     * @var \DateTimeInterface
     */
    private $createdAt;

    /**
     * @MongoDB\Field(type="date")
     *
     * @var \DateTimeInterface
     */
    private $updatedAt;

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTimeInterface $createdAt
     */
    public function setCreatedAt(\DateTimeInterface $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param \DateTimeInterface $updatedAt
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
}
