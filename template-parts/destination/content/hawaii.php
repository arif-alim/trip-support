<section class="relative overflow-hidden">
  <div class="max-w-7xl prose">
    <div class="w-full">
      <h1 class="text-xl tracking-tight font-extrabold text-slate-900 sm:text-2xl md:text-3xl mb-0">
        <span class="block xl:inline">Destination, <?php the_title(); ?></span>
      </h1>
    </div>
    <p class="text-justify">
      Hawaii is a state in the Western United States, located in the Pacific Ocean about 2,000 miles from the U.S. mainland. It is the only state outside North America, the only state that is an archipelago, and the only state in the tropics.
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
          <img src="<?php echo THEME_IMAGE_DESTINATIONDEALS . '/hawaii/hawaii-2.jpg' ?>" class="block w-full object-cover object-center" alt="Wild Landscape" />
        </div>
        <div class="carousel-item float-left w-full">
          <img src="<?php echo THEME_IMAGE_DESTINATIONDEALS . '/hawaii/hawaii-1.jpg' ?>" class="block w-full object-cover object-center" alt="Camera" />
        </div>
        <div class="carousel-item float-left w-full">
          <img src="<?php echo THEME_IMAGE_DESTINATIONDEALS . '/hawaii/hawaii-3.jpg' ?>" class="block w-full object-cover object-center" alt="Exotic Fruits" />
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
      <iframe src="https://snazzymaps.com/embed/387848" width="100%" height="300px" style="border:none;"></iframe>
    </div>
    <div class="flex justify-start items-center space-x-12">
      <?php echo do_shortcode("[location-weather id='11475']"); ?>


      <div class="font-normal text-lg flex items-center">
        <?php get_template_part('/template-parts/global/currency_svg') ?> <span class="px-2">Currency</span>
        <span class="font-bold text-lg">USD</span>
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
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Surfing</h2>
          <p class="text-justify">
            Easily the most iconic activity to do when visiting Hawaii, surfing is very popular all over Hawaii but is especially popular on the islands of Oahu and Maui. Professional surfers and amateurs alike are known to frequent the islands’ best spots during surfing’s peak season in Winter. There are plenty of beaches that offer relaxing surfing experiences and the history of the sport. There are also plenty of classes specifically designed to teach tourists how to surf.
          </p>
        </div>
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Haleakala National Park</h2>
          <p class="text-justify">
            This national park is made up of a dormant volcano, giving its landscape a very unique look. Its landscape is plastered with hills and valleys that contain strangely colored soil. Haleakala National Park is famous for its absolutely stunning sunsets. For those who can’t get enough of the place, you are allowed to spend the night camping in the park.
          </p>
        </div>
      </div>
      <div class="flex-col space-y-6 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Polynesian Cultural Center</h2>
          <p class="text-justify">
            The Polynesian Cultural Center is a hub for Polynesian entertainment. Performers from Hawaii, Fiji, New Zealand, and more all put on shows during nightly luaus. The entertainment here consists of songs and dances that stay true to Polynesian culture. Over 100 Polynesian entertainers even put on a performance that combines song and dance with lots of fire in a passionate display.
          </p>
        </div>
        <div>
          <img src="<?php echo THEME_IMAGE_DESTINATIONDEALS . '/hawaii/hawaii-haleakala.jpg' ?>" alt="Hawaii" class="rounded-lg">
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
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Maui Ocean Center</h2>
          <p class="text-justify">
            This massive aquarium is home to all kinds of sea life native to Hawaii. Maui Ocean Center is an open ocean exhibit that houses a massive, living coral reef and thousands of species of fish. Walkthrough underwater tunnels and get an up-close look at the various sea creatures in their natural habitat. This aquarium also has a turtle feeding exhibit too.
          </p>
        </div>
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Pearl Harbor National Memorial</h2>
          <p class="text-justify">
            Get a first-hand look at a piece of America’s history and honor the brave soldiers who died during the attack on Pearl Harbor. Over 2,000 Americans gave their lives that day, and the Pearl Harbor National Memorial is dedicated to each and every one of them. Tours give detailed information about the infamous attack and will even take you up close via boat. The memorial center is located in Honolulu.
          </p>
        </div>
      </div>
      <div class="flex-col space-y-6 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Diamond Head State Monument</h2>
          <p class="text-justify">
            This attraction is considered the most recognizable area in all of Hawaii. The crater is an absolutely beautiful natural landmark with intense ridges and picturesque scenery. The crater was formed when an underwater volcano erupted roughly 300,000 years ago. Diamond Head also has historical significance. America purchased the crater in the early 1900s to boost the country’s coastal defense. Today, visitors can explore Diamond Head to their heart’s content
          </p>
        </div>
        <div>
          <img src="<?php echo THEME_IMAGE_DESTINATIONDEALS . '/hawaii/hawaii-diamond-head.jpg' ?>" alt="Hawaii" class="rounded-lg">
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
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">La Croix</h2>
          <p class="text-justify">
            La Croix is located on the island of Honolulu near a slew of popular attractions with entertainment options and/or cultural and historical significance. This hotel is very close to Waikiki Beach and is also close to a wide variety of restaurants and shops. Chinatown and Pearl Harbor are also nearby, so you’ll always be close to somewhere exciting at this hotel.
          </p>
        </div>
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Outrigger Kona Spa and Resort</h2>
          <p class="text-justify">
            This coastal hotel may not have beach access, but the view atop the lava cliffs of Keauhou Bay is unmatched. Outrigger Kona Spa and Resort is your go-to destination if you want your stay to be unique. The resort offers its guests a ton of different amenities. Live music, luaus, manta ray viewing, and cultural tours are just some of the activities you can explore here.
          </p>
        </div>
      </div>
      <div class="flex-col space-y-6 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Hyatt Place Waikiki Beach</h2>
          <p class="text-justify">
            This resort is conveniently located in the Diamond Head area of Waikiki in Honolulu and is very close to many popular attractions on the island. Hyatt Place Waikiki Beach understands how busy tourists are and have made accommodations to meet their needs. This resort has a selection of pre-packaged food and drinks that you can quickly grab as you’re going from place to place. The resort itself has a few things that may make you not want to leave including a 24-hour fitness center and a pool deck.
          </p>
        </div>
        <div>
          <img src="<?php echo THEME_IMAGE_DESTINATIONDEALS . '/hawaii/hawaii-kona.jpg' ?>" alt="Kona" class="rounded-lg">
        </div>
      </div>
    </div>
  </div>
  <div class="border-t border-gray-100"></div>
</div>