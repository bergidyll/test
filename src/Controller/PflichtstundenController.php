<?php

namespace App\Controller;

use App\Entity\Pflichtstunden;
use App\Entity\Mitglieder;
use App\Entity\Verein;

use App\Form\PflichtstundenType;

use Doctrine\ORM\EntityManagerInterface;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PflichtstundenController extends AbstractController
{
    /**
     * @Route("/pflichtstunden", name="pflichtstunden")
     */
    public function index(): Response
    {
        $pflichtstunden = $this->getDoctrine()->getRepository(Pflichtstunden::class)->findAll();
        $verein = $this->getDoctrine()->getRepository(Verein::class)->findOneById(1);
        $mitglieder = $this->getDoctrine()->getRepository(Mitglieder::class)->findAll();


        return $this->render('pflichtstunden/index.html.twig', [
            'pflichtstunden' => $pflichtstunden,
            'verein' => $verein,
            'mitglieder' => $mitglieder,
        ]);
    }

    /**
    * @Route("pflichtstunden/neu", name="pflichtstunden_neu", methods={"GET","POST"})
    */
    public function create(Request $request): Response
    {
        $pflichtstunden = new Pflichtstunden();
        $form = $this->createForm(PflichtstundenType::class, $pflichtstunden);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $pflichtstunden = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pflichtstunden);
            $entityManager->flush();

            return $this->redirectToRoute('pflichtstunden');
        }

        return $this->render('pflichtstunden/neu.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
    * @Route("pflichtstunden/bearbeiten/{id}", name="pflichtstunden_bearbeiten", methods={"GET","POST"})
    */
    public function edit(Request $request, Pflichtstunden $pflichtstunden): Response
    {
        $form = $this->createForm(PflichtstundenType::class, $pflichtstunden);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->getDoctrine()->getManager()->flush();

            $this->addFlash(
                'success',
                'Die Änderungen wurden gespeichert.'
            );

            return $this->redirectToRoute('pflichtstunden');
        }

        return $this->render('pflichtstunden/bearbeiten.html.twig', [
            'pflichtstunden' => $pflichtstunden,
            'form' => $form->createView(),
        ]);
    }

    /**
    * @Route("pflichtstunden/loeschen/{id}", name="pflichtstunden_loeschen", methods={"GET","POST"})
    */
    public function delete(Pflichtstunden $pflichtstunden)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $mitglieder = $entityManager->getRepository(Pflichtstunden::class)->find($pflichtstunden);

        $this->addFlash(
            'success',
            'Eintrag wurde gelöscht.'
        );

        $entityManager->remove($pflichtstunden);
        $entityManager->flush();

        return $this->redirectToRoute('pflichtstunden');
    }



}
