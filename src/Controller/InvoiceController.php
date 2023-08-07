<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\Order;
use App\Form\InvoiceFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class InvoiceController extends AbstractController
{
    public function __construct(private UrlGeneratorInterface $urlGenerator)
        {
        }
    #[Route('/invoice', name: 'app_invoice')]
    public function index(Request $req): Response
    {
        $inv = new Order();
        $form = $this->createForm(InvoiceFormType::class, $inv);
        $form->handleRequest($req);

        if($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $em->persist($data);
            $em->flush();
        
        return new RedirectResponse($this->urlGenerator->generate('app_ds_Invoice'));

        }

        return $this->render('invoice/index.html.twig', [
            'invoice_form' => $form->createView(),
        ]);
    }

    #[Route('/invoice/ds', name: 'app_ds_Invoice')]
    public function list_inv(EntityManagerInterface $em): Response
    {
        $query = $em->createQuery('SELECT inv FROM App\Entity\Order inv');
        $lSp = $query->getResult();
        return $this->render('invoice/list.html.twig', [
            "data"=>$lSp
        ]);
    }

    #[Route('/invoice/{id}/delete', name: 'app_delete_invoice')]
    public function delete(EntityManagerInterface $em, int $id, Request $req): Response
        {
            $inv = $em->find(Order::class, $id); 
            $em->remove($inv);
            $em->flush();
            return new RedirectResponse($this->urlGenerator->generate('app_ds_Invoice'));     
        }
}