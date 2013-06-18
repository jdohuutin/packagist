<?php

namespace Packagist\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="link_usage")
 */
class UsageLink extends PackageLink
{
    /**
     * @ORM\ManyToOne(targetEntity="Packagist\WebBundle\Entity\Version", inversedBy="usage")
     */
    protected $version;
}
