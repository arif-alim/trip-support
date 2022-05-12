<section class="relative overflow-hidden">
  <div class="max-w-6xl prose">
    <div class="w-full">
      <h1 class="text-xl tracking-tight font-extrabold text-slate-900 sm:text-2xl md:text-3xl mb-0">
        <span class="block xl:inline">Destination, <?php the_title(); ?></span>
      </h1>
    </div>
    <p class="text-justify">
      The Dominican Republic is a Caribbean nation that shares the island of Hispaniola with Haiti to the west. It's known for its beaches, resorts and golfing. Its terrain comprises rainforest, savannah and highlands, including Pico Duarte, the Caribbean’s tallest mountain. Capital city Santo Domingo has Spanish landmarks like the Gothic Catedral Primada de America dating back 5 centuries in its Zona Colonial district.
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
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/dominican/dominican-2.jpg" class="block w-full object-cover object-center" alt="Wild Landscape" />
        </div>
        <div class="carousel-item float-left w-full">
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/dominican/dominican-1.jpg" class="block w-full object-cover object-center" alt="Camera" />
        </div>
        <div class="carousel-item float-left w-full">
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/dominican/dominican-3.jpg" class="block w-full object-cover object-center" alt="Exotic Fruits" />
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
      <iframe src="https://snazzymaps.com/embed/387844" width="100%" height="300px" style="border:none;"></iframe>
    </div>
    <div class="flex justify-start items-center space-x-12">
      <?php echo do_shortcode("[location-weather id='11476']"); ?>

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
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">27 Waterfalls of Damajagua</h2>
          <p class="text-justify">
            This popular attraction is located in Puerto Plata about an hour’s drive from the popular beach town of Sosua. Go on an adventure of a lifetime hiking through trails alongside some of the Dominican Republic’s most gorgeous natural scenery. After that, you’ll find yourself swimming through the area’s unique landscapes, and you’ll even get the opportunity to go down some of the waterfalls too. This attraction does an excellent job of showing off the Dominican Republic’s beauty while also providing you with hours of fun.
          </p>
        </div>
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Santo Domingo</h2>
          <p class="text-justify">
            Serving as the capitol of the Dominican Republic, Santo Domingo has a lot to offer its visitors when it comes to historic attractions and interesting locations. The city’s downtown area is filled with hotels, shops, and cafes that reflect centuries worth of culture and history. There are also botanical gardens and parks throughout the city that gives you a glimpse of the Dominican Republic’s natural beauty without taking you away from all of the wonders Santo Domingo has to offer.
          </p>
        </div>
      </div>
      <div class="flex-col space-y-6 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Surfing</h2>
          <p class="text-justify">
            The Dominican Republic has many prime spots for surfing along its coasts for beginners and experts alike. The region’s abundance of beaches and pristine climate means there will be no shortage of surfing spots and tours to take you to them. Many tours provide equipment and classes for those who are inexperienced and will take you to some of the best surfing spots in the country.
          </p>
        </div>
        <div>
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/dominican/dominican-santo-domingo.jpg" alt="Santo Domingo Hyatt Hotel in Domincan Republic" class="rounded-lg">
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
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Whale Watching</h2>
          <p class="text-justify">
            Whale watching is a very popular activity in the Dominican Republic especially in Samana Bay which is populated by whales area every year. There are plenty of tours near the coastal areas of Samana, but there are also plenty of tours offered in other parts of the country as well. Whale watching season peaks from January to March and stretches into May, so you’ll have to visit the Dominican Republic during this period if you want to catch a glimpse of the majestic creatures.
          </p>
        </div>
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Altos de Chavon</h2>
          <p class="text-justify">
            Located in the popular resort city, La Romana, Altos de Chavon is a recreation of a 16th century Mediterranean village with an archaeological museum and amphitheater. Immerse yourself in centuries old Dominican Republic culture as you explore the areas various shops and boutiques all stylized to fit the aesthetic. The area also has an art gallery featuring many local artist’s works and a renowned art school as well.
          </p>
        </div>
      </div>
      <div class="flex-col space-y-6 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Los Haitises National Park</h2>
          <p class="text-justify">
            Located near the ever-beautiful town of Samana, Los Haitises National Park is a vast area of wilderness filled with an endless sea of things to explore and appreciate. Visitors can explore the area’s many mangroves and caves either by themselves or through guided tours. You can take to the coast instead and explore the park’s beautiful beaches and unique, coastal rock structures. Finally, Los Haitises National Park is also home to many different species of bird, making it a great place for bird watching too.
          </p>
        </div>
        <div>
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/dominican/dominican-los-haitises.jpg" alt="Dominican Republic Los Haitises" class="rounded-lg">
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
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Dominican Treehouse Village</h2>
          <p class="text-justify">
            This unique resort offers an experience like no other but should be avoided if you don’t like heights. Located in the heart of the Samana Peninsula’s jungles, the resort property is littered with trees, mangroves, and winding trails. As for the rooms, instead of the suites/apartments you would traditionally find in most resorts, rooms at the Dominican Treehouse Village are open-air treehouses connected to each other by rope bridges. Fall asleep to the soothing sounds of nature, and wake up to a pleasant tropical breeze.
          </p>
        </div>
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Ahnvee Resort Adults Only</h2>
          <p class="text-justify">
            As the name suggests, the Ahnvee Resort is strictly for adults. This resort is situated in the heart of Sosua, meaning you’ll have direct access to a multitude of different attractions the town has to offer. Ahnvee Resort Adults Only offers standard amenities typical of most all-inclusive resorts, but unlike other resorts, this one is located in an incredibly convenient area and is limited to adults only, culminating in the perfect stress-free place for you to stay.
          </p>
        </div>
      </div>
      <div class="flex-col space-y-6 flex-1">
        <div class="leading-relaxed">
          <h2 class="font-extrabold text-xl mb-2 text-gray-700">Hyatt Ziva Cap Cana</h2>
          <p class="text-justify">
            Hyatt Ziva Cap Cana is located on the famous Juanillo Beach which lies only 14 kilometres away from Punta Cana International Airport. This all-inclusive resort is chalk full of amenities to keep you entertained for weeks both on the property a nearby. Some of these amenities include infinity pools, bars and restaurants, a world-class golf course, and floating swim up suites. Hyatt Ziva Cap Cana also has its own water park complete with five slides and a lazy river.
          </p>
        </div>
        <div>
          <img src="https://trip-support.s3.amazonaws.com/images/destinations/pages/dominican/dominican-hyatt.jpg" alt="Dominican Republic Hyatt" class="rounded-lg">
        </div>
      </div>
    </div>
  </div>
  <div class="border-t border-gray-100"></div>
</div>