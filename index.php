<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contacto</title>
   <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/contacto.css"/>
</head>
<body>   

   <div class="container justify-content-center">

         <form class="form" action="php/formulario-contacto.php" method="POST" onsubmit="return validarContacto();">

             <div class="row form-group">
               <label for="nombre" class="col-form-label col-md-4">Nombre Completo: <span>*</span></label>
               <div class="col-md-8 animacion" id="div_empresa">
                 <input
                   type="text"
                   class="form-control"
                   id="id_nombre"
                  name="nm_username"
                 />
                 <small class="error" id="error_nombre">Campo requerido, compruebe la escritura.</small>
               </div>
             </div>

             <div class="row form-group">
               <label for="empresa" class="col-form-label col-md-4 animacion">Empresa:</label>
               <div class="col-md-8 animacion" id="div_empresa">
                 <input
                   type="text"
                   class="form-control"
                   id="id_empresa"
                   name="nm_empresa"
                 />
                 <small class="error" id="error_empresa">Minimo de caracateres incorrecto.</small>
               </div>
             </div>

             <div class="row form-group">
               <label for="nombre" class="col-form-label col-md-4 animacion">Número Telefonico: <span>*</span></label>
               <div class="col-md-8 animacion" id="div_number">
                 <input 
                   type="text" 
                   class="form-control " 
                   id="id_phoneNumber" 
                   name="nm_phone"
                 />
                 <small class="error" id="error_numero">El numero no contiene letras y son 10 digitos..</small>
               </div>
             </div>

             <div class="row form-group">
               <label for="correoElectronico" class="col-form-label col-md-4 animacion">Correo Electronico:</label>
               <div class="col-md-8 animacion" id="div_email">
                  <input 
                     type="text" 
                     class="form-control" 
                     id="id_email" 
                     name="nm_email" 
                     placeholder="ejemplo@ejemplo.com"
                  />
                  <small class="error" id="error_email">Compruebe la direccion de correo electronico</small>
               </div>
             </div>

            <div class="row form-group">
               <label for="Textarea" class="col-form-label col-md-4 animacion ">Asunto: <span>*</span></label>
               <div class="col-md-8 animacion">
                  <textarea
                     class="form-control txt-area-css"
                     rows="8"
                     id="id_asunto"
                     name="nm_asunto"
                  ></textarea>
                  <small class="error" id="error_asunto">Ingrese el motivo de contacto.</small><br>

                  <p>Todos los campos marcados con <span>*</span> son obligatorios.</p>
               </div>
            </div>

            <input
               type="submit"
               class="btn btn-outline-primary btn-block button-enviar"
               id="id_btn_enviar"
               name="submit"
               value="Enviar"
            >
            </input>

         </form>
   </div>

   <script src="js/formulario-contacto.js"></script>
</body>
</html>