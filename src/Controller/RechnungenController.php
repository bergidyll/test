<?php

namespace App\Controller;

use App\Entity\Rechnungen;
use App\Entity\Mitglieder;
use App\Entity\Parzellen;
use App\Entity\Pflichtstunden;
use App\Entity\Verein;

use App\Form\RechnungenType;

use Symfony\Component\Validator\Constraints\DateTime;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RechnungenController extends AbstractController
{
    /**
     * @Route("/rechnungen", name="rechnungen")
     */
    public function index(): Response
    {
        $rechnungen = $this->getDoctrine()->getRepository(Rechnungen::class)->findAll();
        $mitglieder = $this->getDoctrine()->getRepository(Mitglieder::class)->findAll();

        return $this->render('rechnungen/index.html.twig', [
            'rechnungen' => $rechnungen,
            'mitlgieder' => $mitglieder,
        ]);
    }

    /**
    * @Route("rechnungen/neu", name="rechnungen_neu", methods={"GET","POST"})
    */
    public function create(Request $request): Response
    {
        $rechnungen = new Rechnungen();

        $mitgliedId = $request->query->get('id');
        $rgType = $request->query->get('type');

        $mitglied = $this->getDoctrine()->getRepository(Mitglieder::class)->findOneBySomeField($mitgliedId);
        $pflichtstunden = $this->getDoctrine()->getRepository(Pflichtstunden::class)->findByYear($date);
        $verein = $this->getDoctrine()->getRepository(Verein::class)->findClubById(1);

        $date = new \DateTime('@'.strtotime('now'));
        $date->format('Y');

        $pachtzins = $mitglied->getParzelle()->getGroesse();

        $rgnr = $mitglied->getParzelle()->getNummer();


        $rechnungen->setRechnungsnummer($rgType . '-' . $date->format('Y') . '-' . $rgnr);
        $rechnungen->setRechnungstyp($rgType);
        $rechnungen->setFaelligkeitsdatum(new \DateTime('@'.strtotime('+ 2 months')));
        $rechnungen->setPachtzins($pachtzins);

        if (!$rechnungen->getDatum()) {
            $rechnungen->setDatum($date);
        }

        $form = $this->createForm(RechnungenType::class, $rechnungen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $rechnungen = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($rechnungen);
            $entityManager->flush();

            return $this->redirectToRoute('rechnungen', [
                'id' => $rechnungen->getId(),
            ]);
        }

        return $this->render('rechnungen/neu.html.twig', [
            'form' => $form->createView(),
            'mitgliedId' => $mitgliedId,
            'mitglied' => $mitglied,
            'pflichtstunden' => $pflichtstunden,
            'verein' => $verein
        ]);
    }

    /**
    * @Route("rechnungen/bearbeiten/{id}", name="rechnungen_bearbeiten", methods={"GET","POST"})
    */
    public function edit(Request $request, Rechnungen $rechnungen): Response
    {
        $rechnungen->setFaelligkeitsdatum($rechnungen->getFaelligkeitsdatum());

        $form = $this->createForm(RechnungenType::class, $rechnungen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->getDoctrine()->getManager()->flush();

            $this->addFlash(
                'success',
                'Die Änderungen wurden gespeichert.'
            );

            return $this->redirectToRoute('rechnungen', [
                'id' => $rechnungen->getId(),
            ]);
        }

        return $this->render('rechnungen/bearbeiten.html.twig', [
            'rechnungen' => $rechnungen,
            'form' => $form->createView(),
        ]);
    }

    /**
    * @Route("rechnungen/stornieren/{id}", name="rechnungen_stornieren", methods={"GET","POST"})
    */
    public function storno(Rechnungen $rechnungen)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $rechnungen = $entityManager->getRepository(Rechnungen::class)->find($rechnungen);

        if (!$rechnungen) {
            throw $this->createNotFoundException('No invoice found');
        }

        $this->addFlash(
            'success',
            'Die Rechnung wurde storniert.'
        );

        $entityManager->remove($rechnungen);
        $entityManager->flush();

        return $this->redirectToRoute('rechnungen');
    }






}
