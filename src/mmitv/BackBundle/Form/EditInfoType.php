<?php

namespace mmitv\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EditInfoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('Valider',   'submit')
            ->add('Valider',   'submit')
        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mmitv_info_edit';
    }
    public function getParent()
    {
        return new InfoType();
    }
}
