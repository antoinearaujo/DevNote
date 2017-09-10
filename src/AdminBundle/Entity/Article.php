<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    
    /**
     * @var string
     *
     * @ORM\Column(name="titre1", type="string", length=255)
     */

    protected $titre1;

       /**
     * @var string
     *
     * @ORM\Column(name="etape1", type="string", length=255)
     */

    protected $etape1;

        /**
     * @var string
     *
     * @ORM\Column(name="titre2", type="string", length=255)
     */

    protected $titre2;

       /**
     * @var string
     *
     * @ORM\Column(name="etape2", type="string", length=255)
     */

    protected $etape2;

        /**
     * @var string
     *
     * @ORM\Column(name="titre3", type="string", length=255)
     */

    protected $titre3;

       /**
     * @var string
     *
     * @ORM\Column(name="etape3", type="string", length=255)
     */

    protected $etape3;


     /**
      * @ORM\OneToOne(targetEntity="AdminBundle\Entity\Image", cascade={"persist", "remove"})
      * @ORM\JoinColumn(nullable=true)
      */
    protected $image;




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
     * Set name
     *
     * @param string $name
     * @return Article
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    

    /**
     * Set titre1
     *
     * @param string $titre1
     * @return Article
     */
    public function setTitre1($titre1)
    {
        $this->titre1 = $titre1;

        return $this;
    }

    /**
     * Get titre1
     *
     * @return string 
     */
    public function getTitre1()
    {
        return $this->titre1;
    }

        /**
     * Set titre2
     *
     * @param string $titre2
     * @return Article
     */
    public function setTitre2($titre2)
    {
        $this->titre2 = $titre2;

        return $this;
    }

    /**
     * Get titre2
     *
     * @return string 
     */
    public function getTitre2()
    {
        return $this->titre2;
    }

    /**
     * Set titre3
     *
     * @param string $titre3
     * @return Article
     */
    public function setTitre3($titre3)
    {
        $this->titre3 = $titre3;

        return $this;
    }

    /**
     * Get titre3
     *
     * @return string 
     */
    public function getTitre3()
    {
        return $this->titre3;
    }


    /**
     * Set etape1
     *
     * @param string $etape1
     * @return Article
     */
    public function setEtape1($etape1)
    {
        $this->etape1 = $etape1;

        return $this;
    }

    /**
     * Get etape1
     *
     * @return string 
     */
    public function getEtape1()
    {
        return $this->etape1;
    }

    /**
     * Set etape2
     *
     * @param string $etape2
     * @return Article
     */
    public function setEtape2($etape2)
    {
        $this->etape2 = $etape2;

        return $this;
    }

    /**
     * Get etape2
     *
     * @return string 
     */
    public function getEtape2()
    {
        return $this->etape2;
    }


  /**
     * Set etape3
     *
     * @param string $etape3
     * @return Article
     */
    public function setEtape3($etape3)
    {
        $this->etape3 = $etape3;

        return $this;
    }

    /**
     * Get etape3
     *
     * @return string 
     */
    public function getEtape3()
    {
        return $this->etape3;
    }
    
      public function setImage(Image $image = null)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }
}
