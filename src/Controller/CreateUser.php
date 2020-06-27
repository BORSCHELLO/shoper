<?php

namespace App\Controller;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;



class CreateUser extends AbstractController
{
    /**
     *@Route("/create_user", name="create_user")
     */
    public function createUser(Request $request)
    {
        $user = new User();
        $user->setLogin('');
        $user->setEmail('');
        $user->setPassword('');
        $user->setRoles('ROLE_USER');
        $user->setCity('');
        $user->setImage('');

        $form = $this->createFormBuilder($user)
            ->add('Login', TextType::class,
                array('attr' => array('class' => "form-control")))
            ->add('Email', EmailType::class,
                array('attr' => array('class' => "form-control")))
            ->add('Password', PasswordType::class,
                array('attr' => array('class' => "form-control")))
            ->add('City', TextType::class,
                array('attr' => array('class' => "form-control")))
            ->add('Image', TextType::class,
                array('attr' => array('class' => "form-control")))
            ->add('save', SubmitType::class,
                array('label' => 'Отправить', 'attr' => array('class' => "btn btn-success mt-2")))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->addFlash('success','Регистрация прошла успешно');
            return $this->redirectToRoute('main');
        }

        return $this->render('Main/createUser.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
