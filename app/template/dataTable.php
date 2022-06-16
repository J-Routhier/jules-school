<!-- Data Table -->
<h2 class="max-w-6xl mx-auto mt-8 px-4 text-lg leading-6 font-medium text-gray-900 sm:px-6 lg:px-8"><?php echo strtoupper($currentPage); ?></h2>

        <!-- Activity list (smallest breakpoint only) -->
        <div class="shadow sm:hidden">
          <ul role="list" class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden">
            <li>
              <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                <span class="flex items-center space-x-4">
                  <span class="flex-1 flex space-x-2 truncate">
                    <!-- Heroicon name: solid/cash -->
                     <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg>
                    <span class="flex flex-col text-gray-500 text-sm truncate">
                      <span class="truncate">Payment to Molly Sanders</span>
                      <span><span class="text-gray-900 font-medium">$20,000</span> USD</span>
                      <time datetime="2020-07-11">July 11, 2020</time>
                    </span>
                  </span>
                  <!-- Heroicon name: solid/chevron-right -->
                  <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </span>
              </a>
            </li>
            <!-- More transactions... -->
          </ul>

          <nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200" aria-label="Pagination">
            <div class="flex-1 flex justify-between">
              <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500"> Previous </a>
              <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500"> Next </a>
            </div>
          </nav>
        </div>
   

        <!-- Activity table (small breakpoint and up) -->
        <div class="hidden sm:block">
          <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col mt-2">
              <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                  <thead>
                    <tr>

                      <?php

                      //populate table labels
                      for($i = 0; $i < count($columns); $i++){ ?>

                      <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col"><?php echo $columns[$i][0]?></th>
          
                    <?php } ?>
                      <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col"><!--empty placeholder--></th>
                      <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">
                        <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500" onclick="window.location= `<?php echo APPURI . '/' . $currentPage . '/add' ?>`">CREATE</button>
                      </th>
                    
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                   
                    <?php foreach($recordsList as $obj){ ?>
                  
                    <tr class="bg-white asdsdf"> 
                      
                      <?php for($i = 0; $i < count($columns); $i++){ ?>
                  
                      <td class="px-6 py-4 text-left whitespace-nowrap text-sm text-gray-500" onclick="window.location = `<?php echo APPURI . '/' . $currentPage . '/view/' . $obj->id ?>`">
                          <span class="text-gray-900 font-medium"><?php echo $obj->{$columns[$i][1]}; ?></span>
                      </td>
                      
                      <?php } ?>

                      <td class="px-6 py-4 text-left whitespace-nowrap text-sm text-gray-500">
                        <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500" onclick="window.location= `<?php echo APPURI . '/' . $currentPage . '/edit/' . $obj->id ?>`">EDIT</button>
                      </td>
                      <td class="px-6 py-4 text-left whitespace-nowrap text-sm text-gray-500">
                        <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500" onclick="window.location= `<?php echo APPURI . '/' . $currentPage . '/delete/' . $obj->id ?>`">DELETE</button>
                      </td>

                    </tr>                  

                      <?php   } ?>

                    <!-- More transactions... -->
                  </tbody>
                </table>
                <!-- Pagination -->
                <nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6" aria-label="Pagination">
                  <div class="hidden sm:block">
                    <p class="text-sm text-gray-700">
                      Showing
                      <span class="font-medium"><?php echo 20 * $pagination + 1 ?></span>
                      to
                      <span class="font-medium"><?php echo 20 * $pagination + count($recordsList) ?></span>
                      of
                      <span class="font-medium"><?php echo $totalNumRecords ?></span>
                      results
                    </p>
                  </div>
                  <div class="flex-1 flex justify-between sm:justify-end">
                    <a href="<?php echo APPURI . '/' . $currentPage . '/records/' . $pagination ?>" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 <?php echo ($pagination == 0) ? 'doNotDisplay' : "" ?>"> Previous </a>
                    <a href="<?php echo APPURI . '/' . $currentPage . '/records/' . $pagination + 2 ?>" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 <?php echo ($pagination + 1 > ($totalNumRecords / $numRecordsToDisplay)) ? 'doNotDisplay' : "" ?>"> Next </a>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>