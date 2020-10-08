<?php

namespace AppBundle\Controller\Site;

use AppBundle\Entity\Tag;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TagController extends Controller
{
    /**
     * Matches /tags exactly
     *
     * @Route("/tags", name="tags_index")
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository(Tag::class);

        $tags = $repository->findAll();

        $list = [];

        foreach ($tags as $tag) {
            $list[] = [
                'id' => $tag->getId(),
                'name' => $tag->getName(),
            ];
        }

        $data = [
            'tags' => $list
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }
}