

<body class="h-full">
<div class="min-h-full">
  <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
  <div class="relative z-40 hidden sidebarMenu" role="dialog" aria-modal="true" id="sidebarMenu">
    <!--
      Off-canvas menu backdrop, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

    <div class="fixed inset-0 flex z-40">
      <!--
        Off-canvas menu, show/hide based on off-canvas menu state.

        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->
      <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-cyan-700">
        <!--
          Close button, show/hide based on off-canvas menu state.

          Entering: "ease-in-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in-out duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="absolute top-0 right-0 -mr-12 pt-2">
          <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" onclick="toggleMenu('sidebarMenu')">
            <span class="sr-only">Close sidebar</span>
            <!-- Heroicon name: outline/x -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <div class="flex-shrink-0 flex items-center px-4">
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/easywire-logo-cyan-300-mark-white-text.svg" alt="Easywire logo">
        </div>
        <nav class="mt-5 flex-shrink-0 h-full divide-y divide-cyan-800 overflow-y-auto" aria-label="Sidebar">
          <div class="px-2 space-y-1">
            <!-- Current: "bg-cyan-800 text-white", Default: "text-cyan-100 hover:text-white hover:bg-cyan-600" -->
            
            <?php for($i = 0; $i < count(NAVLIST); $i++){ ?>
                        
              <!--loop to populate navigation sidebar, and link to related currentPage -->
              <a href="<?php echo APPURI . "/" . strtolower(NAVLIST[$i]) ?>" class="bg-cyan-800 text-cyan-100 group flex items-center px-2 py-2 text-base font-medium rounded-md" aria-current="page">

                <?php echo NAVICONS[0] . NAVICONS[1] . NAVICONS[2] . NAVICONS[$i + 4] . NAVICONS[3] . "&nbsp" . NAVLIST[$i] ?>
                        
              </a>
                  
            <?php } ?>

          </div>
        </nav>
      </div>

      <div class="flex-shrink-0 w-14" aria-hidden="true">
        <!-- Dummy element to force sidebar to shrink to fit close icon -->
      </div>
    </div>
  </div>

  <!-- Static sidebar for desktop -->
  <div class="hidden lg:flex lg:w-64 lg:flex-col lg:fixed lg:inset-y-0">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex flex-col flex-grow bg-cyan-700 pt-5 pb-4 overflow-y-auto">
      <div class="flex items-center flex-shrink-0 px-4">
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/easywire-logo-cyan-300-mark-white-text.svg" alt="Easywire logo">
      </div>
      <nav class="mt-5 flex-1 flex flex-col divide-y divide-cyan-800 overflow-y-auto" aria-label="Sidebar">
        <div class="px-2 space-y-1">
          <!-- Current: "bg-cyan-800 text-white", Default: "text-cyan-100 hover:text-white hover:bg-cyan-600" -->
           
            <?php for($i = 0; $i < count(NAVLIST); $i++){ ?>
                        
              <!--loop to populate navigation sidebar, and link to related currentPage -->
              <a href="<?php echo APPURI . "/" . strtolower(NAVLIST[$i]) ?>" class="bg-cyan-800 text-cyan-100 group flex items-center px-2 py-2 text-base font-medium rounded-md" aria-current="page">
                      
                <?php echo NAVICONS[0] . NAVICONS[1] . NAVICONS[2] . NAVICONS[$i + 4] . NAVICONS[3] . "&nbsp" . NAVLIST[$i] ?>
                        
              </a>
                  
            <?php } ?>
          
        </div>
      </nav>
    </div>
  </div>

