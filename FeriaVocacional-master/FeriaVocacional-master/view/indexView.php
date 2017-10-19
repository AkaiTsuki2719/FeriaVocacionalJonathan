<?php

include_once 'public/headerMail.php';
?>

<section id="slider" class="slider-parallax dark full-screen" style="background: url(public/images/landing/landing1.jpg) center;">

    <div class="slider-parallax-inner">

        <div class="container clearfix">

            <div class="vertical-middle">

                <div class="heading-block center nobottomborder">
                    <h1 data-animate="fadeInUp">Feria Vocacional de Informatica Emplesarial</h1>
                    <span data-animate="fadeInUp" data-delay="300">Explora y conoce acerca de la carrera</span>
                </div>
                
                <form action="?controller=User&action=insertUser" method="post" role="form" class="landing-wide-form clearfix">
	
                    <div class="col_four_fifth nobottommargin">
		
                        <div class="col_one_third nobottommargin">
                    
                            <input type="text" class="form-control input-lg not-dark" name="name" id="name" value="" placeholder="Nombre*" required>
		
                        </div>
		
                        <div class="col_one_third nobottommargin">
                    
                            <input type="text" class="form-control input-lg not-dark" name="lastName" id="lastName" value="" placeholder="Apellido*" required>
		
                        </div>
		
                        <div class="col_one_third col_last nobottommargin">
                    
                            <input type="email" class="form-control input-lg not-dark" name="email" id="email" value="" placeholder="Correo electronico*">
		
                        </div>
	
                    </div>
	
                    <div class="col_one_fifth col_last nobottommargin">
		
                        <button class="btn btn-lg btn-danger btn-block nomargin" value="submit" type="submit" style="">VAMOS!</button>
	
                    </div>
                
                    </div>
                </form>
            
            </div>
</section>

<?php

include_once 'public/footer.php';
