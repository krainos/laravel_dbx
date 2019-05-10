<!DOCTYPE html>
<html lang="en">
<head>
<title>{{ config('index.title') }}</title>
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
<div class="wy-mod-banner" style="overflow:hidden;">
<div id="_banners" class="banners">
<div class="banner banner0">
<a href="#"><img src="{{ asset('static/home/uploads/') }}/2015/04/14/B4C96C3C9B975D22D194C0C03B8F1754.jpg" width="1920" height="475" alt="" /></a>
</div>
<div class="banner banner1">
<a href="#"><img src="{{ asset('static/home/uploads/') }}/2015/04/14/EA82AA21A90CF2B34B0196CA84CEBEDA.jpg" width="1920" height="475" alt="" /></a>
</div>
<div class="banner banner2">
<a href="#"><img src="{{ asset('static/home/uploads/') }}/2015/04/14/EA82AA21A90CF2B34B0196CA84CEBEDA.jpg" width="1920" height="475" alt="" /></a>
</div>
</div>
<div id="_focus" class="focus">
<a data-index="0" href="javascript:void(0);" class="on"><span class="bg-b"></span><span class="inner"></span></a>
<a data-index="1" href="javascript:void(0);"><span class="bg-b"></span><span class="inner"></span></a>
<a data-index="2" href="javascript:void(0);"><span class="bg-b"></span><span class="inner"></span></a>
</div>
</div>
<div class="ban-nav">
<ul>
﻿ <li class="nav_1"><a href="javascript:void(0);"><img src="{{ asset('static/home/images/') }}/nav_ico.png" />产品与服务</a></li>
<li><a href="#" title="广告招牌">广告招牌</a></li>
<li><a href="#" title="背景/形象墙">背景/形象墙</a></li>
<li><a href="#" title="LED发光字">LED发光字</a></li>
<li><a href="#" title="广告灯箱">广告灯箱</a></li>
<li><a href="#" title="多彩印刷">多彩印刷</a></li>
<li><a href="#" title="广告物料">广告物料</a></li>
<li><a href="#" title="广告设计">广告设计</a></li>
<li><a href="#" title="案例展示">案例展示</a></li>
<div class="clear"></div>
</ul>
</div>
</div>
<div class="content">
<div class="idxtop">
<h2>广告<span>+</span>设计<span>+</span>装饰</h2>
<p>大白熊广告——品牌形象塑造领先者！</p>
<a href="#" title="">更多了解<img src="{{ asset('static/home/images/') }}/bg4.jpg" alt="" /></a>
<ul>
<li>
<h3><img src="{{ asset('static/home/images/') }}/pic_ico1.png" alt="" />用创意感动生命</h3>
<p>创意是平面设计中永不干涸的生命源泉，是平面设计的思想内涵与灵魂。</p>
</li>
<li>
<h3><img src="{{ asset('static/home/images/') }}/pic_ico2.png" alt="" />用影响连接未来</h3>
<p>一种信息的传递，<br>一种典型的文化载体，延续与传承.....</p>
</li>
<li>
<h3><img src="{{ asset('static/home/images/') }}/pic_ico3.png" alt="" />专注</h3>
<p>因为专注，所以专业。<br>专注行业发展新动向，为企业品牌形象塑造与提升保驾护航。</p>
</li>
<li>
<h3><img src="{{ asset('static/home/images/') }}/pic_ico4.png" alt="" />定制</h3>
<p>专享的体验 尊贵的服务。<br>设计、生产、执行一体化， 致力于为企业量身定制。</p>
</li>
<div class="clear"></div>
</ul>
</div>
<div class="idxsol">
<div class="title">
免费索取您行业的解决方案
</div>
<div class="idxsol-left">
<div class="idxsol-1">
<img src="{{ asset('static/home/images/') }}/img1_1.jpg" alt="" />
<a href="javascript:void(0);">led发光字<br />地产行业泰达时代中心</a>
</div>
<div class="idxsol-2">
<span>
<img src="{{ asset('static/home/images/') }}/img1_2.jpg" alt="" />
<img src="{{ asset('static/home/images/') }}/img1_3.jpg" alt="" />
</span>
<span>
<a href="javascript:void(0);">展览展示<br />服装行业路边宣传画</a>
<img src="{{ asset('static/home/images/') }}/img1_4.jpg" alt="" />
</span>
</div>
<div class="idxsol-3">
<img src="{{ asset('static/home/images/') }}/img1_5.jpg" alt="" />
<a href="javascript:void(0);">免费获取<br />解决方案</a>
</div>
<div class="clear"></div>
</div>
<div class="yuyue">
<p>请输入您的真实信息，了解更多产品与服务：</p>
<form name="form1" id="form1" class="ajax-submit-form" action="#" method="post">
<input type="hidden" name="contentTitle" value="免费预约" />
<div class="yuyue-input">
<input name="name" type="text" placeholder="请输入您的姓名" data-rule="姓名:required"/>
</div>
<div class="yuyue-input yuyue-input1">
<input name="mobile" type="text" placeholder="请输入您的电话" data-rule="电话:required"/>
</div>
<input name="" type="submit" placeholder="免费预约设计" value="马上预约" class="yuyue-sub" />
<div id="validator-form-message"></div>
</form>
</div>
<div class="clear"></div>
</div> <div class="idxname" id="floor2">
<div class="title">
广告招牌
<div class="title-url">
<a href="#" title="广告招牌">更多></a>
</div>
</div>
<div class="idxleft">
<a href="#" title="烤漆玻璃招牌">
<div class="idximg1">
<img src="{{ asset('static/home/uploads/') }}/2015/04/11/5826A92C522E6BB7517517600F7E3281.jpg" alt="烤漆玻璃招牌" />
</div>
<div class="text">
<p>烤漆玻璃招牌</p>
</div>
</a>
</div>
<div class="idxright">
<ul>
<li>
<a href="#" title="烤漆玻璃招牌">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/11/5826A92C522E6BB7517517600F7E3281.jpg" alt="烤漆玻璃招牌" />
</div>
<div class="text">
<p>烤漆玻璃招牌</p>
</div>
</a>
</li>
<li>
<a href="#" title="铝塑板造型招牌">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2016/11/25/281FB09522A646B2A75FFECC7075453D.jpg" alt="铝塑板造型招牌" />
</div>
<div class="text">
<p>铝塑板造型招牌</p>
</div>
</a>
</li>
<li>
<a href="#" title="生态木造型招牌">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2016/11/25/2204EB3A78DEA6ADF01B2694CAE0DA35.jpg" alt="生态木造型招牌" />
</div>
<div class="text">
<p>生态木造型招牌</p>
</div>
</a>
</li>
<li>
<a href="#" title="平面彩钢扣板招牌">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/11/863972CAE9BE62EBF04E35126683F907.jpg" alt="平面彩钢扣板招牌" />
</div>
<div class="text">
<p>平面彩钢扣板招牌</p>
</div>
</a>
</li>
<li>
<a href="#" title="三维扣板招牌">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/15/372943BFCE550CE183688538F9CD973E.jpg" alt="三维扣板招牌" />
</div>
<div class="text">
<p>三维扣板招牌</p>
</div>
</a>
</li>
<li>
<a href="#" title="防腐木招牌">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2016/11/25/3BC3CA150EE8DACE9F4D24F825D8555D.jpg" alt="防腐木招牌" />
</div>
<div class="text">
<p>防腐木招牌</p>
</div>
</a>
</li>
<div class="clear"></div>
</ul>
</div>
<div class="clear"></div>
</div>
<div class="idxname-one" id="floor5">
<div class="title">
背景/形象墙
<div class="title-url">
<a href="#" title="背景/形象墙">更多></a>
</div>
</div>
<div class="idxright-one">
<ul>
<li>
<a href="#" title="旺德府集团——室内企业文化展示">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2019/01/25/5D244ABD784B5E6399DBB5192E71C970.jpg" alt="旺德府集团——室内企业文化展示" />
</div>
<div class="text">
<p>旺德府集团——室内企业文化展示</p>
</div>
</a>
</li>
<li>
<a href="#" title="岳麓区第二小学——学校党建文化墙制作">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2018/11/30/0E0CCE074A0602998DF3D12FE200B9AD.jpg" alt="岳麓区第二小学——学校党建文化墙制作" />
</div>
<div class="text">
<p>岳麓区第二小学——学校党建文化墙制作</p>
</div>
</a>
</li>
<li>
<a href="#" title="聚驰网络——企业文化墙设计制作">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2018/11/23/94E1921977CB9710CB89AE93CF0A854A.png" alt="聚驰网络——企业文化墙设计制作" />
</div>
<div class="text">
<p>聚驰网络——企业文化墙设计制作</p>
</div>
</a>
</li>
<li>
<a href="#" title="桐荫里社区——社区文化墙设计制作">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2018/11/15/E57F9AEC46A02580D4041E4E6277408B.png" alt="桐荫里社区——社区文化墙设计制作" />
</div>
<div class="text">
<p>桐荫里社区——社区文化墙设计制作</p>
</div>
</a>
</li>
<li>
<a href="#" title="长沙汨罗商会——商会党建文化墙制作">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2018/10/12/66D8F99A1549FC48AFBC5EA55B910048.png" alt="长沙汨罗商会——商会党建文化墙制作" />
</div>
<div class="text">
<p>长沙汨罗商会——商会党建文化墙制作</p>
</div>
</a>
</li>
<li>
<a href="#" title="瀚华金融——水晶字背景墙及室内物料">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2018/10/12/1E4CD0C0BFC764D8B04DCAC36FDDB1ED.png" alt="瀚华金融——水晶字背景墙及室内物料" />
</div>
<div class="text">
<p>瀚华金融——水晶字背景墙及室内物料</p>
</div>
</a>
</li>
<div class="clear"></div>
</ul>
</div>
<div class="clear"></div>
</div>
<div class="idxname" id="floor3">
<div class="title">
LED发光字
<div class="title-url">
<a href="LEDfaguangzi.html" title="LED发光字">更多></a>
</div>
</div>
<div class="idxleft">
<a href="#" title="精工铝边亚克力发光字">
<div class="idximg1">
<img src="{{ asset('static/home/uploads/') }}/2015/04/15/4B16F2AE8B3BA5A9581F235C28657C19.jpg" alt="精工铝边亚克力发光字" />
</div>
<div class="text">
<p>精工铝边亚克力发光字</p>
</div>
</a>
</div>
<div class="idxright">
<ul>
<li>
<a href="#" title="精工铝边亚克力发光字">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/15/4B16F2AE8B3BA5A9581F235C28657C19.jpg" alt="精工铝边亚克力发光字" />
</div>
<div class="text">
<p>精工铝边亚克力发光字</p>
</div>
</a>
</li>
<li>
<a href="#" title="精工亚克力通体发光字">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/15/3AE3AB462258BD3B4ED0708A5D1FC227.jpg" alt="精工亚克力通体发光字" />
</div>
<div class="text">
<p>精工亚克力通体发光字</p>
</div>
</a>
</li>
<li>
<a href="#" title="精工冲孔外露发光字">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/15/CBC78625BAADE1C93B62FD9C94D65EF2.jpg" alt="精工冲孔外露发光字" />
</div>
<div class="text">
<p>精工冲孔外露发光字</p>
</div>
</a>
</li>
<li>
<a href="#" title="精工背打发光字">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/15/33E514322AD44E0CA0C84F25122CFCF2.jpg" alt="精工背打发光字" />
</div>
<div class="text">
<p>精工背打发光字</p>
</div>
</a>
</li>
<li>
<a href="#" title="精工不锈钢侧冲孔背发光字">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/15/AAC2EBF62E7CBC7793B97F1F352ED9BD.jpg" alt="精工不锈钢侧冲孔背发光字" />
</div>
<div class="text">
<p>精工不锈钢侧冲孔背发光字</p>
</div>
</a>
</li>
<li>
<a href="#" title="精工扩边吸塑发光字">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/15/097327B485AD76FE0C8855006B620A81.jpg" alt="精工扩边吸塑发光字" />
</div>
<div class="text">
<p>精工扩边吸塑发光字</p>
</div>
</a>
</li>
<div class="clear"></div>
</ul>
</div>
<div class="clear"></div>
</div>
<div class="idxname" id="floor4">
<div class="title">
广告灯箱
<div class="title-url">
<a href="#" title="广告灯箱">更多></a>
</div>
</div>
<div class="idxleft">
<a href="#" title="水晶灯箱">
<div class="idximg1">
<img src="{{ asset('static/home/uploads/') }}/2015/04/14/31647ED36E48B29D2A8470820ED3ECC2.jpg" alt="水晶灯箱" />
</div>
<div class="text">
<p>水晶灯箱</p>
</div>
</a>
</div>
<div class="idxright">
<ul>
<li>
<a href="#" title="软膜灯箱">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2018/08/30/57DF4A43C27449F6B2115FECC7C36D99.jpg" alt="软膜灯箱" />
</div>
<div class="text">
<p>软膜灯箱</p>
</div>
</a>
</li>
<li>
<a href="#" title="拉布灯箱">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/15/655ABA0DF5FD540553BAD1FFC74BA75E.jpg" alt="拉布灯箱" />
</div>
<div class="text">
<p>拉布灯箱</p>
</div>
</a>
</li>
<li>
<a href="#" title="指示牌灯箱">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/15/CB8C9D8C6803322B82FA5B0F736CE7C9.jpg" alt="指示牌灯箱" />
</div>
<div class="text">
<p>指示牌灯箱</p>
</div>
</a>
</li>
<li>
<a href="#" title="吸塑灯箱">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/14/56D92E97EB2D7533F405B33A4CA440AE.jpg" alt="吸塑灯箱" />
</div>
<div class="text">
<p>吸塑灯箱</p>
</div>
</a>
</li>
<li>
<a href="#" title="水晶灯箱">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/14/31647ED36E48B29D2A8470820ED3ECC2.jpg" alt="水晶灯箱" />
</div>
<div class="text">
<p>水晶灯箱</p>
</div>
</a>
</li>
<li>
<a href="#" title="点餐灯箱">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/14/243A9557F6F89E94DABFDF48F6C9F615.jpg" alt="点餐灯箱" />
</div>
<div class="text">
<p>点餐灯箱</p>
</div>
</a>
</li>
<div class="clear"></div>
</ul>
</div>
<div class="clear"></div>
</div>
<div class="idxname-one" id="floor6">
<div class="title">
多彩印刷
<div class="title-url">
<a href="#" title="多彩印刷">更多></a>
</div>
</div>
<div class="idxright-one">
<ul>
<li>
<a href="#" title="其它物料">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/15/75E4F7A209BA1061AA3F4138BDDCDA0D.jpg" alt="其它物料" />
</div>
<div class="text">
<p>其它物料</p>
</div>
</a>
</li>
<li>
<a href="#" title="企业画册">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/15/A73001F91384068B3C8F63F9808604D9.jpg" alt="企业画册" />
</div>
<div class="text">
<p>企业画册</p>
</div>
</a>
</li>
<li>
<a href="#" title="宣传折页">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/14/69276F0D621ED2624AA22A02AC8DEDEF.jpg" alt="宣传折页" />
</div>
<div class="text">
<p>宣传折页</p>
</div>
</a>
</li>
<li>
<a href="#" title="名片">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/14/63C49694B99BF38DCFE20C251F011052.jpg" alt="名片" />
</div>
<div class="text">
<p>名片</p>
</div>
</a>
</li>
<li>
<a href="#" title="手提袋">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/19/3B0F6BE1E00A7F72C0E7E03A4A760EFE.png" alt="手提袋" />
</div>
<div class="text">
<p>手提袋</p>
</div>
</a>
</li>
<div class="clear"></div>
</ul>
</div>
<div class="clear"></div>
</div>
<div class="idxname-one" id="floor7">
<div class="title">
广告物料
<div class="title-url">
<a href="#" title="广告物料">更多></a>
</div>
</div>
<div class="idxright-one">
<ul>
<li>
<a href="#" title="水晶字">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2017/09/11/F2442A91A8CA092CA33BF0F4CA85EEAF.jpg" alt="水晶字" />
</div>
<div class="text">
<p>水晶字</p>
</div>
</a>
</li>
<li>
<a href="#" title="广告雕刻">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/14/2689DBE4C358531EDC7BB0D345BC1164.jpg" alt="广告雕刻" />
</div>
<div class="text">
<p>广告雕刻</p>
</div>
</a>
</li>
<li>
<a href="#" title="金属字">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/14/DBCFBE47DEA648F61E3454F93914815C.jpg" alt="金属字" />
</div>
<div class="text">
<p>金属字</p>
</div>
</a>
</li>
<li>
<a href="#" title="户外高精广告">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/03/27/80D7B1FA59CC156BF1648567B8DEE02F.jpg" alt="户外高精广告" />
</div>
<div class="text">
<p>户外高精广告</p>
</div>
</a>
</li>
<li>
<a href="#" title="室内广告物料">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/03/27/F3ADE0BB420F4603C84757732C525818.jpg" alt="室内广告物料" />
</div>
<div class="text">
<p>室内广告物料</p>
</div>
</a>
</li>
<li>
<a href="#" title="指引牌">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2015/04/15/4E2C3F8D767D076347602613991439EE.jpg" alt="指引牌" />
</div>
<div class="text">
<p>指引牌</p>
</div>
</a>
</li>
<div class="clear"></div>
</ul>
</div>
<div class="clear"></div>
</div>
<div class="idxname-one" id="floor1">
<div class="title">
广告设计
<div class="title-url">
<a href="qiyeVIsheji.html" title="广告设计">更多></a>
</div>
</div>
<div class="idxright-one">
<ul>
<li>
<a href="#" title="星豫沥青路面公司画册设计">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2016/11/25/E1F393115005B6BA8F694F710F208682.jpg" alt="星豫沥青路面公司画册设计" />
</div>
<div class="text">
<p>星豫沥青路面公司画册设计</p>
</div>
</a>
</li>
<li>
<a href="#" title="顺飞汽车租赁公司画册设计">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2017/01/06/A5B6DA0712115EAD9CDAFA718A7FF37D.jpg" alt="顺飞汽车租赁公司画册设计" />
</div>
<div class="text">
<p>顺飞汽车租赁公司画册设计</p>
</div>
</a>
</li>
<li>
<a href="#" title="辣酷麻辣料理VI设计">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2016/05/30/1849C4EA5A56F360DB6D84BC6F43706B.jpg" alt="辣酷麻辣料理VI设计" />
</div>
<div class="text">
<p>辣酷麻辣料理VI设计</p>
</div>
</a>
</li>
<li>
<a href="#" title="诗奈儿美甲美睫广告物料设计">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2016/11/15/8F41923CEAC5B0742720FDB6BAB2FD4C.jpg" alt="诗奈儿美甲美睫广告物料设计" />
</div>
<div class="text">
<p>诗奈儿美甲美睫广告物料设计</p>
</div>
</a>
</li>
<li>
<a href="#" title="海报设计">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2016/12/01/6F33198B4A044F80CE903EC5D9006FE1.jpg" alt="海报设计" />
</div>
<div class="text">
<p>海报设计</p>
</div>
</a>
</li>
<li>
<a href="#" title="名片设计">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2016/12/12/0791A0678996F2D98B1762231D1DE375.jpg" alt="名片设计" />
</div>
<div class="text">
<p>名片设计</p>
</div>
</a>
</li>
<div class="clear"></div>
</ul>
</div>
<div class="clear"></div>
</div>
<div class="idxname-one" id="floor8">
<div class="title">
案例展示
<div class="title-url">
<a href="#" title="案例展示">更多></a>
</div>
</div>
<div class="idxright-one">
<ul>
<li>
<a href="#" title="百草益寿养生苑——药店门头招牌制作">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2019/03/15/861ECDABEF9063BE93117A0CF7E85ECC.jpg" alt="百草益寿养生苑——药店门头招牌制作" />
</div>
<div class="text">
<p>百草益寿养生苑——药店门头招牌制作</p>
</div>
</a>
</li>
<li>
<a href="#" title="湘楚客栈——饭店门头广告招牌制作">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2019/03/15/AAAD88A1FEBE7028A9335EC823C448EA.jpg" alt="湘楚客栈——饭店门头广告招牌制作" />
</div>
<div class="text">
<p>湘楚客栈——饭店门头广告招牌制作</p>
</div>
</a>
</li>
<li>
<a href="#" title="虾小龙老长沙龙虾馆——户外广告招牌">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2019/01/22/9F9D8C5A2D19939A2B11EBC73A667150.jpg" alt="虾小龙老长沙龙虾馆——户外广告招牌" />
</div>
<div class="text">
<p>虾小龙老长沙龙虾馆——户外广告招牌</p>
</div>
</a>
</li>
<li>
<a href="#" title="美吉姆教育(五江天街店)——户外招牌制作">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2019/01/17/0F9A16D9A224E6D7C830CFA35E42B9F7.png" alt="美吉姆教育(五江天街店)——户外招牌制作" />
</div>
<div class="text">
<p>美吉姆教育(五江天街店)——户外招牌制作</p>
</div>
</a>
</li>
<li>
<a href="#" title="甘长顺（五一广场总店）——广告招牌制作">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2019/01/16/3985AEFE0862D354E593599AFE0CC609.jpg" alt="甘长顺（五一广场总店）——广告招牌制作" />
</div>
<div class="text">
<p>甘长顺（五一广场总店）——广告招牌制作</p>
</div>
</a>
</li>
<li>
<a href="#" title="凯旋门摄影(五一广场店)——门头招牌制作">
<div class="idximg">
<img src="{{ asset('static/home/uploads/') }}/2019/01/03/3F3C69F8F6C8BD1C06DA80BA470D4AA2.jpg" alt="凯旋门摄影(五一广场店)——门头招牌制作" />
</div>
<div class="text">
<p>凯旋门摄影(五一广场店)——门头招牌制作</p>
</div>
</a>
</li>
<div class="clear"></div>
</ul>
</div>
<div class="clear"></div>
</div>
<div class="idxnews">
<div class="title">
新闻资讯
</div>
<div class="idxnews-left">
<div class="idxtitle">
公司新闻<a href="#" title="公司新闻">更多></a>
</div>
<div class="idxnews-top">
<a href="#" title="浅谈LED不锈钢发光字的几种常见类型">
<div class="idxnews-img">
<img src="{{ asset('static/home/uploads/') }}/2019/03/14/8CFDF12051FEC1D8581BF72B9A614DD9.jpg" alt="浅谈LED不锈钢发光字的几种常见类型" />
</div>
<div class="idxnews-r">
<h3>浅谈LED不锈钢发光字的几种常见类型</h3>
<p>不锈钢发光字是LED发光字常见的一种，具有亮度高、节能环保、安装简易、维修成本低等特点</p>
</div>
<div class="clear"></div>
</a>
</div>
			{{--<ul class="idxnews-list">--}}
				{{--@foreach ($posts as $post)--}}
				{{--<li>--}}
				{{--<a href="{{ route( 'index.detail', [ 'slug'=>$post->slug]) }}">{{ $post->title }}</a>--}}
				{{--<span>({{ $post->published_at }})</span>--}}
				{{--</li>--}}
				{{--@endforeach--}}
			{{--</ul>--}}
</div>
<div class="idxnews-right">
<div class="idxtitle">
行业新闻<a href="#" title="行业新闻">更多></a>
</div>
<div class="idxnews-top">
<a href="#" title="LED发光字发光不均匀的原因有哪些？">
<div class="idxnews-img">
<img src="{{ asset('static/home/uploads/') }}/2019/03/14/ECC5E567AF375129E010359313D680F0.jpg" alt="LED发光字发光不均匀的原因有哪些？" />
</div>
<div class="idxnews-r">
<h3>LED发光字发光不均匀的原因有哪些？</h3>
<p>做好的发光字安装在门头上，要是出现亮的光度不一样，或者是黑一块白一块的怎么办呢？</p>
</div>
<div class="clear"></div>
</a>
</div>
		{{--<ul class="idxnews-list">@foreach ($posts as $post)--}}
          {{--<li>--}}
            {{--<a href="{{ route('index.detail', ['slug' => $post->slug]) }}">{{ $post->title }}</a>--}}
            {{--<span>({{ $post->published_at }})</span></li>--}}
          {{--@endforeach--}}
        {{--</ul>--}}
</div>
<div class="clear"></div>
</div>
</div>
@extends('index.partials.foot')
