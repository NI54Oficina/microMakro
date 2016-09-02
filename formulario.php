<?php

include("head.php");
include("header.php");
?>
	
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div id="form-container" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 video-section" >
		<div class="col-lg-1" style="height:10px;display:inline-block;"></div>
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="display:inline-block;">

           

            <form id="form_email" action="/promo-registrar" method="post">
                <input type="hidden" name="envia" id="envia" value="1" />
                <div class="form_makro form_mail ">
                    <div class="col-sm-6 columna-form" style="">
                        <div class="col-xs-12">
                            <div class="col-xs-5"><label>Razón Social</label></div>
                            <div class="col-xs-7"><input name="razonSocial" type="text" class="form_input" ></div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-5"><label>Nombre y Apellido<sup>*</sup></label></div>
                            <div class="col-xs-7"><input name="nombre" type="text" class="form_input" required></div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-5"><label>Domicilio</label></div>
                            <div class="col-xs-7"><input name="domicilio" type="text" class="form_input"></div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-5"><label>Localidad</label></div>
                            <div class="col-xs-7"><input name="localidad" type="text" class="form_input"></div>
                        </div>
						<input name="provincia" type="hidden" value="TUCUMAN" />
                         <input name="pasaporte" value="si" type="hidden" />
						 
                        <div class="col-xs-12">
                            <div class="col-xs-5"><label>N° de Pasaporte</label></div>
                            <div class="col-xs-7">
                                <input name="nro_pasaporte[0]" maxlength="2" class="form_input numeric" type="text" style="width: 15%" required>
                                <input name="nro_pasaporte[1]" maxlength="7" class="form_input numeric" type="text" style="width: 65%" required>
                                <input name="nro_pasaporte[2]" maxlength="2" class="form_input numeric" type="text" style="width: 15%" required>
                            </div>
                        </div>    
                        <div class="col-xs-12">
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
                        
                    </div>
                    <div class="col-sm-6 columna-form" >
						<div class="col-xs-12">
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
							<div class="col-xs-12">
								<div class="col-xs-5"><label>Quiero recibir ofertas en el celular<sup></sup></label></div>
								<div class="col-xs-7">
									<input type="checkbox" value="1" name="recive_celu"> Sí &nbsp;&nbsp;
									<input type="checkbox" value="0" name="recive_celu"> No
								</div>
							</div>
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
                        <div class="col-xs-12" >
                            <div class="col-xs-5"><label>Email<sup>*</sup></label></div>
                            <div class="col-xs-7"><input name="email" type="email" class="form_input" required></div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-5"><label>Teléfono de Contacto</label></div>
                            <div class="col-xs-7"><input type="text" name="telefono" class="form_input numeric"></div>
                        </div>
						 <div class="form_buttons col-xs-12" >
							<button onclick="resetForm()">Limpiar formulario</button>
							<button form="form_email">Enviar</button>
						</div>
                    </div>
                </div>
				
            </form>
           

            <div class="form_campos_obligatorios font11grey">
                <sup>*</sup> Campos obligatorios
            </div>

           
        </div>
    </div>

	<div class="" id="voucher-container"></div>
	</div>
	
<style>
.form_title{
    font: 17px OpenSansRegular;
    color: #fff;
    background: url('/assets/images/formularios/celular/header-cel.png') no-repeat;
    background-size: cover;
    padding: 25px 0 35px 120px;
}

.form_makro{
    font: 14px OpenSansRegular;
    color: #929292;
    
}

.form_makro .row{
    margin-bottom: 15px;
}

.form_makro sup, .form_campos_obligatorios sup{
    color: #df001d;
    font-size: 12px;
}

.form_makro span{
    font-size: 10px;
    text-align: right;
}

.form_campos_obligatorios{
    /*border-bottom: 1px #929292 solid;*/
    margin-top: 50px;
    padding-bottom: 15px;
}

.form_condiciones{
    margin-top: 20px;
}

.form_condiciones p{
    font-size: 10px;
    color: #929292;
    margin: 0;
}

.form_buttons{
    margin: 30px 0;
}

.form_buttons button{
    font: 12px OpenSansRegular;
    color: #fff;
    border: none;
   background-color:#D81922;
   border-radius:5px;
    padding: 6px 0 10px 0; 
    width: 30%;
    outline: none;
}

.form_title_mail{
    background: url('/assets/images/formularios/email/header-email.png') no-repeat;
    background-size: cover;
}

.form_title_contacto{
    background: url('/assets/images/formularios/email/header-contacto.png') no-repeat;
    background-size: cover;
}

.box_select{
    background: url('/assets/images/formularios/seleccionar.png') no-repeat #fff;
    background-size: contain;
    overflow: hidden;
    cursor: pointer;
}

select{    
    border: none;
    width: 120%;
    outline: none;
    background-color: transparent;
    cursor: pointer;
}

.form_input{
    border: 1px #929292 solid;
    border-radius: 6px;
    -webkit-box-shadow: 0px 0px 3px 0px rgba(50, 50, 50, 0.75);
    -moz-box-shadow:    0px 0px 3px 0px rgba(50, 50, 50, 0.75);
    box-shadow:         0px 0px 3px 0px rgba(50, 50, 50, 0.75);
    font: 14px OpenSansRegular;
    color: #929292;
    padding: 3px 5px 3px 10px;
}

.form_mail input[type="text"], .form_mail input[type="email"]{
    width: 100%;
    background-size: cover;
    padding: 6px 5px;
}

.form_mail .box_select{
    background-size: contain;
    padding: 4px 0 6px 4px;
}

.form_mail label{
    padding: 3px 0;
    font-weight: normal;
}

.cod_area{
    font-size:7px;
    color: #929292;
    position: absolute;
    left: 19.5%;
    top: 115%;
}

.form_title_contacto h1{
    margin: 0;
    font-size: 20px;
    font-weight: bold;
}

.form_title_contacto{
    padding: 25px 0 35px 140px;
    background: url('/assets/images/formularios/contactanos/header-contacto.png') no-repeat;
    background-size: cover;
    height:100px;
    padding: 10px 0 35px 110px;
}

.form_celular input{
    width: 100%;
}

.form_celular .row{
    margin-bottom: 20px;
}

textarea{
    width: 100%;
}

.form_checkboxes label{
    display: block;
    margin-top: 10px;
    font: 14px OpenSansRegular;
    color: #929292;
}

.form_checkboxes .row{
    margin-bottom: 5px;
}

.grey_button {
    background: url('/assets/images/formularios/email/boton-celu.png') no-repeat;
    background-size: contain;
    border: 0;
    font-size: 12px;
    color: #fff;
    padding: 10px 20px 20px 20px;
    outline: none;
}

.form_campos_obligatorios {
    margin-top: 10px;
} 

.columna-form{
	padding:30px;
	
}
.columna-form>div{
	padding-top:20px;
}
.columna-form div{
	display:inline-block;
}
form *{
	font-family:"OpenSansRegular";
}
</style>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.numeric.js"></script>
<script src="/assets/js/fileinput.min.js"></script>
<script src="/assets/js/fileinput_locale_es.js"></script>
<script type="text/javascript" src="js/form-promocion.js"></script>

<?php include("footer.php"); ?>