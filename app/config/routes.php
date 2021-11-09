<?php

return array(
    
   'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
   'catalog' => 'catalog/index',
   'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
   'category/([0-9]+)' => 'catalog/category/$1',  // actionCategory в CatalogController

   
   'cart/checkout' => 'cart/checkout', // actionAdd в CartController    
   'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController    
   'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController
   'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
   'cart' => 'cart/index', // actionIndex в CartController
   
   'user/register' => 'user/register',
   'user/login' => 'user/login',
   'user/logout' => 'user/logout',

   'cabinet/edit' => 'cabinet/edit',
   'cabinet' => 'cabinet/index',


    

   
   '' => 'site/index', // actionIndex в SiteController
    
);
