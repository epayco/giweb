<div class="col-sm-12 col-md-5 center-block">

    {if $incorrect}
        {include file="$template/includes/alert.tpl" type="error" msg=$LANG.loginincorrect textcenter=true}
    {elseif $verificationId && empty($transientDataName)}
        {include file="$template/includes/alert.tpl" type="error" msg=$LANG.verificationKeyExpired textcenter=true}
    {elseif $ssoredirect}
        {include file="$template/includes/alert.tpl" type="info" msg=$LANG.sso.redirectafterlogin textcenter=true}
    {/if}

    
    <!-- Login -->
    <section class="login">
        <div class="row">
                <div class="login-form-panel margin-bottom-40">
                    <div class="row">
                            <div class="login-form">
                                <h2 class="title text-center">{$LANG.login}</h2>
                                <form method="post" action="{$systemsslurl}dologin.php">
                                    <label class="control-label">Email</label>
                                     <input type="email" name="username" class="form-control" id="inputEmail" placeholder="{$LANG.enteremail}" autofocus>
                                    <label class="control-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="{$LANG.clientareapassword}" autocomplete="off" >
                                    <div class="checkbox"><label><input type="checkbox" name="rememberme" /> {$LANG.loginrememberme}</label></div>
                                    <p class="btn waves-effect waves-light btn-default btn-block"><a href="pwreset.php">{$LANG.forgotpw}</a></p>
                                    <input class="btn waves-effect waves-light btn-warning btn-block" type="submit" value="{$LANG.loginbutton}" />
                                </form>
                            </div>
                            <div class="bg_gray">
                                <div class="form-footer-content">
                                    <h3>Don't have an account?</h3>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <a class="btn-link" tabindex="4" href="#">Create an account</a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- End of Login -->

</div>
