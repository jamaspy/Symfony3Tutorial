<?php
/**
 * Created by PhpStorm.
 * User: ShimmysMacBook
 * Date: 16/5/17
 * Time: 10:48 AM
 */

namespace AppBundle\Service;

class GitHubApi
{
    public function getProfile ($username)
    {
        $client = new \GuzzleHttp\Client();
        $repsonse = $client->request('GET', 'https://api.github.com/users/' . $username);

        $data = json_decode($repsonse->getBody()->getContents(), true);

        return [
            'avatar_url'  => $data ['avatar_url'],
            'name'        => $data ['name'],
            'login'       => $data ['login'],
            'details'     => [
                'company'   => $data ['company'],
                'location'  => $data ['location'],
                'joined_on' => 'Joined On: ' . (new \DateTime($data ['created_at']))->format('d, m, Y'),
            ],
            'blog'        => $data ['blog'],
            'social_data' =>[
                'Public Repos' => $data ['public_repos'],
                'Followers'    => $data ['followers'],
                'Following'    => $data ['following'],
            ],
        ];
    }

    public function getRepos ($username)
    {
        $client = new \GuzzleHttp\Client();
        $repsonse = $client->request('GET', 'https://api.github.com/users/' . $username . '/repos');

        $data = json_decode($repsonse->getBody()->getContents(), true);


        return[
            'repo_count' => count($data),
            'most_stars' => array_reduce($data, function ($mostStars, $currentRepo){
                return $currentRepo['stargazers_count'] > $mostStars ? $currentRepo['stargazers_count'] : $mostStars;
            }, 0),

            'repos' => $data
        ];
    }
    
}