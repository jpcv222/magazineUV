<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 14:47:31
         compiled from frontend/components/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'call_hook', 'frontend/components/footer.tpl', 19, false),array('function', 'translate', 'frontend/components/footer.tpl', 21, false),array('function', 'url', 'frontend/components/footer.tpl', 40, false),array('function', 'load_script', 'frontend/components/footer.tpl', 130, false),array('modifier', 'assign', 'frontend/components/footer.tpl', 19, false),array('modifier', 'escape', 'frontend/components/footer.tpl', 21, false),)), $this); ?>

	</div><!-- pkp_structure_main -->

		<?php if (empty ( $this->_tpl_vars['isFullWidth'] )): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Sidebar"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'sidebarCode') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'sidebarCode'));?>

		<?php if ($this->_tpl_vars['sidebarCode']): ?>
			<div id="div_complementary" class="pkp_structure_sidebar left" role="complementary" aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.navigation.sidebar"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
">
				<?php echo $this->_tpl_vars['sidebarCode']; ?>

			</div><!-- pkp_sidebar.left -->
		<?php endif; ?>
	<?php endif; ?>
</div><!-- pkp_structure_content -->

<!--
<div id="pkp_content_footer" class="pkp_structure_footer_wrapper" role="contentinfo">

	<div class="pkp_structure_footer">

		<?php if ($this->_tpl_vars['pageFooter']): ?>
			<div class="pkp_footer_content">
				<?php echo $this->_tpl_vars['pageFooter']; ?>

			</div>
		<?php endif; ?>

		<div class="pkp_brand_footer" role="complementary" aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutThisPublishingSystem"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'aboutThisPublishingSystem'), $this);?>
">
				<img alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['packageKey']), $this);?>
" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/<?php echo $this->_tpl_vars['brandImage']; ?>
">
			</a>
			<a href="<?php echo $this->_tpl_vars['pkpLink']; ?>
">
				<img alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.publicKnowledgeProject"), $this);?>
" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/pkp_brand.png">
			</a>
		</div>
	</div>
-->
	<!-------------------------------------------------------------------------- FOOTER UNIVALLE AMX-SOFTWARE.COM --------------------------------------------------->
		
		<div id="foot_rojo_univalle" class="" style="background-color:rgb(209, 46, 46); color:#fff;">
		<br><br>
        	<div class="row">
			<div class="col-sm-1 col-md-2 col-lg-2"></div>
                <div class="col-md-1 col-lg-1">
                    <a href="https://www.univalle.edu.co/" title="Universidad del Valle" target="_blank">
                            <img class="logo-img img-responsive" src="http://www.univalle.edu.co/images/logo-footer.png" longdesc="https://twitter.com/univallecol" alt="Universidad del Valle" width="112" height="159">
                    </a>
                </div>
                <div class="col-md-2 col-lg-2">

                          <p style=" color: #FFFFFFF;font-weight: 200;color: #FFFFFFF;font-size: 	100%;font-weight: 600;margin-top: 10px;margin-bottom: 10px;">Universidad del Valle:</p>

   
                    
                       Cali - Colombia
   						
                    
                </div>
                <div class="col-md-2 col-lg-2">
                 
                    <p style=" color: #FFFFFFF;font-weight: 200;color: #FFFFFFF;font-size: 	100%;font-weight: 600;margin-top: 10px;margin-bottom: 10px;">Dirección:</p>
                    
                        Ciudad Universitaria Meléndez <br>
                        Calle 13 # 100-00 <br>
                        <br>
						Sede San Fernando<br>
						Calle 4B # 36-00
                        
                    
                </div>
    
                <div class="col-md-2 col-lg-2">
          
              
                  <p style=" color: #FFFFFFF;font-weight: 200;color: #FFFFFFF;font-size: 	100%;font-weight: 600;margin-top: 10px;margin-bottom: 10px;">PBX:</p>

					+57 2 3212100 <br>
					A.A.25360
                    
                </div>
    
                <div class="col-md-3 col-lg-3 borde_blanco">
                     <p style=" color: #FFFFFFF;font-weight: 200;color: #FFFFFFF;font-size: 	100%;font-weight: 600;margin-top: 10px;margin-bottom: 10px;">Redes Sociales:</p>
					<div class="row">
                        <div class=" col-sm-6 col-md-6 col-lg-6">
<ul class="redes_sociales_foot">
<li><a href="https://www.facebook.com/universidaddelvalle" target="_blank"><img src="http://www.univalle.edu.co/images/footericons/facebook.png" alt="facebook" title="facebook" longdesc="https://twitter.com/univallecol" class="img-responsive"></a>
</li>
<li>                
<a href="https://www.youtube.com/user/universidaddelvalle1" target="_blank"><img src="http://www.univalle.edu.co/images/footericons/youtube.png" alt="youtube" title="youtube" longdesc="https://twitter.com/univallecol" class="img-responsive"></a>
</li>
<li>
<a href="https://twitter.com/univallecol" target="_blank"><img src="http://www.univalle.edu.co/images/footericons/twitter.png" alt="twitter" title="twitter" longdesc="https://twitter.com/univallecol" class="img-responsive"></a>
</li>
</ul>
</div>

						<div class=" col-sm-6 col-md-6 col-lg-6"></div>
                        
                    </div>
						
                </div> 
			</div>
          <br>
            <center>Institución de educación superior sujeta a inspección y vigilancia por el Ministerio de Educación Nacional</center>
          
		  <br>
        </div>

<section class="home-copyright">
        	<div class="container text-center">
                Copyright 2015 <a href="/">Universidad del Valle</a> - <a href="/index.php/la-universidad/horarios-de-atencion"><p style="display:none">horarios-de-atencion</p>Horarios de atención</a> / Última Actualización: 24-08-2017	        </div>
        </section>
<!-- fin footer univalle -->
</div><!-- pkp_structure_footer_wrapper -->

</div><!-- pkp_structure_page -->

<?php echo $this->_plugins['function']['load_script'][0][0]->smartyLoadScript(array('context' => 'frontend'), $this);?>


<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Footer::PageFooter"), $this);?>


<!-- APARTIR DE AHORA ESCRIBO LOS SCRIPTS -->
<?php echo '
<script>
$(function()
   {

if ( $("#contenido_announ").length > 0 ) {
		var htmlAnnoun = $("#contenido_announ").html();
		var htmlPDFs =  $("#pdfs_numero_visible").html();

		htmlAnnoun  = "<div class=\'cmp_announcements highlight_first\'>" +
						htmlAnnoun +
					  "</div>";
		$("#contenido_announ").html("");

		$("#pdfs_numero_visible").html(htmlAnnoun + htmlPDFs);
}

//lateral		


if ( $("#div_complementary").length > 0 ) {	
		var htmlComplementary = $("#div_complementary").html();
		var htmlLateralNumero =	$("#lateral_numero_visible").html();
		
		htmlComplementary = "<div class=\'\' role=\'complementary\' aria-label=\'Barra lateral\'>" +
							htmlComplementary +
							"</div>";
							
		$("#div_complementary").html("");
		$("#lateral_numero_visible").html(htmlLateralNumero + htmlComplementary); 
}

if($(".additional_content").length > 0){
	
	var htmlAdicional = $(".additional_content").html();
		htmlAdicional = "<div id=\\"contenido_add\\" class=\\"pkp_block  block_information\\"><span class=\\"title\\"> <strong>Contenido Adicional</strong> </span>" + htmlAdicional + "</div>";
		
	var htmlBarraFin = 	$("#lateral_numero_visible").html();
	
	$("#lateral_numero_visible").html(htmlBarraFin + htmlAdicional);
	$(".additional_content").html("");
	
}


});	
</script>
'; ?>

</body>
</html>