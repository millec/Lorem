<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lorem_model extends CI_Model {

    private $base = ["sed", "ut", "perspiciatis", "unde", "omnis", "iste", "natus", "error", "sit", "voluptatem", "accusantium", "doloremque", "laudantium", "totam", "rem", "aperiam", "eaque", "ipsa", "quae", "ab", "illo", "inventore", "veritatis", "et", "quasi", "architecto", "beatae", "vitae", "dicta", "sunt", "explicabo", "nemo", "enim", "ipsam", "voluptatem", "quia", "voluptas", "sit", "aspernatur", "aut", "odit", "aut", "fugit", "sed", "quia", "consequuntur", "magni", "dolores", "eos", "qui", "ratione", "voluptatem", "sequi", "nesciunt", "neque", "porro", "quisquam", "est", "qui", "dolorem", "ipsum", "quia", "dolor", "sit", "amet", "consectetur", "adipisci", "velit", "sed", "quia", "non", "numquam", "eius", "modi", "tempora", "incidunt", "ut", "labore", "et", "dolore", "magnam", "aliquam", "quaerat", "voluptatem", "Ut", "enim", "ad", "minima", "veniam", "quis", "nostrum", "exercitationem", "ullam", "corporis", "suscipit", "laboriosam", "nisi", "ut", "aliquid", "ex", "ea", "commodi", "consequatur", "quis", "autem", "vel", "eum", "iure", "reprehenderit", "qui", "in", "ea", "voluptate", "velit", "esse", "quam", "nihil", "molestiae", "consequatur", "vel", "illum", "qui", "dolorem", "eum", "fugiat", "quo", "voluptas", "nulla", "pariatur", "at", "vero", "eos", "et", "accusamus", "et", "iusto", "odio", "dignissimos", "ducimus", "qui", "blanditiis", "praesentium", "voluptatum", "deleniti", "atque", "corrupti", "quos", "dolores", "et", "quas", "molestias", "excepturi", "sint", "obcaecati", "cupiditate", "non", "provident", "similique", "sunt", "in", "culpa", "qui", "officia", "deserunt", "mollitia", "animi", "id", "est", "laborum", "et", "dolorum", "fuga", "et", "harum", "quidem", "rerum", "facilis", "est", "et", "expedita", "distinctio", "nam", "libero", "tempore", "cum", "soluta", "nobis", "est", "eligendi", "optio", "cumque", "nihil", "impedit", "quo", "minus", "id", "quod", "maxime", "placeat", "facere", "possimus", "omnis", "voluptas", "assumenda", "est", "omnis", "dolor", "repellendus", "temporibus", "autem", "quibusdam", "et", "aut", "officiis", "debitis", "aut", "rerum", "necessitatibus", "saepe", "eveniet", "ut", "et", "voluptates", "repudiandae", "sint", "et", "molestiae", "non", "recusandae", "itaque", "earum", "rerum", "hic", "tenetur", "a", "sapiente", "delectus", "ut", "aut", "reiciendis", "voluptatibus", "maiores", "alias", "consequatur", "aut", "perferendis", "doloribus", "asperiores", "repellat"];
	// private $theme = [
	// 	'creation' => ['Pate Fimo', 'Collier', 'Bracelet', 'Boucle d\'oreilles', 'Bague'],
	// 	'astronomie' => ['Mercure', 'Venus', 'Terre', 'Mars', 'Jupiter', 'Saturne', 'Uranus', 'Neptune', 'Comete', 'Etoile'],
	// ];

	// public function loadTheme($nom){
	// 	if($this->theme[$nom]){
	// 		$this->theme = array_merge($this->base, $this->theme);
	// 	}
	// 	return $theme;
	// }



    // fonction qui va générer un paraghraphe de 100 par defaut dès l'ouverture de la page
	public function genererMot($nbMot = 100) {

		// la var $longueureBase contient l'argument $nbMot
		$longueurBase = $nbMot;
		// $longueurPara = rand(1, 150);

		// on crée une var mots qui sera un tableau. but-> accueillir mots
		$mot = [];

			// faire une boucle. tant qu'on n'a pas atteint le nombre de mot voulu on continu à mettre des mots
			for ($i = 0; $i < $longueurBase; $i++) {
				$indice = rand(0, $longueurBase - 1);
				$mot[] = $this->base[$indice];
			}

		// implode rassemble des éléments d'un tableau en une chaine. séparateur c'est un espace, et le tableau a utilisé $mot
		$mot = implode(' ', $mot);

		// on retourne la string mot
		return $mot;
	}

	public function genererPara($nbParagraphe, $nbMot) {
		$paragraphe = [];

		for ($j = 0; $j < $nbParagraphe; $j++) {
			$paragraphe [] = $this->genererMot($nbMot);
		}

		return $paragraphe;
	}
		
}