<section class="relative overflow-hidden">
  <div class="max-w-6xl prose">
    <div class="w-full">
      <h1 class="text-xl tracking-tight font-extrabold text-slate-900 sm:text-2xl md:text-3xl mb-0">
        <span class="block xl:inline">Destination, <?php the_title(); ?></span>
      </h1>
    </div>
    <p class="text-justify">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
  </div>
</section>
<div class="flex gap-4 lg:gap-8 mt-4 lg:mt-8 h-[500px]">
  <div class="sm:w-2/3 ">
    <div id="carouselExampleCrossfade" class="carousel slide carousel-fade relative " data-bs-ride="carousel">
      <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
        <button type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner relative w-full overflow-hidden rounded-lg ">
        <div class="carousel-item active float-left w-full">
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/jamaica/jamaica-2.jpg" class="block w-full object-cover object-center" alt="Wild Landscape" />
        </div>
        <div class="carousel-item float-left w-full">
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/jamaica/jamaica-1.jpg" class="block w-full object-cover object-center" alt="Camera" />
        </div>
        <div class="carousel-item float-left w-full">
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/jamaica/jamaica-3.jpg" class="block w-full object-cover object-center" alt="Exotic Fruits" />
        </div>
      </div>
      <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide="next">
        <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="flex-col sm:w-1/2 space-y-4 h-[500px]">
    <div>
      <iframe src="https://snazzymaps.com/embed/387858" width="100%" height="300px" style="border:none;"></iframe>
    </div>
    <div class="flex justify-start items-center space-x-12">
      <?php echo do_shortcode("[location-weather id='11472']"); ?>


      <div class="font-normal text-lg flex items-center">
        <?php get_template_part('/template-parts/global/currency_svg') ?> <span class="px-2">Currency</span>
        <span class="font-bold text-lg">JMD</span>
      </div>
    </div>
  </div>
</div>
<!-- Text Content -->
<div class="flex-wrap text-slate-900 space-y-8 md:space-y-12">
  <div>
    <h2 class="text-2xl md:text-3xl font-extrabold py-4">
      What to <span class="text-rose-600">do</span> in <?php the_title(); ?>?
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-8 lg:gap-12 my-2">
      <div class="flex-col space-y-5 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Seven Mile Beach</h2>
          <p class="text-justify">
            Seven Mile Beach is considered to be one of the most beautiful and longest beaches in Jamaica. Apart from being a picturesque place, it is filled with many other things to-do, such as; dinner at an oceanfront restaurant, watersports, enjoying the famous jerk chicken, and others. This place has to be on your list if you are traveling to Jamaica.
          </p>
        </div>
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Snorkeling</h2>
          <p class="text-justify">
            Montego Bay is a great place to snorkel and has several snorkeling sites. While snorkeling in the crystal clear waters of Jamaica, one can expect to see a variety of marine life, such as; angelfish, sea urchins, clownfish, dartfish, mackerel, and other marine animals. The Doctors cave beach is one of the most popular sites for snorkeling.
          </p>
        </div>
      </div>
      <div class="flex-col space-y-6 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Glass Bottom Boat Tour</h2>
          <p class="text-justify">
            Enjoy the underwater beauty of the Caribbean sea with the Glass Bottom Boat tour. This tour takes you up close to Negril’s coastal seafloor from where you can get a peek into the area’s reef and sea life, making it a popular activity and a must-experience tour when in Jamaica.
          </p>
        </div>
        <div>
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/jamaica/jamaica-beach.jpg" alt="Jamaica Beach" class="rounded-lg">
        </div>
      </div>
    </div>
  </div>
  <div class="border-t border-gray-100"></div>
  <div>
    <h2 class="text-2xl md:text-3xl font-extrabold pb-4">
      What to <span class="text-rose-600">see</span> in <?php the_title(); ?>?
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-8 lg:gap-12 my-2">
      <div class="flex-col space-y-5 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Dunn's River Falls and Park</h2>
          <p class="text-justify">
            Dunn’s river falls is a famous waterfall near Ocho Rios and a major tourist attraction. This place is believed to have been the site of the famous battle of "Las Chorreras", fought in 1657 between the Spanish and the English for possession of the island. This place witnesses thousands of tourists every year.
          </p>
        </div>
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Rockland Bird Sanctuary</h2>
          <p class="text-justify">
            The Rockland Bird Sanctuary is home to many species of birds, some endemic to Jamaica while others flew to the Island from other countries and have been here ever since. This bird sanctuary is a 20-minute drive from the city of Montego Bay and is a must visit for bird lovers!!!
          </p>
        </div>
      </div>
      <div class="flex-col space-y-6 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Cranbrook flower forest</h2>
          <p class="text-justify">
            Cranbrook flower forest is a hidden paradise in Saint Ann. Take a walk into nature and enjoy the beauty it has to offer. This forest is filled with a variety of beautiful flowers. You can also take a swim in the cool reviving water flowing right next to you.
          </p>
        </div>
        <div>
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/jamaica/jamaica-dunns-river.jpg" alt="Jamaica" class="rounded-lg">
        </div>
      </div>
    </div>
  </div>
  <div class="border-t border-gray-100"></div>
  <div>
    <h2 class="text-2xl md:text-3xl font-extrabold pb-4">
      Where to <span class="text-rose-600">stay</span> in <?php the_title(); ?>?
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-8 lg:gap-12 my-2">
      <div class="flex-col space-y-5 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Hilton Rose Hall Resort & Spa</h2>
          <p class="text-justify">
            Nestled between the scenic Jamaica mountains and turquoise Caribbean waters, this family-friendly resort is just minutes from Montego Bay's airport, it features luxurious modern accommodations, a private beach, a golf course, spa, watersports, and others. You name it and this resort has it all for you.
          </p>
        </div>
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Azul Beach Resort Negril </h2>
          <p class="text-justify">
            The famous Seven Mile Beach lies right next to this all-inclusive resort. This resort combines luxurious accommodations with some of the best scenery in all of Jamaica, including the ocean view. Azul beach resort leaves no stone unturned in making your Caribbean getaway an unforgettable experience.
          </p>
        </div>
      </div>
      <div class="flex-col space-y-6 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Secrets Wild Orchid </h2>
          <p class="text-justify">
            This hotel is located on the northeast coast of Jamaica and is a 20-minute drive from Montego Bay International Airport. Built in 2009, this resort offers 350 suites including luxury ones. Talking about activities, the resort offers many water-based activities, beach activities, and others. You can also go ahead and take scuba diving lessons that are given in the hotel’s outdoor swimming pool.
          </p>
        </div>
        <div>
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/jamaica/jamaica-hilton.jpg" alt="Jamaica Hilton" class="rounded-lg">
        </div>
      </div>
    </div>
  </div>
  <div class="border-t border-gray-100"></div>
</div>