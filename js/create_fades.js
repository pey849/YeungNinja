jQuery(document).ready(function() {

            //Who I am section along with short info
            jQuery('.basic_info').addClass("hideme").viewportChecker({
                classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
                offset: 200
          });

            //Expanded info on who i am but just the title
            jQuery('.section_break_info_title').addClass("hideme").viewportChecker({
                classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
                offset: 30
          }); 

            //Expanded info on who i am, the two paragraphs
          jQuery('.section_break_info').addClass("hideme").viewportChecker({
                classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
                offset: 40
          }); 

          //Expanded info on who i am but just the title
          jQuery('.photography_section').addClass("hideme").viewportChecker({
                classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
                offset: 40
          }); 


          //Expanded info on who i am but just the title
            jQuery('.section_break_photo_title').addClass("hideme").viewportChecker({
                classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
                offset: 30
          }); 

            //Expanded info on who i am, the two paragraphs
          jQuery('.section_break_photo').addClass("hideme").viewportChecker({
                classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
                offset: 40
          });

            //Looking for cool stuff title and how to video
          jQuery('.section_break_howto_title').addClass("hideme").viewportChecker({
                classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
                offset: 40
          });

           //contact title and thanks for visiting
          jQuery('.section_break_contact_title').addClass("hideme").viewportChecker({
                classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
                offset: 40
          });
     
      });  


