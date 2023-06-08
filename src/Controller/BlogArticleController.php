<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogArticleController extends AbstractController
{
    #[Route('/blog/{id}', name: 'app_blog_article')]
    public function article(int $id, ArticleRepository $repo): Response
    {
        $article = $repo->find($id);
        return $this->render('blog_article/blogArticle.html.twig', [
            'article' => $article,
        ]);
    }
}
