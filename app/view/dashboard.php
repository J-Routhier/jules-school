
<div class="containerJC">
  <div class="bg-white overflow-hidden shadow rounded-lg">
    <div class="px-4 py-5 sm:p-6"><!-- This example requires Tailwind CSS v2.0+ -->
      <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    
        <?php

          for($i = 1; $i < count(NAVLIST); $i++){

            echo '<a href="' . APPURI . '/' . strtolower(NAVLIST[$i]) . '">
                    <li class="col-span-1 flex flex-col text-center bg-cyan-800 rounded-lg shadow divide-y divide-gray-200">
                      <div class="flex-1 flex flex-col p-8">' .
                        NAVICONS[0] . NAVICONS[2] . NAVICONS[$i + 4] . NAVICONS[3] .
                        '<h2 class="mt-6 text-cyan-100 font-medium">' . NAVLIST[$i] . '</h2>
                      </div>
                    </li>
                  </a>';

          }

        ?>

      </ul>
    </div>
  </div>
</div>

