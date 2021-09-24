<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


use Knp\Component\Pager\PaginatorInterface;


use App\Entity\Articles;
use App\Entity\Users;

use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use App\Form\ArticlesType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Security\Core\User\UserInterface;

#/**
 #* Class ArticlesController
 #* @package App\Controller
 #* @Route("/actualites",name="actualites_")
 #*/
class ArticlesController extends AbstractController
{
    /**
     * @Route("/articles", name="articles")
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $donnes = $this->getDoctrine()->getRepository(Articles::class)->findAll();

        $articles = $paginator->paginate(
            $donnes, 
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('articles/index.html.twig', [
            'articles' => $articles
        ]);
    }

/**
     * @Route("/article/new", name="ajout", methods={"GET","POST"})
     */
    public function new(Request $request)
    {
        $article = new Articles();
       // $user ->setUsers($this->getUsers());
        $form = $this->createFormBuilder($article)
        
        ->add('titre', TextType::class, array('attr' => array('class' => 'form-control')))
        ->add('contenu', TextareaType::class, array(
          'required' => false,
          'attr' => array('class' => 'form-control')
        ))
        ->add('prix', NumberType::class, array('attr' => array('class' => 'form-control')))
        ->add('imageFile', FileType::class, array('attr' => array('class' => 'form-control')))
        //$user = $this->getDoctrine()->getRepository(Users::class);
        ->add('save', SubmitType::class, array(
          'label' => 'Create',
          'attr' => array('class' => 'btn btn-primary mt-3')
        ))
        ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()) {
        $article->setUsers($this->getUser());
        $article = $form->getData();

        //dd($request);

        $entityManager = $this->getDoctrine()->getManager();
        
        
        //dd($article);
        $entityManager->persist($article);
        $entityManager->flush();

        return $this->redirectToRoute('articles');
      }
      
      return $this->render('articles/ajout.html.twig', array(
        'form' => $form->createView()
      ));
    }



    /**
     * @Route("/article/{slug}", name="article")
     */
    public function article($slug)
    {
        $article = $this->getDoctrine()->getRepository(Articles::class)->findOneBy([
            'slug' => $slug
        ]);

        if(!$article){
            throw $this->createNotFoundException("L'article recherché n'existe pas");
        }

        return $this->render('articles/article.html.twig',compact('article'));

    }
    /**
     * @Route("/mesarticles", name="mesarticles")
     */
    public function mesarticles(Request $request, PaginatorInterface $paginator): Response
    {
        $donnes = $this->getDoctrine()->getRepository(Articles::class)->findAll();

        $articles = $paginator->paginate(
            $donnes, 
            $request->query->getInt('page', 1),
            4
        );

        return $this->render('articles/mesarticles.html.twig', [
            'articles' => $articles
        ]);
    }
    
    /**
     * @Route("/deletearticle/{id}", name="delete_article")
     */
    public function deleteArticle(Articles $article): Response
    {
       
        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();

        return $this->redirectToRoute("articles");
    }

    
        // $article = new Articles;
        // $form = $this->createForm(ArticlesType::class);
        // $form->handleRequest($request);
        
        // $donnes = $this->getDoctrine()->getRepository(Articles::class)->findAll();
        /*
        return $this->render('articles/ajout.html.twig', [
            'article' => $article
        ]);
        //  $article = new Articles;
        //  $form = $this->createForm(ArticlesType::class);
        //  $form->handleRequest($request);
        // $path = $this->getParameter('kernel.project_dir').'/public/images';   
        // $data = $form->getData();
        // $file = $form['image_product']->getData();
        // $name = md5(uniqid()).'.'.$file->guessExtension();
        // $event->setImage($name);

        // return $this->render('articles/ajout.html.twig', [
        //     'form' => $form->createView()
        //     if($form->isSubmitted() && $form->isValid()){
        //         $em = $this->getDoctrine()->getManager();
        //         $em->persist($categorie);
        //         $em->flush();
        //         return $this->redirectToRoute('mesarticles');
        //     }
        // ]);
 */  
     /**
     * @Route("/article/edit/{id}", name="edit_article")
     * Method({"GET", "POST"})
     */
    public function edit(Request $request, $id) { 
        $article = new Articles();
        $article = $this->getDoctrine()->getRepository(Articles::class)->find($id);
  
        $form = $this->createFormBuilder($article)
          ->add('titre', TextType::class, array('attr' => array('class' => 'form-control')))
          ->add('contenu', TextareaType::class, array(
            'required' => false,
            'attr' => array('class' => 'form-control')
          ))
          ->add('prix', NumberType::class, array('attr' => array('class' => 'form-control')))
          ->add('imageFile', FileType::class, array('attr' => array('class' => 'form-control')))
          ->add('save', SubmitType::class, array(
            'label' => 'Update',
            'attr' => array('class' => 'btn btn-primary mt-3')
          ))
          ->getForm();
  
        $form->handleRequest($request);
  
        if($form->isSubmitted() && $form->isValid()) {
  
          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->flush();
  
          return $this->redirectToRoute('article_list');
        }
  
        return $this->render('articles/modifier.html.twig', array(
          'form' => $form->createView()
        ));
      }

}
