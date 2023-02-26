<?php

namespace App\Controller;

use App\DTO\LowestPriceEnquiry;
use App\Service\Serializer\DTOSerializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProductsController extends AbstractController
{
    #[Route('/products/{id}/lowest-price', name: 'lowest-price', methods: Request::METHOD_POST)]
    public function lowestPrice(Request $request, DTOSerializer $serializer, int $id): Response
    {

        if($request->headers->has('force_fail')){
            return new JsonResponse(
                ['error' => 'Promotions Engine failure message'],
                $request->headers->get('force_fail')
            );
        }

        // 1. Deserialize json data into a EnquiryDTO
        $lowestPriceEnquiry = $serializer->deserialize($request->getContent(), LowestPriceEnquiry::class, 'json');

        //2. Pass the Enquiry into a promotions filter
            // the appropriate promotion will be applied

        // 3. Return the modified Enquiry
        $lowestPriceEnquiry->setDiscountPrice(50)
            ->setPrice(100)
            ->setPromotionId(3)
            ->setPromotionName('Black Friday half price sale');

        $responseContent = $serializer->serialize($lowestPriceEnquiry, 'json');
        
        
        return new Response($responseContent, 200);

    }
}