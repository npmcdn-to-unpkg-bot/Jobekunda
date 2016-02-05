  <?php 

                //Basic templates
    include D_TEMPLATE.'/sidebar.php'; 

    include D_TEMPLATE.'/header.php'; 




        switch($pageid){
            case 1:
             #code...
                include D_TEMPLATE.'/home.php';
                break;

                Default:
                #code...
                $pageid = 1;
                include D_TEMPLATE.'/home.php';

        }

          include D_TEMPLATE.'/footer.php';
      include D_TEMPLATE.'/single-product.php';

