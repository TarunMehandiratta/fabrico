<?php include('inc/header.php'); ?> 


        <section class="agent-section">
          <div class="container">
           
  <div class="row">
    <div class="col-md-4">
      
      <div class="name">
        <div class="inr-nam">
          <img class="img-fluid" src="images/nam.png">
          <h4>mario rossi</h4>
        </div>
    </div>


        <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
            <i class="fa fa-line-chart" aria-hidden="true"></i> le mie info <i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
            <i class="fa fa-calendar-o" aria-hidden="true"></i> la mia agenda <i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i> Il mio wallet <i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#train" role="tab" aria-controls="train" aria-selected="false">
            <i class="fa fa-star" aria-hidden="true"></i> trainer preferiti <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#order" role="tab" aria-controls="order" aria-selected="false">
            <i class="fa fa-square" aria-hidden="true"></i> i miei ordini <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
        </li>

        <div class="impres"> Impostazioni </div>

        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#acount" role="tab" aria-controls="acount" aria-selected="false">
          <i class="fa fa-user" aria-hidden="true"></i> modifica info account  <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>  modifica password <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#feature" role="tab" aria-controls="feature" aria-selected="false">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i> info pagamento e fatturazione <i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </li>
        <button class="send-list" type="button"> Esci </button>
      </ul>
    </div>
    <!-- /.col-md-4 -->
        <div class="col-md-8">
      <div class="tab-content" id="myTabContent">


  <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">

    <div class="info-boxs">

      <h2 class="cal-had">Le mie info <a href="#"> <i class="fa fa-pencil" aria-hidden="true"></i> Aggiorna statistiche</a> </h2>
      <img class="img-fluid graf" src="images/graf.png">

      <div class="info-form">
        <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>peso (kg)</label>
            <input type="text" placeholder="80">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>girovita (cm)</label>
            <input type="text" placeholder="80">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>avambraccio (cm)</label>
            <input type="text" placeholder="80">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 offset-md-2">
          <div class="form-group">
            <button class="send-list" type="button"> Annulla modifiche  </button>
          </div>
        </div>
        <div class="col-md-5">
          <div class="form-group">
            <button class="confirm" type="button"> Conferma modifiche </button>
          </div>
        </div>
      
      </div>
    </div>

    </div>

  </div> <!--first-tab-->

  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

    <h2 class="cal-had mb-4"> <a data-toggle="modal" data-target="#exampleModalCenter" class="bookings" href="#">La mia Agenda</a>  <a href="#"> <i class="fa fa-calendar-o" aria-hidden="true"></i> Prenota una lezione </a> </h2>
	
	<!--start-modal-->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered pack-slider" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
			<div class="modal-slide">
				
			<div class="agendas">
				<h3>Lezione con Patrizia <br> Savelli</h3>
				<h3 class="light">h 12:00</h3>
				<button class="site-btn" type="button"> Partecipa alla chiamata </button>
				<button class="send-list" type="button"> Annulla prenotazione </button>
			</div>
				
			</div>
      </div>
    </div>
  </div>
</div>
<!--end-modal-->


	
	
	
	

    <div class="pat-calen">
      <div class="main-cals">

        <div class="mths">
          <div class="row">
           
              <div class="col-md-4">
                <div class="eros">
                  <i class="fa fa-angle-left" aria-hidden="true"></i>
                </div>
              </div>
              <div class="col-md-4">
                  <div class="mth-name">
                    NOVEMBRE
                  </div>
              </div>
              <div class="col-md-4">
                <div class="eros">
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
              </div>
          </div>

          <div class="row cal-number">
           
              <div class="col-md-7">
                <div class="row upps mt-5">
                    <div class="col">L</div>
                    <div class="col">M</div>
                    <div class="col">M</div>
                    <div class="col">G</div>
                    <div class="col">V</div>
                    <div class="col">S</div>
                    <div class="col">D</div>
                </div>
                <div class="row light mt-4">
                  <div class="col"></div>
                  <div class="col"></div>
                  <div class="col"></div>
                  <div class="col"></div>
                  <div class="col"></div>
                  <div class="col"></div>
                  <div class="col"><span>1</span></div>
                </div>

                <div class="row light mt-4">
                  <div class="col"><span>2</span></div>
                  <div class="col"><span>3</span></div>
                  <div class="col"><span>4</span></div>
                  <div class="col"><span>5</span></div>
                  <div class="col"><span>6</span></div>
                  <div class="col"><span>7</span></div>
                  <div class="col"><span>8</span></div>
                </div>

                <div class="row light mt-4">
                  <div class="col"><span>9</span></div>
                  <div class="col"><span>10</span></div>
                  <div class="col"><span>11</span></div>
                  <div class="col"><span>12</span></div>
                  <div class="col"><span>13</span></div>
                  <div class="col"><span>14</span></div>
                  <div class="col"><span>15</span></div>
                </div>

                <div class="row light mt-4">
                  <div class="col"><span>16</span></div>
                  <div class="col"><span>17</span></div>
                  <div class="col"><span>18</span></div>
                  <div class="col"><span>19</span></div>
                  <div class="col"><span>20</span></div>
                  <div class="col"><span>21</span></div>
                  <div class="col"><span>22</span></div>
                </div>
                <div class="row light mt-4">
                  <div class="col"><span>23</span></div>
                  <div class="col"><span>24</span></div>
                  <div class="col"><span>25</span></div>
                  <div class="col"><span>26</span></div>
                  <div class="col"><span>27</span></div>
                  <div class="col"><span>28</span></div>
                  <div class="col"><span>29</span></div>
                </div>
                <div class="row light mt-4">
                  <div class="col"><span>30</span></div>
                  <div class="col"><span></span></div>
                  <div class="col"><span></span></div>
                  <div class="col"><span></span></div>
                  <div class="col"><span></span></div>
                  <div class="col"><span></span></div>
                  <div class="col"><span></span></div>
                </div>


              </div>
              <div class="col-md-5">
                  <div class="bios">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="by-ero"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                          </div>
                          <div class="col-md-6">
                            <div class="bio-txt"> 12 gio </div>
                          </div>
                          <div class="col-md-3 text-right">
                            <div class="by-ero"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                          </div>
                        </div>

                  </div>


                  <div class="pat-save">
                      <div class="top-pat">
                        <span>12:00</span>
                        <span><i class="fa fa-user" aria-hidden="true"></i> Patrizia Savelli</span>
                      </div>
                      <div class="btm-pat">
                        <span> <i class="fa fa-clock-o" aria-hidden="true"></i> 60' </span>
                        <span> <i class="fa fa-video-camera" aria-hidden="true"></i> Zoom</span>
                      </div>
                  </div>


                  <div class="card course-card mt-3">
                    <img class="card-img-top course-card-bg" src="images/course_card_bg.png" alt="Card image">
                    <div class="card-img-overlay course-card-body">
                      <div>
                        <div class="course-card-body-text">
                          
                        </div>
                        <div class="course-card-body-text">
                          <i class="fa fa-clock-o" aria-hidden="true"></i>
                          <span class="course-card-text">19:00</span>
                          <i class="fa fa-clock-o" aria-hidden="true"></i>
                          <span class="course-card-text">60</span>
                          <i class="fa fa-users" aria-hidden="true"></i>
                          <span class="course-card-text">8</span>
                          <i class="fa fa-battery-three-quarters" aria-hidden="true"></i>
                          <span class="course-card-text">Intermedio</span>
                        </div>
                      </div>
                      <div class="d-flex">
                        <div class="mt-auto">
                          <h3 class="course-card-title w-100 m-0">
                            Total Body con Patrizia
                          </h3>
                          <span class="course-card-text p-0">
                            Total Body con Patrizia
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

               

              </div>
          </div>

        </div>


    </div>
     </div>

  </div><!--scd-tab-->

  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <h2>Contact</h2>
    <p>Lorem ipsum dolor sit amet consectetur</p>
  </div><!--trd-tab-->

  <div class="tab-pane fade" id="train" role="tabpanel" aria-labelledby="train-tab">
    <h2>train</h2>
      <p>Lorem ipsum dolor sit amet consectetur</p>
  </div><!--forth-tab-->

  <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab">
    <h2>order</h2>
      <p>Lorem ipsum dolor sit amet consectetur</p>
  </div><!--fifth-tab-->

  <div class="tab-pane fade" id="acount" role="tabpanel" aria-labelledby="acount-tab">

    <div class="info-form mt-0">
      <h2 class="cal-had mb-4">Modifica info personali  </h2>
      <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>nome</label>
          <input type="text" placeholder="Mario">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>cognome</label>
          <input type="text" placeholder="Rossi">
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label>email</label>
          <input type="text" placeholder="info@info.com">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>data di nascita</label>
          <input type="text" placeholder="01/01/2000">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>sesso</label>
          <select>
            <option value="1">Scegli Sesso</option>
            <option value="1">Scegli Sesso</option>
          </select>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-md-5 offset-md-2">
        <div class="form-group">
          <button class="send-list" type="button"> Annulla modifiche  </button>

        </div>
      </div>
      <div class="col-md-5">
        <div class="form-group">
          <button class="confirm" type="button"> Conferma modifiche </button>
        </div>
      </div>
    
    </div>
  </div>
  </div><!--sixth-tab-->

  <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
    <h2>password</h2>
      <p>Lorem ipsum dolor sit amet consectetur</p>
  </div> <!--seven-tab-->

  <div class="tab-pane fade show active" id="feature" role="tabpanel" aria-labelledby="feature-tab">
         
		 <div class="pays-for mt-0">
      <h2 class="cal-had mb-4">Aggiungi carta di credito </h2>
      <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>topi di carta</label>
          <select>
            <option value="1">Visa</option>
            <option value="1">Visa</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>numero</label>
          <div class="input-group">
			  <input type="text" class="form-control" placeholder="0000 0000 0000" aria-label="Recipient's username" aria-describedby="basic-addon2">
			  <div class="input-group-append">
				<span class="input-group-text" id="basic-addon2"><i class="fa fa-eye" aria-hidden="true"></i></span>
			  </div>
			</div>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>nome sulla carta</label>
          <input class="full-width" type="text" placeholder="Nome Cognome">
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label>data di scadenza</label>
          <div class="input-group">
			  <input type="text" class="form-control" placeholder="MM/AA" aria-label="Recipient's username" aria-describedby="basic-addon2">
			  <div class="input-group-append">
				<span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
			  </div>
			</div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label>sesso</label>
          <input type="text" placeholder="CVC/CCA">
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-md-5 offset-md-2">
        
      </div>
      <div class="col-md-5">
        <div class="form-group">
          <button class="site-btn" type="button"> Aggiungi carta di credito </button>
        </div>
      </div>
    
    </div>
  </div>


  </div> <!--eat-tab-->


</div>
    </div>
    <!-- /.col-md-8 -->
  </div>
  






          </div>
        </section>
		
		
		<?php include('inc/footer.php'); ?> 
        

       