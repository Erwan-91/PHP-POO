<!doctype html>
<html lang="fr">

<head>
    <title>Visibilité - cours programmation orienté objet</title>
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
            <p class="lead">La visibilité</p>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="text-center">Introduction</h2>
                <p>La visibilité représente la portée de nos propriétés et de nos méthodes, elle définie à quel moment on pourra y accéder et à quel moment celà nous sera impossible </p>
                <h3 class="texte-secondary texte-center">La visibilité <code>public</code></h3>
                <p>La visibilité public est celle que l'on utilise par défaut au sein de nos classes. Elle va permettre de définir qu'une propriété ou une méthode est accessible dans la classe en faisant <code>$this</code> mais aussi sur une page externe lorsque l'on fait un require de notre classe, comme on a pu le faire pour accéder à nos differents fichiers </p>
                <h3 class="texte-secondary texte-center">La visibilité <code>public</code></h3>
                <p>La visibilité privée ou <code>private</code> signifie que la propriété est accessible dans la classe mais pas en dehors, on ne pourra donc pas faire appel directement à notre propriété dans une page externe. C'est pour cette raison que les <code>getters</code> et <code>setters</code> font leur apparition. Les getters vont permettre d'afficher le contenu d'une propriété ayant la visibilité private. La construction de ce gette, qui va permettre aux autres développeurs de savoir ce qu'ils  peuvent changer ou pas. Elle se fera toujours de la même façon : <code>getNomvariable</code> suivi de <code>return $this-> nomvariable</code>. On verra cela plus en détail lorsque l'on abordera Symfony.  </p>
                
                <h3 class="texte-secondary texte-center">La visibilité <code>protected</code></h3>
                <p>Lorsqu'une variable a la visibilitée "protégée" ou <code>protected</code> on a à peut près le même champs d'action qu'une visibilité private. En revanche cette visibilité est légèrement moins stricte car on peut réutiliser la propriété protégée lorsque l'on hérite de la classe sur laquelle elle est déclarée. Nous verrons la notion d'héritage un peu plus tard</p>


            </div>
            <!-- fin col 12 -->
            <div class="col-12">
                <h2 class="text-center">Mais pourquoi choisir une autre chose que Public ?</h2>
                <p>Les notions de public, privée et protégée ne sont pas nécessaires à 100% lorsque l'on travaille seul. Cependant, si notre code a vocation d'être vu par d'autres développeurs, ou si l'on a besoin d'être debugger, il faudra bien définir les propriétés pour que les personnes qui passent derrière comprennent ce qui peut être modifié ou pas  </p>
                <p>Généralement dans les codes déstinés à la relecture par d'autres, on trouvera toutes les propriétés en private et des getters et setters pour y accéder. De la même façon qu'un getters récupère une information (ex:comme le nom, la vie ou encore des points d'attaque), un setter permet de donner ou modifier une valeur. Les getters et setters serviront de garde fou pour éviter les modifications intempestives du code </p>
            </div>
            <!-- fin col 12 -->
            
           
        </div>
        
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>