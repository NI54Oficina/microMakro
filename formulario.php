<?php

include("head.php");
include("header.php");
?>
	
<div class="container">
    <div class="row" style="margin-top: 30px;">
        <div class="col-xs-12">

           

            <form id="form_email" action="/promo-registrar" method="post">
                <input type="hidden" name="envia" id="envia" value="1" />
                <div class="form_makro form_mail row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-xs-5"><label>Razón Social</label></div>
                            <div class="col-xs-7"><input name="razonSocial" type="text" class="form_input" ></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5"><label>Nombre y Apellido<sup>*</sup></label></div>
                            <div class="col-xs-7"><input name="nombre" type="text" class="form_input" required></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5"><label>Domicilio</label></div>
                            <div class="col-xs-7"><input name="domicilio" type="text" class="form_input"></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5"><label>Localidad</label></div>
                            <div class="col-xs-7"><input name="localidad" type="text" class="form_input"></div>
                        </div>
						<input name="provincia" type="hidden" value="TUCUMAN" />
                         <input name="pasaporte" value="si" type="hidden" />
						 
                        <div class="row">
                            <div class="col-xs-5"><label>N° de Pasaporte</label></div>
                            <div class="col-xs-7">
                                <input name="nro_pasaporte[0]" maxlength="2" class="form_input numeric" type="text" style="width: 15%" required>
                                <input name="nro_pasaporte[1]" maxlength="7" class="form_input numeric" type="text" style="width: 65%" required>
                                <input name="nro_pasaporte[2]" maxlength="2" class="form_input numeric" type="text" style="width: 15%" required>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-xs-5"><label>Rubro<sup>*</sup></label></div>
                            <div class="col-xs-7">
                                <div class="box_select">
                                    <select name="rubro" required>
                                        <option value="">Seleccionar</option>
                                        <option value="Almacén" >Almacén</option>
                                        <option value="Autoservicios/supermercados">Autoservicios/supermercados</option>
                                        <option value="Bares/discotecas">Bares/discotecas</option>
                                        <option value="Carnicerías">Carnicerías</option>
                                        <option value="Centros médicos/hospitales">Centros médicos/hospitales</option>
                                        <option value="Comercio por mayor de alimentos">Comercio por mayor de alimentos</option>
                                        <option value="Comercios no alimentos">Comercios no alimentos</option>
                                        <option value="Escuelas/colegios/universidades">Escuelas/colegios/universidades</option>
                                        <option value="Fast food">Fast food</option>
                                        <option value="Hoteles">Hoteles</option>
                                        <option value="Kioscos">Kioscos</option>
                                        <option value="Oficinas">Oficinas</option>
                                        <option value="Otros comercios de alimentos">Otros comercios de alimentos</option>
                                        <option value="Panaderías">Panaderías</option>
                                        <option value="Particular">Particular</option>
                                        <option value="Pizzerías">Pizzerías</option>
                                        <option value="Restaurantes">Restaurantes</option>
                                        <option value="Servicios de catering">Servicios de catering</option>
                                        <option value="Servicios en general">Servicios en general</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5"><label>Celular </label></div>
                            <div class="col-xs-7">
                                <input name="celular[area]" class="form_input numeric" type="text" size="5" style="width: 17%">&nbsp;
                                <input name="celular[numero]" class="form_input numeric" type="text" size="30" style="width: 79%">

                                <div class="cod_area" style="left:30%;">Ej: 011 (15) 25697386</div>
                                <div class="cod_area" style="left:6%;">
                                    COD. AREA
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5"><label>Quiero recibir ofertas en el celular<sup></sup></label></div>
                            <div class="col-xs-7">
                                <input type="checkbox" value="1" name="recive_celu"> Sí &nbsp;&nbsp;
                                <input type="checkbox" value="0" name="recive_celu"> No
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form_checkboxes font12grey" style="display:none;">
                           
                            
                                <div class="col-sm-5"><input type="checkbox" name="sucursal" value="Avellaneda" /> &nbsp;Avellaneda</div>
                                <div class="col-sm-3"><input type="checkbox" name="sucursal" value="Haedo" /> &nbsp;Haedo</div>
                                <div class="col-sm-4"><input type="checkbox" name="sucursal" value="Ituizaingo" /> &nbsp;Ituzaingó</div>
                            
                                <div class="col-sm-5"><input type="checkbox" name="sucursal" value="Lomas de zamora"/> &nbsp;Lomas de Zamora</div>
                                <div class="col-sm-3"><input type="checkbox" name="sucursal" value="Olivos"/> &nbsp;Olivos</div>
                                <div class="col-sm-4"><input type="checkbox" name="sucursal" value="Quilmes"/> &nbsp;Quilmes</div>
                            
                                <div class="col-sm-3"><input type="checkbox" name="sucursal" value="San Justo"/> &nbsp;San Justo</div>
                                <div class="col-sm-4"><input type="checkbox" name="sucursal" value="San Martin"/> &nbsp;San Martín</div>
                       
                                <div class="col-sm-5"><input type="checkbox" name="sucursal" value="Bahía Blanca"/> &nbsp;Bahía Blanca</div>
                                <div class="col-sm-3"><input type="checkbox" name="sucursal" value="Córdoba"/> &nbsp;Córdoba</div>
                                <div class="col-sm-4"><input type="checkbox" name="sucursal" value="Corrientes"/> &nbsp;Corrientes</div>
                                <div class="col-sm-5"><input type="checkbox" name="sucursal" value="Mar del Plata"/> &nbsp;Mar del Plata</div>
                                <div class="col-sm-3"><input type="checkbox" name="sucursal" value="Mendoza" checked /> &nbsp;Mendoza</div>
                                <div class="col-sm-4"><input type="checkbox" name="sucursal" value="Neuquén"/> &nbsp;Neuquén</div>
                                <div class="col-sm-5"><input type="checkbox" name="sucursal" value="Posadas"/> &nbsp;Posadas</div>
                                <div class="col-sm-3"><input type="checkbox" name="sucursal" value="Río Cuarto"/> &nbsp;Río Cuarto</div>
                                <div class="col-sm-4"><input type="checkbox" name="sucursal"  value="Rosario"/> &nbsp;Rosario</div>
                                <div class="col-sm-5"><input type="checkbox" name="sucursal" value="San Juan"/> &nbsp;San Juan</div>
                                <div class="col-sm-3"><input type="checkbox" name="sucursal" value="Santa Fé"/> &nbsp;Santa Fe</div>
                                <div class="col-sm-4"><input type="checkbox" name="sucursal" value="Tucumán"/> &nbsp;Tucumán</div>
                        </div>            
                        <div class="row" style="margin-top: 40px;">
                            <div class="col-xs-5"><label>Email<sup>*</sup></label></div>
                            <div class="col-xs-7"><input name="email" type="email" class="form_input" required></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5"><label>Teléfono de Contacto</label></div>
                            <div class="col-xs-7"><input type="text" name="telefono" class="form_input numeric"></div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="form_buttons row" style="position:relative; left:500px;height:1px;top:-30px;">
                <button onclick="resetForm()">Limpiar formulario</button>
                <button form="form_email">Enviar</button>
            </div>

            <div class="form_campos_obligatorios font11grey">
                <sup>*</sup> Campos obligatorios
            </div>

           
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.numeric.js"></script>
<script src="/assets/js/fileinput.min.js"></script>
<script src="/assets/js/fileinput_locale_es.js"></script>
<script type="text/javascript" src="js/form-promocion.js"></script>