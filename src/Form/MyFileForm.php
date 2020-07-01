<?php


namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints;

class MyFileForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('my_file', FileType::class, [
            'constraints' => [
                new Constraints\File([
                    'mimeTypes' => [
                        'application/json'
                    ],
                ])
            ]
        ])
        ->add('save', SubmitType::class);
    }

}
