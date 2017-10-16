<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/14
 */

namespace Narmafzam\ArchiveBundle\Entity\Interfaces;

interface DocumentInterface extends AttachableInterface
{
    public function addAttachment(DocumentAttachmentInterface $documentAttachment);

    public function removeAttachment(DocumentAttachmentInterface $documentAttachment);
}