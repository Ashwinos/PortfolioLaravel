<section class="contact section-padding" data-scroll-index='6'>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sectioner-header text-center">
            <h3>Post Your Reviews</h3>
            <span class="line"></span>
            <p>We are grateful for the feedback from our clients and partners. Their testimonials highlight our dedication to delivering exceptional service and innovative solutions. Here’s what they have to say about their experience working with us</p>
          </div>
          <div class="section-content">
      
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <form id="contact_form" action="{{ route('contact')}}" method="POST">
                    @csrf
                  <div class="row" style="padding-bottom: 10px;">
                    <div class="col">
                      <input type="text" id="your_name" class="form-input w-100" name="name" placeholder="Name" required style='padding: 10PX;'>
                    </div>
                    
                    <div class="col">
                      <input type="email" id="email" class="form-input w-100" name="email" placeholder="Email" required style='padding: 10PX;'*>
                    </div>
                     
                  </div>
                  
                  <input type="text" id="subject" class="form-input w-100 P-3" name="subject" placeholder="Short Review" style='padding: 10PX;'>
                  
                  <textarea class="form-input w-100" id="message" placeholder="Detailed Review" name="message" style="margin-top: 10px;"></textarea>
                  <button class="btn-grad w-100 text-uppercase" type="submit" name="button">submit</button>
                </form>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>