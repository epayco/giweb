
      
    <div id="contactform">  
    <div class="col-sm-8 center-block">
    <div class="col-sm-12">
    {if $sent}
    {include file="$template/includes/alert.tpl" type="success" msg=$LANG.contactsent textcenter=true}
{/if}

{if $errormessage}
    {include file="$template/includes/alert.tpl" type="error" errorshtml=$errormessage}
{/if}

{if !$sent}
</div>


    <form method="post" action="contact.php" role="form">
        <input type="hidden" name="action" value="send" />

            <div class="form-group clearfix">
                <label for="inputName" class="col-sm-12 control-label">{$LANG.supportticketsclientname}</label>
                <div class="col-sm-12">
                    <input type="text" name="name" value="{$name}" class="form-control" id="inputName" />
                </div>
            </div>
            <div class="form-group clearfix">
                <label for="inputEmail" class="col-sm-12 control-label">{$LANG.supportticketsclientemail}</label>
                <div class="col-sm-12">
                    <input type="email" name="email" value="{$email}" class="form-control" id="inputEmail" />
                </div>
            </div>
            <div class="form-group clearfix">
                <label for="inputSubject" class="col-sm-12 control-label">{$LANG.supportticketsticketsubject}</label>
                <div class="col-sm-12">
                    <input type="subject" name="subject" value="{$subject}" class="contact-subject form-control" id="inputSubject" />
                </div>
            </div>
            <div class="form-group clearfix">
                <label for="inputMessage" class="col-sm-12 control-label">{$LANG.contactmessage}</label>
                <div class="col-sm-12">
                    <textarea name="message" rows="20" class="form-control" id="inputMessage">{$message}</textarea>
                </div>
            </div>

            <div class="text-center margin-bottom">
        {include file="$template/includes/captcha.tpl"}
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">{$LANG.contactsend}</button>
                </div>
            </div>

    </form>
    </div>
    </div>

{/if}
