{**
 * templates/frontend/components/footer.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Common site frontend footer.
 *
 * @uses $isFullWidth bool Should this page be displayed without sidebars? This
 *       represents a page-level override, and doesn't indicate whether or not
 *       sidebars have been configured for thesite.
 *}

	</div><!-- pkp_structure_main -->

	{* Sidebars *}
	{if empty($isFullWidth)}
		{call_hook|assign:"sidebarCode" name="Templates::Common::Sidebar"}
		{if $sidebarCode}
			<div class="pkp_structure_sidebar left" role="complementary" aria-label="{translate|escape key="common.navigation.sidebar"}">
				{$sidebarCode}
			</div><!-- pkp_sidebar.left -->
		{/if}
	{/if}
</div><!-- pkp_structure_content -->

<div id="pkp_content_footer" class="pkp_structure_footer_wrapper" role="contentinfo">

	<div class="pkp_structure_footer">

		{if $pageFooter}
			<div class="pkp_footer_content">
				{$pageFooter}
			</div>
		{/if}

		<div class="pkp_brand_footer" role="complementary" aria-label="{translate|escape key="about.aboutThisPublishingSystem"}">
			<a href="{url page="about" op="aboutThisPublishingSystem"}">
				<img alt="{translate key=$packageKey}" src="{$baseUrl}/{$brandImage}">
			</a>
			<a href="{$pkpLink}">
				<img alt="{translate key="common.publicKnowledgeProject"}" src="{$baseUrl}/lib/pkp/templates/images/pkp_brand.png">
			</a>
		</div>
	</div>


	<!--****************************************** FOOTER UNIVALLE POWER BY AMX-SOFTWARE.COM ***************************************************-->
	<!--****************************************************************************************************************************************-->

<div id="footer_univalle" >

		
		<div class="" style="background-color:rgb(209, 46, 46); color:#fff;">
		<br><br>
        	<div class="row">
			<div class="col-sm-1 col-md-2 col-lg-2"></div>
                <div class="col-md-1 col-lg-1">
                    <a href="/" title="Universidad del Valle">
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
    
                <div class="col-md-3 col-lg-3">
                     <p style=" color: #FFFFFFF;font-weight: 200;color: #FFFFFFF;font-size: 	100%;font-weight: 600;margin-top: 10px;margin-bottom: 10px;">Redes Sociales:</p>
					<div class="row">
                        <div class=" col-sm-4 col-md-4 col-lg-4"><a href="https://www.facebook.com/universidaddelvalle" target="_blank"><img src="http://www.univalle.edu.co/images/footericons/facebook.png" alt="facebook" title="facebook" longdesc="https://twitter.com/univallecol" class="img-responsive"></a></div>
                        
						<div class=" col-sm-4 col-md-4 col-lg-4"><a href="https://www.youtube.com/user/universidaddelvalle1" target="_blank"><img src="http://www.univalle.edu.co/images/footericons/youtube.png" alt="youtube" title="youtube" longdesc="https://twitter.com/univallecol" class="img-responsive"></a></div>
                        
						<div class=" col-sm-4 col-md-4 col-lg-4"><a href="https://twitter.com/univallecol" target="_blank"><img src="http://www.univalle.edu.co/images/footericons/twitter.png" alt="twitter" title="twitter" longdesc="https://twitter.com/univallecol" class="img-responsive"></a></div>
                    </div>
						
                </div> 
			</div>
          <br>
            <center>Institución de educación superior sujeta a inspección y vigilancia por el Ministerio de Educación Nacional</center>
          
		  <br>
        </div>
		
		


    
    <!----------- Footer ------------>
    <footer class="footer container-fluid footer-bs" style="background-color:rgb(88,89,91); color:#fff;">
        <div class="row">
        	

        	<div class="col-md-1 col-lg-1  ">
					<style>
						
						ul li a {
							color:#fff;
						}
						
					</style>
                </div>
        
            
            	<div class="col-md-2 col-lg-2  ">
            		<h4 style="color:#E7A643">La Universidad</h4>
                    <ul class="" >
                        <li><a target="_blank" href="http://secretariageneral.univalle.edu.co/consejo-superior/">Consejo superior</a></li>
                   
                                <li><a href="http://secretariageneral.univalle.edu.co/consejo-academico/"><p style="display:none">consejo-academico</p> Consejo Académico</a></li>
                                <li><a href="http://www.univalle.edu.co/index.php/la-universidad/rectoria"><p style="display:none">rectoria</p> Rectoría</a></li>
                                <li><a href="http://www.univalle.edu.co/index.php/la-universidad/nuestros-simbolos/himno-univalle">Nuestros Símbolos</a></li>
                                <li><a href="http://www.univalle.edu.co/index.php/la-universidad/acerca-de-univalle/mision"><p style="display:none">acerca-de-univalle</p> Acerca de Univalle</a></li>
                                <li><a href="http://www.univalle.edu.co/index.php/la-universidad/dependencias/vicerrectorias"><p style="display:none">dependencias</p> Dependencias</a></li>
                                <li><a href="http://museoarqueologico.univalle.edu.co/museo.html" target="_blank"><p style="display:none">museoarqueologico</p> Museos y Colecciones</a></li>
                                <li><a href="https://www.facebook.com/universidaddelvalle/photos_stream?tab=photos_albums" target="new">Fotos de la Universidad</a></li>
                                <li><a href="http://www.univalle.edu.co/mapas/index.html" target="_blank">Mapa del Campus</a></li>
                                <li><a href="http://www.univalle.edu.co/index.php/la-universidad/tour-por-la-universidad"><p style="display:none">tour-por-la-universidad</p>  Tour por la Universidad</a></li>
                                <li><a href="http://daca.univalle.edu.co/normatividad.html"><p style="display:none">daca</p>  Normatividad</a></li>
                                <li><a href="http://planeacion.univalle.edu.co/plandesarrollo/versiones/7_ProyectoInstitucional.pdf">Proyecto institucional</a></li>
                                <li><a href="http://www.univalle.edu.co/la-universidad/horarios-de-atencion"><p style="display:none">horarios-de-atencion</p>  Horarios de atención</a></li>
                                <li><a href="http://portaldeninos.univalle.edu.co/" target="_blank">Portal de niños</a></li>
                    </ul>
                </div>
            	

            	<div class="col-md-2 col-lg-2  ">
            	<h4 style="color:#E7A643">Estudia en Univalle</h4>
                    <ul class="list">
  <li><a href="http://www.univalle.edu.co/index.php/formacion/pregrado"><p style="display:none">pregrado</p>Pregrado</a></li>
                                <li><a href="http://www.univalle.edu.co/index.php/formacion/postgrado">Posgrado</a></li>
                                <li><a href="http://www.univalle.edu.co/index.php/formacion/diplomados"><p style="display:none">diplomados</p>Diplomados</a></li>
                                <li><a href="http://www.univalle.edu.co/index.php/formacion/cursos-y-talleres"><p style="display:none">cursos-y-talleres</p>Cursos y Talleres</a></li>
                    </ul>
                </div>
          

        		<div class="col-md-2 col-lg-2  ">
            	<h4 style="color:#E7A643">Sedes Regionales</h4>
                    <ul class="list">
 <li><a href="http://tulua.univalle.edu.co/" target="_blank">Tuluá</a></li>
                              <li><a href="http://buga.univalle.edu.co/" target="_blank">Buga</a></li>
                                <li><a href="http://www.univallecaicedonia.edu.co/web/index.html" target="_blank"><p style="display:none">univallecaicedonia</p>Caicedonia</a></li>
                                <li><a href="http://cartago.univalle.edu.co/" target="_blank">Cartago</a></li>
 <li><a href="http://nortedelcauca.univalle.edu.co/" target="_blank">Norte del Cauca</a></li>
                                <li><a href="http://pacifico.univalle.edu.co/" target="_blank">Pacífico</a></li>
                                <li><a href="http://palmira.univalle.edu.co/">Palmira</a></li>
                                <li><a href="http://yumbo.univalle.edu.co/" target="_blank">Yumbo</a></li>
                                <li><a href="http://zarzal.univalle.edu.co/WebNueva/index.html" target="_blank"><p style="display:none">zarzal</p>Zarzal</a></li>
                                <li><a href="/index.php/direccion-de-regionalizacion" target="_blank"><p style="display:none">univallecaicedonia</p>Regionalización</a></li>
                    </ul>
                </div>


        	<div class="col-md-2 col-lg-2  ">
            	<h4 style="color:#E7A643">Investigación</h4>
                    <ul class="list">
 <li><a href="http://viceinvestigaciones.univalle.edu.co/index.php/acerca-de-la-vicerrectoria-de-investigacion">Acerca de la Vicerrectoría de investigaciones</a></li>
                                <li><a href="http://viceinvestigaciones.univalle.edu.co/index.php/institutos-centros-y-grupos">Institutos, Centros y Grupos</a></li>
                                <li><a href="http://viceinvestigaciones.univalle.edu.co/index.php/convocatorias">Convocatorias</a></li>
                                <li><a href="http://viceinvestigaciones.univalle.edu.co/index.php/universidad-empresa-otri">Universidad - Empresa (OTRI)</a></li>
                              	<li><a href="http://viceinvestigaciones.univalle.edu.co/index.php/becas">Becas</a></li>
                                <li><a href="http://viceinvestigaciones.univalle.edu.co/index.php/gestion-de-la-investigacion-y-formacion">Gestión de la investigación y formación</a></li>
                                <li><a href="http://ori.univalle.edu.co/">Dirección de Relaciones Internacionales</a></li>
                                <li><a href="http://programaeditorial.univalle.edu.co/">Programa Editorial</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-lg-2  ">
            	<h4h4 style="color:#E7A643">Publicaciones</h4>
                    <ul class="list">
  <li><a href="http://programaeditorial.univalle.edu.co/" target="_blank">Libros</a></li>
                                <li><a href="http://mafalda.univalle.edu.co/publicaciones/revistas.html" target="_blank">Revistas y boletines</a></li>
                                <li><a href="http://mafalda.univalle.edu.co/publicaciones/otraspublicaciones.html" target="_blank">Otras publicaciones</a></li>
                                <li><a href="http://www.univalle.edu.co/2014-03-31-13-55-29/periodico-campus" target="_blank">Periódico campus</a></li>
                    </ul>
                </div>

        </div>
    </footer>
  
	</div>

<!--****************************************************************************************************************************************-->
<!--****************************************************************************************************************************************-->

</div><!-- pkp_structure_footer_wrapper -->

</div><!-- pkp_structure_page -->

{load_script context="frontend"}

{call_hook name="Templates::Common::Footer::PageFooter"}
</body>
</html>
