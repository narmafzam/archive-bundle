<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Date: 2017/9/29
 */

namespace Narmafzam\ArchiveBundle\Entity;

use Narmafzam\ArchiveBundle\Entity\Traits\DeletedTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\DescriptionTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\IdTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\SubjectTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\TimestampableTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\TitleTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 */
class Contract
{
    use IdTrait;
    use TitleTrait;
    use DescriptionTrait;
    use SubjectTrait;
    use DeletedTrait;
    use TimestampableTrait;
}