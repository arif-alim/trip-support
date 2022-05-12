<section class="relative overflow-hidden">
  <div class="max-w-7xl prose">
    <div class="w-full">
      <h1 class="text-xl tracking-tight font-extrabold text-slate-900 sm:text-2xl md:text-3xl mb-0">
        <span class="block xl:inline">Destination, <?php the_title(); ?></span>
      </h1>
    </div>
    <p class="text-justify">
      Cuba, officially the Republic of Cuba, is a country comprising the island of Cuba, as well as Isla de la Juventud and several minor archipelagos. Cuba is located where the northern Caribbean Sea, Gulf of Mexico, and Atlantic Ocean meet.
    </p>
  </div>
</section>
<div class="flex gap-4 lg:gap-8 mt-4 lg:mt-8 sm:h-[500px]">
  <div class="sm:w-2/3 ">
    <div id="carouselExampleCrossfade" class="carousel slide carousel-fade relative " data-bs-ride="carousel">
      <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
        <button type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner relative w-full overflow-hidden rounded-lg ">
        <div class="carousel-item active float-left w-full">
          <img src="<?php echo THEME_IMAGE_DESTINATIONDEALS . '/cuba/havana-2.jpg' ?>" class="block w-full object-cover object-center" alt="Havana, Cuba 1" />
        </div>
        <div class="carousel-item float-left w-full">
          <img src="<?php echo THEME_IMAGE_DESTINATIONDEALS . '/cuba/havana-1.jpg' ?>" class="block w-full object-cover object-center" alt="Havana, Cuba 2" />
        </div>
        <div class="carousel-item float-left w-full">
          <img src="<?php echo THEME_IMAGE_DESTINATIONDEALS . '/cuba/havana-3.jpg' ?>" class="block w-full object-cover object-center" alt="Havana, Cuba 3" />
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
  <div class="hidden sm:flex sm:flex-col sm:w-1/2 space-y-4 h-[500px]">
    <div>
      <iframe src="https://snazzymaps.com/embed/387830" width="100%" height="300px" style="border:none;"></iframe>
    </div>
    <div class="flex justify-start items-center space-x-12">
      <?php echo do_shortcode("[location-weather id='11478']"); ?>

      <div class="font-normal text-lg flex items-center">
        <?php get_template_part('/template-parts/global/currency_svg') ?> <span class="px-2">Currency</span>
        <span class="font-bold text-lg">Pesos</span>
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
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Playa de Varadero</h2>
          <p class="text-justify">
            Playa de Varadero, also known as Playa Azul, is one of the most spectacular beaches in all of Cuba. Its crystalline water and fine sands stretch out into the Caribbean sea for a staggering 20 kilometers and is just a two-hour drive from the Cuban capital. The warm temperatures make it a perfect destination to travel to any time of the year, which is why this paradisiacal destination is chosen by many visitors internationally and nationally.
          </p>
        </div>
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Jibacoa Bay</h2>
          <p class="text-justify">
            Jibacoa bay offers great snorkeling opportunities for beginners and people who love to swim in shallow water. There is a small reef close to the beach that observes several fish species, crabs, and eels. This place is truly a piece of paradise with some amazing things to see both under and above the surface.
          </p>
        </div>
      </div>
      <div class="flex-col space-y-6 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Scuba Diving</h2>
          <p class="text-justify">
            Cuba offers a rich variety of marine life and is home to the second-largest reef in the world. Diving in Cuba means you can expect to swim over vibrant reefs boasting 50 species of coral and 20 species of sponge. The best diving spots includes; La Habana, Cayo Largo del Sur, Jardines de La Reina, Varadero and Playa Girón & Playa Larga.
          </p>
        </div>
        <div>
          <img src="<?php echo THEME_IMAGE_DESTINATIONDEALS . '/cuba/cuba-scuba-diving.jpg' ?>" alt="woman snorkelling in cayo coco" class="rounded-lg">
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
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Viñales Valley</h2>
          <p class="text-justify">
            Viñales Valley is a great destination in Cuba as it showcases a unique side to the island nation. The luscious green countryside and the colorful villages will surely take your breath away. From tobacco farms, caves, national parks, and culture, there are a ton of fun things Viñales has to offer. If you’re ready to unplug from the hustle and bustle of Havana, then Viñales is your perfect escape.
          </p>
        </div>
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Malecón sunset</h2>
          <p class="text-justify">
            Malecon sunset is a must-see in Havana. You can enjoy the sunset, great sea view, and breeze. It's the perfect place to witness sunrise and sunset views and fishing off the wall. It is a uniquely picturesque place packed with beauty.
          </p>
        </div>
      </div>
      <div class="flex-col space-y-6 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">El Nicho Waterfalls</h2>
          <p class="text-justify">
            El Nicho is best known for its large waterfall. The waterfall flows throughout the year, even during the dry season. The trail at El Nicho passes through dense forests and at the bottom of the fall there is a big natural pool that you can enjoy by swimming around.
          </p>
        </div>
        <div>
          <img src="<?php echo THEME_IMAGE_DESTINATIONDEALS . '/cuba/cuba-waterfalls.jpg' ?>" alt="bordeaux, Paris" class="rounded-lg">
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
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Iberostar Laguna Azul</h2>
          <p class="text-justify">
            Iberostar is located on the beaches of Varadero. It is less than 17 km from the city of Varadero and about 160 km from the capital city, Havana. The hotel is a perfect spot for couples, families, and groups with a ton of activities and facilities to enjoy, including; several restaurants, nightclubs, and others.
          </p>
        </div>
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Grand Muthu Cayo Guillermo</h2>
          <p class="text-justify">
            Located in Cayo Guillermo, close to the famous beach Playa Pilar and the coral barrier, it is considered to be one of the most beautiful resorts. With over 500 rooms, it has wonderful views of the sea and a great romantic atmosphere. This family hotel is a great option for couples and families if you are planning to travel to Cayo Guillermo.
          </p>
        </div>
      </div>
      <div class="flex-col space-y-6 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Paradisus Princesa del Mar</h2>
          <p class="text-justify">
            Nestled on the pristine white-sand beach of Varadero, this hotel is an adults-only hotel that offers a relaxing getaway in a tropical setting. It also offers a wide variety of water sports. Including; kayaking, snorkeling, and pedal boating. Apart from this, it also has a variety of cuisine options, from international buffets to fine french dining, Latin flavors, and Japanese specialties.
          </p>
        </div>
        <div>
          <img src="<?php echo THEME_IMAGE_DESTINATIONDEALS . '/cuba/cuba-princesa.jpg' ?>" alt="bordeaux, Paris" class="rounded-lg">
        </div>
      </div>
    </div>
  </div>
  <div class="border-t border-gray-100"></div>
</div>