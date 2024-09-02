<!DOCTYPE html>
<html lang="nl">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="app.js"></script>
</head>

<body>

    <div class="startscherm">
        <a href="#startboot">
            <div class="midden voorstart">
                <div class="start center ">
                    <h1>Start Verhaal</h1>
                </div>
            </div>
        </a>
    </div>
    <img class="maxw" src="img/land/tissen-tz.png" alt="">
    <section id="startboot" class="boot">
        <div class="background">
            <div class="tekstruimte center">
                <h2 class="font" >Hey! wij zijn de mascottes van</h2>
                <h2 class="font" >Stichting Liox</h2>
            </div>
            <section class="hidden">

                <img id="foxImage" src="img/boot.png" alt="??">

            </section>
        </div>
    </section>
</body>

</html>


<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(function () {
        $(".menu, a").on('click', function () {
            $("html, body").animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 1500);
        });
    });
</script>