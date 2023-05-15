<?php

namespace App\Controller;

use App\Entity\ShippingDetails;
use App\Form\ShippingDetailsType;
use App\Repository\ShippingDetailsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

<<<<<<< HEAD
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[Route('/shipping/details')]
#[IsGranted('ROLE_USER')]
=======
#[Route('/shipping/details')]
>>>>>>> 2c972367fd192714e38dd911da82b8b54eea4b86
class ShippingDetailsController extends AbstractController
{
    #[Route('/', name: 'app_shipping_details_index', methods: ['GET'])]
    public function index(ShippingDetailsRepository $shippingDetailsRepository): Response
    {
        return $this->render('shipping_details/index.html.twig', [
            'shipping_details' => $shippingDetailsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_shipping_details_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ShippingDetailsRepository $shippingDetailsRepository): Response
    {
        $shippingDetail = new ShippingDetails();
        $form = $this->createForm(ShippingDetailsType::class, $shippingDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $shippingDetailsRepository->save($shippingDetail, true);

            return $this->redirectToRoute('app_shipping_details_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('shipping_details/new.html.twig', [
            'shipping_detail' => $shippingDetail,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_shipping_details_show', methods: ['GET'])]
    public function show(ShippingDetails $shippingDetail): Response
    {
        return $this->render('shipping_details/show.html.twig', [
            'shipping_detail' => $shippingDetail,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_shipping_details_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ShippingDetails $shippingDetail, ShippingDetailsRepository $shippingDetailsRepository): Response
    {
        $form = $this->createForm(ShippingDetailsType::class, $shippingDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $shippingDetailsRepository->save($shippingDetail, true);

            return $this->redirectToRoute('app_shipping_details_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('shipping_details/edit.html.twig', [
            'shipping_detail' => $shippingDetail,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_shipping_details_delete', methods: ['POST'])]
    public function delete(Request $request, ShippingDetails $shippingDetail, ShippingDetailsRepository $shippingDetailsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$shippingDetail->getId(), $request->request->get('_token'))) {
            $shippingDetailsRepository->remove($shippingDetail, true);
        }

        return $this->redirectToRoute('app_shipping_details_index', [], Response::HTTP_SEE_OTHER);
    }
}
