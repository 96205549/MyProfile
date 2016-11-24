<div class="col-sm-5">               
                    <div class="carousel slide"  id="carousel1">
                        <div class="carousel-inner">
                            <div class="item active">
                                <!--div class="col-sm-2" style="border:solid 1px #ccc; width: 50px; height: 40px;">
                                    <a href="#xt<?// $detailproduits->getIdproduit(); ?>" data-toggle="tab"><img width="100%" height="100%" src="/<?// $detailproduits->getChemin(); ?>" alt=""></a>
                                </div-->
                                <?php
                                $tot = $detailproduits->getRessources()->count();
                                $i = 0;
                                foreach ($detailproduits->getRessources() as $imageproduit):
                                    if ($imageproduit->typeressource == "image" /*&& $imageproduit->cheminressource != $detailproduits->chemin*/):
                                        $i++;
                                        $data[] = $imageproduit->getIdressource() . ',' . $imageproduit->getCheminressource();
                                    endif;
                                endforeach;

                                ?>
                                <?php
                                if ($tot > 0 && $tot < 6) {
                                    for ($i = 0; $i < $tot; $i++) :
                                        $val = explode(",", $data[$i]);

                                        ?>
                                        <div class="col-sm-2"style="border: 1px solid #ccc; width: 50px; height: 40px;">
                                            <a href="#rs<?= $val[0]; ?>" data-toggle="tab"> 
                                                <img alt="image" class="thumbnails image-responsive" width="100%" height="100%" src="/<?= $val[1]; ?>">
                                            </a>
                                        </div>            
                                        <?php
                                    endfor;
                                } elseif ($tot >= 6) {
                                    for ($i = 0; $i < 6; $i++) {
                                        $val = explode(",", $data[$i]);

                                        ?>
                                        <div class="col-sm-2" style="border: 1px solid #ccc; width: 50px; height: 40px;">
                                            <a href="#rs<?= $val[0]; ?>" data-toggle="tab">
                                                <img alt="image" class="thumbnails  " width="200" height="100%" src="/<?= $val[1]; ?>">
                                            </a>
                                        </div> 
                                    <?php }; ?>
                                </div>
                                <?php
                            }if (($tot > 6 && $tot <= 12) || $tot > 6 && $tot >12) {
                                $val = explode(",", $data[$i]);

                                ?>
                                <div class="item">
                                    <?php
                                    for ($i = 6; $i < $tot; $i++) {
                                        $val = explode(",", $data[$i]);
                                        ?>
                                        <div class="col-sm-2" style="border: 1px solid #ccc; width: 50px; height: 40px;">
                                            <a href="#rs<?= $val[0]; ?>" data-toggle="tab">
                                                <img alt="image" class="" width="100%" height="100%" src="/<?= $val[1]; ?>">
                                            </a>
                                        </div>
                                    <?php }; ?>
                                </div>
                                <?php
                            }
                            ;

                            ?>

                        </div>
                        <a data-slide="prev" href="#carousel1" class="left carousel-control" style="left:-40px;">
                            <span class="icon-prev"></span>
                        </a>
                        <a data-slide="next" href="#carousel1" class="right carousel-control" style="right:-40px;">
                            <span class="icon-next "></span>
                        </a>
                    </div>             
                </div>