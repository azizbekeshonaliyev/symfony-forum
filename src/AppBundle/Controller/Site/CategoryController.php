<?php

namespace AppBundle\Controller\Site;

use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CategoryController extends Controller
{
    /**
     * Matches /categories exactly
     *
     * @Route("/categories", name="categories_index")
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository(Category::class);

        $categories = $repository->findAll();

        $list = [];

        foreach ($categories as $category) {
            $list[] = [
                'id' => $category->getId(),
                'name' => $category->getName(),
            ];
        }

        $data = [
            'categories' => $list
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }
}