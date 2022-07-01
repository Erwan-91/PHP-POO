<!doctype html>
<html lang="fr">

<head>
    <title>Les propriétés et les méthodes statiques - cours programmation orienté objet</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">POO : La programmation orientée objet</h1>
            <p class="lead">Les propriétés et les méthodes statiques</p>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="text-center">Introduction</h2>
                <p>Les propriétés et méthodes statiques sont particulières, en effet ces dernières n'ont pas besoin d'être appliquées sur l'instanciation de notre classe, elles vont y être directement liées. Dès que l'on aura un nouvel objet, il porfitera de la méthode, mais la nomenclature sera différente </p>


                <h3 class="texte-secondary texte-center">Qans quel cas l'utiliser ?</h3>
                <p>Définition : Instancier c'est faire un nouvel objet, une classe et on fait un <code>new=</code></p>



                <p>Les méthodes et propriétés statiques sont pratiques dans certains cas uniquement. Premièrement lorsque l'on veut qu'une méthode soit appliquée à notre classe, comme lors du formatage d'un nombre <br>
                    Exemple: Lorsque l'on rajoute un zéro initial quand le chiffre est inférieur à 10. <br>
                    On ne voudra pas dire à chaque fois <code>$machin= new Machin;</code>puis <code>$machin->format()</code>car ce code est trop lourd et il existe plus simple. On cherche en fait à ce que dès que l'instanciation est faite, le format soit automatiquement appelé.</p>


                <p>La façon d'instancier une classe qui possède une méthode statique serz différente : <code>class:: methode()</code>. On utilisera alors pour appeler la méthode deux fois deux points <em>et non plus la flèche</em>.</p>




            </div>
            <!-- fin col 12 -->


        </div>

    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>