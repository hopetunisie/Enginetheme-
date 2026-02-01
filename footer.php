<?php
#determine which columns to display
$col1 = __('Footer Column 1',IT_TEXTDOMAIN);
$col2 = __('Footer Column 2',IT_TEXTDOMAIN);
$col3 = __('Footer Column 3',IT_TEXTDOMAIN);
$col4 = __('Footer Column 4',IT_TEXTDOMAIN);
$class = 'widgets';
$disable_footer = it_get_setting('footer_disable');

if(!(it_get_setting('footer_disable') && it_get_setting('subfooter_disable'))) {
?>

    <div id="footer" class="container-fluid no-padding builder-section builder-widgets">
            
        <div class="row">
    
            <div class="col-md-12">
            
            	<?php echo it_background_ad(); #full screen background ad ?>
        
                <div class="container-inner">

					<?php if(it_get_setting('ad_footer')!='') { #footer ad ?>
                        
                        <div class="row it-ad" id="it-ad-footer">
                            
                            <div class="col-md-12">
                            
                                <?php echo do_shortcode(it_get_setting('ad_footer')); ?>  
                                
                            </div>                    
                              
                        </div>
                    
                    <?php } ?>

					<?php if(!it_get_setting('footer_disable')) { ?>
                        
                        <div class="widgets-inner shadowed">
                            
                            <div class="row">
                            
                                <div class="widget-panel left col-md-3">
        
									<?php echo it_widget_panel($col1, $class); ?>
                                    
                                </div>
                            
                                <div class="widget-panel mid mid-left col-md-3">
                                
                                    <?php echo it_widget_panel($col2, $class); ?>
                                    
                                </div>
                                
                                <br class="clearer hidden-lg hidden-md" />
                            
                                <div class="widget-panel mid mid-right col-md-3">
                                
                                    <?php echo it_widget_panel($col3, $class); ?>
                                    
                                </div> 
                                
                                <div class="widget-panel right col-md-3">
                                
                                    <?php echo it_widget_panel($col4, $class); ?>
                                    
                                </div> 
                                
                            </div> 
                            
                        </div>                            
                        
                    <?php } ?>
                    
                    <?php if(!it_get_setting('subfooter_disable')) { ?>
                    
                    	<div class="subfooter shadowed">
                    
                            <div class="row">
                                
                                <div class="col-sm-6 copyright">
                                
                                    <?php if(it_get_setting('copyright_text')!='') { ?>
                                    
                                        <?php echo it_get_setting('copyright_text'); ?>
                                        
                                    <?php } else { ?>
                                    
                                        <?php _e( 'Copyright', IT_TEXTDOMAIN ); ?> &copy; <?php echo date("Y").' '.get_bloginfo('name'); ?>,&nbsp;<?php _e( 'All Rights Reserved.', IT_TEXTDOMAIN ); ?>
                                    
                                    <?php } ?>  
                                    
                                </div>
                                
                                <div class="col-sm-6 credits">
                                
                                    <?php if(it_get_setting('credits_text')!='') { ?>
                                    
                                        <?php echo it_get_setting('credits_text'); ?>
                                        
                                    <?php } else { ?>
                                    
                                        <?php _e( 'Fonts by', IT_TEXTDOMAIN); ?> <a href="http://www.google.com/fonts/"><?php _e( 'Google Fonts', IT_TEXTDOMAIN); ?></a>. <?php _e( 'Icons by', IT_TEXTDOMAIN); ?> <a href="http://fontello.com/"><?php _e( 'Fontello', IT_TEXTDOMAIN); ?></a>. <?php _e( 'Full Credits', IT_TEXTDOMAIN); ?> <a href="<?php echo CREDITS_URL; ?>"><?php _e( 'here &raquo;', IT_TEXTDOMAIN); ?></a>
                                    
                                    <?php } ?>                         
                                
                                </div>
                            
                            </div>
                            
                        </div>
                        
                    <?php } ?>
                    
				</div> <!--/container-inner-->
                
            </div> <!--/col-md-12-->
            
        </div> <!--/row-->
        
    </div> <!--/container-fluid-->
    
    <?php } ?>

</div> <!--/after-header-->

<?php do_action('it_body_end'); ?>
<?php wp_footer(); ?>

</body>

</html>
