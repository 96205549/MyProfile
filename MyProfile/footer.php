</div>
<div class="clearfix">&nbsp;</div>
<div class="row container">
    <div class="col-md-12 row footer-bloc">
        <div class="col-md-3 info-foo">
            <p>
            <h4><strong>A propos</strong></h4>
            <i class="fa fa-caret-right"></i> Camera video surveillance<br/><br/>
            <i class="fa fa-caret-right"></i> Maintenance et réseaux informatique<br/><br/>
            </p>
        </div>
        <div class="col-md-3 info-foo">
            <p>
            <h4><strong>Nos services</strong></h4>
            <?php foreach ($services as $service) {

                ?>
                <i class="fa fa-caret-right"></i>&nbsp; <?= $service['1']; ?><br/><br/>
            <?php } ?>
            <!--i class="fa fa-caret-right"></i> Camera video surveillance<br/><br/>
            <i class="fa fa-caret-right"></i> Maintenance et réseaux informatique<br/><br/>
            <i class="fa fa-caret-right"></i> Montage des antennes parabolique<br/><br/>
            <i class="fa fa-caret-right"></i> Programmation informatique (androïd et web)<br/><br/-->
            </p>
        </div>
        <div class="col-md-3 info-foo">
            <p>
            <h4><strong>Domaines de formation</strong></h4>
            <i class="fa fa-caret-right"></i> Camera video surveillance<br/><br/>
            <i class="fa fa-caret-right"></i> Maintenance et réseaux informatique<br/><br/>
            <i class="fa fa-caret-right"></i> Montage des antennes parabolique<br/><br/>
            <i class="fa fa-caret-right"></i> Programmation informatique (androïd et web)<br/><br/>
            </p>
        </div>
        <div class="col-md-3 info-foo">
            <p>
            <h4><u><strong>Nous-contacter</strong></u></h4>
            <i class="fa fa-home"></i> <?= $Ets['nomEts'] ?><br><br>
            <i class="fa fa-phone"></i> <?= $Ets['contact'] ?><br><br>
            <i class="fa fa-envelope"></i> joezerbouraima@gmail.com<br><br>
            <i class="fa fa-bicycle"></i> <?= $Ets['adresse'] ?><br>
            </p>
        </div>
    </div>
</div>
</div>
</div>

</body>
<script src="../public/vendor/jquery/dist/jquery.min.js"></script>
<script src="../public/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<!--script src="../public/js/postmsg.js"></script-->
</html>
