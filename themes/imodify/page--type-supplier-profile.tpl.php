<?php  require_once('templates/nav.tpl.php');?>
<div class="container">
	<div id="page">
    	<?php if ($messages): ?>
            <div id="messages"><div class="section clearfix">
              <?php print $messages; ?>
            </div></div> <!-- /.section, /#messages -->
          <?php endif; ?>
        
          <?php if ($page['featured']): ?>
            <div id="featured"><div class="section clearfix">
              <?php print render($page['featured']); ?>
            </div></div> <!-- /.section, /#featured -->
          <?php endif; ?>
          <?php /*?><?php if ($breadcrumb): ?>
              <div id="breadcrumb"><?php print $breadcrumb; ?></div>
            <?php endif; ?><?php */?>
        
            <?php if ($page['sidebar_first']): ?>
              <div id="sidebar-first" class="column sidebar"><div class="section">
              	<div id="left">
                <?php print render($page['sidebar_first']); ?>
              </div></div></div> <!-- /#left, /.section, /#sidebar-first -->
            <?php endif; ?>
			<?php if ($page['two_col']): ?>
            <div id="twoCol">
				 <?php if ($page['two_col']): ?>
                    <?php print render($page['two_col']); ?>
                <?php endif; ?>
             <?php endif; ?>
             <?php if ($page['two_colleft']): ?>
            <div id="twoColLeft">
				 <?php if ($page['two_colleft']): ?>
                    <?php print render($page['two_colleft']); ?>
                <?php endif; ?>
             <?php endif; ?>
                <div id="content" class="column"><div class="section">
                  <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
                  <a id="main-content"></a>
                  <?php print render($title_prefix); ?>
                  <?php /*if ($title): ?>
                    <h1 class="title" id="page-title">
                      <?php print $title; ?>
                    </h1>
                  <?php endif;*/ ?>
                  <?php print render($title_suffix); ?>
                  <?php if ($tabs and $is_admin): ?>
                    <div class="tabs">
                      <?php print render($tabs); ?>
                    </div>
                  <?php endif; ?>
                  <?php print render($page['help']); ?>
                  <?php if ($action_links): ?>
                    <ul class="action-links">
                      <?php print render($action_links); ?>
                    </ul>
                  <?php endif; ?>
                  <?php /*print render($page['content']); //*/ print views_embed_view('supplier_detail','supplier_nid_to_uid', arg(1)); ?>
                <?php print $feed_icons; ?>
                </div></div><!-- #content -->
                <?php if ($page['two_colleft']): ?>
                	</div> <!-- /#twoColLeft -->
             	<?php endif; ?>
                <div id="right">
                    <?php if ($page['sidebar_second']): ?>
                      <div id="sidebar-second" class="column sidebar"><div class="section">
                        <?php print render($page['sidebar_second']); ?>
                      </div></div> <!-- /.section, /#sidebar-second -->
                    <?php endif; ?>
                </div>
            <?php if ($page['two_col']): ?>
            </div> <!-- /#twoCol -->
            <?php endif; ?>
            
            
            <?php if ($page['two_col2']): ?>
            <div id="twoCol">
				 <?php if ($page['two_col2']): ?>
                    <?php print render($page['two_col2']); ?>
                <?php endif; ?>
            </div> <!-- /#twoCol -->    
             <?php endif; ?>
             
             <?php if ($page['two_col3']): ?>
            <div id="twoCol">
				 <?php if ($page['two_col3']): ?>
                    <?php print render($page['two_col3']); ?>
                <?php endif; ?>
            </div> <!-- /#twoCol -->    
             <?php endif; ?>      
            
            
            <?php if ($page['triptych_first'] || $page['triptych_middle'] || $page['triptych_last']): ?>
                <div id="triptych-wrapper"><div id="triptych" class="clearfix">
                  <?php print render($page['triptych_first']); ?>
                  <?php print render($page['triptych_middle']); ?>
                  <?php print render($page['triptych_last']); ?>
                </div></div> <!-- /#triptych, /#triptych-wrapper -->
              <?php endif; ?>
            
              <div id="footer-wrapper"><div class="section">
            
                <?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']): ?>
                  <div id="footer-columns" class="clearfix">
                    <?php print render($page['footer_firstcolumn']); ?>
                    <?php print render($page['footer_secondcolumn']); ?>
                    <?php print render($page['footer_thirdcolumn']); ?>
                    <?php print render($page['footer_fourthcolumn']); ?>
                  </div> <!-- /#footer-columns -->
                <?php endif; ?>
            
                <?php if ($page['footer']): ?>
                  <div id="footer" class="clearfix">
                    <?php print render($page['footer']); ?>
                  </div> <!-- /#footer -->
                <?php endif; ?>
            
              </div></div> <!-- /.section, /#footer-wrapper -->
    </div><!-- #page -->
</div><!-- container -->
<?php if ($page['fb_footer']): ?>
    <?php print render($page['fb_footer']); ?>
<?php endif; ?>

<?php 


?>