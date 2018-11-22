<?php

namespace AppBundle\Controller;

use CoreBundle\Entity\Product;
use CoreBundle\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;


/**
 * Product controller.
 *
 */
class ProductController extends Controller
{
    /**
     * Lists all product entities.
     *
     */
    public function indexAction($category)
    {
        $em = $this->getDoctrine()->getManager();
        
        $serviceCatgeory = $this->get('app.categorie');
//        $serviceCatgeory = $this->container->get('app.categorie');
        
        $countCategory = $serviceCatgeory->count();
        
//        return $serviceCatgeory->redirection();
        
//        dump($countCategory);

        $categorys = $em->getRepository('CoreBundle:Category')->findBy([], ['name' => 'ASC']);
        
        if($category == 'all'){
            $products = $em->getRepository('CoreBundle:Product')->findAll();
        }else{
            $products = $em->getRepository('CoreBundle:Product')->getProductsByCategory($category);
        }
        
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);
        
        $p = new Product();
        
        $p->setName('Produit x');
        $p->setQte(15);
        $p->setPrice(100);
        
        
        $jsonContent = $serializer->serialize($p, 'json');
        
        dump($p);
        dump($jsonContent);
//        exit();

        return $this->render('AppBundle:product:index.html.twig', array(
            'products' => $products,
            'categorys' => $categorys,
            'category' => $category
        ));
    }
    
    public function indexJsonAction($category)
    {
        $em = $this->getDoctrine()->getManager();
        
        if($category == 'all'){
            $products = $em->getRepository('CoreBundle:Product')->findAllArray();
        }else{
            $products = $em->getRepository('CoreBundle:Product')->getProductsByCategoryArray($category);
        }
        
        return new JsonResponse($products);
    }

    /**
     * Creates a new product entity.
     *
     */
    public function newAction(Request $request)
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $file = $product->getFile();
            
                        
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                    $this->getParameter('files_directory'),
                    $fileName
                );
            
            $product->setFile($fileName);
            $product->setFullPath('/uploads/'.$fileName);
            
            $em->persist($product);
            
            
            $em->flush();
            
            $this->addFlash('success', 'votre produit a été ajouter avec succes.');

            return $this->redirectToRoute('product_show', array('id' => $product->getId()));
        }

        return $this->render('AppBundle:product:new.html.twig', array(
            'product' => $product,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a product entity.
     *
     */
    public function showAction(Product $product)
    {
        $deleteForm = $this->createDeleteForm($product);

        return $this->render('AppBundle:product:show.html.twig', array(
            'product' => $product,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing product entity.
     *
     */
    public function editAction(Request $request, Product $product)
    {
        $deleteForm = $this->createDeleteForm($product);
        $editForm = $this->createForm('CoreBundle\Form\ProductType', $product);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('product_edit', array('id' => $product->getId()));
        }

        return $this->render('AppBundle:product:edit.html.twig', array(
            'product' => $product,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a product entity.
     *
     */
    public function deleteAction(Request $request, Product $product)
    {
        
        $form = $this->createDeleteForm($product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($product);
            $em->flush();
        }

        return $this->redirectToRoute('product_index');
    }

    /**
     * Creates a form to delete a product entity.
     *
     * @param Product $product The product entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Product $product)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('product_delete', array('id' => $product->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    public function removeAction(Product $product){
        $em = $this->getDoctrine()->getManager();
        
        $em->remove($product);
//        $em->flush();
        
        return new JsonResponse("le produit ".$product->getName()." a été supprimer avec succes.");
    }
}
