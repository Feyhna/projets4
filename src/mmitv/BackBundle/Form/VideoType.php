<?php

namespace mmitv\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VideoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('videoType', 'text')
            ->add('videoHref', 'text')
            ->add('videoNom', 'text')
            ->add('videoPlateforme', 'choice', array(
                'choices'=>array('youtube'=> 'Youtube', 'dailymotion'=>'Dailymotion')
            ))
            ->add('videoAjout', 'date', array(
                'data' => new \DateTime('now')
            ))
            ->add('save', 'submit')

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'mmitv\BackBundle\Entity\Video'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mmitv_backbundle_video';
    }
}
