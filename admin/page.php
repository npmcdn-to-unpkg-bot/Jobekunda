  <?php 

                /*
                *Basic templates
                */
    include D_TEMPLATE.'/sidebar.php'; 

    include D_TEMPLATE.'/header.php';     

  
echo '  <div class = "pagewrapper"style="top: 3.7em;background: #D8D8D8;">';
/* -------------------------------------------------------------------------------- */
/* Loaad the page from the pageID Variable...
/* -------------------------------------------------------------------------------- */

        switch($path['call_parts'][0]){
            case 'shots':
               
                include A_TEMPLATE.'/shots.php';
                break;

            case 'shot':
               
                include D_TEMPLATE.'/shot.php';
                break;

            case 'brands':
               
                include D_TEMPLATE.'/brands.php';
                break;

            DEFAULT:

               $path['call_parts'][0] = 'dashboard';
                include A_TEMPLATE.'/dashboard.php';

        }

echo '  </div><!--End-->';
