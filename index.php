<!DOCTYPE html>
<html class="no-js">
<head>

      <?php
      include 'php_includes/yeungninja_header.php';
      ?>
      
      <link rel="stylesheet" type="text/css" href="http://www.w3schools.com/lib/w3.css">


</head>
<body  onload="createSVGTitle()" data-spy="scroll" data-target=".navbar" data-offset="50">

      <?php include 'php_includes/yeungninja_nav.php';?>

      <!-- First Container -->
      <div class="container-fluid bgimg-1 bgimg-1_select text-center">
            <div style="padding-top: 12%;"><?php include 'php_includes/yeungninja_svg.php';?></div>
      </div>

      <!-- Second Container -->
      <div id="about-me" class="container-fluid bgimg-2">

            <div class="col-sm-6">
            </div>

            <div class="col-sm-6 basic">
                  <h1 class="basic_info text-center">Who Am I?</h1>
            </div>

            
      </div>

      <div class="container-fluid break_aboutMe">

            <div class="col-sm-12 text-center post">
                  <h1 class="section_break_info_title"> 
                        Hello World!
                  </h1>
            </div>


            <div class="col-sm-12 text-center">
                  <h4 class="section_break_info"> 
                        I am Peter Yeung. I was born and raised in the small
                        town of Hanley, Saskatchewan.
                        Population of 500 people. And yes I do know most
                        of the people living there.  I moved to the city of
                        Saskatoon in the fall of 2011 to pursue my passion
                        of Computer Science. After toiling 
                        through first year courses, late night 
                        assignments and last minute finals cramming I completed my 
						Computer Science degree in 2017 at the University of Saskatchewan.
                  </h4>
                  <h4 class="section_break_info"> 
                        Throughout my years of post-secondary education I 
                        have found a passion for web-programming, game-design,
                        and media art. I have done quite a bit of film photography.
                        I have also developed prints myself in the past but I have started to delve
                        into the realm of digital photography and photoshop, which
                        has the same rules/principles of Computer Science that I love - there
                        is always more than one way to accomplish a task and that it changes
                        everyday so I am always learning! You can see some of my
                        works down below but hopefully you know me a bit more now. Cheers!
                  </h4>
            </div>

            
      </div>

      <!-- Third Container (Grid) -->
      <div id="photography_section" class="container-fluid bgimg-3">

            <div class="row">
                  <div class="col-sm-10 text-left photography_section">
                        <h1>Projects</h1><br>
                  </div>
            </div>

            <div class="row">
                  <div class="col-sm-10 text-left photography_section">
                        <h2>1. House Rules</h2>
                  </div>
            </div>

            <div class="row">
                  <div class="col-sm-10 text-left photography_section">
                        <h3>A four player mini game compilation made in Unity using Air Console.  
                         I integrated the Air Console controller API and made the Sorry, Not Sorry mini game.
						 Preview of source code upon request
						 </h3>

                         <h2>How To Play:</h2>
                         <h3>
                              1. Get controller on your smartphone <br>
                              2. sign in as guest at www.airconsole.com on your mobile phone or download the Air Console app <br>
                              3. Launch the game on your computer<br>
                              4. <a href="http://www.airconsole.com/#http://house-rules.usask.ca/HouseRules_Build_v6/" target="_blank">CLICK HERE TO PLAY</a>

                         </h3>
                  </div>
            </div>

            <div class="row photography_section">
                  <div class="col-sm-3">
                        <img alt="Nothing to See" src="http://stephanie.dilsner.com/wp-content/uploads/sites/27/2016/01/overworld.jpg" style="width:100%;cursor:pointer"
                        onclick="onClick(this)" class="w3-hover-opacity">
                  </div>
                  <div class="col-sm-3">
                        <img alt="Nothing to See" src="http://stephanie.dilsner.com/wp-content/uploads/sites/27/2016/01/minigame1.jpg" style="width:100%;cursor:pointer"
                        onclick="onClick(this)" class="w3-hover-opacity">
                  </div>
                  <div class="col-sm-3">
                        <img alt="Nothing to See" src="http://stephanie.dilsner.com/wp-content/uploads/sites/27/2016/01/minigame2.jpg" style="width:100%;cursor:pointer"
                        onclick="onClick(this)" class="w3-hover-opacity">
                  </div>

            </div>

            <br>

            <div class="row">
                  <div class="col-sm-10 text-left photography_section">
                        <h2>2. Kids' TV</h2>
                  </div>
            </div>

            <div class="row">
                  <div class="col-sm-10 text-left photography_section">
                        <h3>
                              In this project a T.V. guide for Kids’ was designed to a medium fidelity 
                              prototype using the iterative design process.  In the link below you can see the 
                              final presentation that goes through our entire process including:
							  <br><br>
							  <ul>
								<li>brainstorming</li>
								<li>paper prototypes</li>
								<li>testing</li>
								<li>heuristic evaluation</li>
								<li>redesign</li>
							  </ul>
							  
							  <a href="http://stephanie.dilsner.com/wp-content/uploads/sites/27/2016/03/Class-Presentation.pdf" target="_blank" rel="">Click here to view the presentation</a>
                        </h3>
                  </div>
            </div>

            <div class="row photography_section">
                  <br>
                  <div class="col-sm-3">
                        <img alt="Nothing to See" src="photos/KidsTV1.PNG" style="width:100%;cursor:pointer"
                        onclick="onClick(this)" class="w3-hover-opacity">
                  </div>
                  <div class="col-sm-3">
                        <img alt="Nothing to See" src="photos/KidsTV2.PNG" style="width:100%;cursor:pointer"
                        onclick="onClick(this)" class="w3-hover-opacity">
                  </div>
                  <div class="col-sm-3">
                        <img alt="Nothing to See" src="photos/KidsTV3.PNG" style="width:100%;cursor:pointer"
                        onclick="onClick(this)" class="w3-hover-opacity">
                  </div>
            </div>
			
			<br>
			
			<div class="row">
                  <div class="col-sm-10 text-left photography_section">
                        <h2>3. Scoller Development Kit (SDK)</h2>
                  </div>
            </div>

            <div class="row">
                  <div class="col-sm-10 text-left photography_section">
                        <h3>
                              A user-friendly application that provides a platform for fast asset prototyping and previewer. Project was built
							  with Microsoft XNA in Visual Studios. Preview of source code upon request
                        </h3>
                  </div>
            </div>
			
            <div class="row photography_section">
                  <br>
                  <!-- -->
                  <div class="col-sm-3">
                        <img alt="Nothing to See" src="https://bytebucket.org/lyr/cmpt-370-project/raw/a378d76276aa4f33791b5c02650a475bc1801fd9/Scroller/User%20Manual/Images/game.PNG?token=cef587510321d1aa7a34bea2295cfd15a15d6249" style="width:100%;cursor:pointer"
                        onclick="onClick(this)" class="w3-hover-opacity">
                  </div>
                  <div class="col-sm-3">
                        <img alt="Nothing to See" src="https://bytebucket.org/lyr/cmpt-370-project/raw/a378d76276aa4f33791b5c02650a475bc1801fd9/Scroller/User%20Manual/Images/browsexml_colors.PNG?token=a9532dbb307dd14c3f43199ecc834229019ef714" style="width:100%;cursor:pointer"
                        onclick="onClick(this)" class="w3-hover-opacity">
                  </div>
                  <div class="col-sm-3">
                        <img alt="Nothing to See" src="https://bytebucket.org/lyr/cmpt-370-project/raw/a378d76276aa4f33791b5c02650a475bc1801fd9/Scroller/User%20Manual/Images/sp_enterandplay.PNG?token=650d253bb184801ed0e212dfabcb19294748e927" style="width:100%;cursor:pointer"
                        onclick="onClick(this)" class="w3-hover-opacity">
                  </div>
           
            </div>

            <div class="row">
                  <div class="col-sm-9">

                        <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
                              <span class="w3-closebtn w3-hover-red w3-text-white w3-xxlarge w3-container w3-display-topright">&times;</span>
                              <div class="w3-modal-content w3-animate-zoom">
                                    <img alt="Nothing to See" src="#" id="img01" style="width:100%">
                              </div>
                        </div>
                  </div>
            </div>

      </div>


      <!-- Third Container (Grid) -->
      <div id="photography_section" class="container-fluid bgimg-3">

            <div class="row">
                  <div class="col-sm-10 text-left photography_section">
                        <h1>Sample Photos</h1><br>
                  </div>
            </div>

            <div class="row photography_section">
                  <div class="col-sm-3">
                        <img alt="Nothing to See" src="photos/water_marked/IMG_8676-02.jpeg" style="width:100%;cursor:pointer"
                        onclick="onClick(this)" class="w3-hover-opacity">
                  </div>
                  <div class="col-sm-3">
                        <img alt="Nothing to See" src="photos/water_marked/IMG_9023-01-01.jpeg" style="width:100%;cursor:pointer"
                        onclick="onClick(this)" class="w3-hover-opacity">
                  </div>
                  <div class="col-sm-3">
                        <img alt="Nothing to See" src="photos/water_marked/IMG_8715-02.jpeg" style="width:100%;cursor:pointer"
                        onclick="onClick(this)" class="w3-hover-opacity">
                  </div>

            </div>

            <div class="row photography_section">
                  <br>
                  <div class="col-sm-3">
                        <img alt="Nothing to See" src="photos/water_marked/IMG_9017-02-01.jpeg" style="width:100%;cursor:pointer"
                        onclick="onClick(this)" class="w3-hover-opacity">
                  </div>
                  <div class="col-sm-3">
                        <img alt="Nothing to See" src="photos/water_marked/IMG_8785-02.jpeg" style="width:100%;cursor:pointer"
                        onclick="onClick(this)" class="w3-hover-opacity">
                  </div>
                  <div class="col-sm-3">
                        <img alt="Nothing to See" src="photos/water_marked/IMG_9020-01-01.jpeg" style="width:100%;cursor:pointer"
                        onclick="onClick(this)" class="w3-hover-opacity">
                  </div>
            </div>

            <div class="row photography_section">
                  <br>
                  <div class="col-sm-3">
                        <img alt="Nothing to See" src="photos/water_marked/IMG_8687-03-01.jpeg" style="width:100%;cursor:pointer"
                        onclick="onClick(this)" class="w3-hover-opacity">
                  </div>
                  <div class="col-sm-3">
                        <img alt="Nothing to See" src="photos/water_marked/IMG_8783-01-01.jpeg" style="width:100%;cursor:pointer"
                        onclick="onClick(this)" class="w3-hover-opacity">
                  </div>
                  <div class="col-sm-3">
                        <img alt="Nothing to See" src="photos/water_marked/IMG_8620-01.jpeg" style="width:100%;cursor:pointer"
                        onclick="onClick(this)" class="w3-hover-opacity">
                  </div>
            </div>

            <div class="row">
                  <div class="col-sm-9">

                        <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
                              <span class="w3-closebtn w3-hover-red w3-text-white w3-xxlarge w3-container w3-display-topright">&times;</span>
                              <div class="w3-modal-content w3-animate-zoom">
                                    <img alt="Nothing to See" src="#" id="img01" style="width:100%">
                              </div>
                        </div>
                  </div>
            </div>

      </div>

<!--NEW VIDEO-->


      <div id="how-to" class="container-fluid break_HowTo">

            <div class="col-sm-12 text-center section_break_howto_title">
                  <h1> 
                        How To Edit Photos Like A Pro Without Photoshop!
                  </h1>
            </div>
            
      </div>

      <!-- Fourth Container (Grid) -->
      <div  class="container-fluid bgimg-3 break_HowTo">


            <div class="col-sm-9 responsive-video section_break_howto_title">
                  <iframe
                  src="https://www.youtube.com/embed/t26a6_Pgo2c"  frameborder="0" allowfullscreen>
                  </iframe>
            </div>

      </div>


<!--NEW VIDEO-->

      <div id="how-to" class="container-fluid break_HowTo">

            <div class="col-sm-12 text-center section_break_howto_title">
                  <h1> 
                        Looking To Do My Logo Animation? Look Below!
                  </h1>
            </div>
            
      </div>

      <!-- Fourth Container (Grid) -->
      <div  class="container-fluid bgimg-3 break_HowTo">

            
            <div class="col-sm-9 responsive-video section_break_howto_title">
                  <iframe
                  src="https://www.youtube.com/embed/yW8lPojct4g" frameborder="0" allowfullscreen>
                  </iframe>
            </div>

      </div>

      <div id="contact" class="container-fluid break_Contact">

            <div class="col-sm-12 text-center section_break_contact_title">
                  <h1> 
                        Cool Stuff, huh? More goodies to come but for now...
                  </h1>
            </div>
            
      </div>

      <!-- Fifth Container (Grid) -->
      <div class="container-fluid bgimg-4">

           
            <div id="contact_section" class="col-sm-12 text-center">
                  <h1  class="section_break_contact_title"> 
                       Thanks For Visiting!
                  </h1> 
					<p>yeung.ninja@usask.ca</p>
                   <p>Remember to follow me on..</p>
            </div>

            <div class="row">
              <div class="col-sm-3 text-right">
               
              </div>

              <div class="col-sm-6 text-center">
                <a href="https://www.instagram.com/yeungninja/">
                  <img alt="Nothing to See" src="photos/icons/Instagram.png" style="width:15%;cursor:pointer;" class="w3-hover-opacity">
                </a>


                <a href="https://twitter.com/yeungninja/">
                <img  alt="Nothing to See" src="photos/icons/Twitter.png" style="width:15%;cursor:pointer; border-radius:5px;" class="w3-hover-opacity">
                </a>
                <a href="https://facebook.com/peter.d.yeung">
                <img alt="Nothing to See" src="photos/icons/Facebook.png" style="width:15%;cursor:pointer;" class="w3-hover-opacity">
                </a>
              </div>
        
              <div class="col-sm-3 text-center">
                
              </div>
            </div>

            
      </div>

      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/external/viewportchecker.js"></script> 
<script src="js/create_fades.js"></script>
<script src="js/photo_grid.js"></script>


</body>
</html>
