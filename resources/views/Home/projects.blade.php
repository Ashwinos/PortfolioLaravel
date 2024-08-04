<!-- source: https://github.com/mfg888/Responsive-Tailwind-CSS-Grid/blob/main/index.html -->
<style>
    body {
	font-family: 'Poppins', sans-serif;
	font-size: 16px;
}
</style>
<div class="text-center p-10" style="margin-top: 50px;">
  <h6 class="font-bold  mb-4">My Projects</h6>
  <span class="line"></span>
  <p class="text-sm text-gray-500 text-center" style="font-size: 14px;">Listed below are some of the most representative projects I've worked on. <br>They range from basic web design for presentation sites to advanced web development for online shops</p>
  
</div>

<!-- ✅ Grid Section - Starts Here 👇 -->
<section id="Projects"
  class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

  <!--   ✅ Product card 1 - Starts Here 👇 -->
  <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
      <a href="{{route('innerpage')}}" style="text-decoration: none;">
          <img src="https://i.pinimg.com/564x/1f/87/b2/1f87b29a2df46100a75aa86b170a21cb.jpg"
                  alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
          <div class="px-4 py-3 w-72">
              <span class="text-gray-400 mr-3 uppercase text-xs">HTML CSS</span>
              <p class="text-lg font-bold text-black truncate block capitalize">Web Design</p>
              <div class="flex items-center">
                  
                 
              </div>
          </div>
      </a>
  </div>
  <!--   🛑 Product card 1 - Ends Here  -->

  <!--   ✅ Product card 2 - Starts Here 👇 -->
  <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
      <a href="{{route('laravel')}}" style="text-decoration: none;">
          <img src="https://i.pinimg.com/564x/01/39/cf/0139cf5c8590c792a29e3798bd834911.jpg"
                  alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
          <div class="px-4 py-3 w-72">
              <span class="text-gray-400 mr-3 uppercase text-xs">PHP LARAVEL MYSQL</span>
              <p class="text-lg font-bold text-black truncate block capitalize">Laravel Projects</p>
              <div class="flex items-center">
                  
                 
                 
              </div>
          </div>
      </a>
  </div>
  <!--   🛑 Product card 2- Ends Here  -->

  <!--   ✅ Product card 3 - Starts Here 👇 -->
  <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
      <a href="{{route('django')}}" style="text-decoration: none;">
          <img src="https://i.pinimg.com/564x/b1/d3/e5/b1d3e54e4573000cd4a83ef60462a9a9.jpg"
                  alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
          <div class="px-4 py-3 w-72">
              <span class="text-gray-400 mr-3 uppercase text-xs">PYTHON DJANGO MYSQL</span>
              <p class="text-lg font-bold text-black truncate block capitalize">Django Projects</p>
              <div class="flex items-center">
                  
                  
              </div>
          </div>
      </a>
  </div>
  <!--   🛑 Product card 3 - Ends Here  -->

 
  <!--   🛑 Product card 6 - Ends Here  -->

</section>

<!-- 🛑 Grid Section - Ends Here -->






