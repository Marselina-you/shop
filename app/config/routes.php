<?php

return array(
    
   'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
   'catalog' => 'catalog/index',
   'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
   'category/([0-9]+)' => 'catalog/category/$1',  // actionCategory в CatalogController
   'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController
   
   'user/register' => 'user/register',
   'user/login' => 'user/login',
   'user/logout' => 'user/logout',

   'cabinet/edit' => 'cabinet/edit',
   'cabinet' => 'cabinet/index',

    

   
   '' => 'site/index', // actionIndex в SiteController
    
);
