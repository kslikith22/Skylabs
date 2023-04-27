<?php
session_start();
require_once "dbconnect.php";
if(isset($_POST['submit'])){
    if(isset($_POST['medicine_name']) && isset($_POST['medicine_store'])){
        $mname=$_POST['medicine_name'];
        $count=$_POST['medicine_count'];
        $store=$_POST['medicine_store'];
        $pname=$_POST['patient_name'];
        $address=$_POST['address'];
        $query = "INSERT INTO medicine (medicine_name,medicine_count,medicine_store,patient_name,address) VALUES ('$mname','$count','$store','$pname','$address')";
       $result= mysqli_query($con,$query);
       if($result){
        header("location:paymentpage.php");
       }
       else{
        echo "failed";
       }
    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .div1 {
            margin-left: 200px;
            margin-top: 50px;
            margin-right: 600px;
        }
        .bm {
            font-size: 30px;
        }
        .mimg {
            margin-left: 1000px;
        }
        
    </style>
</head>
<body>
     <div class="div1">
        <img class="mimg" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxIQEhUSEhIWFRUVFxgWFRUVGBcVFRgYFRUXFhUVFRUYHSggGBolGxcVITEhJSkrLi4uGB80OTQsOCgtLisBCgoKDg0OGxAQGy0lHyUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAK4BIgMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAGAAEEBQcDAgj/xABNEAABAwIDAwQMCgcIAwEBAAABAAIDBBEFEiEGEzFBUZHRBxQVFiJSVGFxgaGyMjM0U3JzkrGz0iMkQmKTweEXRGN0gqLCwzVD8IMl/8QAGwEAAQUBAQAAAAAAAAAAAAAAAAECAwQFBgf/xAA+EQABBAECAgYHBgUCBwAAAAABAAIDEQQSIRMxBRRBUWGhIlJxgZGxwQYVMpLh8CMkU2LRNJMWJTM1QnKC/9oADAMBAAIRAxEAPwCVlSyqf2ql2qus4gXm/AeoGVecqse1PMl2qk4rUvV3quypZVY9qeZLtVLxAjgPVflSyqf2qFMwzBTO/KNOUnmCa6ZjRZOyczFle4NaN1SZVMwzCZKh2WMcOJOgHpK0TCcBipwbDM48XOtf0ehWUcDW3s0C/G3L6VmS9Kcwwe9bsH2fOxld7QP8/osuxXA5qa28AseDgbj0HmVflWuV1EyZhjeLtKBsewAU7hlJLHcL8QeZTYmeH+i/n5Kv0j0O6H04t2+PMIcyoax8kS6X+C37yjXtQIO2oZlnI8zf5qDpiT+X27wtf7FY/wDzL0wCNDuYtdptn5e14KiMOk3xcC1rXnJlNrkhWveS7tiSJ04ZFCxj5JnggDOLgWvx9aYbVPgoqWKmmLJGl+9AaDoTdurgR0K1rtpaWaSqhkkcIahkVpmtJyvY2xu217XA6Fz4Le8/E9y7+RmSHeiwVbuTQTV86ru5d/uVJXbGytmgjjmZLHUX3cwJy6DMb6nkF9F4r9noY5GQNqy6Uytjc0xyNIzOylzSTZwC74xi8Dm0tJTyvbFTkudUZSHZiD4TWjXlPSrCo2jgyQMkmNTI2eOTfmLd7tjHAuF+JNgelGocr8yjRMGt9DsPJgvton0T8NioNfskxj5Io6rPLDkMrHMLbMeQLtdexte9l7j2Pj7bfRvrMsgyZPAJL8zMx/asLWTbSbWOmqi2NwFOXxuJazK57WlhdmdbMQLHTzLrWY9TuxhlUH/oRlu+zuSLKdLX4lBePPvKGwZGkahXok/hbz22Po+3bsUGl2YZPV9rQ1WdgY50kuUgMLTYtIJ11tyrnWbLviroqMyktlsWSgGxDmk3AvztPKpmA43T0sNZIbSTSvLWRnMAYy43JcOF8xPG+gU/vjpZnYfO4iJ9O8tkYA9wEeVwbZxGtrN6SkDwRz8ylLJmv/6dtAI/C3nXOq5XtyQXjFKaeeSHMXbtxbm1F7ctl1wFx3w4jR3D1K12pgpZJJqiKrDnPcXti3TxxPDOdPWq3ZhmaoaPM7+SfjPIyWb9veUnSLGP6LlOinaDzaBvXsREWpsqse1Eu1F2nFC8S4D+5V2VLKrHtRLtRHFajq8irsqWVWPaiXaiOK1J1eRQMqWVT+1Uu1UcQI4D1Cjhc4hrQSTwA1KONldnQxu8mYM54NdY5R1qRsrg+5BkcBmcBbnDf6okAWNmZxfcbOXf3rqOi+iRHUsv4u7uVHjezsdQ3wQGPHBwHsNuIVFVbEFrLskzOHIRYH0FHSYqpHlzRimu2WlP0bjTHU9u/fyWQmgmGm7dp5iktbyBJW/vR3qrL/4ej9ZA1DhzpnWb6zyBWj9lzbR4J84siSKEN0AA9C6WVZ+ZIT6OwWlH0bEG0/cqFRYfHE3KGjzm2p85Kg45hLXtL2N8Mcw4+pXaVlA2RzXar3Vp8DHM0Vss8fCQbEWPn0TbtGWMUAkYSB4Q1HUhfd+ZakM4kCwsjEMTq5hRDGiDZ2rijaWus1xPE8vNqqrInyJZWiRulJA4wv1NCMWVUZ0D2k+Yhds450D7tPY8LnpKqHD7nLQHSB7WovfXxA2L239IUDGa2Exltw4kaAa2PIfMh7dpsic3EaCDajfnPc0ihuh7HcdioywSB5z3IygHha97kc6HqraXDpXZ5IJHOta5aL2HD9tXO2mzM1aYjEWDIHXzEj4Rba1geZAb9nZQSC6PQkcTyepaGhsmxFpuOYYQHatLvAkHyXeXEqY1bZBG4UwbrHZty7K7W1+e3Krfu5hnkz/st/Mh/uBL4zOk9SXcGXnZ0nqTBiRN5NHkrjukGOr+Mdv7iiHu7hvkz/st/Om7uYZ5M/7LfzofGAS+MzpPUl3Al54+k9SXq0fqjyTevM/rO/M5EHdzC/Jn9Dfzp+7mGeTv6G/nQ93Al8aPpPUl3Al52faPUl6qz1QjrrP6zvzORB3cwzyZ/wBlv50jjmGeTP6G/nQ93Al52dJ6k/cCXnZ0nqSdVj9VHXWf1nfmKkx4lTCsMhjd2tl0js2+bKNbX578qvabaXDonZ44JGuGlw1vL/qQz3Al52dJ6l1pdmZpXhjXR3doLk2+5DcWNm4alkzWSjS+YkcvxFH+BbQQ1jnNja8FoDjmAGhNtLEq63aHNjNl5qOSR0pYQ5oaMhJ1BvrcBF27SlwWTNCwP9Dkoe7S3aliJSKOgdKbNHDiTwCaZQBZTGwFxoBVm7T7pW1bhL4hc2I5x/NQhGhsocLCV8BaacFF3SW6Uzdpt2nawm8JWdBjxY0Ne29hYEebzKR3yC/xZt6RfoVLu0t2qpx4ibpXBlzgVaJWY5CeUj0grnNj8Y4Xd6Bb70PbtNkTBiR32qQ501Vsr3vjZ4jvYnVDu0k7q0Xcmdcn7/JHV06GQTznpXZtZIP2j61TMB7CtFuUO0K+KWYc6oX1ch/aPq0XC3KgQE8yg5Q7AiR7wOJQ1iBa6QlvD7/OncCeJKbIpooww3agmlMoqlGyJZFJyJZFPqVXhqPkSyKRkSyI1I4aj5E2RSciWRGpHDUfIhHZRoOIMBH7b/ucjbIgrZP/AMgz6b/ucpmO/hv9igkbUsftWrinZ4jegJbhniDoC6AqFVYtBEbSTRsPM5wB9pWIDQXR6b5BSO1meI3oCXa7PEb0BNTVTJBdj2uHO0gj2LultJpA7FhuLD9PL9N/vFEmw2zdLU0u8mizvMkoJLnjRshAFgeZDWLfHzfWP94ow7G8mWjB/wAab8Vy3Mongtrw+S53o8gSvsfu1B282cpaWnZJDFkdvo23zOOjibjUqj2YoIqmtjimbmYY5XZbkajLY6Ec6L+yZIHUjLfPxfeULbHfL4/qpf8Ago4STjO33VmYAZUe3YfqjnvIoPJ/98n5lnmyzf1hg5BJIBy6AvA9gWuU899DxWTbKfKmfWy+9Im4rnU+z2Jc8DSyh/5BH2RSaLDzJ5gOXqS3avqHJlAbb+frVeWUtbspIIGudumpKJsYsB6TylSGsA4BeklRJWmGgCgvEkQcCDwKocRwwR6t4fciElcpw0tOa1vOnxyFp2Uc0TXjdCuRNkUp0YuebkTbsLRD1k8OlGyJZFJyBLIEa0cNRsiWRSd2E+QI1pdCiZElJyBOjUk4ak5Esik5FxdMwOyEgOtex0VfVauaa5rxkSyKTkT7tGpGhRsiWRSN2lu0agjQoUz2sBc8hrRxJNgPWovdam+fi+23rXPbZlqKb0N99qzbBtnqqtD3QNiysdkOd5ab5Wu4Bp8ZWYmMcwuc6t6VaR0gfoYL2Wm91qb5+L7betP3Wpvn4vtt61luM4FU0Rj34jtJmDd24u+CATe4HOu+D7L1lXHvoWw5C5zRne5rrsJadA0qTgxBurXso9U+os0CxvzWl91qb5+L7betN3Wpvn4vtt61lmLYRPRyNjnEYL2lzcji7QOym9wOdTML2RramJk0bYcjxduZ7g61yNQGnmQYIg0OL9jyQHTlxZoFjnutH7rU3z8X229aD9kiDiDCNQXvsfU5DGJYdNSymGcMDg1rvAJcLOvbUgcyIdhPlsP+r3CpOEGQvc02CFWe95yGNeKIIV32TdrnwHtWndleReR44tB4NbzE66qo7H2ytPXwyy1Ae54kyghxFxladefUlTG1kVNjNS+qc1rCzwS/UaiPLb1Ao+wXEKeoYXUzmuaHWcWCwzWB189iFzbW6nW4+5d9LN1fHEcTSCQCXjx3pYvic78LrpW0r3MbG4AC9w4ZWkh4/a4lbJstjLa2nZM3QnRzfFcNHBQcZx6gjMkcssQlAILSBmuRpfT0Kn7D7HClkJ+CZTl9TQDb1oYNLqBTcl/WMfiOZTm6RfrXsgvF/j5vpv8AeKoY6vEIrthmexmZxDWuaB4RJJ19KvcX+Pm+m/3inw7CqioZvIYHvZmc3MCwatOU8XA8QurOgMbrO1D5Lz/HfKyR5ibe/wBVROq8QlLWzzPfGHtcQ5wI8HgbBdq59Qx7JKZxY4BwLmkA2dbTX0K2xHDKinaHzQOY0uDASWEZncBo4rhSwvlkEUTC95BcALDRtr6kjnCVvC0miKT5JsgzNcW71sFWd1sW8pk+0OpXOxp3csJlcAQXF7nEWucxJJ9JUvvarfJX/aj/ADKlc8OadOUgg84NiOkJrBE62sI37kZM+QQOI2gCtX7r03z8X229aYYvT/Px/bb1rMMNwSpqWbyGBz2Zi24LBq02PFyWJYHU0zN5NA5jMwbmJYdXGw4OVbq8V6dYtWOLkVYjWpMxuAcKmP7Y61074YfKY/ttWQ0FDLUP3cMZe7KXkDKPBBAJu4jlIVkdk64f3V3TH+ZNdiwNNOfuhk+Q4W1my0d2M0517Yj+2OtMcYpzxqIz/rHWsdZICAQPhEADlu42AV53o13kr/tR/mT34sTPxPpI3Inf+FlrRxitOTYTx3Onw29amZFjzqSSGobFKwseCx2U2OjnaG4J5itsyKCZjY6o2CrGO58hIcKIUTIqaaveHEaaEjhzFEeRCdV8N30j95TIqcU6caQrPDKh0jiHW0F1YZVW4A27nej+avN2myGnUnRN1NsqLZOpO5STNal0KRu0M7Qi0v8ApH80YZEJbTD9N/pH3lJjG3pcttR2o9Jikkel8zeY/wAir2ixKOXS9ncx/keVCqZWnwtd4KlHO5niEdZU2RC1FjEkehOZvMePqKIqDFYpdAbO5jofVzqm+N7FfjmY9VO3LbUM3ob77VQ9ih36Gcf43/UxEe3o/UZvQ332oT7GLrRTn/G/62KaP0sY+36KF/o5P/z9V67LH91+lL7rVadjF36iB/izfiFVHZVdftQ/vS+61Tuxu+1G0/4sv4hUpF4o9pTQaySf7QqfspH9ag+pd+IEW7APvh9OOZv/ACchDsouvVQfUu/ECJthH5aKn+j/AMnIkF4zPelYf5h/sag/si/+Qd9TF97122F+WQ+v3CuHZFP6+76mL73rtsN8sh/1e4Vbb/pPcVmzf64H+4It2/2O7eAlhsJ2C1joHt8UnkI5ChTZfGqjCWSQy0Uzi5+a4BsPBDbXAIPBbCvJaucMdnUNiuziz3Nh4Eg1Mu65H4rFe92rxWrfOIXQxyOBLpNMoAAsB+0dFrmD4bHSwshjFmsFvOTyk+cnVTgE6VjA3ftTcnNfOGt5NbyA+vesOxf4+b6b/eKMexrNloxzb6b8VyDsW+Pm+sf7xVVT1NfCCyGp3bMznBotpmJJ4gro5YjJG0Dw+S4zDlbHK8uNc/mVpHZOcDSMP+PF95QvsW4jEIyPmpf+CH5qmulytnqd5GHBxabcW8DoE87p2vbJTybt7Q4ZuWzrXHA8ybHA5sLmHtVibIiOSx4cKAK3SKUO9Kwz9l/1kv4jl6GK4qP74f8Ab+VcoonNjs43dqXHnJJJPtS4uO6JxJTekMiOWMBrrNrQ+xlNlo7cm+l99SOye4Gg0+ei99ZdS19dCCyCoMbMxcGi3FxueIT1GIV0wDJqkvjzBxabWJabjgFH1Rxk1jvtW+tRcOi4cqRL2OXkVriPmHfiMWpiUOafQsFE9RE8SU8u7dlLSRxIJBtqDzBd+7mJ+WO6G/lS5OK6SQuCjxcmNkYDnVSh0nwYvpR++1fQMsuX0r5+EDhGGh1nCxB841B6VM7u4p5Y72flT8nGdKW12BNxsiNodbgLcUQbYuvieviwe+5a5u1gVFLPJO2Sok3jy6MZjxs12g0A519Ah7fGHSqWY0xtY3wVnFLXySOab5Llu0F1g/SP+k77yjkub4w6UD1vxj/pO+8qLFPpFLmABoUjCatsTnOdfUWFvSu9Rjj3fAAb7SqtMrRiaTqKqCVwGkLv23J847pKS4J0/SO4Jus96tu+Kb93oPWq+tq3TOzOte1tPMuC5zyZQTy8iicI4Wl9VScZJH+iTaUkzW8SvHbY5ndCemhsLn4R43UhctN9oJdf8MCvFWm4ra3K4xTtdwPq5V0UathFsw0IXSmkLmgnitfovpTrfouFFQTQ6E20GIyGkljJzNIA14jwhyrOafauponPjhc0Nc7MczQ7WzR/II72g+Tyege8ED2zE2je+2hLY3PHDlIBW9HEzQQaq1AyZzZbrVsvM201TXPY2dzSGZi3K0N1IAP3JUm2VXSAwwuYGBziAWBxu43Oqe1iAY3sJ4ZmOZe3GxcBdO1ma5ET3C9rtie4X5dQ1SGOPRW1WnjJfxi7hnkNl4dtBPXSB05aSxmVuVuXQuuU9HtzW07BDG5gYy7W3YCbXPEr03Q2LHNNr2cxzCR5swF0zWZtRE8g8C2J7gfQQ2xRw2aQDVIjyHcVx4Z3A27kzMZmrZHSzEF9mt0GUWF7aesor2Nmayric9wa0XuSbAeCeUoVZYEjKWkWuHNLDrw0IC5YziD4cgbbUa3HMlcxpi0jlSqnXLlBzRRu6K+hG4zTfPxfbb1r13Ypvn4vtt618z93pednQUu70v7nR/VZ33dH6/yW1xMr1G/E/wCF9L92Kb5+L7betN3Zpvn4vtt618093pf3Og9aXd6X9zo/qm/d7PW+SOJleo34lGeKOBmlI1Be8g84zHUK32W2V7dg3zp3MOeRuVrWkWY8tHHXkQhg1U6WPM617kaacLI72CxmCGlDXzxscJZbtc9rTrI61wSrmSXMjGgrJw4GmaRsjQaULarZftGFsonc+8jGFrmtAs8m5uFV4Hh/bVSyDOWBzHuLgAT4GWwsdOVEvZAxqnnpmMjmje7fxHKx7XGwJ1sCh7ZmrZFWxvke1jd1KMzyGi5yWFyo4nyGBxJNhTTQxNymNa3ajsin+zweVv8AsMWf5jldc3Ic5t+F8ri29vUtch2npOBqofTvGdayJrgWuINwXSEHnBkdYpcKSRzzrJTekIY2RBzGgb9iItk9kBXQGZ07mHO9mVrWkeA617nVLazY8UMG+bO55zsZlLWgeG6xNwrHsfYxBDSlr542O3shyue1psXaaErt2Qscp56PJHPE9+9iOVr2uNg/U2BURlm43M1atjHi4d6RdfRCmzOD9u1BhMhjAjL7tAJJDmttr6UWO7G7AD+tSfYYhrYirjhrC6WRsY3LgC9waL52aXPLxWjN2mpLEGqh4afpGdadlyStk9EmkzEgidE0uaCVjMLy5rOQuLRf6TgDp61o/wDZozyqT7DFmlK8BkZJ0BjJPJbeNubrbJtp6TgKqD07xnWn5kkrS3QexMxYYnBxc0H0isvxvC+06vcB5eAI3ZiADdznXFh6B0ozQntVVxy15dG9r25IRmaQ4XzO0uEWFOJJjbqUDmhsjg0UNkkklznmyjnJ4BQSSNjaXO5BKASaC6JLgKcnV7j6BwTGjbyXHrWA77RRXs00rQxHVdqQnUPcSeP96Sl+/wCBJ1Vy7bg+O72LjG07zw9Tbwf/ALnU1cZ23F+Uag8y5U5Urhpc4ke1XeG0bgLonUaCrBHhGxUkEHgQoCCOaeCEyhVRyOBbpfk5F3nqQ0c55lBJdIf/AKwVrEEvEBZz8FHK5tUV6xx2ameecD3grLsTn9DUfX/9TFW4221M8cwHvBSuxe/LHMf8b/rYvQZGuOKNXPb5LOxnVOfZ9V57LP8AdPpS+61W3YwP6i362b8Qqp7LB+SfSl91qn9jN+Wjbzb2X8QqNwvFHtKtA1kn/wBQqTsp/KoPqXfiBF+wB/8A59N9D/k5B/ZT+VQfUu/ECJ9gZLUVP9H/AJORKLxme/6pY3fzD/YEG9kX/wAg76mL73pbGNb2xIXMY/LTOID2hwvvYxex9KXZF/8AIO+pi+96fY34+b/Ku/GjVh+2F7vqqrP+4fvuRP26zyam/hNXalqGOe1ppqexNvimqtUjD/jGelYy3F07dZ5NT/wmpxWMv8mp/wCE1QgnbxCS0IVxiNrKyra1oa0TuAAFgBlbwA4KmkweFxJLTcm58I8qu8f+W1f+Yd7jEVdj3DKaWkDpYI3vMkvhPY1xIEjrC5C3jKIoWmr2C50ROkypQ12ndZ3DhELHBzWm4NxqV2rKFkts4vbhrb0o97IeE08NMx0UEbHb+IZmMa02JNxcBD2yUEcldG2VjXs3UpyuAcLjJY2KVmQHRF9ck2XHkE7WmQ2Qd0N9xIPF/wBxUoQhkeVvADTlWxDZ+jPClg/ht6ljgFmuA4B0gHoEjgAOhLjZDZnEAUkzceSNgLn6t+SrZMOicSSDc8dUo8OiaQQDcajXmWl9jrDKaWlLpYI3u3sozPY1xsH6C5Xvsj4RTw0eeKCNjt7EMzWNabF+ouAozmDiaNPbStdWl4d8Q8rpZrU0jJLFw4cNbLj3Lh5vaUW7A0sUtYWzRtkbuHGzwHC+dgvYrSpNnqOxIpYeHzbepOnyxG/SW2mY+PI+MESEDuWIOp2lmS2lrcf5qP3Lh5vau1Ky7IwdQXRgjkIL2ghbkdnqIamlh/ht6k7IyhFVi7CbjY8jw6n1RWI4fSsjcMo4ubfW/KtKKFtr6eOPEC2JjWMyQnK0BouXOubBFJSPfrY0gUoy0tkcCb8Uz3AAk8ijwDP4Z9QXWpZmaQFHw+T9k+r+a5Tp+WUUwfhPmr2M0FxKnJJJLlVoBJMnSQhR3VTOfoUaoq8wytvqqPD6mSciMeCcxLnAWyxi3C/KSilkYHALocXoQybk/VVJpizZV9ZTFkZc0ZiBct5xy286rH4ixsbJCTZ9wANSCOIPNxRKgraagMLwW/AeS4Dmdpmt7Fq5fRsIaHNHht80YpEjtB5omioidSdPMp0bA0WCZnAegfcvSv42HFALYNz2qlI8km1XbQfJ5PQPeCHdndtIsPEsT4nvLnh4LC21sjRbU+ZEe0A/V5PQPeCz2fD2PcXG9z51otj4kdKKOZkMup/cr7aLbCPEXQtZG9m6znwy3XMALCx8y7bPbeRUUW4dDI8tfIczS0DwnkjibodpqBkbszb385XmTDI3Ek3udeKf1YaNHZdqUZkPGLjdUFc4/tQzEZmPZG5m7jLSHWubvBHBTsC7IsNLBHA6CVxjBaXNLLHwidLlDlLRMjJLb685XE4VGddelIcYFgZ3JG5kIlc83RA7Fb4vj7cQqHTtY5gyMZZ1r+DmN9D51ebG/Hzf5V340aFKWlbHfLfXnRVsb8fN/lXfjRqPKYGYxaP3ukx5GyZoc3kb+SvlNwtovc8Q5tvXe6gKRQfGN9Kwl0CaqaA7Thlb0loJ9q4t4hJJvEJOxCGMe+W1n17vdYvOz+3bKKIwOp5HlskhzNIA8J5cOPpXvH/ltZ9e73WKEuhbG2SJoPcFzL8ngZMhq7Pep20G3jK+NkAgkYd6x+ZxBFm3NtFApMbbQ1Ec7mOeMkjcrbX8LLrr6E6Sc2BrWFg5FRvz9UrZNPLxV/F2WIm/3WbpahaCTPGXWtmL3WPEZnl1vapS8TfBKIoWRkuCTJzTkNDA2t752pezm3MdDEYHQSPIke7M0gDwnXHFXU+PuxqB0EULowx8bi+Rwt4Lr5QG6kkXQfCySU2ijc+3HKCfuUiKmxKK+6bPGDqQ2O4uOXwmlYvSM7WsPVj/ABL2JBIC6vB6PyJAOMwNB73AH4LvRYv3Kq3Olic87t0ZDCOJc03ueSw9qvmdliIadqy6+dqCW1M8sha4mWR1hqPCJPg2sAOYIjGxmIWvuB9odakZlwSNBlvVQuhtY96Yei8nHptNrerd+iGYpckTH2JyljrcpyuDrexHMvZZidxpZbc12qs7zMQ+Yb0jrT95eIfMN6R1qeTMxpCC69vD9VXi6OyYwd2Gzf41XV2NtrqoztY5gtE3K61/BLtdPSjwoVZsfiAN9w3TXiOT1q5ihxI3Pa0bgOIa4X9F7lNdnQ0AL28Ew9FTlzn23s5OCsVBnpDe7U2GYqycltiyRujo3fCBHG3Op6ZkQQ5bKcqckcmO8teKPj+91VuqXMcGl2pFwDyjzc699vP8y9Y1Qb5mmj2nMw8xHJ60PYTVulrA51wSDccl2ssdPSCsKfoZjXgA81ciJewuB5C6V5v385SVpZJWPuCL1/JU+tvQa024aWV/hOI5mlryAW8p0uOtD6V1BBkOhdYtYbJCw2ibuxDe2cemxt0qi2kqWzOa0ahl/C5ybcOhQZWcoXJW35r5WaT5KQ5cg/Ca9it6PHntIElnN8wsQiVjgQCNQdQUCKVSYjJFaziQP2TqLfyUmPmFuz9wliySPxboix/5PJ6B7wQQrLGtsYy18O6eHaC9224gob7sN8U+xdFjuGi1blxZXnU1uysklXd2G+KfYl3YZ4p9in1hRdSn9VWKSre7LfFd7E/dhvin2I1hL1HI9VWSKNh4nPqJWtFyaV1h/wDrGgygxaJzwJAWt1ufu4KzlrKJxB372kC12OkYbaGxLbXGg0VPLeHMLADv4WruDhSslD3CgLWkdxaj5s9I611o8Ina9pMZAB1Nx1rMO3KPyuf+NP1pduUflc/8afrWSMc+P5StxaUMGqPmj0jrSbg1Rf4o9I61morKPyuf+NP1p+3KPyuf+NP1pDjnx/KUKzx/5bWf5h3uMUNRZMRpI2OMb3PcTfUvc4k2BJc5Qe+FniO9i2sd40Ad2265vMwZnTOc0WCbVwkqbvhZ4jvYl3ws8R3sU2oKr1DI9Qq5ULEpNA3xuPoXKLFw4XDD6yFHqKjOQeFuu6yekc+MRujY70l032f6AyjlMmmjpgBIuudbbWt9wKgjp4I2RtDQGjhxJIuSTzqwus2h7KLGtDe13GwAvnHILcyUnZaiGm5sfPIOpY4lZVBbEnR2VZLmH4j/ACqDCmju5a3/ALnfe5bQsAwnHGtxAVjx4OfOQ3XiXaDpWi/2n0vzMv8At602N7QNyrWdhzyOZoYTQR2mQL/ahS/My/7etL+1Cl+al/29ak4re9Uj0dlf0z8FK23zTSRUvbAp43tdI97tA/I5oEd7jxr2uo2K0DKCqhlpZWR5jFG+lbxkEj8rn2vyA3vbkVTtBtlQV0YZLDN4JzMe3KHNPOD/ACUSi2no2zipm7YnlaMrHPEbQ0C9rNbYE6nUqIvbeyvMxpxGAWO2Bsaed/v3diotp53RYhO5hsWzEjp4FG9LOJGNeODgHD1hZ1j9a2oqJJm3DXvLgDx4cqOMDeBTRkmwDBclWujXem9vZzVb7SwBuLDI4U4be6r+asUMxNtiJt5+ksUjEMeBBbFcHxjpp5lSB5BzBxzc/Lrx1U2TlsLgG70btcSzPbDYAuxSMjiMY0zjTTikglJM6+7uVPrRRZ3DZ4zvZ1Ju4UfjO9nUrfcu5iluncxXH68juPwK6HqMHqqoOBR+M72dS5d7sfjO9nUr3cu8Upbl3ilLryfH4FHUYPVVH3ux+M72dSbvdj8Z/s6le7l3ilLcu8UpeLk+PwP+EnUMf1FSN2cpv24mvPjOGvo0XrvcpPJ4+g9auNy7mKW5dzFHFy+wu81Za0NFDkqfvco/J4+g9aXe3R+Ts6D1q43TuYp9y7xSk4uZ3v8ANOVP3t0nk8fQetN3t0nk7Og9audy7xSluXeKUcXL73+aFTd7lJ5PH0HrS726PydnQetXO5d4pS3LvFKXi5fe/wA0FU3e3SeTs6D1pu9uk8nZ0f1VzuXcxT7l3ilJxcvvd5o3VN3t0nk7Oj+qbvbpPJ2dB61dbl3ilLcu8Uo4uX3v80KmGzdJ5OzoPWn73KTydnQetXG5d4pS3LvFKOLl97vNCpu9yj8nj6D1p27M0ZIHa7NdOB61b7l3MV7ihdcaHiPvRxMs7an+aVo3C6s2bpZNXwN0AA5NBoOCd2ylEBcwNt6T1r1hWG2hbnfK02NxvHNA1PIDoqTEtosKBdFJVvk5Hta+WVvocW3C6DGgEcQbz8TzK1H5MgfQkIAPYu4wejdS9sx0rTpdrS4i4zZePJpqpdJszh8rcwp28xDr5mkcWu10Kjsjoq2mk7Sexzg05cjjma4agFpPg34ajlV86ha457vY4gB2R2W9hy8hI51MG+CJMkubu88zzKpIdl6PtiRu4bYRxEC5sLukvy+YKsx52F0bxG+nL32BLWcgPC93cfMr+HD/ANYkG9m+Li/9hv8ACl8yqcU2SkNU2piLZCLEsnc74bRZrrgG4GmnmSPZtYCkxMga6kkNV2Gt/aqqursPgcGzUMjHFocA4gGzuB+GvBxTDQxrzRSBriQ11xYlvwgPD5Lq+fQV7jnMdLnyhhdmfqBvLaOabavJ9QVdjmOGmtHUGiYdf0ed7nah3hBjWXadePLZR0f2FbGS2hbjfb/E+SguxTDAwSGjkDHOLWm7dS3iB4d9FzOOYV5HJ0j8ynYXj4qnbuI0TnWIEZfI11idbNcwX0y8OYKylwutfbNHTE+Dc5nDNl4teAzwm6nTkQWn9hOblM7XH/c/RVuD1eFVMgiFOWOdo3NwJte1w7QqZj2HHLuYQGtabWJ5BwHSudVs7UunFXKImiFuZkcZLrlpJAJIGl1cTtc5xdlOtj0gFUst8jGgsG99x5LL6XayeMNa4lp5+ldH2oP7gzfu/a/ol3Bm/d+1/RFu6dzHoS3TuY9CpdayfV8lzf3TB4/FCXcCb937X9E6LN07mPQkjrWV6vkj7pg8firJJME66Ra6SSSSLQkkkki0JJJJItCSSSSLQkkkki0JJJJItCSSSSLQkkkki0JJJJItCZDu2GNS0jYjFlu55vmGbRtjb13REqrHsFZVta17nN3br3bbW+hGqbIDp2VnEdG2VplFt/RVm09S+unZRB7o6ZsPbFZIy4uziIg/7/T5kKUm1FZKXR4RQsZBFyNhEji3nkJPE24cVpMmEMdDNCzwd7E5l9TbwSLrLdgdve47JoZIN6HPzAtdlIeBlsSRq3QedOUB5kqbhuIdvtkqII202JUrd5eIZWTsGj2vZynkI69NSwTFmVNPFN8AyMDixxsWn9ppB5jdZj2Ks1RW1dY6wu15LG8LzvzG3mFloXcyLxfaUJFLhmb2zIcwtu4tbi3wpesKb2wzx29I61T9zIvF9pS7mReL7ShC47aYzJBAG03hTzPbDFbwg0v4vNr2AHtss/rsR7nz9pUEAnqzbf1Ejd7I+QjMWtHm6AtJgoI2uDg3UHnKzHFMTODY3LOWiVrruLb2OScXsCRo4EdCELpDjDqqcUOL0zY5HECOdjNzLE92jHacQTpcaelGGz+OVEMZgqml8sL3R7w+DvGttlfbnsePKgWtxzu7itM5rNy0OYxoJu6zHbwlxA48QFrNWxr3kloPpAKRKqvE8XE8MkJYQJGlpIOouLXFwu+GVYcAy1srQBc3uALKT2uzxG9ATspmXuGgepFI1GtPYuiSdMlTUkk6SVC//9k=" alt="">
        <form class="row g-3" method="post" id="add">
         <strong class="bm">Book Medicines</strong>
           <div class="col-md-4">
              <label for="inputState" class="form-label">Medicine Available</label>
              <select id="inputState" class="form-select" name="medicine_name" id="mname" required>
                <option selected>Choose...</option>
                <option>abatacept</option>
                <option>abciximab-injection</option>
                <option>Abilify (aripiprazole)</option>
                <option>acarbose</option>
                <option>AccuNeb (albuterol)</option>
                <option>ACE Inhibitors</option>
                <option>ACETAMINOPHEN-ORAL</option>
                <option>acetazolamide-oral</option>
                <option>Aspirin (acetylsalicylic acid)</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputZip" class="form-label"> Count of Medicine </label>
              <input type="number" class="form-control" name="medicine_count" id="mcount" placeholder="Enter Count" required>
            </div>
            <div class="col-12">
              <label for="inputZip" class="form-label"> Address </label>
              <input type="textarea" class="form-control" name="address" id="address" placeholder="Full Address" required>
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Available Stores</label>
              <select id="inputState" class="form-select" name="medicine_store" id="mname" required>
                <option selected>Choose...</option>
                <option>Medplus</option>
                <option>Drug House</option>
                <option>ShamMedicles</option>
                <option>Homeopathy Pharmacy</option>
                <option>Srinidhi Stores</option>
              </select>
            </div>
            <div class="col-12">
              <label for="patient" class="form-label">Patient Name</label>
              <input type="text" class="form-control" name="patient_name" id="pname" placeholder="Enter Patient Name" required>
            </div>
            
                <input type="submit"  class="btn btn-primary" value="Book Now" name="submit">
               

            
          </form><br>
    
          
          </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
    </html>  
