<?php

namespace App\Form;

use App\Entity\RecipePost;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewRecipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('ingredients', TextareaType::class)
            ->add('guidelines', TextareaType::class)
            ->add('preparationtime')
            ->add('servings')
            ->add('recipeprice')
            ->add('save', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-danger col-md-12'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RecipePost::class,
        ]);
    }
}
