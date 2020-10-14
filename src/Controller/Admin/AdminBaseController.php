<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Conference;
use App\Entity\Comment;


class AdminBaseController extends AbstractController
{

    public function sendSuccess($message='', $data=NULL)
    {
        return Response::json([
            'success' => true,
            'message' => $message,
            'data' => $data,
        ], 200);
    }
    
    public function sendError($error, $code = 404)
    {
        return Response::json([
            'message' => $error,
        ], $code);
    }

    public function sendResponse($message='', $data=NULL)
    {
        return Response::json([
            'success' => true,
            'message' => $message,
            'data' => $data,
        ], 200);
    }

}
