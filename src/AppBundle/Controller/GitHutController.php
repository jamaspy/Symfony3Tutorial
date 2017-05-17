<?php
/**
 * Created by PhpStorm.
 * User: ShimmysMacBook
 * Date: 15/5/17
 * Time: 1:36 PM
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GitHutController extends Controller
{
    /**
     * @Route ("/{username}" , name = "githut" , defaults={"username": "codereviewvideos"})
     */
    public function githutAction (Request $request, $username)
    {

        $this->get('github_api') -> getRepos($username);

        return $this->render("githut/index.html.twig", [
            'username'   => $username,]);
    }


   /**
    * @Route ("/repos/{username}" , name = "profile")
    */
   public function profileAction (Request $request, $username)

    {
        $profileData = $this->get('github_api')->getProfile($username);

        return $this->render("githut/profile.html.twig", $profileData);

    }


    public function reposAction (Request $request, $username)
    {
        $repoData = $this->get('github_api')->getRepos($username);
        return $this->render("githut/repos.html.twig", $repoData);
    }




}