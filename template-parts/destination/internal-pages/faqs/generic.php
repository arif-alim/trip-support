<?php 
  $cayococo = array(
    array(
      "Can I book my travel to Cayo Coco now and pay later?" => "Yes! Trip Support offers a “Book Now and Pay Later” service, where payments can be made in installments before your vacations and flights. Uniquely, we offer this service without the need for credit checks and extensive documentation.",
      "Can I travel to Cayo Coco right now?" => "Yes! You can book an all-inclusive Cayo Coco vacation package right now and be on the plane within a week.",
      "Can I make reservations for last minute travel? " => "When it comes to Cayo Coco, you’ll want to book your vacation package three months in advance. The resorts can fill up quickly, especially during the dry season.",
      "I have to cancel my vacation to Cayo Coco. Can my tickets be refunded?" => "If your booking is eligible for cancellation, you might be subject to a $250 airline cancellation fee. However, most discounted airline tickets are non-refundable. For more information, please contact us at 1-855-606-0606",
      "How do I get a cheap travel package to/from Cayo Coco?" => "At Trip Support, we believe that travel should be affordable for all. For a cheap travel package to/from Cayo Coco, please check out our Cayo Coco vacation packages located at <a href='https://tripsupport.ca/'>https://tripsupport.ca/</a>",
      "Are Cayo Coco Resorts Safe?" => "Yes! Although petty crimes are quite common in certain areas of Cuba, the resorts and more touristy areas are perfectly safe, especially in Cayo Coco and other nearby areas.",
    ),
  );
  $santamaria = array(
    array(
      "Can I book my travel to Cayo Santa Maria now and pay later?" => "Yes! Trip Support offers a “Book Now and Pay Later” service, where payments can be made in installments before your vacations and flights. Uniquely, we offer this service without the need for credit checks and extensive documentation.",
      "Can I travel to Cayo Santa Maria right now?" => "Yes! You can book an all-inclusive Cayo Santa Maria vacation package right now and be on the plane within a week.",
      "Can I make reservations for last minute travel? " => "Can I make reservations for last minute travel? ",
      "I have to cancel my vacation to Cayo Santa Maria. Can my tickets be refunded?" => "If your booking is eligible for cancellation, you might be subject to a $250 airline cancellation fee. However, most discounted airline tickets are non-refundable. For more information, please contact us at 1-855-606-0606",
      "How do I get a cheap travel package to/from Cayo Santa Maria?" => "At Trip Support, we believe that travel should be affordable for all. For a cheap travel package to/from Cayo Santa Maria, please check out our Cayo Santa Maria vacation packages located at <a href='https://tripsupport.ca/'>https://tripsupport.ca/</a>",
      "Are Cayo Santa Maria Resorts Safe?" => "Yes! Although petty crimes are quite common in certain areas of Cuba, the resorts and more touristy areas are perfectly safe, especially in Cayo Santa Maria. ",
    ),
  );
  $havana = array(
    array(
      "Havana Question #1" => "Havana Answer #1",
      "Havana Question #2" => "Havana Answer #2",
      "Havana Question #3" => "Havana Answer #3",
      "Havana Question #4" => "Havana Answer #4",
      "Havana Question #5" => "Havana Answer #5",
      "Havana Question #6" => "Havana Answer #6",
    ),
  );
  $holguin = array(
    array(
      "Holguin Question #1" => "Holguin Answer #1",
      "Holguin Question #2" => "Holguin Answer #2",
      "Holguin Question #3" => "Holguin Answer #3",
      "Holguin Question #4" => "Holguin Answer #4",
      "Holguin Question #5" => "Holguin Answer #5",
      "Holguin Question #6" => "Holguin Answer #6",
    ),
  );
  $varadero = array(
    array(
      "Can I book my travel to Varadero now and pay later?" => "Yes! Trip Support offers a “Book Now and Pay Later” service, where payments can be made in installments before your vacations and flights. Uniquely, we offer this service without the need for credit checks and extensive documentation.",
      "Can I travel to Varadero right now?" => "Yes! You can book an all-inclusive Varadero vacation package right now and be on the plane within a week.",
      "Can I make reservations for last minute travel? " => "When it comes to Varadero, you’ll want to book your vacation package three months in advance. The resorts can fill up quickly, especially during the dry season.",
      "I have to cancel my vacation to Varadero. Can my tickets be refunded?" => "If your booking is eligible for cancellation, you might be subject to a $250 airline cancellation fee. However, most discounted airline tickets are non-refundable. For more information, please contact us at 1-855-606-0606",
      "How do I get a cheap travel package to/from Varadero?" => "At Trip Support, we believe that travel should be affordable for all. For a cheap travel package to/from Varadero, please check out our Varadero vacation packages located at https://tripsupport.ca/",
      "Are Varadero Resorts Safe?" => "Yes! Although petty crimes are quite common in certain areas of Cuba, the resorts and more touristy areas are perfectly safe, especially in Varadero and other nearby areas.",
    ),
  );
?>



<div class="d-flex d-flex-wrap">
  <div class="w-full">
    <div class="mx-auto my-6 lg:my-12">
      <span class="font-normal text-tiny block text-rose-600">
        FAQs
      </span>
      <h2
        class="font-extrabold text-xl sm:text-3xl text-gray-900 mb-4"
      >
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
      <!-- Cayo Coco Faqs Links -->
      <?php if ($post->post_name == 'cayo-coco') { ?>
        <?php $num = 0;
        $ques_id = "cayococoQone";
        $bs_target = "#cayococoOne";
        $aria_controls = "cayococoOne";
        $ans_id = "cayococoOne";
        $labelledby = "cayococoQone";
        
        foreach($cayococo as $faq)
        $num++; {?>
          <?php foreach ($faq as $ques => $ans) {?>
            <div class="accordion-item bg-white border border-gray-200">
              <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                <button 
                class="accordion-button relative collapsed flex items-center w-full p-4 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="<?php echo $bs_target++ ?>" 
                aria-expanded="false"
                aria-controls="<?php echo $aria_controls++ ?>">
                  <?php echo "$ques" ?>
                </button>
              </h2>
              <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                <div class="accordion-body p-4 text-tiny prose max-w-5xl text-slate-900">
                  <?php echo "$ans" ?>
                </div>
              </div>
            </div>
          <?php } ?>
        <?php } ?>
      <?php } ?>
      
      <!-- Cayo Santa Maria Faqs Links -->
      <?php if ($post->post_name == 'cayo-santa-maria') { ?>
        <?php $num = 0;
        $ques_id = "santamariaQone";
        $bs_target = "#santamariaOne";
        $aria_controls = "santamariaOne";
        $ans_id = "santamariaOne";
        $labelledby = "santamariaQone";

        foreach($santamaria as $faq)
        $num++; {?>
          <?php foreach ($faq as $ques => $ans) {?>
            <div class="accordion-item bg-white border border-gray-200">
              <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                <button 
                class="accordion-button relative collapsed flex items-center w-full p-4 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="<?php echo $bs_target++ ?>" 
                aria-expanded="false"
                aria-controls="<?php echo $aria_controls++ ?>">
                  <?php echo "$ques" ?>
                </button>
              </h2>
              <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                <div class="accordion-body p-4 text-tiny prose max-w-5xl text-slate-900">
                  <?php echo "$ans" ?>
                </div>
              </div>
            </div>
          <?php } ?>
        <?php } ?>
      <?php } ?>

      <!-- Havana Faqs Links -->
      <?php if ($post->post_name == 'havana') { ?>
        <?php $num = 0;
        $ques_id = "havanaQone";
        $bs_target = "#havanaOne";
        $aria_controls = "havanaOne";
        $ans_id = "havanaOne";
        $labelledby = "havanaQone";

        foreach($havana as $faq)
        $num++; {?>
          <?php foreach ($faq as $ques => $ans) {?>
            <div class="accordion-item bg-white border border-gray-200">
              <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                <button 
                class="accordion-button relative collapsed flex items-center w-full p-4 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="<?php echo $bs_target++ ?>" 
                aria-expanded="false"
                aria-controls="<?php echo $aria_controls++ ?>">
                  <?php echo "$ques" ?>
                </button>
              </h2>
              <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                <div class="accordion-body p-4 text-tiny prose max-w-5xl text-slate-900">
                  <?php echo "$ans" ?>
                </div>
              </div>
            </div>
          <?php } ?>
        <?php } ?>
      <?php } ?>

      <!-- Holguin Faqs Links -->
      <?php if ($post->post_name == 'holguin') { ?>
        <?php $num = 0;
        $ques_id = "holguinQone";
        $bs_target = "#holguinOne";
        $aria_controls = "holguinOne";
        $ans_id = "holguinOne";
        $labelledby = "holguinQone";

        foreach($holguin as $faq)
        $num++; {?>
          <?php foreach ($faq as $ques => $ans) {?>
            <div class="accordion-item bg-white border border-gray-200">
              <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                <button 
                class="accordion-button relative collapsed flex items-center w-full p-4 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="<?php echo $bs_target++ ?>" 
                aria-expanded="false"
                aria-controls="<?php echo $aria_controls++ ?>">
                  <?php echo "$ques" ?>
                </button>
              </h2>
              <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                <div class="accordion-body p-4 text-tiny prose max-w-5xl text-slate-900">
                  <?php echo "$ans" ?>
                </div>
              </div>
            </div>
          <?php } ?>
        <?php } ?>
      <?php } ?>

      <!-- Varadero Faqs Links -->
      <?php if ($post->post_name == 'varadero') { ?>
        <?php $num = 0;
        $ques_id = "varaderoQone";
        $bs_target = "#varaderoOne";
        $aria_controls = "varaderoOne";
        $ans_id = "varaderoOne";
        $labelledby = "varaderoQone";

        foreach($varadero as $faq)
        $num++; {?>
          <?php foreach ($faq as $ques => $ans) {?>
            <div class="accordion-item bg-white border border-gray-200">
              <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                <button 
                class="accordion-button relative collapsed flex items-center w-full p-4 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="<?php echo $bs_target++ ?>" 
                aria-expanded="false"
                aria-controls="<?php echo $aria_controls++ ?>">
                  <?php echo "$ques" ?>
                </button>
              </h2>
              <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                <div class="accordion-body p-4 text-tiny prose max-w-5xl text-slate-900">
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
