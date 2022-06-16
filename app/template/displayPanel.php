<div class="mt-8 max-w-lg mx-auto">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <form id="actionForm" class="space-y-8 divide-y divide-gray-200" method="post" action="<?php echo APPURI . '/' . $currentPage ?>">
      <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
        <div>
          <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">Profile</h3>
          </div>

          <?php foreach(($data = DISPLAY_OBJ_DATA[$currentPage]) as $input){ ?>
            
          <div>
            <label for="<?php echo $input[0] ?>" class="block text-sm font-medium text-gray-700"><?php echo $input[1] ?></label>
            <div class="mt-1 relative rounded-md shadow-sm mb-16">
              <input <?php ($input[2] == "date") ? "datepicker" : "" ?> type="<?php echo $input[2] ?>" name="<?php echo $input[0] ?>" id="<?php echo $input[0] ?>" class="block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md" placeholder="<?php echo $input[1] ?>" aria-invalid="true" aria-describedby="<?php echo $input[0] ?>-error" <?php echo ($currentObject) ? 'value="' . $currentObject->{$input[0]} . '"' : '' ?> required <?php echo (in_array($actionFlag, ['view', 'delete']) || $input[0] == 'id') ? 'readonly=`readonly`' : '' ?>>
            </div>
              <p class="mt-2 text-sm text-red-600 invisible" id="<?php echo $input[1] ?>-error">Your password must be less than 4 characters.</p>
          </div>

          <?php } ?>

          <div class="pt-5">
            <div class="flex justify-end">
              <button type="button" onclick="location.href=`<?php echo APPURI . '/' . $currentPage ?>`" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><?php echo ($actionFlag == 'view') ? 'Back' : 'Cancel' ?></button>

              <?php if($actionFlag != 'view') { ?>
              
              <button type="button" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" onclick="confirmAction('<?php echo $actionFlag ?>')"><?php echo strtoupper($actionFlag) ?></button>

              <?php }?>

                <input type="hidden" name="id" value="<?php echo $currentObject->id ?>">
                <input type="hidden" name="obsolete" value="<?php echo $currentObject->obsolete ?>">
                <input type="hidden" name="action" value="<?php echo $actionFlag ?>">
                <input type="hidden" name="currentPage" value="<?php echo $currentPage ?>">

            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
