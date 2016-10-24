	<!--底部开始-->
	<div class="foot">
		<div class="row">
			<div class="col-xs-4 col-md-8 text-center">
				<form style="margin-top:20px;margin-bottom:10px;">
					<a href="<?php echo site_url('news/article_about');?>">关于我们</a><span>|</span>
					<a href="<?php echo site_url('news/newslist/19');?>" rel="nofollow">政策法规</a><span>|</span>
					<a href="<?php echo site_url('news/newslist/3');?>">理财知识</a><span>|</span>
					<a href="<?php echo site_url('news/article_partener');?>">合作伙伴</a><span>|</span>
					<a href="<?php echo site_url('news/article/74');?>" rel="nofollow">隐私保护</a><span>|</span>
					<a href="<?php echo site_url('news/article/74');?>" rel="nofollow">服务协议</a><span>|</span>
					<?php if(!$this->session->userdata('uid')){?>
					<a type="button" data-toggle="modal" data-target="#myModal" rel="nofollow">意见反馈</a><span>|</span>
					<?php }else{?>
					<a href="<?php echo site_url('news/article_feedback');?>" rel="nofollow">意见反馈</a><span>|</span>
					<?php }?>
					<a href="<?php echo site_url('news/newslist/7');?>" rel="nofollow">帮助中心</a><span>|</span>
					<a href="<?php echo site_url('news/article_contact');?>">联系我们</a>
				</form>
				<p>
				Copyright © 2016 kuatoujiqi.com Inc. All Rights Reserved. 北京泰恒长隆网络科技有限公司 版权所有<span></span>京ICP备15056810号-2	
				</p>
				<p>
					<span>友情链接：</span><a href="http://www.wdzj.com/">网贷之家</a>
					<a href="http://guangzhou.99dai.cn/">广州贷款</a>
					<a href="http://www.gongshi8.com/">大智慧股票公式</a>
					<a href="http://www.csai.cn/p2p/tuandaiwang.html">团贷网产品</a>
					<a href="http://jinshi.silver.org.cn/">金十数据</a>
					<a href="http://www.yjcf360.com/fund/">基金</a>
					<a href="http://content.tuotiansudai.com/">网络资讯</a>
					<a href="www.hoo666.com">返佣网</a>
					<a href="http://www.bj5188.com.cn/">房屋抵押贷款</a>
					<a href="https://www.duoying.com/">多赢金融</a>
					<a href="http://www.wukongshuo.com/licai/">理财小知识</a>
					
				</p>
				<p>
				市场有风险&nbsp;投资需谨慎
				</p>
				<p style="margin-top:20px;">
				<a id='___szfw_logo___' href='https://credit.szfw.org/CX20160503015013080166.html' rel="nofollow" target='_blank'><img src='<?php echo base_url();?>style/img/footer/cert.png' border='0' /></a>
				<a logo_size="124x47" logo_type="realname" href="http://www.anquan.org" rel="nofollow"><script src="https://static.anquan.org/static/outer/js/aq_auth.js"></script></a>
				</p>
			</div>
			<div class="col-xs-4 col-md-4">
				<h4>客服热线</h4>
				<p><i>400-677-7505</i></p>
				<h4>服务时间</h4>
				<p>工作日 9:00 - 18:00</p>
			</div>
		</div>
	</div>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"></h4>
				</div>
				<div class="modal-body">
					<ul>
						<li><img src="<?php echo base_url();?>style/img/footer/机器人2.png" alt=""/></li>
						<li>
							<h5>请先登录!</h5>
							<p>点击启动机器跳转至登录页面。</p>
						</li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="modal-footer">
					<a href="<?php echo site_url('welcome/login_frame');?>" type="button" class="btn btn-primary">启 动 机 器</a>
				</div>
			</div>
		</div>
	</div>
<style>
	a:hover{
	text-decoration:none;
}
	.modal-dialog{
		width:400px;
		margin-top:300px;
		height:200px;
	}
	.modal-header{
		border-bottom:0px;
	}
	.modal-header button.close:link{
		border:0px;
	}
	.modal-header button.close{
		opacity:1;
		color:#000;
		font-size:14px;
		padding:1px 3px 3px 3px;
		background-color:#eee;
		border-radius:50%;
	}
	.modal-body ul{
		margin:10px auto;
		width:220px;
	}
	.modal-body ul li img{
		width:36px;
		height:36px;
		margin-right:10px;
		margin-top:5px;
	}
	.modal-body ul li{
		float:left;
	}
	.modal-body ul li p{
		font-size:12px;
		color:#666;
	}
	.modal-body ul li h5{
		color:#080808;
		font-weight:bold;
		margin-bottom:0px;
		font-size:16px;
	}
	.modal-body{
		color:#2c93dd;
		font-size:18px;
	}
	.modal-footer{
		border-top:0px;
		text-align:center;
	}
	.modal-footer button{
		padding:5px 30px;
	}
</style>

	<style>
	.foot .row{
		width:1270px;margin:0px auto;
		padding:30px 0px 20px 0px;
		color:#fff;
	}
	.foot .row .col-md-8{
		border-right:1px solid #fff;
	}
	.foot .row .col-md-8 a{
		color:#fff;
		font-size:12px;
	}
	.foot .row .col-md-8 p{
		font-size:12px;
	}
	.foot .row .col-md-8 p img {
		margin-right:20px;
	}
	.foot .row .col-md-8 span{
		margin:0px 3px 0px 5px;
	}
	.foot .row .col-md-4{
		padding-left:50px;
	}
	.foot .row .col-md-4 h4{
		font-size:15px;
	}
	.foot .row .col-md-4 p{
		padding-left:50px;
		font-size:12px;
	}
	a:hover{
		cursor:pointer;
	}
	</style>
	<!--<div class="foot">
		 <div style="background:#00ddf9;height:2px;margin:0px auto 10px auto;"></div>
		<div class="foot_center gy">
			<div class="foot_nav">
			<ul>
			<li>
				<h2>关于我们</h2>  
				<p><a href="<?php echo site_url('news/article_about');?>">公司简介</a></p>
				<p><a href="<?php echo site_url('news/article_mode');?>">平台模式</a></p>
				<p><a href="<?php echo site_url('news/article_fee');?>">费用标准</a></p>-->
			
			<!--<p><a href="<?php echo site_url('news/article/76');?>">联系我们</a></p>-->
			<!--<p><a href="about.html">加入我们</a></p>-->
			<!--</li>
			<li>
				<h2>产品服务</h2>
				<p><a href="<?php echo site_url('news/article_safety');?>">安全保障</a></p>
				<p><a href="<?php echo site_url('news/newslist/3');?>">媒体报道</a></p>
				<p><a href="<?php echo site_url('news/newslist/19');?>">政策法规</a></p>
				<p><a href="<?php echo site_url('news/article_partener');?>">合作伙伴</a></p>
			</li>
			<li>
				<h2>帮助中心</h2>
				<p><a href="<?php echo site_url('news/newslist/7');?>">常见问题</a></p>
				<p><a href="<?php echo site_url('news/article/74');?>">服务协议</a></p>
				<p><a href="<?php echo site_url('news/article/74');?>">隐私保密</a></p>
			</li>
			<li>
				<h2>联系我们</h2>
				<p><a href="<?php echo site_url('news/article_contact');?>">客服电话</a></p>
				<p><a href="<?php echo site_url('news/article_contact');?>">客服邮箱</a></p>
				<p><a href="<?php echo site_url('news/article_contact');?>">我要合作</a></p>
			</li>
			</ul>
			</div>
			<div class="foot_gz">
			<div class="foot_gz_top">关于我们</div>
			<div class="foot_gz_list">
			<ul>
			<li><a data-toggle="modal" data-target="#weixinModal" style="cursor:pointer"><img src="<?php echo base_url();?>style/img/footer/foot_weixin.jpg"  /><p>微信公众号</p></a></li>
			<li><a href="http://weibo.com/p/1006065833446993" rel="nofollow" target="_blank"><img src="<?php echo base_url();?>style/img/footer/foot_weibo.jpg"  /><p>新浪微博</p></a></li>
			</ul>
			</div>
			</div>
			<div class="foot_right">
			<div class="foot_gz_top">客服热线</div>
			<div class="foot_right_tel">
			  <img src="<?php echo base_url();?>style/img/foot_tel.png"  /> </div>
			  
			  <div class="foot_gz_top">服务时间</div>
			  <p>周一至周五  9:00-18:00</p>
			</div>
		</div>
		<div class="foot02">
			
			<div class="foot02_img">
				<a id='___szfw_logo___' href='https://credit.szfw.org/CX20160503015013080166.html' rel="nofollow" target='_blank'><img src='<?php echo base_url();?>style/img/footer/cert.png' border='0' /></a>
				<a logo_size="124x47" logo_type="realname" href="http://www.anquan.org" rel="nofollow"><script src="https://static.anquan.org/static/outer/js/aq_auth.js"></script></a>-->
				<!----<a href="http://webscan.360.cn/index/checkwebsite/url/www.kuaitoujiqi.com"><img border="0" src="http://img.webscan.360.cn/status/pai/hash/169f4cd3ecd57dd12dafbb65384b59dd"/></a>---->
				
				<!----<img src="<?php echo base_url();?>style/img/footer/foot_pic01.jpg" />
				<img src="<?php echo base_url();?>style/img/footer/foot_pic02.jpg" />
				<img src="<?php echo base_url();?>style/img/footer/foot_pic03.jpg" />
				<img src="<?php echo base_url();?>style/img/footer/foot_pic04.jpg" />
				<img src="<?php echo base_url();?>style/img/footer/foot_pic05.jpg" />---->
				<!--<div style="clear:both;"></div>
			</div>
			
			<div style="margin-top:20px;">
				<p style="margin:0;">©2015-2017 版权归属快投机器P2P投资平台所有    |     京ICP备15056810号-2 </p>
				<p style="margin:0;">Copyright © 2016 kuatoujiqi.com Inc. All Rights Reserved. 北京泰恒长隆网络科技有限公司 版权所有</p>
			</div>
		</div>
	</div>-->
	<!--底部结束-->
	
<!--<div class="foot">
    <div class="container">
        <div class="row" style="margin-top: 20px">
            <p class="col-lg-9 foot_nav">
                <a href="<?php echo site_url('news/article/9');?>">关于我们</a>
                <b>|</b>
                <a href="<?php echo site_url('news/article/6');?>">平台模式</a>
                <b>|</b>
                <a href="<?php echo site_url('news/article/8');?>">安全保障</a>
                <b>|</b>
                <a href="<?php echo site_url('news/article/7');?>">新手引导</a>
                <b>|</b>
                <a href="<?php echo site_url('news/newslist/7')?>">帮助中心</a>
                <b>|</b>
                <a href="<?php echo site_url('news/article/10');?>">联系我们</a>
            </p>
            <p class="col-lg-3">
                <span>关注我们：</span>
                <a href="http://weibo.com/u/5619033805" rel="nofollow" target="_blank"><img src="<?php echo base_url();?>style/img/foot_weibo.png"/></a>
                <a data-toggle="modal" data-target="#weixinModal" style="cursor:pointer"><img src="<?php echo base_url();?>style/img/foot_weixin.png" /></a>
            </p>
        </div>
        <div class="row" style="padding-top: 10px;padding-bottom: 10px;">
            <div class="col-lg-1">
                友情链接：
            </div>
            <div class="col-lg-8 friend_link">
            <?php $yqlj = yqlj();
				foreach($yqlj as $key)
				{
			?>
                <a href="<?php echo $key['url'];?>" target="_blank">
                    <?php echo $key['name'];?>
                </a>
     		<?php }?>
            </div>
            <div class="col-lg-3">
                <p style="font-size: 22px;font-weight: bold;margin-bottom: 0px;"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 400-999-7956</p>
                <p style="margin-left: 30px;">（工作时间：9:00-17:00）</p>
                <p style="font-size: 16px;font-weight: bold;"><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> 在线客服</p>
            </div>
        </div>

        <div class="row" style="border-top: 1px solid #5a5a5a;padding: 20px 0;margin-left: 0">
            <div class="pull-left">
                
            </div>
            <div class="pull-left" style="margin-left: 15px">
                <p style="margin-bottom: 5px"><?php /*?><a href="http://webscan.360.cn/index/checkwebsite/url/www.kuaitoujiqi.com"><img border="0" src="http://img.webscan.360.cn/status/pai/hash/1a4da25a35c98cf05c2677b4f7528a91"/></a><?php */?> <script language="javascript" type="text/javascript" src="//smarticon.geotrust.com/si.js"></script>
<a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action"> 沪ICP备15014079号-1</a></p>
                <p>© 2014 kuaitoujiqi.com  |  上海金椰金融信息服务有限公司 <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1255522926'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1255522926' type='text/javascript'%3E%3C/script%3E"));</script></p>
            </div>
        </div>
    </div>
</div>-->

    <div class="modal fade" id="weixinModal" tabindex="-1" role="dialog" aria-labelledby="weixinModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">关注快投机器官方微信</h4>
                </div>
                <div class="modal-body">
                	<center>
                   <img src="<?php echo base_url();?>style/img/weixin_foot.jpg" width="258" height="258" />
                   </center>
                </div>
                
            </div>
        </div>
    </div>

<!--- 客服系统 ---->
<script>
 function kefuShow(){
	$('#divFloatToolsView').show();	
	$('#aFloatTools_Show').attr('style','display:none');
	$('#aFloatTools_Hide').attr('style','display:block');	 
 }
 
 function kefuHide(){
	$('#divFloatToolsView').hide(); 
	$('#aFloatTools_Show').attr('style','display:block');
	$('#aFloatTools_Hide').attr('style','display:none');
	 
 }	
</script>
<link rel="stylesheet" href="<?php echo base_url();?>style/kefu/kefu.css">
<script language="javascript" src="<?php echo base_url();?>style/js/kefu.js"></script>    
<DIV id=floatTools class=float0831>
	<DIV class=floatL>
		<A  id="aFloatTools_Show" class="btnOpen" title="查看在线客服" onclick="javascript:kefuShow();" href="javascript:void(0);">展开</A> 
		<A id="aFloatTools_Hide" class="btnCtn" title="关闭在线客服" onclick="javascript:kefuHide();" href="javascript:void(0);" style="display:none">收缩</A> 
	</DIV>
  <DIV id="divFloatToolsView" class="floatR" style="display:none">
    <DIV class=tp></DIV>
    <DIV class=cn>
      <UL>
        <LI class=top>
          <H3 class=titZx>QQ咨询</H3>
        </LI>
        <!----<LI><SPAN class=icoZx>在线咨询</SPAN> </LI>--->
        <LI><A class=icoTc style="color:#888;" href="http://wpa.qq.com/msgrd?v=3&uin=3030954862&site=qq&menu=yes" rel="nofollow" target="_blank">客服-静静</A> </LI>
		<LI><A class=icoTc style="color:#888;" href="http://wpa.qq.com/msgrd?v=3&uin=3138576731&site=qq&menu=yes" rel="nofollow" target="_blank">客服-美美</A> </LI>
		<LI><A class=icoTc style="color:#888;" href="http://wpa.qq.com/msgrd?v=3&uin=2237925721&site=qq&menu=yes" rel="nofollow" target="_blank">客服-小雅</A> </LI>
        <!----<LI class=bot><A class=icoTc href="http://wpa.qq.com/msgrd?v=3&uin=3280728389&site=qq&menu=yes" rel="nofollow" target="_blank">客服-炎炎</A> </LI>---->
      </UL>
      <UL>
        <LI>
          <H3 class=titDh>电话1咨询</H3>
        </LI>
        <LI><SPAN class=icoTl>400-677-7505</SPAN> </LI>
      </UL>
        <UL>
            <LI>
                <H3 class=titqq>客户qq群</H3>
            </LI>
            <LI><SPAN class=icoTl>367770726</SPAN> </LI>
        </UL>
    </DIV>
  </DIV>
</DIV>
