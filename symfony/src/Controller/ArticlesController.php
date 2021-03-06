<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use App\Entity\Categoria;
use App\Repository\CategoriaRepository;
use App\Repository\UserRepository;
use App\Entity\Comentari;
use App\Form\ComentariType;


class ArticlesController extends AbstractController
{

    /**
     * METODE PER AFEGIR UN NOU ARTICLE
     * @Route("/new", name="article_new")
     */
    public function nouarticle(Request $request)
    {

        //Si hi ha un usuari loguejat i es ROLE_ADMIN
        if ($this->getUser() && in_array("ROLE_ADMIN", $this->getUser()->getRoles())) {

            //Crear Objecte Article i Form
            $article = new Article();
            $form = $this->createForm(ArticleType::class, $article);
            $form->handleRequest($request);

            //Si el formulari es enviat, captura les dades i pujar nou article a DB
            if ($form->isSubmitted() && $form->isValid()) {

                //Capturar dades del formulari i assignar-les al article
                $article->setAutor($this->getUser())
                    ->setDataPublicacio(new \DateTime());

                //Capturar el titol i convertir-lo a Slug amb lowercase i guions
                $text = $form->get('titol')->getData();

                $unwanted_array = array(
                    'Š' => 'S', 'š' => 's', 'Ž' => 'Z', 'ž' => 'z', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
                    'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U',
                    'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c',
                    'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
                    'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y', 'l·l' => 'l', " " => "-"
                );

                $slug = (strtr(strtolower($text), $unwanted_array));

                $article->setSlug($slug);

                //Capturar input type="text" (String) de camp meta i convertirlo a array
                $inputMetaTag = $form->get('meta_tag')->getData();
                $correccioTags = str_replace(', ', ',', $inputMetaTag);

                //Assignem a article els camps meta
                $article->setMetaTag($correccioTags);

                // VERSIO ANTERIOR ON AFEGIEM CATEGORIES DESDE FORM D'ARTICLE

                // //Capturem categoria del select del formulari
                // $categoria1 = $form->get('categoria1')->getData();
                // // //Si la categoria es "afegir nova categoria"
                // if ($form->get('categoria1')->getData()->getNom() == "afegir nova categoria") {

                //     //Creem nova categoria amb el que hi hagi al input "nova categoria"
                //     $afegirCategoria = new Categoria();
                //     $afegirCategoria->setNom($form->get('nova_categoria')->getData());
                //     $afegirCategoria->setLogo('default-logo.png');
                //     $afegirCategoria->setTipus('oculta');
                //     $entityManager->persist($afegirCategoria);
                //     //fem el cambiazo
                //     $categoria1 = $afegirCategoria;
                // }
                //Afegir les categories
                $article->addCategories($form->get('categoria1')->getData());

                if ($form->get('categoria2')->getData() != null) {
                    $article->addCategories($form->get('categoria2')->getData());
                }

                if ($form->get('categoria3')->getData() != null) {
                    $article->addCategories($form->get('categoria3')->getData());
                }
                //Persistir dades i pujar dades a DB
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($article);
                $entityManager->flush();

                return $this->redirectToRoute('article_detall', ['slug' => $slug]);
            }

            return $this->render('articles/form_nou_article.html.twig', [
                'formArticle' => $form->createView(),
            ]);
        }

        //Si no hi havia un ADMIN loguejat, per defecte, redirigir a homepage
        return $this->redirectToRoute('homepage');
    }

    /**
     * METODE PER EDITAR UN ARTICLE EXISTENT
     * @Route("/article/editar/{slug}", name="article_update", methods={"GET","POST"})
     */
    public function editarArticle($slug, Request $request, ArticleRepository $post_repo, CategoriaRepository $cat_repo)
    {

        //Obtenir dades de l'article i l'usuari actual
        $article = $post_repo->findOneBy(array('slug' => $slug));
        $categories = $article->getCategories();
        $usuari = $this->getUser();

        //Si hi ha un usuari loguejat i es l'autor del article o ROLE_ADMIN
        if ($usuari && (($usuari == $article->getAutor()) || in_array("ROLE_ADMIN", $usuari->getRoles()))) {

            //Crear formulari amb les dades del article obtingut
            $form = $this->createForm(ArticleType::class, $article);

            //Passar la Colecció de Categories als 3 camps del formulari
            $form->get('categoria1')->setData($categories[0]);

            if ($categories[1] != null) {
                $form->get('categoria2')->setData($categories[1]);
            }
            if ($categories[2] != null) {
                $form->get('categoria3')->setData($categories[2]);
            }

            $form->handleRequest($request);
            //Si el formulari es enviat, captura les dades i pujar nou article a DB
            if ($form->isSubmitted() && $form->isValid()) {

                //Capturar el titol i convertir-lo a Slug amb lowercase i guions
                $text = $form->get('titol')->getData();

                $unwanted_array = array(
                    'Š' => 'S', 'š' => 's', 'Ž' => 'Z', 'ž' => 'z', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
                    'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U',
                    'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c',
                    'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
                    'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y', 'l·l' => 'l', " " => "-"
                );

                $slug = (strtr(strtolower($text), $unwanted_array));

                //Assignar al article l'Slug creat
                $article->setSlug($slug);

                //Capturar input type="text" (String) de camp meta i convertirlo a array
                $inputMetaTag = $form->get('meta_tag')->getData();
                $correccioTags = str_replace(', ', ',', $inputMetaTag);
                $article->setMetaTag($correccioTags);

                // VERSIO ANTERIOR ON AFEGIEM CATEGORIES DESDE FORM D'ARTICLE

                // //Capturem categoria del select del formulari
                // $categoria1 = $form->get('categoria1')->getData();

                // //Si la categoria es "afegir nova categoria"
                // if ($categoria1->getNom() == "afegir nova categoria") {
                //     //Creem nova categoria amb el que hi hagi al input "nova categoria"
                //     $afegirCategoria = new Categoria();
                //     $afegirCategoria->setNom($form->get('nova_categoria')->getData());
                //     $afegirCategoria->setLogo('default-logo.png');
                //     $afegirCategoria->setTipus('oculta');
                //     $entityManager->persist($afegirCategoria);
                //     //fem el cambiazo
                //     $categoria1 = $afegirCategoria;
                // }

                //Resetejar la coleccio de Categories
                $cats = $cat_repo->findAll();
                for ($i = 0; $i < count($cats); $i++) {
                    $article->removeCategories($cats[$i]);
                }

                //Afegir les categories a la Collecioo
                $article->addCategories($form->get('categoria1')->getData());

                if ($form->get('categoria2')->getData() != null) {
                    $article->addCategories($form->get('categoria2')->getData());
                }

                if ($form->get('categoria3')->getData() != null) {
                    $article->addCategories($form->get('categoria3')->getData());
                }

                //Persistir dades i pujar a DB
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($article);
                $entityManager->flush();

                return $this->redirectToRoute('article_detall', ['slug' => $slug]);
            }

            return $this->render('articles/form_nou_article.html.twig', [
                'article' => $article,
                'formArticle' => $form->createView(),
            ]);
        }

        //Si no hi havia un ADMIN o l'autor del article loguejat, per defecte, redirigir a homepage
        return $this->redirectToRoute('article_detall', [
            'slug' => $slug
        ]);
    }

    /**
     * VEURE EL DETALL D'UN ARTICLE
     * @Route("/post/{slug}", name="article_detall", methods={"GET","POST"})
     */
    public function slug($slug, ArticleRepository $repository, Request $request)
    {
        //Obtenir dades del article   
        $post = $repository->findOneBy(array('slug' => $slug));
        $cat = $post->getCategories();

        //Crear Objecte Comentari i Form
        $comment = new Comentari();
        $form = $this->createForm(ComentariType::class, $comment);
        $form->handleRequest($request);

        //Si el formulari es enviat, captura les dades i afegir comentari al article
        if ($form->isSubmitted() && $form->isValid()) {
            //Crear EntityManager
            $entityManager = $this->getDoctrine()->getManager();

            //Capturar dades del formulari i assignar-les al article
            $comment->setUser($this->getUser())
                ->setArticle($post)
                ->setDataPublicacio(new \DateTime())
                ->setVisible(false);

            //Crear EntityManager i persistir dades
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->render('articles/index.html.twig', [
                'article' => $post,
                'categoria' => $cat[0],
                'commentSucces' => true,
                'feedbackForm' => $form->createView()
            ]);
        }

        return $this->render('articles/index.html.twig', [
            'article' => $post,
            'categoria' => $cat[0],
            'commentSucces' => false,
            'feedbackForm' => $form->createView(),
        ]);
    }

    /**
     * RETORNA TOTS ELS ARTICLES D'UN AUTOR
     * @Route("/posts/{username}", name="articlesAutor", methods={"GET"})
     */
    public function articlesPerAutor($username, ArticleRepository $post_repo, UserRepository $user_repo)
    {
        $user = $user_repo->findOneBy(array('nom_usuari' => $username));
        $postsAutor = $post_repo->findBy(array('autor' => $user, 'visible' => true));

        //Girar l'array perque surtin per ordre de mes nous a mes antics
        $posts = array_reverse($postsAutor);
        return $this->render('articles/llista_articles.html.twig', [
            'articles' => $posts,
            'autor' => $posts[0]->getAutor()
        ]);
    }

    /**
     * MOSTRAR TOTS ELS ARTICLES D'UNA CATEGORIA
     * SI NO TROBA UNA CATEGORIA AMB EL MATEIX NOM
     * REDIRIGEIX CAP AL HOMEPAGE (PODEM CREAR UN 404)
     * @Route("/{cat_name}", name="articles_categoria")
     */
    public function getArticles($cat_name, CategoriaRepository $repository, SerializerInterface $serializer)
    {
        $categories = $repository->findAll();

        //Comprovar si la categoria entrada coincideix amb el nom d'una categoria existent
        for ($i = 0; $i < count($categories); $i++) {
            if ($cat_name == $categories[$i]->getNom()) {

                //Si hi ha coincidencia, obtenir tots els articles
                $allPosts = $categories[$i]->getArticles();
                $publicPosts = [];
                //Per cada article comprovar la seva visibilitat (nomes colem els publics)
                for ($j = 0; $j < count($allPosts); $j++) {
                    if ($allPosts[$j]->getVisible()) {
                        array_push($publicPosts, $allPosts[$j]);
                    }
                }
                //Finalment girem l'array perque surtin per ordre de mes nous a mes antics
                $posts = array_reverse($publicPosts);

                //Si hi ha coincidencia, fer return
                return $this->render('articles/llista_articles.html.twig', [
                    'articles' => $posts,
                    'categoria' => $categories[$i],
                ]);

                //OPCIO JSON
                // $catJson = $serializer->serialize($posts, 'json', [
                //     'ignored_attributes' => ['user', 'categoria'],
                //     'circular_reference_handler' => function ($object) {
                //         return $object->getId();
                //     }
                // ]);

                // return new JsonResponse(json_decode($catJson));
            }
        }
        //Si ha fet tot el bucle i no ha trobat coincidencia, redirigir a homepage
        return $this->redirectToRoute('homepage');
    }
}
