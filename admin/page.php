  <?php 

                /*
                *Basic templates
                */
    include A_VIEW.'/sidebar.php'; 

    include A_VIEW.'/header.php';     

  
echo '  <div class = "pagewrapper"style="top: 3.7em;background: #D8D8D8;">';
/* -------------------------------------------------------------------------------- */
/* Loaad the page from the pageID Variable...
/* -------------------------------------------------------------------------------- */
        
         $template = $page->template;
        switch($template){
            case 'shots':
               
                include A_VIEW.'/shots.php';
                break;

            case 'brands':
               
                include A_VIEW.'/brands.php';
                break;

            DEFAULT:

               $path['call_parts'][0] = 'dashboard';
                include A_VIEW.'/dashboard.php';

        }

echo '  </div><!--End-->';
