<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<title>{{ $post->title }}-大白熊广告公司</title>
@extends('index.partials.head')
</head>
<body class="home_area" data-tagplan="">
<form name="form" id="form" class="ajax-submit-form"
	action="" method="post">
<div class="header">
  <div class="top">
	@include('index.partials.header')
  </div>
</div>
</form>
  <div class="nav-b">
	<div class="p-banner">
    	<img src="{{ asset('static/home/images/') }}/p_banner1.jpg" />
        <div class="p-banner-c">
            <h2>公司新闻</h2>
            <p>大白熊广告—您身边的广告装饰专家</p>
        </div>
    </div>
   
</div>
<div class="p-top">
	<div class="p-top-c">
    	<ul class="p-column">
            <li ><a href="#" title="行业百科"><i></i>行业百科</a></li>
            <li ><a href="#" title="行业新闻"><i></i>行业新闻</a></li>
            <li class="current"><a href="#" title="公司新闻"><i></i>公司新闻</a></li>
        </ul>
        <span>当前位置：		<a href='http://www.dbxad.com/'>首页</a> &gt <a href='#'>新闻资讯</a> &gt <a href='#'>公司新闻</a>
</span>
    </div>
</div>
<div class="content">
	<div class="new-detail">
        <div class="det-tit">
            <h1>{{ $post->title }}</h1>
            <span>发布日期：{{ $post->published_at }}   总浏览：290 </span>
    </script>
        </div>
        <div class="det-con">
 {!! nl2br(e($post->content)) !!}
<span style="font-size:16px;"></span>
        </div>
        <div class="fy">
   
            
            <div class="clear"></div>
        </div>
    </div>
</div>
@include('index.partials.foot')
