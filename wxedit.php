<!DOCTYPE html>
<?php
// 需要通告的消息放在这里，如事件改期通知
$announce = "";

$year_tomorrow = date('Y', strtotime('+1 day'));
$year_aftertomorrow = date('Y', strtotime('+2 day'));
$month_tomorrow = date('m', strtotime('+1 day'));
$month_aftertomorrow = date('m', strtotime('+2 day'));
$tomorrow = date('d', strtotime('+1 day'));
$dayaftertomorrow = date('d', strtotime('+2 day'));
$weekarray = array("日","一", "二","三","四","五","六");
$weekday_tomorrow = "(星期".$weekarray[date('w', strtotime('+1 day'))].")";
$posttime =$month_tomorrow . "月".$tomorrow."日".$weekday_tomorrow."讲座预告";

$since = mktime(0, 0, 0, $month_tomorrow, $tomorrow, $year_tomorrow); //查询开始时间设置为明天0点
$to = mktime(0, 0, 0, $month_aftertomorrow, $dayaftertomorrow, $year_aftertomorrow); //查询结束时间设置为后天0点
$posts = li_getPostsFuture($since, $to);

function li_getPostsFuture($since, $to) {
    global $wpdb;
    $results = array();
    $query = "SELECT wposts.*
			FROM $wpdb->posts wposts,$wpdb->postmeta wpostmeta
			WHERE wpostmeta.meta_value >  $since
			AND wpostmeta.meta_value <	$to
			AND wposts.ID = wpostmeta.post_id
			AND wposts.post_status = 'publish'
			AND wposts.post_type = 'post'
			AND wpostmeta.meta_key = 'lec_when'
			ORDER BY wpostmeta.meta_value ASC
			";
    $results = $wpdb->get_results($query);
    return $results;
}
?>
<html>
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta http-equiv="Content-Language" content="zh-cn" /> 
  <meta name="author" content="zhendezhendong" /> 
  <meta name="keyewords" content="厦大讲座网 微信后台编辑" /> 
  <meta name="description" content="讲座网微信编辑页面，’Ctrl+A'全选后‘Ctrl+C'剪切,然后'Ctrl+V'粘贴在微信后台编辑页面" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" /> 
  <meta name="apple-mobile-web-app-capable" content="yes" /> 
  <meta name="apple-mobile-web-app-status-bar-style" content="black" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <link rel="stylesheet" type="text/css" href="../newPulgins/weixin/wxedit.css" /> 
  <title><?php echo $posttime; ?></title> 
 </head> 
 <body id="activity-detail" class="zh_CN "> 
  <div class="rich_media"> 
   <div class="rich_media_inner"> 
    <div id="page-content"> 
     <div class="rich_media_area_primary"> 
      <h2 class="rich_media_title">讲座预告 </h2> 
      <div class="rich_media_content"> 
       <?php
        //检查结果集数量
        $postsCounts = count($posts);
        if ($postsCounts != 0)  {
          foreach ($posts as $post) {
            $title = get_post_meta($post->ID, lec_title, true);
            $speaker = get_post_meta($post->ID, lec_speaker, true);
            $speaker = "主讲：$speaker";
            $when = date('Y-m-d H:i', get_post_meta($post->ID, lec_when, true));
            $when = "时间：$when";
            
            if (get_post_meta($post->ID, lec_campus, true) == 'main') {
              $where = '【思明校区】';
             } else if (get_post_meta($post->ID, lec_campus, true) == 'xiamen') {
              $where = '【厦门市区】';
             } else if (get_post_meta($post->ID, lec_campus, true) == 'xiangan') {
              $where = '【翔安校区】';
             } else if (get_post_meta($post->ID, lec_campus, true) == 'zhangzhou') {
              $where = '【漳州校区】';
             } 
            
            $where.= get_post_meta($post->ID, lec_where, true); 
            $where = "地点：$where";
            $lec_aboutspeaker = get_post_meta($post->ID, lec_aboutspeaker, true); //主讲人信息
            if($lec_aboutspeaker) $lec_aboutspeaker = "主讲人信息：$lec_aboutspeaker";
            $lec_about = get_post_meta($post->ID, lec_about, true);
            if($lec_about)	$lec_about = "简介：$lec_about";
            
            //标签
						$tags = wp_get_post_tags($post->ID);
						$lec_tag = "";
						foreach($tags as $tag) $lec_tag = $lec_tag." ".$tag->name;
						if($lec_tag) $lec_tag = "标签：$lec_tag";
						
            echo  
         '<section class="lec_feed"> 
          <section class="lec_topic">
           '.$title.'
          </section> 
          <section class="lecturer">
           '.$speaker.'
          </section> 
          <section class="lec_time">
           '.$when.'
          </section> 
          <section class="lec_place">
           '.$where.'
          </section> 
          <section class="lecture_detail">
           '.$lec_aboutspeaker.'
          </section> 
          <section class="lec_summary">
           '.$lec_about.' 
          </section> 
					<section class="lec_tag">
					'.$lec_tag.'
					</section>
					<section class="lec_from">
					'.$lec_from.'
					</section>
         </section><br/>';
          }
        } else  {
            echo '<section class="lec_null">没有文章哦！</section>'; 
        }
       ?>
       <div class="signature"> 
        <fieldset class="signa"> 
         <section class="signa_icon"></section> 
         <section class="signa_right_begin"> 
          <section class="signa_right">
            讲座活动举办 
          </section> 
          <section class="signa_right">
            讲座相关资料发布 
          </section> 
          <section class="signa_right">
            讲座推荐及讲座报道 
          </section> 
          <section class="signa_right">
            全面及时准确的讲座信息 
          </section> 
          <section class="signa_right_slogan">
            一则讲座，改变一生 
          </section> 
          <section class="signa_right_sitename">
            厦门大学讲座网 
          </section> 
         </section> 
         <section class="signa_left_begin"> 
          <section class="signa_left_weixin">
            微信号：xmulecture 
          </section> 
          <section class="signa_left">
            网址：lecture.xmu.edu.cn 
           <br />微博：厦大讲座 
           <br />QQ群：206193470 
           <br />安卓 APP：厦大讲座 
          </section> 
         </section> 
        </fieldset> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div>  
 </body>
</html>