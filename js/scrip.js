function validarFormulario() {
    var checkbox = document.getElementById("miCheckbox");
    
    if (!checkbox.checked) {
      alert("Debes aceptar los términos y condiciones.");
      return false; // Evita que el formulario se envíe si el checkbox no está marcado
    }
    
    return true; // Permite que el formulario se envíe si el checkbox está marcado
  }

  function mostrarTerminos() {
    alert("Términos y Condiciones: Al registrarse en nuestro sitio web, usted acepta expresamente y otorga su consentimiento para que gokiebox.com almacene y procese la información proporcionada durante el proceso de registro. Esta información puede incluir, entre otros datos, su nombre, dirección de correo electrónico y cualquier otra información relevante proporcionada voluntariamente. Nos comprometemos a proteger su privacidad y a utilizar su información de acuerdo con nuestra Política de Privacidad. Su información personal será utilizada únicamente con el propósito de administrar su cuenta, proporcionar los servicios solicitados y comunicarnos con usted en relación con dichos servicios. Al aceptar estos términos y condiciones, usted reconoce y acepta que [gokiebox.com] puede almacenar y procesar su información personal de acuerdo con lo establecido anteriormente. Haz click en Aceptar para continuar.")
  }
