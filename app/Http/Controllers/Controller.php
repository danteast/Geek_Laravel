<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $newsArr = [
        [
            'cat_id' => 1,
            'cat_title' => 'Политика',
            'cat_news' => [
                [
                    'new_id' => 1,
                    'new_title' => 'Новость политики №1',
                    'new_content' => 'lorem pacem...'
                ],
                [
                    'new_id' => 2,
                    'new_title' => 'Новость политики №2',
                    'new_content' => 'lorem pacem...'
                ],
                [
                    'new_id' => 3,
                    'new_title' => 'Новость политики №3',
                    'new_content' => 'lorem pacem...'
                ],
                [
                    'new_id' => 4,
                    'new_title' => 'Новость политики №4',
                    'new_content' => 'lorem pacem...'                    
                ],

            ],
        ],
        [
            'cat_id' => 2,
            'cat_title' => 'Культура',
            'cat_news' => [
                [
                    'new_id' => 1,
                    'new_title' => 'Новость культуры №1',
                    'new_content' => 'lorem pacem...'
                ],
                [
                    'new_id' => 2,
                    'new_title' => 'Новость культуры №2',
                    'new_content' => 'lorem pacem...'
                ],
                [
                    'new_id' => 3,
                    'new_title' => 'Новость культуры №3',
                    'new_content' => 'lorem pacem...'
                ],
                [
                    'new_id' => 4,
                    'new_title' => 'Новость культуры №4',
                    'new_content' => 'lorem pacem...'                    
                ],

            ],
        ],
        [
            'cat_id' => 3,
            'cat_title' => 'Кино',
            'cat_news' => [
                [
                    'new_id' => 1,
                    'new_title' => 'Новость кино №1',
                    'new_content' => 'lorem pacem...'
                ],
                [
                    'new_id' => 2,
                    'new_title' => 'Новость кино №2',
                    'new_content' => 'lorem pacem...'
                ],
                [
                    'new_id' => 3,
                    'new_title' => 'Новость кино №3',
                    'new_content' => 'lorem pacem...'
                ],
                [
                    'new_id' => 4,
                    'new_title' => 'Новость кино №4',
                    'new_content' => 'lorem pacem...'                    
                ],

            ],
        ],
        [
            'cat_id' => 4,
            'cat_title' => 'Авто',
            'cat_news' => [
                [
                    'new_id' => 1,
                    'new_title' => 'Автоновость №1',
                    'new_content' => 'lorem pacem...'
                ],
                [
                    'new_id' => 2,
                    'new_title' => 'Автоновость №2',
                    'new_content' => 'lorem pacem...'
                ],
                [
                    'new_id' => 3,
                    'new_title' => 'Автоновость №3',
                    'new_content' => 'lorem pacem...'
                ],
                [
                    'new_id' => 4,
                    'new_title' => 'Автоновость №4',
                    'new_content' => 'lorem pacem...'                    
                ],

            ],
        ],
        [
            'cat_id' => 5,
            'cat_title' => 'Погода',
            'cat_news' => [
                [
                    'new_id' => 1,
                    'new_title' => 'Новость о погоде №1',
                    'new_content' => 'lorem pacem...'
                ],
                [
                    'new_id' => 2,
                    'new_title' => 'Новость о погоде №2',
                    'new_content' => 'lorem pacem...'
                ],
                [
                    'new_id' => 3,
                    'new_title' => 'Новость о погоде №3',
                    'new_content' => 'lorem pacem...'
                ],
                [
                    'new_id' => 4,
                    'new_title' => 'Новость о погоде №4',
                    'new_content' => 'lorem pacem...'                    
                ],

            ],
        ],        
    ];
}
