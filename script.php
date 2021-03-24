<?php
class Articulo {
    public $id;
    public $categoria;
    public $nombre;
    public $precio;

    public function __construct($id, $categoria, $nombre, $precio)
    {
        $this->id = $id;
        $this->categoria = $categoria;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
}
?>
<?php
$a1 = new Articulo(1, "Navideños", "Sombrero", 300);
$a2 = new Articulo(2, "Verano", "Peluche", 100);
$a3 = new Articulo(3, "Navideños", "Llavero santa", 269);
$a4 = new Articulo(4, "Verano", "Peluche", 700);
$a5 = new Articulo(5, "Navideños", "Librero", 246);
$a6 = new Articulo(6, "Verano", "Peluche", 135);
$a7 = new Articulo(7, "Navideños", "Estuchero", 399);
$a8 = new Articulo(8, "Verano", "Peluche", 699);
$a9 = new Articulo(9, "Navideños", "Mantequillero", 350);
$a10 = new Articulo(10, "Verano", "Peluche", 205);
/*$articulo1->id = $_POST["id"];
$articulo1->categoria = $_POST["categoria"];
$articulo1->nombre = $_POST["nombre"];
$articulo1->precio = $_POST["precio"];*/
$articulos = array($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10);
$json = json_encode($articulos);
echo "Arreglo de objetos convertido a JSON",'<br>',$json,'<br><br>';
$decode = json_decode($json, true);
echo '<table border="1">';
echo '<tr>';
echo 	'<th>Id</th>';
echo 	'<th>Categoria</th>';
echo	'<th>Nombre</th>';
echo	'<th>Precio</th>';
echo '</tr>';
echo '</table>';
foreach($decode as $jsond){
	$cadena_buscada = 'ero';
	$posicion_coincidencia = strpos($jsond["nombre"], $cadena_buscada);
	if($posicion_coincidencia == true && $jsond["categoria"] == 'Navideños' && $jsond["precio"] >= 200 && $jsond["precio"] <= 400){
		?>
		<li>
			<tr>
				<td><?php echo $jsond["id"]?></td>
				<td><?php echo $jsond["categoria"]?></td>
				<td><?php echo $jsond["nombre"]?></td>
				<td><?php echo $jsond["precio"]?></td>
			</tr>
		</li>
	<?php
	}
}
/*if(file_exists('datos.txt')){
	$content = file_get_contents('datos.txt');
	$decoded = json_decode($content);
	$nombre = $decoded->nombre;
	$apellido = $decoded->apellido;
}else{
	$file = @fopen("datos.txt", "w");
    $data = ['nombre' => $nombre, 'apellido' => $apellido];            
    fwrite($file, json_encode($data));
    fclose($file);
    $nombre = null;
    $apellido = null;
}*/
?>