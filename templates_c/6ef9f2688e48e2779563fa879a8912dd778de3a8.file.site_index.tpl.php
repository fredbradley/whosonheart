<?php /* Smarty version Smarty-3.1.8, created on 2012-04-16 18:01:39
         compiled from "/Users/fredbradley/Sites/smarty_site/simplysofas/templates/site_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5085096084f6c9d0de84651-25461843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ef9f2688e48e2779563fa879a8912dd778de3a8' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/simplysofas/templates/site_index.tpl',
      1 => 1334595696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5085096084f6c9d0de84651-25461843',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f6c9d0defb3a0_07554986',
  'variables' => 
  array (
    'SITE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6c9d0defb3a0_07554986')) {function content_4f6c9d0defb3a0_07554986($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("site_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    
    <!-- Top Area -->
    
    <div id="top">
        
        <!-- Header Area -->
        
        <div id="header">
            
            <!-- Header Container -->
            
            <div class="container">
            
                <!-- Dynamic Logo -->
        
                <div id="logo">
                    <a href="" title=""><img src="assets/images/sofa_logo.png" alt="UK Bespoke Sofas" /></a>
                </div>
                
                <!-- Logo Ends -->
                
                <!-- Top Contacts -->
                
                <div id="topcontacts">
                    
                    <!-- Top Contacts - Email -->
                
                    <div id="top-email" class="email-link"> <a href="mailto:info@seriouslysofas.co.uk">info@seriouslysofas.co.uk</a></div>
                    
                    <!-- Top Contacts - Email Ends -->
                    
                    <!-- Top Contacts - Phone -->
                    
                    <div id="top-phone" class="">+44 020 8549 1233</div>
                    
                    <!-- Top Contacts - Phone Ends -->
                    
                </div>
                
                <!-- Top Contacts Ends -->
            
            </div>
            
            <!-- Header Container Ends -->
        
        </div>
        
        <!-- Header Area Ends -->
        
        <!-- Offer Area Container -->
        
        <!--Dynamic Page Title For SEO-->
        
        <center><br/><br/><h1><?php echo $_smarty_tpl->tpl_vars['SITE']->value['title'];?>
 - Max 36 Chars</h1></center>
        
        <!--Dynamic Page Title For SEO Ends-->
        
        <div class="container clearfix">
            
            <!-- Offer Area -->
            
            <div id="offer" class="clearfix">
                
                <!-- Dynamic Text Box 1 -->
                
                <div id="offercontent">
                
                    <h3><?php echo $_smarty_tpl->tpl_vars['SITE']->value['offer_subhead'];?>
 - (27 Chars)</h3>
                    
                    <div id="offercontent-wrap">
                    
                        <p class="description"><?php echo $_smarty_tpl->tpl_vars['SITE']->value['offer_description'];?>
 (Max Chars 550)</p>
                        
                    </div>
                
                </div>
                
                <!-- Dynamic Text Box 1 End -->
                
                
                <!-- Video Embed 598*335 -->
                
                <div id="offerslider">
                
                    
                    <ul id="offerslider-items">
                    
                    <li><?php echo $_smarty_tpl->tpl_vars['SITE']->value['video'];?>
</li>
			<!-- <iframe src="http://player.vimeo.com/video/<?php echo $_smarty_tpl->tpl_vars['SITE']->value['video'];?>
?title=0&amp;byline=0&amp;portrait=0" width="598" height="335" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                  -->  </ul>

                
                </div>
                
                <!-- Video Embed End -->
            
            </div>
            
            <!-- Offer Area Ends -->
        
        </div>
        
        <!-- Offer Area Container Ends -->
    
    </div>
    
    <!-- Top Area Ends -->
    
     <!-- Lightbox Gallery - One small Thumbnail & One Large -->
        
        <div id="gallery" class="clearfix">
            <div class="container clearfix">
                
                <ul>
                    <li><a rel="prettyPhoto[gallery]" href="assets/images/sofa_logo.png" title="Gallery Item #1"><img src="assets/images/sofa_logo.png" alt="Gallery Item #1" width="174" height="94" /><span class="hoverlay"><span class="hoverzoom"></span></span></a></li>
                    <li><a rel="prettyPhoto[gallery]" href="assets/images/sofa_logo.png" title="Gallery Item #2"><img src="assets/images/sofa_logo.png" alt="Gallery Item #2" width="174" height="94" /><span class="hoverlay"><span class="hoverzoom"></span></span></a></li>
                    <li><a rel="prettyPhoto[gallery]" href="assets/images/sofa_logo.png" title="Gallery Item #3"><img src="assets/images/sofa_logo.png" alt="Gallery Item #3" width="174" height="94" /><span class="hoverlay"><span class="hoverzoom"></span></span></a></li>
                    <li><a rel="prettyPhoto[gallery]" href="assets/images/sofa_logo.png" title="Gallery Item #4"><img src="assets/images/sofa_logo.png" alt="Gallery Item #4" width="174" height="94" /><span class="hoverlay"><span class="hoverzoom"></span></span></a></li>
                    <li><a rel="prettyPhoto[gallery]" href="assets/images/sofa_logo.png" title="Gallery Item #5"><img src="assets/images/sofa_logo.png" alt="Gallery Item #5" width="174" height="94" /><span class="hoverlay"><span class="hoverzoom"></span></span></a></li>
                </ul>
                
            </div>
        </div>
        
        <!-- Gallery End -->
            
    <!-- Content Starts -->
    
    <div id="content" class="clearfix">
        
        <!-- Content Container -->
        
        <div class="container clearfix" style="padding-top: 90px;">
            
            <!-- Main HTML Box -->
            
            <div class="col-full">
            <h3><?php echo $_smarty_tpl->tpl_vars['SITE']->value['content_headline'];?>
</h3>
            <p class="description"><?php echo $_smarty_tpl->tpl_vars['SITE']->value['content_html'];?>
HTML box (Tiny MCE) with unlimited code/text</p>
            
            </div>
            
            <div class="col-one-third">
                
                <div class="product-feature">
                
                    <img src="assets/images/icons/sofa_small.png" title="" alt="" />
                    
                    <h3><?php echo $_smarty_tpl->tpl_vars['SITE']->value['box_one_headline'];?>
</h3>
                    
                    <p><?php echo $_smarty_tpl->tpl_vars['SITE']->value['box_one'];?>
</p>
                
                </div>
                
            </div>
            
            <div class="col-one-third">
                
                <div class="product-feature">
                
                    <img src="assets/images/icons/sofa_small.png" title="" alt="" />
                    
                    <h3><?php echo $_smarty_tpl->tpl_vars['SITE']->value['box_two_headline'];?>
</h3>
                    
                    <p><?php echo $_smarty_tpl->tpl_vars['SITE']->value['box_two'];?>
</p>
                
                </div>
                
            </div>
            
            <div class="col-one-third col-last">
                
                <div class="product-feature">
                
                    <img src="assets/images/icons/sofa_small.png" title="" alt="" />
                    
                    <h3><?php echo $_smarty_tpl->tpl_vars['SITE']->value['box_three_headline'];?>
</h3>
                    
                    <p><?php echo $_smarty_tpl->tpl_vars['SITE']->value['box_three'];?>
</p>
                
                </div>
                
            </div>
            
            <div class="clear"></div>
            
            <!-- Product Features End -->
        
        </div>        
        
        <div class="container clearfix">        
                  
        <div class="clear"></div>
            
            
            <!-- Dynamic Main Link -->
            
            <div id="action-bottom" class="clearfix">
                            
                <a href="http://www.seriouslysofas.co.uk/bespoke-and-customised-furniture" target="_blank" class="actionbutton">Visit Our Site</a>
            
            </div>
            
            <!-- Dynamic Main Link End -->
                     
       		<!-- Facebook Comments -->
           
       		<div class="fb-comments" data-href="http://www.facebook.com/seriouslysofas" data-num-posts="20" data-width="960"></div>
       		
       		<!-- Facebook Comments Ends -->
       		
       		<div align="center" class="email-link">
       		
       		<a href="http://seriouslysofas.co.uk/important-information" target="_blank">Terms, Privacy, Address, Conditions & Important Information</a>
       		
       		</div> 
       		       
        </div>
        
        <!-- Content Container Ends -->
    
    </div>
    
    <!-- Content Ends -->

<?php echo $_smarty_tpl->getSubTemplate ("site_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>