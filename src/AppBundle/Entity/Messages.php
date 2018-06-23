<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="messages")
 */
class Messages
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     *
     * @ORM\Column(type="text"    ,nullable=false)
     */

    protected $message;




    /**
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_diffuser_id", referencedColumnName="id")
     */

    protected $user_diffuser;

    /**
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_receiver_id", referencedColumnName="id")
     */

    protected $user_receiver;




    /**
     * @ORM\Column(type="datetime")
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updatedAt;


    public function __construct()
    {

        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();

    }

    /**
     * @ORM\PreUpdate()
     */
    public function preUpdate()
    {
        $this->updatedAt = new \DateTime();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }



    /**
     * @return mixed
     */
    public function getUserDiffuser()
    {
        return $this->user_diffuser;
    }

    /**
     * @param mixed $user_diffuser
     */
    public function setUserDiffuser($user_diffuser)
    {
        $this->user_diffuser = $user_diffuser;
    }

    /**
     * @return mixed
     */
    public function getUserReceiver()
    {
        return $this->user_receiver;
    }

    /**
     * @param mixed $user_receiver
     */
    public function setUserReceiver($user_receiver)
    {
        $this->user_receiver = $user_receiver;
    }


    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    public function __toString()
    {
        return $this->getMessage();
    }


}