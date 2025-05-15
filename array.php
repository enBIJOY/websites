<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
</head>
<body>
    <h1> Recommended Books </h1>

    <?php
        $books = [
            "Java for everyone how care",
            "Php is srcipt",
            "99 ways how to talk"
        ];
    ?>

    <ul>
        <?php
        foreach($books as $book) {
            echo "<li>" ."$book". "</li>";
        }
        ?>
        
    </ul>


    <h1>Your Mobiles</h1>
    <?php
        $mobiles = [
            "Apple i-phone 13", "Samsung Galaxy note 23", "Google Pixel 7pro", "iqoo z9", "Xiomi 13", "Nokia 206"
        ];

        /*foreach ($mobiles as $Mobile) {
            echo "<li> $Mobile </li>";
        }*/
/*
       // for($mobiles = 1; $mobiles <= s ; i++){
            if($mobiles > 10){
                break;
            }
            */

            for($i = 1; $i < count ($mobiles) ; $i++){
            echo "<li> {$mobiles[$i]} </li>";
        }
    ?>


        <h1> Grooserys items list </h1>
        <?php
            $groos = [
                "Poteto", "Garlig", "Alach", "Fish", "DeshiMula", "Chiken", "Egg", "Salt"
            ];

            for ($i = 1; $i < count($groos); $i++){
                echo "<li> {$groos[$i]} </li>";
            }
        ?>


        <h1> Medicine Items </h1>
        <?php
        $Medicine = [
            "Histacine","Paracitamal","Mirtaz","Thyrox25","esolok20","OrsSalayen"
        ];

        $i = 1;
        while ($i < count ($Medicine)){
            echo "<li> {$Medicine[$i]} </li>";
            $i++;
        }
    
        ?>



        <!-- Associative Arrays -->


        <h1> Grooserys and Medicine items list </h1>
        <?php
        $grMed = [
            [
                'name' =>'poteto',
                'find' =>'Vegitable Market',
                'price' =>'20-30tk per kg'
            ],
            [
                'name' =>'paracitamal',
                'find' =>'Medical shop',
                'price' =>'12 tk per stripe'
            ]
        ]
        ?>
        <ul>
        <?php foreach ($grMed as $grmd): ?>
            <li>
            <?= $grmd ['find']; ?>
            </li>
         <?php endforeach; ?>
        </ul>




        <h1> Compponents </h1>

        <?php
        $compo = [[
            'name' => 'mouse',
            'find' => 'startek',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'key-board',
            'find' => 'rayans',
            'purchaseUrl' => 'http://example.com'
        ]
        ]
        ?>
        <ul>
            <?php foreach($compo as $comp): ?>
                <li>
                    <a href="<?= $comp['purchaseUrl']?>">
                    <?= $comp ['find']; ?>
                    </a>
                </li>
                <?php endforeach; ?>

</body>
</html>