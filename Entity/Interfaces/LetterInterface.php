<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/14
 */

namespace Narmafzam\ArchiveBundle\Entity\Interfaces;

interface LetterInterface extends AttachableInterface
{
    public function addAttachment(LetterAttachmentInterface $letterAttachment);

    public function removeAttachment(LetterAttachmentInterface $letterAttachment);
}