<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$product = Product::create([
			'name'			=>	'Twins Retro Bokshandschoen',
			'description'	=>	'Terug in de tijd met deze Twins Retro Bokshandschoenen. Althans, qua uiterlijk, want deze echt leren bokshandschoen voldoet aan alle eisen van de veeleisende bokser of kickbokser. Deze bokshandschoenen van Twins hebben een uitstekende pasvorm en zorgen voor extra stevigheid bij de pols door de stevige velcro sluiting.',
			'imagePath'		=>	'/images/products/twins-retro-bokshandschoen-1433841497.jpg',
			'price'			=>	'92.50',
			'category_id'	=>	'2',
			'brand_id'		=>	'1',
			'material_id'	=>	'1'
		]);
		$product->sizes()->attach([2,3,4]);
		$product->colors()->attach([5]);


		$product = Product::create([
			'name'			=>	'Twins Bokshandschoen Red Splatter',
			'description'	=>	'De Twins Boxhandschoen Red Splatter is het nieuwste model uit de Fantasy lijn van Twins, het bekend kickbox merk uit Thailand. Deze Twins boxhandschoenen zijn gemaakt van 100% leer en staan garant voor een lange levensduur. Deze bokshandschoenen van Twins hebben een bijzonder mooie print in de vorm van rode spetters en deze bokshandschoenen passen prima bij de zwarte en de witte kickbox scheenbeschermers van Twins.',
			'imagePath'		=>	'/images/products/twins-boxhandschoen-red-splatter-1433841928.jpg',
			'price'			=>	'115.50',
			'category_id'	=>	'2',
			'brand_id'		=>	'1',
			'material_id'	=>	'1'
		]);
		$product->sizes()->attach([2,3,4,5]);
		$product->colors()->attach([2]);


		$product = Product::create([
			'name'			=>	'Venum trainingsbroek Assault',
			'description'	=>	'Venum trainingsbroek Assault is ideaal om te dragen tijdens een training maar is ook heerlijk om casual te dragen of voor thuis op de bank! Deze lekker zittende trainingsbroek is gemaakt van 95% katoen en 5% elastisch materiaal en hierdoor heb je een lekkere pasvorm. Door de wijde pijpen kan je je goed bewegen en dit zorgt voor veel comfort. Dit trainingsbroekje heeft een elastische band met een koord waarmee je het extra goed vast kunt zetten. Het broekje is niet helemaal afgewerkt zodat het die ouderwetse look heeft. Echt een super mooi trainingsbroekje dat geschikt is voor diverse doeleinden!',
			'imagePath'		=>	'/images/products/venum-trainingsbroek-assault-1433857548.jpg',
			'price'			=>	'49.95',
			'category_id'	=>	'3',
			'brand_id'		=>	'2',
			'material_id'	=>	'2'
		]);
		$product->sizes()->attach([1,2,3,4,5]);
		$product->colors()->attach([2,1]);


		$product = Product::create([
			'name'			=>	'Venum T-shirt Challenger',
			'description'	=>	'Het Venum T-shirt Challenger is gemaakt van 100% katoen en dit staat garant voor niet alleen een prettige pasvorm maar ook voor veel duurzaamheid. Het T-shirt blijft mooi in model, ook na vaak wassen op 30 graden. Dit T-shirt van Venum is voorzien van een strakke fit en is gemaakt in Brazilië. Alles aan dit T-shirt ademt kwaliteit uit, van het gebruikte katoen tot en met de bedrukking.',
			'imagePath'		=>	'/images/products/venum-t-shirt-challenger-1433857644.jpg',
			'price'			=>	'39.95',
			'category_id'	=>	'3',
			'brand_id'		=>	'2',
			'material_id'	=>	'4'
		]);
		$product->sizes()->attach([3,4,5,6]);
		$product->colors()->attach([2]);


		$product = Product::create([
			'name'			=>	'Scheenbeschermers Booster BTSG-3',
			'description'	=>	'De BTSG-3 scheenbeschermers van Booster zijn een voordelig instapmodel scheenbeschermers in de lijn van het merk Booster. De BTSG-3 thaiboks- en kickbokshandschoenen zijn gemaakt van synthetisch leer en hebben een one-mold schuimvulling, wreefbeschermer en lange velcro sluiting.',
			'imagePath'		=>	'/images/products/scheenbeschermers-booster-btsg-3-1433857784.jpg',
			'price'			=>	'39.95',
			'category_id'	=>	'4',
			'brand_id'		=>	'4',
			'material_id'	=>	'1'
		]);
		$product->sizes()->attach([2,3,4,5,6]);
		$product->colors()->attach([2]);


		$product = Product::create([
			'name'			=>	'Booster scheenbeschermer Pro',
			'description'	=>	'Deze Booster scheenbeschermer komt uit de Pro Range en staat bekend om de goede pasvorm en stevige vulling. Deze kickbox scheenbeschermer is gemaakt in Thailand en geeft een optimale bescherming van je scheenbenen en wreef. De scheenbeschermers zijn voorzien van een dikke vulling die bestaat uit meerdere lagen schuim. Hierdoor worden harde trappen optimaal gedempt. Door de stevige klittenbandsluiting kan je de scheenbeschermers extra goed vastzetten.',
			'imagePath'		=>	'/images/products/booster-scheenbeschermer-pro-range-v1-1433857880.jpg',
			'price'			=>	'71.95',
			'category_id'	=>	'4',
			'brand_id'		=>	'4',
			'material_id'	=>	'1'
		]);
		$product->sizes()->attach([2,3,4,5]);
		$product->colors()->attach([1,2]);


		$product = Product::create([
			'name'			=>	'Kruisbeschermer XPRT',
			'description'	=>	'De kruisbeschermer van XPRT heeft een voorgevormde cup van plastic voor optimale bescherming van het kruis. De tok is voorzien van een elastische band om de middel. Deze band is gemaakt van duurzaam katoen en zorgt voor een optimale pasvorm. De maat van de band bepaalt de maat van de toque, welke varieert van XS en S voor kinderen tot XL voor grote vechters.',
			'imagePath'		=>	'/images/products/kruisbeschermer-xprt-1433858030.jpg',
			'price'			=>	'9.99',
			'category_id'	=>	'1',
			'brand_id'		=>	'3',
			'material_id'	=>	'4'
		]);
		$product->sizes()->attach([1,2,3,4,5,6]);
		$product->colors()->attach([1]);


		$product = Product::create([
			'name'			=>	'Venum Bitje Predator',
			'description'	=>	'Venum Bitje Predator geeft een maximale bescherming voor het gebit tijdens de training. Dit Venum Bitje, model Predator, wordt gedragen door vele bekende vechters in de UFC waaronder Lyoto Machida. Dit bitje heeft een gelframe waardoor je bent verzekerd van een goede pasvorm. Dit geeft niet alleen veel comfort maar ook een optimale absorptie van de schokken. Ook is er een luchtkanaal zodat je super goed kan blijven ademhalen tijdens de training.',
			'imagePath'		=>	'/images/products/venum-bitje-predator-1433858241.jpg',
			'price'			=>	'19.99',
			'category_id'	=>	'1',
			'brand_id'		=>	'2',
			'material_id'	=>	'4'
		]);
		$product->sizes()->attach([2,3,4]);
		$product->colors()->attach([1]);
	}

}
