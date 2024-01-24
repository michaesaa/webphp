    <div id="item-carousel-big" class="owl-carousel wow fadeIn">


        <?php 




    foreach ($categoriass as $key => $value) {
        if (isset($value["cat_nombre"], $value["cat_foto"], $value["cat_decript"])) {
        

            echo '

            <div class="nft_pic">
                <a href="03_grey-item-details.html">
                    <span class="nft_pic_info">
                        <span class="nft_pic_title">'.$value["cat_nombre"].'</span>
                        <span class="nft_pic_by">Fred Ryan</span>
                    </span>
                </a>
                <div class="nft_pic_wrap">
                <img src="'.(isset($value["cat_foto"]) ? $value["cat_foto"] : '').'" class="lazy img-fluid" alt="'.(isset($value["cat_decript"]) ? $value["cat_decript"] : '').'" >

                </div>
            </div>
        
        
        
        ';



        } else {
            echo "Alguna clave no está definida en el elemento $key";
        }
   



    }



?>


    </div>