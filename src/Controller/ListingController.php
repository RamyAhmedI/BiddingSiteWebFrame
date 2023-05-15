<?php

namespace App\Controller;

use App\Entity\Listing;
use App\Form\ListingType;
use App\Repository\ListingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[Route('/listing')]
#[IsGranted('ROLE_USER')]
#[IsGranted('ROLE_ADMIN')]
class ListingController extends AbstractController
{
    #[Route('/', name: 'app_listing_index', methods: ['GET'])]
    public function index(ListingRepository $listingRepository): Response
    {
        return $this->render('listing/index.html.twig', [
            'listings' => $listingRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_listing_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ListingRepository $listingRepository): Response
    {
        $listing = new Listing();
        $form = $this->createForm(ListingType::class, $listing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $listingRepository->save($listing, true);

            return $this->redirectToRoute('app_listing_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('listing/new.html.twig', [
            'listing' => $listing,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_listing_show', methods: ['GET'])]
    public function show(Listing $listing): Response
    {
        return $this->render('listing/show.html.twig', [
            'listing' => $listing,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_listing_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Listing $listing, ListingRepository $listingRepository): Response
    {
        $form = $this->createForm(ListingType::class, $listing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $listingRepository->save($listing, true);

            return $this->redirectToRoute('app_listing_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('listing/edit.html.twig', [
            'listing' => $listing,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_listing_delete', methods: ['POST'])]
    public function delete(Request $request, Listing $listing, ListingRepository $listingRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$listing->getId(), $request->request->get('_token'))) {
            $listingRepository->remove($listing, true);
        }

        return $this->redirectToRoute('app_listing_index', [], Response::HTTP_SEE_OTHER);
    }
}
