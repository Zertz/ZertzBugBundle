<?php

namespace Zertz\BugBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Bug
 *
 * @ORM\Table(name="Bug")
 * @ORM\Entity
 */
class Bug
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Zertz\BugBundle\Entity\BugType")
     * @ORM\JoinColumn(name="Type_ID", referencedColumnName="ID", nullable=false)
     */
    private $type;

    /**
     * @ORM\Column(name="Problem", type="string", length=255, nullable=false)
     */
    private $problem;

    /**
     * @ORM\Column(name="Description", type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(name="Fixed", type="boolean", nullable=false)
     */
    private $fixed;
    
    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    protected $createdAt;
    
    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $updatedAt;
    
    /**
     * @Gedmo\Timestampable(on="change", field="fixed", value=1)
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $fixedAt;
    
    public function __toString() {
        return $this->problem ?: '';
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Bug
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set problem
     *
     * @param string $nom
     * @return Bug
     */
    public function setProblem($problem)
    {
        $this->problem = $problem;
    
        return $this;
    }

    /**
     * Get problem
     *
     * @return string 
     */
    public function getProblem()
    {
        return $this->problem;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Bug
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set fixed
     *
     * @param string $fixed
     * @return Bug
     */
    public function setFixed($fixed)
    {
        $this->fixed = $fixed;
    
        return $this;
    }

    /**
     * Get fixed
     *
     * @return string 
     */
    public function getFixed()
    {
        return $this->fixed;
    }
}