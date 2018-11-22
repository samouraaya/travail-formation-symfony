<?php

namespace CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use CoreBundle\Entity\Category;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProductType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('name', null, [
                    'label' => "Nom",
                    'label_attr' => [
                        'class' => "myClass",
                        'onClick' => 'test()',
                        'style' => 'color: red'
                    ],
                    'attr' => [
                        'class' => 'ClassTest',
                        'maxlength' => 10,
                    ],
//                    'required' => false
                ])
                ->add('price', null, [
                    "label" => "Prix",
                    "label_attr" => [
                        
                    ],
                    'required' => false
                ])
                ->add('qte', null, ['required' => false])
                ->add('test', null, [
                    'mapped' => false
                ])
                ->add('categorie', EntityType::class, [
                    'class' => Category::class,
                    'choice_label' => 'name',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                            ->orderBy('u.name', 'ASC');
                    },
                ])
                ->add('file', FileType::class, array('label' => 'Brochure (PDF file)'))
                ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CoreBundle\Entity\Product'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'corebundle_product';
    }


}
