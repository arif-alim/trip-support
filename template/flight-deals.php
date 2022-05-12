<?php /* Template Name: Flight Deals */ ?>
<?php /* Template Post Type: flight_deals */ ?>

<?php get_header(); ?>
<main>

  <!-- Banner Section -->
  <?php get_template_part('/template-parts/flight/banner/generic') ?>

  <!-- Booking Widget Section -->
  <section class="relative max-w-7xl -mt-5 mx-auto xl:-mt-32 lg:-mt-28 md:-mt-8 pb-12 lg:mb-6 px-0" aria-labelledby="contact-heading">
    <search-box-component country="CA" lang="en-US" active="flight" url="https://secure.tripsupport.ca">
    </search-box-component>
  </section>

  <!-- Main Content -->
  <div class="mx-auto max-w-7xl bg-white">
    <section class="relative overflow-hidden px-4">
      <div class="container">
        <!-- Page Specific Content goes here -->
        <?php switch ($post->post_name) {
          case 'flights-to-los-angeles':
            get_template_part('/template-parts/flight/content/los-angeles');
            break;
          case 'flights-to-delhi':
            get_template_part('/template-parts/flight/content/delhi');
            break;
          case 'flights-to-hong-kong':
            get_template_part('/template-parts/flight/content/hongkong');
            break;
          case 'flights-to-london':
            get_template_part('/template-parts/flight/content/london');
            break;
          case 'flights-to-paris':
            get_template_part('/template-parts/flight/content/paris');
            break;
          case 'flights-to-tehran':
            get_template_part('/template-parts/flight/content/tehran');
            break;

          default:
            get_template_part('/template-parts/flight/content/generic');
            break;
        } ?>

        <!-- CTA -->

        <!-- FAQs -->
        <?php get_template_part('/template-parts/flight/faqs/generic'); ?>
      </div>
    </section>
  </div>


  <!-- Explore Links (internal pages) -->
  <?php get_template_part('/template-parts/flight/explore/generic'); ?>

  <!-- Newsletter -->
  <?php get_template_part('/template-parts/global/newsletter') ?>
</main>

<?php get_footer() ?>