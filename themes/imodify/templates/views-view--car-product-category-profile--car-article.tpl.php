<div class="<?php echo $classes;?>">
<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
<?php
//echo '<pre>';print_r($view->result);exit;
$site_path = 'http://'.$_SERVER['HTTP_HOST'].base_path();
?>
<div id="article">
<div class="carmake_main_boxmid_1">
	<div class="carmake_boxmid_head1">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="36%">ARTICLES</td>
            <td width="37%" align="right" style="padding-right:10px; font-size:11px; color:#595A5C;"><a href="<?php echo base_path();?>articles">View Full Page</a></td>
            <td width="27%" align="right" style="padding-right:10px; font-size:11px; color:#595A5C;"><img src="<?php echo base_path() . path_to_theme();?>/images/bt23.png" width="92" height="15" /></td>
          </tr>
        </table>
  	</div>
	<div id="load_article" style=" height:450px; width: 400px; border-right:1px solid #CCCCCC;">
	<?php
if($user->uid){
   if(empty($view->result))
{
?>
</br>
<div style="margin-left:150px; margin-top:180px;"> 
<strong>No Articles available</strong>
</div>
<?php
}}
?>
	
<?php foreach($view->result as $value){
		$imgUri=$value->field_field_article_image[0]['raw']['uri'];
		$imgPath=str_replace('public://',base_path().'sites/default/files/',$imgUri);
		$imgVars = array();
		$imgVars['item']=array('uri'=>$imgPath,'alt'=>'','width'=>128,'height'=>84,'title'=>'','attributes'=>array('class'=>''));
		$imgVars['image_style']='';
		$imgVars['path']=array('path'=>'articles/'.$value->nid,'options'=>array());?>
        <div class="carmake_boxmid_boxmain1">
            <div class="carmake_boxmid_boxmain1_1">
                <div class="carmake_boxmid_boxmain1_head1"><a href="<?php echo base_path().'articles/'.$value->nid;?>"><?php echo ucwords(strtolower(substr($value->_field_data['nid']['entity']->title,0,30)));?></a></div>
                <div class="carmake_boxmid_boxmain1_img"><?php echo theme_image_formatter($imgVars);?></div>
                <div class="carmake_boxmid_boxmain1_cntent">
                    <div class="carmake_boxmid_boxmain1_date"><?php echo date('d M Y',$value->_field_data['nid']['entity']->created);?></div>
                    <div class="carmake_boxmid_boxmain1_txt1"><?php echo ucfirst(strtolower(substr($value->field_body[0]['raw']['value'],0,135)));?>...</div>
                     <div class="carmake_boxmid_boxmain1_bt">
					<!-- AddThis Button BEGIN -->
						<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=ra-4ff6c82229926a13" addthis:url="<?php echo $site_path.'articles/'.$value->nid;?>"
						addthis:title="<?php echo $value->_field_data['nid']['entity']->title; ?>"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a>
						<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4ff6c82229926a13"></script>
					<!-- AddThis Button END -->
						&nbsp;<a href="<?php echo base_path().'articles/'.$value->nid;?>"><img src="<?php echo base_path() . path_to_theme();?>/images/bt26.png" width="97" height="18" /></a>
					</div>
                </div>
            </div>
        </div>
<?php }?>
</div>

   	<div style="margin-left:150px; margin-bottom:20px; color:#BD5728;"><strong>SHOW MORE ARTICLES</strong></div>
</div>
</div>
</div>