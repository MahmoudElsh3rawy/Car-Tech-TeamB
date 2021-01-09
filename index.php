<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Tech</title>
    <!-- my css files -->    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="icon" href="imgs/icon.png" type="image/icon type">
    
    
</head>
<body>
    <?php include('header.php'); ?>
    <?php include('Config.php'); ?>


    <!-- Home -->
    <div class="image-header row ">
        <div class="container">
            <div class="left-side col-6 wow zoomInDown">
                <h1>Car Tech</h1>
                <hr>
                <p>
                We offer full range of cars services to vehicle owners in Egypt . Our professionals know how to handle a wide range of car services. Whether you drive a passenger car or medium sized truck or SUV, mechanics strive to ensure that your vehicle will be performing at its best before leaving car shop. Whether you drive a medium sized truck or passenger car or SUV, our mechanics strive to ensure.
                </p>
            </div>
            <div class="right-side col-6">
                <img src="imgs/home-img.png" alt="home-img">
            </div>
        </div>
    </div>
    <div class="our-sers row">
        <div class="container">
            <div class="upper">
                <h2>Our Services</h2>
                <p>Car care is our specialty</p>
            </div>
            <div class="elems">
                <div class="Maintainance col-3">
                    <div>
                        <div class="i">
                            <svg style="width: 100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve">
                                <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
                                <g><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"><path d="M7812.2,5000.4c-525.3-117.4-954.4-465.7-1168-948.6c-115.5-261.7-161.6-681.2-103.9-954.4l25-113.5l-952.5-954.4L4658.5,1075l302.1-263.6l300.2-265.5h540.7h538.8l635,588.8c350.2,323.3,661.9,613.8,692.7,642.7l57.7,53.9l125.1-26.9c261.7-55.8,604.2-23.1,883.2,80.8c400.2,150.1,754.3,494.5,921.7,898.6c57.7,136.6,75,205.9,52,205.9c-5.8,0-215.5-57.7-465.7-127c-527.2-146.2-606.1-157.8-771.6-115.5c-361.7,92.4-567.6,340.6-627.3,754.3c-38.5,271.3,138.6,608.1,394.5,746.6c53.9,30.8,304,111.6,558,182.8c254,69.3,463.8,136.6,465.7,146.2c0,11.5-50,61.6-113.5,111.6c-128.9,105.8-406,246.3-575.4,292.5C8408.7,5025.4,7975.8,5036.9,7812.2,5000.4z"></path><path d="M330.9,4752.2L100,4519.3L590.7,3919l488.7-602.3h177h177l1664.4-1664.4L4760.4-10.3l21.2-479.1l19.2-479.1l1903-1893.4c1046.8-1041,1916.5-1899.2,1933.8-1906.9c61.5-25,236.7-13.5,344.4,23.1c298.2,105.8,696.6,484.9,854.4,817.8c53.9,113.5,63.5,155.8,63.5,273.2v140.5L8553-2165.4c-740.8,740.8-1604.8,1599-1920.4,1906.9l-573.4,559.9l-484.9,26.9l-484.9,25L3430.8,2012.1L1770.2,3672.7l-1.9,173.2V4019l-604.2,483l-602.3,483L330.9,4752.2z M8299.1-2373.2l1206.5-1208.4l-86.6-86.6c-46.2-46.2-92.4-77-100.1-69.3c-9.6,7.7-798.6,794.7-1752.9,1747.2L5826.4-258.5l82.8,84.7l80.8,82.7l550.3-536.8C6842.4-922.3,7633.3-1707.4,8299.1-2373.2z M7385.1-2734.9c806.2-804.3,1466.2-1472,1466.2-1483.6c0-23.1-113.5-136.6-146.2-146.3c-11.6-3.9-808.2,777.4-1768.4,1733.7L5191.5-893.5l82.8,84.7l82.7,84.7l280.9-273.2C5791.8-1149.4,6576.9-1930.6,7385.1-2734.9z"></path><path d="M2178.1-1388C509.9-3048.6,302-3260.2,250.1-3366.1c-157.8-325.2-102-656.2,159.7-919.8c140.5-140.5,236.7-198.2,398.3-240.5c165.5-42.3,346.4-26.9,504.1,42.3c113.5,50,225.1,157.8,1714.5,1641.4L4618-1253.3v608v608.1l-244.4,217.4c-136.6,121.2-263.6,234.8-286.7,254C4046.5,470.8,4042.7,466.9,2178.1-1388z M1167.9-3560.4c53.9-57.7,63.5-82.7,63.5-161.6c0-148.2-92.4-234.8-250.1-234.8c-107.8,0-209.7,92.4-225.1,204C725.4-3516.2,1006.3-3385.3,1167.9-3560.4z"></path></g></g>
                            </svg>
                        </div>
                        <div class="info">
                            <h3>Car Maintainance</h3>
                            <p>Car Maintainance include general car care, wheel alignment, wheel balancing, battery trade and tire trade, express mechanical and electrical services.</p>
                        </div>
                    </div>
                </div>
                <div class="wash col-3">
                    <div>
                        <div class="i">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
                                <g><path d="M417.5,154.4c20,0.3,36.4-19.7,36.7-44.7c0.3-25-15.7-45.5-35.7-45.8c-20-0.3-36.4,19.7-36.7,44.7C381.5,133.6,397.5,154.1,417.5,154.4z M418.4,71.1c16.8,0.3,30.3,17.5,30.1,38.6c-0.2,21-14,37.8-30.9,37.6c-16.8-0.3-30.3-17.5-30.1-38.6C387.7,87.7,401.5,70.9,418.4,71.1z M237.6,161.5l-19.2-24.6C218.2,150.3,226.8,161.3,237.6,161.5z M339.7,225l-37.5-31.3C302.1,210.7,318.9,224.7,339.7,225z M330.5,243.5c26.8,0.4,48.8-26.3,49.1-59.8c0.4-33.5-21.1-61-47.9-61.4c-26.8-0.4-48.8,26.3-49.2,59.8C282.3,215.6,303.7,243.1,330.5,243.5z M331.7,132c22.5,0.4,40.6,23.5,40.3,51.6c-0.3,28.1-18.8,50.7-41.3,50.3c-22.5-0.4-40.6-23.5-40.3-51.6C290.6,154.1,309.1,131.6,331.7,132z M660.4,151.9c13.9,0.2,25.4-13.7,25.6-31.1c0.2-17.4-11-31.7-24.9-31.9c-13.9-0.2-25.4,13.7-25.6,31.1C635.4,137.4,646.5,151.7,660.4,151.9z M661.1,93.9c11.7,0.2,21.1,12.2,20.9,26.9c-0.2,14.6-9.8,26.3-21.5,26.2c-11.7-0.2-21.1-12.2-20.9-26.8C639.7,105.4,649.3,93.7,661.1,93.9z M637.3,233.6l-19.1-16C618.1,226.3,626.7,233.4,637.3,233.6z M421,137.3L396.7,117C396.6,128,407.4,137.1,421,137.3z M632.6,246.9c15.7,0.3,28.7-15.5,28.9-35.1c0.2-19.7-12.4-35.8-28.1-36.1c-15.7-0.3-28.7,15.5-28.9,35.1C604.2,230.5,616.8,246.7,632.6,246.9z M633.3,181.4c13.2,0.2,23.8,13.8,23.6,30.3c-0.2,16.5-11,29.8-24.3,29.5c-13.2-0.2-23.8-13.8-23.7-30.3C609.1,194.4,620,181.2,633.3,181.4z M832.2,304.9c11.6,0,21-11.8,21-26.2c0-14.5-9.4-26.2-21-26.2s-21,11.8-21,26.2C811.1,293.1,820.6,304.9,832.2,304.9z M832.2,258.5c8.9,0,16.2,9,16.2,20.2c0,11.2-7.2,20.2-16.2,20.2s-16.2-9-16.2-20.2C816,267.5,823.2,258.5,832.2,258.5z M776.4,206c16.5,0,29.9-16.7,29.9-37.4c0-20.6-13.4-37.4-29.9-37.4c-16.5,0-29.9,16.7-29.9,37.4C746.5,189.2,759.9,206,776.4,206z M776.4,137.3c13.8,0,25,14,25,31.3c0,17.3-11.2,31.3-25,31.3c-13.8,0-25.1-14-25.1-31.3C751.3,151.3,762.6,137.3,776.4,137.3z M663.2,139.4l-16.5-13.8C646.7,133.1,654.1,139.3,663.2,139.4z M432.4,215.3c-0.2,15.6,9.8,28.5,22.3,28.7c12.5,0.2,22.8-12.3,22.9-27.9c0.2-15.6-9.8-28.5-22.3-28.7C442.8,187.2,432.5,199.7,432.4,215.3z M455.3,191.9c10.5,0.2,18.9,11,18.8,24.1c-0.1,13.1-8.8,23.6-19.3,23.5c-10.5-0.2-18.9-11-18.8-24.1C436.1,202.2,444.7,191.7,455.3,191.9z M458.4,231.8l-15.8-13.2C442.5,225.7,449.6,231.6,458.4,231.8z M546.2,208.9l-39.5-33.1C506.4,193.8,524.1,208.6,546.2,208.9z M538.3,234c31.4,0.5,57.3-30.9,57.7-70.2c0.4-39.3-24.7-71.5-56.2-72c-31.4-0.5-57.3,30.9-57.7,70.2C481.7,201.2,506.8,233.5,538.3,234z M539.6,103.1c26.4,0.4,47.6,27.6,47.2,60.6c-0.3,33-22.1,59.4-48.5,59c-26.4-0.4-47.6-27.6-47.2-60.6C491.5,129.1,513.2,102.7,539.6,103.1z M718.7,414.6c-5.1,4.1-6.6,12.7-3.3,19c3.3,6.4,10.1,8.2,15.3,4.1c5.1-4.1,6.6-12.7,3.3-19.1C730.7,412.3,723.8,410.4,718.7,414.6z M849.7,548.6c-4.7,3.8-6.1,11.7-3,17.6c3.1,5.9,9.4,7.6,14.1,3.8c4.7-3.8,6.1-11.7,3-17.6C860.7,546.4,854.4,544.8,849.7,548.6z M867.2,478.9c-2,1.6-2.5,4.9-1.3,7.3c1.3,2.5,3.9,3.2,5.9,1.6c2-1.6,2.5-4.9,1.3-7.3C871.8,478,869.1,477.3,867.2,478.9z M854.1,408.7c3.9-3.2,5.1-9.7,2.5-14.6c-2.5-4.9-7.8-6.3-11.7-3.1c-3.9,3.2-5.1,9.7-2.5,14.7C844.9,410.5,850.1,411.9,854.1,408.7z M784.1,419.8c-2,1.6-2.5,4.9-1.3,7.3c1.3,2.5,3.9,3.2,5.9,1.6c2-1.6,2.5-4.9,1.3-7.3C788.7,418.9,786,418.2,784.1,419.8z M799.3,463c-4.7,3.8-6.1,11.7-3,17.6c3.1,5.9,9.4,7.6,14.1,3.8c4.7-3.8,6.1-11.7,3-17.6C810.4,460.9,804.1,459.2,799.3,463z M782.2,355.7c-3.1-5.9-9.4-7.6-14.1-3.8c-4.7,3.8-6.1,11.7-3,17.6c3,5.9,9.3,7.6,14.1,3.8C783.9,369.5,785.3,361.6,782.2,355.7z M917.8,379.1c0,0-44.9-2.9-89.1-32.8c-42.3-28.6-76-82.8-76-82.8c-59.3-72.1-137,10.4-165.1,75.3c-28.1,64.9-26.1,164.2,48.3,183.1c0,0,58-2.1,100,17.6c55.9,26.3,83.8,81.6,83.8,81.6c52.9,108,113.8,8.9,144.9-53.9C997.6,500.5,1013,396.5,917.8,379.1z M636.8,273.8c2.4-1.9,5.5-1.1,7,1.9c1.5,2.9,0.9,6.9-1.5,8.8c-2.4,1.9-5.5,1.1-7-1.9C633.7,279.6,634.4,275.7,636.8,273.8z M613,315.7c3.5-2.9,8.3-1.6,10.6,2.8c2.3,4.4,1.3,10.3-2.3,13.2c-3.5,2.9-8.3,1.6-10.6-2.8C608.4,324.5,609.5,318.6,613,315.7z M585.4,362c-1.3-2.5-0.7-5.7,1.3-7.3c2-1.6,4.6-0.9,5.9,1.6c1.3,2.5,0.7,5.7-1.3,7.3C589.3,365.1,586.7,364.4,585.4,362z M589.7,436.7c-3.3-6.4-1.8-14.9,3.3-19.1c5.1-4.1,11.9-2.3,15.2,4.1c3.3,6.4,1.8,14.9-3.3,19.1C599.9,444.9,593.1,443.1,589.7,436.7z M612.2,487.9c-3.1,2.5-7.1,1.8-8.9-1.6c-1.8-3.4-0.7-8.3,2.5-10.8c3.1-2.5,7.1-1.8,8.9,1.6C616.5,480.6,615.4,485.4,612.2,487.9z M656.7,507.5c-3.1,2.5-7.3,1.4-9.4-2.5c-2-3.9-1.1-9.2,2-11.7c3.1-2.5,7.4-1.4,9.4,2.5C660.8,499.8,659.9,505,656.7,507.5z M740.2,510.8c-2,1.6-4.6,0.9-5.9-1.6c-1.3-2.5-0.7-5.7,1.3-7.3c2-1.6,4.6-0.9,5.9,1.6C742.7,505.9,742.2,509.2,740.2,510.8z M789.6,551.6c-2.8,2.2-6.4,1.2-8.2-2.2c-1.8-3.4-1-8,1.8-10.3c2.8-2.2,6.4-1.2,8.2,2.2C793.2,544.8,792.4,549.4,789.6,551.6z M824.7,611.6c-2,1.6-4.6,0.9-5.9-1.6c-1.3-2.5-0.7-5.7,1.3-7.3c2-1.6,4.6-0.9,5.9,1.6C827.3,606.8,826.7,610,824.7,611.6z M875.5,659c-3.5,2.9-8.3,1.6-10.6-2.8c-2.3-4.4-1.3-10.3,2.3-13.2c3.5-2.9,8.3-1.6,10.6,2.8C880,650.2,879,656.1,875.5,659z M929.2,610.5c-2,1.6-4.6,0.9-5.9-1.6c-1.3-2.5-0.7-5.7,1.3-7.3c2-1.6,4.6-0.9,5.9,1.6C931.7,605.7,931.2,608.9,929.2,610.5z M838.2,581.6c0,0-34.7-47.6-74-74.1c-33.3-22.5-72.2-24.7-72.2-24.7c-81-32.5-87.1-105.4-62.8-157.3c23.8-50.8,67.9-117.6,116.9-59.1c0,0,51,78.5,93.1,93.9c53,25.5,86.3,26.2,86.3,26.2c78.5,21.6,67.9,94.6,39.2,148.1C935.6,588.8,892.2,672.4,838.2,581.6z M950.2,485.1c-1.6,1.3-2,3.9-1,5.9c1,2,3.1,2.5,4.7,1.3c1.6-1.3,2-3.9,1-5.9C953.8,484.4,951.7,483.8,950.2,485.1z M891.1,585.7c-0.8,0.6-1,1.9-0.5,2.9c0.5,1,1.6,1.3,2.3,0.6c0.8-0.6,1-1.9,0.5-2.9C893,585.4,891.9,585.1,891.1,585.7z M893.9,505.3c-4.7,3.8-6.1,11.7-3,17.6c3.1,5.9,9.4,7.6,14.1,3.8c4.7-3.8,6.1-11.7,3-17.6C905,503.1,898.6,501.4,893.9,505.3z M930.1,430.6c-3.9,3.2-5.1,9.7-2.5,14.7c2.5,4.9,7.8,6.3,11.7,3.2c3.9-3.2,5.1-9.7,2.5-14.7C939.3,428.9,934,427.5,930.1,430.6z M722.2,351.1c2-1.6,2.5-4.9,1.3-7.3c-1.3-2.5-3.9-3.2-5.9-1.6c-2,1.6-2.5,4.9-1.3,7.3C717.7,352,720.3,352.7,722.2,351.1z M174.4,541.1c16.7-33,40.6-131.8,46.9-158.7c-6.5,4.5-13.9,7.1-21.7,7.3l-2.5,78.8c0,16.7-10.9,30.3-24.2,30.3l-92.1-6.1c-13.4,0-24.2-13.6-24.2-30.3l-1.6-88.8c0-16.7,10.9-30.3,24.2-30.3l73.1-4.6c-0.3-2.5-0.4-5-0.4-7.5c0-11.4,2.6-22,7.1-30.9c-8.9-0.9-19.2-1.4-31.3-1.4c-46.9,4-71.1,16.2-71.1,16.2s-33.9,12.1-33.9,72.7c0,76.8,16.2,248.4,16.2,248.4s-2.1,81,37.2,92.9c46.9,14.1,59.8,16.2,59.8,16.2l6.5-22.2l-1.6-103C140.4,619.9,146.9,553.2,174.4,541.1z M199.8,361.2l-25.1-21C174.6,351.6,185.8,361,199.8,361.2z M198.4,378.8c21.1,0.3,38.4-20.7,38.7-47.1c0.3-26.3-16.6-48-37.7-48.3c-21.1-0.3-38.4,20.7-38.7,47.1C160.4,356.8,177.3,378.4,198.4,378.8z M199.3,291c17.7,0.3,31.9,18.5,31.7,40.6c-0.2,22.1-14.8,39.9-32.5,39.6c-17.7-0.3-31.9-18.5-31.7-40.6C167,308.4,181.6,290.7,199.3,291z M718.7,268.2c-6.3,5.1-8.1,15.6-4,23.4c4.1,7.9,12.5,10.1,18.8,5c6.3-5.1,8.1-15.6,4-23.4C733.4,265.3,725,263.1,718.7,268.2z M242.7,260.9l-16.5-13.8C226.2,254.6,233.5,260.8,242.7,260.9z M238.9,216.2c-12.5-0.2-22.8,12.3-22.9,27.9c-0.2,15.6,9.8,28.5,22.3,28.7c12.5,0.2,22.8-12.3,22.9-27.9C261.4,229.2,251.4,216.4,238.9,216.2z M238.4,268.2c-10.5-0.2-18.9-11-18.8-24.1c0.1-13.1,8.8-23.6,19.3-23.5c10.5,0.2,18.9,11,18.8,24.1C257.5,257.9,248.9,268.4,238.4,268.2z M684.8,272.9c-1.6,1.3-2,3.9-1,5.9c1,2,3.1,2.5,4.7,1.3c1.6-1.3,2-3.9,1-5.9C688.4,272.2,686.3,271.6,684.8,272.9z M710.7,542.3H227.4c0,0-12.3,1.4-8.5-15c3.1-13.9,47.4-150.9,56.7-188.6c3.8-13,25.1-42.7,54-40.5h261.1c10-13.8,20.1-26.5,29.4-37.3H320.4c-17.9,0-58.8,21.8-72.7,63.1l-2.2,7.1c0,15-4.6,28.7-12,39.1l-52.8,172c0,0-16.2,16.4-22.2,30.7c-5.9,14.4-12.4,27.1-12.4,123.9c0,94.4,15.5,127.9,34.2,139.5l14.7,10.1v87.6c0,28.4,5.5,36.9,27.7,36.9h49.8c22.2,0,27.7-8.4,27.7-36.9v-87.6h369.2v87.6c0,28.4,5.5,36.9,27.7,36.9h49.8c22.2,0,27.7-8.4,27.7-36.9v-87.6l14.7-10.1c18.6-11.6,34.2-45.2,34.2-139.5c0-3.8,0-7.5,0-11.1C812.3,639.3,802.2,594.5,710.7,542.3z M277.1,742.4c-23.8,0-43.2-24.2-43.2-53.9c0-29.7,19.4-53.9,43.2-53.9c23.8,0,43.2,24.2,43.2,53.9C320.3,718.2,300.9,742.4,277.1,742.4z M694,742.4c-23.8,0-43.2-24.2-43.2-53.9c0-29.7,19.4-53.9,43.2-53.9c23.8,0,43.2,24.2,43.2,53.9C737.2,718.2,717.8,742.4,694,742.4z M238.1,174.1c17.5,0.3,31.9-17.2,32.1-39.1c0.2-21.9-13.8-39.8-31.3-40.1c-17.5-0.3-31.9,17.2-32.1,39.1C206.6,155.9,220.6,173.8,238.1,174.1z M238.8,101.2c14.7,0.2,26.5,15.3,26.3,33.7c-0.2,18.4-12.3,33.1-27,32.9c-14.7-0.2-26.5-15.3-26.3-33.7C212,115.7,224.1,101,238.8,101.2z M676.7,358.9c-3.3-6.4-10.1-8.2-15.2-4.1c-5.1,4.1-6.6,12.7-3.3,19c3.3,6.4,10.1,8.2,15.2,4.1C678.6,373.8,680.1,365.3,676.7,358.9z M672,422c-2.8,2.2-3.5,6.8-1.8,10.3c1.8,3.4,5.5,4.4,8.2,2.2c2.8-2.2,3.5-6.8,1.8-10.3C678.5,420.7,674.8,419.8,672,422z"/><path d="M457.9,222.9c0,19.4,12.7,35.1,28.4,35.1c15.7,0,28.4-15.7,28.4-35.1c0-19.4-12.7-35.1-28.4-35.1C470.6,187.8,457.9,203.5,457.9,222.9z M486.3,193.4c13.2,0,23.8,13.2,23.8,29.5c0,16.3-10.7,29.5-23.8,29.5c-13.2,0-23.9-13.2-23.9-29.5C462.4,206.6,473.1,193.4,486.3,193.4z M438.5,147.6c25.1,0,45.4-25.2,45.4-56.2c0-31-20.3-56.2-45.4-56.2c-25.1,0-45.4,25.2-45.4,56.2C393.1,122.5,413.4,147.6,438.5,147.6z M438.5,44.1c21.1,0,38.2,21.2,38.2,47.3c0,26.1-17.1,47.3-38.2,47.3c-21.1,0-38.2-21.2-38.2-47.3C400.3,65.3,417.4,44.1,438.5,44.1z M342,236.9l-47.3-38.1C294.7,219.8,315.9,236.9,342,236.9z M442.6,126.3L412,101.6C412,115.2,425.7,126.3,442.6,126.3z M857.2,277.6l54.2-20.8c7.3-2.8,4.8-14.4,3.9-18.2c-1-3.8-4.2-15.1-11.5-12.3L849.6,247c-7.3,2.8-0.8,4.3,2.3,15.8C855.1,274.3,849.9,280.4,857.2,277.6z M746.1,124l-20.8-16.8C725.3,116.5,734.6,124,746.1,124z M756.9,322.3l10.2-6.2c4.4-1.7,4.2-12.6,1.8-21.9c-1.8-7.1-6.6-16.9-11.1-15.2l-11.2,2c-8,3.1-0.9,11,1.7,21.5C751.2,314.1,748.9,325.4,756.9,322.3z M709.1,258.1c19.7,0,35.7-19.8,35.7-44.2c0-24.4-16-44.2-35.7-44.2c-19.7,0-35.7,19.8-35.7,44.2C673.4,238.3,689.4,258.1,709.1,258.1z M709.1,176.7c16.6,0,30,16.7,30,37.2c0,20.5-13.4,37.2-30,37.2c-16.6,0-30-16.7-30-37.2C679.1,193.4,692.5,176.7,709.1,176.7z M742.8,139.5c17.5,0,31.6-17.5,31.6-39.2s-14.1-39.2-31.6-39.2c-17.5,0-31.6,17.5-31.6,39.2S725.3,139.5,742.8,139.5z M742.8,67.4c14.7,0,26.6,14.7,26.6,32.9c0,18.2-11.9,32.9-26.6,32.9c-14.7,0-26.6-14.7-26.6-32.9C716.2,82.2,728.1,67.4,742.8,67.4z M600.4,212.7l-50-40.3C550.4,194.7,572.8,212.7,600.4,212.7z M738.2,281.1c-0.9-3.4-3.8-5.3-6.5-4.3l-23.3,8.9c-2.8,1.1-4.3,4.7-3.5,8.1c0,0,4.9,10.7,7.8,22.3c3,11.9,4,24.7,4,24.7c0.9,3.4,3.8,5.3,6.5,4.3l23.3-8.9c2.8-1.1,4.3-4.7,3.5-8.1c0,0-0.4-13.3-3.4-25.4C743.6,291.3,738.2,281.1,738.2,281.1z M490.7,242.9l-19.9-16.1C470.8,235.7,479.7,242.9,490.7,242.9z M590.8,244c39.4,0,71.3-39.6,71.3-88.3c0-48.8-31.9-88.3-71.3-88.3c-39.4,0-71.3,39.6-71.3,88.3C519.5,204.5,551.4,244,590.8,244z M590.8,81.4c33.1,0,60,33.3,60,74.3c0,41-26.8,74.3-60,74.3c-33.1,0-60-33.3-60-74.3S557.7,81.4,590.8,81.4z M714.9,241.5L690.8,222C690.8,232.8,701.6,241.5,714.9,241.5z M833.2,269.6c-0.9-3.4-3.2-5.6-6.1-4.5l-57.7,22.1c-2.9,1.1,0,3,0.8,6.5l0.4,1.7c0.9,3.4-0.6,7,2.2,5.9l57.7-22.1c2.9-1.1,3.8-4.5,3-7.9L833.2,269.6z M674.8,333.7c1.6-0.6,2.5-2.7,2-4.6c-0.5-2-2.2-3-3.7-2.4l-44.5,17c-1.6,0.6-2.5,2.7-2,4.6c0.5,2,2.2,3,3.7,2.4L674.8,333.7z M552.3,376c-0.5-1.9-2.2-3-3.7-2.4l-44.5,17c-1.6,0.6-2.5,2.7-2,4.6c0.5,2,2.2,3,3.7,2.4l44.5-17C551.9,380,552.7,377.9,552.3,376z M617.8,382.8l-42.6,23.2c-1.5,0.8-2.2,3-1.5,4.9c0.7,1.9,2.4,2.7,3.9,1.9l42.6-23.2c1.5-0.8,2.2-3,1.5-4.9C621.1,382.8,619.3,382,617.8,382.8z M554.3,418.8L511.7,442c-1.5,0.8-2.2,3-1.5,4.9c0.7,1.9,2.4,2.7,3.9,1.9l42.6-23.2c1.5-0.8,2.2-3,1.5-4.9C557.6,418.8,555.8,417.9,554.3,418.8z M616.1,351.5c-0.5-2-2.2-3-3.7-2.4l-44.5,17c-1.6,0.6-2.5,2.7-2,4.6c0.5,1.9,2.2,3,3.7,2.4l44.5-17C615.7,355.5,616.6,353.4,616.1,351.5z M954.8,450.8c-4.4-21-25-43.3-35.9-61.7c-8.9-18.9-2-46.1-2-46.1c0.4-3.4,0.1-4.1-0.8-3.5c3.3-3.4,3.8-7.7,1.2-15.2c-4.1-12-12.2-47.3-12.2-47.3l6.5-19.2l-41,15.7c0,0,20.9,46,22.3,61.5c0.7,8.4,3.8,11.7,8.5,11.4c-1.8,0.4-2.1,1.1-2.3,6.2c0,0-4.2,27.3,3.1,43c9.7,18.2,31.3,38.9,35.9,61.7c6.7,26.7,5,52.2,5,52.2c1.1,4.6,1.7,8.5,4.4,7.4l6.7-2.6c2.8-1.1,5.1-2.9,5.6-11.3C959.8,503,962.4,487.7,954.8,450.8z M909.6,343.6c1.2-0.6,2.2-1.1,3.2-1.7C911.9,342.5,910.8,343.1,909.6,343.6z M787.5,544.7L727.1,353l-1.3-0.2c-15.7,11.6-21.1-46.7-21.1-46.4c-12.1-25.2-44.5-41.5-57.4-41.5H317.8c-5.4,0-13,2-21.3,5.9c-19,9-41.9,28.2-51.6,56.9l-8.1,26.2l-12.2,39.5l-46.9,151.3c0,0-16.3,16.3-22.2,30.5c-6,14.3-12.5,27-12.5,123.2c0,93.8,15.6,127.2,34.3,138.8l14.7,10.1v87.1c0,28.3,5.6,36.7,27.8,36.7h49.9c22.3,0,27.8-8.4,27.8-36.7v-87.1h370.2v87.1c0,28.3,5.6,36.7,27.8,36.7h49.9c22.2,0,27.8-8.4,27.8-36.7v-87.1l14.7-10.1c18.7-11.5,34.3-44.9,34.3-138.8c0-96.2-6.5-108.9-12.5-123.2C803.8,560.9,787.5,544.7,787.5,544.7z M274.3,743.6c-23.9,0-43.4-24.1-43.4-53.6c0-29.6,19.5-53.6,43.4-53.6c23.9,0,43.3,24.1,43.3,53.6C317.7,719.6,298.2,743.6,274.3,743.6z M692.4,743.6c-23.9,0-43.3-24.1-43.3-53.6c0-29.6,19.5-53.6,43.3-53.6c23.9,0,43.4,24.1,43.4,53.6C735.7,719.6,716.3,743.6,692.4,743.6z M740.6,544.7H224.5c0,0-12.3,1.4-8.6-14.9c3.2-13.8,47.5-150.1,56.8-187.5c3.8-12.9,25.2-42.4,54.2-40.2h311.3c8.1-0.6,15.7,1.3,22.4,4.6c1.2-1.9,3.1-3.1,5.1-3.1c3.7,0,6.7,3.7,6.7,8.3c0,0.8-0.1,1.6-0.3,2.4c0,0,0.1,0,0.1,0.1c1.8,1.5,3.5,3.1,5.2,4.8c0.8,0.8,1.5,1.6,2.3,2.4c6.7,7.5,11.2,15.5,12.7,20.8c9.3,37.4,53.7,173.7,56.8,187.5C752.9,546.1,740.6,544.7,740.6,544.7z M850.9,282.2c0,0,10.3,30.6-7,68.7c16.7-13.8,30.5-45.1,24.2-75.7L850.9,282.2z M850.6,263.4c-1.5-6-5.4-16.5-9.5-14.9l-9,5.7c-4,4.7-0.5,3.3,2.6,15.7c3.1,12.8-0.6,12.9,4.9,14.4l10.1-1.2C853.8,281.6,852.4,270.5,850.6,263.4z M136.8,383.3c0,14.1,14.2,25.6,31.7,25.6L136.8,383.3z M539.4,335.4c-0.3-2-1.8-3.4-3.4-3.1l-46,9.2c-1.6,0.3-2.7,2.2-2.5,4.2c0.3,2,1.8,3.4,3.4,3.1l46-9.2C538.5,339.3,539.6,337.4,539.4,335.4z M214,175.8c21.9,0,39.7-22,39.7-49.2c0-27.2-17.8-49.2-39.7-49.2c-21.9,0-39.7,22-39.7,49.2C174.3,153.7,192.1,175.8,214,175.8z M214,85.2c18.4,0,33.4,18.5,33.4,41.4c0,22.8-15,41.4-33.4,41.4s-33.4-18.5-33.4-41.4C180.6,103.7,195.6,85.2,214,85.2z M221,283.5l-20.8-16.8C200.2,276,209.5,283.5,221,283.5z M213.2,160.1l-24.4-30.2C188.8,146.6,199.7,160.1,213.2,160.1z M215.6,228c-15.7,0-28.4,15.7-28.4,35.1c0,19.4,12.7,35.1,28.4,35.1c15.7,0,28.4-15.7,28.4-35.1C244,243.7,231.3,228,215.6,228z M215.6,292.6c-13.2,0-23.8-13.2-23.8-29.5c0-16.3,10.7-29.5,23.8-29.5c13.2,0,23.9,13.2,23.9,29.5C239.5,279.4,228.8,292.6,215.6,292.6z M214.8,371.5c0-32.7-21.4-59.2-47.8-59.2c-26.4,0-47.8,26.5-47.8,59.2c0,32.7,21.4,59.2,47.8,59.2C193.4,430.8,214.8,404.2,214.8,371.5z M126.8,371.5c0-27.5,18-49.8,40.2-49.8c22.2,0,40.2,22.3,40.2,49.8c0,27.5-18,49.8-40.2,49.8C144.8,421.3,126.8,399,126.8,371.5z M553.6,337.1l46-9.2c1.6-0.3,2.7-2.2,2.5-4.2c-0.3-2-1.8-3.4-3.4-3.1l-46,9.2c-1.6,0.3-2.7,2.2-2.5,4.2C550.5,336.1,552,337.5,553.6,337.1z M621,324.5l46-9.2c1.6-0.3,2.7-2.2,2.5-4.2c-0.3-2-1.8-3.4-3.4-3.1l-46,9.2c-1.6,0.3-2.7,2.2-2.5,4.2C617.9,323.4,619.4,324.8,621,324.5z M330.7,260.1c33.6,0,60.8-33.7,60.8-75.3c0-41.6-27.2-75.3-60.8-75.3c-33.6,0-60.8,33.7-60.8,75.3C269.9,226.4,297.1,260.1,330.7,260.1z M330.7,121.5c28.2,0,51.1,28.3,51.1,63.3s-22.9,63.3-51.1,63.3c-28.2,0-51.1-28.3-51.1-63.3C279.6,149.8,302.5,121.5,330.7,121.5z M674.5,349.5l-42.6,23.2c-1.5,0.8-2.2,3-1.5,4.9c0.7,1.9,2.4,2.7,3.9,1.9l42.6-23.2c1.5-0.8,2.2-3,1.5-4.9C677.7,349.5,676,348.7,674.5,349.5z"/><path d="M146,714.8"/><path d="M63.2,727c0,14.9,12.5,25.2,23.9,29.1c42,14.5,54.4,14.7,54.4,14.7l-2.7-45.7l-7.4,5.9l-7.9,4.1l-11,4.2l-13.2,0.5l-10.6-1.5l-12-4"/><path d="M68.3,500.6c0-0.5,26.8-6.7,26.8-13.4c0-4.1-26.8,2.3-26.8-3.2c0.1-33.6,0.3-99.1,0.6-100.9c2.5-13.3,10.9-23.2,21-23.2l29.2-4.7c-0.2-2.5,0.9-10.4,1.2-7.8c-1.6-12.4,23.6-35.7,3.2-31.8c5.9-0.2-0.8,0.5,5.9-0.2c-42,4.1-59.8,15.4-59.8,15.4s-28.1,11.5-30.3,67.7c-0.1,2.2-0.1,106.6-0.1,109"/><path d="M224,278.3l-20.7-16.9C203.3,270.7,212.5,278.3,224,278.3z M216.2,153.7L192,123.3C192,140.1,202.8,153.7,216.2,153.7z M217,169.5c21.8,0,39.5-22.2,39.5-49.7c0-27.4-17.7-49.7-39.5-49.7c-21.8,0-39.5,22.2-39.5,49.7C177.5,147.3,195.2,169.5,217,169.5z M217,78.1c18.4,0,33.2,18.7,33.2,41.8s-14.9,41.8-33.2,41.8c-18.4,0-33.2-18.7-33.2-41.8C183.8,96.8,198.7,78.1,217,78.1z M333.2,254.7c33.4,0,60.5-34,60.5-76c0-42-27.1-76-60.5-76c-33.4,0-60.5,34-60.5,76C272.7,220.6,299.8,254.7,333.2,254.7z M333.2,114.7c28.1,0,50.9,28.6,50.9,63.9c0,35.3-22.8,63.9-50.9,63.9c-28.1,0-50.9-28.6-50.9-63.9C282.3,143.4,305.1,114.7,333.2,114.7z M492.5,237.3l-19.8-16.2C472.7,230,481.5,237.3,492.5,237.3z M344.5,231.2l-47.1-38.5C297.4,214,318.4,231.2,344.5,231.2z M746.8,117.3L726,100.3C726,109.7,735.3,117.3,746.8,117.3z M743.4,133c17.4,0,31.5-17.7,31.5-39.5c0-21.8-14.1-39.5-31.5-39.5C726,53.9,712,71.6,712,93.4C712,115.3,726,133,743.4,133z M743.4,60.2c14.6,0,26.5,14.9,26.5,33.2c0,18.4-11.8,33.2-26.5,33.2c-14.6,0-26.5-14.9-26.5-33.2C717,75.1,728.8,60.2,743.4,60.2z M734.5,321.4c7.8,19.8,11.7,39.8,11.7,57.1c12.2-11.9,14.8-39.9,7.4-70.3l-19.5,12.2C734.2,320.8,734.4,321.1,734.5,321.4z M946.4,444.1c-0.2-0.6-0.3-0.8-0.3-0.7C946.3,443.9,946.4,444.1,946.4,444.1z M734.5,308.6l12.1-7.6l50.6,18.2l28.1-17.6l12.7,32l12.7-8l-12.7-32l17.8-7.5L789.3,258l-61.1,34.6L734.5,308.6z M790.4,333.4l9.5,24l31.6-19.8l-9.5-24L790.4,333.4z M715.7,235.9l-24.1-19.7C691.6,227.1,702.4,235.9,715.7,235.9z M459.8,217.2c0,19.6,12.6,35.5,28.2,35.5c15.6,0,28.2-15.9,28.2-35.5c0-19.6-12.6-35.5-28.2-35.5C472.5,181.7,459.8,197.6,459.8,217.2z M488.1,187.3c13.1,0,23.7,13.4,23.7,29.8S501.2,247,488.1,247c-13.1,0-23.7-13.4-23.7-29.8C464.3,200.7,475,187.3,488.1,187.3z M444.6,119.6l-30.5-24.9C414.1,108.4,427.7,119.6,444.6,119.6z M709.9,252.7c19.6,0,35.5-20,35.5-44.7c0-24.7-15.9-44.6-35.5-44.6c-19.6,0-35.5,20-35.5,44.6C674.4,232.7,690.3,252.7,709.9,252.7z M709.9,170.5c16.5,0,29.9,16.8,29.9,37.5c0,20.7-13.4,37.5-29.9,37.5c-16.5,0-29.9-16.8-29.9-37.5C680,187.3,693.4,170.5,709.9,170.5z M440.5,141.2c25,0,45.2-25.4,45.2-56.8s-20.2-56.8-45.2-56.8c-24.9,0-45.2,25.4-45.2,56.8C395.3,115.7,415.5,141.2,440.5,141.2z M440.5,36.7c21,0,38,21.4,38,47.7c0,26.4-17,47.7-38,47.7c-21,0-38-21.4-38-47.7C402.5,58,419.5,36.7,440.5,36.7z M711,311.3c1.7,4.4,7,5.6,11.6,2.7l3.4-2.2l-6.3-16l-3.4,2.2C711.6,300.9,709.3,306.9,711,311.3z M592.2,238.5c39.2,0,71-39.9,71-89.2c0-49.3-31.8-89.2-71-89.2c-39.2,0-71,39.9-71,89.2C521.2,198.5,552.9,238.5,592.2,238.5z M592.2,74.3c33,0,59.7,33.6,59.7,75s-26.7,75-59.7,75c-33,0-59.7-33.6-59.7-75S559.2,74.3,592.2,74.3z M601.7,206.8l-49.8-40.7C551.9,188.6,574.2,206.8,601.7,206.8z M625.5,496l-16.7,28.3c-2.3,3.9-1.6,9.4,1.5,12.3c3.1,2.9,7.5,2.1,9.8-1.8l16.7-28.3c2.3-3.9,1.6-9.4-1.5-12.3C632.2,491.3,627.8,492.1,625.5,496z M656.6,442.4l-16.7,28.3c-2.3,3.9-1.6,9.4,1.5,12.3c3.1,2.9,7.5,2.1,9.8-1.8l16.7-28.3c2.3-3.9,1.6-9.4-1.5-12.3C663.2,437.7,658.9,438.5,656.6,442.4z M672.4,429.5c3.1,2.9,7.5,2.1,9.8-1.8l16.7-28.3c2.3-3.9,1.6-9.4-1.5-12.3c-3.1-2.9-7.5-2.1-9.8,1.8l-16.7,28.3C668.6,421.1,669.3,426.6,672.4,429.5z M650.2,300.9l-25.7,14.1c-3.5,1.9-5.2,7.1-3.6,11.6c1.5,4.5,5.7,6.5,9.2,4.5l25.7-14c3.5-1.9,5.2-7.1,3.6-11.6C657.9,301,653.8,298.9,650.2,300.9z M671.6,343.6l-21.9,21.9c-3,3-3.5,8.6-1.1,12.4c2.4,3.8,6.8,4.4,9.9,1.4l21.9-21.9c3-3,3.5-8.6,1.1-12.4C679.1,341.2,674.7,340.6,671.6,343.6z M787.9,542l-41.2-134.7L787.9,542l-63.7-208.7l-3.2-10.4h0c-17.3-0.4-17.3-15.5-15.3-28.1c-22.7-13.5-44.5-35.3-57.3-35.3H320.3c-5.4,0-12.9,2-21.2,6c-19,9.1-41.7,28.5-51.4,57.4l-8.1,26.4l-5.5,18c10-1.1,20.3,1.6,30.3,9.6c4.9-16.6,8.9-30.6,11.1-39.3c3.8-13,25.1-42.8,53.9-40.6h309.9c28.8-2.2,50.2,27.6,53.9,40.6c9.3,37.8,53.4,175.3,56.6,189.3c3.7,16.5-8.5,15.1-8.5,15.1h-407c-1.9,43.7-31.4,68.3-87,70.5c-52.3,12.8-68.8,55.3-100.5,113.3c2.9,73.1,17,101.1,33.6,111.5l14.7,10.2v87.9c0,28.5,5.5,37,27.7,37h49.7c22.2,0,27.7-8.5,27.7-37v-87.9h368.6v87.9c0,28.5,5.5,37,27.7,37H746c22.1,0,27.7-8.5,27.7-37v-87.9l14.7-10.2c18.6-11.7,34.1-45.4,34.1-140.1c0-97.1-6.5-110-12.4-124.4C804.1,558.4,787.9,542,787.9,542z M277.1,742.8c-23.8,0-43.2-24.3-43.2-54.2c0-29.8,19.4-54.1,43.2-54.1c23.8,0,43.2,24.3,43.2,54.1S300.9,742.8,277.1,742.8z M693.2,742.8c-23.8,0-43.2-24.3-43.2-54.2c0-29.8,19.4-54.1,43.2-54.1c23.8,0,43.2,24.3,43.2,54.1C736.4,718.5,717,742.8,693.2,742.8z M597.6,429.3c2.4,3.8,6.8,4.4,9.9,1.4l21.9-21.9c3-3,3.5-8.6,1.1-12.4c-2.4-3.8-6.8-4.4-9.9-1.4l-21.9,21.9C595.7,419.9,595.2,425.5,597.6,429.3z M218.6,222.2c-15.6,0-28.2,15.9-28.2,35.5c0,19.6,12.6,35.5,28.2,35.5s28.2-15.9,28.2-35.5S234.2,222.2,218.6,222.2z M218.6,287.5c-13.1,0-23.7-13.4-23.7-29.8c0-16.5,10.6-29.8,23.7-29.8c13.1,0,23.7,13.4,23.7,29.8C242.4,274.2,231.7,287.5,218.6,287.5z M592.4,334.5l-25.7,14.1c-3.6,1.9-5.2,7.1-3.6,11.6c1.6,4.5,5.7,6.5,9.2,4.6l25.7-14.1c3.5-1.9,5.2-7.1,3.6-11.6C600.1,334.6,595.9,332.6,592.4,334.5z M968.8,499.7c0,0-22.2-54.9-22.6-56.2c-1.3-3-7-15.4-11.1-21.6c-27.2-41-59.5-87.4-77.8-76.1l-37,25.8c-3.7,2.3-5.6,7-4.2,10.5c0,0,7.1,17.5,11.5,28.6c7.7,19.2,3.9,43.2,2.2,53.8c-1.6,10.1-2,19.3-1.5,27.1c-0.6,14,4,35.8,13.2,58.9c13,32.4,26,50.5,34.1,53.5c8.1,2.9,18.3,1.6,24.8-2.3l55.2-34.1C972.6,556.9,975,515.2,968.8,499.7z M171.8,404.9l-31.6-25.8C140.2,393.3,154.3,404.9,171.8,404.9z M163.4,426.3c1.9-2.9,4-5.9,6.2-8.9c-21.8-0.4-39.4-22.7-39.4-50.3c0-27.8,17.9-50.3,40-50.3c22.1,0,40,22.5,40,50.3c0,3.3-0.3,6.6-0.8,9.7c2.7-1.7,5.4-3.3,8.1-4.6c0.1-1.7,0.2-3.4,0.2-5.1c0-33-21.3-59.8-47.6-59.8c-26.3,0-47.6,26.8-47.6,59.8C122.6,397.3,140.4,422.2,163.4,426.3z M112.2,632.6c-2.6,0.1-4.6,2.8-4.5,6c0.1,3.2,2.2,5.7,4.8,5.6c2.6-0.1,4.6-2.8,4.5-6C116.9,635,114.8,632.5,112.2,632.6z M116.7,519.3c-4.4,0.2-7.8,4.8-7.7,10.3c0.1,5.5,3.8,9.8,8.2,9.7c4.4-0.2,7.8-4.8,7.7-10.3C124.8,523.5,121.1,519.1,116.7,519.3z M196.3,632.7c36.6-36.2,77.4-37.2,77.4-37.2c79-0.6,50.6-91.9,29.6-143.4c-22.3-54.8-71.7-109.9-119.4-37c0,0-19.6,36.5-53.5,61.5c-32.3,23.9-74.9,30.1-74.9,30.1c-62.5,20.5-49.7,119.1-26.3,169c23.3,49.9,77.2,88.4,117.3,33.7C146.5,709.4,168.8,659.9,196.3,632.7z M219.9,598.5c-2.6,0.1-4.7-2.4-4.8-5.6c-0.1-3.2,1.9-5.9,4.5-6c2.6-0.1,4.7,2.4,4.8,5.6C224.5,595.7,222.5,598.4,219.9,598.5z M267.4,591.7c-1.8,0.1-3.4-1.7-3.4-4c-0.1-2.3,1.4-4.2,3.2-4.3c1.8-0.1,3.4,1.7,3.4,4C270.7,589.7,269.3,591.6,267.4,591.7z M316.4,564c0.1,4.1-2.5,7.6-5.8,7.7c-3.3,0.1-6-3.1-6.1-7.2c-0.1-4.1,2.5-7.6,5.8-7.7C313.6,556.7,316.3,559.9,316.4,564z M308.8,495.3c1.8-0.1,3.4,1.7,3.4,4c0.1,2.3-1.4,4.2-3.2,4.3c-1.8,0.1-3.3-1.7-3.4-4C305.5,497.3,307,495.4,308.8,495.3z M18.4,612.9c-2.2,0.1-4-2.1-4.1-4.8c-0.1-2.7,1.7-5,3.8-5.1c2.2-0.1,4,2.1,4.1,4.8C22.3,610.5,20.6,612.8,18.4,612.9z M33.3,652.2c-3.3,0.1-6-3.1-6.1-7.2c-0.1-4.1,2.5-7.6,5.8-7.7c3.3-0.1,6,3.1,6.1,7.2C39.1,648.7,36.6,652.1,33.3,652.2z M40.7,686.9c-1.8,0.1-3.4-1.7-3.4-4c-0.1-2.3,1.4-4.2,3.2-4.3c1.8-0.1,3.4,1.7,3.4,4C44,684.9,42.6,686.8,40.7,686.9z M82.4,713.6c-4.7,0.2-8.7-4.5-8.9-10.5c-0.1-6,3.6-10.9,8.3-11.1c4.7-0.2,8.7,4.5,8.9,10.5C90.9,708.4,87.2,713.4,82.4,713.6z M114.4,722.3c-2.6,0.1-4.7-2.8-4.8-6.5c-0.1-3.7,1.9-6.7,4.5-6.8c2.6-0.1,4.7,2.8,4.8,6.5C119,719.2,117,722.2,114.4,722.3z M142.2,693c-2.9,0.1-5.4-2.8-5.5-6.4c-0.1-3.7,2.2-6.7,5.1-6.8c2.9-0.1,5.4,2.8,5.5,6.4C147.4,689.8,145.1,692.9,142.2,693z M179.5,621.7c-1.8,0.1-3.4-1.7-3.4-4c-0.1-2.3,1.4-4.2,3.2-4.3c1.8-0.1,3.4,1.7,3.4,4C182.7,619.7,181.3,621.6,179.5,621.7z M148.2,646.5c-50,54.8-91.5,30.3-109.4-11.1c-17.6-40.5-35.5-104.6,15.6-122c0,0,62.5-10.9,87.7-40c35-34.1,48.8-61.7,48.8-61.7c43.2-57.1,78-18.6,95,27.1c17.2,46.3,44.5,116.7-25.9,125.1c0,0-39.4,9.8-69.4,32C165.1,614.8,148.2,646.5,148.2,646.5z M86.7,563.7c-1.8,0.1-3.3,2-3.2,4.3c0.1,2.3,1.6,4.1,3.4,4c1.8-0.1,3.3-2,3.2-4.3C90.1,565.4,88.5,563.6,86.7,563.7z M75.9,609c-4.7,0.2-8.5,5.2-8.3,11.1c0.1,6,4.1,10.6,8.9,10.5c4.7-0.2,8.5-5.2,8.3-11.1C84.6,613.5,80.7,608.8,75.9,609z M35.8,564c-1.5,0.1-2.6,1.6-2.6,3.4c0,1.8,1.3,3.3,2.7,3.2c1.5-0.1,2.6-1.6,2.6-3.4C38.4,565.4,37.2,563.9,35.8,564z M54.6,523.4c-5.8,0.2-10.4,6.4-10.3,13.7c0.2,7.3,5.1,13.1,10.9,12.9c5.8-0.2,10.4-6.4,10.3-13.7C65.3,528.9,60.5,523.1,54.6,523.4z M130.9,585.3c-4.7,0.2-8.5,5.2-8.3,11.1c0.1,6,4.1,10.7,8.9,10.5c4.7-0.2,8.5-5.2,8.3-11.1C139.6,589.8,135.7,585.1,130.9,585.3z M262.9,540.3c-0.1-5.5-3.8-9.8-8.2-9.7c-4.4,0.2-7.8,4.8-7.7,10.3c0.1,5.5,3.8,9.8,8.2,9.7C259.6,550.4,263,545.8,262.9,540.3z M220,493.7c-1.8,0.1-3.3,2-3.2,4.3c0.1,2.3,1.6,4.1,3.4,4c1.8-0.1,3.3-2,3.2-4.3C223.4,495.5,221.9,493.7,220,493.7z M188.7,538.2c-4.4,0.2-7.8,4.8-7.7,10.3c0.1,5.5,3.8,9.8,8.2,9.7c4.4-0.2,7.8-4.8,7.7-10.3C196.7,542.3,193.1,538,188.7,538.2z M155,539.5c-1.8,0.1-3.3,2-3.2,4.3c0.1,2.3,1.6,4.1,3.4,4c1.8-0.1,3.3-2,3.2-4.3C158.3,541.2,156.8,539.4,155,539.5z M167.2,472.5c-3.6,0.1-6.5,4-6.4,8.6c0.1,4.6,3.2,8.2,6.8,8.1c3.7-0.1,6.5-4,6.4-8.6C173.9,475.9,170.9,472.3,167.2,472.5z M222.8,417.1c-3.7,0.1-6.5,4-6.4,8.6c0.1,4.6,3.2,8.2,6.8,8.1c3.7-0.1,6.5-4,6.4-8.6C229.5,420.6,226.5,417,222.8,417.1z M257.6,485.6c-0.1-5.5-3.8-9.8-8.2-9.7c-4.4,0.2-7.8,4.8-7.7,10.3c0.1,5.5,3.8,9.8,8.2,9.7C254.3,495.7,257.7,491.1,257.6,485.6z M256.3,434.1c1.5-0.1,2.6-1.6,2.6-3.4c0-1.8-1.3-3.3-2.7-3.2c-1.5,0.1-2.6,1.6-2.6,3.4C253.6,432.7,254.9,434.2,256.3,434.1z M285,522.8c0.7,0,1.3-0.8,1.3-1.7c0-0.9-0.6-1.6-1.4-1.6c-0.7,0-1.3,0.8-1.3,1.7C283.6,522.1,284.2,522.9,285,522.8z"/></g>
                            </svg>
                        </div>
                        <div class="info">
                            <h3>Car Wash</h3>
                            <p>Experience our complete washing service. Our provider uses professional machinery and equipment with high quality detergents.</p>
                        </div>
                    </div>
                </div>
                <div class="Gaz col-3">
                    <div>
                        <div class="i">
                            <svg style="width: 100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve">
                                <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
                                <g><g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"><path d="M1550.6,4966.7c-34-65.5-34-2633.5,0-2699.1c24.3-46.1,80.1-46.1,2713.6-46.1c1478.2,0,2701.5,9.7,2718.5,19.4c24.3,17,29.1,310.7,24.3,1390.8l-7.3,1369l-2711.2,7.3C1625.8,5012.8,1577.3,5012.8,1550.6,4966.7z M6618.6,3636.5l-7.3-1014.6H4281.2H1951.1l-7.3,983c-4.9,902.9-2.4,985.5,36.4,1014.6c31.6,21.9,538.8,29.1,2342.3,29.1h2301L6618.6,3636.5z"></path><path d="M3045.7,4410.8c46.1-41.3,3259.8-1077.7,3296.2-1065.6c34,14.6,38.8,85,38.8,524.3c0,480.6-2.4,512.1-46.1,536.4C6276.4,4435.1,3009.3,4439.9,3045.7,4410.8z"></path><path d="M7723,4580.7c-70.4-34-128.6-70.4-128.6-80.1c0-7.3,70.4-140.8,157.8-293.7l157.8-281.5V3389v-536.4H7757c-87.4,0-165-12.1-182-29.1c-36.4-36.4-41.3-1043.7-4.8-1114.1c21.9-38.8,53.4-46.1,218.4-46.1h194.2v-179.6c0-208.7,53.4-529.1,116.5-718.5c26.7-72.8,128.6-303.4,230.6-509.7c101.9-206.3,213.6-473.3,250-594.7c63.1-201.4,68-250,68-655.4c2.4-398.1-2.5-451.5-55.8-616.5c-191.7-582.5-827.7-1123.8-1366.5-1162.6l-165-12.1v2318c0,1769.5-7.3,2322.9-29.1,2344.7c-46.1,46.1-5390.9,41.3-5429.7-4.8c-19.4-24.3-24.3-818-21.8-2966.1l7.3-2934.5l2703.9-7.3c1978.2-2.4,2711.2,2.4,2735.5,21.8c26.7,21.9,34,131.1,34,495.2v466l201.5,26.7c779.2,102,1517,813.1,1643.2,1587.4c34,220.9,29.1,660.2-12.1,895.6c-48.5,284-126.2,500-349.5,966.1c-230.6,478.2-267,609.2-286.4,961.2c-12.1,264.6-12.1,267,43.7,291.3l58.3,24.3V2270c0,570.4,0,570.4-53.4,577.7c-53.4,7.3-53.4,12.1-60.7,582.5l-7.3,575.3l-182,320.4c-99.5,177.2-186.9,320.4-194.2,320.4C7854.1,4646.3,7791,4617.1,7723,4580.7z M8055.5,2257.9v-424.8h-157.8H7740v424.8v424.8h157.8h157.8V2257.9z"></path><path d="M1169.5-4567.5l-97.1-213.6l3264.6-7.3c1796.1-2.4,3269.5-2.4,3274.3,2.4c4.9,4.9-36.4,104.4-89.8,218.4l-97.1,211.2H4344.3H1266.6L1169.5-4567.5z"></path></g></g>
                            </svg>
                        </div>
                        <div class="info">
                            <h3>Gaz Station</h3>
                            <p>we offer quick oil changes from a wide range of automotive and industrial oils.We also offer a complementary lubricant check-up for overall vehicle safety. </p>
                        </div>
                    </div>
                </div>
                <div class="Truck col-3 ">
                    <div>
                        <div class="i">
                            <svg style="width: 100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve">
                                <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
                                <g><path d="M780.1,714.3c21.3,0,38.2,16.8,38.2,38.2c0,21.3-16.8,38.2-38.2,38.2c-21.3,0-38.2-16.8-38.2-38.2C741.9,731.1,758.8,714.3,780.1,714.3L780.1,714.3z M52.7,497.6L52.7,497.6c0,16.8,6.7,31.4,16.8,42.7l0,0c11.2,10.1,25.8,16.8,41.5,16.8c16.8,0,31.4-6.7,42.7-16.8l1.1-2.2c10.1-10.1,15.7-24.7,15.7-40.4c0-28.1-11.2-38.2-24.7-49.4c-5.6-4.5-12.3-10.1-12.3-29.2l0,0v-1.1V212.5l179.6,179.6v190.8H48.2H47c-21.3,0-37,18-37,38.2c0,74.1,0,57.3,0,131.3l0,0c0,21.3,16.8,38.2,37,38.2H129c6.7,24.7,20.2,48.3,38.2,66.2c25.8,26.9,62.9,43.8,104.4,43.8c40.4,0,77.5-16.8,104.4-43.8c18-18,31.4-41.5,38.2-66.2h221.1l0,0c6.7,24.7,20.2,48.3,38.2,66.2l0,0c26.9,26.9,64,43.8,104.4,43.8c39.3,0,75.2-15.7,101-41.5l2.2-2.2c18-18,31.4-41.5,38.2-66.2h32.6h1.1c21.3,0,37-16.8,37-38.2V485.3l0,0c0-5.6-1.1-11.2-4.5-16.8L877.7,251.8c-5.6-13.5-19.1-24.7-34.8-24.7h-85.3h-12.3H634.1H633c-21.3,0-38.2,16.8-38.2,38.2v305.3l-216.7-220h-1.1l0,0L138,110.3c-14.6-14.6-38.2-14.6-52.8,0c-14.6,14.6-14.6,38.2,0,53.9l3.4,3.4v249.2v1.1c0,40.4,14.6,52.8,29.2,65.1c4.5,3.4,7.9,6.7,7.9,14.6c0,3.4-1.1,6.7-3.4,10.1h-1.1c-2.2,2.2-5.6,3.4-10.1,3.4c-3.4,0-6.7-1.1-10.1-3.4l0,0c-2.2-3.4-4.5-5.6-4.5-10.1c0-12.3-10.1-22.5-22.5-22.5S52.7,484.1,52.7,497.6L52.7,497.6z M389.4,467.3L389.4,467.3l114.5,115.6H389.4V467.3L389.4,467.3z M748.6,303.4L748.6,303.4H761h62.9l61.7,122.4h-211v-15.7v-1.1l0,0v-66.2l0,0v-38.2h74.1V303.4z M599.3,658.1L599.3,658.1v56.1H381.6c-21.3,0-37,16.8-37,38.2v1.1c0,19.1-9,37-21.3,50.5c-12.3,12.3-30.3,20.2-50.5,20.2c-20.2,0-37-7.9-50.5-20.2c-12.3-12.3-21.3-31.4-21.3-50.5c0-21.3-16.8-38.2-38.2-38.2l0,0H85.2c0-49.4,0-6.7,0-56.1h514.1V658.1z M906.9,470.7L906.9,470.7H674.6v243.6c19.1,2.2,32.6,19.1,32.6,37c0,20.2,7.9,38.2,21.3,50.5l0,0l0,0c12.3,12.3,30.3,20.2,50.5,20.2c19.1,0,35.9-6.7,49.4-19.1l1.1-1.1c12.3-12.3,20.2-30.3,20.2-50.5v-1.1c0-21.3,16.8-38.2,38.2-38.2h28.1V494.2L906.9,470.7L906.9,470.7z M272.7,714.3L272.7,714.3c21.3,0,38.2,16.8,38.2,38.2c0,21.3-16.8,38.2-38.2,38.2s-37-16.8-37-38.2C234.5,731.1,251.4,714.3,272.7,714.3L272.7,714.3z"></path></g>
                            </svg>	
                        </div>
                        <div class="info">
                            <h3>Trailer Truck</h3>
                            <p>Our drivers and dispatchers are able help you by sending the right type of equipment and personnel for your towing situation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    
    <?php
        include('Config.php');
        $sql = "SELECT * FROM advertising
        where ad_type = 'show' " ;
        // $sql = "SELECT * FROM advertising
        // where ad_type LIKE '%show%' " ;
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($result);
        $count = 1;
        
        if($rows >= 1) {

    ?>
    <div id="port" class="Ads row">
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <?php
                        while ($ads = mysqli_fetch_array($result))
                        {
                            if($count == 1) {
                                echo '<div class="carousel-item active">';
                            } else {
                                echo '<div class="carousel-item">';
                            }
                            ?>
                            
                            
                                <div class="img" >
                                    <img src="data:image/jpg;charset=utf8mb4;base64,<?php echo base64_encode($ads['img_adver']); ?> " />
                                </div>
                                <div class="ad-content" >
                                    <h3><?php echo $ads['name_adver'];?></h3>
                                    <p>
                                        <?php echo $ads['ad_content']; ?>    
                                    </p>
                                </div>
                                <div style="clear: both;"></div>  
                            </div>

                        <?php
                        $count++;
                        }
                        ?>

            </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
        <?php
    }
    ?>

    
    <div class="why row ">
        <div class="container">
            <div class="left-side col-6 wow zoomInDown">
                <h2>- Why use Car Tech ?</h2>
                <hr>
                <p>
                    Servicing your car will extend your engine life, reduce fuel consumption, increase the safety of your vehicle, prevent wearing of moving parts, maintains road worthiness and improves resale value.
                    <br>
                    Here in Car Tech you can find all services near you in all of Egypt 
                    <br>
                    We will provide you with all necessary information about the service owners (their address - photos of their services - their location on Google Maps) and you can contact them through us before you go to them .
                </p>
            </div>
            <div class="right-side col-6">
                <img src="imgs/why.jpg" alt="home-img" style="margin-top: 70px;">
            </div>
        </div>
    </div>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-7a51d1c1-99a2-4f97-8985-675fe7f9c7e4"></div>
    
    <?php include('footer.php'); ?>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>  
    <script src="js/script.js"></script>
</body>

</html>