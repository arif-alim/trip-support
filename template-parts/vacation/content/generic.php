<div class="mx-auto max-w-7xl">
  <section class="pt-8 relative z-20 overflow-hidden">

    <div class="d-flex d-flex-wrap">
      <div class="w-full px-4">
        <h1 class="text-xl tracking-tight font-extrabold text-slate-900 sm:text-2xl md:text-3xl">
          <span class="block xl:inline"><?php the_title(); ?></span>
        </h1>
      </div>
    </div>
    <div class="max-w-5xl p-4 prose">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>


    <div class="flex flex-wrap">
      <div class="w-full sm:col-12 lg:m-6">
        <ul class="nav nav-tabs nav-justified overflow-x-scroll whitespace-nowrap flex mb-0 list-none pt-3 pb-4 flex-row" id="tabs-tabJustify" role="tablist">
          <li class="nav-item -mb-px sm:mr-2 last:mr-0 flex-auto text-center col-12 py-2" role="presentation">
            <a href="#tabs-tip1" class="nav-link text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal active bg-white" id="tabs-tab1" data-bs-toggle="pill" data-bs-target="#tabs-tip1" role="tab" aria-controls="tabs-tip1" aria-selected="true">
              <i class="fa-solid fa-leaf text-tiny mr-1"></i>
              Spring
            </a>
          </li>
          <li class="nav-item -mb-px mr-2 last:mr-0 flex-auto text-center col-6 md:col-12 py-2" role="presentation">
            <a href="#tabs-tip2" class="nav-link text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal bg-white" id="tabs-tab2" data-bs-toggle="pill" data-bs-target="#tabs-tip2" role="tab" aria-controls="tabs-tip2" aria-selected="false">
              <i class="fa-solid fa-sun text-tiny mr-1"></i>
              Summer
            </a>
          </li>
          <li class="nav-item -mb-px mr-2 last:mr-0 flex-auto text-center col-6 md:col-12 py-2" role="presentation">
            <a href="#tabs-tip3" class="nav-link text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal bg-white" id="tabs-tab3" data-bs-toggle="pill" data-bs-target="#tabs-tip3" role="tab" aria-controls="tabs-tip3" aria-selected="false">
              <i class="fa-brands fa-pagelines text-tiny mr-1"></i>
              Fall
            </a>
          </li>
          <li class="nav-item -mb-px mr-2 last:mr-0 flex-auto text-center col-6 md:col-12 py-2" role="presentation">
            <a href="#tabs-tip4" class="nav-link text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal bg-white" id="tabs-tab4" data-bs-toggle="pill" data-bs-target="#tabs-tip4" role="tab" aria-controls="tabs-tip4" aria-selected="false">

              <i class="fa-solid fa-snowflake text-tiny mr-1"></i>
              Winter
            </a>
          </li>


        </ul>
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-lg rounded-lg ">
          <div class="p-4 flex-auto">
            <div class="tab-content" id="tabs-tabContentJustify">
              <div class="tab-pane tab-space fade show active text-slate-900 space-y-2" id="tabs-tip1" role="tabpanel" aria-labelledby="tabs-tab1">
                <?php get_template_part('/template-parts/vacation/content/tab/spring') ?>
              </div>
              <div class="tab-pane fade text-slate-900 space-y-2" id="tabs-tip2" role="tabpanel" aria-labelledby="tabs-tab2">
                <?php get_template_part('/template-parts/vacation/content/tab/summer') ?>
              </div>
              <div class="tab-pane fade text-slate-900 space-y-2" id="tabs-tip3" role="tabpanel" aria-labelledby="tabs-tab3">
                <?php get_template_part('/template-parts/vacation/content/tab/fall') ?>
              </div>
              <div class="tab-pane fade text-slate-900 space-y-2" id="tabs-tip4" role="tabpanel" aria-labelledby="tabs-tab4">
                <?php get_template_part('/template-parts/vacation/content/tab/winter') ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</div>