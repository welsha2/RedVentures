<?php

namespace Rv\SearsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CMSType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pageId')
            ->add('pageTitle')
            ->add('content', null, array("attr" => array("class" => "tinymce")))
            ->add('secondaryContent', null, array("attr" => array("class" => "tinymce")))
            ->add('thirdContent', null, array("attr" => array("class" => "tinymce")))
            ->add('fourthContent', null, array("attr" => array("class" => "tinymce")))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rv\SearsBundle\Entity\CMS'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rv_searsbundle_cms';
    }
}
