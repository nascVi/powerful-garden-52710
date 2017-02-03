<?php

// src/AppBundle/Controller/GitHutController.php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GitHutController extends Controller {

    /**
    * @Route("/", name="githut")
    */
    public function profileAction(Request $request) {

        return $this->render('githut/index.html.twig', [
                'avatar_url' => 'https://avatars.githubusercontent.com/u/14863629?v=3',
                'name' => 'landscapersParis',
                'login' => 'nascVi',
                'dpers' => [
                    'company' => 'Geeks Gardens & Landscapers',
                    'location' => 'Champigny sur Marne 94500',
                    'joined_on' => 'Pusher since March 2013 the 27th',
                ],
                'blog' => 'https://landscapersparis.fr',
                'social_data' => [
                    "Public repos" => 10,
                    "Folllowers" => 0,
                    "Following" => 8,
                ],
                'repo_count' => 100,
                'most_stars' => 49,
                'repos' => [
                    [
                    'name' => 'landscapersParis',
                    'url' => 'http://77.153.153.59/landscapersparis.fr/',
                    'stargazers_count' => 4,
                    'description' => 'Webdesign Front/Back'
                    ],
                    [
                    'name' => 'varela-electricite',
                    'url' => 'https://varela-electricite.fr',
                    'stargazers_count' => 19,
                    'description' => 'Société de services d\'éléctricité générale'
                    ],
                    [
                    'name' => 'casual-high',
                    'url' => 'http://casual-high.heroku.com',
                    'stargazers_count' => 5,
                    'description' => 'Fashion Blog'
                    ],
                ]
        ]); 
    }

}
