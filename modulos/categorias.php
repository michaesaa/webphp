    <div id="item-carousel-big" class="owl-carousel wow fadeIn">


        <?php 


foreach ($categorias as $key => $value) {

    echo '

        <div class="nft_pic">
            <a href="03_grey-item-details.html">
                <span class="nft_pic_info">
                    <span class="nft_pic_title">'.$value["cat_nombre"].'</span>
                    <span class="nft_pic_by">Fred Ryan</span>
                </span>
            </a>
            <div class="nft_pic_wrap">
                <img  src="'.$value["cat_foto"].'" class="lazy img-fluid" alt="'.$value["cat_decript"].'" >
            </div>
        </div>
    
    
    
    ';
    




}



?>













    </div>