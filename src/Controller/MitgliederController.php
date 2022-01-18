<?php

namespace App\Controller;

use App\Entity\Mitglieder;
use App\Entity\Parzellen;
use App\Entity\Rechnungen;

use App\Form\MitgliederType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MitgliederController extends AbstractController
{
    /**
     * @Route("/mitglieder", name="mitglieder")
     */
    public function index(): Response
    {
        $mitglieder = $this->getDoctrine()->getRepository(Mitglieder::class)->findAll();

        return $this->render('mitglieder/index.html.twig', [
            'mitglieder' => $mitglieder,
        ]);
    }

    /**
    * @Route("mitglied/neu", name="mitglied_neu", methods={"GET","POST"})
    */
    public function create(Request $request): Response
    {
        $mitglieder = new Mitglieder();

        $date = new \DateTime('@'.strtotime('now'));
        $mitglieder->setCreatedat($date);
        $mitglieder->setUpdatedat($date);

        $form = $this->createForm(MitgliederType::class, $mitglieder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $mitglieder = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mitglieder);
            $entityManager->flush();

            return $this->redirectToRoute('mitglied_details', [
                'id' => $mitglieder->getId(),
            ]);        }

        return $this->render('mitglieder/neu.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
    * @Route("mitglied/bearbeiten/{id}", name="mitglied_bearbeiten", methods={"GET","POST"})
    */
    public function edit(Request $request, Mitglieder $mitglieder): Response
    {
        $date = new \DateTime('@'.strtotime('now'));
        $createDate = $mitglieder->getCreatedat();
        $mitglieder->setCreatedat($createDate);
        $mitglieder->setUpdatedat($date);

        $form = $this->createForm(MitgliederType::class, $mitglieder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->getDoctrine()->getManager()->flush();

            $this->addFlash(
                'success',
                'Die Änderungen wurden gespeichert.'
            );

            return $this->redirectToRoute('mitglied_details', [
                'id' => $mitglieder->getId(),
            ]);
        }

        return $this->render('mitglieder/bearbeiten.html.twig', [
            'mitglieder' => $mitglieder,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/mitglied/details/{id}", name="mitglied_details")
     */
    public function show(int $id): Response
    {
        $mitglieder = $this->getDoctrine()
            ->getRepository(Mitglieder::class)
            ->find($id);

        if (!$mitglieder) {
            throw $this->createNotFoundException(
                'Es gibt kein Mitglied mit der ID '.$id
            );
        }

        return $this->render('mitglieder/details.html.twig', [
            'mitglieder' => $mitglieder
        ]);
    }

    /**
    * @Route("mitglied/loeschen/{id}", name="mitglied_loeschen", methods={"GET","POST"})
    */
    public function deleteMember(Mitglieder $mitglieder)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $mitglieder = $entityManager->getRepository(Mitglieder::class)->find($mitglieder);

        $this->addFlash(
            'success',
            'Das Mitglied wurde gelöscht.'
        );

        $entityManager->remove($mitglieder);
        $entityManager->flush();

        return $this->redirectToRoute('mitglieder');
    }
}
