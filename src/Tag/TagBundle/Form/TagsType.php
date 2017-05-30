<?php

namespace Tag\TagBundle\Form;

use Doctrine\DBAL\Types\TextType;
use Doctrine\DBAL\Types\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TagsType extends AbstractType
{


    public function getParent()
    {
        return TextType::class;
    }
}
