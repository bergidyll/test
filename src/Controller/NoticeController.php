<?php

namespace App\Controller;

use App\Entity\Notice;
use App\Entity\User;
use App\Form\NoticeType;

use Symfony\Component\Security\Core\Security;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NoticeController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(): Response
    {
        $notice = $this->getDoctrine()->getRepository(Notice::class)->findAll();
        $user = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('notice/index.html.twig', [
            'notice' => $notice,
            'user' => $user
        ]);
    }

    /**
    * @Route("dashboard/neu", name="dashboard_neu", methods={"GET","POST"})
    */
    public function create(Request $request): Response
    {
        $notice = new Notice();


        $date = new \DateTime('@'.strtotime('now'));
        $user = $this->get('security.token_storage')->getToken()->getUser();



        $username = $user->getLastname();
        //var_dump($username); exit;
        $notice->setCreateFrom($username);
        $notice->setCreatedAt($date);

        $form = $this->createForm(NoticeType::class, $notice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $notice = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($notice);
            $entityManager->flush();

            return $this->redirectToRoute('dashboard');
        }

        return $this->render('notice/neu.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
    * @Route("dashboard/bearbeiten/{id}", name="dashboard_bearbeiten", methods={"GET","POST"})
    */
    public function edit(Request $request, Notice $notice): Response
    {
        $form = $this->createForm(NoticeType::class, $notice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->getDoctrine()->getManager()->flush();

            $this->addFlash(
                'success',
                'Die Änderungen wurden gespeichert.'
            );

            return $this->redirectToRoute('dashboard');
        }

        return $this->render('dashboard/bearbeiten.html.twig', [
            'notice' => $notice,
            'form' => $form->createView(),
        ]);
    }

    /**
    * @Route("dashbard/loeschen/{id}", name="dashboard_loeschen", methods={"GET","POST"})
    */
    public function delete(Notice $notice)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $mitglieder = $entityManager->getRepository(Notice::class)->find($notice);

        $this->addFlash(
            'success',
            'Eintrag wurde gelöscht.'
        );

        $entityManager->remove($notice);
        $entityManager->flush();

        return $this->redirectToRoute('dashboard');
    }



}
