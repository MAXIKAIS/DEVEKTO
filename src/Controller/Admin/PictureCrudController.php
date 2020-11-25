<?php

namespace App\Controller\Admin;

use App\Entity\Picture;
use App\Entity\Portfolio;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class PictureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Picture::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id', 'picture_id')->onlyOnIndex(),
            AssociationField::new('portfolio', 'portfolio_id'),
            ImageField::new('imageFile')
                ->setFormType(VichImageType::class)
                ->setLabel('image'),
        ];
    }

}
