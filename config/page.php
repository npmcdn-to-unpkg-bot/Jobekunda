  <?php 

                //Basic templates
    include D_TEMPLATE.'/sidebar.php'; 

    include D_TEMPLATE.'/header.php'; 




        switch($pageid){
            case 1:
             #code...
                include D_TEMPLATE.'/home.php';
                break;
            case 2:
                #code...
                include D_TEMPLATE.'/product.php';
                break;
            case 3:
                #code...
                include D_TEMPLATE.'/s_Product.php';
                break;
            case 4:
                #code...
                include D_TEMPLATE.'/profile.php';
                break;
            DEFAULT:
                #code...
                $pageid = 1;
                include D_TEMPLATE.'/home.php';

        }

          include D_TEMPLATE.'/footer.php';
      include D_TEMPLATE.'/single-product.php';

