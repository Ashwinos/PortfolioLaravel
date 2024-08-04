<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  
</head>
<body>

  <section class="testimonial section-padding" data-scroll-index='4'>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sectioner-header text-center white">
            <h1>Top Rating</h1>
            <span class="line"></span>
            <p class=" white   text-center" style="font-size: 14px;">Here are the top reviews from some of our users. Let's take a look at these reviews. We hope these reviews give you a better understanding of what to expect. We strive to provide the best experience for our users and appreciate all the feedback we receive.</p>
          </div>
      
        <div class="section-content">
          <div class="row">
            <div class="offset-md-2 col-md-8 col-sm-12">
              
              <div class="slider">
                @foreach ($messages as $message)
                <div class="slider-item">                  
                 
                 

<article>
  <div class="flex items-center mb-4">
      <img class="w-10 h-10 me-4 rounded-full" src="{{asset('images/image.png')}}" alt="">
      <div class="font-medium dark:text-white">
          <h4>{{$message->name}} </h4><time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">{{$message->email}}</time></h4>
      </div>
  </div>
  <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
      <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
          <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
      </svg>
      <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
          <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
      </svg>
      <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
          <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
      </svg>
      <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
          <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
      </svg>
      <svg class="w-4 h-4 text-yellow-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
          <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
      </svg>
      <h3 class="ms-2 text-sm font-semibold text-gray-900 dark:text-white">{{$message->subject}}</h3>
  </div>
  <footer class="mb-1 text-sm text-gray-500 dark:text-gray-400"><p>{{$message->created_at}}</p></footer>
  <p class="mb-2 text-gray-500 dark:text-gray-400">{{$message->message}}</p>
  
  
</article>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>




                </div>
                @endforeach   

              </div>
              <h2 style="color: #fff; font-style: italic" > Slide to read more>></h2>
              
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>