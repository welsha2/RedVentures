<?php

namespace Rv\SearsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Rv\SearsBundle\Entity\Form;
use Rv\SearsBundle\Form\FormType;
use Rv\SearsBundle\Controller\FormController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:index.html.twig")
     */
    public function indexAction()
    {
         $pageId = "home";
    }
    
     /**
     * Displays the Bathroom page
     *
     * @Route("/bathrooms", name="bathrooms")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:bathrooms.html.twig")
     */
    
    public function bathroomsAction()
    {
          $pageId = "bathrooms";
    }
    
     /**
     * Displays the Windows page
     *
     * @Route("/windows", name="windows")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:windows.html.twig")
     */
    
    public function windowsAction()
    {
          $pageId = "windows";
    }
    
     /**
     * Displays the Heating and Cooling page
     *
     * @Route("/heatingandcooling", name="heatingandcooling")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:heatingandcooling.html.twig")
     */
    
    public function heatingAction()
    {
          $pageId = "heatingandcooling";
    }
    
    /**
     * Displays the Siding page
     *
     * @Route("/siding", name="siding")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:siding.html.twig")
     */
    
    public function sidingAction()
    {
          $pageId = "siding";
    }
    
    /**
     * Displays the Kitchen page
     *
     * @Route("/kitchen", name="kitchen")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:kitchens.html.twig")
     */
    
    public function kitchenAction()
    {
          $pageId = "kitchen";
    }
    
    /**
     * Displays the Doors page
     *
     * @Route("/doors", name="doors")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:doors.html.twig")
     */
    
    public function doorsAction()
    {
          $pageId = "doors";
    }
    
    /**
     * Displays the Roofing page
     *
     * @Route("/roofing", name="roofing")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:roofing.html.twig")
     */
    
    public function roofingAction()
    {
          $pageId = "roofing";
    }
    
     /**
     * Displays the Bathroom-installation page
     *
     * @Route("/bathroom-installation", name="bathroom-installation")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:bathrooms-installation.html.twig")
     */
     
     
    public function bathroomsinstallationAction()
    {
          $pageId = "bathroominstallation";
    }
    
    
      /**
     * Displays the Doors-exterior page
     *
     * @Route("/doors-exterior", name="doors-exterior")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:doors-exterior.html.twig")
     */
     
    public function doorsexteriorAction()
    {
          $pageId = "doorsexterior";
    }
    
    
       /**
     * Displays the Doors-garage page
     *
     * @Route("/doors-garage", name="doors-garage")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:doors-garage.html.twig")
     */
     
    public function doorgarageAction()
    {
          $pageId = "doorgarage";
    }
    
    
         /**
     * Displays the Doors-installation page
     *
     * @Route("/doors-installation", name="doors-installation")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:doors-installation.html.twig")
     */
     
    public function doorinstallationAction()
    {
          $pageId = "doorinstallation";
    }
    
    /**
     * Displays the Heatingandcooling-intallation page
     *
     * @Route("/heatingandcooling-installation", name="heatingandcooling-installation")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:heatingandcooling-installation.html.twig")
     */
     
    public function heatingandcoolinginstallationAction()
    {
          $pageId = "heatingandcoolinginstallation";
    }
    
    /**
     * Displays the Kitchen-cabinet page
     *
     * @Route("/kitchen-cabinet", name="kitchen-cabinet")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:kitchen-cabinet.html.twig")
     */
     
    public function kitchencabinetAction()
    {
          $pageId = "kitchencabinet";
    }
    
    /**
     * Displays the Kitchen-countertop page
     *
     * @Route("/kitchen-countertop", name="kitchen-countertop")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:kitchen-countertop.html.twig")
     */
     
    public function kitchencountertopAction()
    {
          $pageId = "kitchencountertop";
    }
    
    /**
     * Displays the Kitchen-intallation page
     *
     * @Route("/kitchen-installation", name="kitchen-installation")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:kitchen-installation.html.twig")
     */
     
    public function kitcheninstallationAction()
    {
          $pageId = "kitcheninstallation";
    }
    
    /**
     * Displays the Kitchen-remodel page
     *
     * @Route("/kitchen-remodel", name="kitchen-remodel")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:kitchen-remodel.html.twig")
     */
     
    public function kitchenremodelAction()
    {
          $pageId = "kitchenremodel";
    }
    
    /**
     * Displays the Roofing-intallation page
     *
     * @Route("/roofing-installation", name="roofing-installation")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:roofing-installation.html.twig")
     */
     
    public function roofinginstallationAction()
    {
          $pageId = "roofinginstallation";
    }
    
    /**
     * Displays the Roofing-options page
     *
     * @Route("/roofing-options", name="roofing-options")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:roofing-options.html.twig")
     */
     
    public function roofingoptionsAction()
    {
          $pageId = "roofingoptions";
    }
    
    /**
     * Displays the Siding-customize page
     *
     * @Route("/siding-customize", name="siding-customize")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:siding-customize.html.twig")
     */
     
    public function sidingcustomizeAction()
    {
          $pageId = "sidingcustomizeinstallation";
    }
    
    /**
     * Displays the Siding-intallation page
     *
     * @Route("/siding-installation", name="siding-installation")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:siding-installation.html.twig")
     */
     
    public function sidinginstallationAction()
    {
          $pageId = "sidinginstallation";
    }
    
    /**
     * Displays the Siding-productselection page
     *
     * @Route("/siding-productselection", name="siding-productselection")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:siding-productselection.html.twig")
     */
     
    public function sidingproductselectionAction()
    {
          $pageId = "sidingproductselection";
    }
    
    /**
     * Displays the Windows-intallation page
     *
     * @Route("/windows-installation", name="windows-installation")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:windows-installation.html.twig")
     */
     
    public function windowsinstallationAction()
    {
          $pageId = "windowsinstallation";
    }
    
    /**
     * Displays the Windows-productselection page
     *
     * @Route("/windows-productselection", name="windows-productselection")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:windows-productselection.html.twig")
     */
     
    public function windowsselectionAction()
    {
          $pageId = "windowsselection";
    }
    
    /**
     * Displays the Terms page
     *
     * @Route("/terms", name="terms")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:terms.html.twig")
     */
     
    public function termsAction()
    {
          $pageId = "terms";
    }
    
    /**
     * Displays the Lisence page
     *
     * @Route("/lisence", name="lisence")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:lisence.html.twig")
     */
     
    public function lisenceAction()
    {
          $pageId = "lisence";
    }
    
    /**
     * Displays the Satisfaction page
     *
     * @Route("/satisfaction", name="satisfaction")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:satisfaction.html.twig")
     */
     
    public function satisfactionAction()
    {
          $pageId = "satisfaction";
    }
    
    /**
     * Displays the Privacy page
     *
     * @Route("/privacy", name="privacy")
     * @Method("GET")
     * @Template("RvSearsBundle:Default:privacy.html.twig")
     */
     
    public function privacyAction()
    {
          $pageId = "privacy";
    }
    
    /**
    * @Route("/termsdownload", name="terms-download")
    **/
    public function downloadFileActionTerms(){
        $response = new BinaryFileResponse('files/Terms-of-Service.pdf');
        $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT,'Terms-of-Service.pdf');
        return $response;
    }
    
    /**
    * @Route("/liscensedownload", name="liscense-download")
    **/
    public function downloadFileActionLiscense(){
        $response = new BinaryFileResponse('files/Liscense-Information.pdf');
        $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT,'Liscense-Information.pdf');
        return $response;
    }
    
    /**
    * @Route("/satisfactiondownload", name="satisfaction-download")
    **/
    public function downloadFileActionSatisfaction(){
        $response = new BinaryFileResponse('files/Satisfaction-Guaranteed.pdf');
        $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT,'Satisfaction-Guaranteed.pdf');
        return $response;
    }
    
    /**
    * @Route("/privacydownload", name="privacy-download")
    **/
    public function downloadFileActionPrivacy(){
        $response = new BinaryFileResponse('files/Privacy-Policy.pdf');
        $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT,'Privacy-Policy.pdf');
        return $response;
    }
    
    public function loadContentAction($pageId)
    {
        $content = $this -> getDoctrine()
            ->getRepository('RvSearsBundle:CMS')
            ->findOneByPageId($pageId);
            
        if ($content == NULL)
        {
            return "Error. Content not found.";
        }
        else
        {
            return  new Response($content->getContent());
        }   
    }
    
    public function loadSecondaryContentAction($pageId)
    {
        $secondaryContent = $this -> getDoctrine()
            ->getRepository('RvSearsBundle:CMS')
            ->findOneByPageId($pageId);
            
        if ($secondaryContent == NULL)
        {
            return "Error. Content not found.";
        }
        else
        {
            return  new Response($secondaryContent->getSecondaryContent());
        }   
    }
    
    
    public function loadTitleAction($pageId)
    {
        $pageTitle = $this -> getDoctrine()
            ->getRepository('RvSearsBundle:CMS')
            ->findOneByPageId($pageId);
            
        if($pageTitle == NULL)
        {
            return "Error. Content not found.";
        }
        else
        {
            return new Response($pageTitle->getPageTitle());
        }
    }
    
    public function loadThirdContentAction($pageId)
    {
        $thirdContent = $this -> getDoctrine()
            ->getRepository('RvSearsBundle:CMS')
            ->findOneByPageId($pageId);
            
        if($thirdContent == NULL)
        {
            return "Error. Content not found.";
        }
        else
        {
            return new Response($thirdContent->getThirdContent());
        }
    }
    
    public function loadFourthContentAction($pageId)
    {
        $fourthContent = $this -> getDoctrine()
            ->getRepository('RvSearsBundle:CMS')
            ->findOneByPageId($pageId);
            
        if($fourthContent == NULL)
        {
            return "Error. Content not found.";
        }
        else
        {
            return new Response($fourthContent->getFourthContent());
        }
    }
}
