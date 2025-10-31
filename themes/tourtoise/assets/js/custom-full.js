window.addEventListener('DOMContentLoaded', function () {
    tourtoise.header();
    tourtoise.cardDetailsButton();
    tourtoise.pageDetailsButtonClick();
  }, false);


  let tourtoise = {
    //START: HEADER
    header: () => {
        let mobileMenuButton = document.querySelector('.tourtoise_header_nav_mobile_buttons');
        let mobileMenu = document.querySelector('.tourtoise_header_nav_mobile');
        let mobileMenuContent = document.querySelector('.tourtoise_header_nav_mobile_content_wrapper');

        mobileMenuButton.addEventListener('click', ()=>{
            mobileMenu.classList.toggle('active');
            mobileMenuContent.classList.toggle('active');
        });
    },
    //END: HEADER



    //START: CARD BUTTONS
    cardDetailsButton: () => {
      let cardDetailsButtons = Array.from(document.querySelectorAll('.tourtoise_details_button'));

        cardDetailsButtons.map((element) => {
            element.addEventListener('click', (e) => {
              let cardDetailsContent = element.parentElement.parentNode.querySelector('.tourtoise_content_card_details_content');
              cardDetailsContent.classList.toggle('active');
              element.classList.toggle('active');

            })
        });
    },
    //END: CARD BUTTONS



    //START: PAGE DETAILS BUTTONS
    pageDetailsButtonClick: () => {
      let pageDetailsButton = document.getElementById('page_detail_button');
      if (pageDetailsButton){
        pageDetailsButton.addEventListener('click', (e) => {
          let pageDetailsContent = pageDetailsButton.parentElement.parentNode.parentNode.querySelector('.tourtoise_page_details');
          pageDetailsButton.classList.toggle('active');
          pageDetailsContent.classList.toggle('active');
        });
      }
    }
    
    //END: PAGE DETAILS BUTTONS
  }