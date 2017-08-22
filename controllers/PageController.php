<?php

require_once __DIR__ . '/../utils/helper_functions.php';


function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

    // get the part of the request after the domain name
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // // switch that will run functions and setup variables dependent on what route was accessed

    switch ($request) {
    // TODO: put routes here

        case '/':
            if (!empty($_GET['search'])) {
                header("Location: /results?search=". $_GET['search']);
            }
            $mainView = '../public/views/home.php';
            break;

        case '/users/edit':
            $mainView = '../views/users/edit.php';
            break;

        case '/users/account':
            if (!empty($_GET['search'])) {
                header("Location: /results?search=". $_GET['search']);
            }
            if (isset($_SESSION['IS_LOGGED_IN'])) {
                $mainView = '../public/account.php';

            } else {
                $mainView = '../public/views/home.php';
            }
            if (!empty($_POST['deleteListing'])) {
                Ads::deleteAd($_POST['deleteListing']);
                header("Location: /users/account.php");
            }
            break;

            case '/results':
                $mainView = '../views/ads/index.php';
                break;

            case '/login':
                if (!empty($_GET['search'])) {
                    header("Location: /results?search=". $_GET['search']);
                }
                $mainView = '../public/login.php';
                
                if(!empty($_POST)) {
                    $username = Input::get('username');
                    $password = Input::get('password');
                    Auth::attempt($username, $password);
                }

                if(Auth::check()) {
                    header("Location: /users/account");
                    die();
                }

                $data['message'] = '';
                
                break;

            case '/create':
                if (!empty($_GET['search'])) {
                    header("Location: /results?search=". $_GET['search']);
                }
                $mainView = '../views/ads/create.php';

                if (!empty($_POST['category'])
                    && !empty($_POST['product_name'])
                    && !empty($_POST['price'])
                    && !empty($_POST['description'])
                    && !empty($_POST['sub_category'])
                    && !empty($_POST['username'])
                    && !empty($_POST['availability_status'])
                    && !empty($_POST['pick_up_location'])
                    && !empty($_POST['location_city'])
                    && !empty($_POST['location_state'])
                    && !empty($_POST['contact_info'])) {
                        Ads::insertAd();
                        header("Location: /users/account");
                }
                break;

            case '/edit':
                $mainView = '../views/ads/edit.php';
                break;

            case '/logout':
                Auth::logout();
                header("Location: /");
                break;

            default:    // displays 404 if route not specified above
                $mainView = '../public/views/404.php';
                break;
        }

    $data['mainView'] = $mainView;
    return $data;
}

extract(pageController());
