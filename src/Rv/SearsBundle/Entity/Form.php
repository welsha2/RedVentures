<?php

namespace Rv\SearsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Form
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Rv\SearsBundle\Entity\FormRepository")
 */
class Form
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
     * @ORM\Column(name="firstName", type="string", length=20)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=20)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNumber", type="string", length=15)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="altPhone", type="string", length=15)
     */
    private $altPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="zipCode", type="string", length=5)
     */
    private $zipCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="apptDate", type="date")
     */
    private $apptDate;

    /**
     * @var array
     *
     * @ORM\Column(name="apptTime", type="array")
     */
    private $apptTime;

    /**
     * @var array
     *
     * @ORM\Column(name="productInterest", type="array")
     */
    private $productInterest;


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
     * Set firstName
     *
     * @param string $firstName
     * @return Form
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Form
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return Form
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set altPhone
     *
     * @param string $altPhone
     * @return Form
     */
    public function setAltPhone($altPhone)
    {
        $this->altPhone = $altPhone;

        return $this;
    }

    /**
     * Get altPhone
     *
     * @return string 
     */
    public function getAltPhone()
    {
        return $this->altPhone;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     * @return Form
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set apptDate
     *
     * @param \DateTime $apptDate
     * @return Form
     */
    public function setApptDate($apptDate)
    {
        $this->apptDate = $apptDate;

        return $this;
    }

    /**
     * Get apptDate
     *
     * @return \DateTime 
     */
    public function getApptDate()
    {
        return $this->apptDate;
    }

    /**
     * Set apptTime
     *
     * @param array $apptTime
     * @return Form
     */
    public function setApptTime($apptTime)
    {
        $this->apptTime = $apptTime;

        return $this;
    }

    /**
     * Get apptTime
     *
     * @return array 
     */
    public function getApptTime()
    {
        return $this->apptTime;
    }

    /**
     * Set productInterest
     *
     * @param array $productInterest
     * @return Form
     */
    public function setProductInterest($productInterest)
    {
        $this->productInterest = $productInterest;

        return $this;
    }

    /**
     * Get productInterest
     *
     * @return array
     */
    public function getProductInterest()
    {
        
        return $this->productInterest;
    }
}
