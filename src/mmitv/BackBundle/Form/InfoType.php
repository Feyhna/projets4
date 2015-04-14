<?php
/**
 * Created by PhpStorm.
 * User: Feyhna
 * Date: 14/04/2015
 * Time: 18:35
 */

namespace mmitv\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InfoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('infosType',    'text')
            ->add('infosContenu',    'text')
            ->add('Valider',   'submit')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'mmitv\BackBundle\Entity\Infos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mmitv_info';
    }
}
