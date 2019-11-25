<?php

namespace App\Controller;

use App\Calculator\SalaryCalculator;
use App\Form\Type\UserType;
use App\Model\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class SalaryCalculatorController extends AbstractController
{
    public function calculate(Request $request)
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            (new SalaryCalculator())->calculate($user);
        }

        return $this->render('calculate.html.twig', [
            'form' => $form->createView(),
            'user' => $user
        ]);
    }
}