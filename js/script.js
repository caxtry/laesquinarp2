/*===== SHOW MENU =====*/

const navToggle = document.querySelector(".nav_toggle"),
      navMenu = document.querySelector(".nav_menu");


    navToggle.addEventListener("click", () => {
        navMenu.classList.toggle("show-menu");
        navToggle.classList.toggle("active");
    })


/*===== TYPING TEXT =====*/

    var typed = new Typed(".profession_text", {
        strings: ["La Esquina RP"],
        typeSpeed: 100,
        // backSpeed: 70,
        loop: false,
    })



/*===== COUNTER =====*/

    const counters = document.querySelectorAll(".counter");

    counters.forEach((counter) => {
      counter.innerText = "0";
    
      const updateCounter = () => {
        const target = +counter.getAttribute("data-counter");
        const c = +counter.innerText;
    
        const increment = target / 200;
    
        if (c < target) {
          counter.innerText = `${Math.ceil(c + increment)}`;
          setTimeout(updateCounter, 40);
        } else {
          counter.innerText = target;
        }
      };
    
      updateCounter();
    });
    

    /*===== SWIPER =====*/

    var swiper = new Swiper(".brand_container", {
        slidesPerView: 2,
        spaceBetween: 50,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        },
        breakpoints: {
            640: {
              slidesPerView: 2,
              spaceBetween: 50,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 40,
            },
            1024: {
              slidesPerView: 4,
              spaceBetween: 50,
            },
          },

          loop: true,
      });


/*===== BACK TOP BUTTON =====*/

      const back_btn_top = document.querySelector(".btn-top");

      window.addEventListener("scroll", () => {
        if(window.scrollY >= 50){
           back_btn_top.classList.add("active")
        }else{
            back_btn_top.classList.remove("active")
        }
      })



/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 250,
//     reset: true
});

/*===== WEBHOOK =====*/

const handleSubmit = (e) => {
  e.preventDefault();

  const ownerMention = "<@&1095611865108852773>";

  const webhookUrl = "https://discord.com/api/webhooks/1137890383339208734/Bh-ysC0QBr7dopzJ0_kB67VLoG6F8hcGU7KzB7Qkgy1mzLvjA4LiycGOSQsfZt8x9OW4";

  const form = {
      name: document.querySelector('.input_field[name="adminname"]').value,
      discord: document.querySelector('.readonly_field[name="admindiscord"]').value,
      message: document.querySelector('.input_field[placeholder="Mensaje de texto"]').value,
  };

  const data = {
    content: `${ownerMention} Se ha recibido una solicitud de Administrador:`,
      embeds: [
          {
              title: `Solicitud de Admin`,
              description: `Una solicitud de Administrador ha sido enviada.`,
              color: 0x7289da,
              fields: [
                  {
                      name: '__Nombre__',
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
                  text: 'Mensaje enviado desde el sitio web',
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
          alert('Gracias. Te atenderemos lo más pronto posible');
          clearForm();
      })
      .catch((error) => {
          console.error(error);
          alert('Ah, algo salió mal. Por favor inténtelo de nuevo.');
      });
};

const clearForm = () => {
  const inputFields = document.querySelectorAll('.input_field');
  inputFields.forEach((input) => {
      input.value = '';
  });
};

document.querySelector('.button.send_button').addEventListener('click', handleSubmit);

const handleWLSubmit = (event) => {
    event.preventDefault();

    const ownerMention2 = "<@&1095611865108852773>";
    const webhookUrl = "https://discord.com/api/webhooks/1137890068984508456/SytsZ_hBdrcVvcHTM3woUTtY0jgzeJxGsE_Nm6oQLBci9AicQk_ZRhs4c6umRhiIrfW_";
  
    const form = {
        name: document.querySelector('.input_field[name="namewl"]').value,
        discord: document.querySelector('.readonly_field[name="discordwl"]').value,
        message: document.querySelector('.input_field[name="wlmessage"]').value,
    };
  
    const data = {
      content: `${ownerMention2} Se ha recibido una solicitud de WL:`,
        embeds: [
            {
                title: `Solicitud de WL`,
                description: `Una solicitud de WL ha sido enviada.`,
                color: 0x0099ff,
                fields: [
                    {
                        name: '__Nombre__',
                        value: form.name,
                        inline: true,
                    },
                    {
                        name: '__Discord__',
                        value: form.discord,
                        inline: true,
                    },
                    {
                        name: '__Solicitud__',
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
            clearWLForm();
        })
        .catch((error) => {
            console.error(error);
            alert('Oops, algo salió mal. Por favor, inténtalo de nuevo.');
        });
  };

  const clearWLForm = () => {
    const inputFields = document.querySelectorAll('.input_field');
    inputFields.forEach((input) => {
        input.value = '';
    });
  };

  document.querySelector('.button.send_button').addEventListener('click', handleWLSubmit);




sr.reveal('.home_content, .about_banner, .brand_container, .copyright',{}); 
sr.reveal('.about_content, .contact_container, .skills_wrapper, .count_wrapper',{delay: 500}); 
sr.reveal('.social_list,.title_wrapper, .work_list',{ interval: 250}); 
sr.reveal('.service_item, .team_item, .work_item, .input_field',{interval: 250}); 