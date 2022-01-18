<?php

namespace App\Controller;


use App\Entity\Verein;
use App\Form\VereinType;

use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class VereinController extends AbstractController
{
    /**
     * @Route("/verein", name="verein")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/VereinController.php',
        ]);
    }

    /**
     * @Route("/verein/details/{id}", name="verein_details")
     */
    public function show(int $id): Response
    {
        $verein = $this->getDoctrine()
            ->getRepository(Verein::class)
            ->find($id);

        if (!$verein) {
            throw $this->createNotFoundException(
                'Es gibt keinen Verein mit der ID '.$id
            );
        }

        return $this->render('verein/details.html.twig', [
            'verein' => $verein
        ]);
    }

    /**
    * @Route("verein/bearbeiten/{id}", name="verein_bearbeiten", methods={"GET","POST"})
    */
    public function edit(Request $request, Verein $verein): Response
    {
        $form = $this->createForm(VereinType::class, $verein);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->getDoctrine()->getManager()->flush();

            $this->addFlash(
                'success',
                'Die Änderungen wurden gespeichert.'
            );

            return $this->redirectToRoute('verein_details', [
                'id' => $verein->getId(),
            ]);
        }

        return $this->render('verein/bearbeiten.html.twig', [
            'verein' => $verein,
            'form' => $form->createView(),
        ]);
    }



    /**
    * @Route("verein/neu", name="verein_neu", methods={"GET","POST"})
    */
    public function create(Request $request): Response
    {
        $verein = new Verein();
        $form = $this->createForm(VereinType::class, $verein);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $verein = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($verein);
            $entityManager->flush();

            return $this->redirectToRoute('verein_details', [
                'id' => $verein->getId(),
            ]);        }

        return $this->render('verein/neu.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
