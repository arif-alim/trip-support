<section class="relative overflow-hidden">
  <div class="max-w-6xl prose">
    <div class="w-full">
      <h1 class="text-xl tracking-tight font-extrabold text-slate-900 sm:text-2xl md:text-3xl mb-0">
        <span class="block xl:inline">Destination, <?php the_title(); ?></span>
      </h1>
    </div>
    <p class="text-justify">
      Aruba is a tropical island in the Southern Caribbean known for its impeccable beaches and amazing resorts with an abundance of all-inclusive and 5-star options. Aruba is a constituent country of the Netherlands and sees many European visitors, US visitors, and South American visitors.
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
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/aruba/aruba-2.jpg" class="block w-full object-cover object-center" alt="Wild Landscape" />
        </div>
        <div class="carousel-item float-left w-full">
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/aruba/aruba-1.jpg" class="block w-full object-cover object-center" alt="Camera" />
        </div>
        <div class="carousel-item float-left w-full">
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/aruba/aruba-3.jpg" class="block w-full object-cover object-center" alt="Exotic Fruits" />
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
      <iframe src="https://snazzymaps.com/embed/387840" width="100%" height="300px" style="border:none;"></iframe>
    </div>
    <div class="flex justify-start items-center space-x-12">
      <?php echo do_shortcode("[location-weather id='11477']"); ?>
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
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Nightlife bar hopping on a bus</h2>
          <p class="text-justify">
            Hop on this party bus for a fun-filled evening with a live DJ and a host. If you wish to experience Aruba’s lively nightlife, this is the perfect opportunity. This bus takes you around Palm and Eagle beach and stops at some of the island's hottest clubs and pubs. Dance and cruise around the city with a glass of cocktail in your hand.
          </p>
        </div>
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Palm Beach</h2>
          <p class="text-justify">
            Palm beach is one of the most visited beaches in Aruba and is best known for its white sands and turquoise waters. This beach is home to many high-rise hotels, casinos, palm trees, beach bars and is a popular hangout for tourists. The lively beach also offers a number of watersports activities, making it a one-stop destination for everything.
          </p>
        </div>
      </div>
      <div class="flex-col space-y-6 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Snorkeling</h2>
          <p class="text-justify">
            Aruba offers enough coral reefs, marine life, and wreck diving to keep scuba divers and snorkelers busy for days. The best snorkeling sites in Aruba are around Malmok beach and Boca Catalina as the water here is calm and shallow and marine life is plentiful. Apart from this, a visit to the Antilla wreck, the best shipwreck in the Caribbean is a must.
          </p>
        </div>
        <div>
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/aruba/aruba-palm-beach.jpg" alt="woman snorkelling in cayo coco" class="rounded-lg">
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
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Atlantis Submarines Aruba</h2>
          <p class="text-justify">
            Take a voyage beneath the sparkling waters of the Caribbean to experience views like never before. Discover the underwater world of the Caribbean sea up-close and personal. Keep your eyes open to witness shipwrecks, colorful corals and an abundance of marine life on this underwater adventure.
          </p>
        </div>
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Sunset Sail</h2>
          <p class="text-justify">
            Sail aboard a luxury catamaran on this sunset cruise from Aruba. This luxury catamaran sunset cruise shows you Aruba’s stunning coastlines and views of Palm beach. The cruise also offers complimentary appetizers, local music, dance, storytelling and not to forget some amazing famous cocktails.
          </p>
        </div>
      </div>
      <div class="flex-col space-y-6 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Aruba Downtown Historic and Cultural Walking Tour</h2>
          <p class="text-justify">
            Explore the capital city of Aruba, Oranjestad, where you can witness a series of monuments, museums, shops and others. Visit Fort Zoutman and the National Archaeological Museum to get a glimpse of Aruba’s history.Not just this, you would also get to explore the streets of Oranjestad and local restaurants.
          </p>
        </div>
        <div>
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/aruba/aruba-sunset.jpg" alt="Aruba Sunset" class="rounded-lg">
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
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Hyatt Place Aruba Airport</h2>
          <p class="text-justify">
            Enjoy some of Aruba’s best attractions, such as; pristine beaches, National Parks and others. This hotel features a total of 116 accommodations. The hotel offers some of the best and unique views of the island, making it a great place to spend your vacation at.
          </p>
        </div>
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Radisson Blu Aruba</h2>
          <p class="text-justify">
            Radisson Blu Aruba has the perfect location which is why it is said to be an ideal hub to enjoy the Caribbean adventure. Palm beach and all watersports activities are just a walk away. The hotel is also close to high-end shops, restaurants, bars and a vibrant nightlife of the Palm Beach strip.
          </p>
        </div>
      </div>
      <div class="flex-col space-y-6 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Hilton Aruba Caribbean Resort and Casino</h2>
          <p class="text-justify">
            Nestled on 15 tropical acres along the Palm Beach, this resort is just steps away from shopping centers, nightlife and dining. You can experience endless ocean vistas and a diverse selection of bars and restaurants. The resort also offers a variety of amenities, including water sports, butterfly house, exotic wellness and much more.
          </p>
        </div>
        <div>
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/aruba/aruba-hilton.jpg" alt="Aruba hilton" class="rounded-lg">
        </div>
      </div>
    </div>
  </div>
  <div class="border-t border-gray-100"></div>
</div>