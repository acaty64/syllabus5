<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    User::create(
        ['name'=>'Master del módulo',
         'email'=>'ucss.horarios@gmail.com',
         'password' => bcrypt('ucss20505378629'),
        ]);
    User::create(
        ['name'=>'Administrador FCEC Lima',
         'email'=>'ucss.fcec.lim@gmail.com',
         'password' => bcrypt('ucss20505378629'),
        ]);
    User::create(
        ['name'=>'ROMERO ARRESE, HENRY JOSE',
         'email'=>'hromero@ucss.edu.pe',
         'password' => bcrypt('40544375'),
         'cod_doc'=>'001751',
        ]);
    User::create(
        ['name'=>'LUNA RAMIREZ, EDITH NORMA',
         'email'=>'nluna@ucss.edu.pe',
         'password' => bcrypt('10157753'),
         'cod_doc'=>'000384',
        ]);
    User::create(
        ['name'=>'MANRIQUE PINO, OSCAR',
         'email'=>'omanrique@ucss.edu.pe',
         'password' => bcrypt('08740729'),
         'cod_doc'=>'000253',
        ]);
    User::create(
        ['name'=>'MEDINA SIRLOPU, MARTHA',
         'email'=>'mmedina@ucss.edu.pe',
         'password' => bcrypt('25791096'),
         'cod_doc'=>'000113',
        ]);
    User::create(
        ['name'=>'COSTA RODRIGUEZ, JORGE EDUARDO',
         'email'=>'jcosta@ucss.edu.pe',
         'password' => bcrypt('10063247'),
         'cod_doc'=>'000728',
        ]);
    User::create(
        ['name'=>'GARCIA REGAL, RAUL FRANCISCO',
         'email'=>'rgarcia@ucss.edu.pe',
         'password' => bcrypt('07722412'),
         'cod_doc'=>'000474',
        ]);
    User::create(
        ['name'=>'FLORES BALLESTEROS, TEODORO EMILIO',
         'email'=>'eflores@ucss.edu.pe',
         'password' => bcrypt('08612078'),
         'cod_doc'=>'000590',
        ]);
    User::create(
        ['name'=>'MUÑOZ MARTICORENA, WILLIAM AMADEO',
         'email'=>'wmunoz@ucss.edu.pe',
         'password' => bcrypt('08269783'),
         'cod_doc'=>'000007',
        ]);
    User::create(
        ['name'=>'SEMINARIO OLORTIGUE, PABLO HUGO',
         'email'=>'pseminario@ucss.edu.pe',
         'password' => bcrypt('08031444'),
         'cod_doc'=>'000242',
        ]);
    User::create(
        ['name'=>'DE LA ROSA VALVERDE, PEDRO LUIS ENRIQUE',
         'email'=>'pdelarosa@ucss.edu.pe',
         'password' => bcrypt('08737456'),
         'cod_doc'=>'000195',
        ]);
    User::create(
        ['name'=>'RIVERA ROMERO, DAVID SOSIMO',
         'email'=>'drivera@ucss.edu.pe',
         'password' => bcrypt('06613176'),
         'cod_doc'=>'000201',
        ]);
    User::create(
        ['name'=>'QUEZADA MURGA, DANIEL',
         'email'=>'dquezada@ucss.edu.pe',
         'password' => bcrypt('10342134'),
         'cod_doc'=>'000191',
        ]);
    User::create(
        ['name'=>'MONTERROSO CORONADO, CESAR ANTONIO',
         'email'=>'amonterroso@ucss.edu.pe',
         'password' => bcrypt('10271073'),
         'cod_doc'=>'000285',
        ]);
    User::create(
        ['name'=>'TENORIO MENDEZ, WALTER ORLANDO',
         'email'=>'otenorio@ucss.edu.pe',
         'password' => bcrypt('07585542'),
         'cod_doc'=>'000241',
        ]);
    User::create(
        ['name'=>'VELASQUEZ RODRIGUEZ, NORMA CONSTANZA',
         'email'=>'nvelasquez@ucss.edu.pe',
         'password' => bcrypt('08172294'),
         'cod_doc'=>'000441',
        ]);
    User::create(
        ['name'=>'CARRASCO LOPEZ, ILIANOV PABLO',
         'email'=>'icarrasco@ucss.edu.pe',
         'password' => bcrypt('09982771'),
         'cod_doc'=>'000358',
        ]);
    }
}
