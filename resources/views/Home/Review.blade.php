<section class="contact section-padding" data-scroll-index='6' id="review">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sectioner-header text-center">
            <h3>Post Your Reviews</h3>
            <span class="line"></span>
            <p class="text-sm text-gray-500 text-center" style="font-size: 14px;">We are grateful for the feedback from our clients and partners. Their testimonials highlight our dedication to delivering exceptional service and innovative solutions. Here’s what they have to say about their experience working with us</p>
          </div>
          <div class="section-content">
      
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <form id="contact_form" action="{{ route('contact')}}" method="POST">
                    @csrf
                  <div class="row" style="padding-bottom: 10px;">
                    <div class="col">
                      <input type="text" id="your_name" class="form-input w-100" name="name" placeholder="Name" required style='padding: 10PX;'>
                      @if ($errors->has('name'))
                      <span class="error-message">{{ $errors->first('name') }}</span>
                  @endif
                    </div>
                    
                    <div class="col">
                      <input type="email" id="email" class="form-input w-100" name="email" placeholder="Email" required style='padding: 10PX;'*>
                      @if ($errors->has('email'))
                      <span class="error-message">{{ $errors->first('email') }}</span>
                  @endif
                    </div>
                     
                  </div>
                  
                  <input type="text" id="subject" class="form-input w-100 P-3" name="subject" placeholder="Short Review" style='padding: 10PX;'>
                  @if ($errors->has('subject'))
                  <span class="error-message">{{ $errors->first('subject') }}</span>
              @endif
                  <textarea class="form-input w-100" id="message" placeholder="Detailed Review" name="message" style="margin-top: 10px;"></textarea>
                  @if ($errors->has('message'))
                  <span class="error-message">{{ $errors->first('message') }}</span>
              @endif
                  <button class="btn-grad w-100 text-uppercase" type="submit" name="button">submit</button>
                </form>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>