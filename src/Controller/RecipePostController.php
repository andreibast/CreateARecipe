<?php

namespace App\Controller;

use App\Entity\RecipePost;
use App\Form\NewRecipeType;
use App\Repository\RecipePostRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/recipepost", name="recipepost.");
 * Class RecipePostController
 * @package App\Controller
 */


class RecipePostController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param RecipePostRepository $recipePostRepository
     * @param Request $request
     * @return Response
     */
    public function index(RecipePostRepository $recipePostRepository, Request $request){
        //THE POST LIST
        $recipePosts = $recipePostRepository->findAll();
        $recipePost = new RecipePost();


        //THE FORM
        $recipeForm = $this->createForm(NewRecipeType::class, $recipePost);
        $recipeForm->handleRequest($request);

        if($recipeForm->isSubmitted()  && $recipeForm->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($recipePost);
            $em->flush();
            $this->addFlash('recipesuccess', 'A new recipe has been added to the database!');
            return $this->redirect($this->generateUrl('recipepost.index'));
        }

        //PRINT EVERYTHING HERE
        return $this->render('recipe_post/index.html.twig', [
            'recipeposts' => $recipePosts,
            'recipeform' => $recipeForm->createView()
        ]);

    }


    /**
     * @Route("/show/{id}", name="show")
     * @param RecipePost $recipePost
     * @return Response
     */
    public function show(RecipePost $recipePost){

        return $this->render('recipe_post/show.html.twig', [
            'recipepost' => $recipePost
        ]);
    }


    /**
     * @Route("/remove/{id}", name="remove")
     * @param RecipePost $recipePost
     */
    public function remove(RecipePost $recipePost){

        $em= $this->getDoctrine()->getManager();
        $em->remove($recipePost);
        $em->flush();

        $this->addFlash('success', 'The selected recipe has been removed!');

        return $this->redirect($this->generateUrl('recipepost.index'));
    }


}
