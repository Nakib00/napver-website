       <!-- ======= Contact Section ======= -->
       <section id="contact" class="contact section-bg">
           <div class="container" data-aos="fade-up">
               <div class="section-title">
                   <h2>Contact</h2>
                   <p>Get in Touch – We are Here to Assist You.</p>
               </div>

               <div class="row">
                   <div class="col-lg-6">
                       <div class="info-box mb-4">
                           <i class="bx bx-map mt-4"></i>
                           <h3>Our Address</h3>
                           <p>Bashundhara Residential Area, Dhaka</p>
                       </div>
                   </div>

                   <div class="col-lg-3 col-md-6">
                       <div class="info-box mb-4">
                           <i class="bx bx-envelope mt-4"></i>
                           <h3>Email Us</h3>
                           <p>zanitbd@gmail.com</p>
                       </div>
                   </div>

                   <div class="col-lg-3 col-md-6">
                       <div class="info-box mb-4">
                           <i class="bx bx-phone-call"></i>
                           <h3>Call Us</h3>
                           <p>
                               +880 1627199815 <br />
                               +880 1619996782
                           </p>
                       </div>
                   </div>
               </div>
               <div class="row justify-content-center">
                   <div class="col-lg-6">
                       <form method="POST" action="{{ route('contact.store') }}" class="email-form">
                           @csrf
                           <div class="row">
                               <div class="col-md-6 form-group">
                                   <input type="text" name="name" class="form-control" id="name"
                                       placeholder="Your Name" required />
                               </div>

                               <div class="col-md-6 form-group mt-3 mt-md-0">
                                   <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your Email" required />
                               </div>
                               <div class="form-group mt-3">
                                   <input type="tel" class="form-control" name="phone" id="phone"
                                       placeholder="Your phone number" required />
                               </div>
                           </div>
                           <div class="form-group mt-3">
                               <textarea class="form-control" name="comment" id="comment" rows="5" placeholder="Message" required></textarea>
                           </div>
                           <div class="text-center m-2">
                               <button type="submit">Send Message</button>
                               @if (session('success'))
                                   <p class="text-success">{{ session('success') }}</p>
                               @endif
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </section>
       {{--  <!-- End Contact Section -->  --}}
