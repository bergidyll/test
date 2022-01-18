<?php

namespace App\Controller;

use App\Entity\Parzellen;
use App\Entity\Mitglieder;
use App\Entity\Ablesung;

use App\Form\ParzellenType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ParzellenController extends AbstractController
{
    /**
     * @Route("/parzellen", name="parzellen")
     */
    public function index(): Response
    {
        $parzellen = $this->getDoctrine()->getRepository(Parzellen::class)->findAll();

        return $this->render('parzellen/index.html.twig', [
            'parzellen' => $parzellen,
        ]);
    }

    /**
     * @Route("/parzelle/details/{id}", name="parzelle_details")
     */
    public function show(int $id): Response
    {
        $parzellen = $this->getDoctrine()
            ->getRepository(Parzellen::class)
            ->find($id);

        if (!$parzellen) {
            throw $this->createNotFoundException(
                'Es gibt keinen Parzelle mit der ID '.$id
            );
        }

        return $this->render('parzellen/details.html.twig', [
            'parzellen' => $parzellen,
        ]);
    }


    /**
    * @Route("parzelle/neu", name="parzelle_neu", methods={"GET","POST"})
    */
    public function create(Request $request): Response
    {
        $parzellen = new Parzellen();

        $date = new \DateTime('@'.strtotime('now'));
        $parzellen->setCreatedat($date);
        $parzellen->setUpdatedat($date);


        $form = $this->createForm(ParzellenType::class, $parzellen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $parzellen = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($parzellen);
            $entityManager->flush();

            return $this->redirectToRoute('parzelle_details', [
                'id' => $parzellen->getId(),
            ]);        }

        return $this->render('parzellen/neu.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
    * @Route("parzelle/bearbeiten/{id}", name="parzelle_bearbeiten", methods={"GET","POST"})
    */
    public function edit(Request $request, Parzellen $parzellen): Response
    {

        $date = new \DateTime('@'.strtotime('now'));
        $createDate = $parzellen->getCreatedat();
        $parzellen->setCreatedat($createDate);

        $form = $this->createForm(ParzellenType::class, $parzellen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->getDoctrine()->getManager()->flush();

            $this->addFlash(
                'success',
                'Die Änderungen wurden gespeichert.'
            );

            return $this->redirectToRoute('parzelle_details', [
                'id' => $parzellen->getId(),
            ]);
        }

        return $this->render('parzellen/bearbeiten.html.twig', [
            'parzellen' => $parzellen,
            //'mitglied' => $mitglied,
            'form' => $form->createView(),
        ]);
    }

    /**
    * @Route("parzelle/loeschen/{id}", name="parzelle_loeschen", methods={"GET","POST"})
    */
    public function deleteParzelle(Parzellen $parzellen)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $parzellen = $entityManager->getRepository(Parzellen::class)->find($parzellen);

        $this->addFlash(
            'success',
            'Das Mitglied wurde gelöscht.'
        );

        $entityManager->remove($parzellen);
        $entityManager->flush();

        return $this->redirectToRoute('parzellen');
    }







}
