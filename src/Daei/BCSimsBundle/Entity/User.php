<?php

namespace Daei\BCSimsBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * User
 *
 * @ORM\Entity
 * @ORM\Table(name="whobids_users")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=25, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=25, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_ip", type="string", length=45, nullable=true)
     */
    private $lastIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="failed_attempts", type="smallint", nullable=true)
     */
    private $failedAttempts;

    /**
     * @var integer
     *
     * @ORM\Column(name="created", type="integer", nullable=false)
     */
    private $created;
}
