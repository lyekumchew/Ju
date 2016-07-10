<!DOCTYPE html>
<html lang="zh-CN" class="">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php if($this->_currentPage>1) echo '第 '.$this->_currentPage.' 页 - '; ?><?php $this->archiveTitle(array(
        'category'  =>  _t('Posts in %s Category'),
        'search'    =>  _t('Search Result for %s'),
        'tag'       =>  _t('Posts Tagged with  %s'),
        'author'    =>  _t('Posts by %s')
        ), '', ' - '); ?><?php $this->options->title(); ?>
    </title>
    <meta charset="<?php $this->options->charset(); ?>" />
    <link href="<?php $this->options->themeUrl('/css/zoom.css'); ?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?php $this->options->themeUrl('/img/favicon.ico'); ?>" />
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/style.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/jquery.fancybox.css'); ?>" charset="utf-8">
    <meta name="description" content="<?php $this->options->description() ?>" />
    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">.fancybox-margin{margin-right:17px;}</style>
    <?php $this->header(); ?>
    </head>

    <body class="site">
        <header class="site-header">
            <h1 class="site-title"><a href="<?php $this->options->siteUrl(); ?>">AUTUMN</a></h1>
            <nav class="site-nav">
                <ul class="nav">
                    <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
                    <li><a class="toggle-search" href="#search">search</a></li>
                </ul>
            </nav>
            <div class="site-search" id="search">
                <form method="post" action="#" class="search-form">
                <input type="text" name="s" class="search-form-input" placeholder="Search">
                </form>
            </div>
            <div class="site-header-background" style="background-image:url(<?php $this->options->themeUrl('/img/header_img.jpg'); ?>)">
            </div>
        </header>
