<?php

namespace App\Controller;

use App\Entity\MakeComment;
use App\Form\MakeCommentType;
use App\Repository\MakeCommentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[Route('/make/comment')]
#[IsGranted('ROLE_USER')]
#[IsGranted('ROLE_ADMIN')]
class MakeCommentController extends AbstractController
{
    #[Route('/', name: 'app_make_comment_index', methods: ['GET'])]
    public function index(MakeCommentRepository $makeCommentRepository): Response
    {
        return $this->render('make_comment/index.html.twig', [
            'make_comments' => $makeCommentRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_make_comment_new', methods: ['GET', 'POST'])]
    public function new(Request $request, MakeCommentRepository $makeCommentRepository): Response
    {
        $makeComment = new MakeComment();
        $form = $this->createForm(MakeCommentType::class, $makeComment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $makeCommentRepository->save($makeComment, true);

            return $this->redirectToRoute('app_make_comment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('make_comment/new.html.twig', [
            'make_comment' => $makeComment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_make_comment_show', methods: ['GET'])]
    public function show(MakeComment $makeComment): Response
    {
        return $this->render('make_comment/show.html.twig', [
            'make_comment' => $makeComment,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_make_comment_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, MakeComment $makeComment, MakeCommentRepository $makeCommentRepository): Response
    {
        $form = $this->createForm(MakeCommentType::class, $makeComment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $makeCommentRepository->save($makeComment, true);

            return $this->redirectToRoute('app_make_comment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('make_comment/edit.html.twig', [
            'make_comment' => $makeComment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_make_comment_delete', methods: ['POST'])]
    public function delete(Request $request, MakeComment $makeComment, MakeCommentRepository $makeCommentRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$makeComment->getId(), $request->request->get('_token'))) {
            $makeCommentRepository->remove($makeComment, true);
        }

        return $this->redirectToRoute('app_make_comment_index', [], Response::HTTP_SEE_OTHER);
    }
}
