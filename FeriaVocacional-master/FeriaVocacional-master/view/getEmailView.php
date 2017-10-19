<?php

include_once 'public/headerMail.php';
?>


<section id="slider" class="slider-parallax dark full-screen" style="background: url(public/images/landing/landing1.jpg) center;">

    <div class="slider-parallax-inner">

        <div class="container clearfix">

            <div class="vertical-middle">

                <div class="heading-block center nobottomborder">
                    <h1 data-animate="fadeInUp">Feria Vocacional de Informatica Emplesarial</h1>
                    <span data-animate="fadeInUp" data-delay="300">Secci&oacute;n para la recolecci&oacute;n de correos y envio de informaci&oacute;n</span>
                </div>           
             
                    <div class="col_four_fifth nobottommargin">

                        <textarea class="form-control" rows="5" id="emails" name="emails"></textarea>
	
                    </div>
	
                    <div class="col_one_fifth col_last nobottommargin">
		
                        <button href="javascript:;" onclick="relizarProceso()" class="btn btn-lg btn-danger btn-block nomargin" value="submit" type="submit" style="">Get more Emails</button>
	
                    </div>
                
                    </div>
              
            </div>
</section>

 <script>
        function relizarProceso(){
           
            $.ajax(
                    {
                        url: '?controller=User&action=getEmail',
                        type: 'post',
                        beforeSend: function (){
                            $("#emails").html("Procesando,\n\
                     espere por favor");
                        },
                        success: function (response){
                            $("#emails").html(response);
                        }
                    }
                  );
        }
        </script>
<?php

include_once 'public/footer.php';
