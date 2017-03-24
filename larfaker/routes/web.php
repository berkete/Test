<?php
//require __DIR__ .'/vendor/autoload.php';
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//use bheller\ImagesGenerator\ImagesGeneratorProvider;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/customers',function(){
    $faker = Faker\Factory::create('ja_JP');

    $limit = 20;
//    $faker->addProvider(new ImagesGeneratorProvider($faker));
//    $image= $faker->imageGenerator(null, 640, 480, 'png', false, true, '#1f1f1f', '#ff2222');
    echo "<table border='1' align='center'><tr>";
           echo " <th>Name</th><th>Email</th><th>Contact</th><th>password</th></tr>";

          for ($i = 0; $i < $limit; $i++) {
//        echo $faker->name . \', Email Address: \' . $faker->unique()->email . \', Contact No\' . $faker->phoneNumber . $faker->address.$faker->text.\'<br>\';
//

              echo " <tr><td>".$faker->name."</td><td>".$faker->unique()->email."</td><td>".$faker->phoneNumber."</td><td>".$faker->password."</td></tr>";


//        echo'<tr class="danger">
//            <td>$faker->name</td>
//            <td>Moe</td>
//            <td>$faker->email</td>
//          </tr>
//          <tr class="info">
//            <td>$faker->address</td>
//            <td>Dooley</td>
//            <td>july@example.com</td>
//          </tr>
//        </tbody>
//      </table>';


    }
});