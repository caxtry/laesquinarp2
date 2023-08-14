<?php
session_start();

// Check if the user is logged in and if user data is available
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in'] || !isset($_SESSION['userData'])) {
    header("Location: index.php");
    exit();
}

// Retrieve user data from the session
$userData = $_SESSION['userData'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Policia</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/svg+xml" href="../asset/icon.png" />
</head>
<body style="background-color: #031f25;">

    <section class="section contact">
        <div class="container">
            
            <div class="title_wrapper">
                <img src="../asset/blobpoliceangery.png" alt="" class="section_badge">
                <br>
                <h3 class="section_title">Solicitar Policia</h3>
                <h4 class="section_eng">Request Police</h4>
                <img src="../asset/title-shap.png" alt="" class="title_shape">
                <a href="../src/dashboard.php#about" class="gobackbutton">Go back</a>
            </div>
            <div class="contact_container">
                <div class="contact_wrapper">
                    <input type="text" name="policianame" placeholder="Nombre y Apellido IC" class="input_field" required>
                    <input type="text" name="policiadiscord" value="<?php echo $userData['name']; ?>" class="readonly_field" required readonly>
                    <input type="text" placeholder="Oficial" readonly class="readonly_field">
                </div>              
                <textarea placeholder="Mensaje de texto"  cols="30" rows="10" class="input_field" required>
1. ¿Tienes acceso a un buen micrófono?


2. ¿Eres una persona que puede trabajar bajo presión?


3. ¿Que es lo primero que tienes que hacer cuando entras en servicio?


4. ¿Como se llama la persona encargada de los patrullaje?


5. ¿Cuándo un oficial puede disparar primero y Porque?


6. ¿Por que te gustaría trabajar en el cuerpo policial?


7. ¿Qué armamento policial puedes vender?


8. ¿Cuándo puedes patrullar solo?


9. ¿En que momento se puede colocar la disponibilidad?


10. ¿Cuál es el código de autorización para hablar por radio?


11. ¿En que momento se leen los derecho a los sospechoso?

</textarea>
<br>
<br>
<p class="team_desc">Una vez seas acceptad@ van a ir a la comisaría y ser entrevistados.</p>
<br>
<p class="team_desc lightred">IMPORTANTE: Recuerden que es importante poner su Nombre y Apellido IC.</p>
                    <form action="">
                        <button type="button" class="button contact_button">
                            Enviar Mensaje
                          </button>
                    </form>
                <a href="../policia/postulaciones.html" class="button contact_button">Postulaciones - Recomendable Leer</a>
            </div>
        </div>
    </section>
    
    <script>

      const ownerMention = "<@&1131823767581102202>";
        
      const handlePoliciaSubmit = () => {
  const webhookUrl = "https://discord.com/api/webhooks/1138136882174230538/kp8OZplgfOLoxILzV1lN0Orkikwep3b9ejhc_se2uA2HmZTsrqD56CK-7dFPXRugOooX";

  const form = {
      name: document.querySelector('.input_field[name="policianame"]').value,
      discord: document.querySelector('.readonly_field[name="policiadiscord"]').value,
      message: document.querySelector('.input_field[placeholder="Mensaje de texto"]').value,
  };

  const data = {
    content: `${ownerMention} Se ha recibido una solicitud de policía:`,
      embeds: [
          {
              title: "Solicitud de Policía",
              description: "Una solicitud de policía ha sido enviada.",
              color: 0x0099ff,
              fields: [
                  {
                      name: '__Nombre y Apellido IC__',
                      value: form.name,
                      inline: true,
                  },
                  {
                      name: '__Discord__',
                      value: form.discord,
                      inline: true,
                  },
                  {
                      name: '__Respuestas__',
                      value: form.message,
                  },
              ],
              footer: {
                  text: 'Solicitud enviada desde el sitio web',
              },
              timestamp: new Date(),
          },
      ],
  };

  fetch(webhookUrl, {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json',
      },
      body: JSON.stringify(data),
  })
      .then(() => {
          alert('Gracias. Tu solicitud ha sido enviada.');
          clearPoliciaForm();
      })
      .catch((error) => {
          console.error(error);
          alert('Oops, algo salió mal. Por favor, inténtalo de nuevo.');
      });
};

const clearPoliciaForm = () => {
  const inputFields = document.querySelectorAll('.input_field');
  inputFields.forEach((input) => {
      input.value = '';
  });
};

document.querySelector('.button.contact_button').addEventListener('click', handlePoliciaSubmit);  
    </script>

<a href="../public/planes.php" class="btn-panel">
    <i class='bx bxl-paypal'></i>
    </a>
</body>
</html>