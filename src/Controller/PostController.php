<?php
namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Post;

class PostController extends AbstractController
{
    #[Route('/post', name: 'app_post')]

    public function index(): Response

    {
         $id= 1;
        $title= "Les chats : Des animaux Fascinants";
        $content="some content here...";
        $author="Ounar Souhaila";
        $created_at ="2023-02-01";
        $updated_at="2023-02-01";
        $article1 = new Post($id,$title,$content,$author,$created_at,$updated_at);
        $id= 2;
        $title= "Les chats : Des animaux Fascinants";
        $content="some content here...";
        $author="Ounar Souhaila";
        $created_at ="2023-02-01";
        $updated_at="2023-02-01";
        $article2 = new Post($id,$title,$content,$author,$created_at,$updated_at);
        $posts = array($article1, $article2);
        return $this->render('post/index.html.twig',
        ['posts' => $posts]);

    }
}
?>