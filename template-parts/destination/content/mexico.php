<section class="relative overflow-hidden">
  <div class="max-w-6xl prose">
    <div class="w-full">
      <h1 class="text-xl tracking-tight font-extrabold text-slate-900 sm:text-2xl md:text-3xl mb-0">
        <span class="block xl:inline">Destination, <?php the_title(); ?></span>
      </h1>
    </div>
    <p class="text-justify">
      Mexico, officially the United Mexican States, is a country in the southern portion of North America. It is bordered to the north by the United States; to the south and west by the Pacific Ocean; to the southeast by Guatemala, Belize, and the Caribbean Sea; and to the east by the Gulf of Mexico.
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
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/mexico/mexico-3.jpg" class="block w-full object-cover object-center" alt="Wild Landscape" />
        </div>
        <div class="carousel-item float-left w-full">
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/mexico/mexico-1.jpg" class="block w-full object-cover object-center" alt="Camera" />
        </div>
        <div class="carousel-item float-left w-full">
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/mexico/mexico-2.jpg" class="block w-full object-cover object-center" alt="Exotic Fruits" />
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
    <div class="w-full">
      <div>
        <iframe src="https://snazzymaps.com/embed/387851" width="100%" height="300px" style="border:none;"></iframe>
      </div>

      <div class="flex justify-start items-center space-x-12 w-full">
        <div class="w-full sm:w-2/3">
          <?php echo do_shortcode("[location-weather id='11474']"); ?>
        </div>
        <div class="font-normal text-lg w-full sm:w-1/3">
          <?php get_template_part('/template-parts/global/currency_svg') ?> Currency
          <span class="font-bold text-lg">Mexican Pesos</span>
        </div>
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
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Beaches</h2>
          <p class="text-justify">
            Mexico has no shortage of surf and sand with almost 500 beaches spread across four bodies of water; the Caribbean sea, the Pacific Ocean, the Gulf of Mexico, and the Sea of Cortez. Mexico is truly the perfect destination if you are looking for a relaxing holiday next to the turquoise waters of the Caribbean sea.
          </p>
        </div>
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Scuba diving</h2>
          <p class="text-justify">
            Mexico is a diving wonderland, no matter what time of the year it is, the Caribbean is diveable year-round. There are also many seasons where you can spot a variety of marine life, such as; bull shark season in November-May, while whale sharks and humpbacks arrive to breed from, January to March. This is just the tip of the iceberg for diving in Mexico. There is so much to see and explore in Mexico that you can never get bored.
          </p>
        </div>
      </div>
      <div class="flex-col space-y-6 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Cancun underwater museum</h2>
          <p class="text-justify">
            The Cancun Underwater Museum has more than 500 life-sized sculptures, making it the world’s largest underwater museum. You can snorkel around the art-filled seabed and explore this unique gallery that promotes the conservation of coral life. This museum is a must for everyone who is planning to travel to Cancun, Mexico.
          </p>
        </div>
        <div>
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/mexico/mexico-cancun-underwater-museum.jpg" alt="Underwater museum in cancun mexico" class="rounded-lg">
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
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Copper Canyon</h2>
          <p class="text-justify">
            Copper Canyon, also known as Mexico’s Grand Canyon is located in Chihuahua. It shares borders with Nex Mexico in the US. The copper canyon is said to be deeper and larger than its cousin, the Grand Canyon. The amazing natural structures were formed when six rivers converged in the Rio Fuerte before falling into the Gulf of California.
          </p>
        </div>
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Chichén Itzá: The Mayan Metropolis</h2>
          <p class="text-justify">
            This UNESCO World Heritage Site is a popular day trip from Cancun and Playa del Carmen. It is one of the most visited archaeological sites as well as the biggest and best restored. Chichen Itza is divided into Old Chichen and Chichen Itza where you can find several Mayan ruins and get to know about its history.
          </p>
        </div>
      </div>
      <div class="flex-col space-y-6 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Cozumel</h2>
          <p class="text-justify">
            Cozumel is a recognized locale in Mexico’s majestic Caribbean region. Boasting white-sand beaches, coral reefs, and an enormous swath of wild areas, it is truly an island paradise. Located on the Mesoamerican barrier reef, the second-largest coral reef in the world, Cozumel is spot on to experience island life.
          </p>
        </div>
        <div>
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/mexico/mexico-chicen-itza.jpg" alt="Chichen Itza" class="rounded-lg">
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
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Renaissance Cancun Resort & Marina Hotel </h2>
          <p class="text-justify">
            This hotel is located in Puerto Cancun and is ten minutes from downtown and a walking distance to the beach. The area where this hotel is located is considered to be the new Cancun entertainment zone where you can find the largest shopping center in Cancun, bars, restaurants, and the Marina town center.
          </p>
        </div>
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">The Westin Resort & Spa Cancun</h2>
          <p class="text-justify">
            Being a luxury hotel, it is nestled right on the beachfront. The location of this elegant hotel is just perfect as it is close to many shopping and entertainment sites. This hotel is filled with ethereal beauty and is a great resort if you want luxury and comfort both at the same time.
          </p>
        </div>
      </div>
      <div class="flex-col space-y-6 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Grand Riviera Princess</h2>
          <p class="text-justify">
            This hotel has Mayan-inspired architecture with thatched roofs. The wonderful settings of the hotel directly on the white sandy beach make it a great spot to spend your vacation at. It has a wide variety of restaurants, bars, and other amenities and services. It is also just 10 minutes away from Playa del Carmen and a 40-minute drive from the airport.
          </p>
        </div>
        <div>
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/mexico/mexico-westin.jpg" alt="Westin resort cancun" class="rounded-lg">
        </div>
      </div>
    </div>
  </div>
  <div class="border-t border-gray-100"></div>
</div>