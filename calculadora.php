</head>
<body>
    <form action=# method=get>

    Número: <input type=tex name=num required>
    <input type=submit name=botao>
</form>
<?php
if (@$_REQUEST['botao']){
    $num = $_GET['num'];
    $contador = 1;

    while ($contador <= 10) {
        echo $num . "x" . $contador . " = ". $num * $contador . "<br>"; 
        $contador++;
    }
}
