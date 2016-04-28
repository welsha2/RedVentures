<?php

namespace Rv\SearsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CMS
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CMS
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="page_Id", type="string", length=255)
     */
    private $pageId;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="pageTitle", type="string", length=400)
     */
     private $pageTitle;
     
     /**
      * @var text
      * 
      * @ORM\Column(name="secondaryContent", type="text")
      */
      private $secondaryContent;
       
       /**
       * @var string
       * 
       * @ORM\Column(name="thirdContent", type="text")
       */
       private $thirdContent;
       
       /**
       * @var string
       * 
       * @ORM\Column(name="fourthContent", type="text")
       */
       private $fourthContent;
       


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
     * Set pageId
     *
     * @param string $pageId
     * @return CMS
     */
    public function setPageId($pageId)
    {
        $this->pageId = $pageId;

        return $this;
    }

    /**
     * Get pageId
     *
     * @return string 
     */
    public function getPageId()
    {
        return $this->pageId;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return CMS
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * Set content
     *
     * @param string $pageTitle
     * @return CMS
     */
     
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }
    
    /**
     * Set content
     *
     * @param string $secondaryTitle
     * @return CMS
     */
     
    public function setSecondaryTitle($secondaryTitle)
    {
        $this->secondaryTitle = $secondaryTitle;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getSecondaryTitle()
    {
        return $this->secondaryTitle;
    }
    
    /**
     * Set content
     *
     * @param string $secondaryContent
     * @return CMS
     */
     
    public function setSecondaryContent($secondaryContent)
    {
        $this->secondaryContent = $secondaryContent;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getSecondaryContent()
    {
        return $this->secondaryContent;
    }
    
    /**
     * Set content
     *
     * @param string $thirdContent
     * @return CMS
     */
     
    public function setThirdContent($thirdContent)
    {
        $this->thirdContent = $thirdContent;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getThirdContent()
    {
        return $this->thirdContent;
    }
    
    /**
     * Set content
     *
     * @param string $fourthContent
     * @return CMS
     */
     
    public function setFourthContent($fourthContent)
    {
        $this->fourthContent = $fourthContent;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getFourthContent()
    {
        return $this->fourthContent;
    }
    
    /**
     * Set content
     *
     * @param string $fifthContent
     * @return CMS
     */
     
    public function setFifthContent($fifthContent)
    {
        $this->fifthContent = $fifthContent;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getFifthContent()
    {
        return $this->fifthContent;
    }
    
    /**
     * Set content
     *
     * @param string $sixthContent
     * @return CMS
     */
     
    public function setSixthContent($sixthContent)
    {
        $this->sixthContent = $sixthContent;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getSixthContent()
    {
        return $this->sixthContent;
    }
    
    /**
     * Set content
     *
     * @param string $seventhContent
     * @return CMS
     */
     
    public function setSeventhContent($seventhContent)
    {
        $this->seventhContent = $seventhContent;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getSeventhContent()
    {
        return $this->seventhContent;
    }
    
    /**
     * Set content
     *
     * @param string $eighthContent
     * @return CMS
     */
     
    public function setEighthContent($eighthContent)
    {
        $this->eighthContent = $eighthContent;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getEighthContent()
    {
        return $this->eighthContent;
    }
    
}
