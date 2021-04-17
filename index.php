<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <form class="mt-5 needs-validation-Rango" method="POST" action="./">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Rango</label>
                        <input type="text" class="form-control" id="rango" name="rango">
                        <small id="emailHelp" class="form-text text-muted">validara el a que desea llegar y arrojara todos los resultados</small>
                    </div>
                    <button class="btn btn-primary" id="rang">Correr</button>
                </form>
            </div>
        </div>

        <table class="table text-center mt-5" id="datos">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">REFERENCIAS</th>
                    <th scope="col">REFERENCIAS CON DIGITO</th>
                    <th scope="col">LONGITUD CON DIGITO</th>
                </tr>
            </thead>
            <tbody>
                
                <?php digitoVerificador($_POST['rango']); ?>

                    
            </tbody>
        </table>
    </div>
</body>

</html>

<?php 

 function digitoVerificador($rango){ 

    $longitud = str_split($rango);

    $resid1 = fmod(strlen($rango), 2) == 0  ? 1 : 2; //residuo & # caracter
    $resid2 = $resid1 == 1 ? 2 : 1;
    $resid3 = $resid2 == 1 ? 2 : 1;
    $resid4 = $resid3 == 1 ? 2 : 1;
    $resid5 = $resid4 == 1 ? 2 : 1;
    $resid6 = $resid5 == 1 ? 2 : 1;
    $resid7 = $resid6 == 1 ? 2 : 1;
    $resid8 = $resid7 == 1 ? 2 : 1;
    $resid9 = $resid8 == 1 ? 2 : 1;
    $resid10 = $resid9 == 1 ? 2 : 1;
    $resid11 = $resid10 == 1 ? 2 : 1;
    $resid12 = $resid11 == 1 ? 2 : 1;
    $resid13 = $resid12 == 1 ? 2 : 1;
    $resid14 = $resid13 == 1 ? 2 : 1;
    $resid15 = $resid14 == 1 ? 2 : 1;
    $resid16 = $resid15 == 1 ? 2 : 1;
    $resid17 = $resid16 == 1 ? 2 : 1;
    $resid18 = $resid17 == 1 ? 2 : 1;
    $resid19 = $resid18 == 1 ? 2 : 1;
    $resid20 = $resid19 == 1 ? 2 : 1;
    $resid21 = $resid20 == 1 ? 2 : 1;
    $resid22 = $resid21 == 1 ? 2 : 1;
    $resid23 = $resid22 == 1 ? 2 : 1;
    $resid24 = $resid23 == 1 ? 2 : 1;
    $resid25 = $resid24 == 1 ? 2 : 1;
    $resid26 = $resid25 == 1 ? 2 : 1;
    $resid27 = $resid26 == 1 ? 2 : 1;
    $resid28 = $resid27 == 1 ? 2 : 1;
    $resid29 = $resid28 == 1 ? 2 : 1;
    $resid30 = $resid29 == 1 ? 2 : 1;

    if($longitud[0] == "P" || $longitud[0] == "p") {
        $longitud[0] = 7;
    }else{
        $longitud[0];
    }
    ?>
    <tr>
        <td><?=$rango;?></td>
        <?php 
    
            if( strlen($longitud[0]*$resid1)==1 ){
            $val1 = $longitud[0]*$resid1 ;
            }elseif( substr($longitud[0]*$resid1, 0, 1)+substr($longitud[0]*$resid1, 1, 1)>9 ){
            $val1 = substr($longitud[0]*$resid1, 0, 1) + substr($longitud[0]*$resid1, 1, 1)-9;
            }else{
            $val1 = substr($longitud[0]*$resid1, 0, 1) + substr($longitud[0]*$resid1, 1, 1);;
            }
    

            if( strlen($longitud[1]*$resid2)==1 ){
            $val2 = $longitud[1]*$resid2;
            }elseif( substr($longitud[1]*$resid2, 0, 1)+substr($longitud[1]*$resid2, 1, 1)>9 ){
            $val2 = substr($longitud[1]*$resid2, 0, 1) + substr($longitud[1]*$resid2, 1, 1)-9;
            }else{
            $val2 = substr($longitud[1]*$resid2, 0, 1) + substr($longitud[1]*$resid2, 1, 1);;
            }
    

            if( strlen($longitud[2]*$resid3)==1 ){
            $val3 = $longitud[2]*$resid3 ;
            }elseif( substr($longitud[2]*$resid3, 0, 1)+substr($longitud[2]*$resid3, 1, 1)>9 ){
            $val3 = substr($longitud[2]*$resid3, 0, 1) + substr($longitud[2]*$resid3, 1, 1)-9;
            }else{
            $val3 = substr($longitud[2]*$resid3, 0, 1) + substr($longitud[2]*$resid3, 1, 1);;
            }
    

            if( strlen($longitud[3]*$resid4)==1 ){
            $val4 = $longitud[3]*$resid4 ;
            }elseif( substr($longitud[3]*$resid4, 0, 1)+substr($longitud[3]*$resid4, 1, 1)>9 ){
            $val4 = substr($longitud[3]*$resid4, 0, 1) + substr($longitud[3]*$resid4, 1, 1)-9; 
            }else{
            $val4 = substr($longitud[3]*$resid4, 0, 1) + substr($longitud[3]*$resid4, 1, 1);
            }
    

            if( strlen($longitud[4]*$resid5)==1 ){
            $val5 = $longitud[4]*$resid5 ;
            }elseif( substr($longitud[4]*$resid5, 0, 1)+substr($longitud[4]*$resid5, 1, 1)>9 ){
            $val5 = substr($longitud[4]*$resid5, 0, 1) + substr($longitud[4]*$resid5, 1, 1)-9; 
            }else{
            $val5 = substr($longitud[4]*$resid5, 0, 1) + substr($longitud[4]*$resid5, 1, 1);
            }
    

            if( strlen($longitud[5]*$resid6)==1 ){
            $val6 = $longitud[5]*$resid6 ;
            }elseif( substr($longitud[5]*$resid6, 0, 1)+substr($longitud[5]*$resid6, 1, 1)>9 ){
            $val6 = substr($longitud[5]*$resid6, 0, 1) + substr($longitud[5]*$resid6, 1, 1)-9; 
            }else{
            $val6 = substr($longitud[5]*$resid6, 0, 1) + substr($longitud[5]*$resid6, 1, 1);
            }
    

            if( strlen($longitud[6]*$resid7)==1 ){
            $val7 = $longitud[6]*$resid7 ;
            }elseif( substr($longitud[6]*$resid7, 0, 1)+substr($longitud[6]*$resid7, 1, 1)>9 ){
            $val7 = substr($longitud[6]*$resid7, 0, 1) + substr($longitud[6]*$resid7, 1, 1)-9; 
            }else{
            $val7 = substr($longitud[6]*$resid7, 0, 1) + substr($longitud[6]*$resid7, 1, 1);
            }
    

            if( strlen($longitud[7]*$resid8)==1 ){
            $val8 = $longitud[7]*$resid8 ;
            }elseif( substr($longitud[7]*$resid8, 0, 1)+substr($longitud[7]*$resid8, 1, 1)>9 ){
            $val8 = substr($longitud[7]*$resid8, 0, 1) + substr($longitud[7]*$resid8, 1, 1)-9; 
            }else{
            $val8 = substr($longitud[7]*$resid8, 0, 1) + substr($longitud[7]*$resid8, 1, 1);
            }
    

            if( strlen($longitud[8]*$resid9)==1 ){
            $val9 = $longitud[8]*$resid9 ;
            }elseif( substr($longitud[8]*$resid9, 0, 1)+substr($longitud[8]*$resid9, 1, 1)>9 ){
            $val9 = substr($longitud[8]*$resid9, 0, 1) + substr($longitud[8]*$resid9, 1, 1)-9; 
            }else{
            $val9 = substr($longitud[8]*$resid9, 0, 1) + substr($longitud[8]*$resid9, 1, 1);
            }
    

            if( strlen($longitud[9]*$resid10)==1 ){
            $val10 = $longitud[9]*$resid10 ;
            }elseif( substr($longitud[9]*$resid10, 0, 1)+substr($longitud[9]*$resid10, 1, 1)>9 ){
            $val10 = substr($longitud[9]*$resid10, 0, 1) + substr($longitud[9]*$resid10, 1, 1)-9; 
            }else{
            $val10 = substr($longitud[9]*$resid10, 0, 1) + substr($longitud[9]*$resid10, 1, 1);
            }
    

            if( strlen($longitud[10]*$resid11)==1 ){
            $val11 = $longitud[10]*$resid11 ;
            }elseif( substr($longitud[10]*$resid11, 0, 1)+substr($longitud[10]*$resid11, 1, 1)>9 ){
            $val11 = substr($longitud[10]*$resid11, 0, 1) + substr($longitud[10]*$resid11, 1, 1)-9; 
            }else{
            $val11 = substr($longitud[10]*$resid11, 0, 1) + substr($longitud[10]*$resid11, 1, 1);
            }
    
            if( strlen($longitud[11]*$resid12)==1 ){
            $val12 = $longitud[11]*$resid12 ;
            }elseif( substr($longitud[11]*$resid12, 0, 1)+substr($longitud[11]*$resid12, 1, 1)>9 ){
            $val12 = substr($longitud[11]*$resid12, 0, 1) + substr($longitud[11]*$resid12, 1, 1)-9; 
            }else{
            $val12 = substr($longitud[11]*$resid12, 0, 1) + substr($longitud[11]*$resid12, 1, 1);
            }
    

            if( strlen($longitud[12]*$resid13)==1 ){
            $val13 = $longitud[12]*$resid13 ;
            }elseif( substr($longitud[12]*$resid13, 0, 1)+substr($longitud[12]*$resid13, 1, 1)>9 ){
            $val13 = substr($longitud[12]*$resid13, 0, 1) + substr($longitud[12]*$resid13, 1, 1)-9; 
            }else{
            $val13 = substr($longitud[12]*$resid13, 0, 1) + substr($longitud[12]*$resid13, 1, 1);
            }
    

            if( strlen($longitud[13]*$resid14)==1 ){
            $val14 = $longitud[13]*$resid14 ;
            }elseif( substr($longitud[13]*$resid14, 0, 1)+substr($longitud[13]*$resid14, 1, 1)>9 ){
            $val14 = substr($longitud[13]*$resid14, 0, 1) + substr($longitud[13]*$resid14, 1, 1)-9; 
            }else{
            $val14 = substr($longitud[13]*$resid14, 0, 1) + substr($longitud[13]*$resid14, 1, 1);
            }
    

            if( strlen($longitud[14]*$resid15)==1 ){
            $val15 = $longitud[14]*$resid15 ;
            }elseif( substr($longitud[14]*$resid15, 0, 1)+substr($longitud[14]*$resid15, 1, 1)>9 ){
            $val15 = substr($longitud[14]*$resid15, 0, 1) + substr($longitud[14]*$resid15, 1, 1)-9; 
            }else{
            $val15 = substr($longitud[14]*$resid15, 0, 1) + substr($longitud[14]*$resid15, 1, 1);
            }
    

            if( strlen($longitud[15]*$resid16)==1 ){
            $val16 = $longitud[15]*$resid16 ;
            }elseif( substr($longitud[15]*$resid16, 0, 1)+substr($longitud[15]*$resid16, 1, 1)>9 ){
            $val16 = substr($longitud[15]*$resid16, 0, 1) + substr($longitud[15]*$resid16, 1, 1)-9; 
            }else{
            $val16 = substr($longitud[15]*$resid16, 0, 1) + substr($longitud[15]*$resid16, 1, 1);
            }
    

            if( strlen($longitud[16]*$resid17)==1 ){
            $val17 = $longitud[16]*$resid17 ;
            }elseif( substr($longitud[16]*$resid17, 0, 1)+substr($longitud[16]*$resid17, 1, 1)>9 ){
            $val17 = substr($longitud[16]*$resid17, 0, 1) + substr($longitud[16]*$resid17, 1, 1)-9; 
            }else{
            $val17 = substr($longitud[16]*$resid17, 0, 1) + substr($longitud[16]*$resid17, 1, 1);
            }
    

            if( strlen($longitud[17]*$resid18)==1 ){
            $val18 = $longitud[17]*$resid18 ;
            }elseif( substr($longitud[17]*$resid18, 0, 1)+substr($longitud[17]*$resid18, 1, 1)>9 ){
            $val18 = substr($longitud[17]*$resid18, 0, 1) + substr($longitud[17]*$resid18, 1, 1)-9; 
            }else{
            $val18 = substr($longitud[17]*$resid18, 0, 1) + substr($longitud[17]*$resid18, 1, 1);
            }
    

            if( strlen($longitud[18]*$resid19)==1 ){
            $val19 = $longitud[18]*$resid19 ;
            }elseif( substr($longitud[18]*$resid19, 0, 1)+substr($longitud[18]*$resid19, 1, 1)>9 ){
            $val19 = substr($longitud[18]*$resid19, 0, 1) + substr($longitud[18]*$resid19, 1, 1)-9; 
            }else{
            $val19 = substr($longitud[18]*$resid19, 0, 1) + substr($longitud[18]*$resid19, 1, 1);
            }
    

            if( strlen($longitud[19]*$resid20)==1 ){
            $val20 = $longitud[19]*$resid20 ;
            }elseif( substr($longitud[19]*$resid20, 0, 1)+substr($longitud[19]*$resid20, 1, 1)>9 ){
            $val20 = substr($longitud[19]*$resid20, 0, 1) + substr($longitud[19]*$resid20, 1, 1)-9; 
            }else{
            $val20 = substr($longitud[19]*$resid20, 0, 1) + substr($longitud[19]*$resid20, 1, 1);
            }
    

            if( strlen($longitud[20]*$resid21)==1 ){
            $val21 = $longitud[20]*$resid21 ;
            }elseif( substr($longitud[20]*$resid21, 0, 1)+substr($longitud[20]*$resid21, 1, 1)>9 ){
            $val21 = substr($longitud[20]*$resid21, 0, 1) + substr($longitud[20]*$resid21, 1, 1)-9; 
            }else{
            $val21 = substr($longitud[20]*$resid21, 0, 1) + substr($longitud[20]*$resid21, 1, 1);
            }
    
            if( strlen($longitud[21]*$resid22)==1 ){
            $val22 = $longitud[21]*$resid22 ;
            }elseif( substr($longitud[21]*$resid22, 0, 1)+substr($longitud[21]*$resid22, 1, 1)>9 ){
            $val22 = substr($longitud[21]*$resid22, 0, 1) + substr($longitud[21]*$resid22, 1, 1)-9; 
            }else{
            $val22 = substr($longitud[21]*$resid22, 0, 1) + substr($longitud[21]*$resid22, 1, 1);
            }
    

            if( strlen($longitud[22]*$resid23)==1 ){
            $val23 = $longitud[22]*$resid23 ;
            }elseif( substr($longitud[22]*$resid23, 0, 1)+substr($longitud[22]*$resid23, 1, 1)>9 ){
            $val23 = substr($longitud[22]*$resid23, 0, 1) + substr($longitud[22]*$resid23, 1, 1)-9; 
            }else{
            $val23 = substr($longitud[22]*$resid23, 0, 1) + substr($longitud[22]*$resid23, 1, 1);
            }
    

            if( strlen($longitud[23]*$resid24)==1 ){
            $val24 = $longitud[23]*$resid24 ;
            }elseif( substr($longitud[23]*$resid24, 0, 1)+substr($longitud[23]*$resid24, 1, 1)>9 ){
            $val24 = substr($longitud[23]*$resid24, 0, 1) + substr($longitud[23]*$resid24, 1, 1)-9; 
            }else{
            $val24 = substr($longitud[23]*$resid24, 0, 1) + substr($longitud[23]*$resid24, 1, 1);
            }
    

            if( strlen($longitud[24]*$resid25)==1 ){
            $val25 = $longitud[24]*$resid25 ;
            }elseif( substr($longitud[24]*$resid25, 0, 1)+substr($longitud[24]*$resid25, 1, 1)>9 ){
            $val25 = substr($longitud[24]*$resid25, 0, 1) + substr($longitud[24]*$resid25, 1, 1)-9; 
            }else{
            $val25 = substr($longitud[24]*$resid25, 0, 1) + substr($longitud[24]*$resid25, 1, 1);
            }
    

            if( strlen($longitud[25]*$resid26)==1 ){
            $val26 = $longitud[25]*$resid26 ;
            }elseif( substr($longitud[25]*$resid26, 0, 1)+substr($longitud[25]*$resid26, 1, 1)>9 ){
            $val26 = substr($longitud[25]*$resid26, 0, 1) + substr($longitud[25]*$resid26, 1, 1)-9; 
            }else{
            $val26 = substr($longitud[25]*$resid26, 0, 1) + substr($longitud[25]*$resid26, 1, 1);
            }
    

            if( strlen($longitud[26]*$resid27)==1 ){
            $val27 = $longitud[26]*$resid27 ;
            }elseif( substr($longitud[26]*$resid27, 0, 1)+substr($longitud[26]*$resid27, 1, 1)>9 ){
            $val27 = substr($longitud[26]*$resid27, 0, 1) + substr($longitud[26]*$resid27, 1, 1)-9; 
            }else{
            $val27 = substr($longitud[26]*$resid27, 0, 1) + substr($longitud[26]*$resid27, 1, 1);
            }
    

            if( strlen($longitud[27]*$resid28)==1 ){
            $val28 = $longitud[27]*$resid28 ;
            }elseif( substr($longitud[27]*$resid28, 0, 1)+substr($longitud[27]*$resid28, 1, 1)>9 ){
            $val28 = substr($longitud[27]*$resid28, 0, 1) + substr($longitud[27]*$resid28, 1, 1)-9; 
            }else{
            $val28 = substr($longitud[27]*$resid28, 0, 1) + substr($longitud[27]*$resid28, 1, 1);
            }
    

            if( strlen($longitud[28]*$resid29)==1 ){
            $val29 = $longitud[28]*$resid29 ;
            }elseif( substr($longitud[28]*$resid29, 0, 1)+substr($longitud[28]*$resid29, 1, 1)>9 ){
            $val29 = substr($longitud[28]*$resid29, 0, 1) + substr($longitud[28]*$resid29, 1, 1)-9; 
            }else{
            $val29 = substr($longitud[28]*$resid29, 0, 1) + substr($longitud[28]*$resid29, 1, 1);
            }
    

            if( strlen($longitud[29]*$resid30)==1 ){
            $val30 = $longitud[29]*$resid30 ;
            }elseif( substr($longitud[29]*$resid30, 0, 1)+substr($longitud[29]*$resid30, 1, 1)>9 ){
            $val30 = substr($longitud[29]*$resid30, 0, 1) + substr($longitud[29]*$resid30, 1, 1)-9; 
            }else{
            $val30 = substr($longitud[29]*$resid30, 0, 1) + substr($longitud[29]*$resid30, 1, 1);
            }
    

            $sumatoria = $val1 + $val2 + $val3 + $val4 + $val5 + $val6 + $val7 + $val8 + $val9 + $val10 + $val11 + $val12 + $val13 + $val14 + $val15 + $val16 + $val17 + $val18 + $val19 + $val20 + $val21 + $val22 + $val23 + $val24 + $val25 + $val26 + $val27 + $val28 + $val29 + $val30 ;

            if(strlen($sumatoria)>2){
            $separarDigito = substr($sumatoria, 1, 1).substr($sumatoria, 2, 1) ;
            }else{
            $separarDigito = $sumatoria ;
        }; 
    

            if($separarDigito>10){
            $diditoPrev = (substr($separarDigito, 0, 1)*10)-($separarDigito-10) ;
            }else{
            $diditoPrev = 10-$separarDigito;
        };
    

            if($diditoPrev<10){
            $verifi = $diditoPrev;
            }else{
            $verifi = 0;
        };
        ?>

        <td>
            <?=$canDig=$rango.$verifi?>
        </td>

        <td>
            <?=strlen($canDig)?>
        </td>

    </tr>

 <?php  } ?>