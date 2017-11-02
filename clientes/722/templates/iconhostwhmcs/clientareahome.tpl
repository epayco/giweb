<div class="tiles clearfix">
    <div class="row">
<section class="statistics">

        <div class="row">

            <div class="col-sm-3">
                    <a href="clientarea.php?action=services"><p id="myStat1" data-dimension="175" data-animationstep="0.5" data-text="{$clientsstats.productsnumactive}" data-width="1" data-fontsize="29" data-percent="100" data-fgcolor="#9ec028" data-bgcolor="#E1E3E4" data-fill="#fff"></p></a>
                    <span>{$LANG.navservices}</span>
            </div>
 {if $registerdomainenabled || $transferdomainenabled}
            <div class="col-sm-3">
                    <a href="clientarea.php?action=domains"><p id="myStat2" data-dimension="175" data-animationstep="1" data-text="{$clientsstats.numactivedomains}" data-width="1" data-fontsize="29" data-percent="100" data-fgcolor="#DE6262" data-bgcolor="#ECECEC" data-fill="#fff"></p></a>
                    <span>{$LANG.navdomains}</span>
            </div>
{elseif $condlinks.affiliates && $clientsstats.isAffiliate}
             <div class="col-sm-3">
                    <a href="affiliates.php"><p id="myStat2" data-dimension="175" data-animationstep="1" data-text="{$clientsstats.numaffiliatesignups}" data-width="1" data-fontsize="29" data-percent="100" data-fgcolor="#DE6262" data-bgcolor="#ECECEC" data-fill="#fff"></p></a>
                    <span>{$LANG.affiliatessignups}</span>
            </div>
 {else}
 <div class="col-sm-3">
                    <a href="clientarea.php?action=quotes"><p id="myStat2" data-dimension="175" data-animationstep="1" data-text="{$clientsstats.numquotes}" data-width="1" data-fontsize="29" data-percent="100" data-fgcolor="#DE6262" data-bgcolor="#ECECEC" data-fill="#fff"></p></a>
                    <span>{$LANG.quotes}</span>
            </div>
 {/if}
            <div class="col-sm-3">
                    <a href="supporttickets.php"><p id="myStat3" data-dimension="175" data-animationstep="1" data-text="{$clientsstats.numactivetickets}" data-width="1" data-fontsize="29" data-percent="100" data-fgcolor="#2A8DE7" data-bgcolor="#ECECEC" data-fill="#fff"></p></a>
                    <span>{$LANG.navtickets}</span>
            </div>

            <div class="col-sm-3">
                    <a href="clientarea.php?action=invoices"><p id="myStat4" data-dimension="175" data-animationstep="1" data-text="{$clientsstats.numunpaidinvoices}" data-width="1" data-fontsize="29" data-percent="100" data-fgcolor="#A66BBE" data-bgcolor="#ECECEC" data-fill="#fff"></p></a>
                    <span>{$LANG.navinvoices}</span>
            </div>

        </div>
    </section>
 </div>

        </div>


<form role="form" method="post" action="clientarea.php?action=kbsearch">
    <div class="row">
        <div class="col-md-12 home-kb-search">
            <input type="text" name="search" class="form-control input-lg" placeholder="{$LANG.clientHomeSearchKb}" />
            <i class="fa fa-search"></i>
        </div>
    </div>
</form>

{foreach from=$addons_html item=addon_html}
    <div>
        {$addon_html}
    </div>
{/foreach}

<div class="client-home-panels">
    <div class="row">
        <div class="col-sm-6">

            {function name=outputHomePanels}
                <div menuItemName="{$item->getName()}" class="panel panel-default panel-accent-{$item->getExtra('color')}{if $item->getClass()} {$item->getClass()}{/if}"{if $item->getAttribute('id')} id="{$item->getAttribute('id')}"{/if}>
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            {if $item->getExtra('btn-link') && $item->getExtra('btn-text')}
                                <div class="pull-right">
                                    <a href="{$item->getExtra('btn-link')}" class="btn btn-default bg-color-{$item->getExtra('color')} btn-xs">
                                        {if $item->getExtra('btn-icon')}<i class="fa {$item->getExtra('btn-icon')}"></i>{/if}
                                        {$item->getExtra('btn-text')}
                                    </a>
                                </div>
                            {/if}
                            {if $item->hasIcon()}<i class="{$item->getIcon()}"></i>&nbsp;{/if}
                            {$item->getLabel()}
                            {if $item->hasBadge()}&nbsp;<span class="badge">{$item->getBadge()}</span>{/if}
                        </h3>
                    </div>
                    {if $item->hasBodyHtml()}
                        <div class="panel-body">
                            {$item->getBodyHtml()}
                        </div>
                    {/if}
                    {if $item->hasChildren()}
                        <div class="list-group{if $item->getChildrenAttribute('class')} {$item->getChildrenAttribute('class')}{/if}">
                            {foreach $item->getChildren() as $childItem}
                                {if $childItem->getUri()}
                                    <a menuItemName="{$childItem->getName()}" href="{$childItem->getUri()}" class="list-group-item{if $childItem->getClass()} {$childItem->getClass()}{/if}{if $childItem->isCurrent()} active{/if}"{if $childItem->getAttribute('dataToggleTab')} data-toggle="tab"{/if}{if $childItem->getAttribute('target')} target="{$childItem->getAttribute('target')}"{/if} id="{$childItem->getId()}">
                                        {if $childItem->hasIcon()}<i class="{$childItem->getIcon()}"></i>&nbsp;{/if}
                                        {$childItem->getLabel()}
                                        {if $childItem->hasBadge()}&nbsp;<span class="badge">{$childItem->getBadge()}</span>{/if}
                                    </a>
                                {else}
                                    <div menuItemName="{$childItem->getName()}" class="list-group-item{if $childItem->getClass()} {$childItem->getClass()}{/if}" id="{$childItem->getId()}">
                                        {if $childItem->hasIcon()}<i class="{$childItem->getIcon()}"></i>&nbsp;{/if}
                                        {$childItem->getLabel()}
                                        {if $childItem->hasBadge()}&nbsp;<span class="badge">{$childItem->getBadge()}</span>{/if}
                                    </div>
                                {/if}
                            {/foreach}
                        </div>
                    {/if}
                    <div class="panel-footer">
                        {if $item->hasFooterHtml()}
                            {$item->getFooterHtml()}
                        {/if}
                    </div>
                </div>
            {/function}

            {foreach $panels as $item}
                {if $item@iteration is odd}
                    {outputHomePanels}
                {/if}
            {/foreach}

        </div>
        <div class="col-sm-6">

            {foreach $panels as $item}
                {if $item@iteration is even}
                    {outputHomePanels}
                {/if}
            {/foreach}

        </div>
    </div>
</div>
