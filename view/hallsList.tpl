{include file="helpers/head.tpl"}
{include file="helpers/headerLinks.tpl"}
<br>
<div id="title">ЗАЛИ</div>
<div id="choose"><img src="{$BASE_PATH}img/popcorn-pack.png" align="middle">ИЗБЕРИ ЗАЛА</div>
{$msg}
<!--List all halls in the chosen cinema. Name of hall must be link to program for this hall with hall id-->
    {foreach from=$halls key=arrayIndex item=hall}
            <div class="halls"><a href="{$BASE_PATH}?target=program&action=list&hall={$hall->getHallId()}">
                   <span>{$hall->getHallType()}</span>
                </a>
            </div>
    {/foreach}
{include file="helpers/foot.tpl"}
