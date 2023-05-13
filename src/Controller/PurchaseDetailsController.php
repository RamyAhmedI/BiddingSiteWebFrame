<?php

namespace App\Controller;

use App\Entity\PurchaseDetails;
use App\Form\PurchaseDetailsType;
use App\Repository\PurchaseDetailsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/purchase/details')]
class PurchaseDetailsController extends AbstractController
{
    #[Route('/', name: 'app_purchase_details_index', methods: ['GET'])]
    public function index(PurchaseDetailsRepository $purchaseDetailsRepository): Response
    {
        return $this->render('purchase_details/index.html.twig', [
            'purchase_details' => $purchaseDetailsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_purchase_details_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PurchaseDetailsRepository $purchaseDetailsRepository): Response
    {
        $purchaseDetail = new PurchaseDetails();
        $form = $this->createForm(PurchaseDetailsType::class, $purchaseDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $purchaseDetailsRepository->save($purchaseDetail, true);

            return $this->redirectToRoute('app_purchase_details_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('purchase_details/new.html.twig', [
            'purchase_detail' => $purchaseDetail,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_purchase_details_show', methods: ['GET'])]
    public function show(PurchaseDetails $purchaseDetail): Response
    {
        return $this->render('purchase_details/show.html.twig', [
            'purchase_detail' => $purchaseDetail,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_purchase_details_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PurchaseDetails $purchaseDetail, PurchaseDetailsRepository $purchaseDetailsRepository): Response
    {
        $form = $this->createForm(PurchaseDetailsType::class, $purchaseDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $purchaseDetailsRepository->save($purchaseDetail, true);

            return $this->redirectToRoute('app_purchase_details_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('purchase_details/edit.html.twig', [
            'purchase_detail' => $purchaseDetail,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_purchase_details_delete', methods: ['POST'])]
    public function delete(Request $request, PurchaseDetails $purchaseDetail, PurchaseDetailsRepository $purchaseDetailsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$purchaseDetail->getId(), $request->request->get('_token'))) {
            $purchaseDetailsRepository->remove($purchaseDetail, true);
        }

        return $this->redirectToRoute('app_purchase_details_index', [], Response::HTTP_SEE_OTHER);
    }
}
