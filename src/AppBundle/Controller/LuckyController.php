<?php
/**
 * Created by PhpStorm.
 * User: Ludovic
 * Date: 30/05/2017
 * Time: 18:37
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller{
    /**
     * @Route("lucky/number")
     */


    public function numberAction(){
        $number = mt_rand(0,100);
        $objetTest = [
            'prenom'=>'Bob',
            'nom'=>'Boberson',
            'ddn'=>'01-02-1993',
            'amis'=>['Max','Roger','Pierre','Paul','Jack']
        ];
        return $this->render('lucky/number.html.twig',array(
            'number'=>$number,'test'=>$objetTest
        ));
    }
}