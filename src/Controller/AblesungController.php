<?php

namespace App\Controller;

use App\Entity\Ablesung;
use App\Entity\Parzellen;
use App\Entity\Mitglieder;

use App\Form\AblesungType;

use Doctrine\ORM\Query\ResultSetMapping;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AblesungController extends AbstractController
{
    /**
     * @Route("/ablesungen", name="ablesungen")
     */
    public function index(): Response
    {
        $ablesungen = $this->getDoctrine()->getRepository(Ablesung::class)->findAll();
        $parzellen = $this->getDoctrine()->getRepository(Parzellen::class)->findAll();
        $mitglieder = $this->getDoctrine()->getRepository(Mitglieder::class)->findAll();

        return $this->render('ablesung/index.html.twig', [
            'ablesungen' => $ablesungen,
            'parzellen' => $parzellen,
            'mitglieder' => $mitglieder,
        ]);
    }

    /**
    * @Route("ablesungen/neu", name="ablesungen_neu", methods={"GET","POST"})
    */

    public function create(Request $request): Response
    {
        $ablesung = new Ablesung();

        $parzelle = $request->query->get('id');

        $dateNow = date('Y');
        $dateOld = new \DateTime('@'.strtotime('-1 years'));
        $dateOldFormat = $dateOld->format('Y');

        $parzelleArray = $this->getDoctrine()->getRepository(Ablesung::class)->findAblesungByParzelle($parzelle);

        $max = -9999999; //will hold max val
        $vorjahr = null; //will hold item with max val;

        foreach($parzelleArray as $k=>$v)
        {
            if($v['jahr']>$max)
            {
               $max = $v['jahr'];
               $vorjahr = $v;
            }
        }
        if ($vorjahr > 0) {
            $ablesung->setStromzaehlerstandAlt($vorjahr['stromzaehlerstand']);
            $ablesung->setStromzaehlernummerAlt($vorjahr['stromzaehlernummer']);
            $ablesung->setWasserstandAlt($vorjahr['wasserstand']);
            $ablesung->setWasserzaehlernummerAlt($vorjahr['wasserzaehlernummer']);
        //    $ablesung->setJahr($vorjahr['jahr' + 1]);
        }
        $form = $this->createForm(AblesungType::class, $ablesung);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if($ablesung->getStromzaehlertausch() == 0) {
                $ablesung->setStromzaehlernummer($ablesung->getStromzaehlernummerAlt());
                $ablesung->setWasserzaehlernummer($ablesung->getWasserzaehlernummerAlt());
            } else {
                $ablesung->setStromzaehlernummerAlt($ablesung->getStromzaehlernummer());
                $ablesung->setWasserzaehlernummerAlt($ablesung->getWasserzaehlernummer());
            }
            $ablesung->setStromdiff($ablesung->getStromzaehlerstand() - $ablesung->getStromzaehlerstandAlt());
            $ablesung->setWasserdiff($ablesung->getWasserstand() - $ablesung->getWasserstandAlt());
            $ablesung = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ablesung);
            $entityManager->flush();

            return $this->redirectToRoute('ablesungen');        }

        return $this->render('ablesung/neu.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
    * @Route("ablesung/bearbeiten/{id}", name="ablesung_bearbeiten", methods={"GET","POST"})
    */
    public function edit(Request $request, Ablesung $ablesung): Response
    {

        $form = $this->createForm(AblesungType::class, $ablesung);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $ablesung->setStromdiff($ablesung->getStromzaehlerstand() - $ablesung->getStromzaehlerstandAlt());
            $ablesung->setWasserdiff($ablesung->getWasserstand() - $ablesung->getWasserstandAlt());
            

            $this->getDoctrine()->getManager()->flush();

            $this->addFlash(
                'success',
                'Die Änderungen wurden gespeichert.'
            );

            return $this->redirectToRoute('ablesungen', [
                'id' => $ablesung->getId(),
            ]);
        }

        return $this->render('ablesung/bearbeiten.html.twig', [
            'ablesung' => $ablesung,
            'form' => $form->createView(),
        ]);
    }

    /**
    * @Route("ablesung/loeschen/{id}", name="ablesung_loeschen", methods={"GET","POST"})
    */
    public function delete(Ablesung $ablesung)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $mitglieder = $entityManager->getRepository(Ablesung::class)->find($ablesung);

        $this->addFlash(
            'success',
            'Das Mitglied wurde gelöscht.'
        );

        $entityManager->remove($ablesung);
        $entityManager->flush();

        return $this->redirectToRoute('ablesungen');
    }



}
