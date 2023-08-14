<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postulaciones</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/svg+xml" href="../asset/icon.png" />
</head>
<body style="background-color: #031f25;">

    <section class="section brand" id="feedback">
        <div class="container">
            <img src="../asset/mail.png" alt="" class="section_badge">
            <br>
            <h3 class="section_title">Postulaciones</h3>
            <img src="../asset/title-shap.png" alt="" class="title_shape">
            <a href="../src/dashboard.php#administrador" class="gobackbutton">Go back</a>
            <br>
            <div class="skills_containerPolice">
                <div class="skills_containerPolice2">
                    <p class="team_desc">1. Minimo 18 años. </p>
                    <p class="team_desc">2. Minimo 15 horas o mas a la semana conectado. </p>
                    <p class="team_desc">3. No ser administrador en otro servidor!</p>
                    <p class="team_desc">4. Una vez sea aceptad@ la solicitud. Vas a pasar a una entrevista en Discord. (Examen Verbal)</p>
                    <br>
                    <p class="team_desc">Plantilla</p>
                    <br>
                    <p class="team_desc">Nombre:</p>
                    <p class="team_desc">Nacionalidad:</p>
                    <p class="team_desc">Cuanto tiempo llevas en el servidor (La Esquina RP):</p>
                        <p class="team_desc">¿Que edad tienes?:</p>
                        <p class="team_desc">¿Por que quieres ser administrador?:</p>
                        <p class="team_desc">Que podemos esperar de ti como administrador en nuestro servidor?:</p>
                </div>
                <button id="copyButton" class="button contact_button">Copiar Preguntas</button>
            </div>
        </div>
    </section>

    <script>
        // JavaScript function to copy questions
        document.getElementById('copyButton').addEventListener('click', function() {
            const questionsContainer = document.querySelector('.skills_containerPolice2');
            const questionsText = questionsContainer.textContent;
            
            // Create a temporary textarea element to copy the text
            const tempTextArea = document.createElement('textarea');
            tempTextArea.value = questionsText;
            document.body.appendChild(tempTextArea);
            tempTextArea.select();
            document.execCommand('copy');
            document.body.removeChild(tempTextArea);

            alert('¡Preguntas copiadas al portapapeles!');
        });
    </script>
    
</body>
</html>
