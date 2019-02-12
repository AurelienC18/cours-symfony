<?php
/**
 * Created by PhpStorm.
 * User: aurel
 * Date: 12/02/2019
 * Time: 11:51
 */

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Recipe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class RecipeController extends AbstractController
{
    /**
     * @Route("/recipes/{categoryId}", name="recipes_show")
     */
    public function GetRecipes($categoryId)
    {
        $recipes = $this->getDoctrine()->getRepository(Recipe::class)->findByCategoryId($categoryId);
        return $this->render('recipes.html.twig', ['recipes' => $recipes]);
    }

    /**
     * @Route("/recipe/{id}/details", name="recipe_details_show")
     */
    public function GetRecipeDetails($id)
    {
        $recipe = $this->getDoctrine()->getRepository(Recipe::class)->find($id);
        return $this->render('recipes_details.html.twig', ['recipe' => $recipe]);
    }
}