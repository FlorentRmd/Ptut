<?php include_once 'head.php' ?>
<?php include_once 'header.php' ?>
<script src="Css/test.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<body>
    <div class="container" style="height: 100%"><br>
        <div class="dropdown">
            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                Choisissez vôtre équipe
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" id="n2m">NATIONALE 2 MASCULINE</a>
                <a class="dropdown-item" id="pnm">PRÉ NATIONALE MASCULINE</a>
                <a class="dropdown-item" id="rm">RÉGIONALE MASCULINE</a>
                <a class="dropdown-item" href="#">RÉGIONALE FÉMININE</a>
                <a class="dropdown-item" href="#">DÉPARTEMENTALE FÉMININE</a>
                <a class="dropdown-item" href="#">M17 GARÇONS</a>
                <a class="dropdown-item" href="#">M15 GARÇONS</a>
                <a class="dropdown-item" href="#">M17 FILLES</a>
                <a class="dropdown-item" href="#">M15 FILLES</a>
                <a class="dropdown-item" href="#">M13 FILLES ET GARÇONS</a>
                <a class="dropdown-item" href="#">ÉCOLE DE VOLLEY</a>
                <a class="dropdown-item" href="#">FSGT 1</a>
                <a class="dropdown-item" href="#">FSGT 2</a>
                <a class="dropdown-item" href="#">LOISIRS</a>

            </div>
        </div>
        <div class="button-content">
            <div id="n2m" class="container tab-pane active"><br>
                <h3>ORGANIGRAMME</h3>

            </div>
            <div id="pnm" class="container tab-pane fade"><br>
                <h3>HORAIRES ENTRAÎNEMENTS</h3>

            </div>
            <div id="rm" class="container tab-pane fade"><br>
                <h3>NOTRE GYMNASE</h3>
            </div>
        </div>
        <!--<div id="demo" class="carousel slide" data-ride="carousel">-->
        <!---->
        <!-- Indicators -->
        <!--    <ul class="carousel-indicators">-->
        <!--        <li data-target="#demo" data-slide-to="0" class="active"></li>-->
        <!--        <li data-target="#demo" data-slide-to="1"></li>-->
        <!--        <li data-target="#demo" data-slide-to="2"></li>-->
        <!--    </ul>-->
        <!---->
        <!-- The slideshow -->
        <!--    <div class="carousel-inner">-->
        <!--        <div class="carousel-item active">-->
        <!--            <div class="btn-group">-->
        <!--                <button type="button"  id="1" class="btn btn-primary ">Apple</button>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="carousel-item">-->
        <!--            <div class="btn-group">-->
        <!--                <button type="button"  id="2" class="btn btn-primary">Samsung</button>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="carousel-item">-->
        <!--            <div class="btn-group">-->
        <!--                <button type="button" class="btn btn-primary">Sony</button>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!---->
        <!-- Left and right controls -->
        <!--    <a class="carousel-control-prev" href="#demo" data-slide="prev">-->
        <!--        <span class="carousel-control-prev-icon"></span>-->
        <!--    </a>-->
        <!--    <a class="carousel-control-next" href="#demo" data-slide="next">-->
        <!--        <span class="carousel-control-next-icon"></span>-->
        <!--    </a>-->
        <!---->
        <!--</div>-->
        <!--</div>-->
</body>

        <script>
            $(document).ready(function(){
                $(".dropdown-item a").click(function(){
                    $(this).tab('show');
                });
            });
        </script>

<?php include_once 'footer.php' ?>