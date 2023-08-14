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
                <img src="../asset/feedback.png" alt="" class="section_badge" style="width: 100px;">
                <br>
                <h3 class="section_title">Enviar FeedBack</h3>
                <h4 class="section_eng">Send FeedBack</h4>
                <img src="../asset/title-shap.png" alt="" class="title_shape">
                <a href="../src/dashboard.php#feedback" class="gobackbutton">Go back</a>
            </div>

            <div class="contact_container">
                <div class="contact_wrapper">
                    <input type="text" name="feedbackname" placeholder="Nombre y Apellido IC" required class="input_field">
                    <input type="text" name="feedbackdiscord" placeholder="Nombre de Discord" required class="input_field">
                    <input type="text" placeholder="FeedBack" readonly class="readonly_field">
                </div>              
                <textarea name="aboutyou" placeholder="Sobre Ti" required cols="30" rows="10" class="input_field" id="feedbackTextarea"></textarea>
                <div id="charCount" class="charCount"></div>
                <button type="submit" class="button contact_button" onclick="handlePoliciaSubmit()">
                    Enviar Mensaje
                </button>
            </div>
        </div>
    </section>

   <script>
    const textarea = document.getElementById("feedbackTextarea");
        const charCount = document.getElementById("charCount");

        textarea.addEventListener("input", function() {
            const maxLength = 60; 
            const currentLength = textarea.value.length;
            charCount.innerHTML = `${currentLength}/${maxLength}`;

            if (currentLength > maxLength) {
                textarea.value = textarea.value.substring(0, maxLength);
            }
        });
   </script>
   <script>
    
    const ownerMention = "<@991830733733769327>";
        
        const handleFeedBackSubmit = () => {
    const webhookUrl = "https://discord.com/api/webhooks/1137921024093077564/YosCE8_DcLdUpxmyWPGJzPCvaq6_apkOwjmMfJqjdvKFO5UNNQGa4t_EhpW6m9_FArXO";
  
    const form = {
        name: document.querySelector('.input_field[name="feedbackname"]').value,
        discord: document.querySelector('.input_field[name="feedbackdiscord"]').value,
        message: document.querySelector('.input_field[name="aboutyou"]').value,
    };
  
    const data = {
      content: `${ownerMention} Se ha recibido un FeedBack:`,
        embeds: [
            {
                title: "FeedBack",
                description: "Un mensaje del FeedBack ha sido enviada.",
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
                        name: '__Mensaje__',
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
            alert('Gracias. Tu FeedBack ha sido enviada.');
            clearFeedBackForm();
        })
        .catch((error) => {
            console.error(error);
            alert('Oops, algo salió mal. Por favor, inténtalo de nuevo.');
        });
  };
  
  const clearFeedBackForm = () => {
    const inputFields = document.querySelectorAll('.input_field');
    inputFields.forEach((input) => {
        input.value = '';
    });
  };
  
  document.querySelector('.button.contact_button').addEventListener('click', handleFeedBackSubmit); 
   </script>
</body>
</html>