  <?php 

                /*
                *Basic templates
                */
    include A_TEMPLATE.'/sidebar.php'; 

    include A_TEMPLATE.'/header.php';     

  
echo '  <div class = "pagewrapper"style="top: 3.7em;background: #D8D8D8;">';
/* -------------------------------------------------------------------------------- */
/* Loaad the page from the pageID Variable...
/* -------------------------------------------------------------------------------- */
        
         $template = $page->template;
        switch($template){
            case 'shots':
               
                include A_TEMPLATE.'/shots.php';
                break;

            case 'brands':
               
                include A_TEMPLATE.'/brands.php';
                break;

            DEFAULT:

               $path['call_parts'][0] = 'dashboard';
                include A_TEMPLATE.'/dashboard.php';

        }

echo '  </div><!--End-->';
