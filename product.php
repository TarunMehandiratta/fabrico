<?php include('inc/header.php'); ?> 


        <section class="product-sections">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <img class="img-fluid cart-pic" src="images/cart1.png">
              </div>
              <div class="col-md-6">
                <div class="product-txt">
                    <h3 class="blu">Materassino</h3>
                    <h3>9,99 €</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of 
                      using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it
                       look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a 
                       search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>

                      <div class="form-group">
                        <label>QUANTITA</label>
                        <select>
                          <option value="1">1</option>
                          <option value="2">2</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <button type="button">Aggiungi al carrello</button>
                        <button data-toggle="modal" data-target="#exampleModal" class="active" type="button">Acquista ora</button>
                      </div>

                </div>
              </div>

            </div>
          </div>
        </section>
		
		
		
		
		
		
		
		<!--start-modal-->
			
				<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog confirm-cart" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		
			<div class="inr-con">
				<h3>Conferma il tuo <br> acquisto</h3>
				
				<div class="rates">
					<div class="row">
						<div class="col-md-7">
							<span> x1 Nome prodotto </span>
						</div>
						<div class="col-md-5 text-right">
							<span> 13,99 €</span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
							<span> x1 Nome prodotto </span>
						</div>
						<div class="col-md-5 text-right">
							<span> 13,99 €</span>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-7">
							<span> TOTALE </span>
						</div>
						<div class="col-md-5 text-right">
							<span> 27,98 €</span>
						</div>
					</div>
				</div>
				
				<div class="form-group mt-4">
					<label>inserisci coupon di sconto</label>
					<input type="text" placeholder="Inserisci coupon">
				</div>
				
				<div class="form-group mt-4">
					<label>inserisci coupon di sconto</label>
					
					<label class="lists"> <img src="images/walet.png"> Credito Rimasto: 8€
					<input type="radio" name="radio">
					<span class="checkmark"></span>
				  </label>
					
				</div>
				
				<div class="form-group mt-4">
					<label class="red">il tuo credito e insufficiente, scegli come pagare la differenza di 2€</label>
					
					<label class="lists"> <img src="images/pay.png"> <span class="black">mario.rossi@gmaul.com</span>
					<input type="radio" name="radio" checked="checked">
					<span class="checkmark"></span>
				  </label>
				  
				  <label class="lists"> <img src="images/pay.png"> <span class="black">Paypal</span>
					<input type="radio" name="radio">
					<span class="checkmark"></span>
				  </label>
				  
				   <label class="lists"> <img src="images/gp.png"> <span class="black">Altri metodi</span>
					<input type="radio" name="radio">
					<span class="checkmark"></span>
				  </label>
				  
				  <div class="form-group mt-4">
					<button class="site-btn" type="button">Paga e Prenota</button>
				  </div>
				  
					
				</div>
				
				
				
				
				
			</div>
		
      </div>
    </div>
  </div>
</div>
			
		<!--end-modal-->
		
		
		
		
		
		
		
<?php include('inc/footer.php'); ?> 