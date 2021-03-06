<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/28
 */

namespace Narmafzam\ArchiveBundle\ViewModel\Interfaces;

use Narmafzam\ArchiveBundle\Entity\Interfaces\DocumentInterface;
use Symfony\Component\Form\FormInterface;

interface DocumentEditInterface extends EditInterface
{
    public function __construct(FormInterface $form, DocumentInterface $document);
}