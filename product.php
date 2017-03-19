<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Plugins CSS -->
<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="assets/plugins/prism/prism.css">
<script type="text/javascript" src="assets/plugins/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<style>

    ul > li{margin-right:25px;font-weight:lighter;cursor:pointer}
    li.active{border-bottom:3px solid silver;}

    .item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
    .menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0px;margin-top:20px}
    .btn-success{width:100%;border-radius:0px;}
    .section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
    .title-price{margin-top:30px;margin-bottom:0px;color:black}
    .title-attr{margin-top:0px;margin-bottom:0px;color:black;}
    .btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0px;}
    .btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0px;}
    div.section > div {width:100%;display:inline-flex;}
    div.section > div > input {margin:0px;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
    .attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
    .attr.active,.attr2.active{ border:1px solid orange;}

    @media (max-width: 426px) {
        .container {margin-top:0px !important;}
        .container > .row{padding:0px !important;}
        .container > .row > .col-xs-12.col-sm-5{
            padding-right:0px ;
        }
        .container > .row > .col-xs-12.col-sm-9 > div > p{
            padding-left:0px !important;
            padding-right:0px !important;
        }
        .container > .row > .col-xs-12.col-sm-9 > div > ul{
            padding-left:10px !important;

        }
        .section{width:104%;}
        .menu-items{padding-left:0px;}
    }

</style>

<script>
    $(document).ready(function(){
        //-- Click on detail
        $("ul.menu-items > li").on("click",function(){
            $("ul.menu-items > li").removeClass("active");
            $(this).addClass("active");
        })

        $(".attr,.attr2").on("click",function(){
            var clase = $(this).attr("class");

            $("." + clase).removeClass("active");
            $(this).addClass("active");
        })

        //-- Click on QUANTITY
        $(".btn-minus").on("click",function(){
            var now = $(".section > div > input").val();
            if ($.isNumeric(now)){
                if (parseInt(now) -1 > 0){ now--;}
                $(".section > div > input").val(now);
            }else{
                $(".section > div > input").val("1");
            }
        })
        $(".btn-plus").on("click",function(){
            var now = $(".section > div > input").val();
            if ($.isNumeric(now)){
                $(".section > div > input").val(parseInt(now)+1);
            }else{
                $(".section > div > input").val("1");
            }
        })
    })

</script>
<div class="container">
    <div class="row">
        <div class="col-xs-4 item-photo">
            <img style="max-width:100%;" src="https://ak1.ostkcdn.com/images/products/8818677/Samsung-Galaxy-S4-I337-16GB-AT-T-Unlocked-GSM-Android-Cell-Phone-85e3430e-6981-4252-a984-245862302c78_600.jpg" />
        </div>
        <div class="col-xs-5" style="border:0px solid gray">
            <!-- Datos del vendedor y titulo del producto -->
            <h3>Paddy 500kgs</h3>
            <h5 style="color:#337ab7">vendido por <a href="#">Samsung</a> · <small style="color:#337ab7">(5054 ventas)</small></h5>

            <!-- Precios -->
            <h6 class="title-price"><small>PRECIO OFERTA</small></h6>
            <h3 style="margin-top:0px;">U$S 399</h3>

            <!-- Detalles especificos del producto -->
            <div class="section">
                <h6 class="title-attr" style="margin-top:15px;" ><small>COLOR</small></h6>
                <div>
                    <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                    <div class="attr" style="width:25px;background:white;"></div>
                </div>
            </div>
            <div class="section" style="padding-bottom:5px;">
                <h6 class="title-attr"><small>CAPACIDAD</small></h6>
                <div>
                    <div class="attr2">16 GB</div>
                    <div class="attr2">32 GB</div>
                </div>
            </div>
            <div class="section" style="padding-bottom:20px;">
                <h6 class="title-attr"><small>CANTIDAD</small></h6>
                <div>
                    <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                    <input value="1" />
                    <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
                </div>
            </div>

            <!-- Botones de compra -->
            <div class="section" style="padding-bottom:20px;">
                <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Agregar al carro</button>
                <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Agregar a lista de deseos</a></h6>
            </div>
        </div>

        <div class="col-xs-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
                <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>HOME</h3>
                    <p>Some content.</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Some content in menu 1.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 2.</p>
                </div>
            </div>
        </div>
    </div>
</div>