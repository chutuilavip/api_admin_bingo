<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z8HX2UeOZsXoPQWw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NA3WoXr3WpgFohEV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vQVzb0D1pGQ3ry2h',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/change-pass' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vR8C2gY4nn0UrDpP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/user-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0xqUt8u5KGB8GxPB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/check-auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u0ptjpBMFx8fRtjP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QMbT6j7pdk2PCAe3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/history/plays' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EuSv1qEtpOpQFKr2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/history/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iqYbsuDP6y3oRA9Z',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/sys' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QNyP3Bl1e3um6jvl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/sys/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y3FWhvU7YEyuGvce',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/data-point' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z9mtmJTcEPsWxH1f',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/game/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c0pVtgvJ3Tl7Q7m1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/game/config/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2udi7OkrIm3MSo4u',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/game/league' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dOgAYnhXhjybWi3C',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HWID2WsoRyKQutDg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/game-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i1KbQCNah5hclKGW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/show/banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MiRNRjfabCwzoWJo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/api/(?|user/(?|([^/]++)(*:31)|update/([^/]++)(*:53))|history/(?|play/([^/]++)(*:85)|transaction/([^/]++)(*:112))|game(?|/league/update/([^/]++)(*:151)|\\-list/(?|([^/]++)(*:177)|update/([^/]++)(*:200)))|banner/(?|([^/]++)(*:228)|add(*:239)|update/([^/]++)(*:262)|delete/([^/]++)(*:285))|show/banner/([^/]++)(*:314))|/([a-zA-Z0-9-/]+)?(*:341)|/unauthorized(*:362))/?$}sDu',
    ),
    3 => 
    array (
      31 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jyIkOCFkKr7xhFkO',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      53 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wURTTyNKsGjmCUTV',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      85 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CVNYRuuiQTQLqHEo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::woMKpjUwD4iciUf0',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L8jJG5fi7LkPAO2R',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      177 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::syi65Xz9a1PRCsfn',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JvBPafeDZYk2bP7i',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      228 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KQPJviWe8NuZNShc',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      239 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YlZLugd7m67PdIk8',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      262 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cn93WVZRHpNkAWwL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oz4HgvIb25Dgg5Rw',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      314 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bm4ilPHYPUmpSh2L',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      341 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BfEvqZimWC7L0QrW',
            'path' => NULL,
          ),
          1 => 
          array (
            0 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      362 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unauthorized',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::Z8HX2UeOZsXoPQWw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::Z8HX2UeOZsXoPQWw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NA3WoXr3WpgFohEV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@register',
        'controller' => 'App\\Http\\Controllers\\AuthController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::NA3WoXr3WpgFohEV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vQVzb0D1pGQ3ry2h' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\AuthController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::vQVzb0D1pGQ3ry2h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vR8C2gY4nn0UrDpP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/change-pass',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@changePassWord',
        'controller' => 'App\\Http\\Controllers\\AuthController@changePassWord',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::vR8C2gY4nn0UrDpP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0xqUt8u5KGB8GxPB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/user-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@userProfile',
        'controller' => 'App\\Http\\Controllers\\AuthController@userProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::0xqUt8u5KGB8GxPB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u0ptjpBMFx8fRtjP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/check-auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@checkLogin',
        'controller' => 'App\\Http\\Controllers\\AuthController@checkLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::u0ptjpBMFx8fRtjP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QMbT6j7pdk2PCAe3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserManagerController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\UserManagerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::QMbT6j7pdk2PCAe3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jyIkOCFkKr7xhFkO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserManagerController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\UserManagerController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::jyIkOCFkKr7xhFkO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wURTTyNKsGjmCUTV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserManagerController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\UserManagerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::wURTTyNKsGjmCUTV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EuSv1qEtpOpQFKr2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/history/plays',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HistoryPlayManagerController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\HistoryPlayManagerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/history',
        'where' => 
        array (
        ),
        'as' => 'generated::EuSv1qEtpOpQFKr2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CVNYRuuiQTQLqHEo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/history/play/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HistoryPlayManagerController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\HistoryPlayManagerController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/history',
        'where' => 
        array (
        ),
        'as' => 'generated::CVNYRuuiQTQLqHEo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iqYbsuDP6y3oRA9Z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/history/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\TransactionManagerController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\TransactionManagerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/history',
        'where' => 
        array (
        ),
        'as' => 'generated::iqYbsuDP6y3oRA9Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::woMKpjUwD4iciUf0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/history/transaction/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\TransactionManagerController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\TransactionManagerController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/history',
        'where' => 
        array (
        ),
        'as' => 'generated::woMKpjUwD4iciUf0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QNyP3Bl1e3um6jvl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/sys',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SystemManagerController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\SystemManagerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::QNyP3Bl1e3um6jvl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y3FWhvU7YEyuGvce' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/sys/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SystemManagerController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\SystemManagerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Y3FWhvU7YEyuGvce',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z9mtmJTcEPsWxH1f' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/data-point',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserManagerController@datapoint',
        'controller' => 'App\\Http\\Controllers\\Api\\UserManagerController@datapoint',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::z9mtmJTcEPsWxH1f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c0pVtgvJ3Tl7Q7m1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/game/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\GameManagerController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\GameManagerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/game',
        'where' => 
        array (
        ),
        'as' => 'generated::c0pVtgvJ3Tl7Q7m1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2udi7OkrIm3MSo4u' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/game/config/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\GameManagerController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\GameManagerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/game',
        'where' => 
        array (
        ),
        'as' => 'generated::2udi7OkrIm3MSo4u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dOgAYnhXhjybWi3C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/game/league',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\EventLeagueManagerController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\EventLeagueManagerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/game',
        'where' => 
        array (
        ),
        'as' => 'generated::dOgAYnhXhjybWi3C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L8jJG5fi7LkPAO2R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/game/league/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\EventLeagueManagerController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\EventLeagueManagerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/game',
        'where' => 
        array (
        ),
        'as' => 'generated::L8jJG5fi7LkPAO2R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HWID2WsoRyKQutDg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\BannerManagerController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\BannerManagerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/banner',
        'where' => 
        array (
        ),
        'as' => 'generated::HWID2WsoRyKQutDg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KQPJviWe8NuZNShc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/banner/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\BannerManagerController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\BannerManagerController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/banner',
        'where' => 
        array (
        ),
        'as' => 'generated::KQPJviWe8NuZNShc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YlZLugd7m67PdIk8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/banner/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\BannerManagerController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\BannerManagerController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/banner',
        'where' => 
        array (
        ),
        'as' => 'generated::YlZLugd7m67PdIk8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cn93WVZRHpNkAWwL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/banner/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\BannerManagerController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\BannerManagerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/banner',
        'where' => 
        array (
        ),
        'as' => 'generated::cn93WVZRHpNkAWwL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oz4HgvIb25Dgg5Rw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/banner/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\BannerManagerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\BannerManagerController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/banner',
        'where' => 
        array (
        ),
        'as' => 'generated::oz4HgvIb25Dgg5Rw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i1KbQCNah5hclKGW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/game-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\GameListManagerController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\GameListManagerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/game-list',
        'where' => 
        array (
        ),
        'as' => 'generated::i1KbQCNah5hclKGW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::syi65Xz9a1PRCsfn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/game-list/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\GameListManagerController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\GameListManagerController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/game-list',
        'where' => 
        array (
        ),
        'as' => 'generated::syi65Xz9a1PRCsfn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JvBPafeDZYk2bP7i' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/game-list/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\GameListManagerController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\GameListManagerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/game-list',
        'where' => 
        array (
        ),
        'as' => 'generated::JvBPafeDZYk2bP7i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MiRNRjfabCwzoWJo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/show/banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\BannerController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\BannerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/show',
        'where' => 
        array (
        ),
        'as' => 'generated::MiRNRjfabCwzoWJo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bm4ilPHYPUmpSh2L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/show/banner/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'cors',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\BannerController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\BannerController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/show',
        'where' => 
        array (
        ),
        'as' => 'generated::bm4ilPHYPUmpSh2L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BfEvqZimWC7L0QrW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{path?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RenderView@__invoke',
        'controller' => 'App\\Http\\Controllers\\RenderView',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BfEvqZimWC7L0QrW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '[a-zA-Z0-9-/]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unauthorized' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'unauthorized',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'AuthController@unauthorized',
        'controller' => 'AuthController@unauthorized',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'unauthorized',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
