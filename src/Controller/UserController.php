<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;

use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserController extends AbstractController
{
    /**
    * @Route("/user", name="user_index")
     */
    public function index(): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('user/index.html.twig', [
            'user' => $user
        ]);
    }

    /**
    * @Route("/user/create", name="user_create", methods={"GET", "POST"})
     */
    public function create(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            // encode the plain password
            $user->setPassword(
            $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash(
                'success',
                'Der Benutzer wurde erfolgreich angelegt.'
            );

            return $this->redirectToRoute('user_index');
        }
        return $this->render('user/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
    * @Route("user/edit/{id}", name="user_edit", methods={"GET","POST"})
    */
    public function edit(Request $request, User $user): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $role = $form->get('role')->getData();


        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $user->setRoles(array($role));
            $em->persist($user);
            $em->flush();



            $this->addFlash(
                'success',
                'Die Änderungen wurden gespeichert.'
            );

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'title' => 'edit user'
        ]);
    }

    /**
    * @Route("user/delete/{id}", name="user_delete", methods={"GET","POST"})
    */
    public function deleteUser(User $user)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($user);

        if (!$user) {
            throw $this->createNotFoundException('No guest found');
        }

        $this->addFlash(
            'success',
            'Der Benutzer wurde gelöscht.'
        );


        $entityManager->remove($user);
        $entityManager->flush();

        return $this->redirectToRoute('user_index');
    }


    /**
    *
    */
    public function getLogInUsers()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $user->getFirstname();

    }


}
