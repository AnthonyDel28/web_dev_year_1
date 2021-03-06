<?php
// 1. manipulations des tableaux multidimensionnels

// 1.1 Inclure le fichier "members-array.php"
// 1.2 Affichez son contenu dans un tableau HTML.
// 1.3 La première colonne du tableau contiendra une numérotation.
// 1.4 Les membres seront affichés par ordre alphabétique (sur le nom de famille).
// 1.5 Les en-têtes du tableau (titres) seront également affichés à l'aide d'une boucle.
// 1.6 Mettre une majuscule aux étiquettes (fonction en PHP)
// 1.7 Colorier l'arrière plan d'une ligne sur deux.  Utiliser l'opérateur Modulo en PHP.

include('./sources/members-array.php');
// require('./sources/members-array.php');

?>

<body>
    <table>
        <thead>
            <tr>
                <?php 
                    print "<th>N.</th>";
                    foreach($members as $tab)
                    {
                        foreach($tab as $key => $value)
                        {
                            print "<th>".ucfirst($key)."</th>";
                        }
                        break;
                    }   
                ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                    $index = 1;
                    asort($members);
                        foreach($members as $tab){
                                if($index % 2 == 1)
                                    print "<tr class='line_even'>";
                                else
                                    print "<tr class='line_odd'>";
                                    print "<td>" .$index. "</td>";
                                foreach($tab as $key => $value){
                                    print "<td>" .$value . "</td>";
                                }
                                $index++;
                            print "</tr>";
                        }
                ?>
            </tr>
        </tbody>
    </table>
</body>

<style>



td {
    border: 1px solid #333;
    padding: 5px 5px;
}

th {
    background-color: #333;
    color: #fff;
    padding: 5px 5px;
}

.line_even {
    background-color: #CACBCB;
}

.line_odd {
    background-color: #fff;
}

table {
    text-align: center;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 11px;
    font-family: sans-serif;
    box-shadow: 0 0 25px rgba(0, 0, 0, 0.15);
    margin-left: auto;
    margin-right: auto;
}


</style>
