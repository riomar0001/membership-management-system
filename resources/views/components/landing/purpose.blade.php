
           <section id="purpose" class="services section">

               <div class="container section-title" data-aos="fade-up">
                   <h2>
                       Purpose
                   </h2>
                   <p>Mission and Vision<br></p>
               </div>

               <div class="container" data-aos="fade-up" data-aos-delay="100">

                   <div class="flex flex-col md:flex-row gap-5 justify-between">
                       <div class="col " data-aos="zoom-in" data-aos-delay="200">
                           <div class="service-item">
                               <div class="img">
                                   <img src="{{ asset('img/mission.jpg') }}" class="img-fluid" alt="">
                               </div>
                               <div class="details my-10">
                                   <div class="icon">
                                       <i class="bi bi-activity"></i>
                                   </div>
                                   <a href="service-details.html" class="stretched-link">
                                       <h3>Mission</h3>
                                   </a>
                                   <p>{{$mission}}</p>
                               </div>
                           </div>
                       </div>

                       <div class="col " data-aos="zoom-in" data-aos-delay="300">
                           <div class="service-item">
                               <div class="img">
                                   <img src="{{ asset('img/vision.jpg') }}" class="img-fluid" alt="">
                               </div>
                               <div class="details  my-10">
                                   <div class="icon">
                                       <i class="bi bi-broadcast"></i>
                                   </div>
                                   <a href="service-details.html" class="stretched-link">
                                       <h3>Vision</h3>
                                   </a>
                                   <p>{{$vision}}</p>
                               </div>
                           </div>
                       </div>

                   </div>

               </div>

           </section>
