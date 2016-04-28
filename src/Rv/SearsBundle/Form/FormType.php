<?php

namespace Rv\SearsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('phoneNumber')
            ->add('altPhone', 'text', array(
                    'required' => false,
                ))
            ->add('zipCode')
            //->add('apptDate', null, array('date_widget' => 'single_text', 'date_format' => 'M-d-y'))
            ->add('apptDate', 'date', array(
                    'widget' => 'choice',
                    'format' => 'd/M/y',
                    'years' => range(date('y'), date('y')+5),
                    'required' => false,
                ))
            ->add('apptTime', 'choice', array(
                    'choices' => array(
                        "10AM", 
                        "12PM",
                        "2PM",
                        "4PM",
                        "6PM",
                        "8PM"),
                    'required' => false,
                    'multiple' => false,
                ))
            
            ->add('productInterest', 'choice', array(
                'choices' => array(
                    'Heating and Cooling Systems' => 'Heating and Cooling Systems',
                    'Kitchen Repairs' => 'Kitchen Repairs',
                    'Bathrooms' => 'Bathrooms',
                    'Doors' => 'Doors',
                    'Siding' => 'Siding',
                    'Windows' => 'Windows',
                    'Roofing' => 'Roofing'),
                'multiple' => true,
                'expanded' => true,
                'required' => false,

        ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rv\SearsBundle\Entity\Form'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rv_searsbundle_form';
    }
}
