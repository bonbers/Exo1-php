<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8">
      <title>Premier pas en PHP</title>
    </head>

    <body>

      <p>Ceci est du HTML</p>

      <p><?php echo "Ceci est du php !!s";?>

      <p><?php
      $nom = "Romain";
      echo $nom;
      ?></p>

      <p><?php
       $nom = "Tintin";
       $age = "45";
       $prenom = "zebulon";
       echo "Je m'appelle ";
       echo $nom;
       echo ". J'ai ";
       echo $age;
       echo " ans";
       echo " Mon nom est ";
       echo $prenom;
       ?>

       <p><?php
       $km = 1;
       echo $km;
        ?></p>

        <p><?php
        $int = 100;
        $name = "Tarzan";
        $bool = 55.5;
        $float= true;

        echo $int;
        echo $name;
        echo $bool;
        echo $float;
         ?></p>

         <p><?php
        $int = 250;
        echo $int;
          ?></p>

          <p><?php
         $name = "tintin";
         echo "Bonjour " . $name . " ,comment vas tu ?";
           ?></p>

           <p><?php
           $name = " tintin";
           $age = 25;
           $prenom = "zebulon";
           echo "Bonjour $name $prenom ,tu as $age ans";
            ?></p>

            <p><?php
             $nombre1 = 3 + 4;
             $nombre2 = 5 * 20;
             $nombre3 = 45 / 5;
             echo "$nombre1 $nombre2 $nombre3";
             ?></p>

    </body>

</html>
