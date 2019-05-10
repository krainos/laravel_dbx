<!DOCTYPE html>
<html lang="en">
<head>
<title>联系我们-</title>
@include('index.partials.head')

</head>
<form name="form" id="form" class="ajax-submit-form"
	action="" method="post">
<div class="header">
  <div class="top">
	@include('index.partials.header')
  </div>
</div>
</form>
<div id='dialog' style="display: none;" title="温馨提示"></div>
<script type="text/javascript">
	function sel() {
		$.ajax({
			cache : true,
			type : "POST",
			url : "/search.ajax",
			data : $('#form').serialize(),
			async : false,
			dataType : "json",
			error : function(request) {
				alert("Connection error");
			},
			success : function(json) {
				alert(json.param.paginator.limit);
			}
		});
		return false;
	}
</script>

<script language="javascript" type="text/javascript">
	(function($) {
		$.fn
				.extend({
					loadSelect : function(opt) {
						var defaultOpt = {
							url : "select.json",
							pid : ""
						};
						var opts = $.extend(defaultOpt, opt);
						var $this = $(this);
						$
								.getJSON(
										opts.url,
										function(json) {
											var html = '<select onchange="javascript:$(this).selectSelect()"><option value="0">请选择</option>';
											$
													.each(
															json,
															function(i, n) {
																html += '<option value="'+n.id+'">'
																		+ n.text
																		+ "</option>\n";
															});
											html += "</select>\n";
											$this.append(html);
										});
					},
					selectSelect : function(opt) {
						var defaultOpt = {
							url : "select_data.json",
							pid : ""
						};
						var opts = $.extend(defaultOpt, opt);
						var $this = $(this);
						$this.nextAll().remove();
						$
								.getJSON(
										opts.url,
										function(json) {
											var html = '<select onchange="javascript:$(this).selectSelect(this)"><option value="0">请选择</option>';
											$
													.each(
															json,
															function(i, n) {
																html += '<option value="'+n.id+'">'
																		+ n.text
																		+ "</option>\n";
															});
											html += "</select>\n";
											$this.after(html);
										});
					}
				});

	})(jQuery);
	$(function() {
		$("#cascade").loadSelect({
			url : "select_data.json"
		});
	});
</script>
<form name="form" id="form" class="ajax-submit-form"
	action="#" method="post">
<div class="header">
	<div class="top">
     @include('index.partials.head')
        <div class="clear"></div>
    </div>
</div>
</form><div class="nav-b">
	<div class="p-map" id="map"></div>
	<!--引用百度地图API--> 
        <script type="text/javascript" src="http://api.map.baidu.com/api?key=&amp;v=1.1&amp;services=true"></script> 
        <!--百度地图容器-->
    	<script type="text/javascript">
	    //创建和初始化地图函数：
	    function initMap(){
	      createMap();//创建地图
	      setMapEvent();//设置地图事件
	      addMapControl();//向地图添加控件
	      addMapOverlay();//向地图添加覆盖物
	    }
	    function createMap(){ 
	      map = new BMap.Map("map"); 
	      map.centerAndZoom(new BMap.Point(112.944828,28.124157),18);
	    }
	    function setMapEvent(){
	      map.enableScrollWheelZoom();
	      map.enableKeyboard();
	      map.enableDragging();
	      map.enableDoubleClickZoom()
	    }
	    function addClickHandler(target,window){
	      target.addEventListener("click",function(){
	        target.openInfoWindow(window);
	      });
	    }
	    function addMapOverlay(){
	      var markers = [
	        {content:"地址：湖南省长沙市岳麓区COCO密城9栋105<br />联系电话：0731-85128156",title:"大白熊广告",imageOffset: {width:-46,height:-21},position:{lat:28.124157,lng:112.944828}}
	      ];
	      for(var index = 0; index < markers.length; index++ ){
	        var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
	        var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
	          imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
	        })});
	        var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
	        var opts = {
	          width: 200,
	          title: markers[index].title,
	          enableMessage: false
	        };
	        var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
	        map.openInfoWindow(infoWindow, map.getCenter());
	        marker.setLabel(label);
	        addClickHandler(marker,infoWindow);
	        map.addOverlay(marker);
	      };
	    }
	    //向地图添加控件
	    function addMapControl(){
	      var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
	      map.addControl(scaleControl);
	      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	      map.addControl(navControl);
	    }
	    var map;
	      initMap();
	  </script>
    <div class="p-contact">
    	<div class="p-cont">
        	<div class="p-cont-c">
                <h2>联系我们<span>contact us</span></h2>
                <p>我们已准备好迎接新的挑战，美诺心与您一道，创见品牌美好未来</p>
                <div class="p-cont-cc">
                	<h3>深圳大白熊广告有限公司</h3>
                    <p><span>电话：</span>0731-85128156</p>
                    <p><span>传真：</span>0731-85128156</p>
                    <p><span>邮箱：</span>123@b.qq.com</p>
                    <p><span>Q Q：</span>123</p>
                    <p><span>地址：</span>湖南省长沙市岳麓区COCO密城9栋105</p>
                </div>
                <p>我们的工作从周一到周日(08:00am - 18:00pm) </p>
                <p>欢迎咨询我们！</p>
            </div>
        </div>
    </div>
    <div class="ban-nav">
    	<ul>
﻿        <li class="nav_1"><a href="javascript:void(0);"><img src="{{ asset('static/home/images/') }}/nav_ico.png" />产品与服务</a></li>
        <li><a href="#" title="广告招牌">广告招牌</a></li>
        <li><a href="#" title="背景/形象墙">背景/形象墙</a></li>
        <li><a href="#" title="LED发光字">LED发光字</a></li>
        <li><a href="#" title="广告灯箱">广告灯箱</a></li>
        <li><a href="#" title="多彩印刷">多彩印刷</a></li>
        <li><a href="#" title="广告物料">广告物料</a></li>
        <li><a href="#" title="广告设计">广告设计</a></li>
        
        <!--
        <li><a href="/mentouzhaopai.htm" title="广告招牌">广告招牌</a></li>
        
       
        <li><a href="/LEDfaguangzi.htm" title="LED发光字">LED发光字</a></li>
        
        <li><a href="/guanggaodengxiang.htm" title="广告灯箱">广告灯箱</a></li>
        <li><a href="/xingxiangqiang.htm" title="背景/形象墙">背景/形象墙</a></li>
        <li><a href="/duocaiyinshua.htm" title="多彩印刷">多彩印刷</a></li>
        <li><a href="/guanggaowuliao.htm" title="广告物料">广告物料</a></li>
        
        
        
        <li><a href="/anlizhanshi.htm" title="案例展示">案例展示</a></li>
        -->
        <li><a href="#" title="案例展示">案例展示</a></li>
            <div class="clear"></div>
        </ul>
    </div>
</div>

@extends('index.partials.foot')