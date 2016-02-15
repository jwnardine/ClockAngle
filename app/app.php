<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Clock.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_angle", function() use($app) {
        $my_Clock = new Clock;
        $check_angle = $my_Clock->checkAngle($_GET['hour'], $_GET['minute']);
        return $app['twig']->render('clock_results.html.twig', array('result' => $check_angle));
    });

    return $app;
?>
