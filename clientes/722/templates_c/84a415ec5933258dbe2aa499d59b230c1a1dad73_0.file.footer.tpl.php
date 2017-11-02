<?php
/* Smarty version 3.1.29, created on 2017-08-28 01:00:34
  from "/var/www/vhosts/colombiaredes.net/httpdocs/new/clientes/templates/iconhostwhmcs/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59a36b32092447_10740498',
  'file_dependency' => 
  array (
    '84a415ec5933258dbe2aa499d59b230c1a1dad73' => 
    array (
      0 => '/var/www/vhosts/colombiaredes.net/httpdocs/new/clientes/templates/iconhostwhmcs/footer.tpl',
      1 => 1499127385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a36b32092447_10740498 ($_smarty_tpl) {
?>

        </div><!-- /.main-content -->
        <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren()) {?>
            <div class="col-md-3 pull-md-left sidebar">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['secondarySidebar']->value), 0, true);
?>

            </div>
        <?php }?>
    </div>
    </div>
    <div class="clearfix"></div>
</section>
	
  <!-- Newsletter -->
  <section class="newsletter section_space text-center bg_gray">
     <div class="row">
        <div class="col-sm-8 center-block">
           <div class="margin-bottom-40">
           		<h2 class="title">Join Our Newsletter</h2>
           		<p>Sign up to get better offers, email marketing as well as anytime updates about IconHost.</p>
           </div>
           <div id="mc_embed_signup">
              <div class="subscribe_form">
                 <form class="form-inline validate" action="http://trewsoft.us15.list-manage.com/subscribe/post?u=9b4867af12330694edde907d6&amp;id=59d1dbd9d5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                    <div class="row no-gutter">
                       <input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Subscribe to our newsletter" required>
                       <div style="position: absolute; left: -5000px;">
                          <input type="text" name="" tabindex="-1" value="">
                       </div>
                       <div class="col-sm-3 col-xs-3 subscribe_button">
                          <input class="btn btn-primary" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
                       </div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
     </div>
  </section>
  <!-- End of Newsletter -->

    
      <!-- Help -->
  <section class="bg_dark">
     <div class="page-help section_space">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                <h2>Need help? Call our award-winning support team </h2>
                <p class="font-bold">24/7 US based call support, <b>Email</b> any time or call <span class="deskop-help">+1-845-180-1530</span> <span class="mobile-help"><a href="tel:+1-845-180-1530">+1-845-180-1530</a></span></p>
                </div>
                <div class="col-md-3"> <a href="#" class="btn waves-effect waves-light btn-secondary btn-lg">Contact IconHost</a> </div>
            </div>
        </div>
    </div>
  </section>
  <!-- End of Help -->
  
    <!--  Footer -->
    <section>
        <div class="footer section_space">
            <div class="row">
                <div class="col-sm-3">
                    <h4><b>Choose Hosting Type:</b></h4>
                    <ul>
                        <li><a href="">Shared Hosting</a></li>
                        <li><a href="">VPS Hosting</a></li>
                        <li><a href="">Dedicated Hosting</a></li>
                        <li><a href="">Windows Hosting</a></li>
                        <li><a href="">Cloud Hosting</a></li>
                        <li><a href="">Reseller Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h4><b>Contact Support:</b></h4>
                    <ul>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">Submit a Ticket</a></li>
                        <li><a href="">Visit Knowledge Base</a></li>
                        <li><a href="">Cloud Hosting</a></li>
                        <li><a href="">Managed Hosting Services</a></li>
                        <li><a href="">Professional Services</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h4><b>Hosting Integrations:</b></h4>
                    <ul>
                        <li><a href="">Web Portal</a></li>
                        <li><a href="">HR Portal</a></li>
                        <li><a href="">Support Portal</a></li>
                        <li><a href="">Billing Portal</a></li>
                        <li><a href="">Database Administration</a></li>
                        <li><a href="">Disaster Recovery Planning</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h4><b>Additional Resources:</b></h4>
                    <ul>
                        <li><a href="">Knowledge Base</a></li>
                        <li><a href="">Support System</a></li>
                        <li><a href="">Downloads</a></li>
                        <li><a href="">Announcements</a></li>
                        <li><a href="">Acceptable Use Policy</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-sm-6 col-xs-6">
                <div class="footer_logo">
                    <a href="http://demo.trewsoft.com/iconhost/themes/default/index.html"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" alt="" />
                    </a>
                </div>
        </div>
            <div class="col-sm-6 text-right">
                <div class="footer-social-icons">
                <ul class="social-icons">
                    <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
                    <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
                    <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
                    <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
                    <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
                    <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
                </ul>
               <h6 class="follow">Follow Us</h6>
            </div>
            </div>
        </div>

      <div class="payments">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-inline">
                        <li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/award1.png" alt="" /> </a></li>
                        <li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/award2.png" alt="" /> </a></li>
                        <li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/award3.png" alt="" /> </a></li>
                        <li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/award4.png" alt="" /> </a></li>
                    </ul>
                </div>

                <div class="col-md-6  text-right">
                    <ul class="list-inline">
                        <li><i class="fa fa-cc-mastercard fa-3x"></i></li>
                        <li><i class="fa fa-cc-visa fa-3x"></i></li>
                        <li><i class="fa fa-cc-amex fa-3x"></i></li>
                        <li><i class="fa fa-cc-discover fa-3x"></i></li>
                        <li><i class="fa fa-cc-paypal fa-3x"></i></li>
                        <li><i class="fa fa-google-wallet fa-3x"></i></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <ul class="list-inline sitemap">
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Legal</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                        <p class="copyright"><a href="#">IconHost</a> - Theme by TrewSoft.</p>
                    </div>
                </div>
            </div>
    </div>
    <!-- End of Copyright -->
    </section>
    <!--  End of Footer -->

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/hoverIntent.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/superfish.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/jquery.circliful.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/jquery.slicknav.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/custom.js"><?php echo '</script'; ?>
>

<div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel panel-primary">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Title</h4>
            </div>
            <div class="modal-body panel-body">
                Loading...
            </div>
            <div class="modal-footer panel-footer">
                <div class="pull-left loader">
                    <i class="fa fa-circle-o-notch fa-spin"></i> Loading...
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary modal-submit">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>


</body>
</html>
<?php }
}
