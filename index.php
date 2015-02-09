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
  <link rel="stylesheet" type="text/css" href="wxedit.css" /> 
  <title>厦大讲座网微信编辑器</title> 
 </head> 
 <body id="activity-detail" class="zh_CN "> 
  <div class="rich_media"> 
   <div class="rich_media_inner"> 
    <div id="page-content"> 
     <div class="rich_media_area_primary"> 
      <h2 class="rich_media_title"><?php echo $posttime; ?></h2> 
      <div class="rich_media_content"> 
       <div class="lec_info"> 
        <section class="campus">
         思明校区
        </section>
        <fieldset class="lec_feed"> 
         <section class="lec_feed_detail"> 
          <section class="lec_topic">
           审计报告与税务信息
          </section> 
          <section class="lecturer">
           主讲: 葛晓萍
          </section> 
          <section class="lec_time">
           时间：2014-12-13 08:30
          </section> 
          <section class="lec_place">
           地点:【思明校区】南强二205
          </section> 
          <section class="lecture_detail">
           主讲人信息: 葛晓萍，中国注册会计师、中国注册资产评估师、中国土地估价师，立信会计师事务所（特殊普通合伙）合伙人、厦门分所所长，厦门大学工商管理学院客座教师，厦门市注册会计师协会副会长，厦门市第十一届、十二届政协委员。葛晓萍具有丰富的会计从业经验，担任厦门灿坤实业、厦门福慧达供应链、福建立达信等多家股份有限公司独立董事，以及厦门华祥苑股份有限公司等多家公司IPO项目签定合伙人，并参编会计学精品系列《会计伦理概论》、《审计理论与实务》等，主持“创建海西资本市场，促进厦门经济方式转变“等多项重点课题。
          </section> 
          <section class="lec_summary">
           简介: 本讲座为财政系财税实务系列讲座第二十九讲
          </section> 
         </section> 
         <section class="lec_more"> 
          <section class="lec_tag">
           标签：会计 经济
          </section> 
          <section class="lec_from">
           来自：经院官网
          </section> 
         </section> 
        </fieldset><br />
        <fieldset class="lec_feed"> 
         <section class="lec_feed_detail"> 
          <section class="lec_topic">
           《论语》浅解系列讲座之二：行仁之本——孝悌
          </section> 
          <section class="lecturer">
           主讲: 林玉明
          </section> 
          <section class="lec_time">
           时间：2014-12-13 15:00
          </section> 
          <section class="lec_place">
           地点:【思明校区】图书馆323 区域研究资料中心
          </section> 
          <section class="lecture_detail">
           主讲人信息: 林玉明，毕业于厦门大学海洋系，自1996年开始，先后任厦门大学科仪系党总支副书记、厦门大学物理与机电工程学院党总支副书记、学院党委副书记等职务。曾参与编写《行政管理学》教程；独立完成《中国谜语》专著等。自2004年开始，年年为厦门大学、厦门大学嘉庚学院本科生开设《中国谜语》校（院）选修课程，自2010年至今，又开讲《论语浅释》校（院）选修课程。学生对讲课效果的评价很高。
          </section> 
          <section class="lec_summary">
           简介: 要行仁，必须思修身，要修身，必须知孝悌。历代以来，人们都把儒家思想中的孝悌作为衡量人的思想品质的主要标准之一。自汉代开始，出现了举孝廉的制度。清李毓秀所作的《训蒙文》，后由清贾存仁修订改编而改名的《弟子规》，就是根据《论语&middot;学而篇》中孔子所说的：“弟子入则孝，出则弟……”而加以详细展开。充分体现了孝悌的重要性，而且也说明了从小教育孝悌的必要性。 在我国盛传的二十四孝中，孔子的弟子就占了三个。其中，在白居易《慈乌夜啼》诗中就有赞颂“鸟中之曾参”句。 但是，评判孝弟的标准是什么？请看孔子及其儒家学者对孝悌的经典论述。
          </section> 
         </section> 
         <section class="lec_more"> 
          <section class="lec_tag">
           标签：论语 二十四孝
          </section> 
          <section class="lec_from">
           来自：微博
          </section> 
         </section> 
        </fieldset>                  
       </div><br /> 
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