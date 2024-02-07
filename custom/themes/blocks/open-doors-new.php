<?php
/**
 * Футер
 *
 * @package    Diafan.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2016 OOO «Диафан» (http://diafan.ru)
 */

if (!defined('DIAFAN')) {
    $path = __FILE__;
    $i = 0;
    while (!file_exists($path . '/includes/404.php')) {
        if ($i == 10) {
            exit;
        }

        $i++;
        $path = dirname($path);
    }
    include $path . '/includes/404.php';
}
?>
<style>
    .modal--opendoors {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
    }
    .open-doors {
        background: white;
        position: relative;
        display: block;
        width: 320px;
        margin: 0 auto;
        padding: 0;
        z-index: 1;
    }
    @media (min-width: 750px) {
        .open-doors {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 600px;
            padding: 30px;
        }
    }
    @media (min-width: 750px) {
        .open-doors::before {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            width: 440px;
            height: 410px;
            background-image: linear-gradient(-235deg, #e72752 0%, #ef6039 68%, #f58520 100%);
            -webkit-clip-path: polygon(0 0, 0 100%, 100% 0);
            clip-path: polygon(0 0, 0 100%, 100% 0);
            opacity: 0.7;
        }
    }
    .open-doors__title {
        margin: 0 0 15px;
        padding: 23px 28px 15px;
        color: #ffffff;
        font-size: 18px;
        line-height: 1.25;
        font-weight: 400;
        font-family: "opensans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-style: normal;
        text-transform: none;
        background-image: linear-gradient(-235deg, rgba(231, 39, 82, 0.7) 0%, rgba(239, 96, 57, 0.7) 68%, rgba(245, 133, 32, 0.7) 100%);
    }
    @media (min-width: 750px) {
        .open-doors__title {
            position: relative;
            width: 340px;
            margin-bottom: 40px;
            padding: 0;
            font-size: 20px;
            background-image: none;
        }
    }
    @media (min-width: 750px) {
        .open-doors__title::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -20px;
            width: 100%;
            height: 1px;
            background-color: #ffffff;
        }
    }
    .open-doors__title b {
        font-size: 20px;
        line-height: 1.25;
        font-weight: 700;
        font-family: "opensans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-style: normal;
        text-transform: uppercase;
    }
    @media (min-width: 750px) {
        .open-doors__title b {
            font-size: 24px;
        }
    }
    .open-doors__time {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        margin: 0 auto 12px;
        padding: 0 30px 13px;
        text-align: center;
        color: #000000;
        font-size: 18px;
        line-height: 1.25;
        font-weight: 400;
        font-family: "opensans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-style: normal;
    }
    @media (min-width: 750px) {
        .open-doors__time {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 150px;
            margin: 0 0 40px auto;
            padding: 0;
            font-size: 20px;
        }
    }
    .open-doors__time b {
        font-size: 20px;
        line-height: 1.25;
        font-weight: 700;
        font-family: "opensans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-style: normal;
        text-transform: uppercase;
    }
    @media (min-width: 750px) {
        .open-doors__time b {
            font-size: 24px;
        }
    }
    .open-doors__time::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 1px;
        background-color: #ed5b89;
    }
    @media (min-width: 750px) {
        .open-doors__time::after {
            width: 243px;
            right: 0;
            left: unset;
            bottom: -20px;
        }
    }
    .open-doors__image {
        display: none;
    }
    @media (min-width: 750px) {
        .open-doors__image {
            display: block;
            width: 270px;
        }
    }
    .open-doors__first-screen {
        display: none;
        padding-bottom: 45px;
    }
    @media (min-width: 750px) {
        .open-doors__first-screen {
            width: 250px;
            margin-left: auto;
        }
    }
    .open-doors__first-screen--opened {
        display: block;
    }
    .open-doors__description {
        margin: 0 0 10px;
        padding: 0;
        text-align: center;
        color: #161616;
        font-size: 18px;
        line-height: 1.25;
        font-weight: 400;
        font-family: "opensans-semibold", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-style: normal;
    }
    @media (min-width: 750px) {
        .open-doors__description {
            font-size: 19px;
        }
    }
    .open-doors__description b {
        color: #d11652;
    }
    .open-doors__present-value {
        margin: 0 0 15px;
        padding: 0;
        text-align: center;
        font-size: 35px;
        line-height: 1.25;
        font-weight: 700;
        font-family: "opensans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-style: normal;
        color: #d11652;
        letter-spacing: 0.04px;
    }
    @media (min-width: 750px) {
        .open-doors__present-value {
            font-size: 40px;
        }
    }
    .open-doors__form {
        position: relative;
        padding: 20px 20px 45px;
        margin: 0 20px;
        border: 5px solid rgba(229, 24, 89, 0.5);
    }
    @media (min-width: 750px) {
        .open-doors__form {
            margin: 0;
            padding: 20px 12px 45px;
        }
    }
    .open-doors__form-input {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        display: block;
        margin: 0 auto 15px;
    }
    .open-doors__form-input input {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        width: 100%;
        padding: 10px 15px;
        color: #818181;
        font-size: 14px;
        line-height: 1.25;
        font-weight: 300;
        font-family: "opensans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-style: normal;
        border: 1px solid #bbbbbb;
        background-color: #ffffff;
    }
    .open-doors__form-police {
        color: #000000;
        font-size: 11px;
        line-height: 1.25;
        font-weight: 300;
        font-family: "opensans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-style: normal;
    }
    .open-doors__form-police a {
        color: #6275c4;
    }
    .open-doors__form-btn {
        position: absolute;
        bottom: -23px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        width: 250px;
        padding: 11px 25px;
        color: #ffffff;
        font-size: 16px;
        line-height: 1.4;
        font-weight: 700;
        font-family: "opensans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-style: normal;
        background-color: #d11652;
        text-transform: uppercase;
        text-decoration: none;
        text-align: center;
        border: none;
        cursor: pointer;
    }
    @media (min-width: 750px) {
        .open-doors__form-btn {
            width: 205px;
            padding: 7px 25px;
        }
    }
    .open-doors__second-screen {
        display: none;
    }
    .open-doors__second-screen--opened {
        display: block;
    }
    .open-doors__greeting {
        display: block;
        padding-bottom: 12px;
        text-align: center;
        color: #d11652;
        font-size: 20px;
        line-height: 1.25;
        font-weight: 700;
        font-family: "opensans-semibold", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-style: normal;
        text-transform: uppercase;
    }
    @media (min-width: 750px) {
        .open-doors__greeting {
            text-align: right;
        }
    }
    .open-doors__info {
        position: relative;
        padding: 15px 15px 25px;
        color: #161616;
        background: #FFFFFF;
        font-size: 14px;
        line-height: 1.45;
        font-weight: 400;
        font-family: "opensans-semibold", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-style: normal;
        border: 5px solid rgba(229, 24, 89, 0.5);
    }
    .open-doors__info-text {
        margin: 0 0 10px;
        padding: 0;
    }
    .open-doors__info-text--place {
        padding: 12px;
        color: #ffffff;
        background-color: #d11652;
    }
    .open-doors__info-text i {
        font-style: normal;
        text-decoration: underline;
    }
</style>
<div style="display:none">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <symbol id="icon-cross" viewbox="0 0 51.8 51.8">
        <g>
            <path d="M23.2,25.5L0.5,48.1c-0.6,0.6-0.6,1.7,0,2.3c0.3,0.3,0.7,0.5,1.1,0.5 c0.4,0,0.8-0.2,1.1-0.5l22.8-22.8l22.8,22.8c0.3,0.3,0.7,0.5,1.1,0.5c0.4,0,0.8-0.2,1.1-0.5c0.6-0.6,0.6-1.6,0-2.3L28.1,25.5 L50.7,2.8c0.6-0.6,0.6-1.6,0-2.3c-0.6-0.6-1.6-0.6-2.3,0L25.6,23.4L2.8,0.5c-0.6-0.6-1.6-0.6-2.3,0s-0.6,1.6,0,2.3L23.2,25.5z M23.2,25.5"></path>
        </g>
        </symbol>
    </svg>
</div>