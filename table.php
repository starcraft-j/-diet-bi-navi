<!-- 比較表 -->

    <!-- 総合ランキング -->
    <!--
        １。画像・リンク 
        ２。おすすめ度
        ３。配合成分
        ４。サプリタイプ
        ５。通常価格
        ６。特別オファー
        ７。返金保証
        ８。こんな人におすすめ
        ９。公式サイト（リンク）
    -->
        <?php wp_reset_postdata();
                
            $argsTable = array(
                'posts_per_page' => '-1',
                'category_name' => 'all',
                'post_type' => 'post',
                'meta_key' => 'allrank',
                'orderby' => 'meta_value_num',
                'order' => 'asc',
            );
        

            $the_query = new WP_Query( $argsTable );
            $i = 1;
            if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
                // 2.おすすめ度 osusume
                // 3.配合成分 quantity
                // 4.サプリタイプ - 機能性食品
                // 5.通常価格(定期) regulary
                // 6.特別オファー(初回) price
                // 7.返金保証 - hosyou
                // 8.こんな人に osusu-type
                // 9. url
                $image_id = get_post_thumbnail_id ();
                $image_url = wp_get_attachment_image_src ($image_id, true);
                $url= get_field('url');
                $osusume= get_field('osusume');
                $quantity= get_field('quantity');
                $regularly= get_field('regularly');
                $price= get_field('price');
                $hosyou= get_field('hosyou');
                $osusuType= get_field('osusu-type');
                
        ?>


        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>


        </div>
