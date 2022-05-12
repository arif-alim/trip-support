<?php
$australia = array(
  array(
    "What is the most luxurious hotel in Australia?" => "The Langham Melbourne in Melbourne.",
    "What are the Pet-Friendly Hotels in Sydney?" => "Hughenden Hotel, View Sydney, and Glenferrie Lodge are some of the pet-friendly hotels in Australia.",
    "How much is a hotel in Melbourne for one night?" => "A one-night stay in a hotel in Melbourne can cost you up to $100 CAD/night.",
    "What are the most famous hotels in Australia?" => "Hayman Islands Great Barrier Reef, Emirates Wolgan Valley, and Park Hyatt Sydney are some of the most famous hotels in Australia.",
    "What are the best luxury hotels in Adelaide for couples?" => "Mount Lofty House and Eos by SkyCity.",
  ),
);

$caribbean = array(
  array(
    "What is the most luxurious hotel in the Caribbean?" => "Amanera, Dominican Republic.",
    "What are the Pet-Friendly Hotels in Cancun?" => "Aloft Cancun, Aquamarina Beach Hotel, Hotel NYX Cancun, Fairfield Inn & Suites by Marriott Cancun are some of the pet-friendly hotels in Cancun.",
    "How much is a hotel in Varadero for one night?" => "A one-night stay in a hotel in Varadero can cost you up to $75 CAD/night.",
    "What are the most famous hotels in the Bahamas?" => "The Cove Resort at Atlantis, Paradise Island, Bahamas.",
    "What are the best luxury hotels in Aruba for couples?" => "Wonders Boutique Hotel and the Renaissance Wind Creek Aruba Resort.",
  ),
);

$domestic = array(
  array(
    "What is the most luxurious hotel in Canada?" => "The Fairmont Pacific Rim, Vancouver.",
    "What are the Pet-Friendly Hotels in Vancouver?" => "Sutton Place Hotel Vancouver, The Burrard, Holiday Inn & Suites Vancouver Downtown, and Pinnacle Hotel Harbourfront are some of the pet-friendly hotels in Vancouver.",
    "How much is a hotel in Niagara for one night?" => "On average, 3-star hotels in Niagara Falls cost $134 per night, and 4-star hotels in Niagara Falls are $220 per night.",
    "What are the most famous hotels in Toronto?" => "The Ritz-Carlton Hotel Toronto, Four Seasons Hotel Toronto, and Fairmont Royal York are among the famous hotels in Toronto.",
    "What are the best luxury hotels in Banff for couples?" => "Fairmont Banff Springs.",
  ),
);

$europe = array(
  array(
    "What is the most luxurious hotel in Paris?" => "Ritz Paris is the most luxurious hotel in Paris.",
    "What are the Pet-Friendly Hotels in Barcelona?" => "Novotel Barcelona City, Petit Palace Museum, and Hilton Diagonal Mar Barcelona are some of the Pet-friendly hotels in Barcelona.",
    "How much is a hotel in Switzerland for one night?" => "The average price for a decent hotel room in Switzerland can range between $100 – 300 USD.",
    "What are the most famous hotels in Venice?" => "Palazzo Venart Luxury Hotel, Hotel Monaco and Grand Canal, and Hotel Londra Palace are one of the famous hotels in Venice.",
    "What are the best luxury hotels in Rome for couples?" => "St Regis Rome ",
  ),
);

$middle_east = array(
  array(
    "What is the most luxurious hotel in the Middle East?" => "Burj-Al Arab Jumeirah",
    "What are the Pet-Friendly Hotels in Dubai?" => "Hotel Indigo Dubai Downtown, The Canvas Hotel Dubai, Marco Polo Hotel are some of the pet-friendly hotels in Dubai",
    "How much is a hotel in Abu Dhabi for one night?" => "Abu Dhabi hotels range from <b>$38</b> to <b>$84</b> per night with an average of $54.",
    "What are the most famous hotels in Qatar?" => "Wyndham Grand Regency Doha",
    "What are the best luxury hotels in Dubai for couples?" => "Mandarin Oriental Jumeira, Dubai.",
  ),
);

$usa = array(
  array(
    "What is the most luxurious hotel in Las Vegas?" => "The Nobu Villa, Nobu Hotel.",
    "What are the Pet-Friendly Hotels in New York?" => "Hilton Garden Inn New York/Midtown Park Ave, W- New York Downtown, and The Hotel at 5th Avenue are some of the pet-friendly hotels in New York.",
    "How much is a hotel in Miami for one night?" => "A one-night stay in a hotel in Miami can cost you up to $200/night.",
    "What are the most famous hotels in California?" => "Hotel del Coronado, Curio Collection by Hilton is one of the most famous hotels in California.",
    "What are the best luxury hotels in New York for couples?" => "The Ritz-Carlton New York, Central Park. ",
  ),
);
?>


<div class="mx-auto max-w-7xl bg-white">
  <section class="pt-6 relative overflow-hidden px-4">
    <div class="container">
      <div class="d-flex d-flex-wrap">
        <div class="w-full">
          <div class="mx-auto mb-6 lg:mb-10">
            <span class="font-normal text-tiny block text-rose-600">
              FAQs
            </span>
            <h2 class="font-extrabold text-xl sm:text-3xl text-gray-900 mb-4">
              <?php the_title(); ?>, Frequently Asked Questions
            </h2>
            <p class="sm:text-base text-tiny text-body-color">
              See below for frequently asked questions.
            </p>
          </div>
        </div>
      </div>
      <div class="flex">
        <div class="w-full ">
          <div class="accordion" id="accordionExample5">
            <!-- Australia Faqs Links -->
            <?php if ($post->post_name == 'hotels-in-australia') { ?>
              <?php $num = 0;
              $ques_id = "australiaQone";
              $bs_target = "#australiaOne";
              $aria_controls = "australiaOne";
              $ans_id = "australiaOne";
              $labelledby = "australiaQone";

              foreach ($australia as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-[16px] text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-[16px] text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Caribbean Faqs Links -->
            <?php if ($post->post_name == 'hotels-in-caribbean') { ?>
              <?php $num = 0;
              $ques_id = "caribbeanQone";
              $bs_target = "#caribbeanOne";
              $aria_controls = "caribbeanOne";
              $ans_id = "caribbeanOne";
              $labelledby = "caribbeanQone";

              foreach ($caribbean as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-[16px] text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-[16px] text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Domestic Faqs Links -->
            <?php if ($post->post_name == 'domestic-hotels') { ?>
              <?php $num = 0;
              $ques_id = "domesticQone";
              $bs_target = "#domesticOne";
              $aria_controls = "domesticOne";
              $ans_id = "domesticOne";
              $labelledby = "domesticQone";

              foreach ($domestic as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-[16px] text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-[16px] text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Europe Hotels Faqs Links -->
            <?php if ($post->post_name == 'hotels-in-europe') { ?>
              <?php $num = 0;
              $ques_id = "europeQone";
              $bs_target = "#europeOne";
              $aria_controls = "europeOne";
              $ans_id = "europeOne";
              $labelledby = "europeQone";

              foreach ($europe as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-[16px] text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-[16px] text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Hotels in Middle East Faqs Links -->
            <?php if ($post->post_name == 'hotels-in-middle-east') { ?>
              <?php $num = 0;
              $ques_id = "middle_eastQone";
              $bs_target = "#middle_eastOne";
              $aria_controls = "middle_eastOne";
              $ans_id = "middle_eastOne";
              $labelledby = "middle_eastQone";

              foreach ($middle_east as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-[16px] text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-[16px] text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Hotels in USA Faqs Links -->
            <?php if ($post->post_name == 'hotels-in-usa') { ?>
              <?php $num = 0;
              $ques_id = "usaQone";
              $bs_target = "#usaOne";
              $aria_controls = "usaOne";
              $ans_id = "usaOne";
              $labelledby = "usaQone";

              foreach ($usa as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-[16px] text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-[16px] text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>