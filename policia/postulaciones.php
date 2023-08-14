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
            <img src="../asset/pepe-police.png" alt="" class="section_badge">
            <br>
            <h3 class="section_title">Postulaciones</h3>
            <img src="../asset/title-shap.png" alt="" class="title_shape">
            <a href="./solicitarpolicia.html" class="gobackbutton">Go back</a>
            <br>
            <div class="skills_containerPolice">
                <div class="skills_containerPolice2">
                    <p class="team_desc">1. ¿Tienes acceso a un buen micrófono?</p>
                    <br>
                    <p class="team_desc">2. ¿Eres una persona que puede trabajar bajo presión?</p>
                    <br>
                    <p class="team_desc">3. ¿Que es lo primero que tienes que hacer cuando entras en servicio?</p>
                    <br>
                    <p class="team_desc">4. ¿Como se llama la persona encargada de los patrullaje?</p>
                    <br>
                    <p class="team_desc">5. ¿Cuándo un oficial puede disparar primero y Porque?</p>
                    <br>
                    <p class="team_desc">6. ¿Por que te gustaría trabajar en el cuerpo policial?</p>
                    <br>
                    <p class="team_desc">7. ¿Qué armamento policial puedes vender?</p>
                    <br>
                    <p class="team_desc">8. ¿Cuándo puedes patrullar solo?</p>
                    <br>
                    <p class="team_desc">9. ¿En que momento se puede colocar la disponibilidad?</p>
                    <br>
                    <p class="team_desc">10. ¿Cuál es el código de autorización para hablar por radio?</p>
                    <br>
                    <p class="team_desc">11. ¿En que momento se leen los derecho a los sospechoso?</p>
                </div>
                <br>
                <p class="team_desc">Una vez seas acceptad@ van a ir a la comisaría y ser entrevistados.</p>
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
