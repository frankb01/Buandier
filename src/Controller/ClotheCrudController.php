<?php

namespace App\Controller;

use App\Entity\Clothe;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ClotheCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Clothe::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
