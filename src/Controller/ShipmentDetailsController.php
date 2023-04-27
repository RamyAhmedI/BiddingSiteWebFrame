<?php

namespace App\Controller;

use App\Entity\ShipmentDetails;
use App\Form\ShipmentDetailsType;
use App\Repository\ShipmentDetailsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[Route('/shipment/details')]
#[IsGranted('ROLE_USER')]
class ShipmentDetailsController extends AbstractController
{
    #[Route('/', name: 'app_shipment_details_index', methods: ['GET'])]
    public function index(ShipmentDetailsRepository $shipmentDetailsRepository): Response
    {
        return $this->render('shipment_details/index.html.twig', [
            'shipment_details' => $shipmentDetailsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_shipment_details_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ShipmentDetailsRepository $shipmentDetailsRepository): Response
    {
        $shipmentDetail = new ShipmentDetails();
        $form = $this->createForm(ShipmentDetailsType::class, $shipmentDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $shipmentDetailsRepository->save($shipmentDetail, true);

            return $this->redirectToRoute('app_shipment_details_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('shipment_details/new.html.twig', [
            'shipment_detail' => $shipmentDetail,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_shipment_details_show', methods: ['GET'])]
    public function show(ShipmentDetails $shipmentDetail): Response
    {
        return $this->render('shipment_details/show.html.twig', [
            'shipment_detail' => $shipmentDetail,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_shipment_details_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ShipmentDetails $shipmentDetail, ShipmentDetailsRepository $shipmentDetailsRepository): Response
    {
        $form = $this->createForm(ShipmentDetailsType::class, $shipmentDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $shipmentDetailsRepository->save($shipmentDetail, true);

            return $this->redirectToRoute('app_shipment_details_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('shipment_details/edit.html.twig', [
            'shipment_detail' => $shipmentDetail,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_shipment_details_delete', methods: ['POST'])]
    public function delete(Request $request, ShipmentDetails $shipmentDetail, ShipmentDetailsRepository $shipmentDetailsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$shipmentDetail->getId(), $request->request->get('_token'))) {
            $shipmentDetailsRepository->remove($shipmentDetail, true);
        }

        return $this->redirectToRoute('app_shipment_details_index', [], Response::HTTP_SEE_OTHER);
    }
}
