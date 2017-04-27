{strip}
{if !$el.pDirect}
	{include file='header.tpl' title=$el.pTopic}
{/if}
{strip}

<section class="block-about block-faq">
	
        <div class="container">
          	<div class="row">
          		<div class="col-md-10 col-md-offset-1 ">
	              	
	              	<div class="block-inset-content ">
		                <h2 class='title-icons block-title-background'><span>{$el.pTopic}</span> </h2>

     <div class="col-md-10 col-md-offset-1"> 
{$el.pText}
<div class="block-clear"></div>
</div>  

						<div class="block-clear"></div>
						<br/>
		                <br/>
	 				</div>
	 			</div>
 			</div>
 		</div>
 		<div class="block-clear"></div>
</section>

{if !$el.pDirect}
	{include file='footer.tpl'}
{/if}
{/strip}