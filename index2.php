<?php
    header('Content-type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sphere Industries</title>
    
    <link rel="icon" href="/assets/img/tpl/favicon.png" type="image/x-icon">

    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
    
</head>
<body>

    <div class="wrapper">
        <nav class="topbar">
            <a href="#" id="menuToggle" class="mobile"><i class="fa fa-bars"></i></a>
            <a href="#" class="mobile search"><i class="fa fa-search"></i></a>
            <ul>
                <li>
                    <a href="/starcitizen">Star Citizen</a>
                </li>
                <li>
                    <a href="/starcitizen">Typhon Ltd</a>
                </li>
                <li>
                    <a href="/starcitizen">Paradigm</a>
                </li>
            </ul>
        </nav>
        <header>
            <div class="logo">
                <a href="#">
                    <img src="/assets/img/tpl/logo.png" width="436" height="187" alt="Sphere Industries">
                </a>
            </div>
        </header>
        <div class="row">
            <div class="col">
                <h1 class="main-title">Sphere Industries</h1>
                <h3>The future here, today.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis placerat ante lectus, quis porttitor libero ultrices sed. Curabitur bibendum hendrerit lorem.</p>
                <p>Vivamus vestibulum justo et egestas consequat. Cras tempor accumsan risus vel varius. Donec scelerisque justo non justo hendrerit, vel viverra magna adipiscing.</p>
                <div class="buttons">
                    <a href="#" class="btn large right">Main website</a>
                    <a href="#" class="btn large left">Portfolio</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col carousel">
                <h2>Examples</h2>
                <div id="carousel">
                <?php               
                    $files = glob('assets/img/content/front/*.jpg');
                    
                    foreach ($files as $file) { ?>
                    
                        <div class="item"><img src="<?= $file; ?>" alt=""></div>
                    
                    <?php }
                ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col wide">
                <h2>Regular content</h2>
                
                <figure class="float-left responsive">
                    <img src="/assets/img/content/content1.jpg">
                    <figcaption>Fig. 1: This can be any kind of caption. --RF</figcaption>
                </figure>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel adipiscing augue. Suspendisse id sagittis sem. Donec suscipit, est non consectetur accumsan, felis quam bibendum odio, ullamcorper interdum arcu tellus at elit. Maecenas mollis nunc non eros tincidunt, bibendum pellentesque ligula vulputate. Etiam eros magna, gravida vitae fermentum id, tristique eu elit. In sit amet dignissim leo. Proin in elit et turpis ultrices rutrum. Nunc neque neque, interdum sit amet bibendum et, condimentum a nibh. Nam eros quam, feugiat non malesuada et, vehicula mattis sapien. Aenean at interdum orci, vitae eleifend velit. In hac habitasse platea dictumst.</p>

                <p>Mauris feugiat ac sapien eget pulvinar. Praesent sodales dui et mauris porta, nec bibendum dui gravida. In suscipit sit amet lectus vitae hendrerit. Curabitur nibh elit, lobortis sit amet eros at, rutrum venenatis mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis augue augue, vel elementum justo gravida eget. Donec tempus neque id ipsum mollis semper. Nulla tincidunt urna a eros venenatis, eleifend viverra libero consectetur. Duis imperdiet turpis consectetur lacinia sollicitudin. Donec lobortis ligula sit amet diam placerat, non sollicitudin justo aliquam. Sed sed imperdiet nisi. Nullam ac diam sed dolor egestas pharetra eget in magna. Sed eu dui sit amet est tincidunt dignissim. Fusce mi dui, facilisis id nunc sit amet, venenatis ornare massa. Curabitur at nibh quis justo elementum fermentum.</p>
                
                <figure class="float-right responsive">
                    <img src="/assets/img/content/content1.jpg">
                    <figcaption>Fig. 2: This can be any kind of caption. --RF</figcaption>
                </figure>

                <p>Praesent est ipsum, ultricies ac orci id, pulvinar accumsan augue. Mauris aliquet, nibh eu rhoncus fringilla, arcu nunc feugiat ante, sed hendrerit tellus ante eu purus. Suspendisse vestibulum odio tristique lorem sollicitudin commodo. Donec convallis cursus vestibulum. Maecenas eget eros eget magna tempor eleifend id sit amet leo. Proin pellentesque enim et nisl viverra hendrerit. Suspendisse potenti. Curabitur ac sagittis quam. In a lectus ullamcorper, dictum leo a, gravida nisl. Vivamus scelerisque ornare purus, a tristique lectus scelerisque ac. Etiam ac quam tincidunt, malesuada nisi non, hendrerit justo. Praesent venenatis velit eget quam ullamcorper pretium. Nam mollis magna vel ullamcorper egestas.</p>

                <p>Donec pharetra erat nec tincidunt ultrices. Phasellus at egestas nisi. Duis interdum eget mi vitae consectetur. Vivamus a sem eu lectus ornare venenatis. Ut eget enim libero. Sed sed justo at justo fringilla feugiat in vitae nisl. Aliquam enim urna, porttitor a lacinia a, volutpat quis tortor. Mauris malesuada mauris eget quam lobortis, a euismod nunc vehicula. Suspendisse quis nibh vitae odio porta auctor. Maecenas et nunc adipiscing, tincidunt est eu, suscipit erat. Proin nisi nisi, ultrices ornare leo nec, condimentum semper libero. Integer ullamcorper ligula diam, a mollis diam commodo vitae. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam felis mauris, sollicitudin et ante sed, ultricies rhoncus mi. Fusce vehicula sit amet ligula at vestibulum.</p>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</body>

<link href="//fonts.googleapis.com/css?family=Roboto:400,900,700,400italic,700italic,900italic" rel="stylesheet" type="text/css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" type="text/css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="/assets/js/jquery/owl.carousel.min.js"></script>

<script type="text/javascript">

    $(document).ready(function() {
        
        var menuOpen = false;
        
        $('#menuToggle').on('click', function() {
        
            $(this).toggleClass('active');
            
            if (menuOpen == false) {
                $('nav ul').css('display', 'block').animate({
                    opacity: 1,
                }, 50, 'linear');
            } else {
                $('nav ul').animate({
                    opacity: 0
                }, 50, 'linear', function() {
                    $(this).css('display', 'none');
                });
            }
            
            menuOpen = !menuOpen;
            
        });
        
        $('body').click(function() {
            if (menuOpen == true) {
                $('#menuToggle').removeClass('active');
                $('nav ul').animate({
                        opacity: 0,
                    }, 50, 'linear', function() {
                        $(this).css('display', 'none');
                    });
                menuOpen = !menuOpen;
            }
        });

        $('#menuToggle, nav ul').click(function(e) {
            e.stopPropagation();
        });
        
        $(window).resize(function() {
            if ($(this).width() > 1900) {
                $('html').css('background-size', 'cover');
            } else {
                $('html').css('background-size', 'auto');
            }
        });       

        $("#carousel").owlCarousel({
            lazyLoad : true,
            items: 5,
            autoPlay: 4000
        });
        
    });
</script>

</html>
